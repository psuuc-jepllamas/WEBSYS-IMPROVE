<?php
require_once 'config.php';

require_once 'dbConnect.php';

require_once 'PaypalCheckout.class.php';
$paypal = new PaypalCheckout;

$response = array('status' => 0, 'msg' => 'Transaction Failed!');

if (!empty($_POST['paypal_order_check']) && !empty($_POST['order_id'])) {
    try {
        $order = $paypal->validate($_POST['order_id']);
    } catch (Exception $e) {
        $api_error = $e->getMessage();
    }

    if (!empty($order)) {
        $order_id = $order['id'];
        $intent = $order['intent'];
        $order_status = $order['status'];
        $order_time = date("Y-m-d H:i:s", strtotime($order['create_time']));

        if (!empty($order['purchase_units'][0])) {
            $purchase_unit = $order['purchase_units'][0];

            $item_number = $purchase_unit['custom_id'];
            $item_name = $purchase_unit['description'];

            if (!empty($purchase_unit['amount'])) {
                $currency_code = 'PHP';

                $amount_value = $purchase_unit['amount']['value'];
            }

            if (!empty($purchase_unit['payments']['captures'][0])) {
                $payment_capture = $purchase_unit['payments']['captures'][0];
                $transaction_id = $payment_capture['id'];
                $payment_status = $payment_capture['status'];
            }

            if (!empty($purchase_unit['payee'])) {
                $payee = $purchase_unit['payee'];
                $payee_email_address = $payee['email_address'];
                $merchant_id = $payee['merchant_id'];
            }
        }

        if (!empty($order_id) && $order_status == 'COMPLETED') {
            $sqlQ = "SELECT id FROM transactions WHERE transaction_id = ?";
            $stmt = $conn->prepare($sqlQ);
            $stmt->bind_param("s", $transaction_id);
            $stmt->execute();
            $stmt->bind_result($row_id);
            $stmt->fetch();

            $payment_id = 0;
            if (!empty($row_id)) {
                $payment_id = $row_id;
            } else {
                $sqlQ = "INSERT INTO transactions (item_number, item_name, item_price, item_price_currency, payer_id, payer_name, payer_email, payer_country, merchant_id, merchant_email, order_id, transaction_id, paid_amount, paid_amount_currency, payment_source, payment_status, created, modified) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())";
                $stmt = $conn->prepare($sqlQ);
                $stmt->bind_param("ssdsssssssssdssss", $item_number, $item_name, $itemPrice, $currency_code, $payer_id, $payer_full_name, $payer_email_address, $payer_country_code, $merchant_id, $payee_email_address, $order_id, $transaction_id, $amount_value, $currency_code, $payment_source, $payment_status, $order_time);
                $insert = $stmt->execute();

                if ($insert) {
                    $payment_id = $stmt->insert_id;
                }
            }

            if (!empty($payment_id)) {
                $ref_id_enc = base64_encode($transaction_id);
                $response = array('status' => 1, 'msg' => 'Transaction completed!', 'ref_id' => $ref_id_enc);
            }
        }
    } else {
        $response['msg'] = $api_error;
    }
}
echo json_encode($response);
?>

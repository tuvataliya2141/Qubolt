<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

    /**
     * Get secure key
     */
    public function getSecureKey() {
        $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $stamp = time();
        $secure_key = $pre = $post = '';
        for ($p = 0; $p <= 10; $p++) {
            $pre .= substr($string, rand(0, strlen($string) - 1), 1);
        }

        for ($i = 0; $i < strlen($stamp); $i++) {
            $key = substr($string, substr($stamp, $i, 1), 1);
            $secure_key .= (rand(0, 1) == 0 ? $key : (rand(0, 1) == 1 ? strtoupper($key) : rand(0, 9)));
        }

        for ($p = 0; $p <= 10; $p++) {
            $post .= substr($string, rand(0, strlen($string) - 1), 1);
        }
        return $pre . '-' . $secure_key . $post;
    }

    /**
     * Array sorting
     */
    public function aasort(&$array, $key, $order) {
        $sorter = array();
        $ret = array();
        reset($array);
        foreach ($array as $ii => $va) {
            $sorter[$ii] = $va->$key;
        }
        if ($order == 'ASC')
            asort($sorter);
        else
            arsort($sorter);
        foreach ($sorter as $ii => $va) {
            $ret[$ii] = $array[$ii];
        }
        return $array = array_values($ret);
    }

    /**
     * Send Push Notification
     */
    function sendPush($data, $message_array, $push_data = array()) {

        //require_once(APPPATH . 'libraries/push/ApnsPHP/Autoload.php');

        $device_type = $data['device_type'];
        $register_id = $data['register_id'];
        $badge = $data['badge'] + 1;

        if ($device_type == 1) {
            $apiKey = "AIzaSyCdjkARd1KT__rQKhokX3nSuzOiPfUrUR4";

            $registrationIDs = array($register_id);

            // Message to be sent
            //$message = "Push notification testing by hemal"; 
            // Set POST variables
            //$url = 'https://android.googleapis.com/gcm/send';
            $url = 'https://fcm.googleapis.com/fcm/send';

            $fields = array(
                'registration_ids' => $registrationIDs,
                'data' => $message_array,
            );

            $headers = array(
                'Authorization: key=' . $apiKey,
                'Content-Type: application/json'
            );

            // Open connection
            $ch = curl_init();

            // Set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

            // Execute post
            $result = curl_exec($ch);
            //print_r($result);
            // Close connection
            curl_close($ch);
        }

        if ($device_type == 2) {
            // For I-Phone push	

            $return_array = array();
            $sandbox = true;
            $return_array['success'] = 0;
            // Put your device token here (without spaces):
            //$deviceToken = '42b9fe76ec620caef106eb880769884163b563120f4fa9d6f9d452df150c82e2';
            // Put your private key's passphrase here:
            $passphrase = 'pushchat';

            // Put your alert message here:
            //$message = 'My first push notification!';

            $deviceToken = $register_id;
            $message = $message_array['message'];

            $ctx = stream_context_create();
            stream_context_set_option($ctx, 'ssl', 'local_cert', APPPATH . 'libraries/push/pushcert.pem');

            //stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
            // Open a connection to the APNS server
            if ($sandbox)
                $gateway_url = 'ssl://gateway.sandbox.push.apple.com:2195';
            else
                $gateway_url = 'ssl://gateway.push.apple.com:2195';

            $fp = stream_socket_client(
                    $gateway_url, $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);

            if (!$fp) {
                $return_array['message'] = "Failed to connect: $err $errstr" . PHP_EOL;
            } else {
                //echo 'Connected to APNS' . PHP_EOL;
            }
            // Create the payload body
            $body['aps'] = array(
                'alert' => $message,
                'sound' => 'default',
                'badge' => $badge,
                'data' => $push_data
            );

            //$message_array['sales_flag'] $message_array['inbox_flag']
            // Encode the payload as JSON
            $payload = json_encode($body);

            // Build the binary notification
            $msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

            // Send it to the server
            $result = fwrite($fp, $msg, strlen($msg));
            fclose($fp);
            //print_r($result);die;
            if (!$result) {
                $this->updateDeviceById(array('badge' => $badge), $data['id']);
                $return_array['message'] = 'Message not delivered' . PHP_EOL;
            } else {
                $return_array['success'] = 1;
                $return_array['message'] = 'Message successfully delivered' . PHP_EOL;
            }
            return $return_array;
            // Close the connection to the server
        }
    }

    /**
     * Send Email
     */
    function sendMail($toEmail, $subject, $mail_body, $fromEmail = '', $fromName = '', $ccEmails = '', $replyTo = '') {
        $this->load->library('email');
        if (!$fromEmail)
            $fromEmail = 'infovcard@gmail.com';

        if (!$fromName)
            $fromName = 'InfoVCard';

        echo $toEmail . "<br><br>";
        echo $subject . "<br><br>";
        echo $mail_body . "<br><br>";

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://md-in-24.webhostbox.net';
        $config['mail_path'] = 'ssl://md-in-24.webhostbox.net';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '30';
        $config['smtp_user'] = 'sixsigmamap210@gmail.com';
        $config['smtp_pass'] = '$ix$igma@210@';
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from($fromEmail, $fromName);
        $this->email->to($toEmail);
        $this->email->subject($subject);
        $this->email->message($mail_body);

        if ($replyTo != "")
            $this->email->reply_to($replyTo, '');

        if ($ccEmails != "")
            $this->email->cc($ccEmails);
        echo "<pre>";
        print_r($this->email->send()) . "<br><br>";
        echo $this->email->print_debugger();
        die;
        return $this->email->send();
    }

    function sendmails($subject, $message) {
        require_once('PHPMailer-master/PHPMailerAutoload.php');

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        $mail->Host = 'mail.qubolt.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "sales@qubolt.com";
        $mail->Password = 'Testing123';
        $mail->setFrom('sales@qubolt.com', 'Qubolt Team');
        $mail->addAddress('sales@qubolt.com');
        $mail->Subject = $subject;

        $mailBodyForAdmin = $message;

        $mail->msgHTML($mailBodyForAdmin);

        return $mail->send();
    }

    function RandomString($length = 8) {
        //$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function RandomStringTokan($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //$characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function sendsms($phone, $message) {
        $url = 'http://dnd.msgtools.in/api/mt/SendSMS?user=infovcard&password=infovcard&senderid=INFOVC&channel=Trans&DCS=0&flashsms=0&number=' . $phone . '&text=' . $message . '&route=01';

        $url2 = str_replace(" ", "%20", $url);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url2,
            CURLOPT_RETURNTRANSFER => 1,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function generatePassword() {
        $post = '';
        $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for ($p = 0; $p <= 7; $p++) {
            $post .= substr($string, rand(0, strlen($string) - 1), 1);
        }
        return $post;
    }

}

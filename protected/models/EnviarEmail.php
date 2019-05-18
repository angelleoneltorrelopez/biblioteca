<?php

Yii::import('application.extensions.phpmailer.JPhpMailer');
class EnviarEmail{
    public function enviar(array $from, array $to, $subject, $message){
        //require_once('class.phpmailer.php');
        
        $mail = new JPhpMailer();
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587 465
        $mail->IsHTML(true);

        $mail->Username = "bibliotecaseminario10@gmail.com";
        $mail->Password = "seminario10";
        $mail->SetFrom($from[0], $from[1]);
        $mail->Subject = utf8_decode($subject);

        $mail->MsgHTML($message);
        $mail->AddAddress($to[0], $to[1]);
        
         if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
            echo "Message has been sent";
         }

/*

        $mail = new JPhpMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = 'melanievane@gmail.com';
        $mail->Password = 'modl.@6991';
        $mail->SetFrom('melanievane96@gmail.com', $from[1]);
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->AddAddress($to[0], $to[1]);
        $mail->Send();*/
        
    }
}
/*
$mail->SMTPAuth = true;
$mail->Username = 'yourname@163.com';
$mail->Password = 'yourpassword';
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
*/
//utilizar utf8_decode() para que no muestre caracteres extra;os

//utilizarlo asi

/*
$mail=new EnviarEmail();
$mail->enviar(
    array(Yii::app()->params['adminEmail'],Yii::app()->name),//from
    array($model->email,$model->nombre),//to
    $subject,//estas variables se declaran antes 
    $message//son STRINGS
);*/
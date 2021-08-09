<?php

if (isset($_POST['enviarf'])){
    if(!empty($_POST['NamVal']) && !empty($_POST['TelVal']) 
    && !empty($_POST['CorreoVal']) && !empty($_POST['MsgVal'])){
        $name = $_POST['NamVal'];
        $tel = $_POST['TelVal'];
        $email = $_POST['CorreoVal'];
        $msg = $_POST['MsgVal'];
        $header = "From: aguapanelitasconamor@gmail.com" . "\r\n";
        $header = "Reply-To: aguapanelitasconamor@gmail.com" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();
        $mail = mail($email, $name, $tel, $msg, $header);
        if($mail){
            echo "<h4>Email Enviado Exitoxamente!</h4>";
        }
    }
}
?>
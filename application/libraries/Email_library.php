<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email_library
{
    public function __construct()
    {
        require APPPATH . 'libraries/PHPMailer/src/Exception.php';
        require APPPATH . 'libraries/PHPMailer/src/PHPMailer.php';
        require APPPATH . 'libraries/PHPMailer/src/SMTP.php';
    }
    
    public function appointment_enquiry($arr)
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'mail.medi-clinics.in';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@medi-clinics.in';
            $mail->Password   = 'dmehw7MUj2PY';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom($arr['email'], $arr['name']);
            $mail->addAddress('info@medi-clinics.in'); 
            
            //template
            $html = file_get_contents(APPPATH.'views/templates/appointment_template.html');
            
            $html = str_replace('%Name%', $arr['name'], $html);
            $html = str_replace('%Email%', $arr['email'], $html);
            $html = str_replace('%Phone%', $arr['phone'], $html);
            $html = str_replace('%Date%', date('d-m-Y H:i:s A', strtotime($arr['date'])), $html);
            $html = str_replace('%MSG%', $arr['msg'], $html);
            
            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Mediclinics Appointment';
            $mail->Body    = $html;

            $mail->send();
            return true;
        } catch (Exception $e) {
            // echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
    }
    
    public function patient_confirmation_email($arr)
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'mail.medi-clinics.in';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@medi-clinics.in';
            $mail->Password   = 'dmehw7MUj2PY';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom("info@medi-clinics.in", 'Appointment confirmation');
            $mail->addAddress($arr['email']);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Appointment confirmation';
            $mail->Body    = "<h3>Hello ".$arr['name'].",</h3>
                             <p>Your appointment on <b>".date('d-m-Y H:i:s A', strtotime($arr['date']))."</b> with Mediclinics is confirmed. Thank you</p>";

            $mail->send();
            return true;
        } catch (Exception $e) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
    }
    ///////////////////////////////////////////////////////
    
    public function contact_enquiry($arr)
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'mail.medi-clinics.in';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@medi-clinics.in';
            $mail->Password   = 'dmehw7MUj2PY';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom($arr['email'], $arr['name']);
            $mail->addAddress('info@medi-clinics.in'); 
            
            //template
            $html = file_get_contents(APPPATH.'views/templates/contact_template.html');
            
            $html = str_replace('%Name%', $arr['name'], $html);
            $html = str_replace('%Email%', $arr['email'], $html);
            $html = str_replace('%MSG%', $arr['msg'], $html);
            
            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Contact Page Enquiry';
            $mail->Body    = $html;

            $mail->send();
            return true;
        } catch (Exception $e) {
            // echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
    }
    
    public function confirmation_email($arr)
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'mail.medi-clinics.in';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@medi-clinics.in';
            $mail->Password   = 'dmehw7MUj2PY';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom("info@medi-clinics.in", 'Enquiry confirmation');
            $mail->addAddress($arr['email']);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Enquiry confirmation';
            $mail->Body    = "<h3>Hello ".$arr['name'].",</h3>
                             <p>Your enquiry has been received. Thank you</p>";

            $mail->send();
            return true;
        } catch (Exception $e) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
    }
    ///////////////////////////////////////////////////////
}

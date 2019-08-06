<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function index(){
        return 5;
        // $email_to = "andyvviiar@andyliu.cloud";
        // $email_subject = "Someone contatct you!";
    
        // // validation expected data exists
        // if(empty($_POST['first_name']) ||
        //     empty($_POST['last_name']) ||
        //     empty($_POST['email']) ||
        //     empty($_POST['comments'])) {
        //     echo 2;
        //     die();       
        // }
    
        // $first_name = $_POST['first_name']; // required
        // $last_name = $_POST['last_name']; // required
        // $email_from = $_POST['email']; // required
        // $telephone = $_POST['telephone']; // not required
        // $comments = $_POST['comments']; // required
        
        //   $error_message = "";
        //   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        
        // if(!preg_match($email_exp,$email_from)) {
        //   $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        // }
        
        //   $string_exp = "/^[A-Za-z .'-]+$/";
        
        // if(!preg_match($string_exp,$first_name)) {
        //   $error_message .= 'The First Name you entered does not appear to be valid.<br />';
        // }
        
        // if(!preg_match($string_exp,$last_name)) {
        //   $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
        // }
        
        // if(strlen($comments) < 2) {
        //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
        // }
        
        // if(strlen($error_message) > 0) {
        //   died($error_message);
        // }
        
        // $email_message = "Form details below.\n\n";
        
        
        // function clean_string($string) {
        // $bad = array("content-type","bcc:","to:","cc:","href");
        // return str_replace($bad,"",$string);
        // }
        
        
        
        // $email_message .= "First Name: ".clean_string($first_name)."\n";
        // $email_message .= "Last Name: ".clean_string($last_name)."\n";
        // $email_message .= "Email: ".clean_string($email_from)."\n";
        // $email_message .= "Telephone: ".clean_string($telephone)."\n";
        // $email_message .= "Comments: ".clean_string($comments)."\n";
        
        // // email headers
        // $headers = 'From: '.$email_from."\r\n".
        // 'Reply-To: '.$email_from."\r\n" .
        // 'X-Mailer: PHP/' . phpversion();
        // if(@mail($email_to, $email_subject, $email_message, $headers)){
        // echo 5;
        // }else{
        // echo 1;
        // }
    }
}

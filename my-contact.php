<?php

/**
 * Plugin Name:       My Contact Us
 * Description:       This is basic contact us form which has email functionalization.
 * Shortcode:         my_contact
 * Version:           1
 * Author:            Uday Panda
 */
function my_contact_plugin(){
   $content ='';
   $content .='<form method="post" action="http://poddarfarms.com/?page_id=1080">';

   $content .='<label for="name">Name:</label>';
   $content .='<input type="text" name="name" placeholder="Enter Your Name" class="form-cotrol">';

   $content .='<label for="email">Email:</label>';
   $content .='<input type="email" name="email" placeholder="Enter Your Email" class="form-cotrol">';

   $content .='<label for="Question">Question:</label>';
   $content .='<textarea name="questions" placeholder="Enter Your Question" class="form-cotrol"></textarea>';

   $content .='<input type="submit" name="submit" class="btn btn-md btn-primary" value="Send Your Information">';

   $content .='</form>';

   return $content;
}
add_shortcode('my_contact','my_contact_plugin');

function contact_capture(){
   
    if(isset($_POST['submit']))
    {
       
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_text_field($_POST['email']);
        $questions = sanitize_textarea_field($_POST['questions']);

        $to ='udaypanda3230@gmai.com';
        $subject ='Query From User';
        $messege =$name . ' - ' . $email . ' - ' . $questions;
        
        wp_mail($to,$subject,$messege);
    }
}
add_action('wq_head','contact_capture');
?>
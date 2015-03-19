<?php

function emailIsValid($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) != false) {
        return true;
    } else {
        return false;
    }
}

function validPhone($phone) {
    $error_message = '';
    $justNums = preg_replace("/[^0-9]/", '', $phone);
    $phone = $justNums;
    //eliminate leading 1 if its there
    if (strlen($phone) == 11) {
        $phone = preg_replace("/^1/", '', $phone);
    }
    //if we have 10 digits left, it's probably valid.
    if (strlen($phone) != 10) {
        $error_message .= "*Error.<br />";
    }

    if (!is_numeric($phone)) {
        $error_message .= "*Error2.<br />";
    }
    if (empty($error_message)) {
        return TRUE;
    }
}
function displayErrorMsgs( $error_message ) {
     if ( is_array($error_message) && count($error_message) > 0 ) {
        foreach ($error_message as $err) {
          echo '<p>', $err, '</p>'; 
        }                    
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


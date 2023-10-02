<?php
error_reporting(E_ALL ^ E_WARNING);
include_once 'path.php';
require_once MODEL_PATH . 'operations.php';

if (!empty($_POST["email"])) {
    echo available('user_email', 'Email');
}


function available($attr, $text)
{
    $sql = "SELECT * FROM user WHERE user_email = '$_POST[email]' ";
    $attribute_availability = select_rows($sql)[0];

    if (!empty($attribute_availability)) {
        echo "<span style='color:red'> " . $text . " already exists .</span>";
        echo "<script>$('#add').prop('disabled',true);</script>";
    } else {
        echo "<span style='color:green'> " . $text . " available for Registration .</span>";
        echo "<script>$('#add').prop('disabled',false);</script>";
    }
}

if (!empty(security("therapist_email"))) {
    echo therapist_available('therapist_email', 'Email');
}


function therapist_available($attr, $text)
{
    $attribute_availability = get_therapist(security("therapist_email"));

    if (!empty($attribute_availability)) {
        echo "<span style='color:red'> " . $text . " already exists .</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else {
        echo "<span style='color:green'> " . $text . " available for Registration .</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}

if (!empty(security("corporate_email"))) {
    echo corporate_available('corporate_email', 'Email');
}


function corporate_available($attr, $text)
{
    $attribute_availability = get_corporate(security("corporate_email"));

    if (!empty($attribute_availability)) {
        echo "<span style='color:red'> " . $text . " already exists .</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else {
        echo "<span style='color:green'> " . $text . " available for Registration .</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}
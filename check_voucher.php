<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'path.php';
require_once MODEL_PATH . 'operations.php';


if (!empty($_POST["voucher"])) {
    echo voucher_available('voucher', 'Voucher');
}


function voucher_available($attr, $text)
{
    // $attribute_availability = get_doctor($_POST["voucher"], 'doctor_email');
    $sql = "SELECT * FROM voucher WHERE voucher_code = '$_POST[voucher]' AND voucher_used = 'no' ";
    $row = select_rows($sql);
    if (!empty($row)) {
        echo 'yes';
    } else {
        echo 'no';
    }
}


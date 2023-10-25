<?php
require_once '../path.php';
require_once MODEL_PATH . "operations.php";
$conn = connect();
if (isset($_GET['id'])) {
    $id = security('id','GET');
 }
 
        
$corporate = select_rows("SELECT * FROM corporate WHERE corporate_id = '$id' ");
$vouchers = select_rows("SELECT * FROM voucher WHERE corporate_id = '$id' AND voucher_used = 'yes'");
$voucher_codes = [];
foreach ($vouchers as $voucher) {
    $voucher_codes[] = $voucher['voucher_code'];
}
$arr['vouchers'] = implode(", ", $voucher_codes);  // Join all voucher codes with a comma separator
$arr['request_id'] = create_idd('request', 'request_id');
$arr['corporate_id'] = $id;  
build_sql_insert('request', $arr);


    $co  = '<p style="font-family:Poppins, sans-serif;"> ';
    $co  .= 'Hello, <br>';
    $co  .= 'This is a request email from corporate ' . $corporate[0]['corporate_name'] . '<br>';
    $co  .= 'The corporate is requesting to see the details of the employees who used their corporate vouchers:<br>';

    foreach ($vouchers as $voucher) {
        $co .= '<b>'. $voucher['voucher_code'] .'<br>';
    }
    $cemail = 'psychxglobal@gmail.com';
    email($cemail, APP_NAME . " Corporate Voucher Use", APP_NAME, $co);

    header("Location: view_used_vouchers");

    function create_idd($table, $id)
    {
        $date_today = date('Ymd');
    
        $table_prifix = array(
            'request'             => 'RQT' . $date_today,
            
        );
    
        $random_str = $table_prifix[$table] . rand_str();
    
        $get_id     = get_ids($table, $id, $random_str);
    
        while ($get_id == true) {
            $random_str = $table_prifix[$table] . rand_str();
            $get_id     = get_ids($table, $id, $random_str);
        }
        return $random_str;
    }
    
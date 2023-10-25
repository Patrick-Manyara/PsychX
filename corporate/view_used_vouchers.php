<?php
$page = 'view_used_vouchers';
require_once '../path.php';
include_once 'header.php';
$vouchers = select_rows("SELECT * FROM voucher WHERE corporate_id = '$_SESSION[corporate_id]' AND voucher_used = 'yes'");
$corporate = select_rows("SELECT * FROM corporate WHERE corporate_id = '$_SESSION[corporate_id]' ")[0]['corporate_name'];
$num_columns = 3;

$column_indexes = range(0, $num_columns - 1);

// Create an array of column definition objects
$column_defs = array();
for ($i = 0; $i < $num_columns; $i++) {
    $column_defs = array(
        array('data' => '', 'title' => 'id'),
        array('data' => 'col_' . $i, 'title' => 'id'),
        array('data' => 'voucher_code', 'title' => 'Code'),
    );
}
?>
 $co  = '<p style="font-family:Poppins, sans-serif;"> ';
    $co  .= 'Hello, <br>';
    $co  .= 'This is a request email from corporate ' . $corporate . '<br>';
    $co  .= 'The corporate is requesting to see the details of the employees who used their corporate vouchers<br>';
    $cemail = 'fionawekulo@gmail.com';
    email($cemail, APP_NAME . " Corporate Voucher Use", APP_NAME, $co);
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="send_email_request" class="btn btn-success">
                                    Request to view
                                    </a></h4>
    

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-basic table border-top">
                <thead>
                    <tr>
                        <th></th>
                        <th>id</th>
                        <th>Code</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt = 1;
                    foreach ($vouchers as $voucher) {
                        $voucher_id = encrypt($voucher['voucher_id']);
                    ?>
                        <tr>
                            <td> </td>
                            <td><?= $cnt ?></td>
                            <td> <?= $voucher['voucher_code'] ?> </td>
                            
                        </tr>
                    <?php
                        $cnt++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>



</div>
<!-- / Content -->


<?php
include_once 'footer.php';
?>
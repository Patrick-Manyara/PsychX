<?php
$page = 'view_used_vouchers';
require_once '../path.php';
include_once 'header.php';
$vouchers = select_rows("SELECT * FROM voucher WHERE corporate_id = '$_SESSION[corporate_id]' AND voucher_used = 'yes'");
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
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">
        <a href="send_email_request?id=<?php echo encrypt($_SESSION['corporate_id']); ?>" class="btn btn-success">
            Request to view
        </a>
    </span>
</h4>

    

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
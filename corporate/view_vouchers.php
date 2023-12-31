<?php
$page = 'vouchers';
require_once '../path.php';
include_once 'header.php';
$vouchers = select_rows("SELECT * FROM voucher WHERE corporate_id = '$_SESSION[corporate_id]' ");

$num_columns = 7;

$column_indexes = range(0, $num_columns - 1);

// Create an array of column definition objects
$column_defs = array();
for ($i = 0; $i < $num_columns; $i++) {
    $column_defs = array(
        array('data' => '', 'title' => 'id'),
        array('data' => 'col_' . $i, 'title' => 'id'),
        array('data' => 'voucher_code', 'title' => 'Code'),
        array('data' => 'voucher_used', 'title' => 'Used'),
        array('data' => 'voucher_paid', 'title' => 'Paid'),
        array('data' => 'voucher_date_created', 'title' => 'Date Created'),
        array('data' => '', 'title' => 'Action')
    );
}
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">DataTables /</span> Basic</h4>

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-basic table border-top">
                <thead>
                    <tr>
                        <th></th>
                        <th>id</th>
                        <th>Code</th>
                        <th>Used</th>
                        <th>Paid</th>
                        <th>Date Created</th>
                        <th>Action</th>
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
                            <td> <?= $voucher['voucher_used'] ?> </td>
                            <td> <?= $voucher['voucher_date_created'] ?> </td>
                            <td>
                                <?php
                                if ($voucher['voucher_paid'] == 'not_paid') { ?>
                                    <a href="pay?id=<?= encrypt($voucher['voucher_batch']) ?>" class="btn btn-info">
                                        Pay Now
                                    </a>
                                <?php
                                } else {
                                    echo 'Paid';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="voucher?id=<?= $voucher_id ?>" class="btn btn-success">
                                    <i class='bx bx-edit'></i>
                                </a>
                                <a href="<?= delete_url ?>id=<?= $voucher_id ?>&table=<?= encrypt('voucher') ?>&page=<?= encrypt('view_vouchers') ?>&method=simple_admin" class="btn btn-danger">
                                    <i class='bx bxs-folder-minus'></i>
                                </a>
                            </td>
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
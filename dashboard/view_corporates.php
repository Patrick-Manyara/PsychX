<?php
$page = 'all_corporates';
require_once '../path.php';
include_once 'header.php';
$corporates = get_all('corporate');

$num_columns = 8;

$column_indexes = range(0, $num_columns - 1);

// Create an array of column definition objects
$column_defs = array();
for ($i = 0; $i < $num_columns; $i++) {
    $column_defs = array(
        array('data' => '', 'title' => 'id'),
        array('data' => 'col_' . $i, 'title' => 'id'),
        array('data' => 'corporate_name', 'title' => 'Name'),
        array('data' => 'corporate_email', 'title' => 'Email'),
        array('data' => 'corporate_phone', 'title' => 'Phone'),
        array('data' => 'corporate_address', 'title' => 'Status'),
        array('data' => 'corporate_gender', 'title' => 'Vouchers'),
        array('data' => '', 'title' => 'Action')
    );
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">View</span> Corporates</h4>

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-basic table border-top">
                <thead>
                    <tr>
                        <th></th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Vouchers</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt = 1;
                    foreach ($corporates as $corporate) {
                        $corporate_id = encrypt($corporate['corporate_id']);
                        $row = select_rows("SELECT * FROM  voucher WHERE corporate_id = '$corporate[corporate_id]' ");
                    ?>
                        <tr>
                            <td></td>
                            <td><?= $cnt ?></td>
                            <td> <?= $corporate['corporate_name'] ?> </td>
                            <td> <?= $corporate['corporate_email'] ?> </td>
                            <td> <?= $corporate['corporate_phone'] ?> </td>
                            <td><?php
                                if ($corporate['corporate_status'] == 'active') { ?>
                                    <a href="../model/status?id=<?= $corporate_id ?>&table=<?= encrypt('corporate') ?>&page=<?= encrypt('view_corporates') ?>" class="btn btn-danger">
                                        Deactivate
                                    </a>
                                <?php
                                } else { ?>
                                    <a href="../model/status?id=<?= $corporate_id ?>&table=<?= encrypt('corporate') ?>&page=<?= encrypt('view_corporates') ?>" class="btn btn-info">
                                        Activate
                                    </a>
                                <?php
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if (sizeof($row) > 0) { ?>
                                    <a href="view_vouchers?id=<?= $corporate_id ?>" class="btn rounded-pill btn-label-success">
                                        View
                                    </a>
                                <?php
                                } else {
                                    echo 'None';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?= admin_url ?>corporate?id=<?= $corporate_id ?>" class="btn btn-success">
                                    <i class='bx bx-edit'></i>
                                </a>
                                <a href="<?= delete_url ?>id=<?= $corporate_id ?>&table=<?= encrypt('corporate') ?>&page=<?= encrypt('view_corporates') ?>&method=corporate" class="btn btn-danger">
                                    <i class='bx bx-trash'></i>
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
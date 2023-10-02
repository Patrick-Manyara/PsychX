<?php
$page        = 'approved-therapists';
$header_name = 'Therapists';

require_once '../path.php';
require_once 'header.php';
$therapists = get_all_approved_therapists();

$num_columns = 7;

$column_indexes = range(0, $num_columns - 1);

// Create an array of column definition objects
$column_defs = array();
for ($i = 0; $i < $num_columns; $i++) {
    $column_defs = array(
        array('data' => '', 'title' => 'S.no'),
        array('data' => 'col_' . $i, 'title' => 'S.no'),
        array('data' => 'therapist_image', 'title' => 'Image'),
        array('data' => 'therapist_name', 'title' => 'Name'),
        array('data' => 'therapist_email', 'title' => 'Email'),
        array('data' => 'therapist_phone', 'title' => 'Phone'),
        array('data' => 'therapist_address', 'title' => 'Address'),
        array('data' => '', 'title' => 'Action')
    );
}

?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Approved</span> Therapists</h4>

    <!--  -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-basic table border-top">
                <thead>
                    <tr>
                        <th></th>

                        <th>S.no</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt = 1;
                    foreach ($therapists as $therapist) {
                        $therapist_id = encrypt($therapist['therapist_id']);
                    ?>
                        <tr>
                            <td></td>
                            <td><?= $cnt ?></td>
                            <td>
                                <img alt="therapist image" src="<?= file_url . $therapist['therapist_image'] ?>" style="width:100px; height:auto; border-radius:5px;" title="<?= $therapist['therapist_name'] ?>">
                            </td>
                            <td> <?= $therapist['therapist_name'] ?> </td>
                            <td> <?= $therapist['therapist_email'] ?> </td>
                            <td> <?= $therapist['therapist_phone'] ?> </td>
                            <td> <?= $therapist['therapist_address'] ?> </td>
                            <td>

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
<!-- container-fluid -->

<!-- End of Main Content -->
<?php include_once 'footer.php'; ?>
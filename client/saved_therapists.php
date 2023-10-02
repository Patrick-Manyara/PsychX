<?php
$page = 'all_therapists';
require_once '../path.php';
include_once 'header.php';
$therapists = get_saved_therapists('user_id', $_SESSION['user_id']);

$num_columns = 6;

$column_indexes = range(0, $num_columns - 1);

// Create an array of column definition objects
$column_defs = array();
for ($i = 0; $i < $num_columns; $i++) {
    $column_defs = array(
        array('data' => '', 'title' => 'id'),
        array('data' => 'col_' . $i, 'title' => 'id'),
        array('data' => 'therapist_image', 'title' => 'Image'),
        array('data' => 'therapist_name', 'title' => 'Name'),
        array('data' => 'therapist_gender', 'title' => 'Gender'),
        array('data' => '', 'title' => 'Action')
    );
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">View</span> Therapists</h4>

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-basic table border-top">
                <thead>
                    <tr>
                        <th></th>

                        <th>id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt = 1;
                    foreach ($therapists as $therapist) {
                        $therapist_id       = encrypt($therapist['therapist_id']);
                        $therapist_name     = get_by_id('therapist', $therapist['therapist_id'])['therapist_name'];
                        $therapist_image    = get_by_id('therapist', $therapist['therapist_id'])['therapist_image'];
                        $therapist_gender   = get_by_id('therapist', $therapist['therapist_id'])['therapist_gender'];
                    ?>
                        <tr>
                            <td></td>
                            <td><?= $cnt ?></td>
                            <td>
                                <img alt="therapist image" src="<?= file_url . $therapist_image ?>" style="width:100px; height:auto; border-radius:5px;" title="<?= $therapist_name ?>">
                            </td>
                            <td> <?= $therapist_name ?> </td>
                            <td> <?= $therapist_gender ?> </td>
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
<!-- / Content -->


<?php
include_once 'footer.php';
?>
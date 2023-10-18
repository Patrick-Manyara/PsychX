<?php
$page = 'members';
require_once '../path.php';
include_once 'header.php';
$employees = select_rows("SELECT * FROM employee ");

$num_columns = 7;

$column_indexes = range(0, $num_columns - 1);

// Create an array of column definition objects
$column_defs = array();
for ($i = 0; $i < $num_columns; $i++) {
    $column_defs = array(
        array('data' => '', 'title' => 'id'),
        array('data' => 'col_' . $i, 'title' => 'id'),
        array('data' => 'employee name', 'title' => 'Employee name'),
        array('data' => 'employee number', 'title' => 'Employee number'),
        array('data' => 'Phone number', 'title' => 'Phone number'),
        array('data' => 'date created', 'title' => 'Date Created'),
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
                        <th></th>
                        <th>Employee Name</th>
                        <th>Employee Number</th>
                        <th>Phone number</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt = 1;
                    foreach ($employees as $employee) {
                        $employee_id = encrypt($employee['employee_id']);
                    ?>
                        <tr>
                            <td> </td>
                            <td><?= $cnt ?></td>
                            <td> <?= $employee['employee_name'] ?> </td>
                            <td> <?= $employee['employee_number'] ?> </td>
                            <td> <?= $employee['employee_phone'] ?> </td>
                            <td> <?= $employee['employee_date_created'] ?> </td>
                            <td>
                                <a href="employee?id=<?= $employee_id ?>" class="btn btn-success">
                                    <i class='bx bx-edit'></i>
                                </a>
                                <a href="<?= delete_url ?>id=<?= $employee_id ?>&table=<?= encrypt('employee') ?>&page=<?= encrypt('view_members') ?>&method=simple_admin" class="btn btn-danger">
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
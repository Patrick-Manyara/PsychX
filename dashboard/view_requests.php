<?php
$page = 'view_requests';
require_once '../path.php';
include_once 'header.php';

$vouchers = select_rows("SELECT * FROM request");
//cout($vouchers);

$num_columns = 6;

$column_indexes = range(0, $num_columns - 1);

// Create an array of column definition objects
$column_defs = array();
for ($i = 0; $i < $num_columns; $i++) {
    $column_defs = array(
        array('data' => '', 'title' => 'id'),
        array('data' => 'corporate_name', 'title' => 'Corporate'),
        array('data' => 'voucher_code', 'title' => 'Code'),
        array('data' => 'employee_name', 'title' => 'Employee'),
        array('data' => 'request_date_created', 'title' => 'Date Created'),
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
                        <th>Corporate</th>
                        <th>Code</th>
                        <th>Employee</th>
                        <th>Date Created</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  
                    foreach ($vouchers as $voucher) {
                        
                        $request_id = encrypt($voucher['request_id']);
                        $voucher_codes = explode(", ", $voucher['vouchers']);  // Split the vouchers string into an array of voucher codes
                    
                        foreach ($voucher_codes as $voucher_code) {
                            // Get the corporate_name using the corporate_id
                            $corporate = select_rows("SELECT corporate_name FROM corporate WHERE corporate_id = '$voucher[corporate_id]'")[0]['corporate_name'];
                    
                            // Get the employee_number from the voucher table where the voucher_code is the current voucher code
                            $employee_number = select_rows("SELECT employee_number FROM voucher WHERE voucher_code = '$voucher_code'")[0]['employee_number'];
                    
                            // Get the employee_name from the employee_table using the employee_number
                            $employee_name = select_rows("SELECT employee_name FROM employee WHERE employee_number = '$employee_number'")[0]['employee_name'];
                    
                            echo "<tr>";
                            echo "<td></td>";
                            echo "<td>$corporate</td>";
                            echo "<td>$voucher_code</td>";
                            echo "<td>$employee_name</td>";
                            echo "<td>$voucher[request_date_created]</td>";
                            echo "</tr>";
                        }
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
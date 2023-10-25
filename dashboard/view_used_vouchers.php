<?php
$page = 'view used vouchers';
require_once '../path.php';
include_once 'header.php';

$vouchers = select_rows("SELECT * FROM session WHERE voucher_code IS NOT NULL");
//cout($vouchers);

$num_columns = 3;

$column_indexes = range(0, $num_columns - 1);

// Create an array of column definition objects
$column_defs = array();
for ($i = 0; $i < $num_columns; $i++) {
    $column_defs = array(
        array('data' => '', 'title' => 'id'),
        array('data' => 'voucher_code', 'title' => 'Code'),
        array('data' => 'client_name', 'title' => 'Client'),
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
                        <th>Code</th>
                        <th>Client</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  
                    foreach ($vouchers as $voucher) {
                        
                        $session_id = encrypt($voucher['session_id']);
                        $voucher_code = $voucher['voucher_code'];
                        $client_id = $voucher['client_id'];

                        $username = get_by_id('user',$client_id)['user_name'];

                            
                            echo "<tr>";
                            echo "<td></td>";
                            echo "<td>$voucher_code</td>";
                            echo "<td>$username</td>";
                            echo "</tr>";
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
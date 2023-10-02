<?php
$page        = 'transfer';

require_once '../path.php';
require_once 'header.php';

$therapists     = get_dropdown_data(get_all_therapists(), 'therapist_name', 'therapist_id');
$row = array();

$username = get_by_id('user',security('id','GET'))['user_name'];
$user_id = get_by_id('user',security('id','GET'))['user_id'];
?>
<div class="content-wrapper"><!-- Begin Page Content -->


    <div class="container-fluid">
        <!-- Page Heading -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body card-secondary">
                <div class="card-header">
                    <h3 class="card-title"> Transfer <?= $username ?> To New Therapist </h3>
                </div>
                <div class="mt-4">
                    <form enctype="multipart/form-data" action="<?= model_url ?>transfer" method="POST">
                        <div class="row clearfix">
                            <input hidden name="user_id" value="<?= $user_id ?>" />
                            <?php
                            input_select_array("Choose A Therapist", "therapist_id", $row, true, $therapists);

                            submit('Submit', 'dark', 'text-center');
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->


    <?php include_once 'footer.php'; ?>
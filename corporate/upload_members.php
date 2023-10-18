<?php
$page = 'upload members';
require_once '../path.php';
require_once 'header.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?= ucwords($header_name) ?> /</span>Upload Members</h4>

    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-12">
            <div class="card mb-4">
                <?php
                if ($profile['corporate_status'] == 'inactive') { ?>
                    <p style="font-size: 24px;margin: 1em;font-weight: 600;">Kindly wait for your account to be activated. You will be notified via email.</p>
                <?php
                } else { ?>
                    <form method="post" id="quickForm" enctype="multipart/form-data" action="<?= model_url ?>upload_members">
                        <div class="card-body">
                            <div>
                                <label>Upload a CSV file with the members details:</label><br><br>
                                <input type="file" name="members_csv" id="members_csv" accept=".csv">
                                
                            </div>
                           
                            <?php submit("Submit Data", "primary", "center", "mt-5"); ?>
                    </form>
                <?php
                }
                ?>

            </div>
        </div>

    </div>
</div>
<?php include_once 'footer.php'; ?>
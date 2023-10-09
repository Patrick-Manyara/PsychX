<?php
$page = 'voucher';
require_once '../path.php';
require_once 'header.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?= ucwords($header_name) ?> /</span> Create A Voucher</h4>

    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-12">
            <div class="card mb-4">
                <?php
                if ($profile['corporate_status'] == 'inactive') { ?>
                    <p style="font-size: 24px;margin: 1em;font-weight: 600;">Kindly wait for your account to be activated. You will be notified via email.</p>
                <?php
                } else { ?>
                    <form method="post" id="quickForm" enctype="multipart/form-data" action="<?= model_url ?>voucher">
                        <div class="card-body">
                            <div>
                                <?php
                                input_hybrid("How Many Vouchers", "voucher_num", $voucher, true);
                                ?>
                            </div>
                            <input hidden name="voucher_added_by" value="corporate" />
                            <input hidden name="corporate_id" value="<?= $_SESSION['corporate_id'] ?>" />
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
<?php
$page = 'voucher';
require_once '../path.php';
require_once 'header.php';

$id = security('id', 'GET');

$data = select_rows("SELECT * FROM voucher WHERE voucher_batch = '$id' ")[0];

$num = $data['voucher_num'];

$cash = $num * 2500;

?>

<head>
    <script type="text/javascript" src="https://checkoutv3.jambopay.com/sdk/checkout-sdk.js"></script>
</head>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Complete Payment /</span> Create A Voucher Batch</h4>

    <div class="row">
        <p>
            Hi, <?= $profile['corporate_name'] ?>, kindly pay Ksh. <?= $cash ?> for the vouchers to be activated.
        </p>
        <div class="col-md-12">

            <button class="btn btn-label-primary" type="button" id="pay_btn">
                Pay Now <i class="fa fa-mobile-retro"></i>
            </button>
            <p>OR</p>
            <a href="view_vouchers" class="btn btn-label-warning">
                Pay Later
            </a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#pay_btn').click(function() {
            const checkoutDetails = {
                OrderId: '<?= generateRandomString() ?>',
                CustomerEmail: '<?= $profile['corporate_email'] ?>',
                Currency: 'KES',
                CustomerPhone: '' + '<?= $profile['corporate_phone'] ?>',
                OrderAmount: 1,
                BusinessEmail: 'hello@psychx.io',
                CancelledUrl: 'payment_fail.php',
                CallBackUrl: 'success.php?id=' + '<?= $_GET['id'] ?>',
                Description: "transaction description",
                ClientKey: "913b03d2a3e04aaba394ef08ce47cbd982752eae007c4a52bdb0755a8b9365b2b06c6f7e36e04e48939d9072bb81bb96",
                SupportEmail: "hello@psychx.io",
                SupportPhone: "0720401194",
                UseJPLogo: "yes",
                StoreName: "PSYCHX LIMITED"
            }

            jambopayCheckout(checkoutDetails)
        });

    });
</script>

<?php include_once 'footer.php'; ?>

<!-- https://localhost/psychx/corporate/success.php?id=VHpySGlleFVnWTVWdHFQTzk1QjVMZz09 -->
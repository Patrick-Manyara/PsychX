<?php
$page = 'voucher';
require_once '../path.php';
require_once 'header.php';

$id = security('id', 'GET');

$arr = array();
$arr['voucher_paid'] = 'paid';

$data = select_rows("SELECT * FROM voucher WHERE voucher_batch = '$id'");
foreach ($data as $item) {
    build_sql_edit('voucher', $arr, $item['voucher_id'], 'voucher_id');
}





?>

<head>
    <script type="text/javascript" src="https://checkoutv3.jambopay.com/sdk/checkout-sdk.js"></script>
</head>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?= ucwords($header_name) ?> /</span> Create A Voucher</h4>

    <div class="row">
        <p>
            Hi, <?= $profile['corporate_name'] ?>, your payment was successfully received.
        </p>

    </div>
</div>


<?php include_once 'footer.php'; ?>
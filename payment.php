<?php
include_once 'header.php';
// cout($_POST);
if (isset($_POST['time'])) {
    $post_time = $_POST['time'];
    $time_array = explode('-', $post_time);
    $start_time = trim($time_array[0]); // Trim to remove any leading/trailing whitespace
    $end_time = trim($time_array[1]); // Trim to remove any leading/trailing whitespace
}
$sql = "SELECT * FROM subscription WHERE device_id = '$_COOKIE[device]' ORDER BY subscription_date_created DESC ";
$row = select_rows($sql)[0];
$amount = $row['subscription_amount'];
// $amount = '1';


if (isset($_SESSION['login'])) {
    $user = get_by_id('user', $_SESSION['user_id']);
    $name = $user['user_name'];
}

?>

<head>
    <script type="text/javascript" src="https://checkoutv3.jambopay.com/sdk/checkout-sdk.js"></script>
</head>

<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/banner5.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Our Services</h1>
            </div>
            <div class="col-md-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Services
    ============================================= -->
<div class="solid-services-area default-padding bottom-less bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-12">
                <div class="card">
                    <?php
                    if (!isset($_SESSION['login'])) { ?>
                        <div class="LogInForm">
                            <p>
                                Dont have an account?
                                <span id="ClickSign" class="MySpan">
                                    Click here to sign up
                                </span>
                                Dont worry. Your session and therapist wont be lost.
                            </p>
                            <div class="appoinment-box">
                                <form action="<?= model_url ?>user_login&payment" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="email" required name="user_email" placeholder="Enter Your Emal">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="password" required name="user_password" placeholder="Enter Your Password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-theme effect btn-md" type="submit" id="submit">
                                                Login <i class="fa fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="SignInForm">
                            <p>
                                Already have an account?
                                <span id="SignSign" class="MySpan">
                                    Click here to sign up
                                </span>
                                Dont worry. Your session and therapist wont be lost.
                            </p>
                            <div class="appoinment-box">
                                <form action="<?= model_url ?>register&payment" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="user_name" placeholder="Enter Your name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" required type="email" name="user_email" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="user_phone" placeholder="Enter Your phone">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" required type="password" name="user_password" placeholder="Enter Your Password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-theme effect btn-md" type="submit" id="submit">
                                                Sign Up <i class="fa fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                    } else { ?>
                        <div>
                            <div class="appoinment-box">
                                <form id="target" method="POST">
                                    <div class="row">
                                        <div class="form-group">
                                            <label>
                                                Do You Have A Voucher Code?
                                            </label>
                                            <input type="text" style="margin-top:10px;" class="form-control" id="voucher" name="voucher" placeholder="If Yes, Type It In Here.">
                                            <button type="button" onClick="checkAvailabilityVoucher()" style="margin-top: 1em; margin-bottom:1em;" class="btn btn-warning effect btn-md">Check Voucher</button>
                                            <span id="voucher-availability" style="font-size:12px;"></span>
                                        </div>

                                        <p>
                                            If You Dont Have A Voucher Code, Enter Your Details:
                                        </p>

                                        <div class="form-group">
                                            <label>Choose how you want the session</label>
                                            <select required class="form-control" id="session_mode" name="session_mode">
                                                <option value="default" disabled selected>Live or Virtual?</option>
                                                <option value="live">Physical(Nairobi)</option>
                                                <option value="virtual">Virtual</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="padding-left: unset;">
                                            <div class="form-group">
                                                <input class="form-control" id="phone" name="user_phone" placeholder="Enter Your Phone Numer" type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-12">

                                            <button class="btn btn-theme effect btn-md" type="submit" name="submit" id="submit">
                                                Pay Now <i class="fa fa-mobile-retro"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <form id="target2" method="POST" action="<?= model_url ?>pay">
                                <p>
                                    Your Voucher Code Was Valid. Your Session Will Be Free of Charge Courtesy of PsychX.
                                </p>
                                    <div class="row">
                                        <div class="form-group">
                                            <label>Choose how you want the session</label>
                                            <select required class="form-control" id="session_mode2" name="session_mode2">
                                                <option value="default" disabled selected>Live or Virtual?</option>
                                                <option value="live">Physical(Nairobi)</option>
                                                <option value="virtual">Virtual</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-theme effect btn-md" type="submit" id="sub2">
                                                Proceed <i class="fa fa-paper-plane"></i>
                                            </button>
    


                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->



<script>
    function checkAvailabilityVoucher() {
        jQuery.ajax({
            url: "check_voucher.php",
            data: 'voucher=' + $("#voucher").val(),
            type: "POST",
            success: function(data) {
                // $("#voucher-availability").html(data);
                console.log(data);
                if (data == 'yes') {
                    $("#voucher-availability").html('Your voucher is valid. Please click on pay with voucher');
                    $('#voucher_name').val($("#voucher").val());
                    $('#target').css('display', 'none');
                    $('#target2').css('display', 'block');
                }
                if (data == 'no') {
                    $("#voucher-availability").html('Sorry. Your voucher is invalid');
                }
            },
            error: function() {}
        });
    }
</script>


<script>
    $(document).ready(function() {
        var ses_mode;
        $('#ClickSign').click(function() {
            $('.LogInForm').css('display', 'none');
            $('.SignInForm').css('display', 'block');
        });

        $('#SignSign').click(function() {
            $('.LogInForm').css('display', 'block');
            $('.SignInForm').css('display', 'none');
        });

        $('#session_mode').change(function() {
            ses_mode = $(this).val();
            console.log(ses_mode);
        });


        $("#target").submit(function(e) {

            const data = new FormData($(this)[0]);
            e.preventDefault();
            $("#sub").hide();
            $('.MySpinner').css('display', 'block');
            $('#Loading').text('Loading...');
            prePay(data)

        });
    });


    function prePay(data) {

        let rand = '<?= $rand = rand(100000, 999999) ?>';
        let email = '<?= $_SESSION['user_email'] ?>';
        let amount = '<?= $amount ?>';
        let name = '<?= $name ?>';


        let str = {
            "name": name,
            "amount": amount,
            "phone_number": $("#phone").val(),
            "session_mode": $("#session_mode").val(),
            "email": email
        };
        str = JSON.stringify(str);
        const checkoutDetails = {
            OrderId: rand,
            CustomerEmail: email,
            Currency: 'KES',
            CustomerPhone: '' + $("#phone").val(),
            OrderAmount: amount,
            BusinessEmail: 'hello@psychx.io',
            CancelledUrl: 'payment_fail.php?fail',
            CallBackUrl: 'model/update/subscription.php?dets=' + str,
            Description: "transaction description",
            ClientKey: "913b03d2a3e04aaba394ef08ce47cbd982752eae007c4a52bdb0755a8b9365b2b06c6f7e36e04e48939d9072bb81bb96",
            SupportEmail: "hello@psychx.io",
            SupportPhone: "0720401194",
            UseJPLogo: "yes",
            StoreName: "PSYCHX LIMITED"
        }

        jambopayCheckout(checkoutDetails)

        $("#sub").show();
        $('#Loading').hide();
        console.log(checkoutDetails);

    }
</script>

<?php
include_once 'footer.php';

?>
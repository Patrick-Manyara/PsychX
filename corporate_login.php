<?php
include_once 'header.php';
?>
<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/banner5.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Login Or Register</h1>
            </div>
            <div class="col-md-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Accounts</a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Services Details
    ============================================= -->
<div class="services-details-area default-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-sm-12 col-12">
                <div class="card">

                    <div class="LogInForm">
                        <p>
                            Dont have an account?
                            <span id="ClickSign" class="MySpan">
                                Click here to sign up
                            </span>

                        </p>

                        <div class="appoinment-box">
                            
                            <form action="<?= model_url ?>corporate_login" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="corporate_email" placeholder="Enter Your Emal">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="corporate_password" placeholder="Enter Your Password">
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
                            <form action="<?= model_url ?>corporate_register" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="corporate_name" required placeholder="Enter Your name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="corporate_email" id="corporate_email" required placeholder="Enter Your Email" onBlur="checkAvailabilityEmailid()">
                                            <span id="emailid-availability" style="font-size:12px;"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="corporate_phone" required placeholder="Enter Your phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="corporate_password" required placeholder="Enter Your Password">
                                        </div>
                                    </div>
                                    <input hidden name="" value="inactive" />
                                    <div class="col-md-12">
                                        <button class="btn btn-theme effect btn-md" type="submit" id="submit">
                                            Sign Up <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End End Services -->

<style>
    .sign__social {
        display: block;
        height: 50px;
        background: #eeedf2;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        position: relative;
        line-height: 48px;
        padding-left: 23px;
        z-index: 1;
        overflow: hidden;
        font-size: 16px;
    }

    .mb-15 {
        margin-bottom: 15px;
    }

    .text-start {
        text-align: left !important;
    }

    .sign__social i {
        color: #ffffff;
        font-size: 16px;
        margin-right: 50px;
    }

    .sign__social.g-plus::after {
        background: #e93e30;
    }

    .sign__social::after {
        position: absolute;
        content: "";
        left: -55%;
        top: 45%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        height: 220px;
        width: 220px;
        background: #3360bd;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        z-index: -1;
    }

    .sign__social.g-plus::after {
        background: #e93e30;
    }

    .sign__social:hover {
        color: #ffffff;
    }

    .sign__social:hover::after {
        width: 100%;
        height: 150%;
        left: 0;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
    }

    @media (max-width: 575px) {
        .sign__social i {
            margin-right: 35px;
        }
    }
</style>


<script>
    $(document).ready(function() {
        $('#ClickSign').click(function() {
            $('.LogInForm').css('display', 'none');
            $('.SignInForm').css('display', 'block');
        });

        $('#SignSign').click(function() {
            $('.LogInForm').css('display', 'block');
            $('.SignInForm').css('display', 'none');
        });



    });
</script>

<script>
    function checkAvailabilityEmailid() {
        jQuery.ajax({
            url: "check_available.php",
            data: 'corporate_email=' + $("#corporate_email").val(),
            type: "POST",
            success: function(data) {
                console.log(data);
                $("#emailid-availability").html(data);
            },
            error: function() {}
        });
    }
</script>


<?php
include_once 'footer.php';
?>
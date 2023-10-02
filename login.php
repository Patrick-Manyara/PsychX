<?php
include_once 'header.php';
// include_once 'model/update/create.php';


require 'google/vendor/autoload.php';
$clientID       = '467336794351-367st9k3d0a77f7q5a954bot10o6oivk.apps.googleusercontent.com';
$clientSecret   = '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';
$redirectUrl    = 'https://psychx.io/login';
$return_url     = 'https://psychx.io/login';

$redirect_url = base_uri;
$failed_url = base_uri . 'login?failed';


//CREATE CLIENT REQUEST TO GOOGLE
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUrl);
$client->setAccessType('offline');


$client->addScope('https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $token = $token['access_token'];
    $client->setAccessToken($token);
    $o_auth = new Google_Service_Oauth2($client);
    $user_data = $o_auth->userinfo_v2_me->get();

    $login = get_user($user_data['email'], 'user_email', true);

    if (empty($login)) {
        $id = $arr['user_id']   = create_id2('user', 'user_id');
        $password               = generateRandomString();
        $arr['user_password']   = password_hashing_hybrid_maker_checker($password);
        $arr['user_name']                    = $user_data['name'];
        $arr['user_email']                   = $user_data['email'];

        if (!build_sql_insert('user', $arr)) {
            $error['user'] = 139;
            error_checker($return_url);
        }


        $name       = APP_NAME;
        $subject    = APP_NAME . " Sign Up";


        $body       = '<p style="font-family:Poppins, sans-serif; ">Welcome to ' . APP_NAME . ' ' . $arr['user_name'] . '  <br>';
        $body       .= 'We are so happy you have signed up.  <br>';
        $body       .= '<br><br>You may log in to your account <a href="https://psychx.io/login.php" style="cursor:pointer;"><b> BY CLICKING HERE </b></a>';
        $body       .= '<br>';
        $body       .= 'Use <b><u>' . $password . '</u></b> as your password and feel free to change it once inside.';
        $body       .= '</p>';
        $body       .= '<p style="font-family:Poppins, sans-serif; ">Yours,<br> PsychX Management</p>';

        $session_login  = array(
            'login'             => true,
            'user_email'        => $user_data['email'],
            'user_name'         => $user_data['name'],
            'user_id'           => $id,
            'success'           => array('login' => 204)
        );

        $body2 = '<p style="font-family:Poppins, sans-serif; ">A new user has signed up to ' . APP_NAME . ' with the details: <br> <b>USERNAME: </b> ' . $arr['user_name'] . ' <br>';
        $body2 .= ' <b>EMAIL: </b> ' . $arr['user_email'] . ' <br> ';
        $body2 .= '</p>';

        session_assignment($session_login);
        writing_system_logs("Login successful session created: [ " . json_encode($_SESSION) . ' ]');

        email($arr['user_email'], $subject, $name, $body);
        email('psychxglobal@gmail.com', $subject, $name, $body2);
        $success['user'] = 230;
        render_success($redirect_url);
    }

    $session_login  = array(
        'login'        => true,
        'user_email'        => $user_data['email'],
        'user_name'         => $login['user_name'],
        'user_id'           => $login['user_id'],
        'success'           => array('login' => 204)
    );

    session_assignment($session_login);
    writing_system_logs("Login successful session created: [ " . json_encode($_SESSION) . ' ]');
    redirect_header($redirect_url);
}


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
                            <div class="sign__header mb-35">
                                <div class="sign__in text-center">
                                    <a href="<?= $client->createAuthUrl() ?>" class="sign__social g-plus text-start mb-15"><i class="fab fa-google-plus-g"></i>Sign Up with Google</a>
                                    <p> <span>........</span> Or sign in with your email<span> ........</span> </p>
                                </div>
                            </div>
                            <form action="<?= model_url ?>user_login" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="user_email" placeholder="Enter Your Emal">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="user_password" placeholder="Enter Your Password">
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
                            <form action="<?= model_url ?>register" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="user_name" required placeholder="Enter Your name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="user_email" id="email" required placeholder="Enter Your Email" onBlur="checkAvailabilityEmailid()">
                                            <span id="emailid-availability" style="font-size:12px;"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="user_phone" required placeholder="Enter Your phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="user_password" required placeholder="Enter Your Password">
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
            data: 'email=' + $("#email").val(),
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
<?php
require_once '../../path.php';
require_once MODEL_PATH . "operations.php";
include_once('../vendor/autoload.php');
include_once '../../meeting/create_meeting.php';

$action = (isset($_GET['action']) && $_GET['action'] != '') ? security('action', 'GET') : '';



if (!csrf_verify(security('csrf_token'))) render_warning(admin_url);
unset($_POST['csrf_token']);



foreach ($_GET as $key => $val) {
    $conn = connect();
    $_GET[$key] = mysqli_real_escape_string($conn, $_GET[$key]);
}
foreach ($_POST as $key => $val) {
    $conn = connect();
    if (!is_array($_POST[$key])) {
        $_POST[$key] = mysqli_real_escape_string($conn, $_POST[$key]);
    }
}


switch ($action) {
    case 'admin_login':
        get_user_login();
        break;
    case 'user_login':
        get_login();
        break;
    case 'corporate_login':
        get_corporate_login();
        break;
    case 'therapist_login':
        get_therapist_login();
        break;
    case 'admin':
        post_admin();
        break;
    case 'register':
        post_user();
        break;
    case 'corporate_register':
        post_corporate();
        break;
    case 'therapist':
        post_therapist();
        break;
    case 'user':
        post_client();
        break;
    case 'password':
        post_password();
        break;
    case 'therapist_password':
        post_therapist_password();
        break;
    case 'corporate_password':
        post_corporate_password();
        break;
    case 'board':
        post_board();
        break;
    case 'inquiry':
        post_inquiry();
        break;
    case 'bookmark':
        post_bookmark();
        break;
    case 'book':
        post_book();
        break;
    case 'pay':
        post_pay();
        break;
    case 'note':
        post_note();
        break;
    case 'user_edit':
        post_user_edit();
        break;
    case 'corporate_edit':
        post_corporate_edit();
        break;
    case 'transfer':
        post_transfer();
        break;
    case 'banner':
        post_banner();
        break;
    case 'filter':
        post_filter();
        break;
    case 'voucher':
        post_voucher();
        break;
    case 'simple':
        post_simple($_GET['table'], $_GET['url']);
        break;
}

function post_simple($table, $url)
{
    global $arr;
    global $error;
    global $success;
    if (isset($_GET['site'])) {
        $return_url = consult_url . $url;
    } else {
        $return_url = admin_url . $url;
    }

    for_loop();


    $param = '';
    if (isset($_SESSION['edit'])) {
        $param = "?id=" . encrypt($_SESSION['edit']);
    }

    if (!empty($error)) {
        $url = $return_url . $param;
        error_checker($url);
    }

    if (isset($_SESSION['edit'])) {
        $id = $_SESSION['edit'];
        unset($_SESSION['edit']);

        if (!build_sql_edit($table, $arr, $id, $table . '_id')) {
            $error[$table] = 149;
            error_checker($return_url . '   ?id=' . encrypt($id));
        }

        $success[$table] = 221;
        render_success($return_url . '?id=' .  encrypt($id));
    }

    $id = $arr[$table . '_id'] = create_id($table, $table . '_id');
    //  var_dump($arr);
    //  var_dump($table);

    if (!build_sql_insert($table, $arr)) {
        $error[$table] = 150;
        error_checker($return_url);
    }

    $success[$table] = 220;
    render_success($return_url . '?id=' .  encrypt($id));
}

function post_banner()
{
    global $arr;
    global $error;
    global $success;
    $return_url = admin_url . "view_banners";

    if (!empty($_FILES['banner_poster']['name']))    $arr['banner_poster']   = upload('banner_poster');

    for_loop();

    if (!empty($error)) {
        error_checker($return_url);
    }


    if (isset($_SESSION['edit'])) {
        $id = $_SESSION['edit'];
        unset($_SESSION['edit']);

        if (!empty($arr['banner_poster']))   delete_file('banner_poster', 'banner', 'banner_id', $id);

        if (!build_sql_edit('banner', $arr, $id, 'banner_id')) {
            $error['banner'] = 132;
            error_checker($return_url);
        }

        $success['banner'] = 206;
        render_success($return_url);
    }

    $arr['banner_id'] = create_id('banner', 'banner_id');

    if (!build_sql_insert('banner', $arr)) {
        $error['banner'] = 134;
        error_checker($return_url);
    }

    $success['banner'] = 205;
    render_success($return_url);
}

function post_therapist()
{
    global $arr;
    global $error;
    global $success;
    if (isset($_GET['t'])) {
        $return_url = therapist_url . "my_profile";
    } else {
        $return_url = admin_url . "view_therapists";
    }


    if (!empty($_FILES['therapist_image']['name']))    $arr['therapist_image']   = upload('therapist_image');
    $_POST['category_id'] = implode("|", $_POST['category_id']);


    for_loop();

    if (!empty($error)) {
        error_checker($return_url);
    }


    if (isset($_SESSION['edit'])) {
        $id = $_SESSION['edit'];
        unset($_SESSION['edit']);

        if (!empty($arr['therapist_image']))   delete_file('therapist_image',   'therapist', 'therapist_id');

        if (!build_sql_edit('therapist', $arr, $id, 'therapist_id')) {
            $error['view_therapists'] = 153;
            error_checker($return_url);
        }

        $success['view_therapists'] = 224;
        render_success($return_url);
    }

    $arr['therapist_id'] = create_id('therapist', 'therapist_id');
    $arr['therapist_password']   = password_hashing_hybrid_maker_checker($arr['therapist_password']);

    if (!build_sql_insert('therapist', $arr)) {
        $error['view_therapists'] = 154;
        error_checker($return_url);
    }

    $success['view_therapists'] = 225;
    render_success($return_url);
}

function post_corporate()
{
    global $arr;
    global $error;
    global $success;

    $return_url = corporate_url;

    for_loop();


    $id = $arr['corporate_id']   = create_id('corporate', 'corporate_id');
    $arr['corporate_password']   = password_hashing_hybrid_maker_checker($arr['corporate_password']);

    if (!build_sql_insert('corporate', $arr)) {
        $error['corporate'] = 139;
        error_checker($return_url);
    }


    $name       = APP_NAME;
    $subject    = APP_NAME . " Sign Up";


    $body       = '<p style="font-family:Poppins, sans-serif; ">Welcome to ' . APP_NAME . ' ' . $arr['corporate_name'] . '  <br>';
    $body       .= 'We are so happy you have signed up.  <br>';
    $body       .= '<br><br>You may log in to your account <a href="https://psychx.io/login.php" style="cursor:pointer;"><b> BY CLICKING HERE </b></a>';
    $body       .= '</p>';
    $body       .= '<p style="font-family:Poppins, sans-serif; ">Yours,<br> PsychX Management</p>';

    $body2 = '<p style="font-family:Poppins, sans-serif; ">A new corporate has signed up to ' . APP_NAME . ' with the details: <br> <b>corporateNAME: </b> ' . $arr['corporate_name'] . ' <br>';
    $body2 .= ' <b>EMAIL: </b> ' . $arr['corporate_email'] . ' <br> ';
    $body2 .= ' <b>PHONE NUMBER: </b> ' . $arr['corporate_phone'] . ' <br> ';
    $body2 .= '</p>';

    email($arr['corporate_email'], $subject, $name, $body);
    email('psychxglobal@gmail.com', $subject, $name, $body2);

    $session_login  = array(
        'corporate_login'       => true,
        'corporate_email'       => $arr['corporate_email'],
        'corporate_name'        => $arr['corporate_name'],
        'corporate_id'          => $arr['corporate_id'],
        'success'               => array('login' => 204)
    );

    session_assignment($session_login);
    writing_system_logs("Login successful session created: [ " . json_encode($_SESSION) . ' ]');

    $success['corporate'] = 203;
    render_success($return_url);
}


function post_user()
{
    global $arr;
    global $error;
    global $success;

    if (isset($_GET['payment'])) {
        $return_url = base_uri . 'payment';
    } else {
        $return_url = base_uri;
    }


    for_loop();


    $id = $arr['user_id']   = create_id('user', 'user_id');
    $arr['user_password']   = password_hashing_hybrid_maker_checker($arr['user_password']);

    if (!build_sql_insert('user', $arr)) {
        $error['user'] = 139;
        error_checker($return_url);
    }


    $name       = APP_NAME;
    $subject    = APP_NAME . " Sign Up";


    $body       = '<p style="font-family:Poppins, sans-serif; ">Welcome to ' . APP_NAME . ' ' . $arr['user_name'] . '  <br>';
    $body       .= 'We are so happy you have signed up.  <br>';
    $body       .= '<br><br>You may log in to your account <a href="https://psychx.io/login.php" style="cursor:pointer;"><b> BY CLICKING HERE </b></a>';
    $body       .= '</p>';
    $body       .= '<p style="font-family:Poppins, sans-serif; ">Yours,<br> PsychX Management</p>';

    $body2 = '<p style="font-family:Poppins, sans-serif; ">A new user has signed up to ' . APP_NAME . ' with the details: <br> <b>USERNAME: </b> ' . $arr['user_name'] . ' <br>';
    $body2 .= ' <b>EMAIL: </b> ' . $arr['user_email'] . ' <br> ';
    $body2 .= ' <b>PHONE NUMBER: </b> ' . $arr['user_phone'] . ' <br> ';
    $body2 .= '</p>';

    email($arr['user_email'], $subject, $name, $body);
    email('psychxglobal@gmail.com', $subject, $name, $body2);

    $session_login  = array(
        'login'             => true,
        'user_email'        => $arr['user_email'],
        'user_name'         => $arr['user_name'],
        'user_id'           => $arr['user_id'],
        'success'           => array('login' => 204)
    );

    session_assignment($session_login);
    writing_system_logs("Login successful session created: [ " . json_encode($_SESSION) . ' ]');

    $success['user'] = 203;
    render_success($return_url);
}


function post_client()
{
    global $arr;
    global $error;
    global $success;
    $return_url = admin_url . "view_users";

    if (!empty($_FILES['user_image']['name']))    $arr['user_image']   = upload('user_image');

    for_loop();

    if (!empty($error)) {
        error_checker($return_url);
    }


    if (isset($_SESSION['edit'])) {
        $id = $_SESSION['edit'];
        unset($_SESSION['edit']);

        if (!empty($arr['user_image']))   delete_file('user_image',   'user', 'user_id');

        if (!build_sql_edit('user', $arr, $id, 'user_id')) {
            $error['view_users'] = 153;
            error_checker($return_url);
        }

        $success['view_users'] = 224;
        render_success($return_url);
    }

    $arr['user_id'] = create_id('user', 'user_id');
    $arr['user_password']   = password_hashing_hybrid_maker_checker($arr['user_password']);

    if (!build_sql_insert('user', $arr)) {
        $error['view_users'] = 154;
        error_checker($return_url);
    }

    $subject    = APP_NAME . ' Account Creation';
    $name       = APP_NAME;
    $body       = '<p style="font-family:Poppins, sans-serif;"> ';
    $body       .= 'Hello, <b> ' . $arr['user_name'] . ' </b> <br>';
    $body       .= 'Your account has been successfully created.';
    $body       .= '<br>';
    $body       .= 'You may log in to your account in the future with these credentials';
    $body       .= '<br>';
    $body       .= '<b>EMAIL:</b> ' . $arr['user_email'] . ' <br>';
    $body       .= '<br>';
    $body       .= '<b>PASSWORD:</b> ' . security('user_password') . ' <br>';
    $body       .= '<br>';


    email($arr['user_email'], $subject, $name, $body);

    $success['view_users'] = 225;
    render_success($return_url);
}

function post_voucher()
{
    global $arr;
    global $error;
    global $success;
    $return_url = corporate_url . "pay?id=";

    $num = security('voucher_num');

    $id = $arr['voucher_batch'] = 'BATCH-' . generateRandomString('6');

    for ($i = 1; $i <= $num; $i++) {
        for_loop();
        $arr['voucher_id'] = create_id('voucher', 'voucher_id');
        $arr['voucher_added_by'] = 'corporate';
        $arr['voucher_code'] = 'PSYCHX-' . generateRandomString('5');
        build_sql_insert('voucher', $arr);
    }

    $success['view_vouchers'] = 225;
    render_success($return_url . encrypt($id));
}

function post_board()
{
    global $arr;
    global $error;
    global $success;
    $return_url = admin_url . "view_boards";

    if (!empty($_FILES['board_poster']['name']))    $arr['board_poster']   = upload('board_poster');

    for_loop();

    if (!empty($error)) {
        error_checker($return_url);
    }


    if (isset($_SESSION['edit'])) {
        $id = $_SESSION['edit'];
        unset($_SESSION['edit']);

        if (!empty($arr['poster']))   delete_file('board_poster',   'board', 'board_id');


        if (!build_sql_edit('board', $arr, $id, 'board_id')) {
            $error['view_boards'] = 153;
            error_checker($return_url);
        }

        $success['view_boards'] = 224;
        render_success($return_url);
    }

    $arr['board_id'] = create_id('board', 'board_id');

    if (!build_sql_insert('board', $arr)) {
        $error['view_boards'] = 154;
        error_checker($return_url);
    }

    $success['view_boards'] = 225;
    render_success($return_url);
}



function post_user_edit()
{
    global $arr;
    global $error;
    global $success;

    $return_url = client_url . 'edit_profile';



    for_loop();

    if (!empty($_FILES['user_image']['name'])) $arr['user_image'] = upload('user_image');



    $id = $_SESSION['user_id'];
    if (!empty($arr['user_image'])) delete_file('user_image', 'user', 'user_id');

    if (!build_sql_edit('user', $arr, $id, 'user_id')) {
        $error['user'] = 133;
        error_checker($return_url);
    }

    $success['user'] = 202;
    render_success($return_url);
}

function post_corporate_edit()
{
    global $arr;
    global $error;
    global $success;

    $return_url = corporate_url . 'edit_profile';

    for_loop();

    $id = $_SESSION['corporate_id'];
    if (!build_sql_edit('corporate', $arr, $id, 'corporate_id')) {
        $error['corporate'] = 133;
        error_checker($return_url);
    }

    $success['corporate'] = 202;
    render_success($return_url);
}

function post_filter()
{
    global $arr;
    global $error;
    global $success;

    unset($_POST['age']);

    for_loop();

    $id = $arr['filter_id']   = create_id('filter', 'filter_id');

    $arr['device_id'] =  $_COOKIE['device'];

    // cout($arr);

    $substring = "find";

    if (strpos($arr['filter_values'], $substring) !== false) {
        $return_url = base_uri . "find";
    } else {
        $return_url = base_uri . "auto";
    }

    if (!build_sql_insert('filter', $arr)) {
        $error['filter'] = 152;
        error_checker($return_url);
    }

    $success['filter'] = 223;
    render_success($return_url);
}

function post_bookmark()
{
    global $arr;
    global $error;
    global $success;

    $arr['therapist_id'] = $_POST['therapist_id'];

    if (isset($_SESSION['login'])) {
        $arr['user_id'] = $_SESSION['user_id'];
        $column = 'user_id';
        $value = $_SESSION['user_id'];
    } else {
        $arr['device_id'] =  $_COOKIE['device'];
        $column = 'device_id';
        $value = $arr['device_id'];
    }

    $return_url = base_uri . 'find';


    $sql = "SELECT * FROM bookmark WHERE $column = '$value' AND therapist_id = '$arr[therapist_id]' ";
    $row = select_rows($sql);

    if (empty($row)) {
        $arr['bookmark_id'] = create_id('bookmark', 'bookmark_id');

        if (!build_sql_insert('bookmark', $arr)) {
            $error['bookmark'] = 162;
            error_checker($return_url);
        }

        $success['bookmark'] = 234;
        echo 'success';
    } else {
        $row = $row[0];
        if (!delete('bookmark', 'bookmark_id',  $row['bookmark_id'])) {
            $error['delete'] = 162;
            error_checker($return_url);
        }
        $success['delete'] = 235;
        echo 'success2';
    }
}

function post_book()
{
    global $arr;
    global $error;
    global $success;
    $return_url = base_uri . "payment";
    $failed_url = base_uri . "find";

    $arr['subscription_package'] = security('subscription_package');
    $arr['subscription_amount'] = security('subscription_amount');
    $arr['device_id'] =  $_COOKIE['device'];
    $arr['subscription_id'] = create_id('subscription', 'subscription_id');
    if (isset($_SESSION['login'])) {
        $arr['subscription_name']     =  $_SESSION['user_name'];
        $arr['subscription_email']     =  $_SESSION['user_email'];
        $arr['subscription_phone']     =  get_by_id('user', $_SESSION['user_id'])['user_phone'];
    }

    if (!build_sql_insert('subscription', $arr)) {
        $error['subscription'] = 162;
        error_checker($failed_url);
    }

    $arr2 = array();
    $arr2['therapist_id'] = security('therapist_id');
    $arr2['session_date'] = security('session_date');
    $arr2['session_start_time'] = security('session_start_time');
    $arr2['session_end_time'] = security('session_end_time');
    $arr2['device_id'] =  $_COOKIE['device'];
    $arr2['session_id'] = create_id('session', 'session_id');
    $arr2['session_code'] = 'SESS-' . generateRandomString('5');
    if (isset($_SESSION['login'])) {
        $arr2['client_id']     =  $_SESSION['user_id'];
    }

    if (!build_sql_insert('session', $arr2)) {
        $error['session'] = 162;
        error_checker($failed_url);
    }

    $success['subscription'] = 234;
    render_success($return_url);
}


function post_transfer()
{
    global $arr;
    global $error;
    global $success;
    $return_url = admin_url . "view_users";

    $therapist_from_id = get_by_id('user', security('user_id'))['therapist_id'];

    $arr['therapist_to_id']     = security('therapist_id');
    $arr['therapist_from_id']     = $therapist_from_id;
    $arr['user_id']             = security('user_id');
    $arr['therapist_move_id']    = create_id('therapist_move', 'therapist_move_id');
    if (!build_sql_insert('therapist_move', $arr)) {
        $error['therapist_move'] = 149;
        error_checker($return_url);
    }

    $arr2 = array();
    $arr2['therapist_id'] = $arr['therapist_to_id'];
    if (!build_sql_edit('user', $arr2, security('user_id'), 'user_id')) {
        $error['therapist_move'] = 149;
        error_checker($return_url);
    }


    $success['therapist_move'] = 221;
    render_success($return_url);
}


function post_pay()
{
    global $arr;
    global $error;
    global $success;
    $return_url = base_uri . "success";

    $sql = "SELECT * FROM subscription WHERE device_id = '$_COOKIE[device]' ORDER BY subscription_date_created DESC ";
    $row = select_rows($sql)[0];
    $sub_id = $row['subscription_id'];


    $arr['subscription_name'] = $_SESSION['user_name'];
    $arr['subscription_email'] = $_SESSION['user_email'];
    $arr['subscription_phone']     =  get_by_id('user', $_SESSION['user_id'])['user_phone'];


    $sql2 = "SELECT * FROM session WHERE device_id = '$_COOKIE[device]' ORDER BY session_date_created DESC ";
    $row2 = select_rows($sql2)[0];
    $ses_id = $row2['session_id'];

    $date = $row2['session_date'];
    $st = $row2['session_start_time'];
    $et = $row2['session_end_time'];

    $therapist_id = $row2['therapist_id'];
    $therapist_email = get_by_id('therapist', $therapist_id)['therapist_email'];


    $session_mode = $_POST['session_mode2'];

    // cout($ses_id);


    $arr2 = array();
    $arr2['client_id']     =  $_SESSION['user_id'];


    $arr2['session_payment_status'] = 'paid';
    $arr2['session_mode'] = $session_mode;

    $body       = '<p style="font-family:Poppins, sans-serif;"> ';
    $body       .= 'Hello, <b>' . $arr['subscription_name'] . '</b> <br>';
    $body       .= 'Your session has been successfully booked <br>';


    $content   = '<p style="font-family:Poppins, sans-serif;"> ';
    $content       .= 'Hello, you have a session with <b>' . $arr['subscription_name'] . '</b> <br>';
    $content       .= 'The session has been successfully booked for:  <br>';
    $content        .= '<br> <b> START TIME: </b> ' . $st;
    $content        .= '<br> <b> START TIME: </b> ' . $et;
    $content        .= '<br> <b> SESSION DATE: </b> ' . $date;

    if ($session_mode == "virtual") {
        $time = $date . "T" . $time;
        $link = create_meeting($time, $row2['session_code'])->join_url;
        $host_key = "229980";
        $body .= "<p>Your meeting link is <a href = '" . $link . "'>" . $link . "</a>
		<br> and the host key is " . $host_key . "
		";


        $content .= "<p>Your meeting link is <a href = '" . $link . "'>" . $link . "</a>
		<br> and the host key is " . $host_key . "
		";
        build_sql_edit("session", array(
            "session_link" => $link
        ), $row2['session_id'], 'session_id');
    }

    $body       .= '</p>';

    build_sql_edit("subscription", $arr, $sub_id, 'subscription_id');
    build_sql_edit("session", $arr2, $ses_id, 'session_id');

    email($arr['subscription_email'], APP_NAME . " Booking", APP_NAME, $body);

    email($therapist_email, APP_NAME . " Booking", APP_NAME, $content);
    $success['subscription'] = 234;
    render_success($return_url);
}


function post_note()
{
    global $arr;
    global $error;
    global $success;

    $return_url = therapist_url . "view_notes";

    for_loop();

    if (isset($_SESSION['edit'])) {
        $id = $_SESSION['edit'];

        unset($_SESSION['edit']);

        if (!build_sql_edit('note', $arr, $id, 'note_id')) {
            $error['note'] = 151;
            error_checker($return_url);
        }

        $success['note'] = 222;
        render_success($return_url);
    }

    $id = $arr['note_id']   = create_id('note', 'note_id');
    $arr['note_code']               = "NOTES-" . generateRandomString('5');

    if (!build_sql_insert('note', $arr)) {
        $error['note'] = 152;
        error_checker($return_url);
    }

    $success['note'] = 223;
    render_success($return_url);
}


function post_manager()
{
    global $arr;
    global $error;
    global $success;
    $return_url = admin_url . 'view_managers';


    for_loop();

    if (!empty($_FILES['user_image']['name'])) $arr['user_image'] = upload('user_image');

    $param = '';
    if (isset($_SESSION['edit'])) {
        $param = "?id=" . encrypt($_SESSION['edit']);
    }

    if (!empty($error)) {
        $url = $return_url . $param;
        error_checker($url);
    }

    if (isset($_SESSION['edit'])) {
        $id = $_SESSION['edit'];
        if (!empty($arr['user_image'])) delete_file('user_image', 'user', 'user_id');

        unset($_SESSION['edit']);

        if (!build_sql_edit('user', $arr, $id, 'user_id')) {
            $error['user'] = 151;
            error_checker($return_url);
        }

        $success['user'] = 222;
        render_success($return_url);
    }

    $id = $arr['user_id']   = create_id('user', 'user_id');
    $password               = generateRandomString();
    $arr['user_password']   = password_hashing_hybrid_maker_checker($password);


    $subject    = APP_NAME . ' Account Creation';
    $name       = APP_NAME;
    $body       = '<p style="font-family:Poppins, sans-serif;"> ';
    $body       .= 'Hello, <b> ' . $arr['user_name'] . ' </b> <br>';
    $body       .= 'Your account has been successfully created.';
    $body       .= '<br>';
    $body       .= 'You may log in to your account in the future with these credentials';
    $body       .= '<br>';
    $body       .= '<b>EMAIL:</b> ' . $arr['user_email'] . ' <br>';
    $body       .= '<br>';
    $body       .= '<b>PASSWORD:</b> ' . $password . ' <br>';
    $body       .= '<br>';


    email($arr['user_email'], $subject, $name, $body);

    // cout($arr);
    if (!build_sql_insert('user', $arr)) {
        $error['user'] = 152;
        error_checker($return_url);
    }

    $success['user'] = 223;
    render_success($return_url);
}


function post_password()
{
    global $arr;
    global $error;
    global $success;
    $return_url = client_url . 'password';

    $current_password = security('current_password');
    $new_password = security('new_password');
    $confirm_password = security('confirm_password');

    // cout($_POST);

    $user = get_by_id('user', $_SESSION['user_id']);

    // if (password_hashing_hybrid_maker_checker($current_password, $user['user_password'])) {
    //     $error['user'] = 157;
    //     error_checker($return_url);
    // }

    // if (password_hashing_hybrid_maker_checker($new_password, $user['user_password'])) {
    //     $error['user'] = 156;
    //     error_checker($return_url);
    // }

    if ($new_password != $confirm_password) {
        $error['user'] = 145;
        error_checker($return_url);
    }

    $arr['user_password'] = password_hashing_hybrid_maker_checker($new_password);

    if (!build_sql_edit('user', $arr, $user['user_id'], 'user_id')) {
        $error['user'] = 160;
        error_checker($return_url);
    }

    $success['user'] = 226;
    render_success($return_url);
}

function post_therapist_password()
{
    global $arr;
    global $error;
    global $success;
    $return_url = therapist_url . 'password';

    $current_password = security('current_password');
    $new_password = security('new_password');
    $confirm_password = security('confirm_password');

    // cout($_POST);

    $therapist = get_by_id('therapist', $_SESSION['therapist_id']);

    // if (password_hashing_hybrid_maker_checker($current_password, $user['user_password'])) {
    //     $error['user'] = 157;
    //     error_checker($return_url);
    // }

    // if (password_hashing_hybrid_maker_checker($new_password, $user['user_password'])) {
    //     $error['user'] = 156;
    //     error_checker($return_url);
    // }

    if ($new_password != $confirm_password) {
        $error['therapist'] = 145;
        error_checker($return_url);
    }

    $arr['therapist_password'] = password_hashing_hybrid_maker_checker($new_password);

    if (!build_sql_edit('therapist', $arr, $therapist['therapist_id'], 'therapist_id')) {
        $error['therapist'] = 160;
        error_checker($return_url);
    }

    $success['therapist'] = 226;
    render_success($return_url);
}

function post_corporate_password()
{
    global $arr;
    global $error;
    global $success;
    $return_url = corporate_url . 'password';

    $current_password = security('current_password');
    $new_password = security('new_password');
    $confirm_password = security('confirm_password');

    // cout($_POST);

    $corporate = get_by_id('corporate', $_SESSION['corporate_id']);

    // if (password_hashing_hybrid_maker_checker($current_password, $user['user_password'])) {
    //     $error['user'] = 157;
    //     error_checker($return_url);
    // }

    // if (password_hashing_hybrid_maker_checker($new_password, $user['user_password'])) {
    //     $error['user'] = 156;
    //     error_checker($return_url);
    // }

    if ($new_password != $confirm_password) {
        $error['corporate'] = 145;
        error_checker($return_url);
    }

    $arr['corporate_password'] = password_hashing_hybrid_maker_checker($new_password);

    if (!build_sql_edit('corporate', $arr, $corporate['corporate_id'], 'corporate_id')) {
        $error['corporate'] = 160;
        error_checker($return_url);
    }

    $success['corporate'] = 226;
    render_success($return_url);
}



function post_admin()
{
    global $arr;
    global $error;
    global $success;
    $return_url = admin_url . 'view_admins';

    for_loop();

    if (!empty($error)) {
        $url = $return_url . (isset($_SESSION['edit']) ? "?id=" . encrypt($_SESSION['edit']) : '');
        error_checker($url);
    }

    if (isset($_SESSION['edit'])) {
        $id = $_SESSION['edit'];
        unset($_SESSION['edit']);

        if (!build_sql_edit('admin', $arr, $id, 'admin_id')) {
            $error['admin'] = 141;
            error_checker($return_url . '   ?id=' . encrypt($id));
        }

        $success['admin'] = 208;
        render_success($return_url . '?id=' .  encrypt($id));
    }


    $password               = generateRandomString();
    $arr['admin_password']  = password_hashing_hybrid_maker_checker($password);
    $arr['admin_id']        = create_id('admin', 'admin_id');
    $id                     = $arr['admin_id'];

    // cout($arr);

    if (!build_sql_insert('admin', $arr)) {
        $error['admin'] = 140;
        error_checker($return_url);
    }

    $email      = $arr['admin_email'];
    $subject    = 'LUNA HEALTH Admin Addition';
    $name       = 'LUNA HEALTH';
    $body       = '<p style="font-family:Poppins, sans-serif;"> ';
    $body       .= 'Hello, <b>' . $arr['admin_name'] . '</b> <br>';
    $body       .= 'You have been successfully onboarded as a <b>' . $name . '</b> admin';
    $body       .= 'Use <b>' . $password . '</b> as the password to log into the link below <br> ';
    $body       .= 'Log in to your user dashboard here: <a href=" ' . admin_url . ' ">' . admin_url . '</a>';
    $body       .= '</p>';

    email($email, $subject, $name, $body);
    $success['admin'] = 207;
    render_success($return_url . '?id=' .  encrypt($id));
}




function post_inquiry()
{
    global $arr;
    global $error;
    global $success;
    $return_url = base_uri . 'contact?suc';

    for_loop();

    $arr['inquiry_id'] = create_id('inquiry', 'inquiry_id');

    if (!build_sql_insert('inquiry', $arr)) {
        $error['inquiry'] = 152;
        error_checker($return_url);
    }

    $email      = 'info@lunafrica.com';
    $subject    = APP_NAME . ' Inquiry';
    $name       = APP_NAME;
    $body       = '<p style="font-family:Poppins, sans-serif;"> ';
    $body       .= 'Hello, admin</b> <br>';
    $body       .= 'You have a new inquiry';
    $body       .= '<br>';
    $body       .= '<b>NAME:</b> ' . $arr['inquiry_name'] . ' <br>';
    $body       .= '<br>';
    $body       .= '<b>EMAIL:</b> ' . $arr['inquiry_email'] . ' <br>';
    $body       .= '<br>';
    $body       .= '<b>PHONE:</b> ' . $arr['inquiry_phone'] . ' <br>';
    $body       .= '<br>';
    $body       .= '<b>MESSAGE:</b> ' . $arr['inquiry_message'] . ' <br>';
    $body       .= '<br>';
    $body       .= 'Log in to your admin dashboard : <a href=" ' . admin_url . ' "> CLICK HERE </a> to respond to the request';


    email($email, $subject, $name, $body);
    $success['inquiry'] = 223;
    render_success($return_url);
}




function post_consultation()
{
    global $arr;
    global $error;
    global $success;
    if (isset($_GET['therapy'])) {
        $return_url = consult_url . 'doctors?therapy';
    } else {
        $return_url = consult_url . 'doctors?docs';
    }


    if (!empty($_POST['voucher_name'])) {
        $voucher = $_POST['voucher_name'];
    }
    unset($_POST['voucher_name']);
    unset($_POST['voucher']);
    $sql = "SELECT * FROM voucher WHERE voucher_code = '$voucher' AND voucher_used = 'no' ";
    $row = select_rows($sql)[0];

    if (!empty($row)) {
        $arr['voucher_id'] = $row['voucher_id'];
    }


    for_loop();

    $arr['consultation_id'] = create_id('consultation', 'consultation_id');

    // 	cout($arr);
    if (!build_sql_insert('consultation', $arr)) {
        $error['consultation'] = 160;
        error_checker($return_url);
    }

    $success['consultation'] = 231;
    render_success($return_url . '&id=' . encrypt($arr['consultation_id']));
}

function post_book_doctor()
{
    global $arr;
    global $error;
    global $success;
    $return_url = consult_url . 'schedule.php?doc_id=' . $_GET['doc_id'] . '&conid=' . $_GET['con_id'];

    $arr['doctor_id'] = $_GET['doc_id'];
    // cout($_GET['con_id']);
    if (!build_sql_edit('consultation', $arr, $_GET['con_id'], 'consultation_id')) {
        $error['consultation'] = 153;
        error_checker($return_url . '?failed');
    }

    $success['consultation'] = 228;
    render_success($return_url);
}


function post_new_password()
{
    global $arr;
    global $error;
    global $success;
    $return_url = consult_url . 'profile';

    // 	$password = md5($_POST['password']);

    $arr['user_password']       = password_hashing_hybrid_maker_checker($_POST['user_password']);

    if (!build_sql_edit('user', $arr, $_SESSION['user_id'], 'user_id')) {
        $error['user'] = 153;
        error_checker($return_url . '?failed');
    }


    $subject    = APP_NAME . ' Password Change';
    $name       = APP_NAME;
    $body       = '<p style="font-family:Poppins, sans-serif;"> ';
    $body       .= 'Hello, <b> ' . $_SESSION['user_name'] . ' </b> <br>';
    $body       .= 'Your account\'s password has been successfully changed.';
    $body       .= '<br>';
    $body       .= 'You may log in to your account in the future with these new credentials';
    $body       .= '<br>';
    $body       .= '<b>EMAIL:</b> ' . $_SESSION['user_email'] . ' <br>';
    $body       .= '<br>';
    $body       .= '<b>PASSWORD:</b> ' . $_POST['user_password'] . ' <br>';
    $body       .= '<br>';


    email($_SESSION['user_email'], $subject, $name, $body);

    $success['user'] = 224;
    render_success($return_url);
}

function create_id($table, $id)
{
    $date_today = date('Ymd');

    $table_prifix = array(
        'admin'             => 'ADM' . $date_today,
        'banner'            => 'BNR' . $date_today,
        'filter'            => 'FIL' . $date_today,
        'inquiry'           => 'INQ' . $date_today,
        'statistic'         => 'STT' . $date_today,
        'therapist'         => 'THP' . $date_today,
        'speciality'        => 'SPE' . $date_today,
        'company'           => 'CMP' . $date_today,
        'category'          => 'CAT' . $date_today,
        'prescription'      => 'PRE' . $date_today,
        'bookmark'          => 'BKM' . $date_today,
        'user'              => 'USR' . $date_today,
        'note'              => 'NOT' . $date_today,
        'post'              => 'PST' . $date_today,
        'board'             => 'BRD' . $date_today,
        'therapist_move'    => 'TPM' . $date_today,
        'subscription'      => 'SUB' . $date_today,
        'session'           => 'SES' . $date_today,
        'voucher'           => 'VOC' . $date_today,
        'subscriber'        => 'SUB' . $date_today,
        'corporate'         => 'CPR' . $date_today
    );

    $random_str = $table_prifix[$table] . rand_str();

    $get_id     = get_ids($table, $id, $random_str);

    while ($get_id == true) {
        $random_str = $table_prifix[$table] . rand_str();
        $get_id     = get_ids($table, $id, $random_str);
    }
    return $random_str;
}

function delete_file($image, $table, $id_name)
{
    $id_value = $_SESSION['edit'];

    $sql = "select $image from $table where $id_name = '$id_value'";
    $row = select_rows($sql)[0];

    return unlink(TARGET_DIR  . 'images/' . $row[$image]);
}

function for_loop()
{
    global $arr;

    foreach ($_POST as $key => $value) {
        $arr[$key] = security($key);
    }
}

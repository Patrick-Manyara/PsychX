<?php
function get_all_users($type = '')
{
    $sql = "SELECT * FROM user ";
    $type != '' ? $sql .= " WHERE user_type = '$type' " : '';
    $sql .= " ORDER BY user_date_created DESC";
    return select_rows($sql);
}

function get_user_by_id($id)
{
    $sql = "SELECT * FROM user WHERE user_id = '$id' ";
    return select_rows($sql)[0];
}


function get_user($attr, $col = 'user_email', $login = false)
{
    $sql = "SELECT * 
        FROM 
            user 
        WHERE 
            $col='$attr'
    ";

    return select_rows($sql)[0];
}

function get_user_profile()
{
    $sql = "
        SELECT
            *
        FROM user
    ";

    return select_rows($sql);
}

function get_login()
{
    global $error;
    
    $email      = $_POST['user_email'];
    
    
    if(isset($_GET['from'])){
        $redirect_url = base_url . $_GET['from'];
        $failed_url = base_url . $_GET['from'];
    }elseif(isset($_GET['payment'])){
        $redirect_url = base_uri .'payment';
        $failed_url = base_uri . 'payment?payment&failed';
    }else{
        $redirect_url = base_uri;
        $failed_url = base_uri .'login?failed';
    }
    
    // cout($redirect_url);

    writing_system_logs("Logging user of email: [ $email ] in, session: [ " . json_encode($_SESSION) . ' ]');

    error_checker($redirect_url);

    $login = get_user($email, 'user_email', true);

    if (empty($login)) {
        $error['login'] = 135;
        writing_system_logs("Login failed with reason: [ " . $error[135] . ' ] for session: [ ' . json_encode($_SESSION) . ' ]');
        error_checker($failed_url);
    }
    
    
    
    if (!password_hashing_hybrid_maker_checker($_POST['user_password'], $login['user_password'])) {
        $error['login'] = 135;
        writing_system_logs("Password_Login failed with reason: [ " . $error[135] . ' ] for session: [ ' . json_encode($_SESSION) . ' ]');
        error_checker($failed_url);
    }

    $sql = "SELECT * FROM bookmark WHERE  user_id = '' AND device_id = '$_COOKIE[device]' ";
    $row = select_rows($sql);
    if(!empty($row)){
        foreach($row as $item){
            $arr2 = array();
            $arr2['user_id'] = $login['user_id'];
            build_sql_edit('bookmark',$arr2,$item['bookmark_id'],'bookmark_id');
        }
    }


    $session_login  = array(
        'login'             => true,
        'user_email'        => $email,
        'user_name'         => $login['user_name'],
        'user_id'           => $login['user_id'],
        'success'           => array('login' => 204)
    );

    session_assignment($session_login);
    writing_system_logs("Login successful session created: [ " . json_encode($_SESSION) . ' ]');
    redirect_header($redirect_url);
}


?>
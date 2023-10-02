<?php
function get_all_corporates($type = '')
{
    $sql = "SELECT * FROM corporate ";
    $sql .= " ORDER BY corporate_date_created DESC";
    return select_rows($sql);
}

function get_corporate_by_id($id)
{
    $sql = "SELECT * FROM corporate WHERE corporate_id = '$id' ";
    return select_rows($sql)[0];
}


function get_corporate($attr, $col = 'corporate_email')
{
    $sql = "SELECT * 
        FROM 
            corporate 
        WHERE 
            $col='$attr'
    ";

    return select_rows($sql)[0];
}

function get_corporate_profile()
{
    $sql = "
        SELECT
            *
        FROM corporate
    ";

    return select_rows($sql);
}

function get_corporate_login()
{
    global $error;
    $email      = $_POST['corporate_email'];

    writing_system_logs("Logging user of email: [ $email ] in, session: [ " . json_encode($_SESSION) . ' ]');

    error_checker(corporate_url);

    $login = get_corporate($email, 'corporate_email', true);

    if (empty($login)) {
        $error['login'] = 135;
        writing_system_logs("Login failed with reason: [ " . $error[135] . ' ] for session: [ ' . json_encode($_SESSION) . ' ]');
        error_checker(corporate_url);
    }

    if (!password_hashing_hybrid_maker_checker($_POST['corporate_password'], $login['corporate_password'])) {
        $error['login'] = 135;
        writing_system_logs("Password_Login failed with reason: [ " . $error[135] . ' ] for session: [ ' . json_encode($_SESSION) . ' ]');
        error_checker(corporate_url);
    }

    $session_login  = array(
        'corporate_login'       => true,
        'corporate_email'       => $email,
        'corporate_name'        => $login['corporate_name'],
        'corporate_id'          => $login['corporate_id'],
        'success'               => array('login' => 204)
    );

    session_assignment($session_login);
    writing_system_logs("Login successful session created: [ " . json_encode($_SESSION) . ' ]');
    redirect_header(corporate_url);
}


?>
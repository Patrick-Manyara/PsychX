<?php
function get_therapist($attr, $col = 'therapist_email', $login = false)
{
    $sql = "SELECT * FROM  therapist WHERE  $col='$attr' ";
    return select_rows($sql)[0];
}

function get_therapist_profile()
{
    $sql = "
        SELECT
            *
        FROM therapist
    ";

    return select_rows($sql);
}

function get_therapist_login()
{
    global $error;
    $email      = $_POST['therapist_email'];

    writing_system_logs("Logging user of email: [ $email ] in, session: [ " . json_encode($_SESSION) . ' ]');

    error_checker(therapist_url);

    $login = get_therapist($email, 'therapist_email', true);

    if (empty($login)) {
        $error['login'] = 135;
        writing_system_logs("Login failed with reason: [ " . $error[135] . ' ] for session: [ ' . json_encode($_SESSION) . ' ]');
        error_checker(therapist_url);
    }

    if (!password_hashing_hybrid_maker_checker($_POST['therapist_password'], $login['therapist_password'])) {
        $error['login'] = 135;
        writing_system_logs("Password_Login failed with reason: [ " . $error[135] . ' ] for session: [ ' . json_encode($_SESSION) . ' ]');
        error_checker(therapist_url);
    }

    $session_login  = array(
        'therapist_login'       => true,
        'therapist_email'       => $email,
        'therapist_name'        => $login['therapist_name'],
        'therapist_id'          => $login['therapist_id'],
        'success'               => array('therapist_login' => 204)
    );

    session_assignment($session_login);
    writing_system_logs("Login successful session created: [ " . json_encode($_SESSION) . ' ]');
    redirect_header(therapist_url);
}

function get_all_therapists($status = '', $limit = '')
{
    $sql = "SELECT * FROM therapist ";
    $status != '' ? $sql .= " WHERE therapist_activation = '$status' " : " " ;
    $sql .= "ORDER BY rand()";
    $limit != '' ? $sql .= " LIMIT $limit " : " " ;
    return select_rows($sql);
}

function get_saved_therapists($column,$value)
{
    $sql = "SELECT * FROM bookmark WHERE $column = '$value' ";
    return select_rows($sql);
}

function get_rebook_therapist($value)
{
    $sql = "SELECT * FROM therapist WHERE therapist_id = '$value' ";
    return select_rows($sql);
}

function get_all_groups()
{
    $sql = "SELECT * FROM company ";
    $sql .= "ORDER BY rand()";
    return select_rows($sql);
}

function get_locations()
{
    $sql = "SELECT therapist_location FROM therapist GROUP BY therapist_location ORDER BY therapist_location ASC";
    return select_rows($sql);
}


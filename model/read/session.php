<?php
function get_all_sessions($user_id = '', $therapist_id = '')
{
    $sql = "SELECT * FROM session JOIN therapist ON session.therapist_id = therapist.therapist_id ";
    $sql .= " JOIN user ON session.client_id  = user.user_id WHERE session.session_payment_status = 'paid' ";
    $user_id != '' ? $sql .= " AND session.client_id = '$user_id' " : " ";
    $therapist_id != '' ? $sql .= " AND session.therapist_id = '$therapist_id' " : " ";
    return select_rows($sql);
}

function get_session_today($user_id = '', $therapist_id = '')
{
    $today          = date('Y-m-d');
    $sql = "SELECT * FROM session JOIN therapist ON session.therapist_id = therapist.therapist_id ";
    $user_id != '' ? $sql .= " WHERE session.client_id = '$user_id' " : " ";
    $therapist_id != '' ? $sql .= " WHERE session.therapist_id = '$therapist_id' " : " ";
    $sql .= " AND session.session_date = '$today' AND session.session_payment_status = 'paid'  ";
    return select_rows($sql)[0];
}

function get_past_sessions($user_id = '', $therapist_id = '')
{
    $today          = date('Y-m-d');
    $sql = "SELECT * FROM session JOIN therapist ON session.therapist_id = therapist.therapist_id ";
    $user_id != '' ? $sql .= " WHERE session.client_id = '$user_id' " : " ";
    $therapist_id != '' ? $sql .= " WHERE session.therapist_id = '$therapist_id' " : " ";
    $sql .= " AND session.session_date < '$today'  AND session.session_payment_status = 'paid' LIMIT 10 ";
    return select_rows($sql);
}

function get_upcoming_sessions($user_id = '', $therapist_id = '')
{
    $today          = date('Y-m-d');
    $sql = "SELECT * FROM session JOIN therapist ON session.therapist_id = therapist.therapist_id ";
    $user_id != '' ? $sql .= " WHERE session.client_id = '$user_id' " : " ";
    $therapist_id != '' ? $sql .= " WHERE session.therapist_id = '$therapist_id' " : " ";
    $sql .= " AND session.session_date > '$today'  AND session.session_payment_status = 'paid' LIMIT 10 ";
    return select_rows($sql);
}

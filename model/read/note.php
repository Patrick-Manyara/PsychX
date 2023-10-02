<?php
function get_all_notes($therapist_id = '')
{
    $sql = "SELECT note.*, session.therapist_id, session.session_payment_status FROM session JOIN note ON session.session_id = note.session_id WHERE session.session_payment_status = 'paid' ";
    $therapist_id != '' ? $sql .= " AND session.therapist_id = '$therapist_id' " : " " ;
    $sql .= " ORDER BY note.note_date_created";
    return select_rows($sql);
}

?>
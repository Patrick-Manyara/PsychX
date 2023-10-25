<?php
include_once  'path.php';
require_once MODEL_PATH . "operations.php";

$conn = connect();
$choiceArray = $_POST['choiceArray'];

$gender = $choiceArray[4]; 

if ($gender == 'male' || $gender == 'female') {
    $sql = "SELECT * FROM therapist WHERE therapist_gender = '$gender' AND therapist_status = 'active' AND therapist_activation = 'activated' ORDER BY RAND() LIMIT 1";
} else {
    $sql = "SELECT * FROM therapist WHERE therapist_status = 'active' AND therapist_activation = 'activated' ORDER BY RAND() LIMIT 1";
}
$result = select_rows($sql);

if (!empty($result)) {
    $therapist_id =  $result[0]['therapist_id'];
    $encrypted_id = encrypt($therapist_id);
    echo $encrypted_id;
} else {
    echo "No therapists found.";
    header("Location: find");
}
?>

?>

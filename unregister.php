<?php
$json = array();
/**
 * Remove a user device
 */
if (isset($_POST["regId"])) {
    $gcm_regid = $_POST["regId"]; // GCM Registration ID
    // Store user details in db
    include_once './db_functions.php';
    include_once './GCM.php';
 
    $db = new DB_Functions();
    $gcm = new GCM();
 
    $res = $db->deleteUser($gcm_regid);
 
    echo TRUE;
} else {
    // user details missing
}
?>

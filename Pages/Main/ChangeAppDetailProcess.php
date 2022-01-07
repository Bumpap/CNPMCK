<?php
include '../../config/config.php';
if (isset($_POST['saveAdmin'])) {
    $save = $_POST['saveAdmin'];
} else {
    $save = '';
}

if (isset($_POST['ID_App'])) {
    $ID = $_POST['ID_App'];
} else {
    $ID = '';
}
if (isset($_POST['Name'])) {
    $fullname = $_POST['Name'];
} else {
    $fullname = '';
}
if (isset($_POST['Type_App'])) {
    $type_app = $_POST['Type_App'];
} else {
    $type_app = '';
}

if (isset($_POST['Describe_App'])) {
    $describe_app = $_POST['Describe_App'];
} else {
    $describe_app= '';
}
if (isset($_POST['Paid'])) {
    $paid = $_POST['Paid'];
} else {
    $paid = '';
}



if (isset($_POST['saveAdmin'])) {
    $sql_update = "UPDATE app_item SET
    app_item.Name = '$fullname',
     app_item.
    -- app_item.Level = '$level',
    -- app_item.Email = '$email'
    WHERE ID_App = '$ID' ";
    mysqli_query($mysqli, $sql_update);
    header(
        'Location:../../index.php?quanly=ManageApplication'
    );
}
?>
<?php
include '../../config/config.php';
if (isset($_POST['save'])) {
    $save = $_POST['save'];
} else {
    $save = '';
}

if (isset($_POST['ID'])) {
    $ID = $_POST['ID'];
} else {
    $ID = '';
}
if (isset($_POST['Icon'])) {
    $fullname = $_POST['Icon'];
} else {
    $fullname = '';
}

if (isset($_POST['Type_App'])) {
    $email = $_POST['Type_App'];
} else {
    $email = '';
}
if (isset($_POST['Describe_App'])) {
    $password = $_POST['Describe_App'];
} else {
    $password = '';
}
if (isset($_POST['Paid'])) {
    $level = $_POST['Paid'];
} else {
    $level = '';
}


if (isset($_POST['save'])) {
    $sql_update = "UPDATE  SET
    user.FullName = '$fullname',
    user.Pass = '$password',
    user.Level = '$level',
    user.Email = '$email'
    WHERE ID = '$ID' ";
    mysqli_query($mysqli, $sql_update);
    header(
        'Location:../../index.php?quanly=ManageAccount'
    );
}
?>
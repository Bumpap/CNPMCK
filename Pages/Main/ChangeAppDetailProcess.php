<?php
include '../../config/config.php';
if (isset($_POST['save'])) {
    $save = $_POST['save'];
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

// if (isset($_POST['email'])) {
//     $email = $_POST['email'];
// } else {
//     $email = '';
// }
// if (isset($_POST['password'])) {
//     $password = $_POST['password'];
// } else {
//     $password = '';
// }
// if (isset($_POST['level'])) {
//     $level = $_POST['level'];
// } else {
//     $level = '';
// }


if (isset($_POST['save'])) {
    $sql_update = "UPDATE app_item SET
    app_item.Name = '$fullname',
    -- app_item.Pass = '$password',
    -- app_item.Level = '$level',
    -- app_item.Email = '$email'
    WHERE ID_App = '$ID' ";
    mysqli_query($mysqli, $sql_update);
    header(
        'Location:../../index.php?quanly=ManageApplication'
    );
}
?>
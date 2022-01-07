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

    if (isset($_FILES['Image'])) {
        $Image = "image/" . $_FILES['Image']['name'];
        $Image_tmp =  $_FILES['Image']['tmp_name'];
        $Path = "../../image/" . $_FILES['Image']['name'];
    } else {
        $Image = "";
        $Image_tmp = "";
        $Path =  "";
    }


if (isset($_POST['save'])) {
    $sql_update = "UPDATE app_item SET
    Icon = '$Image',
    app_item.Name = '$fullname',
    Type_App = ' $type_app',
    Paid = '$paid',
    Describe_App = '$describe_app',
    WHERE ID_App = '$ID' ";
    mysqli_query($mysqli, $sql_update);
    move_uploaded_file($Image_tmp,$Path);
    header(
        'Location:../../index.php?quanly=ManageApplication'
    );
}
?>
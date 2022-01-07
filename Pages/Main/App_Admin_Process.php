<?php
    include('../../config/config.php');

    if(isset($_POST['AddApp']))
    {
        $idedit = $_POST['AddApp'];
    }

    if(isset($_POST['Name']))
    {
        $Name = $_POST['Name'];
    }
    else
    {      
        $Name = '';
    }

    if(isset($_POST['Type_App']))
    {
        $Type_App = $_POST['Type_App'];
    }
    else
    {      
        $Type_App = '';
    }

    if(isset($_POST['Paid']))
    {
        $Paid = $_POST['Paid'];
    }
    else
    {      
        $Paid = '';
    }

    if(isset($_POST['Develop']))
    {
        $Describe_App = "Admin";
    }
    if(isset($_POST['Describe_App']))
    {
        $Describe_App = $_POST['Describe_App'];
    }
    else
    {      
        $Describe_App = '';
    }
    if(isset($_POST['Image'])){
        $Image = "../images/".$_FILES['Image']['name'];
        $Image_tmp =$_FILES['Image']['tmp_name'];
        $Path = "../../../images" .$_FILES['Image']['name'];

    } else {
        $Image = "";
        $Image_tmp ="";
        $Path = "";
    }

    if(isset($_POST['file'])){
         $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('zip');

        if(in_array($fileActualExt,$allowed)){
            if($fileError ===0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'files/'.$fileName;
                    // $fileTmpName = rename($fileTmpName,$fileName);
                    $tmp = move_uploaded_file($fileTmpName,$fileDestination);
                    // move_uploaded_file($tmp,$fileDestination);
                    echo $fileDestination ;

                }
                else{
                    echo "Too big!";
                }

            }
            else{
                echo"There was an error ! Please try again later";
            }
        }
    }
    $Admin = "Admin";
    $Status = "Valid";
    if(isset($_POST['AddApp'])){
        $sql = "INSERT INTO app_item(app_item.Name,Type_App,Paid,Describe_App,Develop,Num_Down,Icon,app_item.Status) 
        values('$Name','$Type_App','$Paid','$Describe_App','$Admin','$Num_Down','$Image ','$Status')";
         mysqli_query($mysqli, $sql);
         move_uploaded_file($Image_tmp,$Path);
        header('Location:../../index.php?quanly=ManageApplication');
    }



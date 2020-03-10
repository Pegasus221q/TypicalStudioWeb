<?php
    include_once './session.php';
    include_once './database.php';

    $user_id = $_SESSION['user_id'];

    $first_name = mysqli_real_escape_string($link, $_POST['name']);
    $last_name = mysqli_real_escape_string($link, $_POST['lastname']);
    $username = mysqli_real_escape_string($link,$_POST['username']);

    if ($_FILES["fileToUpload"] != NULL)
    {
        echo $_FILES["fileToUpload"];
    }


    if($first_name != $_SESSION['first_name'])
    {
        $query = "UPDATE users SET first_name = '$first_name' WHERE (id = '$user_id')";

        mysqli_query($link, $query);
    }

    if($last_name != $_SESSION['last_name'])
    {
        $query1 = "UPDATE users SET last_name = '$last_name' WHERE (id = '$user_id')";

        mysqli_query($link, $query1);
    }

    if($username != $_SESSION['username'])
    {
        $query2 = "UPDATE users SET username = '$username' WHERE (id = '$user_id')";

        mysqli_query($link, $query2);

    }

    if($_FILES['fileToUpload'] != NULL)
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
    }
}
        // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;

                $query4 = "UPDATE users SET avatar = '$target_file1' WHERE (id = '$user_id')";

                mysqli_query($link, $query4);
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 1000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

                $query3 = "UPDATE users SET avatar = '$target_file' WHERE (id = '$user_id')";

                mysqli_query($link, $query3);



                } else {
                    echo "Sorry, there was an error uploading your file.";
    }
}
    }

    if($_FILES['fileToUpload1'] != NULL)
    {
        $target_dir = "uploads/";
        $target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
    }
}
        // Check if file already exists
            if (file_exists($target_file1)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;

                $query4 = "UPDATE users SET banner = '$target_file1' WHERE (id = '$user_id')";

                mysqli_query($link, $query4);
            }
            // Check file size
            if ($_FILES["fileToUpload1"]["size"] > 2500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {
                echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";

                $query4 = "UPDATE users SET banner = '$target_file1' WHERE (id = '$user_id')";

                mysqli_query($link, $query4);
                }
                else {
                    echo "Sorry, there was an error uploading your file.";
    }
}
    }

    header("location:session_update.php");

?>
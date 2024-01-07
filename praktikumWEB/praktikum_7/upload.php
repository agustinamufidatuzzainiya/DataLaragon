<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post">
        Choose a file to upload:
        <input type="file" name="uploadedfile"><br>
        <input type="submit" value="Upload File">
    </form>
    <?php
        if(isset($_FILES['uploadedfile'])) {
            $target_path = "C:/laragon/www/praktikum_7/";
            $target_path = $target_path . basename($_FILES['uploadedfile']['name']);
            if(move_uploaded_file($_FILES['uploadedfile']
            ['tmp_name'],$target_path)) {
                echo "The file ". basename( $_FILES['uploadedfile']
                ['name']). " has been uploaded";
            } else {
                echo "There was an error uploading the file, please try again!";
            }
        }
    ?>
</body>
</html>
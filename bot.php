<form enctype="multipart/form-data" action="bot.php" method="POST">
    <input type="file" name="file"></input>
    <input type="submit"></input>
</form>
<?php
if(!empty($_FILES["file"])){
    $path = basename($_FILES["file"]["name"]);
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $path)) {
        echo "The file ".basename($_FILES["file"]["name"])." has been uploaded";
    }else{
        echo "There was an error uploading the file, please try again!";
    }
}
;?>

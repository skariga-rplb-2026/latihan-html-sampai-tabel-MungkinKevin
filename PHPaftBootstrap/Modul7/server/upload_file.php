<?php
if ($_FILES['file']["error"] > 0) {
    echo "Return Code: " . $_FILES['file']['error'] . "<br>";
} else {
    echo "Upload: " .$_FILES['file']['name'] . "<br>";
    echo "Type: " . $_FILES['file']['type'] . "<br>";
    echo "Size: " . $_FILES['file']['size'] . "kb<br>";
    echo "Temp file: " . $_FILES['file']['tmp_name'] . "<br>";

    if (file_exists("unggah/" . $_FILES['file']['name'])) {
        $_FILES['file']['name'] . " already exist. ";
    } else {
        move_uploaded_file($_FILES['file']['tmp_name'], "unggah/" . $_FILES['file']['name']);
        echo "Stored in: " . "unggah/" . $_FILES['file']['name'];
    }
}
?>
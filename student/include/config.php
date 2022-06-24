
<?php
    // Create connection
    //$con = new mysqli("localhost", "", "", "");
    $con = new mysqli("localhost", "nsucms_cms", "wpNnnOv5", "nsucms_cms");
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>
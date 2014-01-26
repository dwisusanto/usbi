<?php
if ($_GET['randomId'] != "OwsTL9r05Z8ZLWBN1Pdg1tMEpeZy6vkxURYRWYAfkyZ5V2alx_FdUzFPZu61r9Oq") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  

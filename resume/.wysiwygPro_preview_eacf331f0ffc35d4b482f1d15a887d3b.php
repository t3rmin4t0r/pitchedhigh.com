<?php
if ($_GET['randomId'] != "_OXUrOqoMTa95azQRG0dby66C_G5jYo3Bej4TPbdu6bkuO6Q9CK8ZgxNT0xgPfiu") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  

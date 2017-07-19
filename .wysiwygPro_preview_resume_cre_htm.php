<?php
if ($_GET['randomId'] != "5JjMtQuqXXaRAjX290tGcL6xtaw2M0cQkyylAKm0RYZIosRPQCUGDH17ADCfUgob4dO3z8tH68Sb3Qox8EazTbrYLQ5VLVC9GyofubBdZo6XIfmq6wE4JAB63nPi8uPO0pdGDu24efUGH2RKI_NQSpE_R3GhgONwhLe5pdqBlezZLEu2dBmWKVXmmkaXzUr2dJrEMYxfVN5l3sAkZrn8Ehkp0_YvDX0u10G15ud7sG1_DZ_7Gr2Cdh2g3mrv9hAK") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  

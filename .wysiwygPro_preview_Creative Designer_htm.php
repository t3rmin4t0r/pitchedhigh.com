<?php
if ($_GET['randomId'] != "DbO5ZmiSGTV6u9RhqRT9rUEAN1G2u9gxrFvadSpOcyYKUBCy2gGokOvH58HHP8hD74bghdYTJdYX1awl84Kcxao1C23OF1GsNBbMhuWwG35_VLNemJKXEZIRx7TkERk_oPu2a_OIMUuQSO_QkZBzgVefKonvomL1Vwcvb8J_cTvGx5mMh2m5sIrCuWKiXPvyjZdbqTuZRfP1aOjZClCr1IbvVfVrFBF6KDPYd1zIvskgI_csl9U0JRsQ_W50MKM0") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  

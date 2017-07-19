<?php
if ($_GET['randomId'] != "BDa4inQyQGOEYa0PPwovu_f16QiWK7sHUufJeQemtcCEffoNLuu_4c2dXjX1BllfxB7EMGDGPLObxqBCtupWKZZ44vWBna1XeYFXm2mxzKTDBYscB3DHN1fnIPQwvzuNcQaNZRe6uQOS7VPHhO1ZohlPAxqEg5e7VzPDEkLuy2Oiz7029BsJ3aTR2i_wGOYp9oFevd9tszgKerPEwnVeZsbfULSwecGLAO0TlHCE9NrjTGCH9PNvo6k3PYGGPugO") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  

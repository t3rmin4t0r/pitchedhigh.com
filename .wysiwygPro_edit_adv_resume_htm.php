<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "BDa4inQyQGOEYa0PPwovu_f16QiWK7sHUufJeQemtcCEffoNLuu_4c2dXjX1BllfxB7EMGDGPLObxqBCtupWKZZ44vWBna1XeYFXm2mxzKTDBYscB3DHN1fnIPQwvzuNcQaNZRe6uQOS7VPHhO1ZohlPAxqEg5e7VzPDEkLuy2Oiz7029BsJ3aTR2i_wGOYp9oFevd9tszgKerPEwnVeZsbfULSwecGLAO0TlHCE9NrjTGCH9PNvo6k3PYGGPugO") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing adv_resume.htm</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="http://pitchedhigh.com:2082/frontend/x3/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="iso-8859-1">
    <input type="hidden" name="baseurl" value="http://pitchedhigh.com/">
    <input type="hidden" name="basedir" value="/home/pitched/public_html/">
    <input type="hidden" name="udir" value="/home/pitched/public_html">
    <input type="hidden" name="ufile" value="adv_resume.htm">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
    <input type="hidden" name="file" value="adv_resume.htm">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://pitchedhigh.com:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="iso-8859-1">
    <input type="hidden" name="baseurl" value="http://pitchedhigh.com/">
    <input type="hidden" name="basedir" value="/home/pitched/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
        <input type="hidden" name="file" value="adv_resume.htm">
    <input type="hidden" name="udir" value="/home/pitched/public_html">
    <input type="hidden" name="ufile" value="adv_resume.htm">

        </form>
</div>
<script language="javascript">
<!--//

function setHtmlFilters(editor) {
// Design view filter
editor.addHTMLFilter('design', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />');
});

// Source view filter
editor.addHTMLFilter('source', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />');
});
}

// this function updates the code in the textarea and then closes this window
function do_save() {
    document.mform.page.value = WPro.editors[0].getValue();
	document.mform.submit();
}
function do_abort() {
	document.abortform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/wysiwygPro/wysiwygPro.class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

$editor->registerButton('save', 'Save',
        'do_save();', '##buttonURL##save.gif', 22, 22,
        'savehandler'); 
$editor->addRegisteredButton('save', 'before:print' );
$editor->addJSButtonStateHandler ('savehandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 


$editor->registerButton('cancel', 'Cancel',
        'do_abort();', '##buttonURL##close.gif', 22, 22,
        'cancelhandler'); 
$editor->addRegisteredButton('cancel', 'before:print' );
$editor->addJSButtonStateHandler ('cancelhandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 
$editor->theme = 'blue'; 
$editor->addJSEditorEvent('load', 'function(editor){editor.fullWindow();setHtmlFilters(editor);}');

$body = '<html>
<head>
<title></title>
</head>


<body bgcolor="#FFFFFF">

</body>


</html>
';

$editor->baseURL = "http://pitchedhigh.com/";
$editor->set_code($body);

$editor->registerSeparator('savecan');

// add a spacer:
$editor->addRegisteredButton('savecan', 'after:cancel');

//$editor->set_charset('iso-8859-1');
$editor->mediaDir = '/home/pitched/public_html/';
$editor->mediaURL = 'http://pitchedhigh.com/';
$editor->imageDir = '/home/pitched/public_html/';
$editor->imageURL = 'http://pitchedhigh.com/';
$editor->documentDir = '/home/pitched/public_html/';
$editor->documentURL = 'http://pitchedhigh.com/';
$editor->emoticonDir = '/home/pitched/public_html/.smileys/';
$editor->emoticonURL = 'http://pitchedhigh.com/.smileys/';
$editor->loadPlugin('serverPreview'); 
$editor->plugins['serverPreview']->URL = 'http://pitchedhigh.com/.wysiwygPro_preview_adv_resume_htm.php?randomId=BDa4inQyQGOEYa0PPwovu_f16QiWK7sHUufJeQemtcCEffoNLuu_4c2dXjX1BllfxB7EMGDGPLObxqBCtupWKZZ44vWBna1XeYFXm2mxzKTDBYscB3DHN1fnIPQwvzuNcQaNZRe6uQOS7VPHhO1ZohlPAxqEg5e7VzPDEkLuy2Oiz7029BsJ3aTR2i_wGOYp9oFevd9tszgKerPEwnVeZsbfULSwecGLAO0TlHCE9NrjTGCH9PNvo6k3PYGGPugO';
// print the editor to the browser:
$editor->htmlCharset = 'iso-8859-1';
$editor->display('100%','450');

?>
</div>
<script>

</script>

</body>
</html>
<?php ob_end_flush() ?>

<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "OBLqeKDoC_XVGvhZGFgW0kFJ7uttbXgDgoNSkR0Sq2JCA5AJtAj8nFTAz36KsKlb2Nv8Lwox_FPoe94sF5coT3XdDHiA3WwMxCWferiJU2uN_3rzbmBsSgKyUOvKBTAc8VVWixLOVxW5GmiXuhmmCtbw907WMhIXRobvjfVLzOnuVAzX8UiXUrnpuFhfv9qzuOkjLSZkuwhs2xti0oxyXwt2EG8ECyALKTs5joEB5_lgZKhBbK4lpt1VZvm0R2Pj") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing qut.html</title>
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
    <input type="hidden" name="ufile" value="qut.html">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
    <input type="hidden" name="file" value="qut.html">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://pitchedhigh.com:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="iso-8859-1">
    <input type="hidden" name="baseurl" value="http://pitchedhigh.com/">
    <input type="hidden" name="basedir" value="/home/pitched/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
        <input type="hidden" name="file" value="qut.html">
    <input type="hidden" name="udir" value="/home/pitched/public_html">
    <input type="hidden" name="ufile" value="qut.html">

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

$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><title>KAVITA SRINIVASAN</title>

<style type="text/css">
body
{
  background-color:#000000;
  height:auto;
  width:auto; 
  
}
#picture
{
  background:#000000;
  height:10%;
  width:100%; 
  
}
.content
{
  background:#000000;
  font-family:Verdana;
  font:verdana;
  font:Verdana; bolder;
  font-size:15px ;
  color:#FFCC66; 
  height:70%; 
  width:100%;
  text-align:center;   
  }
  
.body_content
{
  background::#000000;
  font-family:"Monotype Corsiva";
  font:"Monotype Corsiva";
  font-size:18px;
  color:#FFFFCC;
  text-align:justify;
  width:80%;
  height:80%;  
}

#baselink
{
  color:#FF9966;
  font-family:verdana;
  font:verdana;
  font-size:small;
  height:20%;
  width:100%;
  text-align:center;
}
  
a:link {
	color: #FFCC66;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFF66;
}
a:hover {
	text-decoration: none;
	color: #FF9966;
}
a:active {
	text-decoration: none;
	color: #FF9966;
}
</style></head><body>
  <div id="picture" align="center"> <img src="main.jpg" align="middle" height="50%" width="20%"></div>
  <div id="main_menu" class="content" style="float: left; clear: left;"><br>
     <a href="http://www.pitchedhigh.com/About.html">About the author</a><br><br>
     <a href="https://qutvirtual.qut.edu.au/portal/pls/portal/qv_file_manager_p.show?p_arg_names=p_referrer&p_arg_values=&p_arg_names=p_student_id&p_arg_values=6180566" target="_blank">Presentations</a><br><br>
     <a href="https://qutvirtual.qut.edu.au/portal/pls/portal/qv_file_manager_p.show?p_arg_names=p_referrer&p_arg_values=&p_arg_names=p_student_id&p_arg_values=6180566" target="_blank">Documents</a><br><br>
     <a href="https://qutvirtual.qut.edu.au/portal/page/portal/QUTVIRTUAL/STUDENT/Welcome" target="_blank">My Virtual</a><br><br>
     <a href="http://www.courses.qut.edu.au/cgi-bin/WebObjects/Courses.woa/wa/selectMajorFromMain?courseID=4107" target="_blank">Course Link</a><br><br>
<a href="http://www.pichigh.wordpress.com" target="_blank">Academic Journal</a><br><br>
  </div>
  <div id="baselink" align="center">
  _________<br /><br /><br /><br /><br />
  <a id="baselink" href="">write to me</a> | <a id="baselink" href="http://pitchedhigh.com/guestbook.html">guestbook</a>
  </div>
 </body></html>
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
$editor->plugins['serverPreview']->URL = 'http://pitchedhigh.com/.wysiwygPro_preview_qut_html.php?randomId=OBLqeKDoC_XVGvhZGFgW0kFJ7uttbXgDgoNSkR0Sq2JCA5AJtAj8nFTAz36KsKlb2Nv8Lwox_FPoe94sF5coT3XdDHiA3WwMxCWferiJU2uN_3rzbmBsSgKyUOvKBTAc8VVWixLOVxW5GmiXuhmmCtbw907WMhIXRobvjfVLzOnuVAzX8UiXUrnpuFhfv9qzuOkjLSZkuwhs2xti0oxyXwt2EG8ECyALKTs5joEB5_lgZKhBbK4lpt1VZvm0R2Pj';
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

<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "VbKu64sjBRZpJQj0FxPz81fjJXo4c_ReGXxBsqfvkp78F1OnHVQrNb6RH5lQuRsvaJJ3ms2_yt9e_IGK1dlJHdNQ1rvoSTJ7Lo01MKV7ihMS3VM5H8Ga9RUEV3rIPLlTGsGglnalIi4QuY6dku9DiqlcCX8DKqVSrPfiQkF8rot9IMFEWIVxB8d6blR80TpfSzsP40tgibaDGVU3eHTCQBOYEI5L1L4bn0uptXC5vgFfn8VjO0rvgXtWADyprc4W") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing About.html</title>
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
    <input type="hidden" name="ufile" value="About.html">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
    <input type="hidden" name="file" value="About.html">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://pitchedhigh.com:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="iso-8859-1">
    <input type="hidden" name="baseurl" value="http://pitchedhigh.com/">
    <input type="hidden" name="basedir" value="/home/pitched/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
        <input type="hidden" name="file" value="About.html">
    <input type="hidden" name="udir" value="/home/pitched/public_html">
    <input type="hidden" name="ufile" value="About.html">

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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>KAVITA SRINIVASAN</title>
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
  width:20%;
  color:#FFFF66;
  font:verdana;
  font-family:verdana;
  font-size:16px;
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

.content
{
  background:#000000;
  font-family:verdana;
  font:verdana;
  font:Verdana; bolder;
  font-size:15px ;
  color:#FFCC66;
  height:100%;
  width:20%;
  text-align:center;
  }

.body_content
{
  background::#000000;
  font-family:verdana;
  font:verdana;
  font-size:14px;
  color:#FFFFCC;
  text-align:justify;
  width:80%;
  height:80%;
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
}</style>
</head>
<body>
<div id="picture"> <img alt="" src="main.jpg" align="left" height="50%" width="90%" /> <br />
<br /><br />
<br /></div>
<div id="picture" style="float: right" align="right"><font size="5"><a title="" id="picture" href="/software_test_engineer.pdf" target="_blank">IT Experience<br />
<br /></a><a title="" id="picture" href="/Creative%20Designer.pdf" target="_blank">Advertising Profile</a></a><a title="" id="picture" href="/portfolio.pdf" target="_blank">| Portfolio</a></font></div>
<div id="main_menu" class="content" style="float: left; clear: left"><br />
<a href="/About.html">About the author</a><br />
<br /><a href="/LJ.html">Live Journal</a><br />
<br /><a href="/my_flickr.html">Flickr Page</a><br />
<br /><a href="/delicious.html">Delicious</a><br />
<br /><a href="http://mail.google.com/a/pitchedhigh.com" target="_blank">Webmail</a><br />
<br /></div>
<div class="body_content" style="float: left; clear: none"><br />
Born in the remote town of <a href="http://en.wikipedia.org/wiki/Neyveli">Neyveli</a>
in South Arcot District, Tamil Nadu, the author was brought up in New
Delhi, India. Although brought up like any indian traditionally is,Kavita is
a non-conformist, eradicating all blind beliefs and reviving every
thought with a factual understanding.<br />
<br />A music lover, she has been trained in Carnatic classical music and has been a disciple of <a href="http://sangeetham1.tripod.com/rev1004.htm">Dr Radha Venkatachalam</a>
for 5 years after which she unfortunately had to break her learning.
She has numerous accolades under her belt as a singer, including the
title of State representative for New Delhi for Solo-singing in
National Youth Festival – 1997-98 held in Chennai. Her association with
music has varied over the period and was introduced to both rock and
Jazz form of western music much later in her life.She loves
compositions and does not really find a lot of favoritism pertaining to
a particular artiste. She had recently started learning classical
violin as well.<br />
<br />Her career path has been traced from getting a Bachelors in Technology in Computer Science and Engineering from <a href="http://www.ipu.ac.in/igit/about.htm">Indira Gandhi Institute of Technology</a>,
finding a place as an IT professional in the telecommunication industry and
now she is planning to move ahead for her higher studies in <a href="http://www.courses.qut.edu.au/cgi-bin/WebObjects/Courses.woa/wa/selectMajorFromMain?courseID=3213">Creative Advertising</a> from <a href="http://www.qut.edu.au/">Queensland University of Technology</a>, Australia. She found the labored work of IT too limiting for her expressions and hence plans to make a shift.<br />
<br />On a more personal front, Kavita has been prejudiced about a lot of things in her
life which have all gone through a complete metamorphism. A collection of her thoughts would be soon put up here.<br />
<br /></div>
<div id="baselink" style="float: left" align="center"><br />
<br /><br />
<br /><br />
<a id="baselink" href="mailto:kavita@pitchedhigh.com">write to me</a> | <a id="baselink" href="/guestbook.html">guestbook</a>
| <a id="baselink" href="/current.html">what she is upto</a>
<div id="baselink" style="float: left" align="center"></div></div>
</body>
</html>';

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
$editor->plugins['serverPreview']->URL = 'http://pitchedhigh.com/.wysiwygPro_preview_About_html.php?randomId=VbKu64sjBRZpJQj0FxPz81fjJXo4c_ReGXxBsqfvkp78F1OnHVQrNb6RH5lQuRsvaJJ3ms2_yt9e_IGK1dlJHdNQ1rvoSTJ7Lo01MKV7ihMS3VM5H8Ga9RUEV3rIPLlTGsGglnalIi4QuY6dku9DiqlcCX8DKqVSrPfiQkF8rot9IMFEWIVxB8d6blR80TpfSzsP40tgibaDGVU3eHTCQBOYEI5L1L4bn0uptXC5vgFfn8VjO0rvgXtWADyprc4W';
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

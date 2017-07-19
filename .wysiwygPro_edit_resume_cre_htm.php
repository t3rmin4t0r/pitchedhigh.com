<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "5JjMtQuqXXaRAjX290tGcL6xtaw2M0cQkyylAKm0RYZIosRPQCUGDH17ADCfUgob4dO3z8tH68Sb3Qox8EazTbrYLQ5VLVC9GyofubBdZo6XIfmq6wE4JAB63nPi8uPO0pdGDu24efUGH2RKI_NQSpE_R3GhgONwhLe5pdqBlezZLEu2dBmWKVXmmkaXzUr2dJrEMYxfVN5l3sAkZrn8Ehkp0_YvDX0u10G15ud7sG1_DZ_7Gr2Cdh2g3mrv9hAK") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing resume_cre.htm</title>
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
    <input type="hidden" name="ufile" value="resume_cre.htm">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
    <input type="hidden" name="file" value="resume_cre.htm">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://pitchedhigh.com:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="iso-8859-1">
    <input type="hidden" name="baseurl" value="http://pitchedhigh.com/">
    <input type="hidden" name="basedir" value="/home/pitched/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
        <input type="hidden" name="file" value="resume_cre.htm">
    <input type="hidden" name="udir" value="/home/pitched/public_html">
    <input type="hidden" name="ufile" value="resume_cre.htm">

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

$body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>Editing resume.htm</title>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
<link rel="stylesheet" href="resume_files/editor_theme.css" type="text/css"></head><body>
<div align="center">
<script language="javascript">
<!--//
// this function updates the code in the textarea and then closes this window
function do_save() {
	var code =  htmlCode.getCode();
	document.open();
	document.write(\'<html><form METHOD="POST" name=mform action="http://pitchedhigh.com:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="udir" value="/home/pitched/public_html"><input type="hidden" name="ufile" value="resume.htm"><input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html"><input type="hidden" name="file" value="resume.htm"><input type="hidden" name="doubledecode" value="1">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>\');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write(\'<html><form METHOD="POST" name="mform" action="http://pitchedhigh.com:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/pitched/public_html"><input type="hidden" name="file" value="resume.htm">Aborting Edit&nbsp;....</form></html>\');
	document.close();
	document.mform.submit();
}
//-->
</script>
<div id="htmlCode_load_message" style="display: none; position: absolute; z-index: 1000;"> <table height="417" width="100%"><tbody><tr> <td style="text-align: center;" valign="middle"><div style="border: 1px solid rgb(51, 51, 51); margin: auto; padding: 10px; background-color: rgb(102, 102, 102); width: 100px; color: rgb(255, 255, 255); font-family: verdana,arial,helvetica,sans-serif; font-size: 12px; font-weight: bold;">Please&nbsp;Wait...&nbsp;</div></td></tr></tbody></table></div><script language="JavaScript" type="text/javascript" src="resume_files/MozScript.js"></script><script language="JavaScript" type="text/javascript" src="resume_files/editorShared.js"></script><script language="JavaScript" type="text/javascript" src="resume_files/dialogEditorShared.js"></script><script language="JavaScript" type="text/javascript">
<!--// Hide

/* //////////////////////////////////////////////////////////////////////////
 Application name: WysiwygPro
 Version: 2.2.13.2
 Author: Chris Bolt | http://www.zeus12.com
 Available: http://www.wysiwygpro.com
 (C) Copyright: Chris Bolt 2007
///////////////////////////////////////////////////////////////////////////*/
var wp_directory = \'/3rdparty/WysiwygPro/editor_files/\';

var config_htmlCode = new wp_config(); 
//config_htmlCode.name = \'htmlCode\';
config_htmlCode.instance_lang = \'en-us.php\';
config_htmlCode.encoding = \'iso-8859-1\';
config_htmlCode.xhtml_lang = \'en\';
config_htmlCode.useXHTML = false;
config_htmlCode.baseURLurl = \'\';
config_htmlCode.baseURL = \'\';
config_htmlCode.instance_img_dir = \'\';
config_htmlCode.instance_doc_dir = \'\';
config_htmlCode.fullURLs = false;
config_htmlCode.escapeCharacters = false;
config_htmlCode.stylesheet = [\'/3rdparty/WysiwygPro/editor_files/document_theme.css\']
config_htmlCode.imenu_height = 110;
config_htmlCode.bmenu_height = 53;
config_htmlCode.smenu_height = 79;
config_htmlCode.tmenu_height = 350;
config_htmlCode.imagewindow = "image.php";
config_htmlCode.links = \'\';
config_htmlCode.custom_inserts = \'\';
config_htmlCode.directory = \'/3rdparty/WysiwygPro/editor_files/\';
config_htmlCode.usep = false;
config_htmlCode.showbookmarkmngr = true;
config_htmlCode.thumbnails = true;
config_htmlCode.subsequent = false;
config_htmlCode.color_swatches = \'\';
config_htmlCode.border_visible = 1;
config_htmlCode.doctype = \'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">\';
config_htmlCode.charset = \'<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />\';
// lang
config_htmlCode.lang[\'guidelines_hidden\'] = \'guidelines hidden\';
config_htmlCode.lang[\'guidelines_visible\'] = \'guidelines visible\';
config_htmlCode.lang[\'place_cursor_in_table\'] = \'Place your cursor inside the table, row or cell you wish to modify\';
config_htmlCode.lang[\'only_split_merged_cells\'] = \'Can only split cells that have been merged\';
config_htmlCode.lang[\'no_cell_right\'] = \'There is no cell to the right of this one to merge with.\';
config_htmlCode.lang[\'different_row_spans\'] = \'Cannot merge cells that span different rows.\';
config_htmlCode.lang[\'no_cell_below\'] = \'There is no cell below this one to merge with.\';
config_htmlCode.lang[\'different_column_spans\'] = \'Cannot merge cells with different column spans.\';
config_htmlCode.lang[\'select_hyperlink_text\'] = \'Please select some text to turn into a hyperlink\';
config_htmlCode.lang[\'upgrade\'] = \'You need to upgrade your web browser to fully enable this editor.\n\nSupported browsers include Mozilla 1.4, Netscape 7.1 and Internet Explorer 5.0 or newer.\n\nYou can still edit this document but only in HTML code view. \n\nNote: If you are using a supported browser you just need to refresh the page.\';
config_htmlCode.lang[\'format\'] = \'Format\';
config_htmlCode.lang[\'font\'] = \'Font\';
config_htmlCode.lang[\'class\'] = \'Class\';
config_htmlCode.lang[\'size\'] = \'Size\';
function wp_htmlCode_mouseUpHandler (evt) {
	wp_mouseUpHandler(wp_e(\'htmlCode\'), evt);
}
function wp_htmlCode_keyHandler (evt) {
	wp_keyHandler(wp_e(\'htmlCode\'), evt);
}
function wp_htmlCode_contextHandler (evt) {
	wp_context(wp_e(\'htmlCode\'), evt)
}
// End -->
</script><table id="htmlCode_container" class="wpContainer" border="0" cellpadding="0" cellspacing="0" height="450" width="100%"><tbody><tr valign="bottom"> <td> <div id="htmlCode_tab_one" style="display: block; visibility: hidden; height: 0px;"> <table class="wpToolbar" style="" border="0" cellpadding="0" cellspacing="0"><tbody><tr>  <td><img cid="undo" class="wpReady" onclick="do_save();" src="resume_files/save.gif" alt="Save" title="Save" type="btn" onmouseover="wp_m_over(this, htmlCode);" onmouseout="wp_m_out(this, htmlCode);" onmousedown="wp_m_down(this, htmlCode);" onmouseup="wp_m_up(this, htmlCode);" height="22" width="22"></td><td><img cid="undo" class="wpReady" onclick="do_abort();" src="resume_files/cancel.gif" alt="Cancel" title="Cancel" type="btn" onmouseover="wp_m_over(this, htmlCode);" onmouseout="wp_m_out(this, htmlCode);" onmousedown="wp_m_down(this, htmlCode);" onmouseup="wp_m_up(this, htmlCode);" height="22" width="22"></td><td><img class="wpSpacer" src="resume_files/spacer.gif" alt="" height="22" width="1"></td><td><img cid="forecolor" class="wpReady" onclick="wp_e(\'htmlCode\').edit_object.print()" alt="" title="Print..." src="resume_files/print.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="forecolor" class="wpReady" onclick="wp_findit(wp_e(\'htmlCode\'));" alt="" title="Find And Replace..." src="resume_files/find.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img class="wpSpacer" src="resume_files/spacer.gif" alt="" height="22" width="1"></td><td><img cid="forecolor" class="wpReady" onclick="wp_paste_word_html(wp_e(\'htmlCode\'));" alt="" title="Paste From Word..." src="resume_files/pasteword.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img class="wpSpacer" src="resume_files/spacer.gif" alt="" height="22" width="1"></td><td><img cid="undo" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'undo\');" alt="" title="Undo" src="resume_files/undo.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="redo" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'redo\');" alt="" title="Redo" src="resume_files/redo.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img class="wpSpacer" src="resume_files/spacer.gif" alt="" height="22" width="1"></td><td><img cid="forecolor" class="wpReady" onclick="wp_open_table_window(wp_e(\'htmlCode\'),this);" alt="" title="Insert Table..." src="resume_files/instable.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="edittable" class="wpDisabled" src="resume_files/edittable.gif" alt="" title="Table, Row and Cell Properties..." onclick="wp_open_table_editor(wp_e(\'htmlCode\'));" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="edittable" class="wpDisabled" src="resume_files/insrow.gif" alt="" title="Add Row..." onclick="wp_processRow(wp_e(\'htmlCode\'),\'choose\');" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="edittable" class="wpDisabled" src="resume_files/delrow.gif" alt="" title="Delete Row" onclick="wp_processRow(wp_e(\'htmlCode\'),\'remove\');" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="edittable" class="wpDisabled" src="resume_files/inscol.gif" alt="" title="Insert Column..." onclick="wp_processColumn(wp_e(\'htmlCode\'),\'choose\');" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="edittable" class="wpDisabled" src="resume_files/delcol.gif" alt="" title="Delete Column" onclick="wp_processColumn(wp_e(\'htmlCode\'),\'remove\');" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="edittable" class="wpDisabled" src="resume_files/mrgcell.gif" alt="" title="Merge Cell With Another Cell..." onclick="wp_mergeCell(wp_e(\'htmlCode\'));" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="splitcell" class="wpDisabled" src="resume_files/spltcell.gif" alt="" title="Unmerge Cell" onclick="wp_splitCell(wp_e(\'htmlCode\'));" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img class="wpSpacer" src="resume_files/spacer.gif" alt="" height="22" width="1"></td><td><img cid="insertimage" class="wpReady" onclick="wp_open_image_window(wp_e(\'htmlCode\'),this);" alt="" title="Insert/Edit an Image..." src="resume_files/image.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="insertimage" class="wpReady" onclick="wp_insert_smiley(wp_e(\'htmlCode\'),this);" alt="" title="Insert an Emoticon" src="resume_files/smiley.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="inserthorizontalrule" class="wpReady" onclick="wp_open_horizontal_rule_window(wp_e(\'htmlCode\'),this);" alt="" title="Horizontal Line..." src="resume_files/icon_rule.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="createlink" class="wpDisabled" onclick="wp_open_hyperlink_window(wp_e(\'htmlCode\'),this);" alt="" title="Insert/Edit a Hyperlink..." src="resume_files/link.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="createlink" class="wpDisabled" onclick="wp_open_document_window(wp_e(\'htmlCode\'),this);" alt="" title="Link To A Document..." src="resume_files/doc_link.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="insertimage" class="wpReady" onclick="wp_open_bookmark_window(wp_e(\'htmlCode\'),this);" alt="" title="Insert/Edit a Bookmark..." src="resume_files/bookmark.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="inserthorizontalrule" class="wpReady" onclick="wp_open_special_characters_window(wp_e(\'htmlCode\'),this);" alt="" title="Special Characters..." src="resume_files/specialchar.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td></tr></tbody></table><table class="wpToolbar" style="" border="0" cellpadding="0" cellspacing="0"><tbody><tr> <td> <table id="htmlCode_format_list" class="wpDropBorderWide" style="background-color: rgb(255, 255, 255);" onclick="wp_show_menu(wp_e(\'htmlCode\'),\'format\', this)" onmouseover="this.style.backgroundColor = \'highlight\';" onmouseout="this.style.backgroundColor = \'#ffffff\';" title="Paragraph Format" border="0" cellpadding="0" cellspacing="1"><tbody><tr> <td width="70"><div id="htmlCode_format_list-text">Normal</div></td><td width="10"><img unselectable="on" src="resume_files/down_arrow.gif" alt="" height="14" width="10"></td></tr></tbody></table><iframe style="display: none;" id="htmlCode_format_frame" class="wpMozFrameDropBorder" frameborder="0" height="357" width="272"></iframe></td><td> <table id="htmlCode_class_menu" class="wpDropBorderWide" style="display: none;" onclick="wp_show_menu(wp_e(\'htmlCode\'),\'class\', this)" onmouseover="this.style.backgroundColor = \'highlight\';" onmouseout="this.style.backgroundColor = \'#ffffff\';" title="Style Class" border="0" cellpadding="0" cellspacing="1"><tbody><tr> <td width="70"><div id="htmlCode_class_menu-text">MsoNormal</div></td><td width="10"><img src="resume_files/down_arrow.gif" alt="" height="14" width="10"></td></tr></tbody></table><iframe style="display: none;" id="htmlCode_class_frame" class="wpMozFrameDropBorder" frameborder="0" height="141" width="272"></iframe></td><td> <table id="htmlCode_font-face" class="wpDropBorderWide" style="background-color: rgb(255, 255, 255);" onclick="wp_show_menu(wp_e(\'htmlCode\'),\'font\', this)" onmouseover="this.style.backgroundColor = \'highlight\';" onmouseout="this.style.backgroundColor = \'#ffffff\';" title="Font Face" border="0" cellpadding="0" cellspacing="1"><tbody><tr> <td width="70"><div id="htmlCode_font-face-text">Font</div></td><td width="10"><img src="resume_files/down_arrow.gif" alt="" height="14" width="10"></td></tr></tbody></table><iframe style="display: none;" id="htmlCode_font_frame" class="wpMozFrameDropBorder" frameborder="0" height="141" width="272"></iframe></td><td> <table id="htmlCode_font_size" class="wpDropBorderNarrow" style="background-color: rgb(255, 255, 255);" onclick="wp_show_menu(wp_e(\'htmlCode\'),\'size\', this)" onmouseover="this.style.backgroundColor = \'highlight\';" onmouseout="this.style.backgroundColor = \'#ffffff\';" title="Font Size" border="0" cellpadding="0" cellspacing="1"><tbody><tr> <td width="30"><div id="htmlCode_font_size-text">Size</div></td><td width="10"><img src="resume_files/down_arrow.gif" alt="" height="14" width="10"></td></tr></tbody></table><iframe style="display: none;" id="htmlCode_size_frame" class="wpMozFrameDropBorder" frameborder="0" height="254" width="112"></iframe></td><td><img class="wpSpacer" src="resume_files/spacer.gif" alt="" height="22" width="1"></td><td><img cid="bold" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'bold\');" alt="" title="Bold" src="resume_files/bold.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="italic" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'italic\');" alt="" title="Italic" src="resume_files/italic.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="underline" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'underline\');" alt="" title="Underline" src="resume_files/under.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img class="wpSpacer" src="resume_files/spacer.gif" alt="" height="22" width="1"></td><td><img cid="justifyleft" class="wpLatched" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'justifyleft\');" alt="" title="Align Left" src="resume_files/left.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="justifycenter" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'justifycenter\');" alt="" title="Align Center" src="resume_files/center.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="justifyright" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'justifyright\');" alt="" title="Align Right" src="resume_files/right.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="justifyfull" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'justifyfull\');" alt="" title="Justify" src="resume_files/justify.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img class="wpSpacer" src="resume_files/spacer.gif" alt="" height="22" width="1"></td><td><img cid="insertorderedlist" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'insertorderedlist\');" alt="" title="Numbering" src="resume_files/numlist.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="insertunorderedlist" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'insertunorderedlist\');" alt="" title="Bullets" src="resume_files/bullist.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="outdent" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'outdent\');" alt="" title="Decrease Indent" src="resume_files/deindent.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="indent" class="wpReady" onclick="wp_callFormatting(wp_e(\'htmlCode\'),\'indent\');" alt="" title="Increase Indent" src="resume_files/inindent.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img class="wpSpacer" src="resume_files/spacer.gif" alt="" height="22" width="1"></td><td><img cid="forecolor" class="wpReady" onclick="wp_colordialog(wp_e(\'htmlCode\'),this,\'forecolor\')" alt="" title="Font Color..." src="resume_files/fontcolor.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td><td><img cid="hilitecolor" class="wpReady" onclick="wp_colordialog(wp_e(\'htmlCode\'),this,\'hilitecolor\')" alt="" title="HighLight..." src="resume_files/bgcolor.gif" type="btn" onmouseover="wp_m_over(this, wp_e(\'htmlCode\'));" onmouseout="wp_m_out(this, wp_e(\'htmlCode\'));" onmousedown="wp_m_down(this, wp_e(\'htmlCode\'));" onmouseup="wp_m_up(this, wp_e(\'htmlCode\'));" height="22" width="22"></td></tr></tbody></table><iframe style="width: 0px;" id="htmlCode_editFrame" class="wpEditFrame" frameborder="0" height="369"></iframe></div><div id="htmlCode_tab_two" style="display: none;"> <textarea class="wpHtmlEditArea" style="height: 417px; width: 100%;" id="htmlCode" name="htmlCode" wrap="off">&lt;html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:st1="urn:schemas-microsoft-com:office:smarttags"
xmlns="http://www.w3.org/TR/REC-html40"&gt;

&lt;head&gt;
&lt;meta http-equiv=Content-Type content="text/html; charset=windows-1252"&gt;
&lt;meta name=ProgId content=Word.Document&gt;
&lt;meta name=Generator content="Microsoft Word 10"&gt;
&lt;meta name=Originator content="Microsoft Word 10"&gt;
&lt;link rel=File-List href="resume_files/filelist.xml"&gt;
&lt;title&gt;Kavita Srinivasan&lt;/title&gt;
&lt;o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceType"/&gt;
&lt;o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceName"/&gt;
&lt;o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="City"/&gt;
&lt;o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="country-region"/&gt;
&lt;o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="place"/&gt;
&lt;o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="date"/&gt;
&lt;!--[if gte mso 9]&gt;&lt;xml&gt;
 &lt;o:DocumentProperties&gt;
  &lt;o:Author&gt;Krits&lt;/o:Author&gt;
  &lt;o:Template&gt;Normal&lt;/o:Template&gt;
  &lt;o:LastAuthor&gt;fiona&lt;/o:LastAuthor&gt;
  &lt;o:Revision&gt;8&lt;/o:Revision&gt;
  &lt;o:TotalTime&gt;15&lt;/o:TotalTime&gt;
  &lt;o:LastPrinted&gt;2006-04-02T12:39:00Z&lt;/o:LastPrinted&gt;
  &lt;o:Created&gt;2007-03-04T11:45:00Z&lt;/o:Created&gt;
  &lt;o:LastSaved&gt;2007-03-04T11:55:00Z&lt;/o:LastSaved&gt;
  &lt;o:Pages&gt;1&lt;/o:Pages&gt;
  &lt;o:Words&gt;641&lt;/o:Words&gt;
  &lt;o:Characters&gt;3657&lt;/o:Characters&gt;
  &lt;o:Company&gt;home&lt;/o:Company&gt;
  &lt;o:Lines&gt;30&lt;/o:Lines&gt;
  &lt;o:Paragraphs&gt;8&lt;/o:Paragraphs&gt;
  &lt;o:CharactersWithSpaces&gt;4290&lt;/o:CharactersWithSpaces&gt;
  &lt;o:Version&gt;10.2625&lt;/o:Version&gt;
 &lt;/o:DocumentProperties&gt;
&lt;/xml&gt;&lt;![endif]--&gt;&lt;!--[if gte mso 9]&gt;&lt;xml&gt;
 &lt;w:WordDocument&gt;
  &lt;w:SpellingState&gt;Clean&lt;/w:SpellingState&gt;
  &lt;w:GrammarState&gt;Clean&lt;/w:GrammarState&gt;
  &lt;w:DoNotHyphenateCaps/&gt;
  &lt;w:PunctuationKerning/&gt;
  &lt;w:DrawingGridHorizontalSpacing&gt;6 pt&lt;/w:DrawingGridHorizontalSpacing&gt;
  &lt;w:DrawingGridVerticalSpacing&gt;6 pt&lt;/w:DrawingGridVerticalSpacing&gt;
  &lt;w:DisplayHorizontalDrawingGridEvery&gt;0&lt;/w:DisplayHorizontalDrawingGridEvery&gt;
  &lt;w:DisplayVerticalDrawingGridEvery&gt;3&lt;/w:DisplayVerticalDrawingGridEvery&gt;
  &lt;w:UseMarginsForDrawingGridOrigin/&gt;
  &lt;w:DoNotShadeFormData/&gt;
  &lt;w:Compatibility&gt;
   &lt;w:FootnoteLayoutLikeWW8/&gt;
   &lt;w:ShapeLayoutLikeWW8/&gt;
   &lt;w:AlignTablesRowByRow/&gt;
   &lt;w:ForgetLastTabAlignment/&gt;
   &lt;w:LayoutRawTableWidth/&gt;
   &lt;w:LayoutTableRowsApart/&gt;
   &lt;w:UseWord97LineBreakingRules/&gt;
   &lt;w:ApplyBreakingRules/&gt;
   &lt;w:UseFELayout/&gt;
  &lt;/w:Compatibility&gt;
  &lt;w:BrowserLevel&gt;MicrosoftInternetExplorer4&lt;/w:BrowserLevel&gt;
 &lt;/w:WordDocument&gt;
&lt;/xml&gt;&lt;![endif]--&gt;&lt;!--[if !mso]&gt;&lt;object
 classid="clsid:38481807-CA0E-42D2-BF39-B33AF135CC4D" id=ieooui&gt;&lt;/object&gt;
&lt;style&gt;
st1\:*{behavior:url(#ieooui) }
&lt;/style&gt;
&lt;![endif]--&gt;
&lt;style&gt;
&lt;!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:SimSun;
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-alt:\5B8B\4F53;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 135135232 16 0 262145 0;}
@font-face
	{font-family:"Franklin Gothic Book";
	panose-1:2 11 5 3 2 1 2 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
@font-face
	{font-family:Verdana;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1593833729 1073750107 16 0 415 0;}
@font-face
	{font-family:"\@SimSun";
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 135135232 16 0 262145 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:Verdana;
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:Verdana;
	mso-fareast-language:EN-US;}
h1
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:1;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:Verdana;
	mso-bidi-font-family:Verdana;
	mso-font-kerning:0pt;
	mso-fareast-language:EN-US;
	font-weight:normal;}
h2
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:2;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:Verdana;
	mso-bidi-font-family:Verdana;
	mso-fareast-language:EN-US;
	font-weight:normal;}
h3
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:3;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:Verdana;
	mso-bidi-font-family:Verdana;
	mso-fareast-language:EN-US;
	font-weight:normal;}
a:link, span.MsoHyperlink
	{mso-style-parent:"";
	font-family:"Franklin Gothic Book";
	mso-ascii-font-family:"Franklin Gothic Book";
	mso-hansi-font-family:"Franklin Gothic Book";
	font-weight:bold;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-parent:"";
	color:purple;
	text-decoration:underline;
	text-underline:single;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
 /* Page Definitions */
 @page
	{mso-page-border-surround-header:no;
	mso-page-border-surround-footer:no;}
@page Section1
	{size:8.5in 11.0in;
	margin:1.0in 1.25in 1.0in 1.25in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:266356269;
	mso-list-type:hybrid;
	mso-list-template-ids:-1384323260 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l0:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l0:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l0:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1
	{mso-list-id:482281382;
	mso-list-type:hybrid;
	mso-list-template-ids:-1648574694 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2
	{mso-list-id:717513410;
	mso-list-type:hybrid;
	mso-list-template-ids:206307830 67698699 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0D8;
	mso-level-tab-stop:.75in;
	mso-level-number-position:left;
	margin-left:.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.25in;
	mso-level-number-position:left;
	margin-left:1.25in;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l2:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:1.75in;
	mso-level-number-position:left;
	margin-left:1.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:2.25in;
	mso-level-number-position:left;
	margin-left:2.25in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l2:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:2.75in;
	mso-level-number-position:left;
	margin-left:2.75in;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l2:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:3.25in;
	mso-level-number-position:left;
	margin-left:3.25in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:3.75in;
	mso-level-number-position:left;
	margin-left:3.75in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l2:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:4.25in;
	mso-level-number-position:left;
	margin-left:4.25in;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l2:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:4.75in;
	mso-level-number-position:left;
	margin-left:4.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3
	{mso-list-id:963586540;
	mso-list-type:hybrid;
	mso-list-template-ids:-1147341488 67698699 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0D8;
	mso-level-tab-stop:.75in;
	mso-level-number-position:left;
	margin-left:.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.25in;
	mso-level-number-position:left;
	margin-left:1.25in;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l3:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:1.75in;
	mso-level-number-position:left;
	margin-left:1.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:2.25in;
	mso-level-number-position:left;
	margin-left:2.25in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l3:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:2.75in;
	mso-level-number-position:left;
	margin-left:2.75in;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l3:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:3.25in;
	mso-level-number-position:left;
	margin-left:3.25in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:3.75in;
	mso-level-number-position:left;
	margin-left:3.75in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l3:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:4.25in;
	mso-level-number-position:left;
	margin-left:4.25in;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l3:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:4.75in;
	mso-level-number-position:left;
	margin-left:4.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4
	{mso-list-id:980039485;
	mso-list-type:hybrid;
	mso-list-template-ids:-902890688 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l4:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l4:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l4:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5
	{mso-list-id:1209991235;
	mso-list-type:hybrid;
	mso-list-template-ids:102638462 -325960968 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	margin-left:3.0in;
	text-indent:-.25in;
	font-family:Symbol;
	color:windowtext;}
@list l5:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6
	{mso-list-id:1838500027;
	mso-list-type:hybrid;
	mso-list-template-ids:663516766 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l6:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l6:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l6:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l6:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l6:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l6:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l7
	{mso-list-id:2104717901;
	mso-list-type:hybrid;
	mso-list-template-ids:-1915219546 -1117742494 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l7:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:94.5pt;
	mso-level-number-position:left;
	margin-left:94.5pt;
	text-indent:-.25in;
	font-family:Symbol;
	color:windowtext;}
@list l7:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l7:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l7:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l7:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l7:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l7:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l7:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l7:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
--&gt;
&lt;/style&gt;
&lt;!--[if gte mso 10]&gt;
&lt;style&gt;
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";}
&lt;/style&gt;
&lt;![endif]--&gt;&lt;!--[if
gte mso 9]&gt;&lt;xml&gt; &lt;o:shapedefaults v:ext="edit"
spidmax="11266"&gt; &lt;o:colormru v:ext="edit" colors="#ffe9d3"/&gt;
&lt;o:colormenu v:ext="edit" fillcolor="#ffe9d3"/&gt;
&lt;/o:shapedefaults&gt;&lt;/xml&gt;&lt;![endif]--&gt;&lt;!--[if gte
mso 9]&gt;&lt;xml&gt; &lt;o:shapelayout v:ext="edit"&gt; &lt;o:idmap
v:ext="edit" data="1"/&gt;
&lt;/o:shapelayout&gt;&lt;/xml&gt;&lt;![endif]--&gt;
&lt;/head&gt;
&lt;body bgcolor="#FFE9D3" lang=EN-US link="#000000" vlink=purple
style=\'tab-interval:.5in;text-justify-trim:punctuation\'&gt;
&lt;div class=Section1&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt\'&gt;&lt;b
style=\'mso-bidi-font-weight:
normal\'&gt;&lt;span style=\'font-family:"Franklin Gothic
Book";color:maroon\'&gt;&lt;a
href="http://pitchedhigh.com/kavita_pdf.pdf"
target="_blank"&gt;&lt;u&gt;&lt;span
style=\'color:windowtext\'&gt;PDF&lt;/span&gt;&lt;/u&gt;&lt;/a&gt;
| &lt;a
href="http://pitchedhigh.com/kavita_doc.doc"&gt;&lt;u&gt;&lt;span
style=\'color:windowtext\'&gt;DOC&lt;/span&gt;&lt;/u&gt;&lt;/a&gt;
| &lt;a
href="http://pitchedhigh.com/kavita_rtf.rtf"&gt;&lt;u&gt;&lt;span
style=\'color:windowtext\'&gt;RTF&lt;/span&gt;&lt;/u&gt;&lt;/a&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;p class=MsoNormal align=center
style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:center\'&gt;&lt;u&gt;&lt;span
style=\'font-size:18.0pt;font-family:"Franklin Gothic
Book";mso-bidi-font-weight:
bold\'&gt;&lt;o:p&gt;&lt;span
style=\'text-decoration:none\'&gt;&amp;nbsp;&lt;/span&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/u&gt;&lt;/p&gt;
&lt;p class=MsoNormal align=center
style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:center\'&gt;&lt;span
class=SpellE&gt;&lt;u&gt;&lt;span
style=\'font-size:18.0pt;font-family:"Franklin Gothic Book";
mso-bidi-font-weight:bold\'&gt;Kavita&lt;/span&gt;&lt;/u&gt;&lt;/span&gt;&lt;u&gt;&lt;span
style=\'font-size:
18.0pt;font-family:"Franklin Gothic
Book";mso-bidi-font-weight:bold\'&gt; &lt;span
class=SpellE&gt;Srinivasan&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/u&gt;&lt;/p&gt;
&lt;p class=MsoNormal align=center
style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:center\'&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book";mso-bidi-font-weight:bold\'&gt;Born on &lt;/span&gt;&lt;st1:date
Year="1982" Day="17" Month="4"&gt;&lt;span style=\'font-family:"Franklin
Gothic Book"; mso-bidi-font-weight:bold\'&gt;the &lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;17&lt;sup&gt;th&lt;/sup&gt; of April,
1982&lt;/span&gt;&lt;/st1:date&gt;&lt;span style=\'font-family:"Franklin
Gothic Book"\'&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-right:17.25pt\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;
&lt;p class=MsoNormal align=right
style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:right\'&gt;&lt;i&gt;&lt;span
style=\'font-size:10.0pt;font-family:"Franklin Gothic
Book"\'&gt;call@+617-0413435251&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/i&gt;&lt;/p&gt;
&lt;p class=MsoNormal align=right
style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:right\'&gt;&lt;b&gt;&lt;i&gt;&lt;span
style=\'font-size:10.0pt;font-family:"Franklin Gothic Book"\'&gt;&lt;a
href="mailto:kavita@pitchedhigh.com"&gt;&lt;u&gt;&lt;span
style=\'color:black;font-weight:
normal\'&gt;kavita@pitchedhigh.com&lt;/span&gt;&lt;/u&gt;&lt;/a&gt;&lt;/span&gt;&lt;/i&gt;&lt;/b&gt;&lt;span
style=\'font-size:10.0pt;font-family:"Franklin Gothic Book"\'&gt;
&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;div style=\'margin-left:22.5pt;margin-right:17.25pt\'&gt;
&lt;div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid
windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'&gt;
&lt;p class=MsoNormal
style=\'text-align:justify;text-justify:inter-ideograph;
tab-stops:6.0in 436.5pt 6.25in 454.5pt;background:#993300;border:none;
mso-border-alt:solid windowtext .5pt;padding:0in;mso-padding-alt:1.0pt
4.0pt 1.0pt 4.0pt\'&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book";color:white\'&gt;SUMMARY&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:6.0in 436.5pt 6.25in
454.5pt\'&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;span class=GramE&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;Telecom
IT professional with 2+ years of experience and expertise in
applications of
two of the giant telecom service
providers.&lt;/span&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:6.0in 436.5pt 6.25in 454.5pt\'&gt;&lt;span
style=\'font-family:
"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;div style=\'margin-left:22.5pt;margin-right:17.25pt\'&gt;
&lt;div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid
windowtext .5pt;
padding:1.0pt 1.0pt 1.0pt 4.0pt;background:#993300\'&gt;
&lt;p class=MsoNormal
style=\'text-align:justify;text-justify:inter-ideograph;
background:#993300;border:none;mso-border-alt:solid windowtext
.5pt;padding:
0in;mso-padding-alt:1.0pt 1.0pt 1.0pt 4.0pt\'&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";
color:white\'&gt;SKILL
SET&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:6.0in 436.5pt 6.25in
454.5pt\'&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4
level1 lfo2;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;mso-bidi-font-weight:
bold\'&gt;&lt;span style=\'mso-list:Ignore\'&gt;·&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Programming:
&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;C, C++, and
COBOL.&lt;b&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4
level1 lfo2;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Platforms:
&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;Windows(2000,
98, 95), Red Hat
Linux(9.0)&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4
level1 lfo2;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Application
Programs: &lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;Flash,
&lt;span class=SpellE&gt;Dreamweaver&lt;/span&gt;, Xilinx, Maxwell Plus
2, Adobe Photoshop,
Gif Animator, AutoCAD, and
ORCAD.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4
level1 lfo2;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Tools:&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt; Mercury Test
Director&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4
level1 lfo2;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Other
:&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt; Quick
Learner ,&lt;span style=\'mso-spacerun:yes\'&gt; &lt;/span&gt;Faster
grasp of domain and
associated business aspects of the system , Ease of playing leadership
roles,
Excellent communication
skills&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt\'&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;div style=\'margin-left:22.5pt;margin-right:17.25pt\'&gt;
&lt;div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid
windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'&gt;
&lt;p class=MsoNormal
style=\'text-align:justify;text-justify:inter-ideograph;
background:#993300;border:none;mso-border-alt:solid windowtext
.5pt;padding:
0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt\'&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";
color:white\'&gt;DETAILS OF WORK
EXPERIENCE&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin
Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-13.5pt;mso-list:l7 level1
lfo4\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol\'&gt;&lt;span style=\'mso-list:Ignore\'&gt;·&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span class=MsoHyperlink&gt;&lt;a
href="http://www.amdocs.com/"&gt;&lt;span
class=SpellE&gt;&lt;u&gt;&lt;span
style=\'color:black\'&gt;Amdocs&lt;/span&gt;&lt;/u&gt;&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;
&lt;/span&gt;&lt;/b&gt;&lt;span style=\'font-family:
"Franklin Gothic Book"\'&gt;(September 2004 &#8211; March 2006): It is the
world\'s
leading telecom software solution provider&lt;span
style=\'mso-tab-count:1\'&gt;
&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-22.5pt\'&gt;&lt;i
style=\'mso-bidi-font-style:normal\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;Subject Matter
Expert&lt;/span&gt;&lt;/i&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book";mso-bidi-font-style:italic\'&gt;
&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-22.5pt\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-style:italic\'&gt;(Developer - telecommunication
applications)&lt;/span&gt;&lt;i
style=\'mso-bidi-font-style:normal\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;&lt;span
style=\'mso-tab-count:1\'&gt;
&lt;/span&gt;&lt;/span&gt;&lt;/i&gt;&lt;span style=\'font-family:
"Franklin Gothic
Book";mso-bidi-font-style:italic\'&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin
Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin
Gothic Book"\'&gt;Responsibilities:&lt;/span&gt;&lt;/b&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;
&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l2
level1 lfo6;
tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;Ø&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book"\'&gt;Had
joined Listing and Maintenance team in Jan 2005 of the Yellow Pages
group in
Amdocs.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-22.5pt;mso-list:l2
level1 lfo6;
tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;Ø&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Undertook
Knowledge transfer for &lt;b&gt;3 months in
&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;st1:country-region&gt;&lt;st1:place&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;Israel&lt;/span&gt;&lt;/b&gt;&lt;/st1:place&gt;&lt;/st1:country-region&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-22.5pt;mso-list:l2
level1 lfo6;
tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;Ø&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Performed
enhancement of yellow pages directory maintenance applications
&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l2
level1 lfo6;
tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;Ø&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book"\'&gt;Was
solely responsible for the development of three complicated and
sophisticated
functional enhancements
&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-22.5pt;mso-list:l2
level1 lfo6;
tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;Ø&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Managed
and ensured successful deployment of changes in the
system&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l2
level1 lfo6;
tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;Ø&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Outside
yellow pages, Designed a test driver code in C for another
telecommunication
module.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt\'&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;span
style=\'mso-tab-count:1\'&gt; &lt;/span&gt;&lt;b
style=\'mso-bidi-font-weight:normal\'&gt;Development&lt;/b&gt;
&lt;b&gt;Platform: &lt;/b&gt;COBOL, C, C++, UNIX and
ORACLE.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-13.5pt;mso-list:l0 level1
lfo8;tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol\'&gt;&lt;span style=\'mso-list:Ignore\'&gt;·&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span class=MsoHyperlink&gt;&lt;a
href="http://www.sapient.com/"&gt;&lt;u&gt;&lt;span
style=\'color:black\'&gt;Sapient Corporation
Private
Limited&lt;/span&gt;&lt;/u&gt;&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;
(April-2006 &#8211; January 2007): The organization is one of the leading
consulting
companies in &lt;/span&gt;&lt;st1:place&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;North
America&lt;/span&gt;&lt;/st1:place&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;i&gt;&lt;span style=\'font-family:"Franklin
Gothic Book"\'&gt;Associate
Product L2&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/i&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;(Domain
specialist in quality assurance of telecom
product)&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin
Gothic Book"\'&gt;Responsibilities&lt;/span&gt;&lt;/b&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;:&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-.25in;mso-list:l3 level1
lfo10;tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings\'&gt;&lt;span style=\'mso-list:Ignore\'&gt;Ø&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Successfully
delivered two worldwide major releases of product of one of the world
leading
telecom service
provider&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-22.5pt;mso-list:l3 level1
lfo10;tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings\'&gt;&lt;span style=\'mso-list:Ignore\'&gt;Ø&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book"\'&gt;Rose
to a leadership role managing the team with the on-site
counterpart&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-22.5pt;mso-list:l3 level1
lfo10;tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings\'&gt;&lt;span style=\'mso-list:Ignore\'&gt;Ø&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Trained
and transferred knowledge within the team for her area of
expertise&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-.25in;mso-list:l3 level1
lfo10;tab-stops:list .75in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings;mso-bidi-font-weight:bold\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;Ø&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book"\'&gt;With
the fastest
learning curve , moved up two levels within a span of 8 months
(Associate L1 &#8211;
Associate Product L1 &#8211; Associate Product
L2)&lt;b&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;div style=\'margin-left:22.5pt;margin-right:17.25pt\'&gt;
&lt;div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid
windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'&gt;
&lt;p class=MsoNormal
style=\'text-align:justify;text-justify:inter-ideograph;
tab-stops:list
3.0in;background:#993300;border:none;mso-border-alt:solid windowtext
.5pt;
padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt
4.0pt\'&gt;&lt;b&gt;&lt;span style=\'font-family:
"Franklin Gothic Book";color:white\'&gt;SPECIALISED
PROJECTS&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:list 3.0in\'&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-.5in;mso-list:l5 level1 lfo12\'&gt;&lt;![if
!supportLists]&gt;&lt;span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-bidi-font-weight:bold\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span class=SpellE&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;Medisol&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt\'&gt;&lt;span
class=GramE&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;(An inventory project,
&lt;span
class=SpellE&gt;&lt;i&gt;Medisol&lt;/i&gt;&lt;/span&gt;, with a private
firm, The Dream &lt;span
class=SpellE&gt;Merchantz&lt;/span&gt;.)&lt;/span&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;The
software is a solution to the pharmaceutical industry in areas of
sales,
finances as well as general management of the drugs and their
records.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt\'&gt;&lt;i
style=\'mso-bidi-font-style:normal\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;Team Strength: 4&lt;span
style=\'mso-tab-count:1\'&gt; &lt;/span&gt;Platform Used: Visual Basic 6,
Microsoft
Access.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/i&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt\'&gt;&lt;i
style=\'mso-bidi-font-style:
normal\'&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/i&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-.5in;mso-list:l6 level1
lfo14;tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-bidi-font-weight:bold\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;b&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Forecast
Ameliorator&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;
(Jan-June,2004)&lt;b&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;tab-stops:.5in\'&gt;&lt;span
class=GramE&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;Developed for Indian
Meteorological
Department,
&lt;/span&gt;&lt;/span&gt;&lt;st1:City&gt;&lt;st1:place&gt;&lt;span
class=GramE&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Delhi&lt;/span&gt;&lt;/span&gt;&lt;/st1:place&gt;&lt;/st1:City&gt;&lt;span
class=GramE&gt;&lt;span style=\'font-family:"Franklin Gothic Book"\'&gt;,
as a part of 8&lt;sup&gt;th&lt;/sup&gt;
semester curriculum.&lt;/span&gt;&lt;/span&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;
&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;tab-stops:.5in\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;The software is a
solution to the
problem of inaccurate rainfall forecasts. The solution scheme is using
neural
networks.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;tab-stops:.5in\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;It was adjudged as
&lt;b&gt;one of the
Best three projects&lt;/b&gt; in the
institute.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:.5in 2.5in 4.0in 6.0in 436.5pt 6.25in
454.5pt\'&gt;&lt;i
style=\'mso-bidi-font-style:normal\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;Team
Strength: 2&lt;span style=\'mso-tab-count:1\'&gt; &lt;/span&gt; Platform
Used: C, Visual Basic and
Flash.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/i&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:.5in 6.0in 436.5pt 6.25in
454.5pt\'&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;div style=\'margin-left:22.5pt;margin-right:17.25pt\'&gt;
&lt;div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid
windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'&gt;
&lt;p class=MsoNormal style=\'tab-stops:list
3.0in;background:#993300;border:none;
mso-border-alt:solid windowtext .5pt;padding:0in;mso-padding-alt:1.0pt
4.0pt 1.0pt 4.0pt\'&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times
New Roman";
color:white\'&gt;EDUCATION&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;tab-stops:list
3.0in\'&gt;&lt;b&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times
New
Roman"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l5
level1 lfo12\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol\'&gt;&lt;span style=\'mso-list:Ignore\'&gt;·&lt;span
style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-family:"Times New Roman"\'&gt;Passed
10&lt;sup&gt;th&lt;/sup&gt; Board
Examination (AISSCE, CBSE) from
&lt;/span&gt;&lt;/span&gt;&lt;st1:place&gt;&lt;st1:PlaceName&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times
New Roman"\'&gt;DAV&lt;/span&gt;&lt;/st1:PlaceName&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times
New Roman"\'&gt; &lt;/span&gt;&lt;st1:PlaceType&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"; mso-bidi-font-family:"Times
New Roman"\'&gt;Public
School&lt;/span&gt;&lt;/st1:PlaceType&gt;&lt;/st1:place&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times
New Roman"\'&gt;,
&lt;span class=SpellE&gt;Dayanand&lt;/span&gt; &lt;span
class=SpellE&gt;Vihar&lt;/span&gt;,
&lt;/span&gt;&lt;st1:City&gt;&lt;st1:place&gt;&lt;span
class=GramE&gt;&lt;span style=\'font-family:"Franklin Gothic
Book";mso-bidi-font-family: "Times New
Roman"\'&gt;Delhi&lt;/span&gt;&lt;/span&gt;&lt;/st1:place&gt;&lt;/st1:City&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times
New Roman"\'&gt;
in the year 1998 with an aggregate of
81.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l6
level1 lfo14;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-family:"Times New Roman"\'&gt;Passed
12&lt;sup&gt;th&lt;/sup&gt; Board
Examination(AISSE, CBSE) from DAV Public School , &lt;span
class=SpellE&gt;Dayanand&lt;/span&gt;
&lt;span class=SpellE&gt;Vihar&lt;/span&gt;, Delhi in the year 2000
with an aggregate of
86.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l6
level1 lfo14;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-family:"Times New Roman"\'&gt;Was awarded Bachelor of
Technology in
Computer Science and Engineering degree in the year 2004 from &lt;span
class=SpellE&gt;Indira&lt;/span&gt; Gandhi Institute of Technology,
GGSIPU,
&lt;/span&gt;&lt;/span&gt;&lt;st1:City&gt;&lt;st1:place&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times
New
Roman"\'&gt;Delhi&lt;/span&gt;&lt;/st1:place&gt;&lt;/st1:City&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times
New Roman"\'&gt;
with a CPI of 78.45&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-family:"Times New
Roman";color:white\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;div style=\'margin-left:22.5pt;margin-right:17.25pt\'&gt;
&lt;div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid
windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'&gt;
&lt;p class=MsoNormal
style=\'background:#993300;border:none;mso-border-alt:solid windowtext
.5pt;
padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt
4.0pt\'&gt;&lt;b&gt;&lt;span style=\'font-family:
"Franklin Gothic Book";color:white\'&gt;AWARDS AND
ACHIEVEMENTS&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt\'&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1
level1 lfo16;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Recipient
of &#8220;&lt;span
class=SpellE&gt;&lt;b&gt;Arjun&lt;/b&gt;&lt;/span&gt;&lt;b&gt; &lt;span
class=SpellE&gt;Kanv&lt;/span&gt;
Award&#8221; (state level)&lt;/b&gt; for the &lt;b&gt;Best Ideal
Student&lt;/b&gt; in the &lt;span
class=GramE&gt;year&lt;span style=\'mso-spacerun:yes\'&gt;
&lt;/span&gt;1997&lt;/span&gt;.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-.5in;mso-list:l1
level1 lfo16;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Titled
the &lt;b&gt;BEST SINGER&lt;/b&gt; and &lt;b&gt;GIRL OF THE
YEAR&lt;/b&gt; in 2000 by the school
authority.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1
level1 lfo16;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book"\'&gt;State
representative for
&lt;/span&gt;&lt;/span&gt;&lt;st1:City&gt;&lt;st1:place&gt;&lt;span
style=\'font-family: "Franklin Gothic
Book"\'&gt;Delhi&lt;/span&gt;&lt;/st1:place&gt;&lt;/st1:City&gt;&lt;span
style=\'font-family:"Franklin Gothic Book"\'&gt; in the &lt;b&gt;National
Youth Festival
(1997-1998)&lt;/b&gt; held at Chennai in the solo singing
category.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1
level1 lfo16;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Elected
the &lt;b&gt;Cultural Secretary (2002-03)&lt;/b&gt; in the college and
successfully
completed a yearlong
tenure.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1
level1 lfo16;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic
Book"\'&gt;Organized
the first technical visit and the first annual techno-cultural festival
in the
college during her tenure.
&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1
level1 lfo16;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book"\'&gt;Won
the &lt;b&gt;first prize in Technical Paper Presentation&lt;/b&gt;
organized by TITS (&lt;span
class=SpellE&gt;Bhiwani&lt;/span&gt;) in 2003(Topic: Virtual Private
Networks).&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-.5in;mso-list:l1
level1 lfo16;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book"\'&gt;Board
topper in English with &lt;b&gt;96%&lt;/b&gt; marks in
&lt;b&gt;10&lt;sup&gt;th&lt;/sup&gt; board
examination&lt;/b&gt;.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-.5in;mso-list:l1
level1 lfo16;
tab-stops:list .5in\'&gt;&lt;![if !supportLists]&gt;&lt;span
style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'&gt;&lt;span
style=\'mso-list:Ignore\'&gt;·&lt;span style=\'font:7.0pt "Times New
Roman"\'&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;
&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;![endif]&gt;&lt;span
dir=LTR&gt;&lt;span style=\'font-family:"Franklin Gothic Book"\'&gt;Is
a recipient of &#8220;Be-British award&#8221; for excellence in English &lt;span
class=GramE&gt;language.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;tab-stops:1.25in 139.5pt
6.0in 436.5pt 6.25in 454.5pt\'&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p class=MsoNormal
style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:40.5pt;margin-bottom:.0001pt;text-indent:.25in;tab-stops:1.25in
139.5pt 6.0in 436.5pt 6.25in 454.5pt\'&gt;&lt;span
style=\'font-family:"Franklin Gothic
Book"\'&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</textarea></div><div id="htmlCode_tab_three" style="display: block;"> <iframe id="htmlCode_previewFrame" class="wpHtmlEditArea" style="height: 418px;" frameborder="0"></iframe></div><table id="htmlCode_tab_table" class="wpTabHolder" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr> <td class="wpTabNoTab" width="7"><img src="resume_files/spacer.gif" alt="" height="1" width="1"></td><td id="htmlCode_designTab" class="wpTButtonDown" onmousedown="wp_on_mouse_down_tab(this, wp_e(\'htmlCode\'))" onclick="wp_e(\'htmlCode\').showDesign();">&nbsp;<img src="resume_files/normal.gif" alt="" height="10" width="10">&nbsp;Design&nbsp;&nbsp;</td><td id="htmlCode_sourceTab" class="wpTButtonDown" onmousedown="wp_on_mouse_down_tab(this, wp_e(\'htmlCode\'))" onclick="wp_e(\'htmlCode\').showCode();">&nbsp;<img src="resume_files/html.gif" alt="" height="10" width="10">&nbsp;html Code&nbsp;&nbsp;</td><td id="htmlCode_previewTab" class="wpTButtonUp" onmousedown="wp_on_mouse_down_tab(this, wp_e(\'htmlCode\'))" onclick="wp_e(\'htmlCode\').showPreview();">&nbsp;<img src="resume_files/preview.gif" alt="" height="10" width="10">&nbsp;Preview&nbsp;&nbsp;</td><td class="wpTabNoTab" width="100%"><div class="wpStyled" align="right"><span id="htmlCode_moremessages">Use Shift+Enter for a &lt;BR&gt; tag</span> &nbsp;<span style="text-decoration: none;" id="htmlCode_messages" class="wpBorderMessage" onclick="wp_toggle_table_borders(wp_e(\'htmlCode\'),this);" title="Click here to toggle guidelines on or off" onmouseover="this.style.textDecoration=\'underline\'" onmouseout="this.style.textDecoration=\'none\'">guidelines visible</span></div></td></tr></tbody></table><div id="htmlCode_hidden"><div id="htmlCode_standardMenu" style="display: none; position: absolute; left: 81px; top: 169px; width: 230px;"> <div class="wpContextBorder"> <table class="wpContextTable" style="height: 79px;" border="0" cellpadding="0" cellspacing="0"><tbody><tr cid="insertimage" onclick="wp_paste_word_html(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/pasteword.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Paste From Word...</td></tr><tr cid="forecolor"> <td class="wpContextCellOne"><img src="resume_files/spacer.gif" alt="" height="1" width="1"></td><td class="wpContextCellTwo" align="right"><img style="margin: 3px 0px; background-color: threedshadow;" src="resume_files/spacer.gif" alt="" height="1" width="200"></td></tr><tr cid="createlink" onclick="wp_open_hyperlink_window(parent.wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/link.gif" height="22" width="22"></td><td style="" class="wpContextCellTwo">&nbsp;Insert/Edit a Hyperlink...</td></tr><tr cid="createlink" onclick="wp_open_document_window(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/doc_link.gif" height="22" width="22"></td><td style="" class="wpContextCellTwo">&nbsp;Link To A Document...</td></tr></tbody></table></div></div><div id="htmlCode_imageMenu" style="display: none;"> <div class="wpContextBorder"> <table class="wpContextTable" style="height: 110px;" border="0" cellpadding="0" cellspacing="0"><tbody><tr cid="insertimage" onclick="wp_paste_word_html(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/pasteword.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Paste From Word...</td></tr><tr cid="forecolor"> <td class="wpContextCellOne"><img src="resume_files/spacer.gif" alt="" height="1" width="1"></td><td align="right"><img style="margin: 3px 0px; background-color: threedshadow;" src="resume_files/spacer.gif" alt="" height="1" width="200"></td></tr><tr cid="insertimage" onclick="wp_open_image_window(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img class="wpDisabled" alt="" src="resume_files/image.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Image Properties...</td></tr><tr cid="forecolor"> <td class="wpContextCellOne"><img src="resume_files/spacer.gif" alt="" height="1" width="1"></td><td align="right"><img style="margin: 3px 0px; background-color: threedshadow;" src="resume_files/spacer.gif" alt="" height="1" width="200"></td></tr><tr cid="createlink" onclick="wp_open_hyperlink_window(parent.wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/link.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Insert/Edit a Hyperlink...</td></tr><tr cid="createlink" onclick="wp_open_document_window(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/doc_link.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Link To A Document...</td></tr></tbody></table></div></div><div id="htmlCode_bookmarkMenu" style="display: none;"> <div class="wpContextBorder"> <table class="wpContextTable" style="height: 53px;" border="0" cellpadding="0" cellspacing="0"><tbody><tr cid="insertimage" onclick="wp_paste_word_html(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/pasteword.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Paste From Word...</td></tr><tr cid="forecolor"> <td class="wpContextCellOne"><img src="resume_files/spacer.gif" alt="" height="1" width="1"></td><td align="right"><img style="margin: 3px 0px; background-color: threedshadow;" src="resume_files/spacer.gif" alt="" height="1" width="200"></td></tr><tr cid="insertimage" onclick="wp_open_bookmark_window(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img class="wpDisabled" alt="" src="resume_files/bookmark.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Bookmark Properties...</td></tr></tbody></table></div></div><div id="htmlCode_tableMenu" style="display: none;"> <div class="wpContextBorder"> <table class="wpContextTable" style="height: 350px;" border="0" cellpadding="0" cellspacing="0"><tbody><tr cid="forecolor" onclick="wp_paste_word_html(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/pasteword.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Paste From Word...</td></tr><tr cid="forecolor"> <td class="wpContextCellOne"><img src="resume_files/spacer.gif" alt="" height="1" width="1"></td><td align="right"><img style="margin: 3px 0px; background-color: threedshadow;" src="resume_files/spacer.gif" alt="" height="1" width="240"></td></tr><tr cid="forecolor" onclick="wp_open_table_editor(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/edittable.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Table, Row and Cell Properties...</td></tr><tr cid="forecolor" onclick="wp_processRow(wp_current_obj,\'addabove\',this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/insrowabove.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Add Row Above</td></tr><tr cid="forecolor" onclick="wp_processRow(wp_current_obj,\'addbelow\',this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/insrowbelow.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Add Row Below</td></tr><tr cid="forecolor" onclick="wp_processColumn(wp_current_obj,\'addleft\',this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/inscolleft.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Add Column to the Left</td></tr><tr cid="forecolor" onclick="wp_processColumn(wp_current_obj,\'addright\',this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/inscolright.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Add Column to the Right</td></tr><tr cid="forecolor" onclick="wp_processRow(wp_current_obj,\'remove\',this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/delrow.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Delete Row</td></tr><tr cid="forecolor" onclick="wp_processColumn(wp_current_obj,\'remove\',this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/delcol.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Delete Column</td></tr><tr cid="mergeright" onclick="wp_mergeRight(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/mrgcellh.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Merge with Cell to the Right</td></tr><tr cid="mergebelow" onclick="wp_mergeDown(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/mrgcelld.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Merge with Cell Below</td></tr><tr cid="unmergeright" onclick="wp_unMergeRight(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/spltcellh.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Unmerge with Cell to the Right</td></tr><tr cid="unmergebelow" onclick="wp_unMergeDown(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)">   <td class="wpContextCellOne"><img alt="" src="resume_files/unmrgcelld.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Unmerge with Cell Below</td></tr><tr cid="forecolor"> <td class="wpContextCellOne"><img src="resume_files/spacer.gif" alt="" height="1" width="1"></td><td align="right"><img style="margin: 3px 0px; background-color: threedshadow;" src="resume_files/spacer.gif" alt="" height="1" width="240"></td></tr><tr cid="createlink" onclick="wp_open_hyperlink_window(parent.wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/link.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Insert/Edit a Hyperlink...</td></tr><tr cid="createlink" onclick="wp_open_document_window(wp_current_obj,this)" onmouseover="wp_menuover(this)" onmouseout="wp_menuout(this)"> <td class="wpContextCellOne"><img alt="" src="resume_files/doc_link.gif" height="22" width="22"></td><td class="wpContextCellTwo">&nbsp;Link To A Document...</td></tr></tbody></table></div></div><div id="htmlCode_font-menu" style="border: 1px solid rgb(0, 0, 0); display: none;"> <div class="off" onclick="parent.wp_change_font(parent.wp_current_obj,\'null\');off(this)" onmouseover="on(this)" onmouseout="off(this)">Default</div><div class="off" onclick="parent.wp_change_font(parent.wp_current_obj,\'Arial\');off(this)" title="Arial" onmouseover="on(this)" onmouseout="off(this)" style="font-family: \'Arial\';"><nobr>Arial</nobr></div><div class="off" onclick="parent.wp_change_font(parent.wp_current_obj,\'Times New Roman\');off(this)" title="Times New Roman" onmouseover="on(this)" onmouseout="off(this)" style="font-family: \'Times New Roman\';"><nobr>Times New Roman</nobr></div><div class="off" onclick="parent.wp_change_font(parent.wp_current_obj,\'Courier\');off(this)" title="Courier" onmouseover="on(this)" onmouseout="off(this)" style="font-family: \'Courier\';"><nobr>Courier</nobr></div><div class="off" onclick="parent.wp_change_font(parent.wp_current_obj,\'Georgia\');off(this)" title="Georgia" onmouseover="on(this)" onmouseout="off(this)" style="font-family: \'Georgia\';"><nobr>Georgia</nobr></div><div class="off" onclick="parent.wp_change_font(parent.wp_current_obj,\'Verdana\');off(this)" title="Verdana" onmouseover="on(this)" onmouseout="off(this)" style="font-family: \'Verdana\';"><nobr>Verdana</nobr></div><div class="off" onclick="parent.wp_change_font(parent.wp_current_obj,\'Geneva\');off(this)" title="Geneva" onmouseover="on(this)" onmouseout="off(this)" style="font-family: \'Geneva\';"><nobr>Geneva</nobr></div> </div><div id="htmlCode_size-menu" style="border: 1px solid rgb(0, 0, 0); display: none;"> <div class="off" onclick="parent.wp_change_font_size(parent.wp_current_obj,\'null\');off(this)" onmouseover="on(this)" onmouseout="off(this)">Default</div><div class="off" onclick="parent.wp_change_font_size(parent.wp_current_obj,\'1\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><font size="1">1</font></div><div class="off" onclick="parent.wp_change_font_size(parent.wp_current_obj,\'2\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><font size="2">2</font></div><div class="off" onclick="parent.wp_change_font_size(parent.wp_current_obj,\'3\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><font size="3">3</font></div><div class="off" onclick="parent.wp_change_font_size(parent.wp_current_obj,\'4\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><font size="4">4</font></div><div class="off" onclick="parent.wp_change_font_size(parent.wp_current_obj,\'5\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><font size="5">5</font></div><div class="off" onclick="parent.wp_change_font_size(parent.wp_current_obj,\'6\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><font size="6">6</font></div><div class="off" onclick="parent.wp_change_font_size(parent.wp_current_obj,\'7\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><font size="7">7</font></div> </div><div id="htmlCode_format-menu" style="border: 1px solid rgb(0, 0, 0); display: none;"> <div class="off" onclick="parent.wp_change_format(parent.wp_current_obj,\'<div>\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><nobr> <div style="position: static; float: none; clear: both; display: block; visibility: visible;">Normal</div></nobr></div><div class="off" onclick="parent.wp_change_format(parent.wp_current_obj,\'<h1>\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><nobr> <h1 style="position: static; float: none; clear: both; display: block; visibility: visible;">Heading 1</h1></nobr></div><div class="off" onclick="parent.wp_change_format(parent.wp_current_obj,\'<h2>\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><nobr> <h2 style="position: static; float: none; clear: both; display: block; visibility: visible;">Heading 2</h2></nobr></div><div class="off" onclick="parent.wp_change_format(parent.wp_current_obj,\'<h3>\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><nobr> <h3 style="position: static; float: none; clear: both; display: block; visibility: visible;">Heading 3</h3></nobr></div><div class="off" onclick="parent.wp_change_format(parent.wp_current_obj,\'<h4>\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><nobr> <h4 style="position: static; float: none; clear: both; display: block; visibility: visible;">Heading 4</h4></nobr></div><div class="off" onclick="parent.wp_change_format(parent.wp_current_obj,\'<h5>\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><nobr> <h5 style="position: static; float: none; clear: both; display: block; visibility: visible;">Heading 5</h5></nobr></div><div class="off" onclick="parent.wp_change_format(parent.wp_current_obj,\'<h6>\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><nobr> <h6 style="position: static; float: none; clear: both; display: block; visibility: visible;">Heading 6</h6></nobr></div><div class="off" onclick="parent.wp_change_format(parent.wp_current_obj,\'<pre>\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><nobr> <pre style="position: static; float: none; clear: both; display: block; visibility: visible;">Pre Formatted</pre></nobr></div><div class="off" onclick="parent.wp_change_format(parent.wp_current_obj,\'<address>\');off(this)" onmouseover="on(this)" onmouseout="off(this)"><nobr> <address style="position: static; float: none; clear: both; display: block; visibility: visible;">Address </address></nobr><nobr></nobr></div> </div><div id="htmlCode_class-menu" style="display: none;"> <div class="off" onclick="parent.wp_change_class(parent.wp_current_obj,\'wp_none\');off(this)" onmouseover="on(this)" onmouseout="off(this)">Clear Styles</div> </div></div></td></tr></tbody></table><script language="JavaScript" type="text/javascript">
<!--//
var htmlCode = wp_getEditorByName(\'htmlCode\');
//-->
</script><script language="JavaScript" type="text/javascript" src="resume_files/loader.js"></script><noscript><p><b>WARNING:</b> JavaScript must be enabled to use this form.</p></noscript></div>
</body></html>';

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
$editor->plugins['serverPreview']->URL = 'http://pitchedhigh.com/.wysiwygPro_preview_resume_cre_htm.php?randomId=5JjMtQuqXXaRAjX290tGcL6xtaw2M0cQkyylAKm0RYZIosRPQCUGDH17ADCfUgob4dO3z8tH68Sb3Qox8EazTbrYLQ5VLVC9GyofubBdZo6XIfmq6wE4JAB63nPi8uPO0pdGDu24efUGH2RKI_NQSpE_R3GhgONwhLe5pdqBlezZLEu2dBmWKVXmmkaXzUr2dJrEMYxfVN5l3sAkZrn8Ehkp0_YvDX0u10G15ud7sG1_DZ_7Gr2Cdh2g3mrv9hAK';
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

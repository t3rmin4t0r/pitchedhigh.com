<?php header("Content-type","text/html; charset=iso-8859-1"); ?>
<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "6LBBQ8b07MyHvuYQhnkHx0ibDgMg8p2LRKSr0PX6oPVfMi8Iy2hRJT0vuO6yk6a4js4c0gSbhchUKx6_5VZzpH_eteM4K2U8ctp2c0o8Vt4DwRGZ_hBcQ87yW54sEiMHDyso3xzsvz1rT2Rxz9Ji7bW544W9N_IjP1tt5irjhcppMmPgsuL8rvLt9hlwTupPub1tZS4kPrGci5Jy_caxsHszzLCjifm2cd1mPfahy3P5ZX4csxaoG89CP_3rsool") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing resume.htm</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">
<script language="javascript">
<!--//
// this function updates the code in the textarea and then closes this window
function do_save() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name=mform action="http://pitchedhigh.com:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="udir" value="/home/pitched/public_html"><input type="hidden" name="ufile" value="resume.htm"><input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html"><input type="hidden" name="file" value="resume.htm"><input type="hidden" name="doubledecode" value="1">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://pitchedhigh.com:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/pitched/public_html"><input type="hidden" name="file" value="resume.htm">Aborting Edit&nbsp;....</form></html>');
	document.close();
	document.mform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/WysiwygPro/editor_files/config.php');
include_once ('/usr/local/cpanel/base/3rdparty/WysiwygPro/editor_files/editor_class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

// add a custom save button:
$editor->addbutton('Save', 'before:print', 'do_save();', WP_WEB_DIRECTORY.'images/save.gif', 22, 22, 'undo');

// add a custom cancel button:
$editor->addbutton('Cancel', 'before:print', 'do_abort();', WP_WEB_DIRECTORY.'images/cancel.gif', 22, 22, 'undo');

$body = '<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:st1="urn:schemas-microsoft-com:office:smarttags"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="resume_files/filelist.xml">
<title>Kavita Srinivasan</title>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceType"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceName"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="City"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="country-region"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="place"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="date"/>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Krits</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>fiona</o:LastAuthor>
  <o:Revision>8</o:Revision>
  <o:TotalTime>15</o:TotalTime>
  <o:LastPrinted>2006-04-02T12:39:00Z</o:LastPrinted>
  <o:Created>2007-03-04T11:45:00Z</o:Created>
  <o:LastSaved>2007-03-04T11:55:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>641</o:Words>
  <o:Characters>3657</o:Characters>
  <o:Company>home</o:Company>
  <o:Lines>30</o:Lines>
  <o:Paragraphs>8</o:Paragraphs>
  <o:CharactersWithSpaces>4290</o:CharactersWithSpaces>
  <o:Version>10.2625</o:Version>
 </o:DocumentProperties>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:DoNotHyphenateCaps/>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>6 pt</w:DrawingGridHorizontalSpacing>
  <w:DrawingGridVerticalSpacing>6 pt</w:DrawingGridVerticalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>3</w:DisplayVerticalDrawingGridEvery>
  <w:UseMarginsForDrawingGridOrigin/>
  <w:DoNotShadeFormData/>
  <w:Compatibility>
   <w:FootnoteLayoutLikeWW8/>
   <w:ShapeLayoutLikeWW8/>
   <w:AlignTablesRowByRow/>
   <w:ForgetLastTabAlignment/>
   <w:LayoutRawTableWidth/>
   <w:LayoutTableRowsApart/>
   <w:UseWord97LineBreakingRules/>
   <w:ApplyBreakingRules/>
   <w:UseFELayout/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
 </w:WordDocument>
</xml><![endif]--><!--[if !mso]><object
 classid="clsid:38481807-CA0E-42D2-BF39-B33AF135CC4D" id=ieooui></object>
<style>
st1\:*{behavior:url(#ieooui) }
</style>
<![endif]-->
<style>
<!--
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
-->
</style>
<!--[if gte mso 10]>
<style>
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
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="11266">
  <o:colormru v:ext="edit" colors="#ffe9d3"/>
  <o:colormenu v:ext="edit" fillcolor="#ffe9d3"/>
 </o:shapedefaults></xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body bgcolor="#FFE9D3" lang=EN-US link="#000000" vlink=purple
style=\'tab-interval:.5in;text-justify-trim:punctuation\'>

<div class=Section1>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt\'><b style=\'mso-bidi-font-weight:
normal\'><span style=\'font-family:"Franklin Gothic Book";color:maroon\'><a
href="http://pitchedhigh.com/kavita_pdf.pdf" target="_blank"><u><span style=\'color:windowtext\'>PDF</span></u></a>
| <a href="http://pitchedhigh.com/kavita_doc.doc"><u><span style=\'color:windowtext\'>DOC</span></u></a>
| <a href="http://pitchedhigh.com/kavita_rtf.rtf"><u><span style=\'color:windowtext\'>RTF</span></u></a><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:center\'><u><span
style=\'font-size:18.0pt;font-family:"Franklin Gothic Book";mso-bidi-font-weight:
bold\'><o:p><span style=\'text-decoration:none\'>&nbsp;</span></o:p></span></u></p>

<p class=MsoNormal align=center style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:center\'><span
class=SpellE><u><span style=\'font-size:18.0pt;font-family:"Franklin Gothic Book";
mso-bidi-font-weight:bold\'>Kavita</span></u></span><u><span style=\'font-size:
18.0pt;font-family:"Franklin Gothic Book";mso-bidi-font-weight:bold\'> <span
class=SpellE>Srinivasan</span><o:p></o:p></span></u></p>

<p class=MsoNormal align=center style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:center\'><span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-weight:bold\'>Born on </span><st1:date
Year="1982" Day="17" Month="4"><span style=\'font-family:"Franklin Gothic Book";
 mso-bidi-font-weight:bold\'>the </span><span style=\'font-family:"Franklin Gothic Book"\'>17<sup>th</sup>
 of April, 1982</span></st1:date><span style=\'font-family:"Franklin Gothic Book"\'><o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-right:17.25pt\'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal align=right style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:right\'><i><span
style=\'font-size:10.0pt;font-family:"Franklin Gothic Book"\'>call@+617-0413435251<o:p></o:p></span></i></p>

<p class=MsoNormal align=right style=\'margin-top:0in;margin-right:17.25pt;
margin-bottom:0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:right\'><b><i><span
style=\'font-size:10.0pt;font-family:"Franklin Gothic Book"\'><a
href="mailto:kavita@pitchedhigh.com"><u><span style=\'color:black;font-weight:
normal\'>kavita@pitchedhigh.com</span></u></a></span></i></b><span
style=\'font-size:10.0pt;font-family:"Franklin Gothic Book"\'> <o:p></o:p></span></p>

<div style=\'margin-left:22.5pt;margin-right:17.25pt\'>

<div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'>

<p class=MsoNormal style=\'text-align:justify;text-justify:inter-ideograph;
tab-stops:6.0in 436.5pt 6.25in 454.5pt;background:#993300;border:none;
mso-border-alt:solid windowtext .5pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt\'><b><span
style=\'font-family:"Franklin Gothic Book";color:white\'>SUMMARY<o:p></o:p></span></b></p>

</div>

</div>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:6.0in 436.5pt 6.25in 454.5pt\'><b><span
style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><span class=GramE><span style=\'font-family:"Franklin Gothic Book"\'>Telecom
IT professional with 2+ years of experience and expertise in applications of
two of the giant telecom service providers.</span></span><span
style=\'font-family:"Franklin Gothic Book"\'><o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:6.0in 436.5pt 6.25in 454.5pt\'><span style=\'font-family:
"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></p>

<div style=\'margin-left:22.5pt;margin-right:17.25pt\'>

<div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
padding:1.0pt 1.0pt 1.0pt 4.0pt;background:#993300\'>

<p class=MsoNormal style=\'text-align:justify;text-justify:inter-ideograph;
background:#993300;border:none;mso-border-alt:solid windowtext .5pt;padding:
0in;mso-padding-alt:1.0pt 1.0pt 1.0pt 4.0pt\'><b><span style=\'font-family:"Franklin Gothic Book";
color:white\'>SKILL SET<o:p></o:p></span></b></p>

</div>

</div>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:6.0in 436.5pt 6.25in 454.5pt\'><b><span
style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4 level1 lfo2;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;mso-bidi-font-weight:
bold\'><span style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><b><span style=\'font-family:"Franklin Gothic Book"\'>Programming:
</span></b></span><span style=\'font-family:"Franklin Gothic Book"\'>C, C++, and
COBOL.<b><o:p></o:p></b></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4 level1 lfo2;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><b><span style=\'font-family:"Franklin Gothic Book"\'>Platforms:
</span></b></span><span style=\'font-family:"Franklin Gothic Book"\'>Windows(2000,
98, 95), Red Hat Linux(9.0)<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4 level1 lfo2;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><b><span style=\'font-family:"Franklin Gothic Book"\'>Application
Programs: </span></b></span><span style=\'font-family:"Franklin Gothic Book"\'>Flash,
<span class=SpellE>Dreamweaver</span>, Xilinx, Maxwell Plus 2, Adobe Photoshop,
Gif Animator, AutoCAD, and ORCAD.<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4 level1 lfo2;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><b><span style=\'font-family:"Franklin Gothic Book"\'>Tools:</span></b></span><span
style=\'font-family:"Franklin Gothic Book"\'> Mercury Test Director<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l4 level1 lfo2;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><b><span style=\'font-family:"Franklin Gothic Book"\'>Other
:</span></b></span><span style=\'font-family:"Franklin Gothic Book"\'> Quick
Learner ,<span style=\'mso-spacerun:yes\'>  </span>Faster grasp of domain and
associated business aspects of the system , Ease of playing leadership roles,
Excellent communication skills<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt\'><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></p>

<div style=\'margin-left:22.5pt;margin-right:17.25pt\'>

<div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'>

<p class=MsoNormal style=\'text-align:justify;text-justify:inter-ideograph;
background:#993300;border:none;mso-border-alt:solid windowtext .5pt;padding:
0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt\'><b><span style=\'font-family:"Franklin Gothic Book";
color:white\'>DETAILS OF WORK EXPERIENCE<o:p></o:p></span></b></p>

</div>

</div>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><b><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-13.5pt;mso-list:l7 level1 lfo4\'><![if !supportLists]><span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol\'><span style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span class=MsoHyperlink><a
href="http://www.amdocs.com/"><span class=SpellE><u><span style=\'color:black\'>Amdocs</span></u></span></a></span></span><b><span
style=\'font-family:"Franklin Gothic Book"\'> </span></b><span style=\'font-family:
"Franklin Gothic Book"\'>(September 2004 – March 2006): It is the world\'s
leading telecom software solution provider<span style=\'mso-tab-count:1\'>            </span><o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-22.5pt\'><i style=\'mso-bidi-font-style:normal\'><span
style=\'font-family:"Franklin Gothic Book"\'>Subject Matter Expert</span></i><span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-style:italic\'> <o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-22.5pt\'><span style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-style:italic\'>(Developer - telecommunication applications)</span><i
style=\'mso-bidi-font-style:normal\'><span style=\'font-family:"Franklin Gothic Book"\'><span
style=\'mso-tab-count:1\'>        </span></span></i><span style=\'font-family:
"Franklin Gothic Book";mso-bidi-font-style:italic\'><o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><b><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><b><span style=\'font-family:"Franklin Gothic Book"\'>Responsibilities:</span></b><span
style=\'font-family:"Franklin Gothic Book"\'> <o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l2 level1 lfo6;
tab-stops:list .75in\'><![if !supportLists]><span style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'><span
style=\'mso-list:Ignore\'>Ø<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Had
joined Listing and Maintenance team in Jan 2005 of the Yellow Pages group in
Amdocs.<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-22.5pt;mso-list:l2 level1 lfo6;
tab-stops:list .75in\'><![if !supportLists]><span style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'><span
style=\'mso-list:Ignore\'>Ø<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Undertook
Knowledge transfer for <b>3 months in </b></span></span><st1:country-region><st1:place><b><span
  style=\'font-family:"Franklin Gothic Book"\'>Israel</span></b></st1:place></st1:country-region><span
style=\'font-family:"Franklin Gothic Book"\'>.<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-22.5pt;mso-list:l2 level1 lfo6;
tab-stops:list .75in\'><![if !supportLists]><span style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'><span
style=\'mso-list:Ignore\'>Ø<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Performed
enhancement of yellow pages directory maintenance applications <o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l2 level1 lfo6;
tab-stops:list .75in\'><![if !supportLists]><span style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'><span
style=\'mso-list:Ignore\'>Ø<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Was
solely responsible for the development of three complicated and sophisticated
functional enhancements <o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-22.5pt;mso-list:l2 level1 lfo6;
tab-stops:list .75in\'><![if !supportLists]><span style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'><span
style=\'mso-list:Ignore\'>Ø<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Managed
and ensured successful deployment of changes in the system<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l2 level1 lfo6;
tab-stops:list .75in\'><![if !supportLists]><span style=\'font-family:Wingdings;
mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\'><span
style=\'mso-list:Ignore\'>Ø<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Outside
yellow pages, Designed a test driver code in C for another telecommunication
module.<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt\'><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><span style=\'font-family:"Franklin Gothic Book"\'><span
style=\'mso-tab-count:1\'>     </span><b style=\'mso-bidi-font-weight:normal\'>Development</b>
<b>Platform: </b>COBOL, C, C++, UNIX and ORACLE.<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-13.5pt;mso-list:l0 level1 lfo8;tab-stops:list .5in\'><![if !supportLists]><span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol\'><span style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span class=MsoHyperlink><a
href="http://www.sapient.com/"><u><span style=\'color:black\'>Sapient Corporation
Private Limited</span></u></a></span></span><span style=\'font-family:"Franklin Gothic Book"\'>
(April-2006 – January 2007): The organization is one of the leading consulting
companies in </span><st1:place><span style=\'font-family:"Franklin Gothic Book"\'>North
 America</span></st1:place><span style=\'font-family:"Franklin Gothic Book"\'>.<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><i><span style=\'font-family:"Franklin Gothic Book"\'>Associate
Product L2<o:p></o:p></span></i></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><span style=\'font-family:"Franklin Gothic Book"\'>(Domain
specialist in quality assurance of telecom product)<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><b><span style=\'font-family:"Franklin Gothic Book"\'>Responsibilities</span></b><span
style=\'font-family:"Franklin Gothic Book"\'>:<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-.25in;mso-list:l3 level1 lfo10;tab-stops:list .75in\'><![if !supportLists]><span
style=\'font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings\'><span style=\'mso-list:Ignore\'>Ø<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Successfully
delivered two worldwide major releases of product of one of the world leading
telecom service provider<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-22.5pt;mso-list:l3 level1 lfo10;tab-stops:list .75in\'><![if !supportLists]><span
style=\'font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings\'><span style=\'mso-list:Ignore\'>Ø<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Rose
to a leadership role managing the team with the on-site counterpart<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-22.5pt;mso-list:l3 level1 lfo10;tab-stops:list .75in\'><![if !supportLists]><span
style=\'font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings\'><span style=\'mso-list:Ignore\'>Ø<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Trained
and transferred knowledge within the team for her area of expertise<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.75in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-.25in;mso-list:l3 level1 lfo10;tab-stops:list .75in\'><![if !supportLists]><span
style=\'font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings;mso-bidi-font-weight:bold\'><span style=\'mso-list:Ignore\'>Ø<span
style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>With the fastest
learning curve , moved up two levels within a span of 8 months (Associate L1 –
Associate Product L1 – Associate Product L2)<b><o:p></o:p></b></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph\'><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></p>

<div style=\'margin-left:22.5pt;margin-right:17.25pt\'>

<div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'>

<p class=MsoNormal style=\'text-align:justify;text-justify:inter-ideograph;
tab-stops:list 3.0in;background:#993300;border:none;mso-border-alt:solid windowtext .5pt;
padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt\'><b><span style=\'font-family:
"Franklin Gothic Book";color:white\'>SPECIALISED PROJECTS<o:p></o:p></span></b></p>

</div>

</div>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:list 3.0in\'><b><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-.5in;mso-list:l5 level1 lfo12\'><![if !supportLists]><span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-bidi-font-weight:bold\'><span style=\'mso-list:Ignore\'>·<span
style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR><span class=SpellE><b><span style=\'font-family:"Franklin Gothic Book"\'>Medisol</span></b></span></span><b><span
style=\'font-family:"Franklin Gothic Book"\'><o:p></o:p></span></b></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt\'><span class=GramE><span
style=\'font-family:"Franklin Gothic Book"\'>(An inventory project, <span
class=SpellE><i>Medisol</i></span>, with a private firm, The Dream <span
class=SpellE>Merchantz</span>.)</span></span><span style=\'font-family:"Franklin Gothic Book"\'><o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt\'><span style=\'font-family:"Franklin Gothic Book"\'>The
software is a solution to the pharmaceutical industry in areas of sales,
finances as well as general management of the drugs and their records.<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt\'><i style=\'mso-bidi-font-style:normal\'><span
style=\'font-family:"Franklin Gothic Book"\'>Team Strength: 4<span
style=\'mso-tab-count:1\'>       </span>Platform Used: Visual Basic 6, Microsoft
Access.<o:p></o:p></span></i></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt\'><i style=\'mso-bidi-font-style:
normal\'><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;text-indent:-.5in;mso-list:l6 level1 lfo14;tab-stops:list .5in\'><![if !supportLists]><span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-bidi-font-weight:bold\'><span style=\'mso-list:Ignore\'>·<span
style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR><b><span style=\'font-family:"Franklin Gothic Book"\'>Forecast
Ameliorator</span></b></span><span style=\'font-family:"Franklin Gothic Book"\'>
(Jan-June,2004)<b><o:p></o:p></b></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;tab-stops:.5in\'><span class=GramE><span
style=\'font-family:"Franklin Gothic Book"\'>Developed for Indian Meteorological
Department, </span></span><st1:City><st1:place><span class=GramE><span
  style=\'font-family:"Franklin Gothic Book"\'>Delhi</span></span></st1:place></st1:City><span
class=GramE><span style=\'font-family:"Franklin Gothic Book"\'>, as a part of 8<sup>th</sup>
semester curriculum.</span></span><span style=\'font-family:"Franklin Gothic Book"\'>
<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;tab-stops:.5in\'><span
style=\'font-family:"Franklin Gothic Book"\'>The software is a solution to the
problem of inaccurate rainfall forecasts. The solution scheme is using neural
networks.<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;tab-stops:.5in\'><span
style=\'font-family:"Franklin Gothic Book"\'>It was adjudged as <b>one of the
Best three projects</b> in the institute.<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:.5in 2.5in 4.0in 6.0in 436.5pt 6.25in 454.5pt\'><i
style=\'mso-bidi-font-style:normal\'><span style=\'font-family:"Franklin Gothic Book"\'>Team
Strength: 2<span style=\'mso-tab-count:1\'>                   </span> Platform
Used: C, Visual Basic and Flash.<o:p></o:p></span></i></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;text-align:justify;text-justify:
inter-ideograph;tab-stops:.5in 6.0in 436.5pt 6.25in 454.5pt\'><b><span
style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></b></p>

<div style=\'margin-left:22.5pt;margin-right:17.25pt\'>

<div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'>

<p class=MsoNormal style=\'tab-stops:list 3.0in;background:#993300;border:none;
mso-border-alt:solid windowtext .5pt;padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt\'><b><span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times New Roman";
color:white\'>EDUCATION<o:p></o:p></span></b></p>

</div>

</div>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt;tab-stops:list 3.0in\'><b><span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times New Roman"\'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l5 level1 lfo12\'><![if !supportLists]><span
style=\'font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol\'><span style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-family:"Times New Roman"\'>Passed 10<sup>th</sup> Board
Examination (AISSCE, CBSE) from </span></span><st1:place><st1:PlaceName><span
  style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times New Roman"\'>DAV</span></st1:PlaceName><span
 style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times New Roman"\'>
 </span><st1:PlaceType><span style=\'font-family:"Franklin Gothic Book";
  mso-bidi-font-family:"Times New Roman"\'>Public School</span></st1:PlaceType></st1:place><span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times New Roman"\'>,
<span class=SpellE>Dayanand</span> <span class=SpellE>Vihar</span>, </span><st1:City><st1:place><span
  class=GramE><span style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:
  "Times New Roman"\'>Delhi</span></span></st1:place></st1:City><span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times New Roman"\'>
in the year 1998 with an aggregate of 81.<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l6 level1 lfo14;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-family:"Times New Roman"\'>Passed 12<sup>th</sup> Board
Examination(AISSE, CBSE) from DAV Public School , <span class=SpellE>Dayanand</span>
<span class=SpellE>Vihar</span>, Delhi in the year 2000 with an aggregate of
86.<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l6 level1 lfo14;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-family:"Times New Roman"\'>Was awarded Bachelor of Technology in
Computer Science and Engineering degree in the year 2004 from <span
class=SpellE>Indira</span> Gandhi Institute of Technology, GGSIPU, </span></span><st1:City><st1:place><span
  style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times New Roman"\'>Delhi</span></st1:place></st1:City><span
style=\'font-family:"Franklin Gothic Book";mso-bidi-font-family:"Times New Roman"\'>
with a CPI of 78.45<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt\'><span style=\'font-family:"Franklin Gothic Book";
mso-bidi-font-family:"Times New Roman";color:white\'><o:p>&nbsp;</o:p></span></p>

<div style=\'margin-left:22.5pt;margin-right:17.25pt\'>

<div style=\'border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
padding:1.0pt 4.0pt 1.0pt 4.0pt;background:#993300\'>

<p class=MsoNormal style=\'background:#993300;border:none;mso-border-alt:solid windowtext .5pt;
padding:0in;mso-padding-alt:1.0pt 4.0pt 1.0pt 4.0pt\'><b><span style=\'font-family:
"Franklin Gothic Book";color:white\'>AWARDS AND ACHIEVEMENTS<o:p></o:p></span></b></p>

</div>

</div>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:22.5pt;margin-bottom:.0001pt\'><span style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1 level1 lfo16;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Recipient
of “<span class=SpellE><b>Arjun</b></span><b> <span class=SpellE>Kanv</span>
Award” (state level)</b> for the <b>Best Ideal Student</b> in the <span
class=GramE>year<span style=\'mso-spacerun:yes\'>  </span>1997</span>.<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-.5in;mso-list:l1 level1 lfo16;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Titled
the <b>BEST SINGER</b> and <b>GIRL OF THE YEAR</b> in 2000 by the school
authority.<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1 level1 lfo16;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>State
representative for </span></span><st1:City><st1:place><span style=\'font-family:
  "Franklin Gothic Book"\'>Delhi</span></st1:place></st1:City><span
style=\'font-family:"Franklin Gothic Book"\'> in the <b>National Youth Festival
(1997-1998)</b> held at Chennai in the solo singing category.<o:p></o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1 level1 lfo16;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Elected
the <b>Cultural Secretary (2002-03)</b> in the college and successfully
completed a yearlong tenure.<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1 level1 lfo16;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Organized
the first technical visit and the first annual techno-cultural festival in the
college during her tenure. <o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:-13.5pt;mso-list:l1 level1 lfo16;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Won
the <b>first prize in Technical Paper Presentation</b> organized by TITS (<span
class=SpellE>Bhiwani</span>) in 2003(Topic: Virtual Private Networks).<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-.5in;mso-list:l1 level1 lfo16;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Board
topper in English with <b>96%</b> marks in <b>10<sup>th</sup> board examination</b>.<o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;text-indent:-.5in;mso-list:l1 level1 lfo16;
tab-stops:list .5in\'><![if !supportLists]><span style=\'font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol\'><span
style=\'mso-list:Ignore\'>·<span style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR><span style=\'font-family:"Franklin Gothic Book"\'>Is
a recipient of “Be-British award” for excellence in English <span class=GramE>language.</span><o:p></o:p></span></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:58.5pt;margin-bottom:.0001pt;tab-stops:1.25in 139.5pt 6.0in 436.5pt 6.25in 454.5pt\'><span
style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style=\'margin-top:0in;margin-right:17.25pt;margin-bottom:
0in;margin-left:40.5pt;margin-bottom:.0001pt;text-indent:.25in;tab-stops:1.25in 139.5pt 6.0in 436.5pt 6.25in 454.5pt\'><span
style=\'font-family:"Franklin Gothic Book"\'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
';

$editor->set_code($body);

// add a spacer:
$editor->addspacer('', 'after:cancel');

$editor->set_charset('iso-8859-1');

// print the editor to the browser:
$editor->print_editor('100%','450');

?>
</div>
</body>
</html>
<?php ob_end_flush() ?>

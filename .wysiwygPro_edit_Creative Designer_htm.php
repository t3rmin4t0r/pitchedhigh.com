<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "DbO5ZmiSGTV6u9RhqRT9rUEAN1G2u9gxrFvadSpOcyYKUBCy2gGokOvH58HHP8hD74bghdYTJdYX1awl84Kcxao1C23OF1GsNBbMhuWwG35_VLNemJKXEZIRx7TkERk_oPu2a_OIMUuQSO_QkZBzgVefKonvomL1Vwcvb8J_cTvGx5mMh2m5sIrCuWKiXPvyjZdbqTuZRfP1aOjZClCr1IbvVfVrFBF6KDPYd1zIvskgI_csl9U0JRsQ_W50MKM0") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing Creative Designer.htm</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-10">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="http://pitchedhigh.com:2082/frontend/x3/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="iso-8859-10">
    <input type="hidden" name="baseurl" value="http://pitchedhigh.com/">
    <input type="hidden" name="basedir" value="/home/pitched/public_html/">
    <input type="hidden" name="udir" value="/home/pitched/public_html">
    <input type="hidden" name="ufile" value="Creative Designer.htm">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
    <input type="hidden" name="file" value="Creative%20Designer.htm">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://pitchedhigh.com:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="iso-8859-10">
    <input type="hidden" name="baseurl" value="http://pitchedhigh.com/">
    <input type="hidden" name="basedir" value="/home/pitched/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fpitched%2fpublic_html">
        <input type="hidden" name="file" value="Creative%20Designer.htm">
    <input type="hidden" name="udir" value="/home/pitched/public_html">
    <input type="hidden" name="ufile" value="Creative Designer.htm">

        </form>
</div>
<script language="javascript">
<!--//

function setHtmlFilters(editor) {
// Design view filter
editor.addHTMLFilter('design', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-10" />');
});

// Source view filter
editor.addHTMLFilter('source', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-10" />');
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

$body = '<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns:st1="urn:schemas-microsoft-com:office:smarttags"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="Creative%20Designer_files/filelist.xml">
<link rel=Preview href="Creative%20Designer_files/preview.wmf">
<link rel=Edit-Time-Data href="Creative%20Designer_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Creative Designer (Advertising)</title>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="country-region"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="City"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="place"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceType"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceName"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="date"/>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Kavita Srinivasan</o:Author>
  <o:Template>Resume.dotx</o:Template>
  <o:LastAuthor>Kavita</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>0</o:TotalTime>
  <o:Created>2008-03-23T10:57:00Z</o:Created>
  <o:LastSaved>2008-03-23T10:57:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>356</o:Words>
  <o:Characters>2030</o:Characters>
  <o:Lines>16</o:Lines>
  <o:Paragraphs>4</o:Paragraphs>
  <o:CharactersWithSpaces>2382</o:CharactersWithSpaces>
  <o:Version>10.6839</o:Version>
 </o:DocumentProperties>
 <o:CustomDocumentProperties>
  <o:_LCID dt:dt="float">1033</o:_LCID>
  <o:_Version dt:dt="string">0809</o:_Version>
  <o:_TemplateID dt:dt="string">TC101927461033</o:_TemplateID>
 </o:CustomDocumentProperties>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>5.75 pt</w:DrawingGridHorizontalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>2</w:DisplayHorizontalDrawingGridEvery>
  <w:Compatibility>
   <w:BreakWrappedTables/>
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
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520078593 -1073717157 41 0 66047 0;}
@font-face
	{font-family:"Tw Cen MT";
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-alt:"Lucida Sans Unicode";
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:"Wingdings 2";
	panose-1:5 2 1 2 1 5 7 7 7 7;
	mso-font-charset:2;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
h1
	{mso-style-noshow:yes;
	mso-style-link:Char17;
	mso-style-next:Normal;
	margin-top:15.0pt;
	margin-right:0cm;
	margin-bottom:4.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	mso-outline-level:1;
	font-size:16.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	text-transform:uppercase;
	mso-font-kerning:0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:normal;}
h2
	{mso-style-noshow:yes;
	mso-style-link:Char16;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:4.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-outline-level:2;
	font-size:14.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#94B6D2;
	letter-spacing:1.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
h3
	{mso-style-noshow:yes;
	mso-style-link:Char15;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-outline-level:3;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:black;
	letter-spacing:.5pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
h4
	{mso-style-noshow:yes;
	mso-style-link:Char14;
	mso-style-next:Normal;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-outline-level:4;
	font-size:11.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	text-transform:uppercase;
	letter-spacing:.7pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:normal;}
h5
	{mso-style-noshow:yes;
	mso-style-link:Char13;
	mso-style-next:Normal;
	margin-top:10.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-outline-level:5;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	letter-spacing:.5pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
h6
	{mso-style-noshow:yes;
	mso-style-link:Char12;
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-outline-level:6;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	letter-spacing:.5pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-noshow:yes;
	mso-style-link:Char11;
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-outline-level:7;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	font-variant:small-caps;
	color:black;
	letter-spacing:.5pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoHeading8, li.MsoHeading8, div.MsoHeading8
	{mso-style-noshow:yes;
	mso-style-link:Char10;
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-outline-level:8;
	font-size:12.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#94B6D2;
	letter-spacing:.5pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;
	font-style:italic;}
p.MsoHeading9, li.MsoHeading9, div.MsoHeading9
	{mso-style-noshow:yes;
	mso-style-link:Char9;
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-outline-level:9;
	font-size:10.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#A5AB81;
	text-transform:uppercase;
	letter-spacing:2.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.MsoToc1, li.MsoToc1, div.MsoToc1
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:9.0pt;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	text-transform:uppercase;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;
	mso-no-proof:yes;}
p.MsoToc2, li.MsoToc2, div.MsoToc2
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:7.2pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	mso-no-proof:yes;}
p.MsoToc3, li.MsoToc3, div.MsoToc3
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:14.4pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	mso-no-proof:yes;}
p.MsoToc4, li.MsoToc4, div.MsoToc4
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:21.6pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	mso-no-proof:yes;}
p.MsoToc5, li.MsoToc5, div.MsoToc5
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:28.8pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	mso-no-proof:yes;}
p.MsoToc6, li.MsoToc6, div.MsoToc6
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:36.0pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	mso-no-proof:yes;}
p.MsoToc7, li.MsoToc7, div.MsoToc7
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:43.2pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	mso-no-proof:yes;}
p.MsoToc8, li.MsoToc8, div.MsoToc8
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:50.4pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	mso-no-proof:yes;}
p.MsoToc9, li.MsoToc9, div.MsoToc9
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:57.6pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	mso-no-proof:yes;}
p.MsoNormalIndent, li.MsoNormalIndent, div.MsoNormalIndent
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:32.4pt;
	mso-add-space:auto;
	text-indent:-18.0pt;
	line-height:125%;
	mso-pagination:widow-orphan;
	mso-list:l3 level1 lfo27;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoNormalIndentCxSpFirst, li.MsoNormalIndentCxSpFirst, div.MsoNormalIndentCxSpFirst
	{mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:32.4pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-18.0pt;
	line-height:125%;
	mso-pagination:widow-orphan;
	mso-list:l3 level1 lfo27;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoNormalIndentCxSpMiddle, li.MsoNormalIndentCxSpMiddle, div.MsoNormalIndentCxSpMiddle
	{mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:32.4pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-18.0pt;
	line-height:125%;
	mso-pagination:widow-orphan;
	mso-list:l3 level1 lfo27;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoNormalIndentCxSpLast, li.MsoNormalIndentCxSpLast, div.MsoNormalIndentCxSpLast
	{mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:32.4pt;
	mso-add-space:auto;
	text-indent:-18.0pt;
	line-height:125%;
	mso-pagination:widow-orphan;
	mso-list:l3 level1 lfo27;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-noshow:yes;
	mso-style-link:Char6;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-noshow:yes;
	mso-style-link:Char7;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoCaption, li.MsoCaption, div.MsoCaption
	{mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	text-transform:uppercase;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.MsoToa, li.MsoToa, div.MsoToa
	{mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:11.0pt;
	text-indent:-11.0pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoList, li.MsoList, div.MsoList
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoListBullet, li.MsoListBullet, div.MsoListBullet
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-list:l2 level1 lfo21;
	font-size:12.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoList2, li.MsoList2, div.MsoList2
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:36.0pt;
	text-indent:-18.0pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoListBullet2, li.MsoListBullet2, div.MsoListBullet2
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:36.0pt;
	text-indent:-18.0pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-list:l1 level1 lfo22;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#94B6D2;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoListBullet3, li.MsoListBullet3, div.MsoListBullet3
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:43.2pt;
	text-indent:-18.0pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-list:l0 level1 lfo23;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoListBullet4, li.MsoListBullet4, div.MsoListBullet4
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:72.0pt;
	text-indent:-18.0pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-list:l7 level1 lfo24;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	text-transform:uppercase;
	letter-spacing:.2pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoListBullet5, li.MsoListBullet5, div.MsoListBullet5
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:79.2pt;
	text-indent:-18.0pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	mso-list:l9 level1 lfo25;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-link:Char4;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:36.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoClosing, li.MsoClosing, div.MsoClosing
	{mso-style-link:Char1;
	margin-top:48.0pt;
	margin-right:0cm;
	margin-bottom:48.0pt;
	margin-left:0cm;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoClosingCxSpFirst, li.MsoClosingCxSpFirst, div.MsoClosingCxSpFirst
	{mso-style-link:Char1;
	mso-style-type:export-only;
	margin-top:48.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoClosingCxSpMiddle, li.MsoClosingCxSpMiddle, div.MsoClosingCxSpMiddle
	{mso-style-link:Char1;
	mso-style-type:export-only;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoClosingCxSpLast, li.MsoClosingCxSpLast, div.MsoClosingCxSpLast
	{mso-style-link:Char1;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:48.0pt;
	margin-left:0cm;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.MsoSignature, li.MsoSignature, div.MsoSignature
	{mso-style-link:Char;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.MsoSubtitle, li.MsoSubtitle, div.MsoSubtitle
	{mso-style-link:Char5;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:36.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	text-transform:uppercase;
	letter-spacing:2.5pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.MsoSalutation, li.MsoSalutation, div.MsoSalutation
	{mso-style-link:Char2;
	mso-style-next:Normal;
	margin-top:20.0pt;
	margin-right:0cm;
	margin-bottom:16.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.MsoDate, li.MsoDate, div.MsoDate
	{mso-style-parent:"No Spacing";
	mso-style-link:Char3;
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-align:center;
	mso-pagination:widow-orphan;
	mso-element:frame;
	mso-element-wrap:around;
	mso-element-anchor-horizontal:page;
	mso-element-left:center;
	mso-element-top:top;
	mso-height-rule:exactly;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:white;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.MsoDateCxSpFirst, li.MsoDateCxSpFirst, div.MsoDateCxSpFirst
	{mso-style-parent:"No Spacing";
	mso-style-link:Char3;
	mso-style-next:Normal;
	mso-style-type:export-only;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-align:center;
	mso-pagination:widow-orphan;
	mso-element:frame;
	mso-element-wrap:around;
	mso-element-anchor-horizontal:page;
	mso-element-left:center;
	mso-element-top:top;
	mso-height-rule:exactly;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:white;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.MsoDateCxSpMiddle, li.MsoDateCxSpMiddle, div.MsoDateCxSpMiddle
	{mso-style-parent:"No Spacing";
	mso-style-link:Char3;
	mso-style-next:Normal;
	mso-style-type:export-only;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-align:center;
	mso-pagination:widow-orphan;
	mso-element:frame;
	mso-element-wrap:around;
	mso-element-anchor-horizontal:page;
	mso-element-left:center;
	mso-element-top:top;
	mso-height-rule:exactly;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:white;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.MsoDateCxSpLast, li.MsoDateCxSpLast, div.MsoDateCxSpLast
	{mso-style-parent:"No Spacing";
	mso-style-link:Char3;
	mso-style-next:Normal;
	mso-style-type:export-only;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-align:center;
	mso-pagination:widow-orphan;
	mso-element:frame;
	mso-element-wrap:around;
	mso-element-anchor-horizontal:page;
	mso-element-left:center;
	mso-element-top:top;
	mso-height-rule:exactly;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:white;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.MsoBlockText, li.MsoBlockText, div.MsoBlockText
	{mso-style-name:"Block Text\,Block Quote";
	margin-top:0cm;
	margin-right:72.0pt;
	margin-bottom:14.0pt;
	margin-left:72.0pt;
	text-align:justify;
	mso-pagination:widow-orphan;
	border:none;
	mso-border-top-alt:solid #BED3E4 .25pt;
	mso-border-bottom-alt:solid #BED3E4 3.0pt;
	padding:0cm;
	mso-padding-alt:10.0pt 0cm 10.0pt 0cm;
	font-size:14.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	color:#7F7F7F;
	mso-ansi-language:EN-US;
	mso-fareast-language:KO;}
a:link, span.MsoHyperlink
	{color:#F7B615;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;
	text-underline:single;}
strong
	{font-family:"Tw Cen MT";
	mso-ascii-font-family:"Tw Cen MT";
	mso-hansi-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;}
em
	{mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-ascii-font-family:"Tw Cen MT";
	mso-hansi-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	letter-spacing:.5pt;
	font-weight:bold;}
p.Quote, li.Quote, div.Quote
	{mso-style-name:Quote;
	mso-style-link:"Quote Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	font-variant:small-caps;
	color:#775F55;
	letter-spacing:.3pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-style:italic;}
span.QuoteChar
	{mso-style-name:"Quote Char";
	mso-style-link:Quote;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-variant:small-caps;
	color:#775F55;
	letter-spacing:.3pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-style:italic;}
p.Section, li.Section, div.Section
	{mso-style-name:Section;
	margin-top:24.0pt;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	text-transform:uppercase;
	letter-spacing:3.0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.Subsection, li.Subsection, div.Subsection
	{mso-style-name:Subsection;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#94B6D2;
	letter-spacing:1.5pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
span.PlaceholderText
	{mso-style-name:"Placeholder Text";
	color:gray;}
span.Char8
	{mso-style-name:Char8;
	mso-style-noshow:yes;
	mso-style-link:"Balloon Text";
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:Tahoma;
	mso-ascii-font-family:Tahoma;
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;}
span.BookTitle
	{mso-style-name:"Book Title";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Tw Cen MT";
	mso-ascii-font-family:"Tw Cen MT";
	mso-hansi-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	font-style:italic;}
span.Char7
	{mso-style-name:Char7;
	mso-style-noshow:yes;
	mso-style-link:Footer;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;}
span.Char6
	{mso-style-name:Char6;
	mso-style-noshow:yes;
	mso-style-link:Header;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;}
span.Char17
	{mso-style-name:Char17;
	mso-style-noshow:yes;
	mso-style-link:"Heading 1";
	mso-ansi-font-size:16.0pt;
	mso-bidi-font-size:16.0pt;
	font-family:"Tw Cen MT";
	mso-ascii-font-family:"Tw Cen MT";
	mso-hansi-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	text-transform:uppercase;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;}
span.Char16
	{mso-style-name:Char16;
	mso-style-noshow:yes;
	mso-style-link:"Heading 2";
	mso-ansi-font-size:14.0pt;
	mso-bidi-font-size:14.0pt;
	color:#94B6D2;
	letter-spacing:1.0pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
span.Char15
	{mso-style-name:Char15;
	mso-style-noshow:yes;
	mso-style-link:"Heading 3";
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	color:black;
	letter-spacing:.5pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
span.Char14
	{mso-style-name:Char14;
	mso-style-noshow:yes;
	mso-style-link:"Heading 4";
	text-transform:uppercase;
	letter-spacing:.7pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;}
span.Char13
	{mso-style-name:Char13;
	mso-style-noshow:yes;
	mso-style-link:"Heading 5";
	mso-ansi-font-size:13.0pt;
	mso-bidi-font-size:13.0pt;
	color:#775F55;
	letter-spacing:.5pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
span.Char12
	{mso-style-name:Char12;
	mso-style-noshow:yes;
	mso-style-link:"Heading 6";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	color:#DD8047;
	letter-spacing:.5pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
span.Char11
	{mso-style-name:Char11;
	mso-style-noshow:yes;
	mso-style-link:"Heading 7";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-variant:small-caps;
	color:black;
	letter-spacing:.5pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;}
span.Char10
	{mso-style-name:Char10;
	mso-style-noshow:yes;
	mso-style-link:"Heading 8";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	color:#94B6D2;
	letter-spacing:.5pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;
	font-style:italic;}
span.Char9
	{mso-style-name:Char9;
	mso-style-noshow:yes;
	mso-style-link:"Heading 9";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	color:#A5AB81;
	text-transform:uppercase;
	letter-spacing:2.0pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
span.IntenseEmphasis
	{mso-style-name:"Intense Emphasis";
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-ascii-font-family:"Tw Cen MT";
	mso-hansi-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	position:relative;
	top:0pt;
	mso-text-raise:0pt;
	letter-spacing:.5pt;
	mso-font-width:100%;
	mso-font-kerning:0pt;
	font-weight:bold;
	vertical-align:baseline;}
p.IntenseQuote, li.IntenseQuote, div.IntenseQuote
	{mso-style-name:"Intense Quote";
	mso-style-link:"Intense Quote Char";
	margin-top:15.0pt;
	margin-right:36.0pt;
	margin-bottom:15.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	background:white;
	border:none;
	mso-border-alt:double #DD8047 4.5pt;
	padding:0cm;
	mso-padding-alt:10.0pt 10.0pt 10.0pt 10.0pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.IntenseQuoteCxSpFirst, li.IntenseQuoteCxSpFirst, div.IntenseQuoteCxSpFirst
	{mso-style-name:"Intense QuoteCxSpFirst";
	mso-style-link:"Intense Quote Char";
	mso-style-type:export-only;
	margin-top:15.0pt;
	margin-right:36.0pt;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	background:white;
	border:none;
	mso-border-alt:double #DD8047 4.5pt;
	padding:0cm;
	mso-padding-alt:10.0pt 10.0pt 10.0pt 10.0pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.IntenseQuoteCxSpMiddle, li.IntenseQuoteCxSpMiddle, div.IntenseQuoteCxSpMiddle
	{mso-style-name:"Intense QuoteCxSpMiddle";
	mso-style-link:"Intense Quote Char";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:36.0pt;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	background:white;
	border:none;
	mso-border-alt:double #DD8047 4.5pt;
	padding:0cm;
	mso-padding-alt:10.0pt 10.0pt 10.0pt 10.0pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.IntenseQuoteCxSpLast, li.IntenseQuoteCxSpLast, div.IntenseQuoteCxSpLast
	{mso-style-name:"Intense QuoteCxSpLast";
	mso-style-link:"Intense Quote Char";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:36.0pt;
	margin-bottom:15.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	background:white;
	border:none;
	mso-border-alt:double #DD8047 4.5pt;
	padding:0cm;
	mso-padding-alt:10.0pt 10.0pt 10.0pt 10.0pt;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
span.IntenseQuoteChar
	{mso-style-name:"Intense Quote Char";
	mso-style-link:"Intense Quote";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	color:#DD8047;
	background:white;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
span.IntenseReference
	{mso-style-name:"Intense Reference";
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Tw Cen MT";
	mso-ascii-font-family:"Tw Cen MT";
	mso-hansi-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	color:#94B6D2;
	text-transform:uppercase;
	position:relative;
	top:0pt;
	mso-text-raise:0pt;
	letter-spacing:.5pt;
	mso-font-width:100%;
	font-weight:bold;
	text-underline:#94B6D2;
	text-decoration:underline;
	text-underline:single;}
p.ListParagraph, li.ListParagraph, div.ListParagraph
	{mso-style-name:"List Paragraph";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.ListParagraphCxSpFirst, li.ListParagraphCxSpFirst, div.ListParagraphCxSpFirst
	{mso-style-name:"List ParagraphCxSpFirst";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.ListParagraphCxSpMiddle, li.ListParagraphCxSpMiddle, div.ListParagraphCxSpMiddle
	{mso-style-name:"List ParagraphCxSpMiddle";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.ListParagraphCxSpLast, li.ListParagraphCxSpLast, div.ListParagraphCxSpLast
	{mso-style-name:"List ParagraphCxSpLast";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.NoSpacing, li.NoSpacing, div.NoSpacing
	{mso-style-name:"No Spacing";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.PersonalName, li.PersonalName, div.PersonalName
	{mso-style-name:"Personal Name";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:20.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:white;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.SendersAddress, li.SendersAddress, div.SendersAddress
	{mso-style-name:"Sender\0027s Address";
	mso-style-parent:"No Spacing";
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.SendersAddressCxSpFirst, li.SendersAddressCxSpFirst, div.SendersAddressCxSpFirst
	{mso-style-name:"Sender\0027s AddressCxSpFirst";
	mso-style-parent:"No Spacing";
	mso-style-type:export-only;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.SendersAddressCxSpMiddle, li.SendersAddressCxSpMiddle, div.SendersAddressCxSpMiddle
	{mso-style-name:"Sender\0027s AddressCxSpMiddle";
	mso-style-parent:"No Spacing";
	mso-style-type:export-only;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.SendersAddressCxSpLast, li.SendersAddressCxSpLast, div.SendersAddressCxSpLast
	{mso-style-name:"Sender\0027s AddressCxSpLast";
	mso-style-parent:"No Spacing";
	mso-style-type:export-only;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
span.Char5
	{mso-style-name:Char5;
	mso-style-link:Subtitle;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Tw Cen MT";
	mso-ascii-font-family:"Tw Cen MT";
	mso-hansi-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	color:#DD8047;
	text-transform:uppercase;
	letter-spacing:2.5pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
span.SubtleEmphasis
	{mso-style-name:"Subtle Emphasis";
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-ascii-font-family:"Tw Cen MT";
	mso-hansi-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	font-style:italic;}
span.SubtleReference
	{mso-style-name:"Subtle Reference";
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-ascii-font-family:"Tw Cen MT";
	mso-hansi-font-family:"Tw Cen MT";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	font-weight:bold;
	font-style:italic;}
span.Char4
	{mso-style-name:Char4;
	mso-style-link:Title;
	mso-ansi-font-size:24.0pt;
	mso-bidi-font-size:24.0pt;
	color:#775F55;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;}
span.Char3
	{mso-style-name:Char3;
	mso-style-link:Date;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	color:white;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
p.FooterEven, li.FooterEven, div.FooterEven
	{mso-style-name:"Footer Even";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:0cm;
	line-height:110%;
	mso-pagination:widow-orphan;
	border:none;
	mso-border-top-alt:solid #94B6D2 .5pt;
	padding:0cm;
	mso-padding-alt:1.0pt 0cm 0cm 0cm;
	font-size:10.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.FooterOdd, li.FooterOdd, div.FooterOdd
	{mso-style-name:"Footer Odd";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:9.0pt;
	margin-left:0cm;
	text-align:right;
	line-height:110%;
	mso-pagination:widow-orphan;
	border:none;
	mso-border-top-alt:solid #94B6D2 .5pt;
	padding:0cm;
	mso-padding-alt:1.0pt 0cm 0cm 0cm;
	font-size:10.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.HeaderEven, li.HeaderEven, div.HeaderEven
	{mso-style-name:"Header Even";
	mso-style-parent:"No Spacing";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	border:none;
	mso-border-bottom-alt:solid #94B6D2 .5pt;
	padding:0cm;
	mso-padding-alt:0cm 0cm 1.0pt 0cm;
	font-size:10.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.HeaderOdd, li.HeaderOdd, div.HeaderOdd
	{mso-style-name:"Header Odd";
	mso-style-parent:"No Spacing";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:right;
	mso-pagination:widow-orphan;
	border:none;
	mso-border-bottom-alt:solid #94B6D2 .5pt;
	padding:0cm;
	mso-padding-alt:0cm 0cm 1.0pt 0cm;
	font-size:10.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
p.SenderAddress, li.SenderAddress, div.SenderAddress
	{mso-style-name:"Sender Address";
	mso-style-parent:"No Spacing";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.CompanyName, li.CompanyName, div.CompanyName
	{mso-style-name:"Company Name";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:18.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
span.Char2
	{mso-style-name:Char2;
	mso-style-link:Salutation;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
p.RecipientAddress, li.RecipientAddress, div.RecipientAddress
	{mso-style-name:"Recipient Address";
	mso-style-parent:"No Spacing";
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.RecipientAddressCxSpFirst, li.RecipientAddressCxSpFirst, div.RecipientAddressCxSpFirst
	{mso-style-name:"Recipient AddressCxSpFirst";
	mso-style-parent:"No Spacing";
	mso-style-type:export-only;
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.RecipientAddressCxSpMiddle, li.RecipientAddressCxSpMiddle, div.RecipientAddressCxSpMiddle
	{mso-style-name:"Recipient AddressCxSpMiddle";
	mso-style-parent:"No Spacing";
	mso-style-type:export-only;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
p.RecipientAddressCxSpLast, li.RecipientAddressCxSpLast, div.RecipientAddressCxSpLast
	{mso-style-name:"Recipient AddressCxSpLast";
	mso-style-parent:"No Spacing";
	mso-style-type:export-only;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:11.5pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	color:#775F55;
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;}
span.Char1
	{mso-style-name:Char1;
	mso-style-link:Closing;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;}
span.Char
	{mso-style-name:Char;
	mso-style-link:Signature;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
p.Category, li.Category, div.Category
	{mso-style-name:Category;
	mso-style-link:"Category Char";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:110%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";
	mso-ansi-language:EN-US;
	mso-fareast-language:JA;
	font-weight:bold;}
span.CategoryChar
	{mso-style-name:"Category Char";
	mso-style-link:Category;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	mso-ansi-language:X-NONE;
	mso-fareast-language:JA;
	font-weight:bold;}
ins
	{mso-style-type:export-only;
	text-decoration:none;}
span.msoIns
	{mso-style-type:export-only;
	mso-style-name:"";
	text-decoration:underline;
	text-underline:single;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("Creative%20Designer_files/header.htm") fs;
	mso-footnote-continuation-separator:url("Creative%20Designer_files/header.htm") fcs;
	mso-endnote-separator:url("Creative%20Designer_files/header.htm") es;
	mso-endnote-continuation-separator:url("Creative%20Designer_files/header.htm") ecs;}
@page Section1
	{size:612.0pt 792.0pt;
	margin:54.0pt 54.0pt 54.0pt 54.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-title-page:yes;
	mso-even-header:url("Creative%20Designer_files/header.htm") eh1;
	mso-header:url("Creative%20Designer_files/header.htm") h1;
	mso-even-footer:url("Creative%20Designer_files/header.htm") ef1;
	mso-footer:url("Creative%20Designer_files/header.htm") f1;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:-128;
	mso-list-type:simple;
	mso-list-template-ids:-610877216;}
@list l0:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:79.2pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l1
	{mso-list-id:-127;
	mso-list-type:simple;
	mso-list-template-ids:-402203248;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l2
	{mso-list-id:-126;
	mso-list-type:simple;
	mso-list-template-ids:23919784;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F06E;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:43.2pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l3
	{mso-list-id:-125;
	mso-list-type:simple;
	mso-list-template-ids:-1823018502;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0A4;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Wingdings 2";
	mso-bidi-font-family:"Wingdings 2";}
@list l4
	{mso-list-id:-120;
	mso-list-type:simple;
	mso-list-template-ids:-1823861682;}
@list l4:level1
	{mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l5
	{mso-list-id:-119;
	mso-list-type:simple;
	mso-list-template-ids:-1855936432;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-style-link:"List Bullet";
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l6
	{mso-list-id:463474957;
	mso-list-type:hybrid;
	mso-list-template-ids:-1258658938 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l7
	{mso-list-id:716274331;
	mso-list-template-ids:67698717;
	mso-list-style-name:"Median List Style";}
@list l7:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0A3;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:11.5pt;
	mso-bidi-font-size:11.5pt;
	font-family:"Wingdings 2";
	mso-bidi-font-family:"Wingdings 2";
	color:#DD8047;}
@list l7:level2
	{mso-level-number-format:alpha-lower;
	mso-level-text:"%2\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:36.0pt;
	text-indent:-18.0pt;}
@list l7:level3
	{mso-level-number-format:roman-lower;
	mso-level-text:"%3\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;}
@list l7:level4
	{mso-level-text:"\(%4\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-18.0pt;}
@list l7:level5
	{mso-level-number-format:alpha-lower;
	mso-level-text:"\(%5\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;}
@list l7:level6
	{mso-level-number-format:roman-lower;
	mso-level-text:"\(%6\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.0pt;
	text-indent:-18.0pt;}
@list l7:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:126.0pt;
	text-indent:-18.0pt;}
@list l7:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:144.0pt;
	text-indent:-18.0pt;}
@list l7:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;}
@list l8
	{mso-list-id:747112345;
	mso-list-type:hybrid;
	mso-list-template-ids:1738838382 -884851750 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l8:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0A3;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:"Wingdings 2";
	mso-bidi-font-family:"Wingdings 2";}
@list l9
	{mso-list-id:1190491078;
	mso-list-type:hybrid;
	mso-list-template-ids:1295187416 -778151030 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l9:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0A3;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:32.4pt;
	text-indent:-18.0pt;
	font-family:"Wingdings 2";
	mso-bidi-font-family:"Wingdings 2";}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
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
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Tw Cen MT";}
table.MsoTableGrid
	{mso-style-name:"Table Grid";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	border:solid black 1.0pt;
	mso-border-alt:solid black .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid black;
	mso-border-insidev:.5pt solid black;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Tw Cen MT";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Tw Cen MT";}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="3074"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-AU link="#F7B615" vlink=purple style=\'tab-interval:36.0pt\'>

<div class=Section1>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style=\'width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid black .5pt;
 mso-yfti-tbllook:160;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:
 .5pt solid black;mso-border-insidev:.5pt solid black\'>
 <tr style=\'mso-yfti-irow:0;height:32.4pt\'>
  <td width=161 style=\'width:120.6pt;border:none;border-bottom:solid white 4.5pt;
  background:#775F55;padding:0cm 5.4pt 0cm 5.4pt;height:32.4pt\'>
  <p class=PersonalName style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=526 style=\'width:394.2pt;border:none;border-bottom:solid white 4.5pt;
  background:#775F55;padding:0cm 5.4pt 0cm 5.4pt;height:32.4pt\'>
  <p class=PersonalName style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:12.0pt\'>Creative Designer (Advertising)</span><span
  lang=EN-US style=\'font-size:12.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style=\'mso-yfti-irow:1;height:.9pt\'>
  <td width=161 style=\'width:120.6pt;border:none;border-right:solid white 4.5pt;
  mso-border-top-alt:solid white 4.5pt;background:#DD8047;padding:1.45pt 5.75pt 1.45pt 5.75pt;
  height:.9pt\'>
  <p class=MsoDateCxSpFirst style=\'mso-element:frame;mso-element-wrap:auto;
  mso-element-anchor-horizontal:column;mso-element-left:left;mso-element-top:
  0cm;mso-height-rule:exactly\'><span lang=EN-US style=\'font-size:10.0pt\'><span
  class=msoIns><ins cite="mailto:163109" datetime="2008-02-03T08:28">Date of
  Birth<o:p></o:p></ins></span></span></p>
  <p class=MsoDateCxSpLast style=\'mso-element:frame;mso-element-wrap:auto;
  mso-element-anchor-horizontal:column;mso-element-left:left;mso-element-top:
  0cm;mso-height-rule:exactly\'><st1:date Month="4" Day="17" Year="1982"><span
   lang=EN-US style=\'font-size:10.0pt\'>4/17/1982</span></st1:date><span
  lang=EN-US style=\'font-size:10.0pt\'><o:p></o:p></span></p>
  </td>
  <td width=526 valign=top style=\'width:394.2pt;border:none;mso-border-top-alt:
  solid white 4.5pt;mso-border-left-alt:solid white 4.5pt;background:#94B6D2;
  padding:1.45pt 5.4pt 1.45pt 5.4pt;height:.9pt\'>
  <p class=MsoNormal style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:12.0pt\'>Kavita Srinivasan<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style=\'mso-yfti-irow:2;height:38.95pt\'>
  <td width=161 style=\'width:120.6pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:38.95pt\'>
  <p class=MsoNormal style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=526 valign=top style=\'width:394.2pt;border:none;padding:2.9pt 5.75pt 0cm 5.75pt;
  height:38.95pt\'>
  <p class=SenderAddress><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-family:
  "Times New Roman"\'><br>
  </span><span lang=EN-US style=\'font-size:10.0pt\'>+61413435251<br>
  <a href="mailto:kavita@pitchedhigh.com">kavita@pitchedhigh.com</a></span><span
  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  <p class=SenderAddress><span lang=EN-US style=\'font-size:10.0pt\'><a
  href="http://www.pitchedhigh.com/">www.pitchedhigh.com</a></span><span
  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style=\'mso-yfti-irow:3;mso-yfti-lastrow:yes;height:14.4pt\'>
  <td width=161 style=\'width:120.6pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt\'>
  <p class=MsoNormal style=\'line-height:normal\'><b><span lang=EN-US
  style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman";color:white\'><!--[if gte vml 1]><v:shapetype
   id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
   path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
   <v:stroke joinstyle="miter"/>
   <v:formulas>
    <v:f eqn="if lineDrawn pixelLineWidth 0"/>
    <v:f eqn="sum @0 1 0"/>
    <v:f eqn="sum 0 0 @1"/>
    <v:f eqn="prod @2 1 2"/>
    <v:f eqn="prod @3 21600 pixelWidth"/>
    <v:f eqn="prod @3 21600 pixelHeight"/>
    <v:f eqn="sum @0 0 1"/>
    <v:f eqn="prod @6 1 2"/>
    <v:f eqn="prod @7 21600 pixelWidth"/>
    <v:f eqn="sum @8 21600 0"/>
    <v:f eqn="prod @7 21600 pixelHeight"/>
    <v:f eqn="sum @10 21600 0"/>
   </v:formulas>
   <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
   <o:lock v:ext="edit" aspectratio="t"/>
  </v:shapetype><v:shape id="_x0000_i1025" type="#_x0000_t75" style=\'width:86.25pt;
   height:2in\'>
   <v:imagedata src="/logo.png" o:title="logo"/>
  </v:shape><![endif]--><![if !vml]><img border=0 width=115 height=192
  src="Creative%20Designer_files/image002.gif" v:shapes="_x0000_i1025"><![endif]><o:p></o:p></span></b></p>
  </td>
  <td width=526 valign=top style=\'width:394.2pt;border:none;padding:5.75pt 5.75pt 5.75pt 5.75pt;
  height:14.4pt\'>
  <p class=Section><span lang=EN-US style=\'font-size:10.0pt\'>Objectives</span><span
  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  <p class=MsoNormal style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt\'>A creative designer’s position where contemporary
  creative ideas, cutting edge creative solutions along with a hand’s on
  experience in design tools can help create competitive advertising solutions
  and promote growth of client’s business.</span><span lang=EN-US
  style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  <p class=Section><span lang=EN-US style=\'font-size:10.0pt\'>Education</span><span
  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  <p class=Subsection style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>Masters in
  Creative Advertising<o:p></o:p></span></p>
  <p class=Subsection style=\'line-height:normal\'><st1:place><st1:PlaceName><span
    lang=EN-US style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>Queensland</span></st1:PlaceName><span
   lang=EN-US style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'> </span><st1:PlaceType><span
    lang=EN-US style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>University</span></st1:PlaceType></st1:place><span
  lang=EN-US style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'> Of
  Technology<o:p></o:p></span></p>
  <p class=Subsection style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>GPA - 5.5
  (Average of two semesters)<o:p></o:p></span></p>
  <p class=Subsection style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'><o:p>&nbsp;</o:p></span></p>
  <div style=\'border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .75pt;padding:0cm 0cm 1.0pt 0cm\'>
  <p class=Subsection style=\'line-height:normal;border:none;mso-border-bottom-alt:
  solid windowtext .75pt;padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm\'><span
  lang=EN-US style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>Completion
  date – 06/2008<o:p></o:p></span></p>
  </div>
  <p class=Subsection style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman";font-weight:
  normal\'><o:p>&nbsp;</o:p></span></p>
  <p class=Subsection style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>Bachelor of
  Technology in Computer Science and Engineering</span><span lang=EN-US
  style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman";color:windowtext;
  font-weight:normal\'><o:p></o:p></span></p>
  <p class=Subsection style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>Indira Gandhi
  Institute of Technology, GGSIPU, </span><st1:place><st1:City><span
    lang=EN-US style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>Delhi</span></st1:City></st1:place><span
  lang=EN-US style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'><o:p></o:p></span></p>
  <p class=Subsection style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>CPA – 78.45<o:p></o:p></span></p>
  <p class=Subsection style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'><o:p>&nbsp;</o:p></span></p>
  <div style=\'border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .75pt;padding:0cm 0cm 1.0pt 0cm\'>
  <p class=Subsection style=\'line-height:normal;border:none;mso-border-bottom-alt:
  solid windowtext .75pt;padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm\'><span
  lang=EN-US style=\'font-size:10.0pt;color:windowtext;font-weight:normal\'>Completion
  date – 07/2004<o:p></o:p></span></p>
  </div>
  <p class=Section><span lang=EN-US style=\'font-size:10.0pt\'>CrEATIVE
  ADVERTISING PROJECTS</span><span lang=EN-US style=\'font-size:10.0pt;
  mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Complete
  campaign development for “Alternegy” an energy optimized solution provider in
  </span><st1:place><st1:City><span lang=EN-US style=\'font-size:10.0pt\'>Brisbane</span></st1:City><span
   lang=EN-US style=\'font-size:10.0pt\'>, </span><st1:country-region><span
    lang=EN-US style=\'font-size:10.0pt\'>Australia</span></st1:country-region></st1:place><span
  lang=EN-US style=\'font-size:10.0pt\'><o:p></o:p></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Print,
  TV and Radio campaign for XEROX self erasing paper<o:p></o:p></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Advertising
  strategy solution for rebranding of UTI bank to AXIS bank in </span><st1:place><st1:country-region><span
    lang=EN-US style=\'font-size:10.0pt\'>india</span></st1:country-region></st1:place><span
  lang=EN-US style=\'font-size:10.0pt\'><o:p></o:p></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Multi
  platform creative advertising solution for Zen Hot Yoga , a hot yoga center
  in </span><st1:place><st1:City><span lang=EN-US style=\'font-size:10.0pt\'>Brisbane</span></st1:City><span
   lang=EN-US style=\'font-size:10.0pt\'>, </span><st1:country-region><span
    lang=EN-US style=\'font-size:10.0pt\'>Australia</span></st1:country-region></st1:place><span
  lang=EN-US style=\'font-size:10.0pt\'>.<o:p></o:p></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Conducted
  research and provided a calculated advertising and marketing solution for
  Pure Health Clubs in </span><st1:place><st1:City><span lang=EN-US
    style=\'font-size:10.0pt\'>Brisbane</span></st1:City><span lang=EN-US
   style=\'font-size:10.0pt\'>, </span><st1:country-region><span lang=EN-US
    style=\'font-size:10.0pt\'>Australia</span></st1:country-region></st1:place><span
  lang=EN-US style=\'font-size:10.0pt\'>.<o:p></o:p></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Designed
  web based branding solutions for a social networking website project<o:p></o:p></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Designed
  web based branding solution for a job search portal<o:p></o:p></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Presented
  a logo design solution and placement ideas to “QPASTT”, a social service
  organization providing assistance to refugees</span><span lang=EN-US
  style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Prepared
  a creative campaign for TiVo as a part of the curriculum</span><span
  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><span
  class=msoIns><ins cite="mailto:Kavita" datetime="2008-03-23T01:15"><o:p></o:p></ins></span></span></p>
  <p class=MsoNormal style=\'margin-left:36.0pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l6 level1 lfo33\'><![if !supportLists]><span lang=EN-US
  style=\'font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol\'><span style=\'mso-list:Ignore\'>·<span
  style=\'font:7.0pt "Times New Roman"\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span lang=EN-US style=\'font-size:10.0pt\'>Presently
  working on a complete advertising campaign for a community magazine (the
  campaign is expected to be LIVE by May 2008)<o:p></o:p></span></p>
  <p class=Section><span lang=EN-US style=\'font-size:10.0pt\'>SUPPORTING SKILLS</span><span
  lang=EN-US style=\'mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  <p class=MsoNormal style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt\'>I have been involved in various forms of art related
  and performance activities and have demonstrated my creative writing skills
  on various competitive platforms</span><span lang=EN-US>.</span><span
  lang=EN-US style=\'font-size:10.0pt\'> Exposure to these activities have helped
  me hone my visual communication skills and will prove beneficial in design
  work in advertising</span><span lang=EN-US style=\'font-size:10.0pt;
  mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  <p class=Section><span lang=EN-US style=\'font-size:10.0pt\'>OTHER PROFESSIONAL
  EXPERIENCE<o:p></o:p></span></p>
  <p class=MsoNormal style=\'line-height:normal\'><span lang=EN-US
  style=\'font-size:10.0pt\'>I have worked in the IT industry for more than 3
  years and have been involved in various global projects in companies like
  Sapient, Amdocs and Biometric Innovations in </span><st1:place><st1:country-region><span
    lang=EN-US style=\'font-size:10.0pt\'>India</span></st1:country-region></st1:place><span
  lang=EN-US style=\'font-size:10.0pt\'> and </span><st1:place><st1:country-region><span
    lang=EN-US style=\'font-size:10.0pt\'>Australia</span></st1:country-region></st1:place><span
  lang=EN-US style=\'font-size:10.0pt\'>. Other than IT skills, I have exhibited
  valuable communication skills and quick understanding of business. </span><span
  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style=\'margin-bottom:10.0pt;line-height:normal\'><span
lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-family:"Times New Roman"\'><o:p>&nbsp;</o:p></span></p>

</div>

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
$editor->plugins['serverPreview']->URL = 'http://pitchedhigh.com/.wysiwygPro_preview_Creative Designer_htm.php?randomId=DbO5ZmiSGTV6u9RhqRT9rUEAN1G2u9gxrFvadSpOcyYKUBCy2gGokOvH58HHP8hD74bghdYTJdYX1awl84Kcxao1C23OF1GsNBbMhuWwG35_VLNemJKXEZIRx7TkERk_oPu2a_OIMUuQSO_QkZBzgVefKonvomL1Vwcvb8J_cTvGx5mMh2m5sIrCuWKiXPvyjZdbqTuZRfP1aOjZClCr1IbvVfVrFBF6KDPYd1zIvskgI_csl9U0JRsQ_W50MKM0';
// print the editor to the browser:
$editor->htmlCharset = 'iso-8859-10';
$editor->display('100%','450');

?>
</div>
<script>

</script>

</body>
</html>
<?php ob_end_flush() ?>

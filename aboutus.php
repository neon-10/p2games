<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>P2GAMES</title>
<meta name="keywords" content="P2Games.co.uk, P2 Games, Peppa Pig, Peppa Pig Toys, Peppa Pigs, Peppa Pig Website, Peppa the Pig, PeppaPig, PeppaPig Game, Peppa Pig Game, The Peppa Pig Game, Tracy Beaker, Tracey Beaker, Beaker Tracey, Tracey Beaker Game, The Tracey Beaker Game, Jacqueline Wilson's, Jacqueline Wilson, Wilson Jacqueline, Cricket Captain 2009, Cricket Captain, Captain Cricket, Cricket Games, DS, WII, PC, PC-CDROM, Cricket Game, England Cricket" />
<meta name="description" content="P2 Games are a UK based publisher of interactive games across PC, Nintendo, Microsoft, Sony and Apple Platforms." />

<meta http-equiv="pragma" content="no-cache" />
<meta name="revisit-after" content="7 days" />
<meta name="language" content="English" />
<meta name="doc-type" content="Web Page" />
<meta name="doc-class" content="Published" />
<meta name="doc-rights" content="Copywritten Work" />
<meta name="distribution" content="Global" />
<meta name="author" content="Neon10, Neon10.com"/>
<link rel="stylesheet" type="text/css" href="includes/p2.css" media="all" />

<?php
// include database details
include('admin/includes/database_connect.php'); 
include('includes/id_browser.php'); 
include('includes/curPageURL.php'); 
include('includes/mob_dev_calc.php'); 

$page='aboutus';

$Ref = $Ref_Get;
$Ref= 'aboutus';
$info='yes';

include('includes/buttons.php'); 

?>


<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21876195-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body 
<?php


		for ($i = 0; $i < count($Buttons); $i++) {

print ('onload="MM_preloadImages(\'images/exports/info/button_'.$Buttons[$i].'_rollover.jpg\')"');

		}

?>

>


<!-- Entire Site Positioning -->
<div align="center" style ="position:relative; left:0px; top:-10px;">
<?php 
// +++++++++++++++++ EDIT WIDTH OF SITE +++++++++++++++++++++++++++++
if ($Device_Name == 'ipad') {

		?><table width="1200" cellpadding="0" cellspacing="0"><tr><?php 

}elseif ($Device_Name == 'iphone or ipod') {

		?><table width="1000" cellpadding="0" cellspacing="0"><tr><?php 

}elseif (($Browser == 'safari') || ($Browser == 'gecko')){ 

		?><table cellpadding="0" cellspacing="0"><tr><?php 

}elseif ($Browser == 'firefox'){ 

		?><table cellpadding="0" cellspacing="0"><tr><?php 

}elseif ($Browser == 'msie'){ 

		if ($Version == '7.0'){ 

				?><table cellpadding="0" cellspacing="0"><tr><?php 

		}else{

				?><table cellpadding="0" cellspacing="0"><tr><?php 

		}
	} 
// +++++++++++++++++ BROWSER CONFIG +++++++++++++++++++++++++++++
?>


<!-- Left Wide Back -->
<?php
print ('<td width="482" height="489" border="0"  align="left" valign="top" style="background-image: url(images/exports/info/wide_left_back.jpg); background-position: right top; background-repeat: no-repeat;">');

?></td>



<!-- Main Central Area -->
<td valign="top" width="923px">

<table cellpadding="0" cellspacing="0"><tr><td>

<!-- Nav -->
<?php
include('includes/site_files/nav.php'); 
?>

</td>


<tr><td>

<!-- Nav -->
<?php
include('includes/site_files/main_info_area.php'); 
?>


</td></tr>





<tr><td>
<!-- Microsite Links -->



</td></tr>

<tr><!-- Footer -->
<?php
print ('<td width="923" height="96" border="0"  align="left" valign="top" style="background-image: url(images/exports/info/footer.jpg); background-position: left top; background-repeat: no-repeat;">');


include('includes/site_files/footer_content.php'); 


?>

</td></tr>
</tr></table>




</td>


<!-- Left Wide Back -->
<?php
print ('<td width="482" height="489" border="0"  align="left" valign="top" style="background-image: url(images/exports/info/wide_right_back.jpg); background-position: left top; background-repeat: no-repeat;">');

?></td>
</tr></table>















</div>
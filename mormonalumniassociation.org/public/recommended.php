<html>

<head>
<title>Mormon Alumni Association Books</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
p {font-size:1.0em;}
img.floatleft { float: left; margin: 0px 10px 10px 0px; }
img.floatright { float: right; margin: 0px 0px 10px 10px; }
td.paddedcell { padding-top:10px; padding-bottom:10px; padding-right:10px; padding-left:10px; }
</style>

<?php 
$book_indices = range(0, 23);
shuffle($book_indices);
$books = array("exm", "me", "g4w", "huh", "hb", "bot", "eom", "har", "mft", "ocr", "sus", "tbg", "zfj", "mu", "md", "es", "ifq", "ydk", "rbp", "sr", "fp", "adt", "fe","wwg");
$book_dir = "books/";
$main_page = "/main_page.php";
$sidebar_image = "/sidebar_image.php";
$gradient = "/gradient.css";
if(isset($_GET['book'])){
   $bookVar = $_GET['book'];
}else{
   $bookVar = $books[$book_indices[12]];
}
?>



<link href="<?= $book_dir.$bookVar.$gradient ?>" rel="stylesheet" type="text/css">

</head>


<body>

<center>

<table border=0 cols=1 cellspacing=0>

<tr>
<td>
<a href="<?= $BASE_URL ?>"><img width="988" height="72" src="images/recommended-long.png"/></a>
<hr/>
</td>
</tr>
<tr>
<table border=0 cols=2 cellspacing=0 width="988">
<tr>
<td width="838" valign="top" class="paddedcell" >
<?php include( $book_dir.$bookVar.$main_page ); ?>
</td>
<td width="150">
<div style="overflow:auto; height:1000px; width:150px">
<table border=0 cols=1 cellspacing=0 width="125">
<?php foreach ($book_indices as &$bindex) {
    echo "<tr><td>";
    include( $book_dir.$books[$bindex].$sidebar_image );
    echo "</td></tr>";
}
?>
</table>
</div>
</td>
</tr>
</table>
</tr>

</table>

</center>

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10931344; 
var sc_invisible=1; 
var sc_security="177504fd"; 
var sc_https=1; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web statistics"
href="http://statcounter.com/free-web-stats/"
target="_blank"><img class="statcounter"
src="//c.statcounter.com/10931344/0/177504fd/1/" alt="web
statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

<!-- Start of StatCounter Code: old version -->
<!--<script type="text/javascript" language="javascript">
var sc_project=1346876; 
var sc_invisible=1; 
var sc_partition=12; 
var sc_security="0073260d"; 
</script>

<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c13.statcounter.com/counter.php?sc_project=1346876&amp;java=0&amp;security=0073260d&amp;invisible=1" alt="html hit counter" border="0"></a> </noscript> -->
<!-- End of StatCounter Code -->


</body>

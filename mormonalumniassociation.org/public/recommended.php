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
$books = array("exm", "me", "g4w", "huh", "hb", "bot", "eom", "har", "dmf", "ocr", "sus", "tbg", "zfj", "mu", "md", "es", "ifq", "ydk", "rbp", "sr", "fp", "adt", "fe","wwg");
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

</body>

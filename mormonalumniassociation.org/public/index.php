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
$book_indices = range(0, 1);
shuffle($book_indices);
$books = array("ss");
$book_dir = "books/";
$main_page = "/main_page.php";
$sidebar_image = "/sidebar_image.php";
$gradient = "/gradient.css";
$bookVar = $books[0];
?>



<link href="<?= $book_dir.$bookVar.$gradient ?>" rel="stylesheet" type="text/css">

</head>


<body>

<center>

<table border=0 cols=1 cellspacing=0>

  <tr>
    <td>
    <a href="<?= $BASE_URL ?>"><img width="988" height="72" src="images/MAABooks-long.png"/></a>
      <hr/>
    </td>
  </tr>
  <tr>
    <table border=0 cols=2 cellspacing=0 width="988">
      <tr>
        <td width="838" valign="top" class="paddedcell" >
          <?php include( $book_dir.$bookVar.$main_page ); ?>
        </td>
        <td width="150" valign="top" class="paddedcell" >
          <table border=0 cols=1 cellspacing=0 width="150">
            <tr>
              <td valign="top" width="150"><a href="recommended.php?book=about"><img src="images/about_button.png"/></a></td>
            </tr>
            <tr>
              <td valign="top" width="150"><a href="https://mainstreetplaza.com"><img src="images/mainstreetplaza.png"/></a></td>
            </tr>
            <tr>
              <td valign="top" width="150"><a href="recommended.php"><img src="images/recommended.png"/></a></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </tr>
</table>

</center>


</body>

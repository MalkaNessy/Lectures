<?php
require_once __DIR__ . "/../connection.php";
//echo '<link href="style-admin.css" rel="stylesheet">';
function isint($str)
{
  return preg_match("/^[0-9]+$/",$str);
}
$id = $_GET['id']; //id статьи в таблице
if (!isint($id))
{
	die('Wrong ID');
}

$link = dbconnect();

$result = mysql_query("SELECT * FROM lectures WHERE ID=$id");
$row = mysql_fetch_array($result);
if (!$row)
{
	die('Такой страницы нет');
}
//var_dump($row); 
//echo $row["title"];


$includes = '<link href="style-admin.css" rel="stylesheet">'.
'<link rel="stylesheet" href="CLEditor1_4_5/jquery.cleditor.css" />'.
'<script src="jquery-3.1.1.js"></script>'.
'<script src="CLEditor1_4_5/jquery.cleditor.min.js"></script>'.
'<script src="form.js"></script>';


$body = '<form action="savedata.php" method="post"><span class="formname">Заголовок статьи: </span><input name="title" type="text" value="'   .$row["title"]. '" > <br>'.
'<span class="formname">Надпись на кнопке: </span><input name="button_name" type="text" value="'   .$row["button_name"]. '"> <br>'.
'<span class="formname">Всплывающая подпись при наведении мышки на кнопку: </span><input name="short" type="text" value="'   .$row["short"]. '"> <br>'.
'<span class="formname">Всплывающая подпись при нажатии на "еще": </span><input name="more" type="text" value="'   .$row["more"]. '"> <br>'.
'<span class="formname">Текст статьи: </span><br><textarea name="content" id="data_content" rows="20" cols="100"> '   .$row["content"]. '</textarea> <br>'.
'<input name="ID" type="hidden" value="'   .$id. '"> <br>'.
'<input type="submit" value="Сохранить все изменения"> </form>';

$html =" <head>$includes</head> <body>$body </body>  ";
echo $html;

mysql_close($link);
?>

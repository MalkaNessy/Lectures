<?php
require_once("connection.php");
$link = dbconnect();

$page = "intro";
function ispagename($str)
{
  return preg_match("/^[0-9A-Za-z_]+$/",$str);
}

if( isset($_GET['page']))
{
$page1 = $_GET['page'];
	if (ispagename($page1)){
		$page = $page1;
	}
}
$current_res = mysql_query("SELECT * FROM lectures WHERE title_url = '$page' ");
$current_row = mysql_fetch_array($current_res);
if (!($current_row)) {
	die('Page not found ' );
}


$menu = '';
$result = mysql_query("SELECT * FROM lectures");
while ($row = mysql_fetch_array($result))
	{
		$class ='';
		if ($current_row['ID'] == $row['ID'] ){
			$class = 'class="selected"';
		}
		$menu =  $menu. '<li class="button ">'.'<a href="'.'index.php?page='.$row['title_url'].'" '.'id="menu'.$row['ID'].'" '.$class.' >'.$row['button_name'].'</a>
					<span id="submenu'.$row['ID'].'">
					    <span class="rem">'.$row['short'].'&nbsp   <span class="more">   еще...</span>
						<p class="spoiler">'.$row['more'].'</p>
						</span>
					</span>
				</li>';
	};
	
	
$menu='<ul id="nav">'.$menu.'</ul>';

	

$content = $current_row['content'];

$includes = '<link href="css/main.css" rel="stylesheet">'.
'<script src="jquery-3.1.1.js"></script>'.
'<script src="js/app.js"></script>';




$body = '<header>
	<div id="site-description">
		<p>Марк Найдорф.  <span style="font-style: italic;"> Восемь лекций по культурологии</span></p>
	</div>'.$menu.
	'
<div id="subnav" class="selected" >	
	</div>
</header>

  <div id="wrapper" >
  <div id="content" >'.
  
  $content.
'</div>
   </div>
';

$html = '<!DOCTYPE html>
<html>
	<head> 
	  <meta charset="utf-8">
	  <title>Lectures | Mark Naidorf</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
$includes.'</head><body>'.$body.'</body></html>';


echo $html;
mysql_close($link);
?>
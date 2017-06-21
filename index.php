<?php
require_once("connection.php"); //will check if the file "connection.php" has already been included
$link = dbconnect();// connect to Data Base


$page = "intro"; // to use with URL
function ispagename($str) // check sympols in URL 
{
  return preg_match("/^[0-9A-Za-z_]+$/",$str);
}

if( isset($_GET['page'])) // check the 'page'=part of URL and rewrite the variable 
{
$page1 = $_GET['page'];
	if (ispagename($page1)){
		$page = $page1;
	}
}
$current_res = mysql_query("SELECT * FROM lectures WHERE title_url = '$page' "); //select from DataBase according to the 'page' field. 
$current_row = mysql_fetch_array($current_res);//taking one row from table, where title_url == 'page' (remember, this is current URL)
if (!($current_row)) {
	die('Page not found ' );
}


$menu = '';
$result = mysql_query("SELECT * FROM lectures");
while ($row = mysql_fetch_array($result)) //loop every row in the table and insert data from fields to their places
	{
		$class ='';
		if ($current_row['ID'] == $row['ID'] ){
			$class = 'class="selected"';
		}
		//create menu
		$menu =  $menu. '<li class="button ">'.'<a href="'.'index.php?page='.$row['title_url'].'" '.'id="menu'.$row['ID'].'" '.$class.' >'.$row['button_name'].'</a>
					<span id="submenu'.$row['ID'].'">
					    <span class="rem">'.$row['short'].'&nbsp   <span class="more">   еще...</span>
						<p class="spoiler">'.$row['more'].'</p>
						</span>
					</span>
				</li>';
	};
	
//generate menu on page	
$menu='<ul id="nav">'.$menu.'</ul>';

	
//generate content (texts) on page
$content ='<h6>'.$current_row['title'].'</h6>'. $current_row['content'].
'<footer style="font-size: 13.3333px;"><p>© Mark Naidorf</p></footer>';

//generate part of header: included files
$includes = '<link href="css/main.css" rel="stylesheet">'.
'<script src="jquery-3.1.1.js"></script>'.
'<script src="js/app.js"></script>';



//generate "body" of page
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

//generate all page
$html = '<!DOCTYPE html>
<html>
	<head> 
	  <meta charset="utf-8">
	  <title>Lectures | Mark Naidorf</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
$includes.'</head><body>'.$body.'</body></html>';

//display page
echo $html;
mysql_close($link); //close sgl-connection 
?>
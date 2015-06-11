<!DOCTYPE html>
<html >
<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='css/style.css'>
<script type="text/javascript" src='script/jquery.js'></script>
<script type="text/javascript" src='script/bootstrap.min.js'></script>
<script type="text/javascript" src='script/script.js'></script>

</head>
<body >

 <div class='container'>

      <!-- Static navbar -->
      <div class='navbar navbar-default' role='navigation'>
        <div class='container-fluid'>
          <div class='navbar-header'>
            
            <a class='navbar-brand' href='#'>Todo list</a>
          </div>
          <div class='navbar-collapse collapse'>
            
          </div>
        </div>
      </div>

     
      <div class='jumbotron'>
        <h1>Список дел</h1>
		
		<input type="button" onclick="add_to_do();" value="Добавить задание"><input type="text" id="task" name="todo">
        <table id="todo" class="table"> 
		<?php    
require_once __DIR__.'/vendor/autoload.php';

//require_once __DIR__."bin/phing.php";

$app = new Silex\Application();


$app->get("/", function (){
       	require_once "todo.php";
	   return "";
});
$app->run();

?>
		</table>
        
      </div>

    </div> <!-- /container -->




</body>
</html>

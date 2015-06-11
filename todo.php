<?php

class todolist{
	

	function read_task(){
		
		$xml = simplexml_load_file("task.xml");
		return $xml;
	}	
}

$object=new todolist;
   
  $task=$object->read_task();
  foreach($task as $value){
	  echo "<tr><td><p align='center'>".$value."</p></td></tr>";
	  
  }

?>
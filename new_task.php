<?php

class todolist{
	
	function XMLConstruct(){
		$name=$_GET['name'];
		if($name!=''){
				$dom = new DomDocument('1.0','utf-8'); 
                        $project=$dom->appendChild($dom->createElement('data'));
						$xml = simplexml_load_file("task.xml");
						$all_task=$xml->task;
						foreach($all_task as $key){
                     $all=$project->appendChild($dom->createElement('task'));
                      
                    $all->appendChild($dom->createTextNode("$key"));
						}					
					 $all=$project->appendChild($dom->createElement('task'));
					$all->appendChild($dom->createTextNode("$name")); 
                          $dom->formatOutput = true; 
                          $test1 = $dom->saveXML();  
		$dom->save('task.xml'); }		
		
	}
	function read_task(){
		
		$xml = simplexml_load_file("task.xml");
		return $xml;
	}
	
}
    $object=new todolist;
   $object->XMLConstruct();
  $task=$object->read_task();

foreach($task as $value){
	  echo "<tr><td><p align='center'>".$value."</p></td></tr>";
	  
  }
?>
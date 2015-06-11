
   function write(){
       var http = new XMLHttpRequest();
       http.onreadystatechange=function(){
           if(http.readyState===4 && http.status===200){
               document.getElementById("todo").innerHTML+=http.responseText;
           }
           
       };
       http.open("GET","http://localhost/todo.php",true);
       
       http.send('');
       
   }
   function add_to_do(){
	 
	   name=document.getElementById("task").value;
       var http = new XMLHttpRequest();
       http.onreadystatechange=function(){
           if(http.readyState===4 && http.status===200){
               document.getElementById("todo").innerHTML=http.responseText;
           }
           
       };
       http.open("GET","http://localhost/new_task.php/?name="+name,true);
       
       http.send('');
	   window.alert(name);
       
   }
   
   
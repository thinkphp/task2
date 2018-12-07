<?php
  require_once("config.php");
  require_once("add.php");
  require_once("del.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>My To Do App based on PHP/MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway');

body{
	padding: 0;
	margin: 0;

}
form{
    max-width: 30em;
    margin: 4em auto;
    position: relative;
    background: #f4f4f4;
    padding: 2em 3em;
    overflow: hidden;
}

form h1{
    font-family: "Raleway"; 
    color:#F97300; 
}
form input[type=text]::placeholder{
   font-family: "Raleway";
   color:#666; 
}

form .data{
    margin-top: 1em;
}
form .data li{
 background: #fff;
 border-left: 4px solid #F97300;
 padding: 1em;
 margin: 1em auto;
 color: #666;
 font-family: "Raleway";
}
form .data li a {
    float: right;
    color: #888;
    cursor: pointer;
    text-decoration: none;  
}
form .input-group-text{
    background: #F97300;
    border-radius: 50%;
    width: 5em;
    height: 5em;
    padding: 1em 20px 30px;
    color: #fff;
    position: absolute;
    right: 13px;
    top: 68px;
    cursor: pointer;
}
form .input-group-text i{
    font-size: 4em;
}
form .form-control{
    height: 3em;
    font-family: "Raleway";
}
form .form-control:focus{
	box-shadow: 0;
}


footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: orange;
   color: white;
   text-align: center;
}
footer div{
    margin-left: 2%;
}
footer div a{
    color: #FFF;
}
</style>
</head>
<body>
<div id="container">

     <form method="POST" action="app.php">
            <div class="form-group">
                 <h1 class="text-center">To Do App</h1>
  
                 <div class="input-group-prepend">                 
                   <input type="text" class="form-control" name="task"/>
                   <span class="input-group-text"><i id="addBtn" class="material-icons">+</i></span>
                 </div>
            </div>

            <div class="data">

                 <ul class="list-unstyled">

                     <?php

                         //execute Query
                         $results = mysqli_query($db, "SELECT * FROM tasks ORDER BY id DESC"); 

                          while($row = mysqli_fetch_array($results)) {       

                                echo"<li>".$row['task']."<a href=app.php?iddel=".$row['id']." class='material-icons'><i>delete</i></a></li>"; 
                          } 
                     ?>
                 </ul>
             
            </div>
     </form>
</div>
      <footer><div>Created by <a href="http://adrianstatescu.com">Adrian Statescu</a></div></footer>
<script>

document.getElementById("addBtn").addEventListener("click", function() {

        var form = document.getElementsByTagName("form")[0]

            form.submit()
})

</script>
</body>
</html>

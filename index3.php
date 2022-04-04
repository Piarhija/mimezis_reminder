<?php
   $file = file_get_contents("task3.json");
   $json_a = json_decode($file, true);
   $closed=0;
   $havetasks = 0;
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>mimezis_todo</title>
      <meta name=”robots” content=”noindex”>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="" />
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
                           
      <link rel="stylesheet" type="text/css" href="style.css" media="all" />
   </head>
   <body>
      <div class="wrapper ">
         <div class="mimezisi">
            <div class="row" >
               <div id="sad" style="position:absolute"><img src="3sad.gif"></div>
               <div id="happy" style="position:absolute" ><img src="3hepi.gif"></div>
            </div>
            <div class="mimezisiclick">
               <a href="index.php" style="positon:absolute"><img src="mimezishappy.jpg"> </a>
               <a href="index2.php"><img src="mimezishappy.jpg"> </a>
               <a href="index3.php"><img src="mimezishappy.jpg"> </a>
               <a href="index4.php"><img src="mimezishappy.jpg"> </a>
            </div>
         </div>
         <br>
         <div>
            <?php
               echo "<form style='margin-left:5px; height= 100px;' name=\"edit\" action=\"action3.php\" method=\"GET\">";
                     
               echo "<input style='width:89.1%;    border-width: 1px;
                  border-style: solid;
                  border-color: pink;
                  height: 30px;
                  padding-left:5px;' name=\"content\" type=\"text\" placeholder=\"\" ></input>";
               echo "<input type=\"hidden\" name=\"action\" value=\"add\"></input>";
               
               echo "<input style='float: right; background-color: pink;
                border-width:1px;
                border-style: solid;
                border-color: pink;
                padding: 5.8px 11px;
                text-decoration: none;
                 position: absolute;
                 margin-left: 5px;
                
                cursor: pointer;' type=\"submit\" name=\"submit\" value=\"+\"></input>";
               echo "</form>";
                         
               echo "<div style='margin-left: 5px; list-style-type: none;'>";
               echo "<ul style=' list-style-type: none;'>";
               if(is_array($json_a)) {		
               	foreach ($json_a as $item => $task) {
               		if ($task['status'] == "open") {	
               			$havetasks=1;
               			echo "<li style='margin-top:5px;margin-bottom: 5px; background-color: white; padding-top: 5px; padding-bottom: 7px; border-width:1px;border-style: solid; border-color:pink; padding-left:5px; width: 89.1%;'>";
               			echo $task['task'];
               			
               			echo " <a style='float: right; width:32px; height:30.5px; background-color:pink;margin-top:-6px; 
                              margin-right: -1px;border-width:1px;border-style: solid; border-color:pink; margin-right:-38px; ' href=\"action3.php?id=" .$item. "&action=delete\"></a>  ";
               			echo "</li>";}	}
               	if($havetasks > 0) {          
               echo '<script type="text/JavaScript"> 
                   document.getElementById("happy").style.display = "none";
                   </script>';}
               } else { 
               	echo"drugi if";	
               }
               echo "</ul>";
               echo "</div>";
                ?>
         </div>
      </div>
   </body>
</html>


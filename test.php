<?php

include "includes/header.php"


?>
<!DOCTYPE html>
<html>
<head>
	<title>bibliotheque</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="stylesheet/biblio.css">
</head>
<body >
 
  <p class="mbv">
     Bienvenue sur le site ILIBR@RIE <br>
     
     
  </p>
       <div class="slideshow">
         <ul>
            <li><img src="images/imagem1.jpg" alt="" width="500" height="300" /></li>
            <li><img src="images/imagem2.jpg" alt="" width="500" height="300" /></li>
            <li><img src="images/imagem3.jpg" alt="" width="500" height="300" /></li>
            <li><img src="images/imagem4.jpg" alt="" width="500" height="300" /></li>
             <li><img src="images/bgtittre.jpg" alt="" width="500" height="300" /></li>
         </ul>
		</div>



 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
 
<script type="text/javascript">
   $(function(){
      setInterval(function(){
         $(".slideshow ul").animate({marginLeft:-350},800,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });
</script>

</body>
</html>
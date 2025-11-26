<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About </title>
</head>
<body>
   <header>
      <div class="logo"> HayLine.am </div>
      <nav>
        <ul class="menu">
         <li> <a href="project1.html" class="" > Գլխավոր </a></li>
        <li> <a href="aboutt.html" class="active"> Մեր մասին </a></li>
        <li> <a href="contactt.html" class=""> Կոնտակտ  </a> </li>
        </ul>
      </nav>
   </header>
   <main class="about-section">
      <div class="about-text">
        <h2> Մեր մասին</h2>
        <p> 
        </p>
      </div>
   </main>
<footer>
 <ul>
    <li> Armenia,Tavush,Ijevan Valence 16 </li>
    <li> <a href="blog@blog.blog"> blog@blog.blog</a> </li>
    <li> <a href="tel: +37498992919 ">+37498992919  </a></li>
 </ul>
</footer>
<?php
$myfile=fopen("newfile.txt","w") or die("Unable to open file");
$txt= "Mickey Mouse\n";
fwrite($myfile,$txt);
$txt= "Minnie Mouse\n";
fwrite($myfile,$txt);
fclose($myfile);
?>
</body>
</html>
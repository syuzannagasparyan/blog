<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
      <!-- <nav>
        <ul class="menu">
         <li> <a href="project1.html" class="" > Գլխավոր </a></li>
        <li> <a href="aboutt.html" class=""> Մեր մասին </a></li>
        <li> <a href="contactt.html" class="active"> Կոնտակտ  </a> </li>
        </ul>
      </nav> -->
   </header>
   <main class="contact-section">
      <form>
        <h2>Կապ մեզ հետ</h2>
        <div class="input-group">
         <label> Անուն Ազգանուն </label>
         <input type="text" placeholder="Անուն Ազգանուն" required>
      </div>
      <div class="input-group">
         <label> Հեռախոսահամար </label>
         <input type="tel" placeholder="Հեռախոսահամար " required>
      </div>
      <div class="input-group">
         <label> էլ․ հասցե </label>
         <input type="email" placeholder="էլ․ հասցե" required>
      </div>
      <div class="input-group">
         <label> Տարիք </label>
         <input type="number" placeholder="Տարիք " min="0" max="120">
      </div>
        <div class="input-group gender-group">
         <label> Սեռ </label>
         <div class="gender-options">
         <label> <input type="radio" name="gender" value="male" >Տղամարդ </label>
         <label> <input type="radio" name="gender" value="female" > Կին</label>
      </div>
        </div>
        <div class="input-group">
         <label>Նամակ․․ </label>
        <textarea placeholder="Նամակ․․" rows="5"> </textarea>
      </div>
      <button type="submit">Ուղարկել </button>
      </form>
   </main>
<footer>
 <ul>
    <li> Armenia,Tavush,Ijevan Valence 16 </li>
    <li> <a href="mailto:blog@blog.blog"> blog@blog.blog</a> </li>
    <li> <a href="tel: +37498992919 ">+37498992919  </a></li>
 </ul>
</footer>
<style>
.input-group {
    margin-bottom: 15px;
}
textarea {
    width: 50%;
    margin-top: 5px;
}
.gender-options label {
    margin-right: 10px;
}
</style>

    <?php
function f1(array $arr):int | float {
    foreach ($arr as $item) {
        if (is_numeric($item)) {
            return $item; 
        }
    }
    return null;
}
echo f1(["s",6,8,9])."<br>";
function f2(string $n,$m):bool {
    if(strlen($n)=== 0 ){
         return false;
    }
    $lastChar = substr($n, -1);
    return strpos($m, $lastChar) !== false;
}
echo f2("barev", "anvanum")."<br>";
function f3(string $x,$y) {
    return substr_count($x,$y);
}
echo f3("banana","a")."<br>";
function f4(array $arr) {
    $result = [];
    foreach ($arr as $value) {
        if (!is_numeric($value)) { 
            $result[] = $value;
        }
    }
    return $result;
}
$input = [1, "hello", 3.5, "world", "42", true, "PHP"];
$output =f4($input);
print_r($output);
?>
</body>
</html>
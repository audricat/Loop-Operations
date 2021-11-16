<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STAR OF DAVID</title>
		<link rel="stylesheet" href="style.css">
  </head>
 <body>
   <pre>
     <div class="login-box">
         <h2 class = "neon">Midterm</h2>
           <div class="user-box">
    <form align = center action="index.php" method="POST">
<label>
Enter First Number:</label><br><br>
<input type="text" name="fnumber" id="fnumber" value="<?php if(!empty($_POST['fnumber'])){echo $_POST['fnumber'];} ?>" required/>
</div>
     <div class="user-box">
<label>
Enter Second Number:</label><br><br><input type="text" name="snumber" id="snumber" value="<?php if(!empty($_POST['snumber'])){echo $_POST['snumber'];} ?>" required/><br>
</div>
<br><a><input class="btn-1" name="form" type="submit" value="SUBMIT"/></a>
<?php
function Product($fno, $sno)
{
  $product = 0;
  for ($counter=0;$counter<$fno;$counter++)
  {
  $product+=$sno;
  }
  return $product;
};

function Quotient($fno, $sno)
{
  $quotient = 0;
  $div = $fno + $sno;
  while($div>$sno)
  {
    $div -= $sno;
    $quotient += 1;
  }
  return $quotient;
};
function Remainder($fno, $sno)
{
 $i = 1;
 $p = 0;
 while ($p <= $fno)
 {
     $p = $sno * $i;
     $i++;
 }
 return $fno - ($p - $sno);
};
if(!empty($_POST['snumber'])){
if (isset($_POST["form"])){
echo "<div class='result'>";
$fno = $_POST['fnumber'];
$sno = $_POST['snumber'];
echo "<p>Product without using the multiplication (*) operator: <span>" . (Product($fno, $sno)) . "</span></p><br>";
echo "<p>Integer quotient without using the division (\) operator: <span>" . (Quotient($fno, $sno)) . "</span></p><br>";
echo "<p>Integer remainder without using the modulo (%) operator: <span>" . (Remainder($fno, $sno)) . "</span></p><br>";
}
}
echo "</div>";
?>
</form>
</pre>
</div>

</body>
  </html>
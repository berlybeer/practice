<?php
if($_POST['bgcolor']) {
echo "here";

 setcookie('bgcolor', $_POST['bgcolor'], time() + (60 * 60 * 24 * 7));
}

print_r($_COOKIE);

if (isset($_COOKIE['bgcolor'])) {
 $backgroundName = $_COOKIE['bgcolor'];
}
else if (isset($_POST['bgcolor'])) {
  $backgroundName = $_POST['bgcolor'];
 }
else {
 $backgroundName = "gray";
} 
?>
<html>
<head><title>Save It</title></head>
<body bgcolor="<?php echo $backgroundName; ?>">
<p><?php echo "Se establecio el color " . $backgroundName; ?></p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<pre><?php print_r($_SERVER['PHP_SELF'])?></pre>

 <p>Background color:
 <select name="bgcolor">
 <option value="gray">Gray</option>
 <option value="white">White</option>
 <option value="black">Black</option>
 <option value="blue">Blue</option>
 <option value="green">Green</option>
 <option value="red">Red</option>
 </select></p>

 <input type="submit" />
</form>

</body>
</html>
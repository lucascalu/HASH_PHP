<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = md5($name);
                                          fwrite($myfile, $txt);
                                          fclose($myfile);}
?>

</body>
</html>

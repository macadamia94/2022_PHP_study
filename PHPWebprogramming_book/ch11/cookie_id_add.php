<?PHP 
  setcookie("user", "", time()+3600, "/", "localhost");
?>

<form method='post' action='cookie_id_check.php'>
  <input type='text' name='name' size='4'>
  <input type='submit' value='입력'>
</form>

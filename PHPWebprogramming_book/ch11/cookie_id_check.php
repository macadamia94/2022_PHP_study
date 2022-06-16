<?PHP 
  if($name)
    $_COOKIE['user'] = $name;   
    print "Hello ".$_COOKIE['user']."!";
?>

<form method='post' action='cookie_id_check.php?code=del'>
  <input type='submit' value='삭제'>
</form>

<?PHP 
  if($code == del)
    unset($_COOKIE['user']);
?>

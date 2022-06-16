<?PHP 
  $_SESSION['var1'] = "variable1";;
  $_SESSION['var2'] = "variable2";;
  
  unset( '$_SESSION['var2']' );
?>
<a href="./viewvar.php">Next Page</a>

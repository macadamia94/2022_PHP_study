<?PHP 
  include( "./complex.inc" );

  $complex = new Complex( 2, 3 ); 
  $_SESSION['complex1'] = serialize($complex);
?>
<a href="./view_class_session.php">Next Page</a>

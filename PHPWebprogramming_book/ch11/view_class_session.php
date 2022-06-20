<?PHP 
  include( "./complex.inc" );

  $complex = unserialize($_SESSION['complex1']);
  echo $complex->printComplex();
?>

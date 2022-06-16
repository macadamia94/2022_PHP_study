<?PHP
  include( "./functions.inc" );
  
  $con = mysql_connect( "localhost", "php", "php" );
  mysql_select_db( "PHP", $con );

  $query = "update board set refnum=refnum+1 where uid=$uid";
  mysql_query( $query ) or die ( mysql_error() );
  mysql_close( $con );
  
  forward( dest_url( "./read.php", $page, $uid ) );
?>

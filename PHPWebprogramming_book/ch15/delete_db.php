<?PHP
  include( "config.cfg" );
  include( "functions.inc" );
  
  #------------------ 데이터베이스 연결 ----------------------#
  $con = mysql_connect( "localhost", "php", "php" );
  mysql_select_db( "PHP", $con );

  #--------------- 암호가 올바른지 확인  ---------------------#
  $query = "select passwd from board where uid=$uid";
  $result = mysql_query( $query, $con ) or die( mysql_error() );
  list( $origin_passwd, $gid, $depth ) = mysql_fetch_array( $result );
  $passwd = substr( md5( trim( $passwd ) ), 0, 10 );

  if( $passwd != $origin_passwd )
  {
    error( "암호가 올바르지 않습니다." );
    exit;
  }

  #-------------------board 테이블에 글 삭제 ---------------#
  $query = "delete from board where gid=$gid and depth like '$depth%'";
  mysql_query( $query ) or die ( mysql_error() );
  mysql_close( $con );

  forward( dest_url( "./list.php", $page ) );

?>

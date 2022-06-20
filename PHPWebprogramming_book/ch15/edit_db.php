<?PHP
  include( "config.cfg" );
  include( "functions.inc" );
  
  #------------------- 앞뒤 스페이스 제거 --------------------#
  $email = trim( $email );
  $homepage = trim( $homepage );
  $subject = trim( $subject );
  $article = trim( $article );

  #------------------- 입력값 이상유무 확인 ------------------#
  if( !$subject || !$passwd || !$article )
  {
    error( "입력값이 부족합니다." );
    exit;
  }

  #--------------- 간단한 이메일 주소의 이상유무 확인 ----------#
  if( $email && !is_email_valid( $email ) )
  {
    error( "이메일 주소를 잘못 입력하셨습니다." );
    exit;
  }

  #------------ 간단한 홈페이지 주소의 이상유무 확인 ------------#
  if( $homepage && !is_url_valid( $homepage ) ) 
  {
    error( "홈페이지 주소를 잘못 입력하셨습니다." );
    exit;
  }

  #------------------ 데이터베이스 연결 ----------------------#
  $con = mysql_connect( "localhost", "php", "php" );
  mysql_select_db( "PHP", $con );

  #--------------- 암호가 올바른지 확인  ---------------------#
  $query = "select passwd from board where uid=$uid";
  $result = mysql_query( $query, $con ) or die ( mysql_error() );
  $origin_passwd = current( mysql_fetch_array( $result ) );
  $passwd = substr( md5( trim( $passwd ) ), 0, 10 );

  if( $passwd != $origin_passwd )
  {
    error( "암호가 올바르지 않습니다." );
    exit;
  }

  #--------------------board 테이블에 글 삽입 ----------------#
  $query = "update board 
    set email='$email', homepage='$homepage', subject='$subject', 
    article='$article' where uid=$uid";
  mysql_query( $query ) or die ( mysql_error() );
  mysql_close( $con );

  forward( dest_url( "./list.php", $page ) );

?>

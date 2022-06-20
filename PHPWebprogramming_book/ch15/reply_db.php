<?PHP
  include( "config.cfg" );
  include( "functions.inc" );
  
  #------------------- 앞뒤 스페이스 제거 --------------------#
  $name = trim( $name );
  $email = trim( $email );
  $homepage = trim( $homepage );
  $subject = trim( $subject );
  $writedate = date( "y-m-d" ); 
  $article = trim( $article );

  #------------------- 입력값 이상유무 확인 ------------------#
  if( !$name || !$subject || !$passwd || !$article )
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

  #----------------------암호 encrypt--------------------------#
  $passwd = substr( md5( trim( $passwd ) ), 0, 10 );

  #------------------ 데이터베이스 연결 ----------------------#
  $con = mysql_connect( "localhost", "php", "php" );
  mysql_select_db( "PHP", $con );

  #---------------------gid, depth 결정------------------------#
  $gid = trim( $gid );
  $depth = trim( $depth );
  $query = "select max( depth ) depth from 
    board where depth like '$depth%' and gid=$gid";
  $result = mysql_query( $query ) or die( mysql_error() ); 
  $row = mysql_fetch_array( $result );

  if( $row[depth] != $depth )
    $depth = $depth.chr( ord( substr( $row[depth], -1 ) ) + 1 ) ;  
  else
    $depth = $depth."A";

  #--------------------board 테이블에 글 삽입 ----------------#
  $query = "insert into board 
    ( gid, depth, name, email, homepage, passwd, subject, article, writedate ) 
    values ( $gid, '$depth', '$name', '$email', '$homepage', 
    '$passwd', '$subject', '$article', '$writedate' )";

  mysql_query( $query ) or die ( mysql_error() );
  mysql_close( $con );

  forward( dest_url( "./list.php", $page ) );

?>

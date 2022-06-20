
<?PHP 
  include( "config.cfg" );
  include( "functions.inc" );

  // 앞뒤 스페이스 제거
  $name = trim( $name );
  $email = trim( $email );
  $homepage = trim( $homepage );
  $subject = trim( $subject );
  $writedate = date( "y-m-d" );
  $article = trim( $article );

  // 입력값 이상유무 확인
  if( !$name || !$subject || !$passwd || !$article )
  {
    error( "입력값이 부족합니다." );
    exit;
  }

  // 간단한 이메일 이상유무 확인
  if( $email && !is_email_valid( $email ) )
  {
    error( "이메일을 잘못 입력하셨습니다." );
    exit;
  }

  // 간단한 홈페이지 이상유무 확인
  if( $homepage && !is_url_valid( $homepage ) )
  {
    error( "홈페이지를 잘못 입력하셨습니다." );
    exit;
  }

  // 암호 encrpt
  $passwd = substr( md5( trim( $passwd ) ), 0, 10 );

  // 데이타베이스 연결
  $con = mysql_connect( "localhost", "user", "password" );
  mysql_select_db( "PHP", $con );

  // uid, gid, depth 결정
  $query = "select MAX( gid ) as gid from board";
  $result = mysql_query( $query, $con );
  $gid = current(mysql_fetch_array( $result ));
  $gid = $gid + 1;

  // 테이블에 글 삽입
  $query = "insert into board
    ( gid, name, email, homepage, passwd, subject, article, writedate )
     values ( $gid, '$name', '$email', '$homepage', '$passwd', '$subject',
     '$article', '$writedate' )";

  mysql_query( $query, $con );
  mysql_close( $con );

  forward( "./list.php" );
?>

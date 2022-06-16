<?PHP
  include( "./config.cfg" );
  include( "./functions.inc" );

  if( !$page )
    $page = 1;

  // 검색시 쿼리문에 추가할 문자 
  if( $key )
    $where = " where $kind like '%$key%'"; 

  // 데이터베이스에 연결
  $con = mysql_connect( "localhost", "root", "apmsetup" );
  mysql_select_db( "PHP", $con );

  // 총 글의 수 검색
  $query = "select count(*) total_rows from board $where";
  $result = mysql_query( $query );
  $total_rows = current( mysql_fetch_array( $result ) );

  // 리스트에서 서용되는 변수 정의
  $total_pages = ceil( $total_rows / $rows_page );
  $start_row = $rows_page * ( $page - 1 );
  $pre_page = $page > 1 ? $page - 1 : NULL;
  $next_page = $page < $total_pages ? $page + 1 : NULL;
  $start_page = (ceil( $page / $direct_pages ) -1) * $direct_pages + 1;
  $end_page = $total_pages >= $start_page + $direct_pages ?
                $start_page + $direct_pages - 1 : $total_pages;
?>

<html>
<head>
<style>
<?PHP include( "./common_style.inc" ); ?>
TD
{  
  padding : 3px;
}

.field_tr
{
  background : #93BCEA;
}

.list_tr
{
  background : #EAF4FD;
}
</style>
<title>게시판 </title>
</head>
<body>
<center>
<table>
  <tr>
    <td colspan="5">총게시물:<?=$total_rows?></td>
  </tr>
</table>
<table nowrap>
  <tr class="field_tr" align="center">
    <td width="50">번호</td>
    <td width="360">제목</td>
    <td width="90">글쓴이</td>
    <td width="60">작성일</td>
    <td width="40">조회</td>
  </tr>

<?PHP
  // 데이타베이스에서 목록을 추출
  $query = "select uid, gid, depth, name, subject, writedate, refnum from  
board $where order by gid desc, depth asc limit $start_row, $rows_page";

  $result = mysql_query( $query, $con );

  while( $row = mysql_fetch_array( $result ) )
  {
    list($uid, $gid, $depth, $name, $subject, $writedate, $refnum, $mail) 
        = $row;

    // html 특수 문자 처리
    $subject = htmlspecialchars( $subject );

    // 제목의 길이 제한
    if( strlen( $subject ) > $row_length )
      $subject = substr( $subject,  0, $row_length )."...";
?>

  <tr class="list_tr">
    td width="50" align="center"><?=$uid?></td>
    <td width="360"><?=str_repeat( "&nbsp;&nbsp;", strlen( $depth ) )?>
      <a href="<?=dest_url( "./count_ref.php", $page, $uid )?>">
      <?=$subject?></a>
    </td>
    <td width="90" align="center">

<?PHP
  if( $mail ) 
    echo( "<a href=\"mailto:$mail\">$name</a>" ); 
  else
    echo( "$name" )
?>

    </td>
    <td width="60" align="center"><?=$writedate?></td>
    <td width="40" align="center"><?=$refnum?></td>
  </tr>

<?PHP
  }
?>

</table>
<table>
  <tr>
    <td width="100" align="left">

<?PHP
  // 이전페이지 존재시 링크
  if( $pre_page )
    echo( "<a href=\"".dest_url( "./list.php", $pre_page )."\">[이전]</a>" );

  // 다음페이지 존재시 링크
  if( $next_page )
    echo( "<a href=\"".dest_url( "./list.php", $next_page )."\">[다음]</a>" );
?>

    </td>
    <td align="center">&nbsp;

<?PHP
  // 이전 페이지들을 링크
  if( $start_page > 1 )
  echo("<a href=\"".dest_url( "./list.php", $start_page - 1)."\">[pre]</a>" );

  // 바로 이동하는 페이지를 나열
  for($dest_page=$start_page; $dest_page<=$end_page; $dest_page++)
    if( $dest_page != $page )
      echo( "<a href=\"".dest_url( "./list.php", $dest_page )."\">     
           [$dest_page]</a>" ); 
    else
      echo( "&nbsp;$dest_page&nbsp" );

  // 다음 페이지들을 링크
  if( $end_page < $total_pages )
    echo( "<a href=\"".dest_url( "./list.php", $end_page + 1 )."\">
         [next]</a>" );
?>

    </td>
    <td width="100" align="right">
      <a href="<?=dest_url( "./write.php", $page )?>">글쓰기</a>
      <a href="./list.php">목록</a>
    </td>
  </tr>
</table>
<table>
<form name="search_form" method="post" action="./list.php">
  <tr align="center">
    <td>
      <select name="kind">
        <option value="subject"<? if( $kind == "subject" ) 
         echo( " selected" );?>>제목</option>
        <option value="article"<? if( $kind == "article" )
         echo( " selected" );?>>내용</option>
        <option value="name"<? if( $kind == "name" )
         echo( "selected" );?>>이름</option>
      </select>
      <input type="text" name="key" value="<?=$key?>" size="20">
      <input type="submit" value="검색">
    </td>
  </tr>
</form>
</table>
</center>
</body>
</html>

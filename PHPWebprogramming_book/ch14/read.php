<html>
  <head>
    <style>  
  
      <?PHP include( "./common_style.inc" );?>

      .info_table
      {
        background-color : #CFE1FC;
        border : solid 1pt;
      }
      .articel_table
      {
        background-color : #EFF8FE;
        border : solid 1pt;
      }
    </style>
  </head>

  <body>
    <center>
  
    <?PHP
      include( "./config.cfg" );
      include( "./functions.inc" );

      $con = mysql_connect( "localhost", "php", "php" );
      mysql_select_db( "PHP", $con );

       #-----------데이터베이스에서 글의 정보 검색------------------#
       $query = "select gid, name, email, homepage, subject, article, writedate, 
        refnum from board where uid=$uid";
       
      $result = mysql_query( $query ) or die ( mysql_error() );

      list( $gid, $name, $email, $homepage, $subject, $article, $writedate, 
        $refnum ) = mysql_fetch_array( $result );

      mysql_close( $con );

      #----------------------html 특수 문자 처리------------------#
      $subject = htmlspecialchars( $subject );

      if( !$tag_enable )
        $article = htmlspecialchars( $article );

      $article = nl2br( $article );
    ?>

    <table class="info_table">
      <tr>
        <td width="590" colspan="2"><b><?=$subject?></b></td>
      </tr>
      <tr>
        <td width="510">글쓴이&nbsp;:&nbsp;

      <?PHP
        if( $email )
          echo( "<a href=\"mailto:$email\">$name</a>" );
        else
          echo $name;

        if( $homepage )
          echo("&nbsp;&nbsp;&nbsp;<a href=\"http://$homepage\">
            [homepage]</a>" );
      ?>

        </td>
        <td width="90">조회:<?=$refnum?></td>
      </tr>
    </table>

    <table class="articel_table">
      <tr>
        <td><?=$article?></td>
      </tr>
    </table>

    <table>
      <tr align="right">
        <td><a href="<?=dest_url( "./edit.php", $page, $uid )?>">수정</a>
        <a href="<?=dest_url( "./reply.php", $page, $uid )?>">답변</a>
        <a href="<?=dest_url( "./delete.php", $page, $uid )?>">삭제</a>
        <a href="<?=dest_url( "./list.php" , $page )?>">목록</a></td>
      </tr>
    </table>
    </center>
  </body>
</html>

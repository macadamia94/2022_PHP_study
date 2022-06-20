<html>
  <head>
    <style>  
  
      <?PHP include( "./common_style.inc" );?>

      .ques_head
      {
        background-color : #F9E79D;
        text-align : center;
      }
      .input_td
      {
        background-color : #FEFCE2;
      }
    </style>
  </head>

  <body>
    <center>
      <table>
  
      <?PHP
        include( "./functions.inc" );
      
        $con = mysql_connect( "localhost", "php", "php" );
        mysql_select_db( "PHP", $con );


        #------------- 해당 글의 정보를 추출----------------------#
        $query = "select name, subject from board where uid=$uid";
      
        $result = mysql_query( $query ) or die ( mysql_error() );

        list( $name, $subject ) = mysql_fetch_array( $result );
        mysql_close( $con );
      ?>
        
      <form name="delete_form" method="post" 
        action="./delete_db.php?uid=<?=$uid?>"> 
      
        <tr>
          <td class="ques_head" width="100">글쓴이</td>
          <td class="input_td"><?=$name?></td>
        </tr>
        <tr>
          <td class="ques_head">제목</td>
          <td class="input_td"><?=$subject?></td>
            <input type="text" name="email" size="40" maxsize="50">
          </td>
        </tr>
        <tr>
          <td class="ques_head">암호</td>
          <td class="input_td">
            <input type="password" name="passwd" size="10" maxsize="10">
          </td>
        </tr>
      </table>

      <table> 
        <tr>
          <td width="100">&nbsp;</td>
          <td align="center"><input type="submit" value="삭제"></td>
          <td width="100" align="right">
            <a href="javascript:history.back()">뒤로</a>
            <a href="<?=dest_url( "./list.php", $page )?>">목록</a>
          </td>
        </tr>
      </form> 
      </table>
    </center>
  </body>
</html>

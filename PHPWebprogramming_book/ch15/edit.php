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
        $query = "select name, email, homepage, subject, article 
          from board where uid=$uid";
       
        $result = mysql_query( $query ) or die ( mysql_error() );

        list( $name, $email, $homepage, $subject, $article ) 
          = mysql_fetch_array( $result );

        mysql_close( $con );
      ?>
      
      <form name="edit_form" method="post" 
        action="<?=dest_url( "./edit_db.php", $page, $uid )?>">
      
        <tr>
          <td class="ques_head">글쓴이</td>
          <td class="input_td"><?=$name?><td>
        </tr>
        <tr>
          <td class="ques_head">e-mail</td>
          <td class="input_td">
            <input type="text" name="email" value="<?=$email?>" 
              size="40" maxsize="50">
          </td>
        </tr>
        <tr>
          <td class="ques_head">홈페이지</td>
          <td class="input_td">
            <input type="text" name="homepage" value="<?=$homepage?>" 
               size="40" maxsize="50">
          </td>
        </tr>
        <tr>
          <td class="ques_head">암호</td>
          <td class="input_td">
            <input type="password" name="passwd" size="10" maxsize="10">
          </td>
        </tr>
        <tr>
          <td class="ques_head">제목</td>
          <td class="input_td">
            <input type="text" name="subject" value="<?=$subject?>" 
              size="50" maxsize="255">
          </td>
        </tr>
        <tr>
          <td class="ques_head">내용</td>
          <td class="input_td">
            <textarea name="article" cols="60" rows="20">
              <?=$article?>
            </textarea>
          </td>
        </tr>
      </table> 

      <table>
        <tr>
          <td width="100"><a href="javascript:history.back()">뒤로</a></td>
          <td align="center"><input type="submit" value="수정"></td>
          <td width="100" align="right">
            <a href="<?=dest_url( "./list.php", $page )?>">목록</a>
          </td>
        </tr>
      </form> 
    </table>
    </center>
  </body>
</html>

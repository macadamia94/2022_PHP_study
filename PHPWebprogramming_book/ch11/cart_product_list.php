<html>
<body>
  <p><font size="6">과일 목록</font></p>                 
  <p><a href="cart.php">To 쇼핑카트</a></p>
  <table width="420" border="1" cellpadding="1">
    <tr align="center">
      <td width="200"> 이름 </td>
      <td width="80">  가격 </td>
      <td width="140"> 수량 </td>
    </tr>
<?PHP
  include( "./cart_products.inc" );
  while( list( $name ,$price ) =  each( $fruit ) )
  {
?>
  <form name="insert_form" method="post" 
   action="./cart.php?code=insert&name=<?=$name?>">
    <tr>
      <td width="200"> <?=$name?></td>
      <td width="80" align="right"><?=$price?> 원 </td>
      <td width="140" align="center">
        <select name="amount">
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
        </select>
        <input type="submit" name="submit" value="선택">
      </td>
    </tr>
  </form>
<?PHP
  }
?>
  </table>
</body>
</html>

<?PHP
  include( "./cart_class.inc" );
  include( "./cart_products.inc" );               
  $code = $_GET["code"]; 
  $name = $_GET["name"];
  if( !$_SESSION['cart'] )
  {
    $cart = new Cart;
    $_SESSION['cart'] = serialize($cart);
  } 
  if( $code=="insert" )
  {
    $amount = $_POST["amount"];
    $cart = unserialize($_SESSION['cart']);
    $cart->add( $name, $amount );
    $_SESSION['cart'] = serialize($cart);
  } 
  else if( $code="delete" )
  {
    $cart = unserialize($_SESSION['cart']);
    $cart->delete( $name );
    $_SESSION['cart'] = serialize($cart);
  }
?>
<html>
<body>
  <p><font size="6">쇼핑카트</font></p>
  <p><a href="./cart_product_list.php">쇼핑계속</a></p>     
<?PHP
  $cart = unserialize($_SESSION['cart']);
  if( $cart->get_count() )
  {
?>
  <table width="380" border="1" cellspacing="1" cellpadding="0">   
    <tr align="center">
      <td width="200"> 이름 </td>
      <td width="80"> 수량 </td>
      <td width="100"> 제거 </td>
    </tr>
<?PHP
  $sum = 0;
  $contents = $cart->get_list();
  while( list( $name, $value ) = each( $contents ) )
  {
    $sum += $value*$fruit[$name];
?>
    <tr>
      <td width="200"><?=$name?></td>
      <td width="80"><?=$value?></td>
      <td width="100">
      <input type="button" name="delete" value="삭제"
onClick="javascript:location='cart.php?code=delete&name=<?=$name?>'">
      </td>
    </tr>
<?PHP
  $_SESSION['cart'] = serialize($cart);
  }
?>
    <tr>
    <td colspan="2" height="30"> 총합 </td>
    <td width="65" height="30" valign="middle"><?=$sum?></td>
    </tr>
  </table>
<?PHP
  }
?>
</body>
</html>

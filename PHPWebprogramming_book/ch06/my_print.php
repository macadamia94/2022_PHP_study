<?PHP
  function my_print()
  {
    $args = func_get_args();
    foreach ($args as $arg)
    {
      print "파라미터 : $arg <br>";
    }
  }
  
  my_print("Apple", "Orange", "Pear", "Banana", "Cherry");
?>

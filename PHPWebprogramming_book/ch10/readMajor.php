<?PHP
  $dataset = file("major.txt");
  
  foreach($dataset as $data)
  {
    $str = explode(" ", $data);
    print "Nmae : ".$str[0].", Major : ".$str[1]."<br>";
  }
?>

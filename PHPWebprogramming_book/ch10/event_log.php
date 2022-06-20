<?PHP
  $filep = fopen("./logfile.txt","a");
  
  if (!$filep)  die ("파일을 열수 없습니다.");

  $time = date("Y-m-d H:i:s",time());
  fputs ($filep, $time);

  fclose ($filep);

  print "connect service";
?>

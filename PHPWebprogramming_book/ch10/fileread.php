<?PHP
  $filep = fopen("./juliet.txt","w");
  
  if (!$filep)  die ("파일을 열수 없습니다.");

  while ($line = fgets ($filep, 1024)) 
    print $line."<br>";
  
  fclose ($filep);
?>

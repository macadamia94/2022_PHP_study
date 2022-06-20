<?PHP
  $filep = fopen("./juliet.txt","a");
  
  if (!$filep)  die ("파일을 열수 없습니다.");

  fputs ($filep, "\n ROMEO:
                 I take thee at thy word:
                 Call me but love, and I'll be new baptized;
                 Henceforth I never will be Romeo.");

   fclose ($filep);


  $filep = fopen("./juliet.txt","r");

  while ($line = fgets ($filep, 1024)) 
    print $line."<br>";
  
  fclose ($filep);
?>

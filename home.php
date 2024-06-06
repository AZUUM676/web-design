<?php
 echo"hello world";
 $number1 ="20";
 $number2="30";
 $number3=$number2-$number1;
 echo "the difference of $number1 and $number1 is: $number3";
function greeting(){
  $name="Asma";
 
  echo "Good afternoon"."<br>" ."<u>".$name ."</u>"."<br>"."how are you" ."<br>";
}
greeting();

weekendGreeting(){
  $d=date("D");
  if($d=="Fri")
    echo "have nice weekend!";
  else 
   echo "Please today is $d, have a nice day!";
}

weekendGreeting();
?>
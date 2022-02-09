<?php
$ph=$_POST['phy'];
$ch=$_POST['chem'];
$mt=$_POST['maths'];
$bi=$_POST['bio'];
$co=$_POST['com'];
$per=0;
if(isset($_POST['sub']))
 {
  $per=($ph+$ch+$mt+$bi+$co)/5;
  echo"Percentage by student is $per </br>";
  
  if($per>=90)
  {
   $per=1;
  }
  else if($per>=80)
  {
   $per=2;
  }
  else if($per>=70)
  {
   $per=3;
  }
  else if($per>=60)
  {
   $per=4;
  }
  else if($per>=40)
  {
   $per=5;
  }
  else
  {
   $per=6;
  }
  
  switch($per)
  {
   case 1:
   echo "Grade : A";
   break;

   case 2:
   echo "Grade : B";
   break;

   case 3:
   echo "Grade : C";
   break;
   
   case 4:
   echo "Grade : D";
   break;
   
   case 5:
   echo "Grade : E";
   break;
   
   default:
   echo "Fail";
   }
  
}
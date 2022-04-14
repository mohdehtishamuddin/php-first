<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Marks</title>
</head>
<body>
   <?php
   
   $marks = 60;
   
   if ($marks>=60)
   {
       $grade = "First Division";
   }
   else if($marks>=45)
   {
       $grade = "Second Division";
   }
   else if($marks>=33)
   {
       $grade = "Third Division";
   }
   else
   {
       $grade = "Fail";
   }
   
   echo "Student grade: $grade";
   ?> 
</body>
</html>
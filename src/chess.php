<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    </head>
    <body>
    <h3>Chess Board Using nested for loop</h3>
    <table width = "400px" cellspacing = "0px" cellpadding = "0px" border ="1px">
        <?php
        for($row=1;$row<=8;$row++){
            echo "<tr>";
        
        for($col=1;$col<=8;$col++){
            $total = $row+$col;
        
            if($total%2==0){
        
        echo "<td height = 40px width = 40px bgcolor = #FFFFFF </td>";
            }
        else{
            echo "<td height = 40px width = 40px bgcolor = #000000 </td>";
        }
    }

            echo "<tr>";

        }
        ?>
</body>
</html>
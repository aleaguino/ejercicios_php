<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El mayor de 3</title>
</head>
<body>
    <?php
      $num1= $_GET['num1'];
      $num2= $_GET['num2'];
      $num3= $_GET['num3'];

      if(isset($num1) && isset($num2) && isset($num3)){
 
        if(is_numeric($num1) && is_numeric($num2)&& is_numeric($num3)){
            if($num1 > $num2){
                if($num1> $num3){
                    echo "$num1 es el mayor";
                }else{
                    echo "$num3 es el mayor";
                }
            }else{
                if($num2>$num3){
                    echo "$num2 es el mayor";
                }else{
                    echo "$num3 es el mayor";
                }
            }
        }
      }

    ?>
    <h1>El número mayor</h1>
    <form action="elmayordetres.php" method="get">
        Número 1: <input type="number" name="num1"><br>
        Número 2: <input type="number" name="num2"><br>
        Número 3: <input type="number" name="num3"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
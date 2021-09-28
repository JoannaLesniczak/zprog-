<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
    <h3>prostokąt</h3>
    <form method="POST">
        <input type="text" name="sideA" placeholder="podaj bok a"><br><br>
        <input type="text" name="sideB" placeholder="podaj bok b"><br><br>
        <input type="submit" value="Oblicz">
    </form>
    <?php
      if (!empty($_POST['sideA']) && !empty($_POST['sideB'] )) { 
          $area=$_POST['sideA'] * $_POST['sideB'];
          $circuit=2*$_POST['sideA'] + 2*$_POST['sideB'];
          echo <<< result
            <hr>
            pole kwadratu wynosi: $area cm<sup>2</sup><br>
            obwód kwadratu wynosi: $circuit cm 
result;
      }
      else{
          echo "wypełnij długość boku";
      }


    ?>
</body>
</html>
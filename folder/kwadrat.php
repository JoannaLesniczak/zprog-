<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>
    <h3>kwadrat</h3>
    <form method="POST">
        <input type="text" name="sideA" placeholder="podaj bok a"><br><br>
        <input type="submit" value="Oblicz">
    </form>
    <?php
      if (!empty($_POST['sideA']))
      { 
          $area=pow($_POST['sideA'], 2);
          $circuit=4*$_POST['sideA'];
          echo <<< result
            <hr>
            pole kwadratu wynosi: $area cm<sup>2</sup><br>
            obwód kwadratu wynosi: $circuit cm 
result;
      }
      else{
          echo "wypełnij długość boku";
      };


    ?>
</body>
</html>
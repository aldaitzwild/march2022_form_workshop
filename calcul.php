<?php
    $data = array_map('trim', $_POST);

    if (!isset($data['temperature']) || empty($data['temperature'])) {
        echo 'Veuillez saisir une valeur à convertir';
        die();
    }

    $temperature = $data['temperature'];
    $unit = $data['unitType'];
    $temperatureCelcius = 0;

    if($unit == 'Kelvin')
    {
        if($temperature < 0) {
            echo 'Veuillez saisir une température Kelvin supérieur à zéro';
            die();
        }

        $temperatureCelcius = $temperature - 273.15;
    } else {
        $temperatureCelcius = ($temperature - 32) * 5 / 9;
        $temperatureCelcius = round($temperatureCelcius, 2);
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Converteur de température</h1>
    <main class="container bg-light rounded mt-5 p-3">
        <h2 class="text-center"><?= $temperatureCelcius ?>°C</h2>
    </main>
</body>
</html>
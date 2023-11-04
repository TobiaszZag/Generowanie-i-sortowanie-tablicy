<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice sortowanie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <center>
<form method = "Post">
<div class="mb-1">
    <label  class="form-label"><h2>Podaj najniższą liczbe w przedziale:</h2></label>
    <input type="textarea" class="form-control" name="Pole_0" >
</div>

<form method = "Post">
<div class="mb-1">
    <br>
    <label  class="form-label"><h2>Podaj najwyższą liczbe w przedziale:</h2></label>
    <input type="textarea" class="form-control" name="Pole_1" >
</br>
</div>

<form method = "Post">
    <button type="submit" class="btn btn-primary" name="Send">Wyślij</button>

    <div class="container">
    <div class="table-responsive">
        <h2>Tablica losowych liczb</h2>
        <table class="table">
        <thead>
                <tr>
                    <th>Indeks</th>
                    <th>Wartość</th>
                </tr>        
        </thead>   
          
                <?php

if (isset($_POST['Send'])) {
    $max = $_POST["Pole_0"];
    $min = $_POST["Pole_1"];
}

               class Tablica {
                     function generowanie_tablicy($sort,$min,$max) {
                        $tab = array();
                        for ($i = 0; $i < $sort; $i++) {
                            $tab[$i] = rand($min,$max);
                        }
                        return $tab;
                    }

                     function pobieranie_tablicy($tab) {
                        for ($i = 0; $i < count($tab); $i++) {
                            echo "<tr><td>" . ($i + 1) . "</td><td>" . $tab[$i];
                        }
                    }

                     function sortowanie_tablicy($tab) {
                        sort($tab);
                        return $tab;
                    }
                }
                ?>
    <tbody>
            <?php
                $arrayTable = new Tablica();
                $tab = $arrayTable->generowanie_tablicy(10,$min,$max);
                $arrayTable->pobieranie_tablicy($tab);
            ?>
    </tbody>        
        
      
        <table class="table">
        <thead>
        <h2>Tablica posortowanych liczb</h2>
                <tr>
                    <th>Indeks</th>
                    <th>Wartość</th>
                </tr>   
        </thead> 
        <tbody>
                <?php
                $sortedArray = $arrayTable->sortowanie_tablicy($tab);
                $arrayTable->pobieranie_tablicy($sortedArray);
                ?>
        </tbody>
        </table>
    </div>
            </div>
            </center>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

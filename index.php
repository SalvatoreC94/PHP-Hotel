<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Hotel</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Elenco degli Hotel</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal Centro (km)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Definire l'array di hotel
                $hotels = [
                    [
                        'name' => 'Hotel Belvedere',
                        'description' => 'Hotel Belvedere Descrizione',
                        'parking' => true,
                        'vote' => 4,
                        'distance_to_center' => 10.4
                    ],
                    [
                        'name' => 'Hotel Futuro',
                        'description' => 'Hotel Futuro Descrizione',
                        'parking' => true,
                        'vote' => 2,
                        'distance_to_center' => 2
                    ],
                    [
                        'name' => 'Hotel Rivamare',
                        'description' => 'Hotel Rivamare Descrizione',
                        'parking' => false,
                        'vote' => 1,
                        'distance_to_center' => 1
                    ],
                    [
                        'name' => 'Hotel Bellavista',
                        'description' => 'Hotel Bellavista Descrizione',
                        'parking' => false,
                        'vote' => 5,
                        'distance_to_center' => 5.5
                    ],
                    [
                        'name' => 'Hotel Milano',
                        'description' => 'Hotel Milano Descrizione',
                        'parking' => true,
                        'vote' => 2,
                        'distance_to_center' => 50
                    ],
                ];

                // Stampare i dati degli hotel in tabella usando un ciclo for
                for ($i = 0; $i < count($hotels); $i++) {
                    echo "<tr>";
                    echo "<td>" . $hotels[$i]['name'] . "</td>";
                    echo "<td>" . $hotels[$i]['description'] . "</td>";
                    echo "<td>" . ($hotels[$i]['parking'] ? 'Sì' : 'No') . "</td>";
                    echo "<td>" . $hotels[$i]['vote'] . "</td>";
                    echo "<td>" . $hotels[$i]['distance_to_center'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

   
</body>
</html>

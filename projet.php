<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sélectionnez vos critères écoresponsable et créer votre projet !">
    <meta name="keywords" content="eco-conception, bonnes pratiques">
    <meta name="author" content="Le Cashprize D4G2021">
    <title>D4G2021 - Projet - Le Cashprize team</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/planete2.png">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>

<body>
    <!--Header PHP-->
    <?php include 'header.php';  ?>
    <section class="container">
        <h2 class="titre">Projet</h2>
    </section>
    <table class="tableau-panier">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Famille</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id = "corps-tableau-panier"></tbody>
        </table>


    <!--Footer PHP-->
    <?php include 'footer.php';  ?>
    <script src="gestionPanier.js"></script>
</body>

</html>
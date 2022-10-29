<!DOCTYPE html>
<html>
    <head>
        <?php include "head.php"?>
    </head>
    <body>
        <?php include "header.php"?>
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
        <script src="gestionPanier.js"></script>
    </body>
</html>
<?php
    $produit1 = ["nom" => "T-shirt", "prix" => 10, "quantite" => 3];
    $produit2 = ["nom" => "Casquette", "prix" => 5, "quantite" => 2];
    $produit3 = ["nom" => "Pantalon", "prix" => 40, "quantite" => 1];

    function calculerSousTotal($produit) {
        return $produit['prix'] * $produit['quantite'];
    }

    $totalPanier = 0;
    $produits = [$produit1, $produit2, $produit3];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Execice php</title>
    </head>
    <body>

        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Sous-total</th>
            </tr>
            <?php foreach ($produits as $produit): 
                $sousTotal = calculerSousTotal($produit);
                $totalPanier += $sousTotal;
            ?>
                <tr>
                    <td><?= $produit['nom'] ?></td>
                    <td><?= $produit['prix'] ?> €</td>
                    <td><?= $produit['quantite'] ?></td>
                    <td><?= $sousTotal ?> €</td>
                </tr>
            <?php endforeach; ?>
        </table>

        <p>Montant total du panier : <?= $totalPanier ?> €</p>

        <?php if ($totalPanier > 50): 
            $totalApresReduction = $totalPanier * 0.9;
        ?>
            <p>La réduction est applicable uniquement à partir de 50.99€ </p>
            <p>Montant total après réduction de 10% : <?= $totalApresReduction ?> €</p>
            
        <?php else: ?>
            <p>Aucune réduction appliquée.</p>
        <?php endif; ?>

    </body>
</html>

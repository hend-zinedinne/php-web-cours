<?php
$produits = [
    ["numeroProduit" => 1001, "nomProduit" => "Clavier mécanique TKL", "prixHTProduit" => 79.90, "descriptionProduit" => "Clavier compact, switches tactiles.", "quantiteStockProduit" => 14],
    ["numeroProduit" => 1002, "nomProduit" => "Souris gaming 6 boutons", "prixHTProduit" => 39.90, "descriptionProduit" => "Capteur précis, DPI réglables.", "quantiteStockProduit" => 8],
    ["numeroProduit" => 1003, "nomProduit" => "Casque audio USB", "prixHTProduit" => 54.90, "descriptionProduit" => "Micro antibruit, idéal visioconférence.", "quantiteStockProduit" => 22],
    ["numeroProduit" => 1004, "nomProduit" => "Tapis de souris XXL", "prixHTProduit" => 19.90, "descriptionProduit" => "Grande surface, base antidérapante.", "quantiteStockProduit" => 6],
    ["numeroProduit" => 1005, "nomProduit" => "Clé USB 128 Go", "prixHTProduit" => 14.90, "descriptionProduit" => "USB 3.0, compacte et rapide.", "quantiteStockProduit" => 42],
    ["numeroProduit" => 1006, "nomProduit" => "SSD externe 1 To", "prixHTProduit" => 109.90, "descriptionProduit" => "Transferts rapides, câble USB-C inclus.", "quantiteStockProduit" => 9],
    ["numeroProduit" => 1007, "nomProduit" => "Hub USB-C 7-en-1", "prixHTProduit" => 49.90, "descriptionProduit" => "HDMI, USB, SD, power delivery.", "quantiteStockProduit" => 12],
    ["numeroProduit" => 1008, "nomProduit" => "Câble HDMI 2m", "prixHTProduit" => 9.90, "descriptionProduit" => "Compatible 4K, gaine renforcée.", "quantiteStockProduit" => 5],
    ["numeroProduit" => 1009, "nomProduit" => "Webcam Full HD", "prixHTProduit" => 34.90, "descriptionProduit" => "1080p, autofocus, micro intégré.", "quantiteStockProduit" => 17],
    ["numeroProduit" => 1010, "nomProduit" => "Support PC portable", "prixHTProduit" => 24.90, "descriptionProduit" => "Inclinaison réglable, aluminium.", "quantiteStockProduit" => 13],
    ["numeroProduit" => 1011, "nomProduit" => "Chargeur USB-C 65W", "prixHTProduit" => 29.90, "descriptionProduit" => "Charge rapide, compact.", "quantiteStockProduit" => 11],
    ["numeroProduit" => 1012, "nomProduit" => "Batterie externe 20 000 mAh", "prixHTProduit" => 35.90, "descriptionProduit" => "Grande capacité, double sortie.", "quantiteStockProduit" => 3],
    ["numeroProduit" => 1013, "nomProduit" => "Enceinte Bluetooth", "prixHTProduit" => 44.90, "descriptionProduit" => "Autonomie 10h, résistante aux éclaboussures.", "quantiteStockProduit" => 18],
    ["numeroProduit" => 1014, "nomProduit" => "Routeur Wi-Fi 6", "prixHTProduit" => 89.90, "descriptionProduit" => "Bonne couverture, interface simple.", "quantiteStockProduit" => 9],
    ["numeroProduit" => 1015, "nomProduit" => "Switch 8 ports gigabit", "prixHTProduit" => 22.90, "descriptionProduit" => "Plug & play, silencieux.", "quantiteStockProduit" => 16],
    ["numeroProduit" => 1016, "nomProduit" => "Câble RJ45 Cat6 5m", "prixHTProduit" => 7.90, "descriptionProduit" => "Connexion stable, blindage.", "quantiteStockProduit" => 2],
    ["numeroProduit" => 1017, "nomProduit" => "Bombe à air sec", "prixHTProduit" => 6.50, "descriptionProduit" => "Nettoyage clavier/boîtier.", "quantiteStockProduit" => 26],
    ["numeroProduit" => 1018, "nomProduit" => "Kit tournevis précision", "prixHTProduit" => 15.90, "descriptionProduit" => "Embouts variés, aimanté.", "quantiteStockProduit" => 10],
    ["numeroProduit" => 1019, "nomProduit" => "Câble USB-C vers USB-C (2m)", "prixHTProduit" => 8.90, "descriptionProduit" => "Charge + data, compatible PD.", "quantiteStockProduit" => 4],
    ["numeroProduit" => 1020, "nomProduit" => "Adaptateur USB-C vers Ethernet", "prixHTProduit" => 18.90, "descriptionProduit" => "Connexion filaire stable.", "quantiteStockProduit" => 13],
];
$nombreProduits = count($produits);
$nombreProduitsRupture = 0;
foreach ($produits as $produit) {
    if ($produit['quantiteStockProduit'] < 10) {
        $nombreProduitsRupture++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Stocks</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="border-stock">
        <h2>Catalogue produits</h2>

        <div class="flex-stock">
            <div class="border-white stock">
                <p>📊 Nombre de produits</p>
                <span class="nombre-produits"><?= $nombreProduits ?></span>
            </div>
            <div class="border-red stock">
                <p>⚠️ Produits en rupture</p>
                <span class="nombre-produits" style="color:red;"><?= $nombreProduitsRupture ?></span>
            </div>
        </div>
    </div>

    <div class="border-table">
        <h3>Liste des produits</h3>
        <table>
            <tr class=" ligne-legende">
                <th style="text-align:left;">N°</th>
                <th style="text-align:left;">Nom</th>
                <th style="text-align:left;">Description</th>
                <th style="text-align:right;">Prix HT</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
            <?php foreach ($produits as $produit): ?>
                <tr class="ligne <?= ($produit['quantiteStockProduit'] < 10) ? 'ligne-rupture' : 'ligne-ok' ?>">
                    <th style="text-align:left"><?= $produit["numeroProduit"] ?></th>
                    <th style="text-align:left"><?= $produit["nomProduit"] ?></th>
                    <th style="text-align:left"><?= $produit["descriptionProduit"] ?></th>
                    <th style="text-align:right"><?= number_format($produit["prixHTProduit"], 2, ',', ' ') ?> €</th>
                    <th><span
                            class="<?= ($produit['quantiteStockProduit'] < 10) ? "nombre-stock rupture" : "nombre-stock ok" ?>"><?= ($produit['quantiteStockProduit'] < 10) ? '⚠️ ' : '';
                                    echo $produit["quantiteStockProduit"] ?></span>
                    </th>
                    <th><?= ($produit['quantiteStockProduit'] < 10) ? "<a href='#' class='bouton-reapprovisioner'>📦 Réapprovisioner <a>" : "" ?>
                    </th>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
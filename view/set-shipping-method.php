<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir la Méthode de Livraison</title>
</head>
<body>
    <h1>Choisir la Méthode de Livraison</h1>

    <form action="../controller/process-shipping-method.php" method="post">
        <label for="shipping_method">Méthode de Livraison :</label>
        <select name="shipping_method" id="shipping_method" required>
            <option value="" disabled selected>Sélectionnez une méthode</option>
            <option value="Domicile">Livraison Standard (3-5 jours)</option>
            <option value="Chronopost Express">Livraison Express (1-2 jours)</option>
            <option value="Point relais'">Point relais</option>
        </select>

        <button type="submit">Confirmer</button>
    </form>
</body>
</html>

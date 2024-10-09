<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir le Mode de Paiement</title>
</head>
<body>
    <h1>Choisir le Mode de Paiement</h1>

    <form action="../controller/process-payment-method.php" method="post">
        <label for="payment_method">Mode de Paiement :</label>
        <select name="payment_method" id="payment_method" required>
            <option value="" disabled selected>Sélectionnez un mode de paiement</option>
            <option value="credit_card">Carte de Crédit</option>
            <option value="paypal">PayPal</option>
            <option value="bank_transfer">Virement Bancaire</option>
        </select>

        <button type="submit">Confirmer</button>
    </form>
</body>
</html>

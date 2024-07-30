<!-- resources/views/error.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur de Paiement</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="alert alert-danger mt-5">
            <h1 class="display-4">Erreur de Paiement</h1>
            <p class="lead">Nous sommes désolés, mais votre paiement a échoué. Veuillez réessayer.</p>
            <hr>
            <p>Si le problème persiste, veuillez contacter notre <a href="{{ route('contact') }}">support client</a>.</p>
            <a class="btn btn-primary" href="{{ route('cart') }}">Retour au panier</a>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KamUni</title>
</head>

<body>

    <form method="POST" action="?">
        @csrf

        <div>
            <input type="text" name="firstname" placeholder="Vorname"><br>
        </div>

        <div>
            <input type="text" name="lastname" placeholder="Name"><br>
        </div>

        <div>
            <input type="email" name="email" placeholder="Email"><br>
        </div>

        <button type="submit">Speichern</button>

    </form>




</body>

</html>

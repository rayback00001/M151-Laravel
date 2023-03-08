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

        <div>
            <button type="submit">Speichern</button>
        </div>
        

    </form>


    <style>
        div{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        input{
          height: 30px;
        }

        button {
          width: 150px;
          height: 35px;
          border: none;
          border-radius: 50px;
          margin: 10px 5px;
          padding: 9px;
          color: white;
          background-color: #006ed5;
          cursor: pointer;
        }
    </style>




</body>

</html>

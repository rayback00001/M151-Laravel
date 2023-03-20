<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>

<body>


    <div class="event-details">
        <h1>{{$event->title}}</h1><br>
        <p>{{$event->description}}</p>
        <p>Datum: {{$event->date}}</p>
    </div>

    <div class="top">
        <h1>Anmeldung Events</h1>
        <p>Melden Sie sich für ein Event an</p>
    </div>

    


    <form method="POST" action="?">
        @csrf

        <div class="radio-btn">
            <div class="choice">
                <input type="radio" value="yes" id="yes" name="answer" checked/>
                <label for="yes" class="radio">Ja, ich bin dabei</label>
            </div>
            <div class="choice">
                <input type="radio" value="no" id="no" name="answer" />
                <label for="no" class="radio">Nein, ich kann leider nicht</label>
            </div>

        </div>


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
            <button type="submit">Absenden</button>
        </div>


    </form>

    <a href="{{$id}}/applications">Anmeldungen ansehen</a>
    

    <style>
        * {
            padding: 0;
            font-family: "Poppins", sans-serif;
            margin: 0;
            list-style: none;
            text-decoration: none;
        }

        .radio-btn {
            display: flex;
            align-items: center;
            
        }

        .choice{
            display: flex;
            align-items: center;
            margin-right: 20px;
            margin-left: 30px;
        }

        a{
            display: flex;
            align-items: center;
            justify-content: center;
            color: #006ed5;
            padding-top: 8px;
        }


        div {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .top {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        input[type=text], [type=email]  {
            height: 30px;
            width: 280px;
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

        .event-details{
            display: flex;
            align-items: center;
            flex-direction: column;
        }


    </style>




</body>

</html>

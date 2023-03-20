<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>

<body>

    <div class="events">
        <h1>Alle Events</h1>
        <ul>
            @foreach($events as $event)
            <li><a href="/event/{{$event -> id}}">{{$event -> title}}</a></li>
            @endforeach
        </ul>

    </div>



    <style>
        * {
            padding: 0;
            font-family: "Poppins", sans-serif;
            margin: 0;
            list-style: none;
            text-decoration: none;
        }

        .events{
            display: flex;
            align-items: center;
            flex-direction: column; 
            text-align: center;
            padding-top: 40px;
        }


    </style>
</body>

</html>

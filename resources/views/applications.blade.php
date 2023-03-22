<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            
        }

        div {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        ul {
            list-style: none;
            padding: 0;
            text-align: center;
            
        }

        a{
            text-decoration: none;
            text-align: center;
            width: 100px;
            height: 23px;
            border: none;
            border-radius: 50px;
            margin: 10px 5px;
            padding: 9px;
            color: white;
            background-color: #006ed5;
            cursor: pointer;
        }

        a:hover{
            scale: 1.05;
        }

        li {
            margin-bottom: 10px;
            font-size: 18px;
        }

        small {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

    <div>
        <h1>Anmeldungen</h1>
    </div>
    <div>
        <ul>
            @foreach($applications as $application)
            <li>{{$application->firstname}} {{$application->lastname}}</li>
            @endforeach
        </ul>
        <small>{{$declinedApplications}} Abmeldungen</small>
        <a href="{{url()->previous()}}">Zurück</a>
    </div>
</body>
</html>

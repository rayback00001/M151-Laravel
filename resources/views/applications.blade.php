<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>

<body>

    <div>
        <ul>
            @foreach($applications as $application)
            <li>{{$application->firstname}} {{$application->lastname}}</li>
            @endforeach
        </ul>

        <small>{{$declinedApplications}} Abmeldungen</small>

    </div>




    <style>

        * {
            padding: 0;
            font-family: "Poppins", sans-serif;
            margin: 0;
            list-style: none;
            text-decoration: none;
        }
        div{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            flex-direction: column;
        }

    </style>
</body>

</html>

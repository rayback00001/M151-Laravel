<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KamUni</title>
</head>

<body>

    <div>
        <ul>
            @foreach($applications as $applications)
            <li>{{$applications->firstname}} {{$applications->lastname}}</li>
            @endforeach
        </ul>

        <small>{{$declinedApplications}} Abmeldungen</small>

    </div>




    <style>

        *{
            list-style: none;
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

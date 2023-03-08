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
        @foreach($applications as $applications)
        <p>{{$applications->firstname}} {{$applications->lastname}}</p>
        @endforeach

    </div>




    <style>
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

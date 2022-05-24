<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Trains</h1>

    @foreach ($trains as $train)
        <div>
            <h2>Train Company: {{ $train->company }}</h2>
            <p>Departure: {{ $train->departure_statione }}</p>
            <p>Arrival: {{ $train->arrival_statiom }}</p>
        </div>
    @endforeach



</body>

</html>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <h1>Impfen statt schimpfen!</h1>
        <ul>
            @foreach ($locations as $location)
                <li> Besuchen Sie das Impfzentrum
                    <a href="locations/{{$location->id}}"> {{$location->name}}</a>
                </li>
            @endforeach
        </ul>

    </body>
</html>

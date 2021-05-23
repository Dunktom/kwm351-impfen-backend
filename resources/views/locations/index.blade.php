<!DOCTYPE html>
<html>
    <head>
        <title> Locations PAGE</title>
    </head>
    <body>
        <ul>
             @foreach ($locations as $location)
                <li>
                    <a href="locations/{{$location->id}}"> {{$location->name}}</a>
                </li>
            @endforeach
        </ul>
    </body>
</html>

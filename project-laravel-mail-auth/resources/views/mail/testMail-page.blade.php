<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test email</title>
</head>
<body>
    
    <div id="container">
        <h2>
            Ciao {{Auth::user() -> name}} - Testo richiesto:

            {{$stringaTest}}
        </h2>
    </div>

</body>
</html>
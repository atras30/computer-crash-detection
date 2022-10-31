<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield("assets")
</head>

<body class="d-flex flex-column">
    @include("templates.navbar")
    @yield("content")
    @yield("scripts")
</body>

</html>

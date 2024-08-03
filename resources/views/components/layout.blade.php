<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <x-nav href="/">home</x-nav>
    <h1 style="color:red;">about page</h1>
    <?php echo $slot ?>                           <!--    PHP echo ==> {{ $slot }}      -->
</body>
</html>
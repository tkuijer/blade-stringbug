<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <!-- Doesn't work -->
        <x-bug-label :value="'error)'" />

        <!-- Does work -->
        <x-bug-label :value="'(works)'" />
    </body>
</html>

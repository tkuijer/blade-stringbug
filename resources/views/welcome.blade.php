<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <!-- Doesn't work -->
        <x-bug-label :value="__('(error')" />

        <!-- Does work -->
        <x-bug-label :value="__('(works)')" />
    </body>
</html>

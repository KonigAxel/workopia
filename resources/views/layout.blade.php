<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Workopia jobs'}}</title>
</head>
<body class="bg-gray-100">
    <x-header />
    <h1>Layout component</h1>
    <main class="container mx-auto p-4 mt-4">
        {{$slot}}
    </main>
    
</body>
</html> 
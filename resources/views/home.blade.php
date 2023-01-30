<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Crud</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Livewire CRUD Blog</a>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center mt-3">
        @livewire('post')
    </div>
</div>

@livewireScripts
</body>
</html>

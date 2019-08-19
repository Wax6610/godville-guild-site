<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Драконы Годвилля. Таблица прогресса гильдии</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link
            rel="stylesheet"
            href="//cdn.jsdelivr.net/npm/semantic-ui@2.4.1/dist/semantic.min.css"
    />
    <script src="{{ asset('js/guild-progress-app.js') }}" defer></script>


</head>
<body>
<div class="ui container">
    <div clas="row">
        <div id="guild-progress-table" class="row"></div>
    </div>
</div>

</body>
</html>

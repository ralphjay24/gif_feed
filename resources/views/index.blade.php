<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>GIF Feed!</title>
        <meta name="csrf-token" content="{{ csrf_token()  }}">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    </head>
    <body class="">
      <div id="app">
          <router-view></router-view>
      </div>
    </body>

    <script src="{{ mix('/js/app.js') }}"></script>
</html>

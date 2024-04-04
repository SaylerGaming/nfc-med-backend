<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFC med</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
    rel="stylesheet"
    />

    <link rel="stylesheet" href="/css/alerts.css">
</head>
<body>
    @php
        $user = auth()->user();
    @endphp
    @include('layouts.admin.navbar')

    @if (\Session::has('success'))
        <label>
        <input type="checkbox" class="alertCheckbox" autocomplete="off" />
        <div class="alert notice">
            <span class="alertClose">X</span>
            <span class="alertText">{{ \Session::get('success') }}
            <br class="clear"/></span>
        </div>
        </label>
    @elseif(\Session::has('error'))
        <label>
        <input type="checkbox" class="alertCheckbox" autocomplete="off" />
        <div class="alert error">
            <span class="alertClose">X</span>
            <span class="alertText">{{ \Session::get('error') }}
            <br class="clear"/></span>
        </div>
        </label>
    @endif


    <div class="container">
        @yield('content')
    </div>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
    ></script>
</body>
</html>
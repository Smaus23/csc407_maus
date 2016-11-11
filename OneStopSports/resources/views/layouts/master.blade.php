<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>One Stop Sports Shop</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        button{
            margin:auto;
            display:block;
            height: 3em;
            width: 6em;
        }

        .links {
            text-align: center;
            border-style: solid;
            border-color: black;
            font-size: 1.50em;
            letter-spacing: .1rem;
        }
        a:link {color: black;}
        a:visited {color: black;}
        a:hover {color: grey;}
        a:active {color: black;}

        html, body  {
            border-radius: 25px;
            border-width: 0.25em;
            border-style: solid;
            border-color: black;
            margin-left: auto;
            margin-right: auto;
            padding: 1em;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 1em;
            width: 50em;
            text-align: center;
        }

        table {
            margin-left:auto;
            margin-right:auto;
        }

    </style>
    @include('layouts.menu')
</head>
<body>

<div class="content">
   @yield('content')
</div>
</div>
</body>
</html>

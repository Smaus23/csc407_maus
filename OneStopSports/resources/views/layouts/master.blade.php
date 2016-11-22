<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Stop Sports Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-bottom: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding-top: 1em;
        }


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
        a:link {color: white;}
        a:visited {color: white;}
        a:hover {color: grey;}
        a:active {color: black;}

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
<footer class="container-fluid text-center">
    <p>One Stop Sports Shop Inc.</p>
</footer>
</html>

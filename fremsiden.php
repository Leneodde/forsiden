<!DOCTYPE html>
<html lang="en" xmlns:style="http://www.w3.org/1999/xhtml">
<head>
    <title>Ringerike Valg</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
            height: 70px;
            background-color: #D0D0D0;
            border-bottom: 5px solid orange;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 633px;
            /* Her er det noe som ikke stemmer! Kan dra siden lang utover */
            width: 134%;
            background-color: white;


        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 30px;
            background-color: #f1f1f1;
            height: 100%;
            width: 100px;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #D0D0D0;
            color: black;
            padding: 6px;
            border-top: 5px solid orange;

        }


        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">  <img src="ringerike.svg" alt="Ringerike kommune" style="width:300px;height:50px;"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
               <!-- <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li> -->
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <br>
                <li><a href="#"><span  class="glyphicon glyphicon-log-in" style="color: black;"></span>  </a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Venstre side -->
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <br>
            <!-- Kalender -->
            <img src="kalender2.png" alt="kalender" style="height: 70px; width: 60px margin-left: auto;">
            <!-- Min arbeidskalender -->
            <br>
            <br>
            <img src="arbeid.png" alt="minarbeidsplan" style="height: 70px; width: 60px margin-left: auto;">
        </div>

        <div class="col-sm-8 text-left">
            <h1>Nyhetsfeed</h1>
        </div>

        <!-- Høyre side -->
        <div class="col-sm-2 sidenav">
            <br>
                <img src="bruker.png" alt="bruker" style="height: 70px; width: 60px margin-left: auto;">
            <br>
            <br>
            <!-- Melding -->
                <img src="mess.png" alt="messenger" style="height: 70px; width: 60px margin-left: auto;">
            <br>
            <br>
            <!-- E-post -->
            <img src="epost.png" alt="epost" style="height: 70px; width: 60px margin-left: auto;">
            <br>
            <br>
            <!-- informasjon -->
            <img src="informasjon2.png" alt="informasjon" style="height: 70px; width: 60px margin-left: auto;">
            </div>

            </div>
        </div>
    </div>
</div>



<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
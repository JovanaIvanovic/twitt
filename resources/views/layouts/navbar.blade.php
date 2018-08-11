<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>NavBar</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="\css\navbar.css" rel="stylesheet">



</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="{{route('home')}}">Twitt</a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/login">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/register">Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="/users/{{Auth::user()->id}}">Profile</a>
                            </li>

                            <li>
                            <a class="dropdown-item" href="/logout"
                               onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout
                            </a></li>

                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
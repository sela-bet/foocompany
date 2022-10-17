<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('index')}}">Foo Incoporation</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
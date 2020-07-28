<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="{{route('home')}}">ZainCash Test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" id="home_nav_link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="coding_task_nav_link" href="{{route('coding_task')}}">Coding Task <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="database_task_nav_link" href="{{route("database_task")}}">Database Task <span class="sr-only">(current)</span></a>
            </li>

        </ul>
    </div>
</nav>

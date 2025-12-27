<div class="navbar container bg-body-secondary">
    <nav class="navbar navbar-expand-lg bg-body-secondary">

        <div class="container-fluid bg-body-tertiary">
            <a href="{{ route('calendar') }}">Calendario</a>
        </div>

        <div class="container-fluid bg-body-tertiary">
            <a href="{{ route('calendar') }}">Calendario</a>
        </div>

        <div class="container-fluid bg-body-tertiary">
            <a href="{{ route('calendar') }}">Calendario</a>
        </div>

        <div class="container-fluid bg-body-tertiary">
            <a href="{{ route('calendar') }}">Calendario</a>
        </div>
        <div class="container-fluid bg-body-tertiary">
            <a href="{{ route('logout') }}">@auth  {{Auth::user()->name}} cerrar session  @endauth  </a>
        </div>

    </nav>
</div>
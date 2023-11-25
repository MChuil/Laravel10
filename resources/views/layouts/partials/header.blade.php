<header>
    <h1>Laravel 10</h1>
    <nav>
        <ul>
            <li>
                <a href="{{ route("home") }}" class="{{ request()->routeIs('home')? 'active': ''}}">Inicio</a>
            </li>
            <li>
                <a href="{{ route('todo.index')}}" class="{{ request()->routeIs('todo.*')? 'active': ''}}"> Tareas</a>
            </li>
            <li>
                <a href="{{ route('contactanos') }}" class="{{ request()->routeIs('contactanos')? 'active': ''}}">Contactanos</a>
            </li>
        </ul>
    </nav>
</header>
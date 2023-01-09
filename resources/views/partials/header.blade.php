<header>
    <nav>
        <ul>
            <li>
                <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() === 'blog' ? 'active' : ''}}" href="{{ route('blog') }}">Blog</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() === 'movie' ? 'active' : ''}}" href="{{ route('movie') }}">Movies</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{ route('about') }}">About Us</a>
            </li>
        </ul>
    </nav>
</header>

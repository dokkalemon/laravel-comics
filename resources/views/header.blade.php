
<header class="full-width">
    <div class="header container px-10">
        <div class="logo">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </div>

        <nav>
            <ul>
                <li
                @if (Request::route()->getName() === 'home') class="active" @endif
                >
                    <a href="/">COMICS</a>
                </li>
                <li 
                @if (Request::route()->getName() === 'news') class="active" @endif
                >
                    <a href="/news">NEWS</a>
                </li>
            </ul>
        </nav>

        

    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-custom navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://ikmaakhetwel.nl/wp-content/uploads/2020/12/cropped-logo.png" alt="Logo" width="128" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#custom-collapse" aria-controls="custom-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('over-ons') }}">Over Ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('webshop') }}">Webshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('zakelijk') }}">Zakelijk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('service') }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('it-nieuws') }}">IT Nieuws</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reparaties') }}">Reparaties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-3" role="search" method="get" action="https://ikmaakhetwel.nl/">
                <input class="form-control mr-sm-2" type="search" placeholder="Zoek producten…" aria-label="Search" name="s">
                <input type="hidden" name="post_type" value="product">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Zoeken</button>
            </form>
            <a class="nav-link" href="https://ikmaakhetwel.nl/winkelmand/" title="Bekijk de winkelmand">
                <span class="icon-basket"></span>
                <span class="cart-item-number">0</span>
            </a>
        </div>
    </div>
</nav>

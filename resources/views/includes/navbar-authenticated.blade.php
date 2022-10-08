<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="/images/logo.png" alt="logo"></a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories') }}" class="nav-link">Categories</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Rewards</a>
                </li>
            </ul>
            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <img src="/images/default_pc.png" alt="" class="rounded-circle mr-2 profile-picture" />
                        Hi, Rendi
                    </a>
                    <div class="dropdown-menu">
                        <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                        <a href="/dashboard-account.html" class="dropdown-item">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="/" class="dropdown-item">Logout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block mt-2">
                        <img src="/images/ico-cart.svg" alt="" />
                        <div class="card-badge">3</div>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="" class="nav-link"> Hi, Rendi </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link d-inline-block"> Cart </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
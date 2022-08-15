<nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top" role="navigation">
    <div class="container">
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingCategories">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingCategories">
            <ul class="nav navbar-nav">
                <li class="nav-item order-2 order-md-1"><a href="/" class="nav-link text-white" title="cart">Home</a></li>
                <x-category-dropdown></x-category-dropdown>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                @auth
                    <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link text-white" title="cart"><i class="fa fa-shopping-cart fa-fw fa-lg"></i></a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="">Welcome, {{ auth()->user()->name }}</a></li>
                @else
                    <li class="nav-item"><a href="/register" class="nav-link text-white">Register</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link text-white">Login</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>





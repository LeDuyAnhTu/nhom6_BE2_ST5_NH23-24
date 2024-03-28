<!-- header section strats -->
<header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('name', ['name' => 'index']) }}">
                        <span>
                            Feane
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('name', ['name' => 'index']) }}">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('name', ['name' => 'menu'])  }}">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('name', ['name' => 'about'])  }}">About</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('name', ['name' => 'book'])  }}">Book Table <span class="sr-only">(current)</span> </a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="" class="user_link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <a class="cart_link" href="#">
                                <i class="fa fa-shopping-cart icon_cart"></i>
                            </a>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                            <a href="" class="order_online">
                                Order Online
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
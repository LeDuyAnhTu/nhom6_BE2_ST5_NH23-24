<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">EXE1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('name.view', ['name' => 'trangchu']) }}">Trang chủ<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('name.view', ['name' => 'gioithieu']) }}">Giới thiệu</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sản phẩm
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('name.view', ['name' => 'ban']) }}">Bàn</a>
                    <a class="dropdown-item" href="{{ route('name.view', ['name' => 'ghe']) }}">Ghế</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('name.view', ['name' => 'lienhe']) }}">Liên hệ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('name.view', ['name' => 'login']) }}">Login</a>
            </li>
        </ul>
    </div>
</nav>
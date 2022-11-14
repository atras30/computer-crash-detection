<nav class="navbar navbar-expand-lg"
    style="background-color : rgba({{ $navbarBackgroundColor[0] }}, {{ $navbarBackgroundColor[1] }}, {{ $navbarBackgroundColor[2] }}, {{ $navbarBackgroundColor[3] }});">
    <div class="container-fluid">
        <a class="navbar-brand fw-semibold {{ isset($navbarTextColor) ? "text-white" : "text-black" }}" href="{{route("user.home")}}">Expert System <span class="opacity-50">| Kelompok 3</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ isset($navbarTextColor) ? "text-white" : "text-black" }} fw-semibold" href="{{ route('user.home') }}"><i
                            class="fw-semibold bi bi-house-door me-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isset($navbarTextColor) ? "text-white" : "text-black" }} fw-semibold" href="{{ route('user.about_us') }}"><i
                            class="fw-semibold bi bi-person me-2"></i>About Us</a>
                </li>
                @auth('web')
                    <li class="nav-item">
                        <form action="auth/logout" method="POST" class="nav-link {{ isset($navbarTextColor) ? "text-white" : "text-black" }} fw-semibold">
                            @csrf
                            <i class="fw-semibold bi bi-box-arrow-in-right me-2"></i><a type="submit" id="button-logout">Logout</a>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ isset($navbarTextColor) ? "text-white" : "text-black" }} fw-semibold" href="{{ route('auth.login') }}"><i
                                class="fw-semibold bi bi-box-arrow-in-right me-2"></i>Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<script defer>
    const logoutButton = document.getElementById("button-logout");

    logoutButton.addEventListener("click", () => {
        logoutButton.parentElement.submit();
        console.log(logoutButton.parentElement);
    });
</script>

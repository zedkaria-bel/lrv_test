<div class="py-4 px-5 d-flex justify-content-between navbar" style="background: #d8e1ec">
    <a href="/">
        <p class="m-0 fs-1"> <span class="fw-lighter">EMB</span> | <span class="fw-bolder">DCGSI</span></p>
    </a>
    <div class="d-flex justify-content-end" id="navbarSupportedContent">
        <b>
          <ul class="navbar-nav d-flex flex-row fs-5">
            @guest
                <li class="py-2 px-4 nav-item">
                    <div class="d-flex flex-row d-flex align-items-center">
                        <form action="/login" method="GET">
                            @csrf
                            <button type="submit" class="nav-link" style="color: #222222 !important; background: none; border: none"><b>Se connecter</b></button>
                        </form>
                    </div>
                </li>
                <li class="py-2 px-4 nav-item rounded" style="background-image: linear-gradient(to right, #5b9be6 , #093197);">
                    <div class="d-flex flex-row d-flex align-items-center">
                        <a class="nav-link" href="/register" style="color: white !important;" href=""><b>S'inscrire pour les mises à jour</b></a>
                    </div>
                </li>
            @else
                <li class="py-2 px-4 nav-item">
                    <div class="d-flex flex-row d-flex align-items-center">
                        <a class="nav-link" href="/" style="color: #222222 !important;"><b>Acceuil</b></a>
                    </div>
                </li>
                <li class="py-2 px-4 nav-item">
                    <div class="d-flex flex-row d-flex align-items-center">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="nav-link" style="color: #222222 !important; background: none; border: none"><b>Logout</b></button>
                        </form>
                    </div>
                </li>
                <li class="py-2 px-4 nav-item rounded" style="background-image: linear-gradient(to right, #5b9be6 , #093197);">
                    <div class="d-flex flex-row d-flex align-items-center">
                        <a class="nav-link" href="#" style="color: white !important;"><b>Bonjour, {{ Auth::user()->name }} </b></a>
                    </div>
                </li>
            @endguest
          </ul>
        </b>
    </div>
</div>

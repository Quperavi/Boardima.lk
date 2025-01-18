<nav class="navbar navbar-expand-md  sticky-top border-bottom" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand d-md-none" href="#">
        <img class="bi" width="24" height="24" src={{ asset('assest/img/logo.png') }}>
        Aperture
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="#offcanvas" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="#offcanvas" aria-labelledby="#offcanvasLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="#offcanvasLabel">Aperture</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav flex-grow-1 justify-content-between w-100">
            <div class="main-nav d-flex justify-content-start align-items-center flex-grow-1">
              <li class="nav-item main-brand-item align-self-start">
                <a class="nav-link " href="/">
                <img class="bi" height="48" src={{ asset('assest/img/logo.png') }}>
                </a>
              </li>
              <li class="nav-item main-nav-item"><a class="nav-link ml-5" href="/">Home</a></li>
              <li class="nav-item "><a class="nav-link" href="/catalogue">Catalogue</a></li>
            </div>
            <div class="nav-links d-flex flex-row align-self-center align-content-center justify-content-end flex-grow-1">
              <li class="nav-item"><a class="nav-link" href="/login"><button type="button" class="btn login-button">Log in</button></a></li>
              <li class="nav-item"><a class="nav-link" href="/register"><button type="button" class="btn btn-dark">Sign up</button></a></li>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </nav>
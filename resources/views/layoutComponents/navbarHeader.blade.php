<nav class="navbar navbar-expand-lg bg-primary p-0">

    <div class="container-fluid">

      <a class="navbar-brand p-0" href=" {{ route('Web.HomeInfo') }}">
          <img src="{{asset('images/logos/logo2.png')}}" class="width150" alt="logo">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.BusinessInfo') }}">Empresas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.MembersInfo') }}">Usuarios</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.SubscriptionsInfo') }}">Suscripciones</a>
          </li>

          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle active text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nosotros
            </a>

            <ul class="dropdown-menu bg-primary p-0" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item text-light" href=" {{ route('Web.TeamInfo') }}">Equipo</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href=" {{ route('Web.FrequentQuestionsInfo') }}">Preguntas frecuentes</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href=" {{ route('Web.ContactInfo') }}">Contacto</a>
                </li>
                <li>
                  <a class="dropdown-item text-light" href=" {{ route('Web.BlogInfo') }}">Blog</a>
                </li>
                {{-- <li>
                    <hr class="dropdown-divider">
                </li> --}}
            </ul>

          </li>

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.InfluTokenInfo') }}">Influ token</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-light" href=" {{ route('Web.AmbassadorInfo') }}">Embajadores</a>
          </li>
        </ul>

      </div>

    </div>

</nav>
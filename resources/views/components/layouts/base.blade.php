<?php
// header('Access-Control-Allow-Origin: *');
$page1 = $page[0] ?? '';
$page2 = $page[1] ?? '';
$menusBar = [
    [
        'titulo' => 'DASHBOARD',
        'menu' => MENU[0],
        'route' => BREADCRUMB[0][1],
        'activeMenu' => $page1 == PAGE[0][0] ? 'active' : '',
        'icon' => 'fas fa-home text-primary',
    ],
    [
        'titulo' => 'PESSOAS',
        'menu' => MENU[1],
        'activeMenu' => $page1 == PAGE[1][0] ? 'active' : '',
        'icon' => 'fas fa-user-nurse text-success',
        'collapse' => [
            'id' => 'listaUsuariosCollapse',
            'show' => $page1 == PAGE[1][0] ? 'show' : '',
            'itens' => [
                [
                    'item' => BREADCRUMB[1][0],
                    'miniItem' => 'Out',
                    'activeMenuItem' => $page2 == PAGE[1][1] ? 'active' : '',
                    'route' => BREADCRUMB[1][1],
                ],
                [
                    'item' => BREADCRUMB[2][0],
                    'miniItem' => 'Md-Aj',
                    'activeMenuItem' => $page2 == PAGE[2][1] ? 'active' : '',
                    'route' => BREADCRUMB[2][1],
                ],
                [
                    'item' => BREADCRUMB[3][0],
                    'miniItem' => 'Md-Rl',
                    'activeMenuItem' => $page2 == PAGE[3][1] ? 'active' : '',
                    'route' => BREADCRUMB[3][1],
                ],
            ],
        ]
    ],
    [
        'menu' => 'Pacientes',
        'activeMenu' => $page1 == 'paciente' ? 'active' : '',
        'icon' => 'fa-solid fa-user text-warning',
        'collapse' => [
            'id' => 'listaPacientesCollapse',
            'show' => $page1 == 'paciente' ? 'show' : '',
            'itens' => [
                [
                    'item' => 'Lista',
                    'miniItem' => 'Lis',
                    'activeMenuItem' => $page2 == 'listaPacientes' ? 'active' : '',
                    'route' => 'index',
                ],
            ],
        ],

    ],
    [
        'titulo' => 'GERENCIAR',
        'menu' => 'Informações',
        'activeMenu' => $page1 == 'informacao' ? 'active' : '',
        'icon' => 'fa fa-cog text-info',
        'collapse' => [
            'id' => 'listaGerenciarCollapse',
            'show' => $page1 == 'informacao' ? 'show' : '',
            'itens' => [
                [
                    'item' => 'Níveis',
                    'miniItem' => 'Niv',
                    'activeMenuItem' => $page2 == 'listaNiveis' ? 'active' : '',
                    'route' => 'index',
                ],
                [
                    'item' => 'Cargos',
                    'miniItem' => 'Car',
                    'activeMenuItem' => $page2 == 'listaCargos' ? 'active' : '',
                    'route' => 'index',
                ],
                [
                    'item' => 'Convênios',
                    'miniItem' => 'Con',
                    'activeMenuItem' => $page2 == 'listaConvenios' ? 'active' : '',
                    'route' => 'index',
                ],
                [
                    'item' => 'Empresa',
                    'miniItem' => 'Emp',
                    'activeMenuItem' => $page2 == 'dadosEmpresa' ? 'active' : '',
                    'route' => 'index',
                ],
            ],
        ],
    ],
    [
        'titulo' => 'SAAS',
        'menu' => 'Definições',
        'activeMenu' => $page1 == 'definicao' ? 'active' : '',
        'icon' => 'fa-solid fa-screwdriver-wrench text-dark',
        'collapse' => [
            'id' => 'listaDefinicaoCollapse',
            'show' => $page1 == 'definicao' ? 'show' : '',
            'itens' => [
                [
                    'item' => 'Grupos',
                    'miniItem' => 'Gru',
                    'activeMenuItem' => $page2 == 'listaGrupos' ? 'active' : '',
                    'route' => 'index',
                ],
                [
                    'item' => 'Acessos',
                    'miniItem' => 'Ace',
                    'activeMenuItem' => $page2 == 'listaAcessos' ? 'active' : '',
                    'route' => 'index',
                ],
            ],
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <title>{{$title}}</title>
  <?=CDN_CSS_CORE_ALL?>
  <?=CDN_CSS_FONTAWESOME_ALL?>
  <?=CDN_CSS_JQUERY_TOAST?>
  <?=CDN_CSS_MAIN?>
</head>

<body class="g-sidenav-show bg-gray-100">
    <x-layouts.sidebar :menusBar="$menusBar"/>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <!-- INÍCIO breadcrumb -->
            <x-breadcrumb :breadcrumb="$breadcrumb" />
        <!-- FIM breadcrumb -->

        <!-- INÍCIO MENU sandwich -->
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
          <a href="javascript:;" class="nav-link p-0">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </a>
        </div>
        <!-- FIM MENU sandwich -->

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <!-- Mantem os icons a direita -->
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <div class="nav-link text-white font-weight-bold px-0 text-center">
                <div class="row">
                  <div class="col-auto p-0">
                    <img src="{{ empty(Auth::user()->photo) ? Vite::imgApoio('no-foto.png') : Auth::user()->photo }}" class="avatar avatar-sm rounded-circle me-2">
                  </div>
                  <div class="col">
                    <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                    <div class="mt-n1 fs-6 opacity-6 fw-bold d-sm-block d-none">Administrador</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center dropdown">
              <a href="javascript:;" class="nav-link text-white p-0" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog cursor-pointer text-white"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        {{ $slot }}
    </div>
  </main>

  <!--   Core JS Files   -->
  <?=CDN_JS_CORE_ALL?>
  <?=CDN_JS_FONTAWESOME_ALL?>
  <?=CDN_JS_PERFECT_SCROLLBAR?>
  <?=CDN_JS_TOAST?>
  <?=CDN_JS_PAGES?>
  @yield('js')
  @if (isset($js))
  <script src="{{asset('assets/js/view/'.$js.'.js')}}" type="text/javascript"></script>
  @endif
  <?=CDN_JS_MAIN?>
  @yield('js2')
</body>

</html>

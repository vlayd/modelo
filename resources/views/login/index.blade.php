<!DOCTYPE html>
{{-- <html translate="no"> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <title>{{ config('app.name') }}</title>
  <?=CDN_CSS_CORE_ALL?>
  <?=CDN_CSS_MAIN?>
  <?=CDN_CSS_FONTAWESOME_ALL?>
</head>

<body class="bg-gray-100">
  <main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-50 pt-7 bg-primary">
    </div>
    <div class="container">
      <div class="row mt-md-n11 mt-n12 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card">
            <div class="card-header pb-0 text-center">
              <img src="{{Vite::imgApoio('person_login.png')}}" class="img-fluid" alt="{{ config('app.name') }}" style="width: 120px;">
              <h3 class="font-weight-bolder">{{ config('app.name') }}</h3>
            </div>
            <div class="card-body">
              <form role="form" class="text-start needs-validation" method="post" action="login" novalidate>
                @csrf
                <x-forms.input
                    campo="email"
                    label="E-mail"
                    value="{{old('email')}}"
                    placeholder="Digite seu e-mail"
                />
                <x-forms.input
                    campo="password"
                    label="Senha"
                    type="password"
                    placeholder="Digite sua senha"
                />
                <div class="text-center">
                  <x-forms.button
                    text="Acessar"
                    type="submit"
                    class="w-100 mt-4 mb-0"
                  />

                    {{-- invalid login --}}
                    @error('login')
                        <div class="alert alert-danger alert-dismissible fade show text-white mt-3" role="alert">
                            <span class="alert-icon"><i class="fas fa-exclamation-triangle"></i></span>
                            <span class="alert-text"><strong>Erro! </strong>{{$message}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <?=CDN_JS_CORE_ALL?>
  <?=CDN_JS_FONTAWESOME_ALL?>
  <?=CDN_JS_MAIN?>
</body>

</html>

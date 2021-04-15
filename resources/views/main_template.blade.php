<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="/">
        <title>WorkSeeker - @yield('title')</title>

        <!-- Fonts -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="assets/css/css.css">
 
    </head>
    <body>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal site-name"><a href="/">WorkSeeker</a></h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="{{route('getVacancies')}}">Найти работу</a>
          <a class="p-2 text-dark" href="#">Разместить вакансию</a>
          <a class="p-2 text-dark" href="#">Помощь</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Войти</a>
      </div>

      @yield('main_header')

      <div class="container">
        @yield('content')
       </div>
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
          <div class="row">
            <div class="col-12 col-md">
              <img class="mb-2" src="/img/brand/bootstrap-solid.svg" alt="логотип bootstrap" width="24" height="24">
              <small class="d-block mb-3 text-muted">&copy; 2021</small>
            </div>
            <div class="col-6 col-md">
              <h5>Поиск работы</h5>
              <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Создать резюме</a></li>
                <li><a class="link-secondary" href="{{route('getVacancies')}}">Найти работу</a></li>
                <li><a class="link-secondary" href="#">Как составлять резюме</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>Ресурсы</h5>
              <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Каталог вакансий</a></li>
                <li><a class="link-secondary" href="#">Еще что-то</a></li>
                <li><a class="link-secondary" href="#">Каталог компаний</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>О нас</h5>
              <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Команда</a></li>
                <li><a class="link-secondary" href="#">Местоположение</a></li>
                <li><a class="link-secondary" href="#">Конфиденциальность</a></li>
                <li><a class="link-secondary" href="#">Сроки</a></li>
              </ul>
            </div>
          </div>
        </footer>
    </body>

    <script src="assets/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
</html>

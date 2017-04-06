<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Автомойки Астаны</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href="/">На главную</a>
            </li>
            <li>
                <a href="{{ action('Carwash\CabinetController@getIndex') }}">Кабинет</a>
            </li>
            <li>
                <a href="{{ action('Carwash\PriceController@getIndex') }}">Цены</a>
            </li>
            <li>
                <a href="{{ action('Carwash\ReserveController@getIndex') }}">Бронирование</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
<!-- /.container -->

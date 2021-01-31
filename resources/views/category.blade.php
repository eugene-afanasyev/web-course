
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="/">Все товары</a></li>
                </li>
                <li ><a href="/basket">В корзину</a></li>
                <li><a href="/reset">Сбросить проект в начальное состояние</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/home">Панель администратора</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <div class="starter-template">
        <h1>
        @if($category  == 'mobiles')
            Мобильные телефоны
            @elseif($category == 'portable')
            Портативная техника
            @elseif($category == 'appliances')
            Бытовая техника
        @endif

        </h1>
        <p>В этом разделе вы найдете самые популярные мобильные телефоны по отличным ценам</p>
        <a class="btn btn-success" href="/basket/1/add">Добавить в корзину</a>
    </div>
</div>
</body>
</html>

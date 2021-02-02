<div class="card" style="width: 18rem; margin: 5px">
    <img class="card-img-top" style="border-radius: 5px" src={{ $product->image }}>
    <div class="card-body">
        <h3 class="card-title">{{ $product->title }}</h3>
        <h4 class="card-title">{{  $product->category->name}}</h4>
        <p>{{ $product->price }} $</p>
        <p>
        <form action="{{ route('basket-add', $product) }}" method="POST">
            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
            <a href="{{ route('product', [$product->category->name, $product->code]) }}"
               class="btn btn-default"
               role="button">Подробнее</a>
            @csrf
        </form>
        </p>
    </div>

</div>

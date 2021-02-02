<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="caption">
            <img height="100px" src={{ $product->image }}>
            <h3>{{ $product->title }}</h3>
            <h4>{{  $product->category->name}}</h4>
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
</div>

<div class="wrap-icon-section wishlist">
    <a href="{{route('product.wishlist')}}" class="link-direction">
        <i class="fa fa-heart" aria-hidden="true"></i>
        <div class="left-info">
            @if(Cart::instance('wishlist')->count() > 0)
                @if(Cart::instance('wishlist')->count() == 1)
                    <span class="index">{{Cart::instance('wishlist')->count()}} articulo</span>
                @else
                    <span class="index">{{Cart::instance('wishlist')->count()}} articulos</span>
                @endif
            @endif
            <span class="title">Deseos</span>
        </div>
    </a>
</div>
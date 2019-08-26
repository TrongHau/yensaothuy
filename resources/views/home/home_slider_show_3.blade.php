@foreach($prods as $key => $item)
    <?php
    $prod = $item->product();
    $prod = $prod->first();
    ?>
    <div class="part-bn">
        <img src="/{{$item->image}}" alt="">
        <div class="caption-bn{{++$key}}">
            @if($item->title_1)<span>{{$item->title_1}}</span>@endif
            @if($item->title_2)<h3>{{$item->title_2}}</h3>@endif
            <a href="/san-pham/{{$prod->slug}}.html">Mua ngay<i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
@endforeach

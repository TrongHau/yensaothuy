@foreach($prods as $item)
    <?php
        $prod = $item->product();
        $prod = $prod->first();
    ?>
    <div class="item ">
        <div class="content-slide insLoadIMG isShow " >
            <img class="owl-lazy" data-src="/{{$item->image}}"alt="">
            <div class="caption-slide">

                @if($item->title_1)<span>{{$item->title_1}}</span>@endif


                @if($item->title_2)<div class="ht1">{{$item->title_2}}</div>@endif


                @if($item->title_3)<i>{{$item->title_3}}</i>@endif

                <a href="/san-pham/{{$prod->slug}}.html">Xem chi tiết</a>
            </div>
        </div>
    </div>
@endforeach
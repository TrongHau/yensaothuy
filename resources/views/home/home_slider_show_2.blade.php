@foreach($prods as $item)
    <?php
    $prod = $item->product();
    $prod = $prod->first();
    ?>
    <a href="/san-pham/{{$prod->slug}}.html" class="thumb-item">
        <img class="lazy" src="/{{$item->image}}" alt="{{$item->title}}">
        <div class="content-thumb">
            @if($item->title_1)<span>{{$item->title_1}}</span>@endif
            @if($item->title_2)<h3>{{$item->title_2}}</h3>@endif
        </div>
    </a>
@endforeach
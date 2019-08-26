<?php
$article_1 = $article[0] ?? [];
$article_2 = $article[1] ?? [];
$article_3 = $article[2] ?? [];
?>
@if($article_1)
<div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="box-latest-news">
            <div class="thumb-img">
                <img src="/{{$article_1->image}}" alt="{{$article_1->title}}">
            </div>
            <div class="content-ln">
                <span>{{date('d-m-Y', strtotime($article_1->created_at))}}</span>
                <h3>{{$article_1->title}}</h3>
                <a href="/tin-tuc/{{$article_1->slug}}.html">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="no-thumb custtt" style="">
            @if($article_2)
            <div class="box-latest-news">
                <div class="content-ln">
                    <span>{{date('d-m-Y', strtotime($article_2->created_at))}}</span>
                    <h3>{{$article_2->title}}</h3>
                    <p>{{$article_2->short_content}}</p>
                    <a href="/tin-tuc/{{$article_2->slug}}.html">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            @endif
            @if($article_3)
            <div class="box-latest-news">
                <div class="content-ln">
                    <span>{{date('d-m-Y', strtotime($article_3->created_at))}}</span>
                    <h3>{{$article_3->title}}</h3>
                    <p>{{$article_3->short_content}}</p>
                    <a href="/tin-tuc/{{$article_3->slug}}.html">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endif
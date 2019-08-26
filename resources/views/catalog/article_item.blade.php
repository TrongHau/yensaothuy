<?php
use App\Library\Helpers;
?>
@foreach($articles as $item)
    <div class="col-md-6 col-sm-6 col-xs-12 articelItem">
        <div class="stArticleLoop">
            <div class="box-latest-news">
                <a href="/tin-tuc/{{$item->slug}}.html" class="thumb-img">
                    <div class="mask-plus">
                        <div class="shape"></div>
                    </div>
                    <img data-reg="true" class="imgLoopItem" src="<?php echo Helpers::get_bp_image($item->image, 'tmp') ?>" alt="{{$item->title}}" style="width: auto;">
                </a>
                <div class="content-ln">
                    <span>{{date('d-m-Y', strtotime($item->created_at))}}</span>
                    <a href="/tin-tuc/{{$item->slug}}.html" title="{{$item->title}}">
                        <h3>{{$item->title}}</h3>
                    </a>
                    <a href="/tin-tuc/{{$item->slug}}.html">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="clearfix"></div>
<div class="col-md-12 content_sortPagiBar pagi">
    <div id="pagination" class="clearfix">
        <?php echo $articles->links() ?>
    </div>
</div>




<?php
use App\Library\Helpers;
?>
@foreach($prods as $item)
    <div class="box-prod frontpage2 grid-item" data-pro="1016881468">
        <div class="pdLoopItem animated zoomIn">
            <div class="itemLoop clearfix">
                <div class="ct-box-op">
                    <div class="pdLoopImg elementFixHeight">
                        <a href="/san-pham/{{$item->slug}}.html" title="{{$item->title}}">
                            <img alt="{{$item->title}}" data-reg="false" class="imgLoopItem" src="<?php echo Helpers::get_bp_image($item->image, 'tmp') ?>" />
                        </a>
                        <ul class="link-quickview">
                            <li><a href="/san-pham/{{$item->slug}}.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                            <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="{{$item->id}}" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>
                    <div class="pdLoopDetail text-center clearfix">
                        <h3 class="pdLoopName"><a class="productName" href="/san-pham/{{$item->slug}}.html" title="{{$item->title}}">{{$item->title}}</a></h3>
                        <p class="pdPrice">
                            <span>{{number_format($item->promotion == 1 ? $item->price_promotion : $item->price)}}₫</span>
                        </p>
                        <div class="pdLoopListView">
                            <ul class="notStyle">
                                <li><strong>Mã sản phẩm: </strong><span>YEN-{{$item->id}}</span></li>
                                @if($item->supplier)
                                    <li><strong>Thương hiệu: </strong><span>{{$item->supplier}}</span></li>
                                @endif
                                <li><strong>Mô tả ngắn: </strong>
                                    <span class="short-des">
								{{$item->short_content}}
							    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@if ($category->count())
    @foreach ($category as $k => $category_item)
        @if ($category_item->children->count())
            <li class="liMenu liMega">
                <a href="/danh-muc/{{ $category_item->slug }}.html" class="" title="{{ $category_item->name }}">
                    <span>{{ $category_item->name }}</span> <i class="fa fa-angle-down"></i>
                </a>
                <div class="menuMega">
                    <div class="container">
                        <div class="siteMega">
                            <div class="row">
                                @foreach ($category_item->children as $i => $child)
                                    @if ($child->children->count())
                                    <div class="col-md-5 col-sm-12 col-xs-12 itemMega">
                                        <div class="head">
                                            <a href="/danh-muc/{{ $child->slug }}.html" class="" title="{{ $child->name }}"><span>{{ $child->name }}</span></a>
                                        </div>
                                        <ul class="megaListChild noStyle">
                                            @foreach ($child->children as $ii => $child_3)
                                            <li class="">
                                                <a href="/danh-muc/{{ $child_3->slug }}.html" title="{{ $child_3->name }}"><span>{{ $child_3->name }}</span></a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @else
                                    <div class="col-md-5 col-sm-12 col-xs-12 itemMega">
                                        <div class="head">
                                            <a href="/danh-muc/{{ $child->slug }}.html" class="" title="{{ $child->name }}"><span>{{ $child->name }}</span></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @else
            <li class="liMenu">
                <a href="/danh-muc/{{ $category_item->slug }}.html" title="{{ $category_item->name }}">{{ $category_item->name }}</a>
            </li>
        @endif
    @endforeach
@endif
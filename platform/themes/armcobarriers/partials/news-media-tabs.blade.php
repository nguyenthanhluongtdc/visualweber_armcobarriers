
<div class="tile" id="tile-1">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <div class="slider"></div>
        @foreach($menu_nodes as $key => $row)
            <li class="item">
                 <a class="nav-link {{$key==0?'active':''}}" id="tab-tab{!!$row->reference_id!!}" data-toggle="tab" href="#tab{!!$row->reference_id!!}" role="tab" aria-controls="tab{!!$row->reference_id!!}" aria-selected="true">           
                        {{ $row->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        @if(!empty($menu_nodes[0]))
            <div class="tab-pane fade show active" id="tab{{$menu_nodes[0]->reference_id}}" role="tabpanel" aria-labelledby="tab{{$menu_nodes[0]->reference_id}}-tab">
                <div class="item-row">
                    <div class="row ml-md-0 ml-sm-0 ml-xs-0 pr-md-0 pr-sm-0 pr-xs-0">
                        @foreach(get_posts_by_category($menu_nodes[0]->reference_id,12) as $new) 
                            <div class="col-lg-6 mb-md-line p0-md pr-md-0 pr-sm-0 pr-xs-0 mb-3">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-6 pr-0 mb-3 mb-sm-0">
                                        <a href="{{$new->url}}">
                                            <img class="mw-100" src="{{RvMedia::getImageUrl($new->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6 col-6">
                                        <h5> <a href="'.$new->slug.'"> {{$new->name}} </a> </h5>
                                        <div class="date"> {{$new->created_at->format('j F Y')}} </div>
                                        <p class="des">
                                            {{$new->description}} 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if(!empty($menu_nodes[1]))
            <div class="tab-pane fade active" id="tab{{$menu_nodes[1]->reference_id}}" role="tabpanel" aria-labelledby="tab{{$menu_nodes[1]->reference_id}}-tab">
                <div class="item-row">
                    <div class="row ml-md-0 ml-sm-0 ml-xs-0 pr-md-0 pr-sm-0 pr-xs-0">
                        @foreach(get_posts_by_category($menu_nodes[1]->reference_id,12) as $event) 
                            <div class="col-lg-6 mb-md-line p0-md pr-md-0 pr-sm-0 pr-xs-0 mb-3">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-6 pr-0 mb-3 mb-sm-0">
                                        <a href="{{$event->url}}">
                                            <img class="mw-100" src="{{RvMedia::getImageUrl($event->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6 col-6">
                                        <h5> <a href="{{$event->url}}"> {{$event->name}} </a> </h5>
                                        <div class="date"> {{$event->created_at->format('j F Y')}} </div>
                                        <p class="des">
                                            {{$event->description}} 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if(!empty($menu_nodes[2]))
            <div class="tab-pane fade" id="tab{{$menu_nodes[2]->reference_id}}" role="tabpanel" aria-labelledby="tab{{$menu_nodes[2]->reference_id}}-tab">
                <div class="box-media">
                    <div class="content">
                        <div class="row">
                            @foreach(get_posts_by_category($menu_nodes[2]->reference_id,9) as $media)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">
                                    <div class="item">
                                        <a href="{{$media->url}}">
                                            <img src="{{RvMedia::getImageUrl($media->image)}}" alt="">
                                            <h3> {{$media->name}} </h3>
                                        </a>
                                        <div class="options pt-0 pb-0">
                                            <div class="date my-0 text-left"> {{$media->created_at->format('j F Y')}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
                
                
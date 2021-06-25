<div class="services-detail-tabs main-scroll">
    <div class="left-tab-md tabs-scroll">
        <div class="container-customize">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @if($tabs_solutions = get_solutions())
                        @foreach($tabs_solutions as $key => $tab)
                            <a class="nav-item nav-link {{$key==0?'active':''}} " style="color:#000000" href="{{ $tab->url }}" title="{{ $tab->name }}">{{ $tab->name }} </a>
                        @endforeach
                    @endif
                </div>
            </nav>
        </div>
    </div>
</div>


<?php $item_sv = get_field($page, 'services')[0]  ?>
<div class="banner_section" style="background-image: url('{{ RvMedia::getImageUrl(get_sub_field($item_sv, 'picture')) }}')">
    <div class="container-customize">
        <h3 class="over_view"> {{ get_sub_field($item_sv, 'tabs_title') }} </h3>
        <div class="content">
            <?php $item_content =  get_sub_field($item_sv, 'description')[0] ?>
            <div class="desc">
                {!! get_sub_field($item_content, 'description_text') !!}
            </div>
            <?php if(!empty(get_sub_field($item_content, 'description_colum'))) { ?>
            <div class="dev_3_column">
                @foreach (get_sub_field($item_content, 'description_colum') as $item)
                   <div class="item_column">
                    <h5>{{ get_sub_field($item, 'title') }}</h5>
                    {!! get_sub_field($item, 'description') !!}
                   </div>
                @endforeach
            </div>
            <?php } ?>
        </div>
    </div>
   
</div>
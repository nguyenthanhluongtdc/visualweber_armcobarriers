<section>
    <div class="container-fluid-customize">
        <div class="tab-content" id="nav-tabContent">
            @foreach($tabs as $key => $tab)
                <div class="tab-pane fade {{$key==0?'active show':''}}" id="nav-tab{{$key}}" role="tabpanel" aria-labelledby="nav-tab{{$key}}-tab">
                    <section>
                        <div class="container-fluid-customize content ">
                            <div class="wrap-install" style="background-image: url({{ get_object_image(get_sub_field( $tab ,'picture'))}})">
                                <div class="container-customize">
                                    @foreach (get_sub_field($tab, 'description') as $item)
                                    <div class="install">
                                        <h2>{{get_sub_field($item,'title_text')}}</h2>
                                        <p>{!!has_sub_field($item,'description_text')!!}</p>
                                        <div class="row">
                                            @foreach (get_sub_field($item, 'description_colum') as $item1)
                                             <div class="col-md-3 col-sm-6 col-12">
                                                 <div class="system1">
                                                     <h2>{{get_sub_field($item1,'title')}}</h2>
                                                     <p>{!!has_sub_field($item1,'description')!!}</p>
                                                 </div>
                                             </div>
                                            @endforeach
                                         </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            @endforeach
        </div> 
    </div>
</section>
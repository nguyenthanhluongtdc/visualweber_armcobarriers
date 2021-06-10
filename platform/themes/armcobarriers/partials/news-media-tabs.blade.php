<?php 
    //function render
    function renderHTML($n, $ini, $menu_nodes) {

        if($ini==$n){
            return ;
        }

        switch($ini){
            case 0:
                echo    '<div class="tab-pane fade show active" id="tab'.$menu_nodes[$ini]->reference_id.'" role="tabpanel" aria-labelledby="home-tab">
                            <div class="item-row">
                                <div class="row ml-md-0 ml-sm-0 ml-xs-0 pr-md-0 pr-sm-0 pr-xs-0">
                                ';
                                    foreach(get_posts_by_category($menu_nodes[$ini]->reference_id,12) as $new) {
                                    echo    '<div class="col-lg-6 mb-md-line p0-md pr-md-0 pr-sm-0 pr-xs-0 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5 col-sm-6 col-6 pr-0 mb-3 mb-sm-0">
                                                        <a href="'.$new->url.'">
                                                            <img class="mw-100" src="'.RvMedia::getImageUrl($new->image).'" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7 col-sm-6 col-6">
                                                        <h5> <a href="'.$new->slug.'">'.$new->name.'</a> </h5>
                                                        <div class="date"> '.$new->created_at->format('j F Y').' </div>
                                                        <p class="des">
                                                            '.$new->description.' 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>';
                                    }
                                    
                                    echo '
                                </div>
                            </div>
                        </div>';
                break;

            case 1: 
                echo '<div class="tab-pane fade" id="tab'.$menu_nodes[$ini]->reference_id.'" role="tabpanel" aria-labelledby="profile-tab">Events</div>';
                break;

            case 2:

                echo '<div class="tab-pane fade" id="tab'.$menu_nodes[$ini]->reference_id.'" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="box-media">
                        <div class="content">
                            <div class="row">';
                            foreach(get_posts_by_category($menu_nodes[$ini]->reference_id,9) as $media){
                                echo '<div class="col-lg-4 col-md-4 col-sm-6 mb-5 mb-md-0">
                                    <div class="item">
                                        <a href="'.$media->url.'">
                                            <img src="'. RvMedia::getImageUrl($media->image) ,'" alt="">
                                            <h3> '.$media->name,' </h3>
                                        </a>
                                        <div class="options pt-0 pb-0">
                                            <div class="date my-0 text-left"> '.$media->created_at->format('j F Y'),' </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                            echo '</div>
                        </div>
                    </div>
                </div>';

                break;

            default:

            break;
        }

        return renderHTML($n, $ini+1, $menu_nodes);

    }

?>

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
        @php renderHTML(count($menu_nodes),0, $menu_nodes) @endphp
    </div>
</div>
                
                
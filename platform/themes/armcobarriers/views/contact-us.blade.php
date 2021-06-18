<section>
    <div class="container-fluid-customize">
        <div class="contact-banner" style="background-image:url({{ get_object_image(get_field($page,'picture'))}})">
        <div class="container-customize">
          <div class="title-contact">
            <h1>Contact Us</h1>
            <p>{{has_field($page ,'contact_us_desc') ? get_field($page ,'contact_us_desc'):''}}
            </p>
          </div>
        </div>
        <div>
      </div>
</section>
@includeIf("theme.armcobarriers::views.modules.breadcrumb")

<section>
    <div class="container-customize info-contact">
        {{-- <div class="row">
            <div class="col-md-8">
                <div class="list-group" id="list-tab" role="tablist">
                  @if(has_field($page,'contact_us_tabs'))
                  @foreach(get_field($page,'contact_us_tabs') as $key => $item_contact)
                  @if(has_sub_field($item_contact,'tabs_title'))
                      <a class="list-group-item list-group-item-action aos-init aos-animate {{ $key == 0 ? 'active' : '' }}" id="{{ Str::slug(get_sub_field($item_contact,'tabs_title')) }}" data-toggle="list" href="#{{  Str::slug(get_sub_field($item_contact,'tabs_title')) }}-content" role="tab" aria-controls="{{ Str::slug(get_sub_field($item_contact,'tabs_title')) }}" aria-selected="true">ARMCO®<br>
                          <span>{{has_sub_field($item_contact,'tabs_title') ? get_sub_field($item_contact,'tabs_title'):''}}</span> 
                      </a>
                  @endif
                  @endforeach
                  @endif
             
                </div>
            </div>
        </div>
        <div class="tab-content" id="nav-tab-content">
          @if(has_field($page,'contact_us_tabs'))
          @foreach(get_field($page,'contact_us_tabs') as $key => $item_contact)
       
         
          
          <div class=" tab-pane fade {{get_sub_field($item_contact,'tabs_title')=="Head Office" ? "active show":""}}" id="{{ Str::slug(get_sub_field($item_contact,'tabs_title')) }}-content" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="head-office">
              <code>
                {!!get_sub_field($item_contact,'content_tabs')!!} 
              </code>
                    
            </div>
          </div>
          @endforeach
          @endif
        </div> --}}
         {!!$page->content!!}
               
    <div class="let-talk">
      <h3>Let’s talk</h3>
      <div class="row">
         <div class="col-lg-4">
           <div class="contact_infomation">
            {!!get_field($page,'contact_information')!!} 
           </div>
           
         </div>
         <div class="col-lg-8">
          <div id="contact-form" class="form-horizontal form-contact-us">
            {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST']) !!}
                @if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
                    @if (session()->has('success_msg'))
                        <div class="alert alert-success">
                            <p>Send successfully</p>
                        </div>
                    @endif
                    @if (session()->has('error_msg'))
                        <div class="alert alert-danger">
                            <p>{{ session('error_msg') }}</p>
                        </div>
                    @endif
                    @if (isset($errors) && count($errors))
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span> <br>
                            @endforeach
                        </div>
                    @endif
                @endif
    
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                 
                  <input type="text" class="form-control" id="contact_name" placeholder="Full Name" name="name" value="{{ old('name') }}">
                  <input type="email" class="form-control" id="contact_email" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                
                  <input type="text" class="form-control" id="contact_phone" placeholder="Phone Number" name="phone" value="{{ old('phone') }}">
                  <input type="text" class="form-control" id="contact_address" placeholder="Address" name="address" value="{{ old('address') }}">
                </div>
              </div>
            </div>
            <div class="message form-group">
              <input class="form-control" placeholder="Message" name="content" id="contact_content">
            </div>
            <div class="policy custom-checkbox">
              <label class="customcheck">
                <input type="checkbox" checked="checked"><a href="" data-toggle="modal" data-target="#exampleModalLong">I have read and accept the Privacy Policy</a>
                <span class="checkmark"></span>
              </label>
              <button class="bsend-button" type="submit" value="SEND">
                  Submit
              </button>
              
            </div>
            {!! Form::close() !!}
    
          </div>
         </div>
      </div>
      
    </div>
    <div class="visit-title">
      <h3>Visit us</h3>
    </div>
  </div>
  
</section>
<div class="container-fluid-customize">
    <div class="map-location">
      <iframe src="{{has_field($page,'link_map') ? get_field($page,'link_map'):''}}" width="1920" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
   
  
</div>
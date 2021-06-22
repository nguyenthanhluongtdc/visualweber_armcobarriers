<section>
    <div class="container-fluid-customize">
        <div class="contact-banner" style="background-image:url({{ get_object_image(has_field($page,'image_banner_16240230432'))}})">
            <div class="container-customize">
                <div class="title-contact">
                    <h1> {{$page->name}} </h1>
                    <p>{{has_field($page ,'content_banner_16240230431')}}
                    </p>
                </div>
            </div>
        <div>
    </div>
</section>

@includeIf("theme.armcobarriers::views.modules.breadcrumb")

<section>
    <div class="content mb-5">
        <div class="container-customize">
            {!!$page->content!!}
        </div>
    </div>
</section>

<section>
    <div class="container-customize info-contact">
        <div class="let-talk pt-3">
            <h3>Request a Quotation</h3>
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
                            <input type="checkbox" checked="checked"><a href="{{route('public.single').get_slug_by_template('Privacy-policy')}}">I have read and accept the Privacy Policy</a>
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
</section>


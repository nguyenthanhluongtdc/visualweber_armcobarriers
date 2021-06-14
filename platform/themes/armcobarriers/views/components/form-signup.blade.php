

<div class="wrap-sign">
    <div class="info-me flex-wrap py-5">
        <div class="sign-up col-lg-3 col-12">
            <p>Sign up to receive the</p>
            <h3>latest insights</h3>
        </div>
        {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form form_sign col-lg-9 col-12 px-0']) !!}
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
         <div class="contact-form-group reinfo__form--group">
                
            <input type="text" class="contact-form-input" name="name" value="{{ old('name') }}" id="contact_name"
                   placeholder="Full name">
        </div>
        <div class="contact-form-group reinfo__form--group">
            
            <input type="email" class="contact-form-input" name="email" value="{{ old('email') }}" id="contact_email"
                placeholder="Your Email">
        </div>
        <div class="contact-form-group reinfo__form--group">
        
            <input type="text" class="contact-form-input" name="address" value="{{ old('address') }}" id="contact_address"
                placeholder="Your Company">
        </div>  
        <div class="submit-form">
            <button type="submit" class="contact-button">Sign Up</button>
        </div>
        {{-- <form action="#" method="POST" class="col-lg-9 col-12 px-0">
            <div class="form-flex-lg">
                <p class="col-lg-28 col-lg-6 col-12 my-2">
                    <input class="input__field" type="text" placeholder="Full Name">
                </p>
                <p class="col-lg-28 col-lg-6 col-12 my-2">
                    <input class="input__field " type="text" placeholder="Your Email">
                </p>
                <p class="col-lg-28 col-lg-6 col-12 my-2">
                    <input class="input__field " type="text" placeholder="Your Company">
                </p>
                <p class="col-lg-16 col-lg-6 col-12 my-2"> 
                    <button class="button__field" type ="submit">Sign Up</button>
                </p>
            </div>
        </form>  --}}
        {!! Form::close() !!}
    </div>
</div>

{{-- {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form col-lg-9 col-12 px-0']) !!}
<div class="contact-form-row form-flex-lg">
    <div class="col-lg-28 col-lg-6 col-12 my-2">
        <div class="contact-form-group reinfo__form--group">
            
            <input type="text" class="contact-form-input" name="name" value="{{ old('name') }}" id="contact_name"
                placeholder="Tên(*):">
        </div>
    </div>
    <div class="col-lg-28 col-lg-6 col-12 my-2">
        <div class="contact-form-group reinfo__form--group">
            
            <input type="email" class="contact-form-input" name="email" value="{{ old('email') }}" id="contact_email"
                placeholder="Email:">
        </div>
    </div>
</div>
<div class="col-lg-28 col-lg-6 col-12 my-2">
        <div class="contact-form-group reinfo__form--group">
        
            <input type="text" class="contact-form-input" name="address" value="{{ old('address') }}" id="contact_address"
                placeholder="Địa chỉ:">
        </div>  
</div>



@if (setting('enable_captcha') && is_plugin_active('captcha'))
    <div class="contact-form-row">
        <div class="contact-column-12">
            <div class="contact-form-group">
                {!! Captcha::display() !!}
            </div>
        </div>
    </div>
@endif


<div class="col-lg-28 col-lg-6 col-12 my-2">
    <button type="submit" class="contact-button">ĐĂNG KÝ</button>
</div>

<div class="contact-form-group">
    <div class="contact-message contact-success-message" style="display: none"></div>
    <div class="contact-message contact-error-message" style="display: none"></div>
</div>


{!! Form::close() !!} --}}

{{-- {!! do_shortcode('[contact-form][/contact-form]') !!} --}}
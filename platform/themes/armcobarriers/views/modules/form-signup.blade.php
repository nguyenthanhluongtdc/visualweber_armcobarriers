
<div class="wrap-sign">
    <div class="info-me flex-wrap py-5">
        <div class="sign-up col-lg-3 col-12">
            <p>Sign up to receive the</p>
            <h3>latest insights</h3>
        </div>
        <form action="{{ route('public.newsletter.subscribe') }}" method="POST" class="col-lg-9 col-12 px-0">
         @csrf
            <div class="form-flex-lg">
                <p class="col-lg-28 col-lg-6 col-12 my-2">
                    <input class="input__field" type="text" name="name" placeholder="Full Name">
                </p>
                <p class="col-lg-28 col-lg-6 col-12 my-2">
                    <input class="input__field " type="text" name="email" placeholder="Your Email">
                </p>
                <p class="col-lg-28 col-lg-6 col-12 my-2">
                    <input class="input__field " name="company" type="text" placeholder="Your Company">
                </p>
                <p class="col-lg-16 col-lg-6 col-12 my-2"> 
                    <button class="button__field" type ="submit">Sign Up</button>
                </p>
            </div>
        </form> 
    </div>
</div>

@if(session()->has('success_msg') || session()->has('error_msg') || isset($errors) && count($errors))
    <div class="animate slide-in-down notification-button active">
    <i class="fa fa-files-o"></i> 
        @if (session()->has('success_msg'))
            <span> {{ session('success_msg') }} </span>
        @endif
        @if (session()->has('error_msg'))
            <span>{{ session('error_msg') }}</span>
        @endif
        @if (isset($errors) && count($errors))
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span> <br>
            @endforeach
        @endif
    </div>
@endif

<script>
    let $notificationButton = $('.notification-button');

    function fadeOutNotification(){
        setTimeout(function(){
            $notificationButton.removeClass('active');
        }, 2000);
    }
    // bind events
    fadeOutNotification();
</script>
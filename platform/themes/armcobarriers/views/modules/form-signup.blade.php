
@php $message = ""; @endphp

@if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
    @if (session()->has('success_msg'))
       @php $message = section('success_msg'); @endphp
    @endif
    @if (session()->has('error_msg'))
        @php $message = section('error_msg'); @endphp
    @endif
    @if (isset($errors) && count($errors))
        @foreach ($errors->all() as $error)
             @php $message = $error; @endphp
        @endforeach
    @endif
@endif

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

@if($message)
    <div class="animate slide-in-down notification-button active">
        <i class="fa fa-files-o"></i> 
        {{$message}}
    </div>
@endif

<style>
/*fade*/
.animate {
    opacity: 0;
    transition: all 1s;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }
  
  .animate.active {
    opacity: 1;
    transform: translateX(-50%) translateY(-50%);
  }
  
  .slide-in-down {
    transform: translateY(-100%) translateX(-50%);
  }
  
  /*notification*/
  .notification-button {
    position: fixed;
    top: 40px;
    left: 50%;
    padding: 10px 20px;
    background: #FAD906;
    color: #000;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 800;
    box-shadow: 0 0 14px rgba(0, 0, 0, 0.05);
}
</style>
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
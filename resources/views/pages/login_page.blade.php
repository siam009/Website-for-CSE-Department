@extends('partials.master')

@section('afterNav')

<div class="pt-4"></div>
<div class="pt-4"></div>
<div class="container">
<div class="row">
	<div class="col-3"></div>
	<div class="col">

    <div idata-target="#login">
	<div  style="background: #d2daf1" id="login">   
          <h1>Welcome Back!</h1>
          
            <form action="/" method="post class="form-group-control>
            
              <div class="field-wrap">
                <label>
                  Email Address<span class="req">*</span>
                </label >
                <input type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
                <label>
                  Password<span class="req">*</span>
                </label>
                <input type="password"required autocomplete="off"/>
            </div>
            
            <p class="forgot"><a href="#">Forgot Password?</a></p>
            
            <button class="button button-block">Log In</button>
            
            </form>

     </div>
 </div>
 </div>
 <div class="col-3"></div>
</div>
</div>
        


@endsection
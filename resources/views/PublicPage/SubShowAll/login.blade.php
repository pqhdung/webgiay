@extends('PublicPage.showAll')
@section('main')


<section class="page-name-sec page-name-sec-01">

    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">Register / Login</h3><!-- /.page-title -->
       
        <div class="row">
          <div class="col-sm-7">
            <p class="description">
              Duis sed odio sit amet nibh vulputate cursus a sit amet. 
            </p><!-- /.description -->
          </div>
          
          <div class="col-sm-5">
            <ol class="breadcrumb text-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Register</li>
            </ol><!-- /.breadcrumb -->
          </div>
          
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->
                  @if($errors->any())
                   
                   <div style="color:red;font-size:30px;font-family:arial">
                       @foreach($errors->all() as $err) 
                       {{$err}}
                       @endforeach
                   </div>
                  
                   @endif 
                   @if (session('status'))
                  <ul>
                    <li class="text-danger"> {{ session('status') }}</li>
                  </ul>
                  @endif
  <section class="login-section">
  
    <div class="section-padding">
      <div class="container">
        <div class="row">

          <div class="col-md-5">
            <div class="sign-in bg-gray">
              <h2 class="title">Have an account? Log in</h2>
              
              <form class="sign-in-form" id="sign-in-form" action="{{ route('postlogin') }}" method="post">
                {{ csrf_field() }}
                <p class="form-input">
                  <input type="text" name="email" id="user_login" class="input" value="" placeholder="Username / Email" required/>
                  
                </p>
                <p class="form-input">
                  <input type="password" name="password" id="user_pass" class="input" value="" placeholder="Password" required/>
                  
                </p>
                <p class="form-input">
                  <input type="submit" name="wp-submit" id="wp-submit" class="btn" value="Sign In" />
                </p>
                <p class="checkbox pull-left">
                  <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                  Remember Me
                  <a href="#" class="pull-right" title="Recover Your Lost Password">Forgot password?</a>
                </p>
              </form>
              
              <div class="login-social">
                <button class="btn facebook">Sign in With Facebook</button>
                <button class="btn twitter">Sign in With Twitter</button> 
              </div><!-- /.login-social -->
            </div><!-- /.sign-in -->
          </div>
          
          <div class="col-md-7">
            <div class="sign-up">
              <h2 class="title">Get Registered <span></span></h2><!-- /.title -->
              <form class="signup-form" action="{{ route('postregister') }}" method="post">
              {{ csrf_field() }}
                <p class="form-input">
                {!!Form::text('firstname', '',array('class' => 'from-control','placeholder'=>'first name')) !!}
                </p>
                <p class="form-input">
                {!!Form::text('lastname', '',array('class' => 'from-control','placeholder'=>'last name')) !!}  
                </p>
                <p class="form-input">                                  
                 {!!Form::email('email', '',array('class' => 'from-control','placeholder'=>'email')) !!}
                </p>
                <p class="form-input">
                {!!Form::text('phone', '',array('class' => 'from-control','placeholder'=>'phone')) !!}
                </p>
                <p class="form-input">
                {!!Form::password('password',array('class' => 'from-control','placeholder'=>'password')) !!}
                </p>
                <p class="form-input">
                {!!Form::password('confirmpassword',array('class' => 'from-control','placeholder'=>'confirm password')) !!}
                </p>
                <p class="checkbox pull-left">
                  <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                  I agree the 
                  <a href="#"> terms and conditions</a>
                </p>
                <p class="submit-input pull-right">
                  {!! Form::submit('SIGN UP', array('class' => 'signup-form-submit')) !!}
                </p>
              </form>
              <div class="login-social">
                <button class="btn facebook">Register With Facebook</button>
                <button class="btn twitter">Register With Twitter</button> 
              </div><!-- /.login-social -->
            </div><!-- /.sign-up -->

          </div>
        </div><!-- /.row -->
      </div><!--/.container-->
    </div><!-- /.section-padding -->
  </section><!--/.login-section-->
  @endsection
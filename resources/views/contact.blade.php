@extends('layouts.layout')

@section('content')

<div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
  
  
      <!--Grid row-->
      <div class="row mb-4"> <!-- d-flex justify-content-center >

        <!--Grid column-->
        <div class="col-md-12 col-lg-6 text-center">
          <img class="img-fluid" src="{{ asset( '/images/undraw_contact_us_15o2.svg' ) }}" alt="#">
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-md-12 col-lg-6 text-center mt-3">
            
            <address>
                <a href="mailto:bellokeji19@gmail.com" class="font-weight-bold">bellokeji19@gmail.com</a> <br>
                <a href="mailto:me@mobello.dev" class="font-weight-bold">me@mobello.dev</a> <br>
            </address>            
  
            <p>The best place to find and reach me is on twitter <a href="https://twitter.com/mo_bello19" class="mx-1 cyan-text"><i>@mo_bello19</i></a>, really. But if you'll like to reach me via other means, feel free to contact me at the above email addresses or the 
                social media handles beneath.
            </p>
  
            <!--Facebook-->
            <a href="https://web.facebook.com/morenikeji.bello.39" class="mx-1 blue-text" role="button"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/mo_bello19" class="mx-1 cyan-text" role="button"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/morenikeji-bello/" class="mx-1 blue-text" role="button"><i class="fab fa-linkedin-in"></i></a>       
  
  
        </div>
        <!--Grid column-->
  
      </div>
      <!--Grid row-->
  
  
    </section>
    <!--Section: Content-->
  
  
  </div>

@endsection
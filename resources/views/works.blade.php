@extends('layouts.layout')

@section('content')

    <div class="card cyan white-text text-center mt-3">
        <h2>PROJECTS</h2>
    </div>

    <div class="my-5">

        <!-- Section: Block Content -->
        <section class="dark-grey-text text-center">
                
          <p class="text-muted w-responsive mx-auto mb-5">I always sort all my works into 4 categories. They are: <span class="blue-text">Contract</span>, <span class="red-text">Social Good</span>, <span class="orange-text">Personal</span>, <span class="green-text">Open Source</span>. You'll find each project
              attached with it's corresponding tag.
          </p>
      
          <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-md-4 mb-4">
      
              <div class="view overlay rounded z-depth-1">
                <img src="{{ asset( '/images/uptrybe.jpg' ) }}" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
      
              <div class="px-3 pt-3 mx-1 mt-1 pb-0">
                <a class="orange-text">
                  <h6 class="font-weight-bold mt-2 mb-3"><i class="fas fa-user-circle pr-2"></i>Personal</h6>
                </a>
                <h4 class="font-weight-bold mb-3">Uptrybe</h4>
                <p class="text-muted">Uptrybe is an online platform for user-generated quizzes/trivia. The app has a leaderboard for top ranking players, a player of the week section
                    and results are displayed to users with gif reactions.
                </p>

                <div class="mb-2">
                    <span class="badge badge-pill badge-light">Php</span>
                    <span class="badge badge-pill badge-light">Laravel</span>
                    <span class="badge badge-pill badge-light">Javascript/jQuery</span>
                    <span class="badge badge-pill badge-light">Materlize CSS</span>
                    <span class="badge badge-pill badge-light">Imgur Api</span>
                    <span class="badge badge-pill badge-light">Mailgun Api</span>
                </div>

                <a href="https://uptrybe.com" target="blank" class="btn btn-success btn-rounded btn-md"> See Live</a>
              </div>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-4 mb-4">
      
              <div class="view overlay rounded z-depth-1">
                <img src="{{ asset( '/images/theroyal.jpg' ) }}" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
      
              <div class="px-3 pt-3 mx-1 mt-1 pb-0">
                <a class="blue-text">
                  <h6 class="font-weight-bold mt-2 mb-3"><i class="fas fa-file-contract pr-2"></i>Contract</h6>
                </a>
                <h4 class="font-weight-bold mb-3">The Royal</h4>
                <p class="text-muted">The Royal Nigeria is an online gift card trading platform. I designed and built all functionalities for this project.
                    I also leveraged the Advanced Encryption Standard (AES) to protect users' sensitive data.
                </p>

                <div class="mb-2">
                    <span class="badge badge-pill badge-light">Php</span>
                    <span class="badge badge-pill badge-light">Laravel</span>
                    <span class="badge badge-pill badge-light">Materlize CSS</span>
                    <span class="badge badge-pill badge-light">Bootstrap</span>  
                    <span class="badge badge-pill badge-light">Javascript</span>   
                    <span class="badge badge-pill badge-light">Live Chat</span>   
                </div>

                <a href="https://theroyal.ng" target="blank" class="btn btn-success btn-rounded btn-md"> See Live</a>
              </div>
      
            </div>
            <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 mb-4">
      
                            <div class="view overlay rounded z-depth-1">
                              <img src="{{ asset( '/images/weatherly.jpg' ) }}" class="img-fluid" alt="Sample project image">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                    
                            <div class="px-3 pt-3 mx-1 mt-1 pb-0">
                              <a class="green-text">
                                <h6 class="font-weight-bold mt-2 mb-3"><i class="fas fa-code-branch pr-2"></i>Open Source</h6>
                              </a>
                              <h4 class="font-weight-bold mb-3">Weatherly</h4>
                              <p class="text-muted">An app for checking the weather of cities around the world via city name search or clicking on a map. This project is part of my time at the wejapa internship.
                              </p>
              
                              <div class="mb-2">
                                  <span class="badge badge-pill badge-light">Bootstrap</span>
                                  <span class="badge badge-pill badge-light">NodeJs</span>
                                  <span class="badge badge-pill badge-light">Javascript</span>
                                  <span class="badge badge-pill badge-light">OpenWeather api</span>  
                                  <span class="badge badge-pill badge-light">Google Maps Api</span>
                                  <span class="badge badge-pill badge-light">Git</span> 
                                  <span class="badge badge-pill badge-light">Heroku</span>                                  
                              </div>
              
                              <a href="https://wejapa-weatherly.herokuapp.com/" target="blank" class="btn btn-success btn-rounded btn-md"> See Live</a>
                              <a href="https://github.com/Moreneecoder/wejapa-weatherly" target="blank" class="btn btn-info btn-rounded btn-md"> See Code</a>
                            </div>
                    
                          </div>
                          <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </section>
        <!-- Section: Block Content -->


        <div class="card cyan lighten-4 pt-3 pb-2">
          <h3 class="cyan-text text-center"><i class="fas fa-cogs"></i> Watch This Space! More projects in the pipes.</h3>
        </div>
      
      
      </div>

@endsection
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

                <a href="https://uptrybe.com" target="_blank" class="btn btn-success btn-rounded btn-md"> See Live</a>
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

                <a href="https://theroyal.ng" target="_blank" class="btn btn-success btn-rounded btn-md"> See Live</a>
              </div>
      
            </div>
            <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 mb-4">
      
                            <div class="view overlay rounded z-depth-1">
                              <img src="{{ asset( '/images/Soccer-info-screen-shot.png' ) }}" class="img-fluid" alt="Sample project image">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                    
                            <div class="px-3 pt-3 mx-1 mt-1 pb-0">
                              <a class="green-text">
                                <h6 class="font-weight-bold mt-2 mb-3"><i class="fas fa-code-branch pr-2"></i>Open Source</h6>
                              </a>
                              <h4 class="font-weight-bold mb-3">SoccerInfo</h4>
                              <p class="text-muted">A micro-blogging platform where users air their opinion on football. Readers can upvote articles. There is a featured article section for the 
                              article with the most upvotes. There is also a section for Top Writer.
                              </p>
              
                              <div class="mb-2">
                                  <span class="badge badge-pill badge-light">Bootstrap</span>
                                  <span class="badge badge-pill badge-light">Ruby on Rails</span>
                                  <span class="badge badge-pill badge-light">Cloudinary Api</span>
                                  <span class="badge badge-pill badge-light">Shrine</span>  
                                  <span class="badge badge-pill badge-light">RSpec</span>
                                  <span class="badge badge-pill badge-light">Git</span> 
                                  <span class="badge badge-pill badge-light">Heroku</span>                               
                              </div>
              
                              <a href="https://soccerinfo.herokuapp.com/" target="_blank" class="btn btn-success btn-rounded btn-md"> See Live</a>
                              <a href="https://github.com/Moreneecoder/soccer-info" target="_blank" class="btn btn-info btn-rounded btn-md"> See Code</a>
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

          <a href="https://wejapa-weatherly.herokuapp.com/" target="_blank" class="btn btn-success btn-rounded btn-md"> See Live</a>
          <a href="https://github.com/Moreneecoder/wejapa-weatherly" target="_blank" class="btn btn-info btn-rounded btn-md"> See Code</a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 mb-4">
      
      <div class="view overlay rounded z-depth-1">
        <img src="{{ asset( '/images/Properteer.png' ) }}" class="img-fluid" alt="Sample project image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <div class="px-3 pt-3 mx-1 mt-1 pb-0">
        <a class="green-text">
          <h6 class="font-weight-bold mt-2 mb-3"><i class="fas fa-code-branch pr-2"></i>Open Source</h6>
        </a>
        <h4 class="font-weight-bold mb-3">Properteer</h4>
        <p class="text-muted">A responsive UI implentation for a property purchasing and leasing platform. Users can see homes and office placement to buy or rent. 
        The original UI design can be found <a href="https://www.behance.net/gallery/24796463/ZATTIX" target="_blank">here</a>.
        </p>

        <div class="mb-2">
            <span class="badge badge-pill badge-light">CSS</span>
            <span class="badge badge-pill badge-light">Bootstrap</span>
            <span class="badge badge-pill badge-light">Git</span> 
            <span class="badge badge-pill badge-light">Heroku</span>                                  
        </div>

        <a href="https://moreneecoder.github.io/properteer/" target="_blank" class="btn btn-success btn-rounded btn-md"> See Live</a>
        <a href="https://github.com/Moreneecoder/properteer" target="_blank" class="btn btn-info btn-rounded btn-md"> See Code</a>
    </div>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-4 mb-4">
      
      <div class="view overlay rounded z-depth-1">
        <img src="{{ asset( '/images/link-me-bot.png' ) }}" class="img-fluid" alt="Sample project image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <div class="px-3 pt-3 mx-1 mt-1 pb-0">
        <a class="green-text">
          <h6 class="font-weight-bold mt-2 mb-3"><i class="fas fa-code-branch pr-2"></i>Open Source</h6>
        </a>
        <h4 class="font-weight-bold mb-3">LinkMeUpBot</h4>
        <p class="text-muted">A micro social networking system built ontop of the Telegram Bot api. It connects private users who 
        shares the same interests and automatically exchange their chat links/usernames.
        </p>

        <div class="mb-2">
            <span class="badge badge-pill badge-light">Ruby</span>
            <span class="badge badge-pill badge-light">Telegram Bot Api</span>
            <span class="badge badge-pill badge-light">Telegram-Bot-Ruby Library</span>
            <span class="badge badge-pill badge-light">RSpec</span>  
            <span class="badge badge-pill badge-light">Git</span>                                
        </div>

        <a href="https://t.me/mvs_link_up_bot" target="blank" class="btn btn-success btn-rounded btn-md"> See Live</a>
        <a href="https://github.com/Moreneecoder/link-me-up-bot" target="blank" class="btn btn-info btn-rounded btn-md"> See Code</a>
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
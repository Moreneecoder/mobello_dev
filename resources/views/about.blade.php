@extends('layouts.layout')

@section('content')

<div class="card cyan white-text text-center mt-3">
    <h2>ABOUT ME</h2>
</div>

  <div class="row mt-3">
    <div class="offset-md-0 col-md-3 offset-sm-4 col-sm-4 offset-lg-1 col-lg-2 offset-4 col-4">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset( '/images/mobello.jpg' ) }}" alt="" class="img-fluid rounded-circle">
            </div>

            <div class="col-12 text-center mt-2">                
                    <a href="https://twitter.com/mo_bello19"><i class="fab fa-twitter-square cyan-text" style="font-size: 1.5em"></i></a> &nbsp;
                    <a href="https://www.linkedin.com/in/morenikeji-bello/"><i class="fab fa-linkedin blue-text" style="font-size: 1.5em"></i></a> &nbsp;                    
                    <a href="https://github.com/moreneecoder"><i class="fab fa-github-square black-text" style="font-size: 1.5em"></i></a>                
            </div>
        </div>        
        
    </div>

    <div class="card col-12 col-md-9 col-lg-8 mt-2">
        <div class="card-content p-2">
            I'm a Software Engineer living in Lagos, Nigeria. I have experience with  backend development and quite proficient with frontend development. So guess I am a Fullstack Engineer!
            I built <a class="cyan-text" href="https://uptrybe.com" target="blank">Uptrybe</a>, an online platform for user-generated quizzes/trivia (You should really check it out). I'm currently
            also part of the team building <i>Oradun Radio</i>, an indigenious internet radio/media. I'll be spending 2021 as a fulltime software engineering student of the <a class="cyan-text" href="https://microverse.org" target="blank">Microverse Global School.</a>
            <br>
            
            <h4 class="cyan-text mt-3"><strong>My Dev Journey</strong></h4>

            <p>
                I decided to foray into the tech world in 2016. I enrolled for the Advanced Diploma In Software Engineering (ADSE) program at Aptech Computer Institute, an Indian school with a strong presence in my home country, Nigeria.

                In just my 3rd semester as an Aptech student, I got a paid internship at <a class="cyan-text" href="https://heathwaytech.com" target="blank">Heathway Technologies</a>, a local startup that has <a class="cyan-text" href="http://www.nervsuite.com" target="blank">NervSuite</a>, an online book-keeping app, as it's flagship product.
            </p>  

            <p>
                At heathway, I accelerated my learning and was an active partaker in the Continous Development and Training Program (CODTRAP), an internal development program for all heathway staff. I also worked on the websites of <a class="cyan-text" href="https://careertransitioners.com" target="blank">Career Transitioners</a>, an online training platform for professionals
                and <a class="cyan-text" href="https://glaziang.com/luxury-lingerie-brand-mikaifer-lux-comes-nigeria" target="blank">Mikaifer Lux</a>, a now defunct Nigerian lingerie brand.
            </p>

            <p>After my time at Heathway, a friend and I tried to build a fintech startup that tanked in epic fashion. I'll talk more on this and the wonderful lessons I learnt if you and I ever get to meet.</p>

            <p>I built <a class="cyan-text" href="https://uptrybe.com" target="blank">Uptrybe</a>, a platform that let users create and explore short quizzes in fun ways, and I currently oversee it's continued growth (engineering, content, outreach). I am also currently handling the tech side of things at <i>OradunRadio</i>, a soon-to-launch indigenious internet radio/media. You can find some my other works <a class="cyan-text" href="/craft">here</a>.</p>

            <p>I have touched on many programming languages and technologies, including C, Java and C#, but the ones that really stuck have been Php/Laravel and Javascript/NodeJs.</p>

            <h4 class="cyan-text">OUTSIDE TECH</h4>

            Apart from Software dev, I am a Video Editor and sometimes, a Poet/Lyricist. You can find me spitting bars <a class="cyan-text" href="https://www.instagram.com/p/ByBUBbWhb9H/?utm_source=ig_web_copy_link" target="blank">here</a> and <a class="cyan-text" href="https://www.instagram.com/tv/B8A_3QQHDCJ/?utm_source=ig_web_copy_link" target="blank">here</a>! I have also started active jogging and it's going well than I thought. My current best record is 3.15 miles (5km) in 36 minutes. <a class="cyan-text" target="blank" href="https://drive.google.com/file/d/1z2r3uILoGiI4v3H-IiFfp1SsnVlkGzWd/view?usp=sharing">See record here.</a> In a parallel universe, I am a very popular footballer with over 250 career goals and a huge fanbase (please, don't laugh!). Lastly, I'm a GRINNER!

        </div>
    </div>
  </div>

    
@endsection
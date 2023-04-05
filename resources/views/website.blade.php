<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
      - primary meta tags
    -->
    <title>Kane Williams - Web & App Developer</title>
    <meta name="title" content="Kane Williams - Web & App Developer">
    <meta name="description" content="This is a personal portfolio html template made by codewithsadee">

    <!--
      - favicon
    -->

    <link rel="shortcut icon" href="{{asset('website/assets/favicon.svg')}}" type="image/svg+xml">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">

    <!--
      - preload images
    -->
    <link rel="preload" as="image" href="{{asset('website/assets/images/hero-banner.jpg')}}">

</head>

<body>

<!--
  - #PRELOADER
-->

<div class="preloader" data-preloader>
    <div class="circle"></div>
</div>
<!--
  - #HEADER
-->
<header class="header" data-header>
    <div class="container">

        <a href="#" class="logo">
            <img src="{{asset('website/assets/images/logo.svg')}}" width="170" height="40" alt="Pfolio home">
        </a>

        <button class="nav-toggle-btn" data-nav-toggler data-nav-toggle-btn aria-label="Toggle menu">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
        </button>

        <nav class="navbar" data-navbar>
            <ul class="navbar-list">

                <li>
                    <a href="{{'#home'}}" class="navbar-link">Home</a>
                </li>

                <li>
                    <a href="{{'#about'}}" class="navbar-link">about</a>
                </li>
                <li>
                    <a href="{{'#education'}}" class="navbar-link">education</a>
                </li>

                <li>
                    <a href="{{'#skills'}}" class="navbar-link">skills</a>
                </li>
                <li>
                    <a href="{{'#experience'}}" class="navbar-link">experience</a>
                </li>

                <li>
                    <a href="{{'#projects'}}" class="navbar-link">projects</a>
                </li>
                <li>
                    <a href="{{'#cv'}}" class="navbar-link">Resume</a>
                </li>
                <li>
                    <a href="{{'#contact'}}" class="navbar-link">Contact</a>
                </li>

            </ul>
        </nav>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>
<main>
    <article>
        <!--
          - #HERO
        -->
        <section class="section hero" id="home" aria-label="home">
            <div class="container">

                <div class="hero-content">
@foreach($homes as $home)
                    <h1 class="h1 hero-title">{{$home->name}}</h1>
<br>
                    <h2 class="hero-subtitle">
                        @Welcome
                        I'm a <span style="color: red; font-size: 19px">{{$home->title}}</span>
                        I devoleped web applications and dynamic website
                        this is my portfolio hope you like it.

                    </h2>

                    <div class="hero-banner">
                        <img src="{{ asset('admin/img/home/' . $home->image) }}" width="800" height="800" alt="kane williams" class="w-100">
                    </div>
                    @endforeach
                    <ul class="social-list" style="margin-bottom: 50px;margin-left: 150px">
@foreach($contacts as $contact)
                        <li>
                            <a href="{{$contact->email}}" class="social-link">
                                <ion-icon name="logo-github"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="{{$contact->instagram}}" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="{{$contact->facebook}}" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="{{$contact->linkedin}}" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>

            </div>
        </section>
        <!--
          - #About
        -->
        <section class="service" id="about" aria-labelledby="service-label">
            <div class="container">

                <div class="title-wrapper">

                    <div>
                        <h2 class="h2 section-title" id="about" >About</h2>
                    </div>

@foreach($abouts as $about)
                    <h4 class="section-text" style="padding-top: 100px;">
                        {{$about->description}}
                    </h4>
                    @endforeach
                </div>
            </div>
        </section>
        <!--
        #education
        -->
        <section class="section blog" id="education" aria-labelledby="blog-label">
            <div class="container">

                <h2 class="h2 section-title" id="about"  >Education</h2>

                <h3 class="section-text">
                    Graduated from faculty of computer science ,  Helwan University (2019 - 2023).
                    <br> Information Science department.
                    <br> Grade: Very good .(GPA : 3.11)
                </h3>
            </div>
        </section>
        <!--
          - #SKILLS
        -->
        <section style="padding-top: 10px;" class="section skills" id="skills" aria-label="our skills">
            <div class="container">

                <h2 class="h2 section-title">Skills</h2>
                <div class="skills-wrapper">
                    <div>
                        <ul class="skills-list">
                            @foreach($skills as $skill)
                                <li>
                                    <div class="progress-wrapper">
                                        <p class="progress-label">{{$skill->name}}</p>

                                        <data class="progress-value" value="90">{{$skill->value}}%</data>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress" style="width:{{$skill->value}}%;"></div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>

            </div>
        </section>
        <!--
           - #experience
        -->
        <section class="section skills" id="experience" aria-label="our skills">
            <div class="container">
                <h2 class="h2 section-title">Experience</h2>

                <div class="skills-wrapper">
                    <div>
                        <ul class="skills-list">
                            @foreach($experiences as $experience)
                                <li>
                                    <div style="float:left;margin-bottom: 40px;">
                                        <div class="row" style="float:left; display:inline;">
                                            <h2 style="float:left; display:inline;">{{$experience->name}}.</h2>
                                            <h4 style="float:left;color: #1a73e8; display:inline;">({{$experience->title}})</h4>
                                        </div>
                                        <div style="float:left;margin-left: 30px;color: white">
                                            <h3>{{$experience->company}}</h3>
                                            <h3>{{$experience->start}} - {{$experience->end}}</h3>
                                        </div>

                                    </div>

                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>

            </div>
        </section>
        <!--
          - #Projects
        -->
        <section class="portfolio" id="projects" aria-labelledby="portfolio-label">

            <div class="title-wrapper container">

                <div>
                    <p class="section-subtitle" id="portfolio-label">My Work</p>

                    <h2 class="h2 section-title">Projects</h2>
                </div>

            </div>

            <div class="slider" data-slider>

                <ul class="slider-container" data-slider-container>
@foreach($projects as $project)
                    <li class="slider-item">
                        <div class="portfolio-card img-holder">
                            <img src="{{asset('admin/img/project/'.$project->image)}}" width="600" height="600" loading="lazy" alt="portfolio"
                                 class="img-cover">
                            <div class="card-content">
                                <h3 class="h3 card-title">{{$project->name}}</h3>
                                <p style="color: red" class="card-text">{{$project->tools}}</p>
                            </div>
                            <a href="{{$project->link}}" title="click to github" class="layer-link"></a>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <div class="slider-controls">
                    <button class="slider-control prev" data-slider-prev aria-label="Slide to previous item">
                        <div class="line"></div>
                        <div class="arrow"></div>
                    </button>

                    <button class="slider-control next" data-slider-next aria-label="Slide to next item">
                        <div class="line"></div>
                        <div class="arrow"></div>
                    </button>
                </div>

            </div>

        </section>
        <!--
          - #Download CV
        -->
        <section class="section blog" id="cv" aria-labelledby="blog-label">
            <div class="container">

                <h2 class="h2 section-title">Download CV</h2>


                        <div class="blog-card" >
                            <div class="card-content">

                                <div style="margin-left: 50%">
                                    @foreach($homes as $home)
                                    <a href="{{route('downloadcv',$home->cv)}}" class="btn has-before">
                                        <span class="span">Download CV</span>
                                        <ion-icon name="download-outline" aria-hidden="true"></ion-icon>
                                    </a>
                                    @endforeach
                                </div>
                                    </div>
                                </div>
                        </div>
        </section>

        <section class="section blog" id="contact" aria-labelledby="blog-label">
            <div class="container">

                <h2 class="h2 section-title">CONTACT</h2>

                <ul class="blog-list">

                    <li>
                        <div class="blog-card">

                            <div class="card-content">
                                <div>
                                    <h2 class="h3 card-title">Let’s get in touch.</h2>
@foreach($contacts as $contact)
                                    <h3 class="card-text">
                                       {{$contact->description}}
                                    </h3>
                                     <div>
    <table>
        <tr>
            <th style="font-size: 23px">phone:</th>
           <td>
               <div aria-label="Basic example">
                   <a style="color: white ;font-size: 22px" href="{{$contact->phone}}">+2 {{$contact->phone}}</a>
               </div>
           </td>

        </tr>
        <tr>
            <th style="font-size: 23px">gmail:</th>
            <td>
                <div aria-label="Basic example">
                    <a style="color: white;font-size: 22px" href="mailto:{{$contact->gmail}}">{{$contact->gmail}}</a>
                </div>
            </td>
        </tr>
        <tr>
            <th style="font-size: 23px">facebook:</th>
            <td>
                <div aria-label="Basic example">
                    <a style="color: white;font-size: 22px" href="{{$contact->facebook}}">{{$contact->facebook}}</a>
                </div>
            </td>
       </tr>
        <tr>
            <th style="font-size: 23px">github:</th>
            <td>
                <div aria-label="Basic example">
                    <a style="color: white;font-size: 22px" href="{{$contact->github}}">{{$contact->github}}</a>
                </div>
            </td>
        </tr>
    </table>
</div>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                    </li>

                </ul>

            </div>
        </section>

    </article>
</main>
<!--
  - #FOOTER
-->

<footer class="footer">
    <div class="container">

        <ul class="footer-list">

            <li>
                <p class="h4 footer-list-title">Get in touch</p>
            </li>

            <li>
                <a href="mobileto:01027401686" class="footer-link">+2 01027401686</a>
                <a href="mailto:akotysaber24@gmail.com" class="footer-link">akotysaber24@gmail.com</a>
            </li>

        </ul>

        <ul class="footer-list">

            <li>
                <p class="h4 footer-list-title">Locations</p>
            </li>

            <li>
                <a href="#" class="footer-link">Giza — Egypt</a>
            </li>

        </ul>

        <ul class="social-list">
            @foreach($contacts as $contact)

            <li>
                <a href="{{$contact->facebook}}" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>

            <li>
                <a href="{{$contact->instagram}}" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>

            <li>
                <a href="{{$contact->github}}" class="social-link">
                    <ion-icon name="logo-github"></ion-icon>
                </a>
            </li>

            <li>
                <a href="{{$contact->linkedin}}" class="social-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>
            @endforeach
        </ul>

    </div>
    <p style="text-align: center ;margin-top: 30px;margin-bottom: 0" class="copyright">
        Copyright &copy; 2021 Mohamed Saber. All Rights Reserved.
    </p>
</footer>
<!--
  - custom js link
-->
<script src="{{asset('website/assets/js/script.js')}}"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
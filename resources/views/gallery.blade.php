@extends('layouts.app')

@section('content')


  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    

<body>
  <div class="cd-svg-clipped-slider" data-selected="M800,0c-60,0-348.815,0-400,0C348.816,0,43.667,0,0,0c0,40.667,0,348.815,0,400c0,51.185,0,335,0,400
  c75,0,348.815,0,399.999,0C451.184,800,734,800,800,800c0-67,0-348.815,0-399.999C800,348.816,800,62,800,0z" data-lateral="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441
  C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760
  c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z">
    
    <div class="gallery-wrapper">
      <ul class="gallery">
        <li class="left">
          <div class="svg-wrapper">
            <svg viewBox="0 0 800 800">
              <title>Animated SVG</title>
              <defs>
                <clipPath id="cd-image-1">
                  <path id="cd-morphing-path-1" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                </clipPath>
              </defs>
              
              <image height='800px' width="800px" clip-path="url(#cd-image-1)" xlink:href="img/gakuo.jpg"></image>
              <use xlink:href="#cd-morphing-path-1" class="cover-layer" />
            </svg>
          </div> <!-- .svg-wrapper -->
        </li>

      <li class="selected">
          <div class="svg-wrapper">
            <svg viewBox="0 0 800 800">
              <title>Animated SVG</title>
              <defs>
                <clipPath id="cd-image-2">
                  <path id="cd-morphing-path-2" d="M800,0c-60,0-348.815,0-400,0C348.816,0,43.667,0,0,0c0,40.667,0,348.815,0,400c0,51.185,0,335,0,400 c75,0,348.815,0,399.999,0C451.184,800,734,800,800,800c0-67,0-348.815,0-399.999C800,348.816,800,62,800,0z"/>
                </clipPath>
              </defs>
              
              <image height='800px' width="800px" clip-path="url(#cd-image-2)" xlink:href="img/alumni.png"></image>
              <use xlink:href="#cd-morphing-path-2" class="cover-layer" />
            </svg>
          </div> <!-- .svg-wrapper -->
        </li>

        <li class="right">
          <div class="svg-wrapper">
            <svg viewBox="0 0 800 800">
              <title>Animated SVG</title>
              <defs>
                <clipPath id="cd-image-3">
                  <path id="cd-morphing-path-3" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                </clipPath>
              </defs>
              
              <image height='800px' width="800px" clip-path="url(#cd-image-3)" xlink:href="img/gang.jpg"></image>
              <use xlink:href="#cd-morphing-path-3" class="cover-layer" />
            </svg>
          </div> <!-- .svg-wrapper -->
        </li>

        <li>
          <div class="svg-wrapper">
            <svg viewBox="0 0 800 800">
              <title>Animated SVG</title>
              <defs>
                <clipPath id="cd-image-4">
                  <path id="cd-morphing-path-4" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                </clipPath>
              </defs>
              
              <image height='800px' width="800px" clip-path="url(#cd-image-4)" xlink:href="img/img-04.jpg"></image>
              <use xlink:href="#cd-morphing-path-4" class="cover-layer" />
            </svg>
          </div> <!-- .svg-wrapper -->
        </li>

        <li>
          <div class="svg-wrapper">
            <svg viewBox="0 0 800 800">
              <title>Animated SVG</title>
              <defs>
                <clipPath id="cd-image-5">
              <path id="cd-morphing-path-5" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                </clipPath>
              </defs>
              
              <image height='800px' width="800px" clip-path="url(#cd-image-5)" xlink:href="img/board.jpg"></image>
              <use xlink:href="#cd-morphing-path-5" class="cover-layer" />
            </svg>
          </div> <!-- .svg-wrapper -->
  </li>
      </ul>
      
      <nav>
        <ul class="navigation">
          <li><a href="#0" class="prev">Prev</a></li>
          <li><a href="#0" class="next">Next</a></li>
        </ul>
      </nav>
    </div> <!-- .gallery-wrapper -->

    <ul class="caption">
      <li class="left">Rose Gakuo an Alumni of Laikipia Rocking the Media Realm at The Governments' KBC Kenya's Watching</li>
      <li class="selected">The previous Graduation Ceremony</li>
      <li class="right"></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  </body> <!-- .cd-svg-clipped-slider -->
<script src="js/modernizr-custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
<script src="js/snap.svg-min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->


<footer class="footer-distributed">
<div class="footer-left">
        <h3>Laikpia<span>logo</span></h3>
                <p class="footer-links">
          <a href="#">Home</a>  ·
          <a href="#">something</a>
          <a href="#">something</a>
          <a href="#">About</a>
          <a href="#">Faq</a>
                    <a href="#">Contact</a>
        </p>
<p class="footer-company-name">Company Name &copy; 2015</p>
      </div>
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span></span> Kenya, Nyahururu</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+254727222889</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="">AlumniLaikipia.com</a></p>
        </div>

      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the Alumni</span>
          About Alumni
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </div>
      </div>
    </footer>
    @endsection
    <link href="css/main.css" rel="stylesheet">
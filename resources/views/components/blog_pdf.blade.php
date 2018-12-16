<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css">
body {
  background: #fff;
  font-family: "Josefin Sans", arial, sans-serif;
  font-weight: 300;
  font-size: 18px;
  line-height: 1.9;
  color: #6c757d;
}

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5 {
  color: #000;
  font-family: "Josefin Sans", arial, sans-serif;
}

header {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 5;
  font-weight: 400;
  background: #fff !important;
}

header .navbar-brand {
  text-transform: uppercase;
  letter-spacing: .2em;
  font-weight: 400;
  color: #fff !important;
}

header .navbar-collapse {
  position: relative;
}

header .navbar {
  padding-top: 0;
  padding-bottom: 0;
  background: transparent !important;
}

@media (max-width: 767.98px) {
  header .navbar {
    background: #e6e6e6 !important;
  }
}

header .navbar .navbar-nav.absolute-right {
  position: absolute;
  right: 0;
}

@media (max-width: 991.98px) {
  header .navbar .navbar-nav.absolute-right {
    position: relative;
    right: inherit;
  }
}

header .navbar .nav-link {
  padding: 1.7rem 1rem;
  font-size: 13px;
  outline: none !important;
  text-transform: uppercase;
  letter-spacing: .05em;
}

@media (max-width: 991.98px) {
  header .navbar .nav-link {
    padding: 1.7rem 1rem;
  }
}

@media (max-width: 767.98px) {
  header .navbar .nav-link {
    padding: .5rem 0rem;
  }
}

header .navbar .dropdown-menu {
  font-size: 14px;
  border-radius: 0px;
  border: none;
  -webkit-box-shadow: 0 2px 30px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 30px 0px rgba(0, 0, 0, 0.2);
  min-width: 13em;
  margin-top: -10px;
}

header .navbar .dropdown-menu:before {
  bottom: 100%;
  left: 10%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #fff;
  border-width: 10px;
}

@media (max-width: 1199.98px) {
  header .navbar .dropdown-menu:before {
    display: none;
  }
}

header .navbar .dropdown-menu .dropdown-item:hover {
  background: #007bff;
  color: #fff;
}

header .navbar .dropdown-menu .dropdown-item.active {
  background: #007bff;
  color: #fff;
}

header .navbar .dropdown-menu a {
  padding-top: 7px;
  padding-bottom: 7px;
}

.absolute-toggle {
  position: absolute;
  left: 15px;
  top: 5px;
}

.absolute-toggle .burger-lines {
  width: 30px;
  display: inline-block;
  height: 2px;
  background: #000;
  position: relative;
}

.absolute-toggle .burger-lines:before, .absolute-toggle .burger-lines:after {
  position: absolute;
  height: 2px;
  content: "";
  background: #000;
  width: 100%;
  left: 0;
}

.absolute-toggle .burger-lines:before {
  top: -10px;
}

.absolute-toggle .burger-lines:after {
  bottom: -10px;
}

.site-logo a {
  color: #000;
  font-size: 90px;
}

@media (max-width: 991.98px) {
  .site-logo a {
    font-size: 40px;
  }
}

.top-bar {
  background: #000;
  padding: 10px 0;
}

.top-bar .social a, .top-bar .search-icon a {
  color: #fff;
  opacity: .5;
  padding: 5px;
}

.top-bar .social a:hover, .top-bar .search-icon a:hover {
  opacity: 1;
}

.top-bar .social {
  text-align: left;
}

.top-bar .search-icon {
  text-align: right;
}

.navbar > .container {
  border-bottom: 1px solid #e6e6e6;
}

@media (max-width: 767.98px) {
  .navbar > .container {
    border-bottom: none;
  }
}

.category {
  display: inline-block;
  background: #007bff;
  padding: 2px 8px;
  line-height: 1.5;
  font-size: 12px;
  border-radius: 4px;
  text-transform: uppercase;
  color: #fff !important;
  margin-right: 10px;
}

.a-block {
  display: block;
  background-size: cover;
  background-position: center center;
  padding: 30px;
  position: relative;
  margin-bottom: 30px;
  height: 300px;
}

.a-block.height-lg {
  height: 500px;
}

.a-block.height-md {
  height: 400px;
}

.a-block:before {
  background: #000;
  position: absolute;
  content: "";
  z-index: 1;
  opacity: .3;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.a-block .text {
  position: relative;
  z-index: 2;
  max-width: 100%;
}

.a-block .text.half-to-full {
  max-width: 50%;
}

@media (max-width: 767.98px) {
  .a-block .text.half-to-full {
    max-width: 100%;
  }
}

.a-block .text .post-meta {
  color: #fff;
  text-transform: uppercase;
  letter-spacing: .1em;
  font-size: 13px;
  margin-bottom: 30px;
}

.a-block .text h3 {
  color: #fff;
  border: 1px solidi red;
}

.a-block .text p {
  color: #fff;
}

.a-block:hover:before {
  opacity: .4;
}

.bio {
  padding: 15px;
  background: #fff;
  border: 1px solid #e6e6e6;
  font-weight: 400;
}

.bio img {
  max-width: 100px;
  margin-top: -4em;
  border-radius: 50%;
  position: relative;
  margin-bottom: 30px;
}

.bio h2 {
  font-size: 20px;
}

.bio .bio-body .social a {
  color: #000;
}

.site-hero {
  background-size: cover;
  background-position: center center;
  min-height: 750px;
  height: 100vh;
}

.site-hero a {
  color: #fff;
  opacity: .5;
}

.site-hero a:hover {
  opacity: 1;
}

.site-hero .post-meta {
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: .2em;
}

.site-hero h1, .site-hero p {
  color: #fff;
  line-height: 1.5;
}

.site-hero h1 {
  text-transform: uppercase;
  font-size: 60px;
  font-weight: 900;
  line-height: 1.2;
  margin-bottom: 30px;
}

.site-hero .lead {
  font-size: 30px;
  color: #fff;
  opacity: .8;
  margin-bottom: 30px;
  font-weight: 300;
}

.site-hero > .container {
  position: relative;
  z-index: 2;
}

.site-hero.overlay {
  position: relative;
}

.site-hero.overlay:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  width: 100%;
  z-index: 1;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.site-hero .site-hero-inner {
  min-height: 750px;
  height: 100vh;
}

.box {
  padding: 30px;
  background: #fff;
}

.episodes .episode a {
  color: #000;
}

.episodes .episode a:hover {
  opacity: .7;
}

.episodes .meta {
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: .2em;
  color: #cccccc;
}

.episodes .episode-number {
  border: 2px solid #0062cc;
  text-align: center;
  display: inline-block;
  width: 80px;
  height: 80px;
  text-transform: uppercase;
  line-height: 74px;
  border-radius: 50%;
  background: #007bff;
  color: #fff;
  font-size: 30px;
}

.site-hero-innerpage, .site-hero-innerpage .site-hero-inner {
  min-height: 550px;
  height: 50vh;
}

.site-section {
  padding: 7em 0;
}

.site-section.py-md {
  padding: 3em 0;
}

.site-section.py-sm {
  padding: 0em 0;
}

.school-features,
.school-instructors {
  background-size: cover;
  background-position: center center;
  position: relative;
  overflow: hidden;
}

@media (min-width: 576px) {
  .school-features,
  .school-instructors {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
}

@media (min-width: 576px) {
  .school-features .inner,
  .school-instructors .inner {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
}

.school-features .feature, .school-features .instructor,
.school-instructors .feature,
.school-instructors .instructor {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

@media (min-width: 576px) {
  .school-features .feature, .school-features .instructor,
  .school-instructors .feature,
  .school-instructors .instructor {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
}

@media (min-width: 768px) {
  .school-features .feature, .school-features .instructor,
  .school-instructors .feature,
  .school-instructors .instructor {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
}

@media (min-width: 992px) {
  .school-features .feature, .school-features .instructor,
  .school-instructors .feature,
  .school-instructors .instructor {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
    padding: 30px;
    border-right: 1px solid rgba(255, 255, 255, 0.1);
  }
}

.school-features .feature h3, .school-features .instructor h3,
.school-instructors .feature h3,
.school-instructors .instructor h3 {
  font-size: 18px;
  color: #fff;
}

.school-features .feature p, .school-features .instructor p,
.school-instructors .feature p,
.school-instructors .instructor p {
  color: #fff;
  opacity: .5;
}

.school-features .feature img, .school-features .instructor img,
.school-instructors .feature img,
.school-instructors .instructor img {
  width: 100px;
  border-radius: 50%;
  margin: 0 auto;
}

.school-features .feature .icon > span:before, .school-features .instructor .icon > span:before,
.school-instructors .feature .icon > span:before,
.school-instructors .instructor .icon > span:before {
  font-size: 50px;
  margin-left: 0;
  color: #fff;
}

.school-features.text-dark.last,
.school-instructors.text-dark.last {
  border-bottom: none;
}

.school-features.text-dark.last .feature,
.school-instructors.text-dark.last .feature {
  border-bottom: none;
}

@media (min-width: 992px) {
  .school-features.text-dark .feature,
  .school-instructors.text-dark .feature {
    border-right: 1px solid #e6e6e6;
    border-bottom: 1px solid #e6e6e6;
  }
}

.school-features.text-dark .feature:last-child,
.school-instructors.text-dark .feature:last-child {
  border-right: none;
}

.school-features.text-dark .feature h3,
.school-instructors.text-dark .feature h3 {
  font-size: 18px;
  color: #000;
}

.school-features.text-dark .feature p,
.school-instructors.text-dark .feature p {
  color: #000;
  opacity: .5;
}

.school-features.text-dark .feature p:last-child,
.school-instructors.text-dark .feature p:last-child {
  margin-bottom: 0;
}

.school-features.text-dark .feature .icon > span:before,
.school-instructors.text-dark .feature .icon > span:before {
  font-size: 50px;
  margin-left: 0;
  color: #007bff;
}

.img-bg {
  background-size: cover;
}

@media (max-width: 991.98px) {
  .img-md-fluid {
    max-width: 100%;
  }
}

.section-cover {
  background-size: cover;
  position: relative;
  background-position: top left;
}

.section-cover, .section-cover .intro {
  height: 500px;
}

.section-cover p {
  color: #fff;
}

.section-cover h2 {
  color: #fff;
}

.blog-entries .blog-entry {
  display: block;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  margin-bottom: 30px;
}

.blog-entries .blog-entry:hover, .blog-entries .blog-entry:focus {
  opacity: .7;
}

.blog-entries .blog-entry .blog-content-body {
  padding: 20px;
  border: 1px solid #efefef;
  border-top: none;
}

.blog-entries .blog-entry img {
  max-width: 100%;
}

.blog-entries .blog-entry h2 {
  font-size: 18px;
  line-height: 1.5;
}

.blog-entries .blog-entry p {
  font-size: 13px;
  color: gray;
}

.blog-entries .post-meta {
  margin-bottom: 20px;
  color: #b3b3b3;
}

.instructor-meta {
  margin-bottom: 10px;
  color: #999999 !important;
}

.btn, .form-control {
  outline: none;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border-radius: 0;
}

.btn:focus, .btn:active, .form-control:focus, .form-control:active {
  outline: none;
}

.form-control {
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

textarea.form-control {
  height: inherit;
}

.btn {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  padding: 8px 20px;
}

.btn.btn-black {
  background: #000;
  color: #fff;
}

.btn.btn-primary {
  color: #fff;
  border-width: 2px;
}

.btn.btn-primary:hover, .btn.btn-primary:active, .btn.btn-primary:focus {
  border-color: #3395ff;
  background: #3395ff;
}

.btn.btn-sm {
  font-size: 14px;
}

.btn.btn-outline-primary {
  border-width: 2px;
  color: #007bff;
}

.btn.btn-outline-primary:hover, .btn.btn-outline-primary:focus, .btn.btn-outline-primary:active {
  color: #fff;
}

.btn.btn-outline-white {
  border-width: 2px;
  border-color: #fff;
  color: #fff;
}

.btn.btn-outline-white:hover, .btn.btn-outline-white:focus {
  background: #fff;
  color: #000;
  border-width: 2px;
}

.btn:hover {
  -webkit-box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.2) !important;
  box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.2) !important;
}

.flaticon-custom {
  font-size: 70px;
}

.flaticon-custom:before, .flaticon-custom:after {
  margin-left: 0;
}

.no-nav .owl-nav {
  display: none;
}

.owl-carousel .owl-item {
  opacity: .4;
}

.owl-carousel .owl-item.active {
  opacity: 1;
}

.owl-carousel .owl-nav {
  position: absolute;
  top: 50%;
  width: 100%;
}

.owl-carousel .owl-nav .owl-prev,
.owl-carousel .owl-nav .owl-next {
  position: absolute;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  margin-top: -10px;
}

.owl-carousel .owl-nav .owl-prev:hover, .owl-carousel .owl-nav .owl-prev:focus, .owl-carousel .owl-nav .owl-prev:active,
.owl-carousel .owl-nav .owl-next:hover,
.owl-carousel .owl-nav .owl-next:focus,
.owl-carousel .owl-nav .owl-next:active {
  outline: none;
}

.owl-carousel .owl-nav .owl-prev span:before,
.owl-carousel .owl-nav .owl-next span:before {
  font-size: 40px;
}

.owl-carousel .owl-nav .owl-prev {
  left: 30px !important;
}

.owl-carousel .owl-nav .owl-next {
  right: 30px !important;
}

.owl-carousel .owl-dots {
  text-align: center;
}

.owl-carousel .owl-dots .owl-dot {
  width: 10px;
  height: 10px;
  margin: 5px;
  border-radius: 50%;
  background: #e6e6e6;
}

.owl-carousel .owl-dots .owl-dot.active {
  background: #007bff;
}

.owl-carousel.home-slider {
  z-index: 1;
  position: relative;
}

.owl-carousel.home-slider .owl-nav {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.owl-carousel.home-slider .owl-nav button {
  color: #fff;
}

.owl-carousel.home-slider:focus .owl-nav, .owl-carousel.home-slider:hover .owl-nav {
  opacity: 1;
  visibility: visible;
}

.owl-carousel.home-slider .slider-item {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  height: calc(100vh - 117px);
  min-height: 700px;
  position: relative;
}

.owl-carousel.home-slider .slider-item:before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.2);
  content: "";
}

.owl-carousel.home-slider .slider-item .slider-text {
  color: #fff;
  height: calc(100vh - 117px);
  min-height: 700px;
}

.owl-carousel.home-slider .slider-item .slider-text .child-name {
  font-size: 40px;
  color: #fff;
}

.owl-carousel.home-slider .slider-item .slider-text h1 {
  font-size: 40px;
  color: #fff;
  line-height: 1.2;
  font-weight: 800 !important;
  text-transform: uppercase;
}

@media (max-width: 991.98px) {
  .owl-carousel.home-slider .slider-item .slider-text h1 {
    font-size: 40px;
  }
}

.owl-carousel.home-slider .slider-item .slider-text p {
  font-size: 20px;
  line-height: 1.5;
  font-weight: 300;
  color: white;
}

.owl-carousel.home-slider .slider-item.dark .child-name {
  color: #000;
}

.owl-carousel.home-slider .slider-item.dark h1 {
  color: #000;
}

.owl-carousel.home-slider .slider-item.dark p {
  color: #000;
}

.owl-carousel.home-slider.inner-page .slider-item {
  height: calc(50vh - 117px);
  min-height: 350px;
}

.owl-carousel.home-slider.inner-page .slider-item .slider-text {
  color: #fff;
  height: calc(50vh - 117px);
  min-height: 350px;
}

.owl-carousel.home-slider .owl-dots {
  position: absolute;
  bottom: 100px;
  width: 100%;
}

.owl-carousel.home-slider .owl-dots .owl-dot {
  width: 10px;
  height: 10px;
  margin: 5px;
  border-radius: 50%;
  border: 2px solid rgba(255, 255, 255, 0.5);
  outline: none !important;
  position: relative;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.owl-carousel.home-slider .owl-dots .owl-dot.active {
  border: 2px solid white;
}

.owl-carousel.home-slider .owl-dots .owl-dot.active span {
  background: white;
}

.owl-carousel.major-caousel .owl-stage-outer {
  padding-top: 30px;
  padding-bottom: 30px;
}

.owl-carousel.major-caousel .owl-nav .owl-prev, .owl-carousel.major-caousel .owl-nav .owl-next {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  color: #495057;
}

.owl-carousel.major-caousel .owl-nav .owl-prev:hover, .owl-carousel.major-caousel .owl-nav .owl-prev:focus, .owl-carousel.major-caousel .owl-nav .owl-next:hover, .owl-carousel.major-caousel .owl-nav .owl-next:focus {
  color: #6c757d;
  outline: none;
}

.owl-carousel.major-caousel .owl-nav .owl-prev.disabled, .owl-carousel.major-caousel .owl-nav .owl-next.disabled {
  color: #dee2e6;
}

.owl-carousel.major-caousel .owl-nav .owl-prev {
  left: -60px !important;
}

.owl-carousel.major-caousel .owl-nav .owl-next {
  right: -60px !important;
}

.owl-carousel.major-caousel .owl-dots {
  bottom: -30px !important;
  position: relative;
}

.owl-custom-nav {
  float: right;
  position: relative;
  z-index: 10;
}

.owl-custom-nav .owl-custom-prev,
.owl-custom-nav .owl-custom-next {
  padding: 10px;
  font-size: 30px;
  background: #ccc;
  line-height: 0;
  width: 60px;
  text-align: center;
  display: inline-block;
}

.box {
  overflow: hidden;
  border-radius: 4px;
  display: block;
}

.box img {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.box .box-body {
  padding: 20px;
  border: 1px solid #e9ecef;
  border-top: none;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.box h2 {
  font-size: 18px;
  font-family: "Josefin Sans", arial, sans-serif;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.box.hover:hover img, .box.hover:focus img {
  margin-top: -20px;
}

.box.hover:hover .box-body, .box.hover:focus .box-body {
  background: #007bff;
  color: #fff;
  padding: 30px 20px;
  border-color: #007bff;
}

.box.hover:hover h2, .box.hover:focus h2 {
  color: #fff;
}

.breadcrumb-custom {
  background: none;
  padding: 0;
}

.breadcrumb-custom li a {
  color: #007bff;
}

.breadcrumb-custom li a:hover {
  color: #fff;
}

.breadcrumb-custom li.active {
  color: #fff;
}

.breadcrumb-custom li.breadcrumb-item + .breadcrumb-item:before {
  content: "/";
  color: rgba(255, 255, 255, 0.3);
}

.children-info li {
  display: block;
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px dotted #dee2e6;
}

.sidebar {
  padding-left: 5em;
}

@media (max-width: 991.98px) {
  .sidebar {
    padding-left: 15px;
  }
}

.sidebar-box {
  margin-bottom: 4em;
  font-size: 15px;
  width: 100%;
  float: left;
  background: #fff;
}

.sidebar-box *:last-child {
  margin-bottom: 0;
}

.sidebar-box .heading {
  font-size: 18px;
  margin-bottom: 30px;
  padding-bottom: 20px;
  border-bottom: 1px solid #e6e6e6;
}

.tags {
  padding: 0;
  margin: 0;
  font-weight: 400;
}

.tags li {
  padding: 0;
  margin: 0 4px 4px 0;
  float: left;
  display: inline-block;
}

.tags li a {
  float: left;
  display: block;
  border-radius: 4px;
  padding: 2px 6px;
  color: gray;
  background: #f2f2f2;
}

.tags li a:hover {
  color: #fff;
  background: #007bff;
}

.pagination {
  margin-bottom: 5em;
  text-align: center !important;
  display: block;
}

.pagination li {
  margin-right: 5px;
  margin-bottom: 5px;
  display: inline-block;
}

.pagination li a {
  border-radius: 50% !important;
  width: 60px;
  height: 60px;
  line-height: 60px;
  padding: 0;
  margin: 0;
  display: inline-block;
  text-align: center;
}

.pagination li a:hover {
  background: #007bff;
  color: #fff;
  border: 1px solid transparent;
}

.categories, .sidelink {
  padding: 0;
  margin: 0;
  font-weight: 400;
}

.categories li, .sidelink li {
  padding: 0;
  margin: 0;
  position: relative;
  margin-bottom: 10px;
  padding-bottom: 10px;
  border-bottom: 1px dotted #dee2e6;
  list-style: none;
}

.categories li:last-child, .sidelink li:last-child {
  margin-bottom: 0;
  border-bottom: none;
  padding-bottom: 0;
}

.categories li a, .sidelink li a {
  display: block;
}

.categories li a span, .sidelink li a span {
  position: absolute;
  right: 0;
  top: 0;
  color: #ccc;
}

.categories li.active a, .sidelink li.active a {
  color: #000;
  font-style: italic;
}

.cover_1 {
  background-size: cover;
  background-position: center center;
  padding: 7em 0;
}

.cover_1 .sub-heading {
  color: rgba(255, 255, 255, 0.7);
  font-size: 22px;
}

.cover_1 .heading {
  font-size: 50px;
  color: white;
  font-weight: 300;
}

.heading {
  color: #000;
}

.heading.border-bottom {
  position: relative;
  padding-bottom: 30px;
}

.heading.border-bottom:before {
  bottom: 0;
  position: absolute;
  content: "";
  width: 50px;
  height: 2px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  background: #007bff;
}

.text-black {
  color: #000 !important;
}

.stretch-section .video {
  display: block;
  position: relative;
  -webkit-box-shadow: 4px 4px 70px -20px rgba(0, 0, 0, 0.5);
  box-shadow: 4px 4px 70px -20px rgba(0, 0, 0, 0.5);
}

.media-feature {
  padding: 30px;
  -webkit-transition: .2s all ease-out;
  -o-transition: .2s all ease-out;
  transition: .2s all ease-out;
  background: #fff;
  z-index: 1;
  position: relative;
  border-bottom: 10px solid transparent;
  border-radius: 4px;
  font-size: 15px;
}

.media-feature .icon {
  font-size: 60px;
  color: #007bff;
}

.media-feature h3 {
  font-size: 16px;
  text-transform: uppercase;
}

.media-feature:hover, .media-feature:focus {
  -webkit-box-shadow: 0 2px 20px -3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 20px -3px rgba(0, 0, 0, 0.1);
  -webkit-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
  z-index: 2;
  border-bottom: 10px solid #007bff;
}

.media-custom {
  background: #fff;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  margin-bottom: 30px;
  position: relative;
  top: 0;
}

.media-custom .meta-post {
  color: #ced4da;
  font-size: 13px;
  text-transform: uppercase;
}

.media-custom > a {
  position: relative;
  overflow: hidden;
  display: block;
}

.media-custom .meta-chat {
  color: #ced4da;
}

.media-custom .meta-chat:hover {
  color: #6c757d;
}

.media-custom img {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.media-custom:focus, .media-custom:hover {
  top: -2px;
  -webkit-box-shadow: 0 2px 40px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 40px 0 rgba(0, 0, 0, 0.2);
}

.media-custom:focus img, .media-custom:hover img {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}

.media-custom .media-body {
  padding: 30px;
}

.media-custom .media-body h3 {
  font-size: 20px;
}

.media-custom .media-body p:last-child {
  margin-bottom: 0;
}

#accordion .card {
  font-size: 15px;
  border-color: #dee2e6;
}

#accordion .card h5 a {
  display: block;
  text-align: left;
  text-decoration: none;
  color: #007bff;
  position: relative;
  -webkit-box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.2) !important;
  box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.2) !important;
  border-radius: 0;
}

#accordion .card h5 a .icon {
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%) rotate(-180deg);
  -ms-transform: translateY(-50%) rotate(-180deg);
  transform: translateY(-50%) rotate(-180deg);
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

#accordion .card h5 a:hover {
  text-decoration: none;
  -webkit-box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.2) !important;
  box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.2) !important;
}

#accordion .card h5 a.collapsed {
  color: #000;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

#accordion .card h5 a.collapsed .icon {
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

#accordion .card h5 a.collapsed:hover {
  text-decoration: none;
  -webkit-box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.2) !important;
  box-shadow: 0 3px 10px -2px rgba(0, 0, 0, 0.2) !important;
}

#accordion .card .card-body {
  padding-top: 15px;
}

.testimonial {
  font-size: 30px;
  color: #000;
}

.media-testimonial img {
  width: 100px;
  border-radius: 50%;
}

.media-testimonial blockquote p {
  font-size: 20px;
  color: #000;
  font-style: italic;
}

.comment-form-wrap {
  clear: both;
}

.comment-list {
  padding: 0;
  margin: 0;
}

.comment-list .children {
  padding: 50px 0 0 40px;
  margin: 0;
  float: left;
  width: 100%;
}

.comment-list li {
  padding: 0;
  margin: 0 0 30px 0;
  float: left;
  width: 100%;
  clear: both;
  list-style: none;
}

.comment-list li .vcard {
  width: 80px;
  float: left;
}

.comment-list li .vcard img {
  width: 50px;
  border-radius: 50%;
}

.comment-list li .comment-body {
  float: right;
  width: calc(100% - 80px);
}

.comment-list li .comment-body h3 {
  font-size: 20px;
}

.comment-list li .comment-body .meta {
  text-transform: uppercase;
  font-size: 13px;
  letter-spacing: .1em;
  color: #ccc;
}

.comment-list li .comment-body .reply {
  padding: 5px 10px;
  background: #e6e6e6;
  color: #000;
  text-transform: uppercase;
  font-size: 14px;
}

.comment-list li .comment-body .reply:hover {
  color: #000;
  background: #e3e3e3;
}

.post-entry-horzontal {
  margin-bottom: 30px;
}

.post-entry-horzontal a {
  display: table;
}

.post-entry-horzontal a .image, .post-entry-horzontal a .text {
  display: table-cell;
  vertical-align: middle;
}

@media (max-width: 767.98px) {
  .post-entry-horzontal a .image, .post-entry-horzontal a .text {
    display: block;
  }
}

.post-entry-horzontal a .image {
  width: 200px;
  background-size: cover;
  background-position: center center;
}

@media (max-width: 767.98px) {
  .post-entry-horzontal a .image {
    width: 100%;
    height: 200px;
  }
}

.post-entry-horzontal a .text {
  padding: 30px;
  width: calc(100 - 200px);
  border: 1px solid #e6e6e6;
  border-left: none;
}

@media (max-width: 767.98px) {
  .post-entry-horzontal a .text {
    width: 100%;
    height: 200px;
    border: 1px solid #e6e6e6;
    border-top: none;
  }
}

.post-entry-horzontal a .text h2 {
  font-size: 20px;
}

.post-entry-horzontal a .text p {
  color: #999999;
  margin-bottom: 30px;
}

.post-entry-horzontal a:hover {
  -webkit-box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.1);
}

.search-top .search-top-form {
  position: relative;
  /* float: right; */
}

.search-top .icon {
  position: absolute;
  right: 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  font-size: 15px;
  color: #fff;
}

.search-top input {
  color: #fff;
  background: #212121;
  width: inherit;
  min-width: 300px;
  border: none;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  padding: 4px 30px 4px 15px;
  font-size: 16px;
}

@media (max-width: 767.98px) {
  .search-top input {
    width: 150px;
    min-width: 150px;
  }
}

.search-top input:active, .search-top input:focus {
  background: #333333;
  outline: none;
}

.post-entry-sidebar .post-meta {
  font-size: 14px;
  color: #b3b3b3;
}

.post-entry-sidebar ul {
  padding: 0;
  margin: 0;
}

.post-entry-sidebar ul li {
  list-style: none;
  padding: 0 0 20px 0;
  margin: 0 0 20px 0;
}

.post-entry-sidebar ul li a {
  display: table;
}

.post-entry-sidebar ul li a img {
  width: 90px;
}

.post-entry-sidebar ul li a img, .post-entry-sidebar ul li a .text {
  display: table-cell;
  vertical-align: middle;
}

.post-entry-sidebar ul li a .text h4 {
  font-size: 18px;
}

.search-form-wrap {
  margin-bottom: 5em;
  display: block;
}

.search-form .form-group {
  position: relative;
}

.search-form .form-group #s {
  padding-right: 50px;
  background: #f7f7f7;
  padding: 15px 15px;
  border: none;
}

.search-form .icon {
  position: absolute;
  top: 50%;
  right: 20px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

blockquote {
  padding-left: 30px;
  border-left: 10px solid #e6e6e6;
}

blockquote p {
  font-size: 18px;
  font-style: italic;
  color: #000;
}

.list-unstyled.check li {
  position: relative;
  padding-left: 30px;
  line-height: 1.3;
  margin-bottom: 10px;
}

.list-unstyled.check li:before {
  color: #17a2b8;
  left: 0;
  font-family: "Ionicons";
  content: "\f122";
  position: absolute;
}

#modalAppointment .modal-content {
  border-radius: 0;
  border: none;
}

#modalAppointment .modal-body, #modalAppointment .modal-footer {
  padding: 40px;
}

.overflow {
  position: relative;
  overflow-x: hidden;
}

.site-footer {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  padding: 5em 0;
  background: #000;
}

.site-footer .post-entry-sidebar ul li a h4 {
  color: #fff;
}

.site-footer .footer-social li a > span {
  width: 30px;
}

.site-footer a {
  color: #fff;
}

.site-footer a:hover {
  opacity: .5;
}

.site-footer h3 {
  color: #fff;
  margin-bottom: 30px;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: .2em;
}

.site-footer p {
  color: rgba(255, 255, 255, 0.5);
}

.blog-entry-footer .post-meta {
  color: white;
  font-size: 15px;
}

.border-t {
  border-top: 1px solid #f8f9fa;
}

.copyright {
  font-size: 14px;
}

.element-animate {
  opacity: 0;
  visibility: hidden;
}

#loader {
  position: fixed;
  width: 96px;
  height: 96px;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background-color: rgba(255, 255, 255, 0.9);
  -webkit-box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  border-radius: 16px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity .2s ease-out, visibility 0s linear .2s;
  -o-transition: opacity .2s ease-out, visibility 0s linear .2s;
  transition: opacity .2s ease-out, visibility 0s linear .2s;
  z-index: 1000;
}

#loader.fullscreen {
  padding: 0;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
  background-color: #fff;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
}

#loader.show {
  -webkit-transition: opacity .4s ease-out, visibility 0s linear 0s;
  -o-transition: opacity .4s ease-out, visibility 0s linear 0s;
  transition: opacity .4s ease-out, visibility 0s linear 0s;
  visibility: visible;
  opacity: 1;
}

#loader .circular {
  -webkit-animation: loader-rotate 2s linear infinite;
  animation: loader-rotate 2s linear infinite;
  position: absolute;
  left: calc(50% - 24px);
  top: calc(50% - 24px);
  display: block;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
}

#loader .path {
  stroke-dasharray: 1, 200;
  stroke-dashoffset: 0;
  -webkit-animation: loader-dash 1.5s ease-in-out infinite;
  animation: loader-dash 1.5s ease-in-out infinite;
  stroke-linecap: round;
}

@-webkit-keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@-webkit-keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px;
  }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px;
  }
}

@keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px;
  }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px;
  }
}


.btn-custom {
    color:white !important;
}

.btn-custom:hover {
    color:#6c757d !important;
}
	</style>
  <link rel="stylesheet" href="">
	<title>SYT Sharing Your Travel</title>
</head>
<body>
<h1 class="center">SYT Sharing Your Travel</h1>
@foreach($datas as $data)
<h2 class="center">{{$data->title}}</h2>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="post-meta">
                        <span class="category">{{$data->countries}}</span>
                        <span class="mr-2">{{$data->created_at}}</span> &bullet;
                      </div>
            <div class="post-content-body">
              <p>{{$data->content}}</p>

            <div class="row mb-5">
              <div class="col-md-12 mb-4 element-animate">
                <img src="{{ public_path('images/'.$data->image.'.jpg')  }}" alt="Image placeholder" class="img-fluid">
              </div>
              </div>
            </div>
          </div>
        </div>
@endforeach
</body>
</html>
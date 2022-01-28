<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title_page')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Default CSS -->
    @section('head')
    @include('web.layouts.partials.head')
    @show
    <!-- CSS Page para las paginas a instanciar -->
    @yield('head_page')

</head>

<body>

    <!--wrapper start-->
    <div class="wrapper home-default-wrapper">

        <!-- Header para todas las paginas -->
        @include('web.layouts.partials.header')

        @yield('content')
        <!-- Footer para todas las paginas -->
        @include('web.layouts.partials.footer')

        <!-- Codigo JS para todas las paginas -->
        @include('web.layouts.partials.footer_js')

        @yield('footer_page')

    </div>
</body>

<style type="text/css">
    
/* Header Top */
.header-top {
    position: relative;
    background-color: #181614;
    padding: 16.5px 0;
}

.header-top .inner-container {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.header-top .left-column {
    position: relative;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.header-top ul.contact-info {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.header-top ul.contact-info li {
    margin-right: 22px;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    position: relative;
    padding-right: 20px;
}

.header-top ul.contact-info li:before {
    position: absolute;
    content: '';
    top: 5px;
    right: 0;
    width: 1px;
    height: 20px;
    background-color: rgba(255, 255, 255, 0.2);
}

.header-top ul.contact-info li:last-child:before {
    display: none;
}

.header-top ul.contact-info a {
    color: #fff;
}

.header-top ul.contact-info li i {
    margin-right: 7px;
    font-size: 20px;
    vertical-align: middle;
    position: relative;
    top: -2px;
}

.header-top .social-icon {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding-left: 25px;
    border-left: 1px solid rgba(255, 255, 255, 0.2);
}

.header-top .social-icon li {
    margin-right: 20px;
    font-size: 14px;
    line-height: 20px;
}

.header-top .social-icon li a {
    color: #fff;
    transition: .5s;
}
/* Header Style */

.main-header {
    position: relative;
    display: block;
    width: 100%;
    z-index: 9999;
    top: 0px;
    left: 0px;
    background: none;
    clear: both;
}

.main-header.header-style-one .auto-container {
    max-width: 1520px;
}

.main-header.header-style-one {
    position: relative;
}

















section > [class*="container"] {
  padding-top: 100px;
  padding-bottom: 100px; }


/*
**buttons
*/
.theme_button {
  font-size: 16px;
  font-weight: 400;
  padding: 16px 38px;
  margin-bottom: 4px;
  line-height: 1;
  display: inline-block;
  min-width: 10em;
  text-align: center;
  color: #ffffff;
  border: 1px solid #323232;
  background-color: #323232;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  position: relative;
  -webkit-transition: all 0.6s linear 0s;
  -moz-transition: all 0.6s linear 0s;
  -o-transition: all 0.6s linear 0s;
  -ms-transition: all 0.6s linear 0s;
  transition: all 0.6s linear 0s; }

.color1 {
  background-color: #6d81b4;
  border-color: #6d81b4; }

.color2 {
  background-color: #6d81b4;
  border-color: #6d81b4; }

.theme_button:active, .theme_button:hover, .theme_button:focus {
  color: #ffffff;
  background-color: #6d81b4;
  border-color: #6d81b4;
  opacity: 1;
  text-decoration: none;
  outline: none;
  -webkit-transition: all 0.05s linear 0s;
  -moz-transition: all 0.05s linear 0s;
  -o-transition: all 0.05s linear 0s;
  -ms-transition: all 0.05s linear 0s;
  transition: all 0.05s linear 0s; }

.theme_button:active {
  top: 1px; }

.theme_button.inverse {
  color: #323232;
  background-color: transparent;
  border: 1px solid #323232; }

.block_button {
  display: block;
  width: 100%;
  text-align: center; }

/*
**utilites
*/
.alignleft {
  float: left;
  margin: 5px 30px 15px 0;
  max-width: 50%; }

.round {
  border-radius: 50%; }

.inline-block {
  display: inline-block;
  max-width: 100%; }

.with_background {
  padding: 40px;
  background-color: #f5f5f5; }

.with_border {
  padding: 40px;
  border: 1px solid #e5e5e5; }

.before_cover, .after_cover, .before_cover > *, .after_cover > * {
  position: relative;
  z-index: 2; }

.before_cover:before, .after_cover:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0; }

#response, .highlight {
  color: #6d81b4;
  border-color: #6d81b4; }

.highlight2 {
  color: #0f2676;
  border-color: #0f2676; }
  
 .highlight3 {
  color: #000000;
  border-color: #ffffff; }
  
  .highlight4 {
  color: #ffffff;
  border-color: #ffffff; }

.red, .required {
  color: #fa5c5d; }

.black {
  color: #000000;
  border-color: #000000; }

.grey {
  color: #323232;
  border-color: #323232; }

.greylinks a {
  color: #b2b2b2; }

.darklinks a {
  color: #323232; }

.thin {
  font-weight: 300; }

.bold {
  font-weight: 700; }

.quotesign {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 1; }

.quotesign:before {
  font-size: 150px;
  font-family: 'PT Sans', sans-serif;
  content: '‘‘';
  position: absolute;
  left: 0;
  top: 0;
  line-height: 1; }

[class*="_bg_color"] {
  color: #ffffff; }
  [class*="_bg_color"] h1, [class*="_bg_color"] h2, [class*="_bg_color"] h3, [class*="_bg_color"] h4, [class*="_bg_color"] h5, [class*="_bg_color"] h6 {
    color: #ffffff; }

.light_bg_color {
  background-color: #ffffff; }

.main_bg_color {
  color: #ffffff;
  background-color: #0f2676; }

.dark_bg_color {
  background-color: #000000; }

.darkgrey_bg_color {
  background-color: #323232; }

/*dividers*/
.divider_20 {
  margin: 20px 0; }

.divider_30 {
  margin: 30px 0; }

.divider_40 {
  margin: 40px 0; }

.topmargin_0 {
  margin-top: 0 !important; }

.topmargin_10 {
  margin-top: 10px; }

.topmargin_20 {
  margin-top: 20px; }

.topmargin_30 {
  margin-top: 30px; }

.topmargin_40 {
  margin-top: 40px; }

.bottommargin_0 {
  margin-bottom: 0; }

.bottommargin_10 {
  margin-bottom: 10px; }

.bottommargin_20 {
  margin-bottom: 20px; }

.bottommargin_30 {
  margin-bottom: 30px; }

.bottommargin_40 {
  margin-bottom: 40px; }

.margin_0 {
  margin: 0; }

/*alignment*/
.display_table {
  display: table;
  min-width: 100%;
  height: 100%;
  margin: auto; }

.display_table_cell {
  display: table-cell;
  vertical-align: middle;
  float: none;
  overflow: hidden;
  zoom: 1; }

.columns_padding_0 [class*="col-"] {
  padding: 0; }

@media (min-width: 500px) {
  .column_padding_25 .row {
    margin-left: -25px;
    margin-right: -25px; }
  .column_padding_25 [class*="col-"] {
    padding-left: 25px;
    padding-right: 25px; } }

.not_found {
  font-size: 300px;
  font-weight: 700;
  line-height: 0.7;
  letter-spacing: -0.04em; }
  .not_found + h2 {
    font-size: 48px;
    margin: 54px 0 0px; }
  .not_found + h2 + h3 {
    margin: 14px 0 42px; }

@media (min-width: 1200px) {
  .text-lg-right {
    text-align: right; }
  .text-lg-left {
    text-align: left; }
  .text-lg-center {
    text-align: center; }
  .display_table_lg {
    display: table;
    min-width: 100%;
    height: 100%;
    margin: auto; }
  .display_table_cell_lg {
    display: table-cell;
    vertical-align: middle;
    float: none;
    overflow: hidden;
    zoom: 1; } }

@media (min-width: 992px) {
  .text-md-right {
    text-align: right; }
  .text-md-left {
    text-align: left; }
  .text-md-center {
    text-align: center; }
  .display_inline_md {
    display: inline; }
  .display_table_md {
    display: table;
    min-width: 100%;
    height: 100%;
    margin: auto; }
  .display_table_cell_md {
    display: table-cell;
    vertical-align: middle;
    float: none;
    overflow: hidden;
    zoom: 1; } }

@media (min-width: 768px) {
  .text-sm-right {
    text-align: right; }
  .text-sm-left {
    text-align: left; }
  .text-sm-center {
    text-align: center; }
  .display_table_sm {
    display: table;
    min-width: 100%;
    height: 100%;
    margin: auto; }
  .display_table_cell_sm {
    display: table-cell;
    vertical-align: middle;
    float: none;
    overflow: hidden;
    zoom: 1; }
  .big {
    font-size: 50px;
    font-weight: 300; } }

@media (max-width: 767px) {
  .text-xs-right {
    text-align: right; }
  .text-xs-left {
    text-align: left; }
  .text-xs-center {
    text-align: center; }
  .not_found {
    font-size: 130px; } }

.inline-dropdown {
  list-style: none;
  margin: 0;
  padding: 0; }
  .inline-dropdown > li {
    display: inline-block; }

    

@media (max-width: 991px) {
  .section_header {
    font-size: 30px;
    margin-top: 0; }
  .section_header + blockquote, .section_header + p {
    max-width: 100% !important; }
  .section_header + p {
    font-size: 1.1em;
    letter-spacing: 0; } }

@media (max-width: 767px) {
  .section_header {
    font-size: 30px;
    margin-top: 0; }
  .section_header.big {
    font-size: 36px;
    margin-top: 0; }
  .section_header + blockquote, .section_header + p {
    max-width: 100% !important; } }

/*page preloader*/
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #ffffff;
  z-index: 13000;
  height: 100%; }

.preloader_image {
  width: 80px;
  height: 80px;
  position: absolute;
  left: 50%;
  top: 50%;
  background: url(../img/preloader.gif) no-repeat 50% 50% transparent;
  margin: -40px 0 0 -40px; }

/*
animated elements
*/
.to_animate {
  visibility: hidden; }

.animated {
  /*IE7 fix*/
  visibility: visible !important; }

/*
**boxed layout
*/
body.boxed {
  position: static;
  width: auto;
  height: auto; }

.pattern1 {
  background-image: url(../img/pattern1.png); }

.pattern2 {
  background-image: url(../img/pattern2.png); }

.pattern3 {
  background-image: url(../img/pattern3.png); }

.pattern4 {
  background-image: url(../img/pattern4.png); }

.pattern5 {
  background-image: url(../img/pattern5.png); }

.pattern6 {
  background-image: url(../img/pattern6.png); }

.pattern7 {
  background-image: url(../img/pattern7.png); }

.pattern8 {
  background-image: url(../img/pattern8.png); }

.pattern9 {
  background-image: url(../img/pattern9.png); }

.pattern10 {
  background-image: url(../img/pattern10.png); }

.pattern11 {
  background-image: url(../img/pattern11.png); }

.boxed .container {
  max-width: 100%;
  padding-left: 50px;
  padding-right: 50px; }

@media (max-width: 500px) {
  .boxed .container {
    padding-left: 10px;
    padding-right: 10px; } }

.boxed #box_wrapper.container {
  padding: 0;
  -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2); }
  .boxed #box_wrapper.container.top-bottom-margins {
    margin-top: 40px;
    margin-bottom: 40px; }

/**light section*/
.light_section {
  background-color: #ffffff;
  color: #b2b2b2; }
  .light_section.bg_image {
    color: #323232; }
  .light_section h1, .light_section h2, .light_section h3, .light_section h4, .light_section h5, .light_section h6 {
    color: #323232; }
    .light_section h1 a, .light_section h2 a, .light_section h3 a, .light_section h4 a, .light_section h5 a, .light_section h6 a {
      color: inherit; }
      .light_section h1 a:hover, .light_section h2 a:hover, .light_section h3 a:hover, .light_section h4 a:hover, .light_section h5 a:hover, .light_section h6 a:hover {
        color: #6d81b4; }
  .light_section a {
    color: #6d81b4; }
    .light_section a:hover {
      color: #b2b2b2; }
  .light_section .theme_button {
    color: #ffffff; }
    .light_section .theme_button:hover, .light_section .theme_button:focus {
      color: #ffffff;
      background-color: #6d81b4;
      border-color: #6d81b4; }
  .light_section .theme_button.inverse {
    color: #323232; }
    .light_section .theme_button.inverse:hover, .light_section .theme_button.inverse:focus {
      border-color: #323232;
      background-color: #323232;
      color: #ffffff; }
  .light_section .theme_button.color1:active, .light_section .theme_button.color1:hover, .light_section .theme_button.color1:focus {
    background-color: #6d81b4;
    border-color: #6d81b4; }
  .light_section .color-icon.bg-icon:before {
    background-color: #f5f5f5; }
  .light_section .color-icon.bg-icon:hover:before {
    color: #ffffff !important; }
  .light_section .greylinks a {
    color: #b2b2b2; }
  .light_section .darklinks a {
    color: #323232; }
    .light_section .darklinks a:hover {
      color: #6d81b4; }
  .light_section .thumbnail .caption {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-top: none; }
  .light_section .thumbnail > img, .light_section .thumbnail > a > img {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-bottom: none; }

/**grey section*/
.grey_section {
  background-color: #fafafa;
  color: #a5a5a5; }
  .grey_section h1, .grey_section h2, .grey_section h3, .grey_section h4, .grey_section h5, .grey_section h6 {
    color: #2a2a2a; }
    .grey_section h1 a, .grey_section h2 a, .grey_section h3 a, .grey_section h4 a, .grey_section h5 a, .grey_section h6 a {
      color: inherit; }
      .grey_section h1 a:hover, .grey_section h2 a:hover, .grey_section h3 a:hover, .grey_section h4 a:hover, .grey_section h5 a:hover, .grey_section h6 a:hover {
        color: #6d81b4; }
  .grey_section a {
    color: #6d81b4; }
    .grey_section a:hover {
      color: #323232; }
  .grey_section blockquote {
    background-color: #ffffff; }
  .grey_section .theme_button {
    color: #ffffff; }
    .grey_section .theme_button:hover, .grey_section .theme_button:focus {
      color: #ffffff; }
    .grey_section .theme_button.inverse {
      color: #323232; }
      .grey_section .theme_button.inverse:hover {
        background-color: #323232;
        color: #ffffff; }
  .grey_section .greylinks a {
    color: #323232; }
    .grey_section .greylinks a:hover {
      color: #6d81b4; }
  .grey_section .color-icon.bg-icon:before {
    background-color: #ffffff; }
  .grey_section .color-icon.bg-icon:hover:before {
    color: #ffffff !important; }
  .grey_section .form-control {
    border-color: #ffffff; }
  .grey_section .breadcrumb {
    color: #b2b2b2; }
    .grey_section .breadcrumb a {
      color: #999999; }
      .grey_section .breadcrumb a:hover {
        color: #6d81b4; }
  .grey_section .post {
    background-color: #ffffff;
    color: #b2b2b2; }
    .grey_section .post a:hover {
      color: #323232; }
    .grey_section .post .entry-title a {
      color: #323232; }
      .grey_section .post .entry-title a:hover {
        color: #6d81b4; }
  .grey_section .thumbnail .caption {
    border: none; }
  .grey_section .countdown-section {
    border-left: 15px solid #fafafa;
    border-right: 15px solid #fafafa;
    padding-right: 20px;
    padding-left: 20px;
    background-color: #ffffff; }
    @media (max-width: 767px) {
      .grey_section .countdown-section {
        border: none;
        padding-left: 8px;
        padding-right: 8px; } }

/**common dark sections*/
[class*="dark"] {
  /* blog */
  /* single blog post */
  /* shortcodes */
  /* shop */ }
  [class*="dark"] h1, [class*="dark"] h2, [class*="dark"] h3, [class*="dark"] h4, [class*="dark"] h5, [class*="dark"] h6 {
    color: #ffffff; }
    [class*="dark"] h1 a, [class*="dark"] h2 a, [class*="dark"] h3 a, [class*="dark"] h4 a, [class*="dark"] h5 a, [class*="dark"] h6 a {
      color: #ffffff; }
      [class*="dark"] h1 a:hover, [class*="dark"] h2 a:hover, [class*="dark"] h3 a:hover, [class*="dark"] h4 a:hover, [class*="dark"] h5 a:hover, [class*="dark"] h6 a:hover {
        color: #6d81b4; }
  [class*="dark"] a {
    color: #6d81b4; }
    [class*="dark"] a:hover {
      color: #ffffff; }
  [class*="dark"] hr {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] blockquote, [class*="dark"] .blockquote {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1);
    background-color: #2d2d2d; }
  [class*="dark"] .theme_button {
    color: #ffffff; }
    [class*="dark"] .theme_button:after {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.02); }
    [class*="dark"] .theme_button:hover, [class*="dark"] .theme_button:focus {
      background-color: #ffffff;
      border-color: #ffffff;
      color: #323232; }
  [class*="dark"] .theme_button.inverse {
    border-color: #ffffff;
    background-color: transparent;
    color: #ffffff; }
    [class*="dark"] .theme_button.inverse:after {
      display: none; }
    [class*="dark"] .theme_button.inverse:hover, [class*="dark"] .theme_button.inverse:focus {
      background-color: #ffffff;
      color: #323232; }
  [class*="dark"] .with_background, [class*="dark"] .well {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .with_border {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .grey, [class*="dark"] .black {
    color: #ffffff;
    border-color: #ffffff; }
  [class*="dark"].with_top_border:before, [class*="dark"].with_bottom_border:after {
    background-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .section_header + p {
    color: inherit; }
  [class*="dark"] .form-control {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] form label + [class*="icon-"] {
    color: #ffffff; }
  [class*="dark"] .form-group-select:before {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .form-control:-moz-placeholder {
    color: #b2b2b2;
    opacity: 1; }
  [class*="dark"] .form-control::-moz-placeholder {
    color: #b2b2b2;
    opacity: 1; }
  [class*="dark"] .form-control:-ms-input-placeholder {
    color: #b2b2b2; }
  [class*="dark"] .form-control::-webkit-input-placeholder {
    color: #b2b2b2; }
  [class*="dark"] .contact-form.transparent-background .form-control {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .border-paragraphs p {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1) !important; }
  [class*="dark"] .table, [class*="dark"] .table-bordered, [class*="dark"] .table th, [class*="dark"] .table td {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .table-striped > tbody > tr:nth-child(odd), [class*="dark"] .table-striped > tbody > tr:nth-child(odd) > td, [class*="dark"] .table-striped > tbody > tr:nth-child(odd) > th {
    border-color: rgba(255, 255, 255, 0.1);
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .color-icon.bg-icon:before {
    background-color: #ffffff; }
  [class*="dark"] .color-icon.bg-icon:hover:before {
    color: #ffffff !important; }
  [class*="dark"] .color-bg-icon:hover:before {
    background-color: #6d81b4; }
  [class*="dark"] .tab-content, [class*="dark"] .nav-tabs > li > a {
    border-color: rgba(255, 255, 255, 0.1);
    color: #ffffff; }
  [class*="dark"] .nav-tabs > li.active > a, [class*="dark"] .nav-tabs > li.active > a:hover, [class*="dark"] .nav-tabs > li.active > a:focus {
    border-color: #6d81b4;
    border-bottom-color: transparent;
    background-color: #6d81b4;
    color: #ffffff; }
  [class*="dark"] #isotope_filters a, [class*="dark"] .filters a {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .price-table {
    border-color: rgba(255, 255, 255, 0.1);
    outline-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .price-table.style2 {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .plan-name {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .plan-price p {
    color: #ffffff; }
  [class*="dark"] .features-list .disabled:before {
    color: #ffffff; }
  [class*="dark"] ul.list1 {
    color: #ffffff; }
  [class*="dark"] ul.list1 li {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .greylinks a {
    color: #b5b5b5; }
    [class*="dark"] .greylinks a:hover {
      color: #6d81b4; }
  [class*="dark"] .darklinks a {
    color: #ffffff; }
    [class*="dark"] .darklinks a:hover {
      color: #6d81b4; }
  [class*="dark"] a.logo {
    color: #ffffff; }
    [class*="dark"] a.logo:hover {
      color: #e6e6e6; }
  [class*="dark"].blog-single .post {
    background-color: transparent; }
    [class*="dark"].blog-single .post .entry-header {
      color: #b5b5b5;
      border-color: rgba(255, 255, 255, 0.1); }
      [class*="dark"].blog-single .post .entry-header span {
        border-color: rgba(255, 255, 255, 0.1); }
    [class*="dark"].blog-single .post .entry-title a {
      color: inherit; }
    [class*="dark"].blog-single .post .entry-excerpt {
      color: #b5b5b5;
      border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .post-content {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .blog-grid-post-meta {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .owl-theme .owl-dots .owl-dot span {
    background-color: #ffffff; }
  [class*="dark"] .testimonials-carousel .media + p {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .side-item, [class*="dark"] .blog-item .from-blog-social {
    border-color: rgba(255, 255, 255, 0.1); }
  @media (min-width: 992px) {
    [class*="dark"].blog article.post .date {
      color: inherit; } }
  [class*="dark"] .entry-excerpt {
    color: #ffffff; }
  [class*="dark"] .comment-meta {
    color: #ffffff; }
  [class*="dark"] .comment-meta .author_url {
    color: #ffffff; }
  [class*="dark"] .comment-list article:after {
    background-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .comment-respond {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .entry-tags {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_shopping_cart .cart_list, [class*="dark"] .widget_recent_entries li, [class*="dark"] .widget_recent_comments li, [class*="dark"] .widget_archive li, [class*="dark"] .widget_categories li, [class*="dark"] .widget_meta li, [class*="dark"] .widget_nav_menu li, [class*="dark"] .widget_pages li, [class*="dark"] .widget_popular_entries li {
    border-color: rgba(255, 255, 255, 0.1) !important; }
  [class*="dark"] .widget_nav_menu ul ul {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_popular_entries .media-heading {
    color: #ffffff; }
  [class*="dark"] .widget_recent_entries a:before, [class*="dark"] .widget_archive a:before, [class*="dark"] .widget_categories a:before, [class*="dark"] .widget_meta a:before, [class*="dark"] .widget_nav_menu a:before, [class*="dark"] .widget_pages a:before {
    color: #ffffff; }
  [class*="dark"] .tweet_list li + li .tweet_right {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_tag_cloud a {
    color: #ffffff; }
  [class*="dark"] #calendar_wrap {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_calendar table {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_calendar tfoot td a {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .widget_calendar caption, [class*="dark"] .widget_calendar thead, [class*="dark"] .widget_calendar th {
    color: #ffffff; }
  [class*="dark"] .widget_calendar tbody td a:hover {
    color: #ffffff; }
  [class*="dark"] .grid-view h3:before, [class*="dark"] .grid-view h3:after {
    background-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .price {
    color: #ffffff; }
  [class*="dark"] .owl-carousel.product-thumbnails .owl-nav > div:after {
    color: #ffffff; }
  [class*="dark"] .ui-slider {
    background-color: rgba(255, 255, 255, 0.06); }
  [class*="dark"] .ui-slider .ui-slider-handle {
    background-color: #ffffff; }
  [class*="dark"] #sort_view {
    border-color: rgba(255, 255, 255, 0.1);
    color: #ffffff; }
  [class*="dark"] #toggle_shop_view.grid-view:after, [class*="dark"] #toggle_shop_view:before {
    background-color: #2a2a2a; }
  [class*="dark"] .widget_layered_nav .color-filters a:before {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] aside .widget a {
    color: #ffffff; }
  [class*="dark"] .pagination > li > a, [class*="dark"] .pagination > li > span {
    border-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    background-color: transparent; }
  [class*="dark"] .pagination > li > a:hover, [class*="dark"] .pagination > li > span:hover, [class*="dark"] .pagination > li > a:focus, [class*="dark"] .pagination > li > span:focus, [class*="dark"] .pagination > .active > a, [class*="dark"] .pagination > .active > span, [class*="dark"] .pagination > .active > a:hover, [class*="dark"] .pagination > .active > span:hover, [class*="dark"] .pagination > .active > a:focus, [class*="dark"] .pagination > .active > span:focus {
    border-color: #6d81b4;
    background-color: #6d81b4;
    color: #ffffff; }
  [class*="dark"] .thumbnail {
    background-color: transparent; }
    [class*="dark"] .thumbnail h3 a {
      color: #ffffff; }
  [class*="dark"] .thumbnail .caption {
    border-color: transparent;
    background-color: #2f2f2f; }
  [class*="dark"] .progress {
    background-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .panel-group .panel-heading + .panel-collapse .panel-body {
    border-color: rgba(255, 255, 255, 0.1); }
  [class*="dark"] .entry-meta .comments-link a {
    color: #ffffff; }
  [class*="dark"] #timetable tbody th, [class*="dark"] #timetable tbody td {
    border-color: rgba(255, 255, 255, 0.1); }

/**dark section*/
.dark_section {
  background-color: #323232;
  color: #989898; }

/**darkgrey section*/
.darkgrey_section {
  background-color: #3c3c3c;
  color: #b5b5b5; }
  .darkgrey_section .section_header + p {
    color: #b2b2b2 !important; }

.darkgrey_section.darkgrey_lighter {
  background-color: #3a3a3a; }

/**color section*/
.color_section.main_color2 {
  background-color: #6d81b4; }
  .color_section.main_color2 .highlight {
    color: #6d81b4; }

.color_section {
  background-color: #6d81b4;
  color: #ffffff; }
  .color_section h1, .color_section h2, .color_section h3, .color_section h4, .color_section h5, .color_section h6 {
    color: #ffffff; }
    .color_section h1 a, .color_section h2 a, .color_section h3 a, .color_section h4 a, .color_section h5 a, .color_section h6 a {
      color: #ffffff; }
      .color_section h1 a:hover, .color_section h2 a:hover, .color_section h3 a:hover, .color_section h4 a:hover, .color_section h5 a:hover, .color_section h6 a:hover {
        color: #dcf1fb; }
  .color_section a {
    color: #ffffff; }
    .color_section a:hover {
      color: #dcf1fb; }
  .color_section blockquote, .color_section .blockquote {
    border-color: #82ceef; }
  .color_section .theme_button.color1 {
    background-color: #ffffff;
    border-color: #ffffff;
    color: #323232; }
    .color_section .theme_button.color1:hover {
      background-color: #323232;
      border-color: #323232;
      color: #ffffff; }
  .color_section .theme_button:hover, .color_section .theme_button:focus {
    background-color: #ffffff;
    border-color: #ffffff;
    color: #323232; }
  .color_section .theme_button.inverse {
    background-color: transparent;
    border-color: #ffffff;
    color: #ffffff; }
    .color_section .theme_button.inverse:hover, .color_section .theme_button.inverse:focus {
      background-color: #323232;
      border-color: #323232;
      color: #ffffff; }
  section .color_section .theme_button {
    color: #323232;
    background-color: #ffffff;
    border-color: #ffffff; }
  section .color_section .theme_button:hover {
    background-color: #323232;
    border-color: #323232;
    color: #ffffff; }
  .color_section .with_background {
    background-color: rgba(255, 255, 255, 0.2); }
  .color_section .with_border {
    border-color: rgba(255, 255, 255, 0.2); }
  .color_section.with_top_border .container:before, .color_section.with_bottom_border .container:after {
    background-color: #82ceef; }
  .color_section .section_header:before {
    background-color: #82ceef; }
  .color_section .black {
    border-color: #ffffff;
    color: #ffffff; }
  .color_section .grey {
    border-color: #323232;
    color: #323232; }
  .color_section #response, .color_section .highlight {
    color: #ffffff; }
  .color_section ul.list1 li {
    border-color: rgba(255, 255, 255, 0.2) !important; }
  .color_section [class*='soc-']:before {
    color: #ffffff;
    border-color: #ffffff; }
  .color_section .color-icon.bg-icon:before {
    background-color: #ffffff; }
  .color_section .color-icon.bg-icon:hover:before {
    color: #ffffff !important; }
  .color_section .form-control {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.2); }
  .color_section .form-control:-moz-placeholder {
    color: #ffffff; }
  .color_section .form-control::-moz-placeholder {
    color: #ffffff; }
  .color_section .form-control:-ms-input-placeholder {
    color: #ffffff; }
  .color_section .form-control::-webkit-input-placeholder {
    color: #ffffff; }
  .color_section .form-control:focus:-moz-placeholder {
    color: transparent;
    opacity: 1; }
  .color_section .form-control:focus::-moz-placeholder {
    color: transparent;
    opacity: 1; }
  .color_section .form-control:focus:-ms-input-placeholder {
    color: transparent; }
  .color_section .form-control:focus::-webkit-input-placeholder {
    color: transparent; }
  .color_section .form-control.invalid {
    -webkit-box-shadow: 0 0 0 2px #ffffff;
    box-shadow: 0 0 0 2px #ffffff; }

/*
**template styles
*/
#box_wrapper, #land {
  overflow: visible;
  position: relative; }

#box_wrapper:before {
  content: '';
  display: block;
  right: 0;
  left: 0;
  top: 0;
  height: 10px; }

#topline {
  padding: 4px 0;
  font-size: 14px;
  position: relative;
  z-index: 1001; }
  #topline.gradient {
    padding-top: 0;
    margin-top: -6px; }
    #topline.gradient a[id] {
      color: #ffffff;
      padding: 0 10px; }
    #topline.gradient [class*="col-"] > span {
      color: #ffffff; }
  #topline.grey_section a[id] {
    color: #b2b2b2;
    padding: 0 10px; }
  #topline [class*="rt-icon-"] {
    font-size: 18px;
    position: relative;
    top: 3px;
    padding-right: 6px; }
  @media (min-width: 768px) {
    #topline [class*="col-"] > span {
      padding-left: 33px; }
      #topline [class*="col-"] > span:first-child {
        padding-left: 0; } }
  @media (max-width: 767px) {
    #topline [class*="col-"] > span {
      display: block; } }

.currency-dropdown .dropdown-menu {
  min-width: 0;
  padding: 20px 10px; }
  .currency-dropdown .dropdown-menu > li > a {
    color: inherit;
    padding: 5px 20px; }
  .currency-dropdown .dropdown-menu > li > a:hover, .currency-dropdown .dropdown-menu > li.active-currency {
    color: #323232; }

.login-dropdown .dropdown-menu {
  min-width: 400px;
  padding: 30px 30px; }
  .login-dropdown .dropdown-menu label {
    display: none; }
  .login-dropdown .dropdown-menu .form-control {
    border-color: rgba(0, 0, 0, 0.1); }

.cart-dropdown .dropdown-menu {
  min-width: 400px;
  padding: 20px 30px; }

@media (max-width: 767px) {
  .login-dropdown, .cart-dropdown {
    position: static; }
  .login-dropdown .dropdown-menu, .cart-dropdown .dropdown-menu {
    right: 0;
    left: 0;
    min-width: 0; } }

#toplogo {
  position: relative; }

@media (max-width: 767px) {
  #social {
    padding: 10px 0 0;
    position: relative; } }

a.logo {
  display: inline-block;
  font-size: 22px;
  font-weight: 700;
  letter-spacing: -0.05em;
  line-height: 1;
  color: #323232;
  padding: 20px 0;
  word-break: break-word; }
  a.logo img {
    margin-right: 10px; }
    .home a.logo img, footer a.logo img {
      max-width: 100%; }
  a.logo:hover {
    color: #323232; }
  .header_gradient a.logo {
    color: #ffffff; }
  a.logo.bottom_logo {
    padding: 0;
    font-size: 28px; }
    a.logo.bottom_logo img {
      max-width: 50px; }
  a.logo.vertical_logo {
    padding: 0; }
    a.logo.vertical_logo img {
      margin: 0 0 10px; }
  @media (max-width: 1199px) and (min-width: 992px) {
    a.logo {
      font-size: 36px; } }
  @media (max-width: 600px) {
    a.logo {
      font-size: 26px; }
      a.logo img {
        max-width: 50px; } }

#header {
  top: 0;
  left: 0;
  right: 0;
  position: relative;
  z-index: 1000;
  -webkit-transition: all ease 0.1s 0;
  -moz-transition: all ease 0.1s 0;
  -o-transition: all ease 0.1s 0;
  -ms-transition: all ease 0.1s 0;
  transition: all ease 0.1s 0; }
  #header.mobile-active {
    z-index: 1002; }
  #header.affix {
    position: fixed; }
  #header .widget_search {
    position: absolute;
    right: 60px;
    top: 50%;
    height: 50px;
    margin-top: -20px;
    z-index: 3;
    /* navigation with search  */
    /* hide search  on small devices*/ }
    #header .widget_search label {
      display: inline;
      font-size: 0;
      color: transparent;
      cursor: pointer; }
    #header .widget_search label:before {
      display: block;
      position: absolute;
      text-align: center;
      width: 50px;
      right: 0;
      line-height: 48px;
      color: #6d81b4;
      font-size: 24px;
      font-weight: normal;
      content: "\e626";
      font-family: "rt-icons";
      z-index: 3;
      border-left: 1px solid transparent;
      -webkit-transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -o-transition: all 0.2s ease-in-out 0s;
      -ms-transition: all 0.2s ease-in-out 0s;
      transition: all 0.2s ease-in-out 0s; }
    #header .widget_search input#search {
      width: 0;
      position: absolute;
      top: 0;
      right: 0;
      padding: 0 10px;
      border-color: transparent;
      background-color: transparent;
      color: transparent;
      -webkit-transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -o-transition: all 0.2s ease-in-out 0s;
      -ms-transition: all 0.2s ease-in-out 0s;
      transition: all 0.2s ease-in-out 0s; }
      #header .widget_search input#search:focus {
        width: 230px;
        border-color: #e5e5e5;
        background-color: #ffffff;
        color: #b2b2b2; }
        #header .widget_search input#search:focus + label:before {
          border-color: #e5e5e5; }
    #header .widget_search button, #header .widget_search .theme_button {
      display: none; }
    @media (min-width: 992px) {
      #header .widget_search {
        right: 15px;
        margin-top: -25px; }
      #header .widget_search + nav {
        margin-right: 60px; } }
    @media (max-width: 991px) {
      #header .widget_search {
        display: none; } }

.header_white {
  background-color: #ffffff; }
  .header_white.affix {
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.1); }

.header_darkgrey {
  background-color: #323232; }

@media (max-width: 992px) {
  #header_wrapper .col-sm-12 {
    min-height: 0; } }

/**
* mainslider styles
*/
/* flexslider */
#mainslider {
  position: relative; }
  #mainslider .flexslider:before, #mainslider .flexslider:after {
    content: '';
    display: block;
    clear: both; }
  #mainslider .container {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto; }
  #mainslider [class*="col-"] {
    position: static; }
  #mainslider .slide_description_wrapper {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    height: 100%;
    z-index: 5;
    padding: 40px 0; }
  #mainslider .slide_description_wrapper:before, #mainslider .slide_description {
    display: inline-block;
    vertical-align: middle; }
  #mainslider .slide_description_wrapper:before {
    content: '';
    display: inline-block;
    width: 0;
    height: 100%;
    vertical-align: middle; }
  #mainslider p {
    font-size: 20px;
    margin-bottom: 20px; }
  #mainslider p:first-child {
    font-size: 30px;
    font-weight: 300;
    letter-spacing: -0.05em;
    margin-bottom: 14px; }
  #mainslider h3 {
    font-size: 40px;
    line-height: 0.9;
    color: #ffffff;
    margin: 0 0 28px;
    padding: 0 0 2px; }
  #mainslider .fa {
    font-size: 42px;
    display: inline-block;
    text-align: center;
    line-height: 100px;
    width: 100px;
    border-radius: 50%;
    border: 1px solid #323232;
    color: #323232;
    margin: 3px;
    -webkit-transition: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
    -ms-transition: all 0.2s linear 0s;
    transition: all 0.2s linear 0s; }
    #mainslider .fa:hover {
      border-color: #6d81b4;
      color: #6d81b4; }
  #mainslider .theme_button {
    margin: 10px 0 10px; }

@media (min-width: 1200px) {
  #mainslider h3 {
    font-size: 80px; } }

@media (min-width: 1600px) {
  #mainslider h3 {
    font-size: 100px; }
  #mainslider p:first-child {
    font-size: 50px; } }

@media (max-width: 767px) {
  #mainslider p {
    font-size: 14px;
    margin-bottom: 5px; }
  #mainslider p:first-child {
    font-size: 14px;
    margin-bottom: 5px; }
  #mainslider h3 {
    font-size: 20px;
    margin-bottom: 10px; }
  #mainslider .theme_button {
    margin-top: 5px; }
  #mainslider .flex-control-nav {
    display: none; }
  #mainslider .slide_description_wrapper {
    padding: 4px 0; }
  #mainslider .fa {
    line-height: 50px;
    width: 50px;
    font-size: 32px; } }

@media (max-width: 600px) {
  #mainslider h3 {
    color: #323232; }
  #mainslider .container {
    position: static; }
  #mainslider .slide_description_wrapper:before {
    display: none; }
  #mainslider .slide_description {
    padding: 10px 0 20px;
    display: block;
    text-align: center; }
  #mainslider .slide_description_wrapper {
    padding: 10px 0 0;
    position: relative; }
  #layerslider .theme_button {
    padding: 5px 1px;
    font-size: 11px; } }

#layerslider {
  padding: 0; }
  #layerslider [class*="container"] {
    padding: 0; }

#breadcrumbs h1 {
  display: inline;
  font-size: 40px; }

#breadcrumbs {
  /* styles for breadcrumbs style 3 */
  /* styles for breadcrumbs style 4 */ }
  @media screen and (min-width: 992px) {
    #breadcrumbs .display_table_md {
      width: auto;
      min-width: 0; }
    #breadcrumbs h1.display_table_cell_md {
      padding-right: 20px; }
    #breadcrumbs .breadcrumb.display_table_cell_md {
      border-left: 1px solid rgba(255, 255, 255, 0.2);
      padding-left: 25px; } }
  #breadcrumbs .bottom_breadcrumbs {
    float: right;
    padding: 0 20px;
    margin: -15px 15px -15px 15px;
    background-color: rgba(0, 0, 0, 0.05); }

#mainteasers [class*="col-"] {
  vertical-align: top; }
  #mainteasers [class*="col-"] .media-left h4 {
    font-size: 24px; }
  #mainteasers [class*="col-"] .media-left h3 {
    font-size: 50px;
    margin: 0; }

@media (min-width: 1200px) {
  #sliderteasers .row {
    margin-top: -100px; } }

#folio {
  overflow: hidden; }

#grid [class*="col-"] {
  margin-top: 15px !important;
  margin-bottom: 15px !important; }

@media (min-width: 500px) {
  #contact.negative_margin .row:last-child .col-sm-12 {
    margin-bottom: -140px; }
  #contact.negative_margin + #copyright > .container {
    padding-top: 130px; }
  #contact .col-sm-4 {
    padding-left: 25px;
    padding-right: 25px; }
  #about .col-md-4 {
    padding-left: 25px;
    padding-right: 25px; } }

#subscribe .form-control {
  width: 350px;
  max-width: 100%;
  margin: 11px auto -5px;
  display: inline-block; }

#partners-carousel {
  text-align: center;
  margin-bottom: 0; }
  #partners-carousel img {
    opacity: 0.8; }
    #partners-carousel img:hover {
      opacity: 1; }
  #partners-carousel .owl-nav {
    margin-top: -12px; }
  #partners-carousel .owl-nav > div:after {
    font-size: 20px;
    color: #6d81b4; }
  #partners-carousel .owl-nav > div:hover {
    opacity: 0.6; }

#related-gallery-items-carousel {
  margin-top: 30px; }

#breadcrumbs.parallax {
  background-image: url(../example/parallax/breadcrumbs.jpg); }

#comingsoon1 {
  background-image: url(../example/parallax/comingsoon1.jpg); }

#comingsoon2 {
  background-image: url(../example/parallax/comingsoon2.jpg); }

#comingsoon3 {
  background-image: url(../example/parallax/comingsoon3.jpg); }

#donate {
  background-image: url(../example/parallax/donate.jpg); }

#progress, #subscribe {
  background-image: url(../example/parallax/progress.jpg); }

#team {
  background-image: url(../example/parallax/blog.jpg); }

#services {
  background: url(../example/parallax/services.jpg) no-repeat 100% 0; }

#featured {
  background: url(../example/parallax/featured.jpg) no-repeat 100% 0; }
  
#mapa_bg {
  background: url(../img/mapa.jpg) no-repeat 100% 0; }  

#featured .teaser .media-body h3, #comingsoon1 .teaser .media-body h3 {
  font-size: 20px; }

#skills {
  background: url(../example/parallax/skills.jpg) no-repeat 100% 0; }

#contact {
  background-image: url(../example/parallax/map.jpg); }

#recent .section_header {
  margin-bottom: 42px; }

#recent > img {
  z-index: 3;
  position: relative;
  right: 0; }
  @media (min-width: 768px) and (max-width: 991px) {
    #recent > img {
      position: absolute;
      top: 20%;
      max-width: 60%; } }
  @media (min-width: 992px) {
    #recent > img {
      position: absolute;
      top: -30px;
      max-width: 60%; } }

#copyright {
  font-size: 16px; }
  #copyright p {
    margin: 0;
    font-size: 18px;
    font-weight: 300; }
  #copyright.table_section .bottom_logo img {
    margin-bottom: 0; }

#map {
  height: 500px; }
  #map img {
    max-width: inherit; }
  #map h3 {
    margin-top: 0; }
  #map p {
    line-height: 1.3; }

/*
**main menu (min 992px) styles
*/
@media (min-width: 992px) {
  /* menu layout */
  .sf-menu, .sf-menu ul {
    margin: 0;
    padding: 0;
    list-style: none; }
  .sf-menu li {
    position: relative; }
  .sf-menu ul {
    position: absolute;
    display: none;
    top: 100%;
    z-index: 99; }
  .sf-menu li:hover > ul, .sf-menu li.sfHover > ul {
    display: block; }
  .sf-menu a {
    display: block;
    position: relative; }
  .sf-menu ul ul {
    top: -20px;
    left: 100%; }
  /* menu skin */
  .sf-menu a {
    font-weight: 400;
    padding: .75em 1.1em;
    text-decoration: none;
    zoom: 1;
    /* IE7 */ }
  .sf-menu li {
    white-space: nowrap;
    /* no need for Supersubs plugin */
    *white-space: normal;
    /* ...unless you support IE7 (let it wrap) */
    -webkit-transition: background .2s;
    transition: background .2s; }
  .sf-menu > li {
    display: inline-block;
    padding: 30px 0 30px;
    position: relative; }
  .sf-menu > li > a {
    padding: 10px 15px;
    color: #ffffff;
    font-size: 16px; }
  .boxed .sf-menu > li > a {
    padding-left: 10px;
    padding-right: 10px; }
  .sf-menu > li > a:hover, .sf-menu > li.active > a {
    color: #6d81b4; }
  .bordered_items .sf-menu {
    text-align: center; }
  .bordered_items .sf-menu > li {
    padding: 0; }
  .bordered_items .sf-menu > li > a {
    padding: 20px 40px 20px 44px; }
  .bordered_items .sf-menu > li + li:before {
    content: '';
    width: 1px;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(255, 255, 255, 0.1); }
  .header_white .sf-menu > li > a {
    color: #323232; }
  .header_white .sf-menu > li > a:hover, .header_white .sf-menu > li.active > a {
    color: #6d81b4; }
  .header_white .sf-menu > li + li:before {
    background-color: #e5e5e5; }
  .header_gradient .sf-menu > li > a:hover, .header_gradient .sf-menu > li.active > a {
    color: #323232; }
  .sf-menu li:hover, .sf-menu li.sfHover {
    /* only transition out, not in */
    -webkit-transition: none;
    transition: none; }
  /* second level */
  .sf-menu ul {
    text-align: left;
    list-style: none;
    padding: 20px 0;
    background-color: #6d81b4;
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.1);
    min-width: 12em;
    /* allow long menu items to determine submenu width */
    *width: 12em;
    /* no auto sub width for IE7, see white-space comment below */ }
  .sf-menu ul a {
    font-size: 16px;
    color: #ffffff;
    padding-left: 40px;
    padding-right: 40px; }
  .sf-menu ul > li + li:before {
    position: absolute;
    content: '';
    height: 1px;
    left: 40px;
    right: 40px;
    background-color: rgba(255, 255, 255, 0.2); }
  .sf-menu ul a:hover, .sf-menu ul li.active a {
    color: #323232; }
  /* third level */
  .sf-menu ul ul {
    background-color: #6d81b4;
    border-top: 0; }
  .affix-top .sf-menu > li > a [class*='icon'] {
    display: block;
    font-size: 1.9em;
    line-height: 1em;
    padding: 0;
    top: 0;
    text-align: center; }
  /*** arrows (for all except IE7) **/
  /* styling for both css and generated arrows */
  .sf-arrows .sf-with-ul:after {
    font-family: 'fontello';
    content: '\e82e';
    padding-left: 7px; }
  /*top menu level*/
  /* styling for right-facing arrows */
  .sf-arrows ul .sf-with-ul:after {
    content: '\e830'; } }

@media (max-width: 1199px) and (min-width: 992px) {
  .sf-menu > li > a {
    padding-left: 6px;
    padding-right: 6px; }
  .boxed .sf-menu > li > a {
    padding-left: 2px;
    padding-right: 2px; } }

@media (max-width: 1199px) and (min-width: 768px) {
  .bordered_items .sf-menu > li > a {
    padding-right: 20px;
    padding-left: 24px; } }

#toggle_menu {
  position: absolute;
  top: 50%;
  margin-top: -30px;
  display: none;
  background-color: #ffffff;
  right: 15px;
  width: 60px;
  height: 60px;
  cursor: pointer;
  z-index: 1001;
  visibility: visible; }
  #toplogo #toggle_menu {
    position: fixed;
    top: 35px;
    margin: 0; }
  #toplogo #toggle_menu.mobile-active {
    top: 0; }
  #toggle_menu:hover span:before {
    top: -7px; }
  #toggle_menu:hover span:after {
    top: 7px; }
  #toggle_menu span, #toggle_menu span:before, #toggle_menu span:after {
    display: block;
    width: 20px;
    height: 1px;
    position: absolute;
    background-color: #323232;
    content: '';
    left: 0;
    -webkit-transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -o-transition: all 0.2s ease-in-out 0s;
    -ms-transition: all 0.2s ease-in-out 0s;
    transition: all 0.2s ease-in-out 0s; }
  #toggle_menu span {
    left: 20px;
    top: 50%;
    margin-top: -1px; }
  #toggle_menu span:before {
    top: -5px; }
  #toggle_menu span:after {
    top: 5px; }

/*
**main menu mobile styles
*/
@media (max-width: 991px) {
  #mainmenu_wrapper {
    /*position: relative;*/
    position: fixed;
    visibility: hidden;
    z-index: 10;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: transparent;
    opacity: 0;
    -webkit-transition: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
    -ms-transition: all 0.2s linear 0s;
    transition: all 0.2s linear 0s; }
  .mobile-active #mainmenu_wrapper {
    visibility: visible;
    opacity: 1;
    background-color: #111;
    background-color: rgba(0, 0, 0, 0.9); }
  #toggle_menu {
    display: block; }
    #toggle_menu.mobile-active {
      background-color: #ffffff !important;
      border: none;
      top: 0;
      right: 0;
      position: fixed;
      margin: 0;
      z-index: 3000; }
      #toggle_menu.mobile-active:after {
        position: absolute;
        top: 14px;
        left: 10px;
        font-family: 'rt-icons';
        content: "\e602";
        font-size: 40px;
        color: #323232; }
      #toggle_menu.mobile-active span {
        display: none; }
  .nav-justified > li > a {
    text-align: left; }
  .sf-menu {
    position: fixed;
    overflow: auto;
    background-color: #ffffff;
    width: auto;
    top: 30px;
    left: 30px;
    bottom: 30px;
    right: 30px;
    padding: 20px;
    font-size: 1.1em;
    text-transform: uppercase;
    font-weight: 800;
    word-wrap: break-word;
    text-align: left; }
  .sf-menu a {
    color: #323232; }
  .sf-menu ul {
    list-style: none;
    padding-left: 10px; }
  .sf-menu ul li a {
    display: block;
    padding: 10px;
    font-weight: normal;
    text-transform: none; }
  .sf-menu ul li a:before {
    content: '-';
    padding-right: 5px; }
  .sf-menu ul ul li a:before {
    content: '--';
    padding-right: 5px; }
  /*** arrows (for all except IE7) **/
  .sf-arrows .sf-with-ul {
    padding-right: 2.5em;
    *padding-right: 1em;
    /* no CSS arrows for IE7 (lack pseudo-elements) */ }
  /* styling for both css and generated arrows */
  .sf-arrows .sf-with-ul:after {
    font-family: 'fontello';
    content: '\e82e';
    position: absolute;
    right: 1.44em;
    height: 0;
    width: 0;
    font-size: 20px; }
  /*top menu level*/
  .sf-arrows .sfHover > a, .sf-arrows .sfHover > a:hover {
    color: #ffffff;
    background-color: #323232; } }

@media (max-width: 400px) {
  .sf-menu {
    top: 15px;
    left: 15px;
    bottom: 15px;
    right: 15px;
    padding: 15px 5px; } }

/*
**blog
*/
article.post iframe {
  margin-bottom: -8px; }

h1.entry-title {
  font-size: 50px;
  margin-bottom: 5px; }

h2.entry-title {
  font-size: 50px;
  margin-bottom: 0;
  line-height: 0.9; }

h3.entry-title {
  margin-bottom: 4px; }

article.post + article.post {
  margin-top: 50px; }

article.post.isotope-item {
  margin: 0 0 30px !important; }

.entry-title {
  margin-top: 0; }

.entry-header {
  font-weight: 400; }

.entry-meta {
  margin: 4px 0 17px 0; }
  .entry-meta span + span {
    margin-left: 14px; }
  .entry-meta i {
    font-size: 14px;
    margin-right: 5px; }

.entry-tags {
  padding: 21px 0 0;
  margin: 27px 0 14px;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }
  .entry-tags span + span {
    margin-left: 14px; }
  .entry-tags i {
    font-size: 14px;
    margin-right: 5px; }

.entry-meta:before, .entry-meta:after, .comment-meta:before, .comment-meta:after {
  display: block;
  clear: both;
  content: '';
  width: 0;
  height: 0; }

.entry-thumbnail {
  text-align: center;
  position: relative; }

.entry-thumbnail img {
  background-color: #ffffff; }

.entry-thumbnail[class*='col-'] {
  margin-bottom: 0; }

/* additional meta in corner of thumbnail */
.entry-meta-corner {
  position: absolute;
  z-index: 2;
  text-align: center;
  color: #ffffff;
  background-color: #6d81b4; }
  .entry-meta-corner a {
    color: #ffffff; }
  .entry-meta-corner .date {
    color: #ffffff;
    display: block;
    padding-bottom: 8px; }
    .entry-meta-corner .date strong {
      color: #323232;
      display: block;
      font-size: 40px;
      padding: 14px 17px 0; }
  .entry-meta-corner .comments-link {
    display: block;
    padding: 4px 0;
    background-color: #6d81b4; }
    .entry-meta-corner .comments-link i {
      font-size: 14px; }

.post-content {
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-top: none;
  padding: 35px 44px 20px; }
  .post-content .theme_button {
    margin: 18px 0 10px; }

@media (max-width: 600px) {
  .post-content {
    padding-left: 20px;
    padding-right: 20px; } }

.entry-excerpt {
  color: #323232;
  font-weight: 300;
  font-size: 24px;
  margin: 24px 0 24px; }
  .entry-excerpt p {
    margin-bottom: 16px !important; }

.st_facebook_hcount, .st_twitter_hcount, .st_googleplus_hcount {
  position: relative;
  text-align: right; }

.st_facebook_hcount span, .st_twitter_hcount span, .st_googleplus_hcount span {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  -ms-box-sizing: content-box;
  box-sizing: content-box; }

.author-meta h2 {
  margin: 0 0 2px; }
.author-meta .author-place {
  margin: -3px 0 7px;
  font-size: 14px; }

/* gallery single */
.gallery-items-nav {
  margin-top: 60px; }
  .gallery-items-nav h4 {
    margin: -5px 0 0; }
  .gallery-items-nav .media {
    position: relative;
    padding: 10px 0; }
  .gallery-items-nav .next-item img {
    max-width: none;
    padding: 0 30px 0 0; }
  .gallery-items-nav .next-item i {
    right: -10px; }
  .gallery-items-nav .prev-item img {
    max-width: none;
    padding: 0 0 0 30px; }
  .gallery-items-nav .prev-item i {
    left: -10px; }
  .gallery-items-nav a {
    position: relative; }
    .gallery-items-nav a i {
      position: absolute;
      top: 50%;
      margin-top: -14px;
      font-size: 23px; }

/* common side item */
.side-item {
  border: 1px solid #e5e5e5; }

.item-content {
  margin: 34px 40px; }

.item-media {
  margin: -1px 0 0 -1px; }

@media (min-width: 992px) {
  .item-content.left {
    margin-right: 10px; }
  .item-content.right {
    margin-left: 10px; } }

@media (max-width: 767px) {
  .entry-title {
    font-size: 28px !important; } }

/* events */
.event-item {
  margin-bottom: 30px; }
  .event-item h2 {
    font-size: 28px;
    font-weight: 300; }

/*comments*/
.comments-area {
  margin-top: 76px; }
  .comments-area h2 {
    margin-bottom: 28px;
    font-size: 30px;
    font-size: 40px;
    font-weight: 700; }
  .comments-area li {
    list-style: none;
    padding-top: 15px; }

.comments-area .media-object {
  max-width: 50px;
  border-radius: 50%; }

.comment-list {
  margin: 0;
  padding: 0;
  position: relative; }
  .comment-list ol {
    padding-left: 30px; }

@media (min-width: 992px) {
  .comment-list ol {
    padding-left: 70px; } }

@media (min-width: 768px) {
  .entry-thumbnail.col-sm-5 {
    padding-right: 0; } }

.comments-area .media-body {
  padding: 0 0 8px 0;
  margin-bottom: 7px; }

.comment-meta {
  line-height: 1;
  margin-bottom: 0;
  padding-bottom: 10px; }
  .comment-meta .comment-date {
    display: block;
    margin-top: 4px; }
  .comment-meta .author_url {
    color: #323232;
    font-weight: 700; }

.reply {
  float: right; }
  .reply i {
    font-size: 14px; }

.comment-respond {
  margin-top: 42px; }
  .comment-respond h3 {
    font-size: 40px;
    margin: 0 0 35px; }
  .comment-respond p {
    margin-bottom: 10px;
    position: relative; }

/*
**shop
*/
/* sort panel */
.storefront-sorting {
  line-height: 1; }

#toggle_shop_view {
  margin-left: 14px; }

#toggle_shop_view:before, #toggle_shop_view:after {
  font-family: 'FontAwesome';
  display: inline-block;
  background-color: #323232;
  color: #ffffff;
  padding: 17px 16px 18px;
  font-size: 14px;
  -webkit-transition: all 0.2s ease-in-out 0s;
  -moz-transition: all 0.2s ease-in-out 0s;
  -o-transition: all 0.2s ease-in-out 0s;
  -ms-transition: all 0.2s ease-in-out 0s;
  transition: all 0.2s ease-in-out 0s; }

#toggle_shop_view:before {
  content: "\f00a";
  margin-right: 5px; }

#toggle_shop_view:after {
  content: "\f03a";
  background-color: #6d81b4; }

#toggle_shop_view.grid-view:before {
  background-color: #6d81b4; }

#toggle_shop_view.grid-view:after {
  background-color: #323232; }

#sort_view {
  color: #323232;
  display: inline-block;
  padding: 16px 14px 17px;
  font-size: 14px;
  border: 1px solid rgba(0, 0, 0, 0.1); }

.columns-1 .product {
  width: 100%;
  margin-right: 0;
  float: none; }

@media (min-width: 768px) {
  .columns-2 .product {
    width: 50%;
    float: left; }
  .columns-3 .product {
    width: 33.33333%;
    float: left; }
  .columns-4 .product {
    width: 25%;
    float: left; } }

.products {
  margin-left: -15px;
  margin-right: -15px; }
  .products:before, .products:after {
    content: '';
    clear: both;
    display: block; }

.product {
  margin-bottom: 30px;
  padding-left: 15px;
  padding-right: 15px; }
  .owl-item .product {
    padding: 0; }
  .product h3 {
    font-weight: 300;
    font-size: 28px;
    margin: 20px 140px 12px 0; }
  .product .theme_button {
    margin: 4px 0 11px;
    padding-right: 25px;
    padding-left: 25px; }
  .product [class*="col-"]:first-child a span {
    position: absolute;
    background-color: #6d81b4;
    color: #ffffff;
    padding: 0 10px;
    text-transform: uppercase;
    font-size: 14px;
    top: 10px;
    right: 25px; }
    .product [class*="col-"]:first-child a span.onsale {
      background-color: #6d81b4;
      left: 25px;
      right: auto; }

.star-rating {
  overflow: hidden;
  position: relative;
  height: 1em;
  line-height: 1em;
  font-size: 11px;
  width: 5.1em;
  font-family: "fontawesome";
  margin-bottom: 4px; }
  .star-rating:before, .star-rating span:before {
    content: "\f005\f005\f005\f005\f005";
    float: left;
    top: 0;
    left: 0;
    position: absolute;
    letter-spacing: 0.1em;
    letter-spacing: 0\9;
    color: #e5e5e5; }
  .star-rating span {
    overflow: hidden;
    float: left;
    top: 0;
    left: 0;
    position: absolute;
    padding-top: 1.5em; }
    .star-rating span:before {
      color: #fa5c5d; }

.price {
  position: absolute;
  right: 50px;
  top: 36px;
  font-weight: 700;
  color: #323232;
  font-size: 28px; }
  .price del {
    color: #b2b2b2;
    font-size: 16px;
    font-weight: normal; }
  .price ins {
    text-decoration: none; }

.grid-view {
  text-align: center; }
  .grid-view .product [class*="col-"]:last-child {
    padding: 18px 40px 18px 36px;
    margin-top: 0 !important; }
  .grid-view h3 {
    font-size: inherit;
    color: inherit;
    font-weight: 400;
    margin: 10px 0 14px;
    position: relative;
    letter-spacing: 0; }
    .grid-view h3:before, .grid-view h3:after {
      content: '';
      height: 1px;
      width: 23%;
      position: absolute;
      background-color: rgba(0, 0, 0, 0.1);
      bottom: -20px;
      right: 14%; }
    .grid-view h3:before {
      right: auto;
      left: 14%; }
  .grid-view .star-rating {
    margin: auto; }
  .grid-view .price {
    position: static;
    display: block;
    margin: 8px 0 22px; }
  .grid-view .product-description {
    display: none; }
  .grid-view [class*="col-"] {
    width: 100%;
    float: none; }

.list-view .product {
  float: none;
  width: 100%; }
  .list-view .product [class*="col-"]:last-child {
    padding: 18px 40px 18px 36px;
    margin-top: 0 !important; }

/* single-product */
.summary h1 {
  margin-bottom: 3px; }
.summary .product-rating {
  margin-bottom: 10px; }
.summary .price {
  position: static;
  margin-top: 20px;
  font-size: 50px; }
  .summary .price del {
    font-size: 28px; }
.summary .star-rating {
  display: inline-block;
  top: 4px;
  margin-right: 20px; }
.summary .stock {
  margin-bottom: 0; }
.summary .email-to {
  margin-bottom: 10px; }
.summary .product-option-name {
  display: inline-block;
  margin-top: 15px; }
.summary .theme_button {
  margin-top: 0; }

.owl-carousel.product-thumbnails {
  margin: 30px 0 50px;
  padding-left: 25px;
  padding-right: 25px; }
  .owl-carousel.product-thumbnails .owl-nav {
    margin-top: -18px; }
    .owl-carousel.product-thumbnails .owl-nav > div {
      right: 0; }
    .owl-carousel.product-thumbnails .owl-nav > div:first-child {
      left: 0; }
  .owl-carousel.product-thumbnails .owl-nav > div:after {
    font-size: 16px;
    color: #323232; }

.product-icons .teaser [class*="_bg_color"] {
  padding: 10px; }

.product + .nav-tabs {
  margin-top: 60px; }

.tab-content .comments-area {
  margin-top: 10px; }
.tab-content .comment-respond {
  margin-top: 0; }
  .tab-content .comment-respond h3 {
    margin-bottom: 0;
    font-size: 28px; }

.comment .star-rating {
  display: inline-block;
  top: 5px;
  margin-left: 10px; }

.stars {
  position: relative; }
  .stars a {
    font-size: 11px;
    display: inline-block;
    font-weight: 700;
    text-indent: -9999px;
    position: relative;
    border-bottom: 0 !important;
    outline: 0;
    color: #fa5c5d; }
  .stars a:after {
    font-family: "fontawesome";
    text-indent: 0;
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 0.1em; }
  .stars a.star-1 {
    width: 1em; }
  .stars a.star-1:after {
    content: "\f005"; }
  .stars a.star-2 {
    width: 2em; }
  .stars a.star-2:after {
    content: "\f005\f005"; }
  .stars a.star-3 {
    width: 3em; }
  .stars a.star-3:after {
    content: "\f005\f005\f005"; }
  .stars a.star-4 {
    width: 4em; }
  .stars a.star-4:after {
    content: "\f005\f005\f005\f005"; }
  .stars a.star-5 {
    width: 5em; }
  .stars a.star-5:after {
    content: "\f005\f005\f005\f005\f005"; }

/* cart */
.shop-adds {
  font-size: 28px;
  font-weight: 300;
  line-height: 1.4; }
  .shop-adds.teaser {
    margin-bottom: 0; }
    .shop-adds.teaser [class*="_bg_color"] {
      padding: 12px; }

.cart-table {
  margin-bottom: 30px; }

.cart_item .media {
  margin-left: -15px; }
.cart_item img {
  max-width: 80px; }
.cart_item h4 {
  margin-bottom: 12px; }
.cart_item td {
  vertical-align: middle !important;
  padding: 18px 10px !important; }

.cart_totals h4 {
  margin: 60px 0 30px; }
.cart_totals td {
  padding: 20px 10px !important; }

/* cart gradient section with teasers */
.coupon-teaser {
  background-color: #ffffff;
  padding: 20px 30px; }

.shipping-calculator-teaser {
  background-color: #ffffff;
  padding: 20px 30px; }

.shop-teaser {
  text-align: center;
  padding: 30px 30px; }

.quantity {
  position: relative;
  display: inline-block; }
  .quantity [type="button"] {
    position: absolute;
    right: 0;
    top: 0;
    line-height: 1;
    border: none;
    width: 22px;
    height: 24px;
    background-color: transparent; }
    .quantity [type="button"].minus {
      top: auto;
      bottom: 0; }
  .quantity [type="number"] {
    padding-right: 30px;
    padding-left: 20px;
    max-width: 70px; }

/* chekcout */
.shop-info {
  margin-bottom: 15px; }

form.checkout .checkbox {
  margin: -5px 0 0; }
form.checkout .lost_password {
  margin: 15px 0 -15px; }
form.checkout label {
  text-align: left !important; }

#order_review table thead {
  display: none; }
#order_review table td + td {
  border-left: none;
  text-align: right; }

.shop-checkout-payment {
  margin-top: 40px; }
  .shop-checkout-payment .radio {
    margin: 2px 0; }

/* shop widgets */
/* cart */
.widget_shopping_cart img {
  max-width: 80px; }
.widget_shopping_cart h4 {
  margin: 0;
  font-size: 16px;
  font-weight: 400; }
.widget_shopping_cart .cart_list {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-bottom: 20px;
  margin: 7px 0; }
.widget_shopping_cart .media-body:last-child {
  width: 1000px; }
  .widget_shopping_cart .media-body:last-child i {
    padding: 0 0 0 10px; }

/* price filter */
.widget_price_filter input[readonly] {
  background-color: transparent;
  padding-right: 3px;
  padding-left: 3px;
  max-width: 89px;
  margin-bottom: 4px;
  display: inline-block; }
.widget_price_filter .ui-slider-horizontal {
  margin-bottom: 30px; }
.widget_price_filter label[for] {
  display: inline !important;
  padding-right: 4px; }
.widget_price_filter .form-group {
  display: inline-block; }
.widget_price_filter .theme_button {
  margin-top: 30px; }

/*! jQuery UI - v1.11.1 - 2014-10-03
* http://jqueryui.com
* Includes: core.css, slider.css
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
/* Layout helpers
----------------------------------*/
.ui-helper-hidden {
  display: none; }

.ui-helper-hidden-accessible {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; }

.ui-helper-reset {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  line-height: 1.3;
  text-decoration: none;
  font-size: 100%;
  list-style: none; }

.ui-helper-clearfix:before, .ui-helper-clearfix:after {
  content: "";
  display: table;
  border-collapse: collapse; }

.ui-helper-clearfix:after {
  clear: both; }

.ui-helper-clearfix {
  min-height: 0;
  /* support: IE7 */ }

.ui-helper-zfix {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: absolute;
  opacity: 0;
  filter: Alpha(Opacity=0);
  /* support: IE8 */ }

.ui-front {
  z-index: 100; }

/* Interaction Cues
----------------------------------*/
.ui-state-disabled {
  cursor: default !important; }

/* Icons
----------------------------------*/
/* states and images */
.ui-icon {
  display: block;
  text-indent: -99999px;
  overflow: hidden;
  background-repeat: no-repeat; }

/* Misc visuals
----------------------------------*/
/* Overlays */
.ui-widget-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%; }

.ui-slider {
  position: relative;
  text-align: left;
  background-color: #fafafa; }

.ui-slider .ui-slider-handle {
  position: absolute;
  z-index: 2;
  width: 12px;
  height: 12px;
  cursor: default;
  -ms-touch-action: none;
  touch-action: none;
  background-color: #323232;
  border-radius: 50%; }

.ui-slider .ui-slider-range {
  position: absolute;
  z-index: 1;
  font-size: .7em;
  display: block;
  border: 0;
  background-position: 0 0; }

/* support: IE8 - See #6727 */
.ui-slider.ui-state-disabled .ui-slider-handle, .ui-slider.ui-state-disabled .ui-slider-range {
  filter: inherit; }

.ui-slider-horizontal {
  height: 10px; }

.ui-slider-horizontal .ui-slider-handle {
  top: -1px;
  margin-left: -.6em; }

.ui-slider-horizontal .ui-slider-range {
  top: 0;
  height: 100%; }

.ui-slider-horizontal .ui-slider-range-min {
  left: 0; }

.ui-slider-horizontal .ui-slider-range-max {
  right: 0; }

.ui-slider-vertical {
  width: .8em;
  height: 100px; }

.ui-slider-vertical .ui-slider-handle {
  left: -.3em;
  margin-left: 0;
  margin-bottom: -.6em; }

.ui-slider-vertical .ui-slider-range {
  left: 0;
  width: 100%; }

.ui-slider-vertical .ui-slider-range-min {
  bottom: 0; }

.ui-slider-vertical .ui-slider-range-max {
  top: 0; }

/* color layered nav */
.widget_layered_nav .color-filters li {
  display: inline-block;
  margin: 0 29px 14px 0; }
.widget_layered_nav .color-filters a {
  display: inline-block;
  width: 23px;
  height: 23px;
  font-size: 0;
  background-color: #ccc;
  color: transparent;
  position: relative; }
  .widget_layered_nav .color-filters a:before {
    content: '';
    display: block;
    position: absolute;
    border: 1px solid rgba(0, 0, 0, 0.1);
    top: -2px;
    left: -2px;
    bottom: -2px;
    right: -2px; }
.widget_layered_nav .color-filters span {
  position: relative;
  top: 2px;
  left: 5px; }

/* widget_products */
.widget_products img {
  max-width: 80px; }
.widget_products .media h3 {
  font-size: inherit;
  font-weight: normal;
  margin: 3px 0 10px;
  letter-spacing: 0; }
.widget_products .price {
  position: static;
  font-size: 24px; }

/*
**widgets
*/
aside .widget a {
  color: #b2b2b2; }

aside .widget a:hover {
  color: #6d81b4; }

.module-header {
  margin: 0 0 38px;
  text-transform: capitalize;
  font-size: 40px; }
  footer .module-header {
    font-size: 28px; }

.widget label[for], .comment-form label[for], .contact-form label[for], .order-form label[for] {
  display: none; }

.widget > h3, .widget-title {
  font-size: 40px;
  margin: 0 0 28px;
  position: relative; }

.widget li {
  position: relative; }

footer .widget-title {
  font-size: 28px; }

aside .widget + .widget {
  margin-top: 43px; }

.widget_recent_entries ul, .widget_recent_comments ul, .widget_archive ul, .widget_categories ul, .widget_meta ul, .widget_nav_menu ul, .widget_pages ul, .widget_flickr ul, .widget_twitter ul {
  list-style: none;
  margin: 0;
  padding: 0; }

/*
widget_search,
widget_mailchimp
*/
.widget_search .form-inline, .widget_mailchimp .form-inline {
  position: relative; }

.widget_search .form-inline .form-group, .widget_mailchimp .form-inline .form-group {
  display: block;
  vertical-align: top;
  position: relative; }

.widget_search .form-inline input[type="text"], .widget_mailchimp .form-inline input[type="email"] {
  padding-right: 50px;
  display: block;
  width: 100%; }

@media (min-width: 768px) {
  .widget_search .form-group.inline-block, .widget_mailchimp .form-group.inline-block {
    min-width: 370px;
    margin-right: 5px; } }

.widget_search .form-inline .theme_button, .widget_mailchimp .form-inline .theme_button {
  font-size: 0;
  padding: 12px;
  margin: 0; }

.widget_search .form-inline .theme_button, .widget_mailchimp .form-inline .theme_button {
  position: absolute;
  right: 0;
  top: -1px;
  background-color: transparent !important;
  border-color: transparent !important;
  color: #6d81b4 !important; }
  .widget_search .form-inline .theme_button:before, .widget_mailchimp .form-inline .theme_button:before {
    font-size: 24px;
    content: "\e626";
    font-family: 'rt-icons'; }

.widget_mailchimp .form-inline .theme_button:before {
  content: "\e6aa"; }

/*
widget_recent_entries
widget_recent_comments
widget_archive
widget_categories
widget_meta
widget_nav_menu
widget_pages
*/
.widget_recent_comments li {
  padding: 15px 0; }
.widget_recent_comments li:first-child {
  padding-top: 0; }
.widget_recent_comments li:before {
  font-family: 'rt-icons';
  content: "\e674";
  font-size: 20px;
  line-height: 1;
  position: relative;
  top: 2px;
  padding-right: 10px;
  color: #323232; }

.widget_recent_entries li {
  padding: 15px 0 15px 30px; }
.widget_recent_entries p {
  margin-bottom: 0; }
.widget_recent_entries li:first-child {
  padding-top: 0; }
.widget_recent_entries li:before {
  font-family: 'rt-icons';
  content: "\e67c";
  font-size: 14px;
  line-height: 1;
  position: absolute;
  top: 24px;
  left: 0;
  padding-right: 10px;
  color: #6d81b4; }
.widget_recent_entries li:first-child:before {
  top: 9px; }

.widget_recent_entries li + li, .widget_recent_comments li + li, .widget_archive li + li, .widget_categories li + li, .widget_meta li + li, .widget_popular_entries li + li, .widget_nav_menu li + li, .widget_pages li + li {
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

.widget_archive a, .widget_categories a, .widget_meta a, .widget_nav_menu a, .widget_pages a {
  display: inline-block;
  padding: 9px 4px 10px 0; }

.widget_archive a:before, .widget_categories a:before, .widget_meta a:before, .widget_nav_menu a:before, .widget_pages a:before {
  font-family: 'fontello';
  content: '\e804';
  font-size: 9px;
  color: #6d81b4;
  position: absolute;
  right: 10px;
  top: 50%;
  margin-top: -15px; }

.widget_archive span, .widget_categories span {
  color: #323232; }

.widget_archive li:first-child span, .widget_categories li:first-child span {
  margin-top: -14px; }

.widget_nav_menu ul ul {
  border-top: 1px solid rgba(0, 0, 0, 0.1);
  padding-left: 20px; }

.widget_nav_menu ul ul li:first-child a {
  padding-top: 15px; }

@media (min-width: 768px) {
  #copyright .widget_nav_menu li, #topmenu .widget_nav_menu li {
    display: inline-block;
    position: relative;
    border: none;
    padding-right: 5px; }
  #copyright .widget_nav_menu li:before, #topmenu .widget_nav_menu li:before {
    content: '';
    position: absolute;
    padding: 0;
    left: -5px;
    top: 5px;
    bottom: 5px;
    width: 1px;
    background-color: rgba(0, 0, 0, 0.1);
    opacity: 0.3;
    display: block; }
  #copyright .widget_nav_menu li:first-child:before, #topmenu .widget_nav_menu li:first-child:before {
    display: none; }
  #copyright .widget_nav_menu a, #topmenu .widget_nav_menu a {
    padding: 0 10px; }
  #copyright .widget_nav_menu a:before, #topmenu .widget_nav_menu a:before {
    display: none; } }

/*widget_tag_cloud*/
.widget_tag_cloud a {
  border: 1px solid #e5e5e5;
  padding: 4px 20px;
  margin: 0 4px 10px 0;
  font-size: 14px;
  display: inline-block; }
  aside .widget_tag_cloud a {
    color: #323232; }
    aside .widget_tag_cloud a:hover {
      color: #ffffff; }

.widget_tag_cloud a:hover {
  background-color: #6d81b4;
  border-color: #6d81b4;
  color: #ffffff; }

/*widget_flickr*/
.widget_flickr li {
  display: inline-block;
  margin: 0 10px 10px 0; }
.widget_flickr img {
  max-width: 70px;
  border-radius: 1px; }

/*widget_popular_entries*/
.widget_popular_entries p {
  margin-bottom: 0; }
.widget_popular_entries .media-body {
  overflow: visible; }
.widget_popular_entries .media-heading {
  line-height: 1;
  margin-bottom: 8px;
  color: #6d81b4; }
.widget_popular_entries .media-object {
  max-width: 80px; }
.widget_popular_entries li {
  margin-top: 2px;
  padding: 25px 0 18px 0; }
.widget_popular_entries li:first-child {
  padding-top: 8px; }

/*widget_calendar*/
#calendar_wrap {
  width: 100%;
  margin-bottom: 15px;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar; }
  @media (min-width: 768px) and (max-width: 992px) {
    #calendar_wrap {
      overflow-x: auto;
      overflow-y: hidden; } }

.widget_calendar table {
  font-size: 16px;
  line-height: 26px;
  width: 270px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-top: none;
  position: relative;
  text-align: center; }
.widget_calendar caption {
  line-height: 1;
  font-weight: 400;
  font-weight: 700;
  font-size: 24px;
  padding: 18px 0 18px;
  text-align: center;
  color: #ffffff;
  background-color: #6d81b4; }
.widget_calendar thead {
  background-color: #6d81b4;
  border: 1px solid #6d81b4;
  border-width: 7px 1px 7px 1px;
  color: #ffffff; }
  .widget_calendar thead th:first-child {
    padding-left: 30px; }
  .widget_calendar thead th:last-child {
    padding-right: 30px; }
.widget_calendar tbody {
  font-weight: 300; }
  .widget_calendar tbody tr:first-child td {
    padding-top: 18px; }
  .widget_calendar tbody tr:last-child td {
    padding-bottom: 18px; }
  .widget_calendar tbody td {
    border: none;
    padding: 1px 4px;
    position: relative; }
    .widget_calendar tbody td:first-child {
      padding-left: 30px; }
    .widget_calendar tbody td:last-child {
      padding-right: 30px; }
  .widget_calendar tbody td a {
    font-weight: 700;
    color: #6d81b4; }
  .widget_calendar tbody td a:hover {
    color: #6d81b4; }
.widget_calendar th {
  text-align: center; }
.widget_calendar tfoot {
  position: absolute;
  top: 0;
  right: 0;
  left: 0; }
  .widget_calendar tfoot td {
    position: absolute;
    top: 14px; }
    .widget_calendar tfoot td a {
      color: #ffffff;
      text-align: center;
      font-size: 0;
      width: 40px;
      height: 40px;
      display: inline-block; }
      .widget_calendar tfoot td a:hover {
        color: #ffffff;
        background-color: #6d81b4;
        border-color: #6d81b4; }
  .widget_calendar tfoot #prev {
    left: 16px; }
    .widget_calendar tfoot #prev a:before {
      font-size: 32px;
      font-family: 'fontello';
      content: '\e840'; }
  .widget_calendar tfoot #next {
    right: 16px; }
    .widget_calendar tfoot #next a:after {
      font-size: 32px;
      font-family: 'fontello';
      content: '\e841'; }

/*widget_twitter*/
.tweet_avatar {
  float: left; }

.tweet_right {
  overflow: hidden;
  zoom: 1;
  margin-left: 60px; }

.tweet_list li + li {
  margin-top: 10px;
  clear: both; }

.tweet_list li + li .tweet_right {
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

.tweet_list li + li .tweet_right, .tweet_list li + li .tweet_avatar {
  padding-top: 10px; }

/* widget schedule */
.widget_schedule ul {
  margin: 0; }

/*
**shortcodes
*/
/*teasers*/
.teaser {
  position: relative;
  margin-bottom: 30px; }
  .teaser[class*="_bg_color"] {
    padding: 35px 40px; }
  .teaser [class*="_bg_color"] {
    padding: 21px;
    margin-bottom: 2px;
    text-align: center; }
    .teaser [class*="_bg_color"] + h4 {
      margin-top: 24px; }
  .teaser .border_icon {
    padding: 0.35em;
    min-width: 1.8em;
    border-width: 3px;
    border-style: solid; }
  .teaser i {
    min-width: 1em; }
  .teaser h2 {
    font-size: 50px;
    font-weight: 400;
    margin-bottom: 33px;
    position: relative;
    padding-bottom: 10px; }
    .teaser h2:after {
      content: '';
      position: absolute;
      width: 50px;
      margin-left: -25px;
      height: 1px;
      background-color: rgba(204, 204, 204, 0.2);
      bottom: -12px;
      left: 50%; }
  .teaser h3 {
    margin-bottom: 16px;
    font-size: 24px; }
  .teaser h4 {
    font-size: 20px;
    margin-bottom: 18px; }
  .teaser .media-left {
    padding-right: 30px; }
  .teaser .media-body h3 {
    margin-bottom: 8px;
    font-size: 28px; }
  .teaser .media-body h4 {
    margin-bottom: 6px; }
  @media (max-width: 500px) {
    .teaser h2, .teaser h3, .teaser h4 {
      font-size: 1.4em !important; } }
  .teaser [class*="count"] {
    font-family: 'Open Sans', sans-serif;
    font-size: 80px;
    margin: 10px 0 6px; }
    .teaser [class*="count"] + p {
      margin: 0;
      font-size: 28px;
      font-weight: 300; }
  .teaser .theme_button {
    margin: 22px 0 0; }
  .section_padding_bottom_0 .teaser {
    margin-bottom: 0; }

.teaser_icon {
  display: inline-block;
  line-height: 1;
  -webkit-transition: all 0.2s ease-in-out 0s;
  -moz-transition: all 0.2s ease-in-out 0s;
  -o-transition: all 0.2s ease-in-out 0s;
  -ms-transition: all 0.2s ease-in-out 0s;
  transition: all 0.2s ease-in-out 0s; }
  .teaser_icon + p {
    margin-top: 27px; }
  .teaser:hover .teaser_icon {
    -webkit-animation: pulse 0.9s infinite;
    -moz-animation: pulse 0.9s infinite;
    -ms-animation: pulse 0.9s infinite;
    -o-animation: pulse 0.9s infinite;
    animation: pulse 0.9s infinite; }

.size_big {
  font-size: 64px; }

.size_normal {
  font-size: 42px; }

.size_small {
  font-size: 26px; }

/*horizontal teaser*/
.teaser.table_section {
  margin-top: 26px; }
  .teaser.table_section + .teaser.table_section {
    margin-top: 70px; }

@media (min-width: 768px) {
  .teaser.table_section [class*="col-"] * {
    margin: 0;
    top: 0; } }

@media (max-width: 767px) {
  .teaser.table_section [class*="col-"] * {
    text-align: center !important; } }



</style>
</html>
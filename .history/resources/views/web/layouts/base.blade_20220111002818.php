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

    
    
    
    
    

</style>
</html>
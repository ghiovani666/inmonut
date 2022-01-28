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
/* ::::::::::::::::::::::::::::::SUB MENUS::::::::::::::::::::::::::::::::::: */
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




/* ::::::::::::::::::::::::::::::ESTILOS DE PAKETES:::::::::::::::::::::::::::::::::::: */
/* section>[class*="container"] {
    padding-top: 100px;
    padding-bottom: 100px;
} */


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
    transition: all 0.6s linear 0s;
}

.color1 {
    background-color: #6d81b4;
    border-color: #6d81b4;
}

.color2 {
    background-color: #6d81b4;
    border-color: #6d81b4;
}

.theme_button:active,
.theme_button:hover,
.theme_button:focus {
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
    transition: all 0.05s linear 0s;
}

.theme_button:active {
    top: 1px;
}

.theme_button.inverse {
    color: #323232;
    background-color: transparent;
    border: 1px solid #323232;
}

.block_button {
    display: block;
    width: 100%;
    text-align: center;
}

/*
**utilites
*/
.alignleft {
    float: left;
    margin: 5px 30px 15px 0;
    max-width: 50%;
}

.round {
    border-radius: 50%;
}

.inline-block {
    display: inline-block;
    max-width: 100%;
}

.with_background {
    padding: 40px;
    background-color: #f5f5f5;
}

.with_border {
    padding: 40px;
    border: 1px solid #e5e5e5;
}

.before_cover,
.after_cover,
.before_cover>*,
.after_cover>* {
    position: relative;
    z-index: 2;
}

.before_cover:before,
.after_cover:after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

#response,
.highlight {
    color: #6d81b4;
    border-color: #6d81b4;
}

.highlight2 {
    color: #0f2676;
    border-color: #0f2676;
}

.highlight3 {
    color: #000000;
    border-color: #ffffff;
}

.highlight4 {
    color: #ffffff;
    border-color: #ffffff;
}

.red,
.required {
    color: #fa5c5d;
}

.black {
    color: #000000;
    border-color: #000000;
}

.grey {
    color: #323232;
    border-color: #323232;
}

.greylinks a {
    color: #b2b2b2;
}

.darklinks a {
    color: #323232;
}

.thin {
    font-weight: 300;
}

.bold {
    font-weight: 700;
}

.quotesign {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 1;
}

.quotesign:before {
    font-size: 150px;
    font-family: 'PT Sans', sans-serif;
    content: '‘‘';
    position: absolute;
    left: 0;
    top: 0;
    line-height: 1;
}

[class*="_bg_color"] {
    color: #ffffff;
}

[class*="_bg_color"] h1,
[class*="_bg_color"] h2,
[class*="_bg_color"] h3,
[class*="_bg_color"] h4,
[class*="_bg_color"] h5,
[class*="_bg_color"] h6 {
    color: #ffffff;
}

.light_bg_color {
    background-color: #ffffff;
}

.main_bg_color {
    color: #ffffff;
    background-color: #0f2676;
}

.dark_bg_color {
    background-color: #000000;
}

.darkgrey_bg_color {
    background-color: #323232;
}

/*dividers*/
.divider_20 {
    margin: 20px 0;
}

.divider_30 {
    margin: 30px 0;
}

.divider_40 {
    margin: 40px 0;
}

.topmargin_0 {
    margin-top: 0 !important;
}

.topmargin_10 {
    margin-top: 10px;
}

.topmargin_20 {
    margin-top: 20px;
}

.topmargin_30 {
    margin-top: 30px;
}

.topmargin_40 {
    margin-top: 40px;
}

.bottommargin_0 {
    margin-bottom: 0;
}

.bottommargin_10 {
    margin-bottom: 10px;
}

.bottommargin_20 {
    margin-bottom: 20px;
}

.bottommargin_30 {
    margin-bottom: 30px;
}

.bottommargin_40 {
    margin-bottom: 40px;
}

.margin_0 {
    margin: 0;
}


/*teasers*/
.teaser {
    position: relative;
    margin-bottom: 30px;
}

.teaser[class*="_bg_color"] {
    padding: 35px 40px;
}

.teaser [class*="_bg_color"] {
    padding: 21px;
    margin-bottom: 2px;
    text-align: center;
}

.teaser [class*="_bg_color"]+h4 {
    margin-top: 24px;
}

.teaser .border_icon {
    padding: 0.35em;
    min-width: 1.8em;
    border-width: 3px;
    border-style: solid;
}

.teaser i {
    min-width: 1em;
}

.teaser h2 {
    font-size: 50px;
    font-weight: 400;
    margin-bottom: 33px;
    position: relative;
    padding-bottom: 10px;
}

.teaser h2:after {
    content: '';
    position: absolute;
    width: 50px;
    margin-left: -25px;
    height: 1px;
    background-color: rgba(204, 204, 204, 0.2);
    bottom: -12px;
    left: 50%;
}

.teaser h3 {
    margin-bottom: 16px;
    font-size: 24px;
}

.teaser h4 {
    font-size: 20px;
    margin-bottom: 18px;
}

.teaser .media-left {
    padding-right: 30px;
}

.teaser .media-body h3 {
    margin-bottom: 8px;
    font-size: 28px;
}

.teaser .media-body h4 {
    margin-bottom: 6px;
}

@media (max-width: 500px) {

    .teaser h2,
    .teaser h3,
    .teaser h4 {
        font-size: 1.4em !important;
    }
}

.teaser [class*="count"] {
    font-family: 'Open Sans', sans-serif;
    font-size: 80px;
    margin: 10px 0 6px;
}

.teaser [class*="count"]+p {
    margin: 0;
    font-size: 28px;
    font-weight: 300;
}

.teaser .theme_button {
    margin: 22px 0 0;
}

.section_padding_bottom_0 .teaser {
    margin-bottom: 0;
}

.teaser_icon {
    display: inline-block;
    line-height: 1;
    -webkit-transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -o-transition: all 0.2s ease-in-out 0s;
    -ms-transition: all 0.2s ease-in-out 0s;
    transition: all 0.2s ease-in-out 0s;
}

.teaser_icon+p {
    margin-top: 27px;
}

.teaser:hover .teaser_icon {
    -webkit-animation: pulse 0.9s infinite;
    -moz-animation: pulse 0.9s infinite;
    -ms-animation: pulse 0.9s infinite;
    -o-animation: pulse 0.9s infinite;
    animation: pulse 0.9s infinite;
}

.size_big {
    font-size: 64px;
}

.size_normal {
    font-size: 42px;
}

.size_small {
    font-size: 26px;
}



@media only screen and (max-width: 991px) {
    .header-top .left-column {
        position: relative;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        margin-left: 20% !important;
    }

    .header-area.header-default.header-style.sticky-header.sticky .header-action-area .btn-menu {
        color: #ffffff !important;
    }

    .home-slider-area.slider-default .slider-content-area .slider-thumb {
        display: block !important;
    }

    .home-slider-area.slider-default .slider-content-area {
        height: 830px;

    }

    .home-slider-area.slider-default {
        position: relative;
        padding-top: 320px;
    }
}

@media only screen and (max-width: 767px) {
    .home-slider-area.slider-default .slider-content-area {
        height: 830px;

    }

    .home-slider-area.slider-default {
        position: relative;
        padding-top: 320px;
    }
}
</style>

</html>
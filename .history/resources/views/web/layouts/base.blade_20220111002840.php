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
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{ CSS_URL }}bootstrap.min.css">
    <link rel="stylesheet" href="{{ CSS_URL }}animations.css">
    <link rel="stylesheet" href="{{ CSS_URL }}fonts.css">
    <link rel="stylesheet" href="{{ CSS_URL }}main.css" class="color-switcher-link">
    <script src="{{ JS_URL }}vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="{{ JS_URL }}vendor/html5shiv.min.js"></script>
    <script src="{{ JS_URL }}vendor/respond.min.js"></script>
    <script src="{{ JS_URL }}vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>
<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="./">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls with_padding">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div>
<!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

        <header class="page_header header_white toggler_left with_top_border item_with_border">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 display_table">

                        <div class="header_mainmenu display_table_cell">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li class="active">
                                        <a href="{{ HOME_URL }}">Home</a>
                                    </li>

                                    <li>
                                        <a href="about.html">Pages</a>
                                        <ul>
                                            <!-- features -->
                                            <li>
                                                <a href="shortcodes_teasers.html">Shortcodes &amp; Widgets</a>
                                            </li>
                                            <!-- eof features -->
                                        </ul>
                                    </li>
                                    <!-- eof pages -->

                                    <!-- contacts -->
                                    <li>
                                        <a href="contact.html">Contact</a>
                                        <ul>
                                            <li>
                                                <a href="contact.html">Contact 1</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- eof contacts -->
                                </ul>
                            </nav>
                            <!-- eof main nav -->
                            <!-- header toggler -->
                            <span class="toggle_menu">
									<span></span>
								</span>
                        </div>

                        <div class="header_right_buttons display_table_cell text-right">
                            <div class="page_social_icons greylinks">
                                <a class="social-icon rounded-icon border-icon soc-facebook" href="https://facebook.com" title="Facebook"></a>
                                <a class="social-icon rounded-icon border-icon soc-twitter" href="https://twitter.com" title="Twitter"></a>
                                <a class="social-icon rounded-icon border-icon soc-google" href="https://google.com" title="Google"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
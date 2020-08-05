@extends('layout.user_master')

@section('tab-title')
AppsbdSupport
@endsection

@section('body')

<body class="aps-ctrl-p site-theme site-theme-2 site-index">
    <div id="MainLoader">
        <div class="app-loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
            <div class="bar6"></div>
        </div>
        <div class="msgText"></div>
    </div>
    <div class="page-loader">
        <div style="margin-top:20%;font-size: 45px">
            <i class="fa fa-circle-o faa-burst animated"></i> &nbsp;Loading..
        </div>
    </div>
    <div class="container-fluid app-content">
        <div class="app-client-2-header">
            @include('partials.user.navbar')
            <div class="container ">
                <div class="row app-header-bottom">
                    <div class="app-welcome-msg alert alert-success text-center" role="alert">
                        @if ($user)
                        <h2>Welcome <b>{{$user->username}}</b><br></h2>
                        @else
                        <h2>Welcome <b>Guest</b><br></h2>
                        @endif
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <div class="col-md-12  src-main-container" style="position: relative;z-index: 999;">
                                <div class="form-group form-group-lg m-t-5" style="z-index: 99;">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-search faa-tada"></i></span>
                                        <input class="form-control auto-complete-off-processed src-input"
                                            name="item_search" id="app-src-input" placeholder="Search"
                                            autocomplete="off" type="search">
                                    </div>
                                </div>
                                <div id="app-src-container" class="row src-container text-left"
                                    style="z-index: 90; display: none;">
                                    <div class="" style="margin-top: -11px;position: absolute;left: 0;right: 0;top: 0;">
                                        <div class="panel panel-default">
                                            <div class="panel-body" style="padding-top: 58px;">
                                                <div class="app-loader bar-black sm-loader m-t-15">
                                                    <div class="bar1"></div>
                                                    <div class="bar2"></div>
                                                    <div class="bar3"></div>
                                                    <div class="bar4"></div>
                                                    <div class="bar5"></div>
                                                    <div class="bar6"></div>
                                                </div>
                                                <div class=" app-src-list-content">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(function() {
                            $("#app-src-input").focusin(function() {
                                $("#app-src-container").show();
                            });
                            $("#app-src-input").focusout(function() {
                                close_src_panel();
                            });
                            $("#app-src-input").keyup(function(e) {
                                var va = $(this).val();
                                //console.log(va);
                                if (va.length > 2) {
                                    var data = {
                                        src: va
                                    };
                                    showSrcLoader();
                                    search_delay(function() {
                                        $.ajax({
                                            url: appGlobalLang.src_url,
                                            data: set_csrf_param(data),
                                            type: "POST",
                                            scriptCharset: "utf-8",
                                            dataType: "json",
                                            beforeSend: function() {

                                            },
                                            success: function(rdata) {
                                                app_set_src_list(rdata);
                                            },
                                            complete: function(jqXHR, textStatus) {
                                                showSrcLoader(true);
                                            }
                                        });
                                    }, 600);
                                } else {
                                    //close_src_panel();
                                }
                            });
                            $("body").on("click", function(e) {
                                close_src_panel(true);
                            });
                            $(".src-main-container").on("click", function(e) {
                                e.stopPropagation();
                            });
                        });

                        function showSrcLoader(is_hide) {
                            if (typeof is_hide == "undefined") {
                                is_hide = false;
                            }
                            if (is_hide) {
                                $("#app-src-container .app-loader").hide();
                            } else {
                                $("#app-src-container .app-src-list-content").hide();
                                $("#app-src-container .app-loader").fadeIn();
                            }
                        }

                        function close_src_panel(is_force) {
                            if (typeof is_force == "undefined") {
                                is_force = false;
                            }
                            if (is_force || !$("#app-src-container").hasClass("app-srced")) {
                                $("#app-src-container").removeClass("app-srced").hide();
                                $("#app-src-container .app-loader").fadeOut();

                            }
                        }
                        var search_delay = (function() {
                            var timer = 0;
                            return function(callback, ms) {
                                clearTimeout(timer);
                                timer = setTimeout(callback, ms);
                            };
                        })();

                        function app_set_src_list(items) {
                            //gcl(items.length);
                            if (items.total > 0) {
                                var htmltext = gen_app_src_ul(items);
                                $("#app-src-container .app-src-list-content").removeClass("text-center").html(htmltext);
                            } else {
                                $("#app-src-container .app-src-list-content").addClass("text-center").html("No search result found");
                            }
                            $("#app-src-container .app-src-list-content").show();
                        }

                        function gen_app_src_ul(items) {
                            $("#app-src-container").addClass("app-srced");
                            if (items.total > 0) {
                                var ulstr = '<ul class="kn-list">';
                                for (var i = 0; i < items.data.length; i++) {
                                    ulstr += '<li class=" p-5  ">\
    		<div class="kn-title">\
    			<h3 class="m-0">\
    			<a href="' + items.data[i].href + '">' + items.data[i].title + '</a>\
    			 <span class="cat-container" >in ' + items.data[i].cat_link + '</span>\
    				<span class="kn-like pull-right text-success"><i class="fa fa-thumbs-up "></i> ' + items.data[i].l_count + '</span>\
    		</h3>\
    		</div>\
    	</li>';
                                }
                                if (items.total > items.data.length) {
                                    ulstr += '<li class=" p-5  text-center"><a href="' + items.full_url + '">Total Result (' + items.total + ')</a></li>';
                                }
                                ulstr += '</ul>';
                                return ulstr;
                            } else {
                                return '';
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
        @if ($user)
        <div class="row text-center need-support-panel">
            <h2>Still Need Support? <a data-effect="mfp-move-from-top"
                    class="popupformWR btn btn-theme open-ticket apopf added-ripples"
                    href="{{url('/create_ticket')}}">
                    <i class="fa fa-ticket"></i> Open Ticket
                </a>
            </h2>
        </div>
        @else
        <div class="row text-center need-support-panel">
            <h2>You Haven't Register, please consider registering in order to access other features 
                <br>
                <a
                    data-effect="mfp-move-from-top" class="popupformWR btn btn-theme open-ticket apopf added-ripples"
                    href="{{url('/login')}}"  id="register-home">
                    <i class="fa fa-ticket"></i> Register
                </a>
            </h2>
        </div>
        @endif
        <div class="app-content p-t-15">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4 art-box">
                                    <h3 class="art-box-title">
                                        Recent Articles </h3>
                                    <div class="art-box-content">
                                        <ul class="art-kn-list">
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/88/joomla-zooming-high-in-technology.html"><i
                                                        class="fa fa-file-text-o"></i> Joomla Zooming High in Technology
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        04</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/87/wordpress-designer-joomla-versus-wordpress.html"><i
                                                        class="fa fa-file-text-o"></i> Wordpress Designer - Joomla
                                                    Versus Wordpress <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 00</span>
                                                </a>
                                            </li>
                                            <li class="">

                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/86/psd-to-joomla-conversion-for-cross-browser-compatible.html"><i
                                                        class="fa fa-file-text-o"></i> PSD to Joomla Conversion for
                                                    Cross Browser <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/85/convert-psd-to-joomla-theme-and-template-for-complete.html"><i
                                                        class="fa fa-file-text-o"></i> Convert Psd To Joomla Theme <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/84/joomla-customization-services.html"><i
                                                        class="fa fa-file-text-o"></i> Joomla Customization Services
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 art-box">
                                    <h3 class="art-box-title">
                                        Popular Articles </h3>
                                    <div class="art-box-content">
                                        <ul class="art-kn-list">
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/14/cakephp-web-development.html"><i
                                                        class="fa fa-file-text-o"></i> CakePHP Web Development <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        07</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/88/joomla-zooming-high-in-technology.html"><i
                                                        class="fa fa-file-text-o"></i> Joomla Zooming High in Technology
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        04</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/15/charts-for-php-pages.html"><i
                                                        class="fa fa-file-text-o"></i> Charts For PHP Pages <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        03</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/18/android-developer-for-hiring.html"><i
                                                        class="fa fa-file-text-o"></i> Android Developer For Hiring
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        03</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/1/how-do-you-find-good-php-programmers.html"><i
                                                        class="fa fa-file-text-o"></i> How Do You Find Good PHP
                                                    Programmers? <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 02</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 art-box">
                                    <h3 class="art-box-title">
                                        Most Helpful Articles </h3>
                                    <div class="art-box-content">
                                        <ul class="art-kn-list">
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/70/5-quick-tips-for-choosing-the-right-theme.html"><i
                                                        class="fa fa-file-text-o"></i> 5 Quick Tips For Choosing The
                                                    Right Theme <span class="view-counter pull-right"><i
                                                            class="fa fa-thumbs-up"></i> 01</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/1/how-do-you-find-good-php-programmers.html"><i
                                                        class="fa fa-file-text-o"></i> How Do You Find Good PHP
                                                    Programmers? <span class="view-counter pull-right"><i
                                                            class="fa fa-thumbs-up"></i> 00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/2/where-to-start-to-be-a-php.html"><i
                                                        class="fa fa-file-text-o"></i> Where To Start To Be A PHP? <span
                                                        class="view-counter pull-right"><i class="fa fa-thumbs-up"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/3/php-forms-creator.html"><i
                                                        class="fa fa-file-text-o"></i> Php Forms Creator <span
                                                        class="view-counter pull-right"><i class="fa fa-thumbs-up"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/4/php-service.html"><i
                                                        class="fa fa-file-text-o"></i> Php Service <span
                                                        class="view-counter pull-right"><i class="fa fa-thumbs-up"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 art-box">
                                    <h3 class="art-box-title">
                                        PHP Basic <small>( 15 <a class="art-title-btn"
                                                href="https://demo.appsbd.com/support-system/category/details/1.html">View
                                                All</a> )</small>
                                    </h3>
                                    <div class="art-box-content">
                                        <ul class="art-kn-list">
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/1/How%2520Do%2520You%2520Find%2520Good%2520PHP%2520Programmers%253F.html"><i
                                                        class="fa fa-file-text-o"></i> How Do You Find Good PHP
                                                    Programmers? <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 02</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/2/Where%2520To%2520Start%2520To%2520Be%2520A%2520PHP%253F.html"><i
                                                        class="fa fa-file-text-o"></i> Where To Start To Be A PHP? <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/3/Php%2520Forms%2520Creator.html"><i
                                                        class="fa fa-file-text-o"></i> Php Forms Creator <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        02</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/4/Php%2520Service.html"><i
                                                        class="fa fa-file-text-o"></i> Php Service <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        02</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/5/Why%2520Hire%2520Dedicared%2520PHP%2520Programmer%253F.html"><i
                                                        class="fa fa-file-text-o"></i> Why Hire Dedicared PHP
                                                    Programmer? <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 00</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 art-box">
                                    <h3 class="art-box-title">
                                        Android Basic <small>( 15 <a class="art-title-btn"
                                                href="https://demo.appsbd.com/support-system/category/details/2.html">View
                                                All</a> )</small>
                                    </h3>
                                    <div class="art-box-content">
                                        <ul class="art-kn-list">
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/21/Developing%2520Quality%2520Android%2520Applications.html"><i
                                                        class="fa fa-file-text-o"></i> Developing Quality Android
                                                    Applications <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/18/Android%2520Developer%2520For%2520Hiring.html"><i
                                                        class="fa fa-file-text-o"></i> Android Developer For Hiring
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        03</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/17/Android%2520Voice%2520Actions%2520Basics.html"><i
                                                        class="fa fa-file-text-o"></i> Android Voice Actions Basics
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/30/Top%2520Android%2520Apps.html"><i
                                                        class="fa fa-file-text-o"></i> Top Android Apps <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        01</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/29/Voip%2520Por%2520Android.html"><i
                                                        class="fa fa-file-text-o"></i> Voip Por Android <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 art-box">
                                    <h3 class="art-box-title">
                                        PHP Setup <small>( 15 <a class="art-title-btn"
                                                href="https://demo.appsbd.com/support-system/category/details/3.html">View
                                                All</a> )</small>
                                    </h3>
                                    <div class="art-box-content">
                                        <ul class="art-kn-list">
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/38/How%2520Do%2520You%2520Find%2520Good%2520PHP%2520Programmers%253F.html"><i
                                                        class="fa fa-file-text-o"></i> How Do You Find Good PHP
                                                    Programmers? <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 01</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/42/Develop%2520Stunning%2520Web%2520Application%2520With%2520Php.html"><i
                                                        class="fa fa-file-text-o"></i> Develop Stunning Web Application
                                                    With Php <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 01</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/36/How%2520A%2520Cloud%2520Host%2520Is%2520More%2520Reliable.html"><i
                                                        class="fa fa-file-text-o"></i> How A Cloud Host Is More Reliable
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        01</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/44/Why%2520Would%2520I%2520Want%2520A%2520Virtual%2520Private%2520Server%253F.html"><i
                                                        class="fa fa-file-text-o"></i> Why Would I Want A Virtual
                                                    Private Server? <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 01</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/45/Bring%2520Your%2520Web%2520Site%2520to%2520Life%2520with%2520PHP.html"><i
                                                        class="fa fa-file-text-o"></i> Bring Your Web Site to Life with
                                                    PHP <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 art-box">
                                    <h3 class="art-box-title">
                                        Sales <small>( 14 <a class="art-title-btn"
                                                href="https://demo.appsbd.com/support-system/category/details/4.html">View
                                                All</a> )</small>
                                    </h3>
                                    <div class="art-box-content">
                                        <ul class="art-kn-list">
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/57/Web%2520Video%2520Marketing.html"><i
                                                        class="fa fa-file-text-o"></i> Web Video Marketing <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/58/Retro%2520Marketing.html"><i
                                                        class="fa fa-file-text-o"></i> Retro Marketing <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        01</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/59/Marketing%2520via%2520Email.html"><i
                                                        class="fa fa-file-text-o"></i> Marketing via Email <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        01</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/56/Mobile%2520Marketing.html"><i
                                                        class="fa fa-file-text-o"></i> Mobile Marketing <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        02</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/55/Mobile%2520Marketing.html"><i
                                                        class="fa fa-file-text-o"></i> Mobile Marketing <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        02</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 art-box">
                                    <h3 class="art-box-title">
                                        WordPress Theme Setup <small>( 15 <a class="art-title-btn"
                                                href="https://demo.appsbd.com/support-system/category/details/5.html">View
                                                All</a> )</small>
                                    </h3>
                                    <div class="art-box-content">
                                        <ul class="art-kn-list">
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/70/5%2520Quick%2520Tips%2520For%2520Choosing%2520The%2520Right%2520Theme.html"><i
                                                        class="fa fa-file-text-o"></i> 5 Quick Tips For Choosing The
                                                    Right Theme <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 01</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/60/How%2520To%2520Setup%2520A%2520Wordpress%2520Blog%2520-%2520Simple%2520Instructions.html"><i
                                                        class="fa fa-file-text-o"></i> How To Setup A Wordpress Blog -
                                                    Simple Instructions <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/61/Five%2520Reasons%2520You%2520Too%2520Will%2520Love%2520WordPress.html"><i
                                                        class="fa fa-file-text-o"></i> Five Reasons You Too Will Love
                                                    WordPress <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 02</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/62/Wordpress%2520Review%2520Theme%253A%2520Features.html"><i
                                                        class="fa fa-file-text-o"></i> Wordpress Review Theme: Features
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        02</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/74/Convert%2520To%2520Wordpress.html"><i
                                                        class="fa fa-file-text-o"></i> Convert To Wordpress <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        01</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 art-box">
                                    <h3 class="art-box-title">
                                        Joomla Theme Setup <small>( 14 <a class="art-title-btn"
                                                href="https://demo.appsbd.com/support-system/category/details/6.html">View
                                                All</a> )</small>
                                    </h3>
                                    <div class="art-box-content">
                                        <ul class="art-kn-list">
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/86/PSD%2520to%2520Joomla%2520Conversion%2520for%2520Cross%2520Browser.html"><i
                                                        class="fa fa-file-text-o"></i> PSD to Joomla Conversion for
                                                    Cross Browser <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/85/Convert%2520Psd%2520To%2520Joomla%2520Theme.html"><i
                                                        class="fa fa-file-text-o"></i> Convert Psd To Joomla Theme <span
                                                        class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/88/Joomla%2520Zooming%2520High%2520in%2520Technology.html"><i
                                                        class="fa fa-file-text-o"></i> Joomla Zooming High in Technology
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        04</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/87/Wordpress%2520Designer%2520-%2520Joomla%2520Versus%2520Wordpress.html"><i
                                                        class="fa fa-file-text-o"></i> Wordpress Designer - Joomla
                                                    Versus Wordpress <span class="view-counter pull-right"><i
                                                            class="fa fa-eye"></i> 00</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class=" "
                                                    href="https://demo.appsbd.com/support-system/knowledge/details/84/Joomla%2520Customization%2520Services.html"><i
                                                        class="fa fa-file-text-o"></i> Joomla Customization Services
                                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i>
                                                        00</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-left m-t-0 m-b-5" style="font-size: 10px; font-style: italic;">
                        ** The time is base on Asia/Kolkata timezone</div>
                </div>
            </div>
        </div>

        @include('partials.user.footer')
        <button class="go_top btn-theme animated zoomOut"><i class="fa fa-chevron-up"></i></button>
    </div>

    <script src="{{asset('theme/client/js/theme-main.js')}}" type="text/javascript"></script>
    @include('partials.user.stickey_top')
    @include('partials.user.chat_system')
</body>
@endsection
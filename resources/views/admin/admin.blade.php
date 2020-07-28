@extends('layout.admin_master')

@section('tab-title')
My Dashboard
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 594px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            My Dashboard </h1>
        <ol class="breadcrumb">
            <li>
                My Dashboard </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-8 md-p-r-0">

                <div class="row info-box-row">
                    <div class="col-md-3 col-sm-6  col-xs-12">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2"
                            href="https://demo.appsbd.com/support-system/admin/ticket/my-assigned-ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-aqua">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Total</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Assigned Tickets</span>
                                    <span class="info-box-number">5
                                    </span>
                                </div>

                            </div>
                        </a>

                    </div>

                    <div class="col-md-3  col-sm-6 col-xs-12">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2"
                            href="https://demo.appsbd.com/support-system/admin/ticket/my-ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-yellow"><i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Total</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Active Tickets</span>
                                    <span class="info-box-number">5</span>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-3 col-sm-6  col-xs-12">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2"
                            href="https://demo.appsbd.com/support-system/admin/ticket/my-paid-ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-red"><i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Total</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Active Paid Ticket</span>
                                    <span class="info-box-number">0</span>
                                </div>

                            </div>
                        </a>

                    </div>

                    <div class="col-md-3  col-sm-6 col-xs-12">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2"
                            href="https://demo.appsbd.com/support-system/admin/ticket/my-closed.html"
                            style="opacity: 1;">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-green">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Total</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Closed Ticket</span>
                                    <span class="info-box-number">0</span>
                                </div>

                            </div>
                        </a>

                    </div>
                </div>
                <div class="row info-box-row">

                    <div class="col-md-3  col-sm-6 col-xs-12">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2"
                            href="https://demo.appsbd.com/support-system/admin/ticket/my-assigned-ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-aqua">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Today's</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Assigned Tickets</span>
                                    <span class="info-box-number">0</span>
                                </div>

                            </div>
                        </a>

                    </div>

                    <div class="col-md-3  col-sm-6 col-xs-12">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2"
                            href="https://demo.appsbd.com/support-system/admin/ticket/my-ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-yellow">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Today's</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Active Tickets</span>
                                    <span class="info-box-number">0</span>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="col-md-3  col-sm-6 col-xs-12">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2"
                            href="https://demo.appsbd.com/support-system/admin/ticket/my-paid-ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-red">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Today's</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Active Paid Tickets</span>
                                    <span class="info-box-number">0</span>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="col-md-3  col-sm-6 col-xs-12">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2"
                            href="https://demo.appsbd.com/support-system/admin/ticket/my-closed.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-green">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Today's</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Closed Tickets</span>
                                    <span class="info-box-number">0</span>
                                </div>

                            </div>
                        </a>

                    </div>

                </div>


                <div class="box box-solid  m-b-0">
                    <div class="box-body border-radius-none">
                        <div id="ccontainer_app_chart_2" style="position: relative;"><iframe
                                class="chartjs-hidden-iframe" tabindex="-1"
                                style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"
                                __idm_frm__="624"></iframe>
                            <div class="chart-loader"
                                style="position: absolute; left: 0px; right: 0px; bottom: 0px; top: 0px; background: rgba(255, 255, 255, 0.82); z-index: 99; display: none;">
                                <div
                                    style="position: absolute; top: 45%; left: 0px; right: 0px; text-align: center; font-weight: bold; color: #635F5F; font-size: 20px;">
                                    <i class="fa fa-spinner fa-spin fa-fw"></i>Loading</div>
                            </div>
                            <div class="chart-header" style="visibility: visible; min-height: 22px;">
                                <div style="position: absolute;top:0;left:8px">
                                    <select class="line-bar"
                                        style="border-radius: 3px; height:22px; border: 1px solid rgba(6, 6, 6, 0.04); color: rgb(255, 255, 255); background: rgb(51, 124, 183) none repeat scroll 0px 0px;">
                                        <option value="line">Line</option>
                                        <option value="bar">Bar</option>
                                    </select>
                                </div>
                                <div class="chart-title" style="text-align: center; font-size: 14px;">Day Report (Month
                                    July-2020)</div>
                                <button style="position: absolute;top:0;right:10px;"
                                    class="reload-btn btn btn-xs btn-primary added-ripples" type="button"><i
                                        class="fa fa-refresh"></i> Reload</button>
                            </div>
                            <canvas id="myChart" width="200px" height="200px"></canvas>
                        </div>
                        <script type="text/javascript">
                            var ctx = document.getElementById('myChart');
                            var myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                    datasets: [{
                                        label: 'Active',
                                        data: [0, 0, 0, 0, 0, 0],
                                        backgroundColor: [
                                            'rgba(0, 128, 255, 0.2)',
                                        ],
                                        borderColor: [
                                            'rgba(0, 128, 255, 1)',
                                        ],
                                    }, {
                                        label: 'Closed',
                                        data: [0, 0, 0, 0, 0, 0],
                                        backgroundColor: [
                                            'rgba(0, 255, 0, 0.2)',
                                        ],
                                        borderColor: [
                                            'rgba(0, 255, 0, 1)',
                                        ],
                                    }]
                                },
                                options: {
                                    layout: {
                                        padding: {
                                            left: 0,
                                            right: 0,
                                            top: 0,
                                            bottom: 0,
                                        },
                                    scales: {
                                        xAxes: [{
                                            gridLines: {
                                                tickMarkLength: 15
                                            }
                                        }],
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: false
                                            }
                                        }]
                                    }
                                    }
                                }
                            });
                        </script>
                    </div>

                </div>

            </div>
            <div class="col-md-4">

                <div class="box box-widget widget-user-2 m-b-10">

                    <div class="widget-user-header bg-green">
                        <div class="widget-user-image">
                            <img class="img-circle"
                                src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg" alt="admin">
                        </div>

                        <h3 class="widget-user-username">admin</h3>
                        <h5 class="widget-user-desc">Super Admin</h5>
                    </div>
                    <div class="box-footer no-padding">
                        <ul class="nav nav-stacked app-nav-stacked">
                            <li>Email Address <span class="pull-right  ">support-admin@appsbd.com</span></li>
                            <li>Contact Number <span class="pull-right  "></span></li>
                            <li>Date of Birth<span class="pull-right  ">Nov 30, -0001</span></li>
                            <li>Join Date<span class="pull-right  ">Feb 02, 2018</span></li>
                            <li>Timezone <span class="pull-right ">Asia/Kolkata <a style="margin-top: -5px;"
                                        class="btn btn-success popupformWR btn-xs apopf added-ripples"
                                        data-onclose="reload_timezone"
                                        href="https://demo.appsbd.com/support-system/admin/dashboard/set-timezone.html"
                                        data-effect="mfp-move-from-top">Change </a></span></li>
                        </ul>
                    </div>
                </div>

                <div class="box box-solid bg-green-gradient art-box m-b-0">
                    <div class="box-header">
                        <i class="fa fa-file-text-o"></i>
                        <h3 class="box-title"> Recent Articles</h3>
                        <small class="pull-right text-em">Read article to provide best support</small>
                    </div>
                    <div class="box-footer no-border art-box-content p-t-0 p-b-0">
                        <ul class="art-kn-list">
                            <li class="">
                                <a class="popupform apopf" data-effect="mfp-move-from-top " target="_blank"
                                    href="https://demo.appsbd.com/support-system/knowledge/details/88/joomla-zooming-high-in-technology.html"><i
                                        class="fa fa-file-text-o"></i> Joomla Zooming High in Technology <span
                                        class="view-counter pull-right"><i class="fa fa-eye"></i> 04</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="popupform apopf" data-effect="mfp-move-from-top " target="_blank"
                                    href="https://demo.appsbd.com/support-system/knowledge/details/87/wordpress-designer-joomla-versus-wordpress.html"><i
                                        class="fa fa-file-text-o"></i> Wordpress Designer - Joomla Versus Wordpress
                                    <span class="view-counter pull-right"><i class="fa fa-eye"></i> 00</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="popupform apopf" data-effect="mfp-move-from-top " target="_blank"
                                    href="https://demo.appsbd.com/support-system/knowledge/details/86/psd-to-joomla-conversion-for-cross-browser-compatible.html"><i
                                        class="fa fa-file-text-o"></i> PSD to Joomla Conversion for Cross Browser <span
                                        class="view-counter pull-right"><i class="fa fa-eye"></i> 00</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="popupform apopf" data-effect="mfp-move-from-top " target="_blank"
                                    href="https://demo.appsbd.com/support-system/knowledge/details/85/convert-psd-to-joomla-theme-and-template-for-complete.html"><i
                                        class="fa fa-file-text-o"></i> Convert Psd To Joomla Theme <span
                                        class="view-counter pull-right"><i class="fa fa-eye"></i> 00</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="popupform apopf" data-effect="mfp-move-from-top " target="_blank"
                                    href="https://demo.appsbd.com/support-system/knowledge/details/84/joomla-customization-services.html"><i
                                        class="fa fa-file-text-o"></i> Joomla Customization Services <span
                                        class="view-counter pull-right"><i class="fa fa-eye"></i> 00</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <style>
            .art-kn-list li {
                list-style: outside none none;
                padding: 9px 2px;
                border-bottom: 1px dashed rgba(18, 17, 17, 0.11);
            }
        </style>
        <div class="row"></div>
        <script type="text/javascript">
            var agentloadedTabs = [];
            $(function() {

                /*$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    var target = $(e.target).attr("href");
                    AgentLoadTabData(target);	   
                });*/

                monthly_load();
            });

            function reload_timezone() {
                if (MyAjaxChange) {
                    ShowWait(true, "Reloading", function() {
                        ReloadSiteUrl();
                    });

                }
            }

            function AgentLoadTabData(target) {
                if (target == "#tab_1") {
                    if (agentloadedTabs.indexOf(target) == -1) {
                        monthly_load();
                    }
                } else if (target == "#tab_2") {
                    if (agentloadedTabs.indexOf(target) == -1) {
                        yearly_load();
                    }
                }
                agentloadedTabs.push(target);
            }
        </script>
    </section>
</div>
@endsection
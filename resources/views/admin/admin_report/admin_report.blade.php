@extends('layout.admin_master')

@section('tab-title')
Admin Dashboard
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 294px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-th "></i>
            Admin Dashboard </h1>
        <ol class="breadcrumb">
            <li>
                Admin Dashboard </li>
        </ol>
    </section>

    <section class="content">

        <div class="system-msg-list">
            <div id="msg_DEMPM" class="system-msg m-b-5 fadeIn animated  alert alert-success alert-dismissible">
                <div class="system-icon">
                    <i class="fa fa-gear"></i>
                </div>
                <strong class="system-title">App :</strong> <span class="system-body"> The app is in demo mode. All change data will be reset within every 30 <sup>th</sup> min.</span>
            </div>
        </div>
        <div class="system-msg-list">
            <div id="msg_2" class="system-msg m-b-5 fadeIn animated  alert alert-success alert-dismissible">
                <div class="system-icon">
                    <i class="fa fa-bullhorn"></i>
                </div>
                <strong class="system-title">Purchase Link:</strong> <span class="system-body"><span class="system-body">Do you want to purchase? Click the button </span><a class="btn btn-success added-ripples" href="https://bit.ly/2venvhL" target="_blank">Buy Now</a></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="row info-box-row">
                    <div class="col-md-2 col-sm-4  col-xs-6">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2" href="https://demo.appsbd.com/support-system/admin/app-permission/user-list.html" style="opacity: 1;">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-aqua">
                                    <i class="fa fa-users"></i>
                                    <span class="sm-outline-text">Total</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Active Members</span>
                                    <span class="info-box-number">2
                                    </span>
                                </div>

                            </div>
                        </a>

                    </div>

                    <div class="col-md-2  col-sm-4 col-xs-6">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2" href="https://demo.appsbd.com/support-system/admin/ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Total</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Tickets</span>
                                    <span class="info-box-number">5</span>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="col-md-2  col-sm-4 col-xs-6">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2" href="https://demo.appsbd.com/support-system/admin/ticket.html">
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


                    <div class="col-md-2  col-sm-4 col-xs-6">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2" href="https://demo.appsbd.com/support-system/admin/ticket/unassigned-ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-red">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Total</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Unassigned Tickets</span>
                                    <span class="info-box-number">0</span>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-2 col-sm-4  col-xs-6">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2" href="https://demo.appsbd.com/support-system/admin/ticket/all-paid-ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-red"><i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Total</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Active Paid Tickets</span>
                                    <span class="info-box-number">0</span>
                                </div>

                            </div>
                        </a>

                    </div>

                    <div class="col-md-2  col-sm-4 col-xs-6">
                        <a data-tooltip-position="right" class="tooltip2 tooltipstered added-tooltip2" href="https://demo.appsbd.com/support-system/admin/ticket/closed-ticket.html">
                            <div class="info-box info-box-sm">
                                <span class="info-box-icon bg-green">
                                    <i class="fa fa-ticket"></i>
                                    <span class="sm-outline-text">Total</span>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Closed Tickets</span>
                                    <span class="info-box-number">0</span>
                                </div>

                            </div>
                        </a>

                    </div>

                </div>

                <div class="box box-solid  m-b-0">
                    <div class="box-body border-radius-none">
                        <div class="control-report">
                            <form id="chart-form" action="">
                                <div class="inline radio-inline">
                                    <div class="radio">
                                        <label> <input class="" id="report_type" type="radio" checked="checked" name="report_type" value="Y" data-bv-notempty="true" data-bv-notempty-message="Choose Choose Type"><span class="circle"></span><span class="check"></span> Year(2020) </label>
                                    </div>
                                    <div class="radio">
                                        <label> <input class="" id="report_type" type="radio" name="report_type" value="M" data-bv-notempty="true" data-bv-notempty-message="Choose Choose Type"><span class="circle"></span><span class="check"></span> Month(July-2020) </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="ccontainer_app_chart_2" style="position: relative;"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" __idm_frm__="701"></iframe>
                            <div class="chart-loader" style="position: absolute; left: 0px; right: 0px; bottom: 0px; top: 0px; background: rgba(255, 255, 255, 0.82); z-index: 99; display: none;">
                                <div style="position: absolute; top: 45%; left: 0px; right: 0px; text-align: center; font-weight: bold; color: #635F5F; font-size: 20px;"><i class="fa fa-spinner fa-spin fa-fw"></i>Loading</div>
                            </div>
                            <div class="chart-header" style="visibility: visible; min-height: 22px;">
                                <div style="position: absolute;top:0;left:8px">
                                    <select class="line-bar" style="border-radius: 3px; height:22px; border: 1px solid rgba(6, 6, 6, 0.04); color: rgb(255, 255, 255); background: rgb(51, 124, 183) none repeat scroll 0px 0px;">
                                        <option value="line">Line</option>
                                        <option value="bar">Bar</option>
                                    </select>
                                </div>
                                <div class="chart-title" style="text-align: center; font-size: 14px;">Month Report (Year 2020)</div>
                                <button style="position: absolute;top:0;right:10px;" class="reload-btn btn btn-xs btn-primary added-ripples" type="button"><i class="fa fa-refresh"></i> Reload</button>
                            </div>
                            <canvas class="" id="app_chart_2" style="display: block; width: 1069px; height: 427px;" height="427" width="1069">
                            </canvas>
                        </div>
                        <script type="text/javascript">
                            (function() {
                                "use strict";
                                $("body").addClass("app-chart-loading");

                                var config = null;
                                var param = {};

                                var form_element = '#chart-form';;
                                var app_ctx = jQuery("#app_chart_2");
                                var chart_container = jQuery("#ccontainer_app_chart_2");
                                var chartobject = null;
                                var last_type_selected = "";

                                function LoadData() {
                                    var obj = {};
                                    if (form_element) {
                                        $.each(jQuery(form_element).serializeArray(), function(i, o) {
                                            var n = o.name,
                                                v = o.value;
                                            obj[n] = obj[n] === undefined ? v : $.isArray(obj[n]) ? obj[n].concat(v) : [obj[n], v];
                                        });
                                    }

                                    var final_post_param = jQuery.extend(param, obj);

                                    try {
                                        final_post_param = set_csrf_param(final_post_param);
                                    } catch (e) {}

                                    jQuery.ajax({
                                        url: "https://demo.appsbd.com/support-system/admin/admin-report-chart-data/get-agent-month-data.html",
                                        data: final_post_param,
                                        type: "POST",
                                        scriptCharset: "utf-8",
                                        dataType: "json",
                                        beforeSend: function() {
                                            chart_container.find("> .chart-loader").show();

                                        },
                                        success: function(rdata) {
                                            var pos = $(document).scrollTop();

                                            config = rdata;
                                            if (last_type_selected != "") {
                                                config.type = last_type_selected;
                                            }

                                            clear_chart();
                                            try {
                                                if (typeof config.title !== "undefined" && config.title != "") {
                                                    chart_container.find("> .chart-header .chart-title").html(config.title);
                                                }
                                            } catch (e) {}

                                            chartobject = new Chart(app_ctx, config);
                                            $(document).scrollTop(pos);
                                            if (config.type == "bar" || config.type == "line") {
                                                chart_container.find("> .chart-header .line-bar").show();
                                                var selectobj = chart_container.find(".line-bar");
                                                selectobj.unbind("change");
                                                selectobj.val(config.type);
                                                selectobj.bind("change", function(e) {
                                                    config.type = $(this).val();
                                                    last_type_selected = config.type;
                                                    clear_chart();
                                                    chartobject = new Chart(app_ctx, config);
                                                });

                                            } else {
                                                chart_container.find("> .chart-header .line-bar").hide();
                                            }

                                            //console.log(config);
                                        },
                                        complete: function(jqXHR, textStatus) {
                                            chart_container.find("> .chart-header").css("visibility", "visible");
                                            chart_container.find("> .chart-loader").fadeOut();
                                            $("body").removeClass("app-chart-loading");
                                        }

                                    });
                                }

                                function clear_chart() {
                                    if (chartobject) {
                                        chartobject.clear();
                                        chartobject.destroy();

                                    }
                                }

                                function type_change(param) {
                                    config.type = param;
                                    chartobject = new Chart(app_ctx, config);
                                }
                                jQuery(function($) {
                                    chart_container.find("> .chart-header").css("visibility", "hidden");

                                    LoadData();
                                    if (form_element) {
                                        jQuery(form_element).submit(function(e) {
                                            e.preventDefault();
                                            //alert("ok");
                                            LoadData();
                                        });
                                    }
                                    chart_container.find(".reload-btn").on("click", function(e) {
                                        e.preventDefault();
                                        LoadData();
                                    });
                                });

                            }());
                        </script>
                    </div>

                </div>

            </div>
            <div class="col-md-4">
            </div>
        </div>
        <style>
            .art-kn-list li {
                list-style: outside none none;
                padding: 9px 2px;
                border-bottom: 1px dashed rgba(18, 17, 17, 0.11);
            }

            @media all and (min-width: 992px) {
                .control-report {
                    position: absolute;
                    left: 92px;
                    top: 1px;
                    z-index: 99;
                }
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
                $("input[name=report_type]").change(function(e) {
                    $(this).closest('form').submit();
                });
            });
        </script>
    </section>
</div>
@endsection
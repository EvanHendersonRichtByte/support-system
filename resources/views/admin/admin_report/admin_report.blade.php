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
                                            left: 50,
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
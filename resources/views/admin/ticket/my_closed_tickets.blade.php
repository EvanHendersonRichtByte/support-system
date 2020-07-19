@extends('layout.admin.user_settings.user_settings_master')

@section('tab-title')
My Closed Ticket
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-ticket"></i>
            My Closed Ticket </h1>
        <ol class="breadcrumb">
            <li>
                <a href="https://demo.appsbd.com/support-system/"><i class=""></i> Home</a>
            </li>
            <li>
                My Closed Ticket </li>
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
        <style>
            .gs-jq-grid .ui-jqgrid .loading {
                top: 20% !important;
            }
        </style>
        <div class="box box-primary">
            <div class="box-body grid-body">
                <div class="grid-search-panel">
                    <div class="gs-grid-serach row form-horizontal" id="src_tab1_1595152244" style="padding: 5px;">
                        <div class="col-md-5 col-sm-4">
                            <div class="form-group form-group-xs">
                                <label for="selectpropery" class="control-label first-label col-md-6  hidden-xs"><span class="hidden-sm">Select</span> Property</label>
                                <div class="col-md-6">
                                    <select class="input-sm srcOptionList form-control">
                                        <option value="">Select</option>
                                        <option stype="" value="ticket_track_id">Track ID</option>
                                        <option stype="" value="title">Title</option>
                                        <option stype="" value="custom_AA">test</option>
                                        <option stype="select" data="eyIqIjoiQWxsIENhdGVnb3J5IiwiMCI6IkFuZHJvaWQgQmFzaWMiLCIxIjoiQ3VzdG9tZXIgU3VwcG9ydCIsIjIiOiJKb29tbGEgVGhlbWUgU2V0dXAiLCIzIjoiUEhQIEJhc2ljIiwiNCI6IlBIUCBTZXR1cCIsIjUiOiJTYWxlcyIsIjYiOiJXb3JkUHJlc3MgVGhlbWUgU2V0dXAifQ==" value="cat_id">Category</option>
                                        <option stype="select" data="eyIqIjoiQWxsIFByaW9yaXRpZXMiLCJMIjoiTG93IiwiTSI6Ik1lZGl1bSIsIkgiOiJIaWdoIiwiVSI6IlVyZ2VudCJ9" value="priroty">Priority</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8">
                            <form id="ms_tab1_1595152244" onsubmit="if (!window.__cfRLUnblockHandlers) return false; return false;">
                                <div class="row">
                                    <div id="src_tab1_1595152244_text" class="col-md-12">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-6 hidden-xs"><span class="hidden-sm">Select</span> Value</label>
                                            <div class="col-md-6">
                                                <input autocomplete="off" class="srcTextValue form-control input-sm" type="text" name="srcText" value=""> <select class="input-sm srcSelectValue form-control" style="display: none;" name="srcText">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="src_tab1_1595152244_from" class="col-md-6 col-sm-6 hidden">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-2">From</label>
                                            <div class="ag-from-container col-md-10">
                                                <div class="input-group date gs-date-picker-grid-options addedDate">
                                                    <input autocomplete="off" class="input-xs srcTextValue form-control srcFrom input-sm" type="text" name="srcFrom" value=""> <span class="input-group-addon" style="height: 24px !important; padding: 6px 3px 0px 1px !important; line-height: 4px !important;"><span style="font-size: 8px !important;" class="fa fa-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="src_tab1_1595152244_to" class="col-md-6 col-sm-6 hidden">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-2">To</label>
                                            <div class="ag-to-container col-md-10">
                                                <div class="input-group date gs-date-picker-grid-options addedDate" data-date-format="YYYY-MM-DD">
                                                    <input autocomplete="off" class="srcTextValue form-control  srcTo input-sm" type="text" name="srcTo" value=""> <span class="input-group-addon" style="height: 24px !important; padding: 6px 3px 0px 1px !important; line-height: 4px !important;"><span style="font-size: 8px !important;" class="fa fa-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2 col-sm-12 sm-text-right">
                            <a class="btn btn-xs btn-warning added-ripples" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:Grid_tab1_1595152244_custom_reload();"><i class="fa fa-search"></i>Search</a> <a class="btn btn-xs btn-danger added-ripples" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:Grid_tab1_1595152244_reset_custom_reload();"><i class="fa fa-times"> </i> Reset</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <script type="text/javascript">
                    var is_init_tab1_1595152244 = false;
                    var sbtnclick_tab1_1595152244 = false;
                    var minwidth_tab1_1595152244 = 200;

                    function app_grid_log(e) {}

                    function col_cellattr(ts, rowId, tv, rawObject, cm, rdata) {
                        if (rawObject.name == "action" || rawObject.name == "action2") {
                            return ' title=" "';
                        }
                    }
                    jQuery(function($) {

                        var srcDivId = "#src_tab1_1595152244";
                        jQuery("#src_tab1_1595152244 .srcSelectValue").change(function() {
                            if (jQuery("#autosearch_tab1_1595152244").is(':checked')) {
                                Grid_tab1_1595152244_custom_reload();
                            }
                        });
                        var timeoutHnd_tab1_1595152244 = null;
                        jQuery("#src_tab1_1595152244 .srcTextValue").keydown(function(e) {
                            var s = jQuery(this).val();
                            var code = (e.keyCode ? e.keyCode : e.which);
                            if ((s.length == 1 && code == 8) || jQuery("#autosearch_tab1_1595152244").is(':checked')) {
                                if (timeoutHnd_tab1_1595152244) clearTimeout(timeoutHnd_tab1_1595152244);
                                timeoutHnd_tab1_1595152244 = setTimeout(Grid_tab1_1595152244_reload, 500);
                            } else if (code == 13) {
                                Grid_tab1_1595152244_custom_reload();
                            }
                        });


                        jQuery("#autosearch_tab1_1595152244").click(function() {
                            if (jQuery("#autosearch_tab1_1595152244").is(':checked')) {
                                jQuery("#src_tab1_1595152244 .srcButton").hide();
                                Grid_tab1_1595152244_reload();
                            } else {
                                jQuery("#src_tab1_1595152244 .srcButton").show();
                            }
                        });

                        jQuery("#src_tab1_1595152244 .srcOptionList").change(function(e) {
                            SetSearchOption_src_tab1_1595152244();
                        });
                        jQuery(".gs-jq-grid").on("click", ".full-screen:not(.exit-full-screen)", function(e) {
                            $('body').addClass("f-screen").addClass("s-note-fs");
                            e.preventDefault();
                            //alert("ok");
                            $(this).find(".fa-expand").removeClass("fa-expand").addClass("fa-compress");
                            //fa-compress
                            try {
                                jQuery(".grid-body").addClass('grid-full-screen');
                            } catch (e) {}
                            var panelid = $(this).data("gridid");
                            var gridh = jQuery("#tab1_1595152244").getGridParam("height");
                            $(this).attr("lasth", gridh);
                            $("#" + panelid).addClass("grid-panel-full-screen");
                            $(this).addClass("exit-full-screen");
                            var wheight = $(window).height();
                            var wwidth = $(window).width();
                            var offset = jQuery("#pager_tab1_1595152244").height();
                            if (offset <= 0) {
                                offset = 130;
                            } else {
                                offset += 75;
                            }
                            jQuery("#tab1_1595152244").setGridWidth(wwidth);
                            jQuery("#tab1_1595152244").setGridHeight(wheight - offset);

                            // requestFullScreen(document.getElementById(panelid));


                        });
                        jQuery(".gs-jq-grid").on("click", ".exit-full-screen", function(e) {
                            e.preventDefault();
                            $('body').removeClass("f-screen").removeClass("s-note-fs");
                            $(this).find(".fa-compress").removeClass("fa-compress").addClass("fa-expand");
                            var panelid = $(this).data("gridid");
                            $("#" + panelid).removeClass("grid-panel-full-screen");
                            $(this).removeClass("exit-full-screen");
                            var lastheight = $(this).attr("lasth");
                            $(this).removeAttr("lasth");
                            jQuery("#tab1_1595152244").setGridHeight(lastheight);
                            // requestFullScreen(document.getElementById(panelid));
                            try {
                                jQuery(".grid-body").removeClass('grid-full-screen');
                            } catch (e) {}
                            tab1_1595152244_ResizeGrid();

                        });
                        SetSearchOption_src_tab1_1595152244();
                    });

                    function SetSearchOption_src_tab1_1595152244() {
                        try {
                            UnsetDateGridPicker();
                        } catch (e) {
                            //gcl(e.message);
                        }
                        var stype = jQuery("#src_tab1_1595152244 .srcOptionList option:selected").attr("stype");

                        if (stype == "select") {
                            jQuery("#src_tab1_1595152244 .srcTextValue").hide();
                            var selectOption = jQuery("#src_tab1_1595152244 .srcOptionList option:selected").attr("data");
                            selectOption = jQuery.parseJSON(atob(selectOption));
                            jQuery("#src_tab1_1595152244 .srcSelectValue option").remove();
                            for (var i in selectOption) {
                                jQuery("#src_tab1_1595152244 .srcSelectValue").append("<option value='" + i + "'>" + selectOption[i] + "</option>");
                            }
                            jQuery("#src_tab1_1595152244 .srcSelectValue").show();
                        } else if (stype == "date" || stype == "dateonly" || stype == "time" || stype == "datetime") {
                            jQuery("#src_tab1_1595152244_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595152244_text").addClass("hidden");
                            jQuery("#src_tab1_1595152244_from").removeClass("hidden");
                            jQuery("#src_tab1_1595152244_from").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595152244_from .control-label ").removeClass("col-sm-2").addClass("col-sm-6").html('<span class="hidden-sm">Select</span> Value');
                            jQuery("#src_tab1_1595152244_from .form-group > div.ag-from-container").removeClass("col-sm-8").addClass("col-sm-6");
                            jQuery("#src_tab1_1595152244_from .srcFrom ").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595152244 .srcTextValue").show();
                            jQuery("#src_tab1_1595152244 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else if (stype == "daterange" || stype == "datetimerange" || stype == "timerange") {
                            jQuery("#src_tab1_1595152244_from").removeClass("col-xs-8").addClass("col-xs-4");
                            jQuery("#src_tab1_1595152244_from .control-label ").removeClass("col-sm-6").addClass("col-sm-2").html('From');
                            jQuery("#src_tab1_1595152244_from .form-group > div.ag-from-container").removeClass("col-sm-6").addClass("col-sm-8");
                            jQuery("#src_tab1_1595152244_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595152244_to .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595152244_text").addClass("hidden");
                            jQuery("#src_tab1_1595152244_from").removeClass("hidden");
                            jQuery("#src_tab1_1595152244_to").removeClass("hidden");
                            jQuery("#src_tab1_1595152244 .srcTextValue").show();
                            jQuery("#src_tab1_1595152244 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else {
                            jQuery("#src_tab1_1595152244_from").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595152244_to").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595152244_text").removeClass("hidden");
                            jQuery("#src_tab1_1595152244 .srcTextValue").show();
                            jQuery("#src_tab1_1595152244 .srcSelectValue").hide();
                        }
                        if (jQuery("#autosearch_tab1_1595152244").is(':checked')) {
                            Grid_tab1_1595152244_custom_reload();
                        }

                    }

                    function Grid_tab1_1595152244_download() {
                        var stype = jQuery("#src_tab1_1595152244 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595152244").jqGrid("getGridParam", "postData");
                        data.download_csv = true;
                        data.searchOper = "eq";
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595152244 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595152244_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595152244_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595152244 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595152244 .srcOptionList").val();
                        data._search = true;
                        data.searchString = (typeof(data.searchString) == "undefined") ? "" : data.searchString;
                        data.searchField = jQuery("#src_tab1_1595152244 .srcOptionList").val();
                        data.searchField = (typeof(data.searchField) == "undefined") ? "" : data.searchField;
                        data._search = true;

                        if (jQuery("#difrm").length == 0) {
                            jQuery("body").append("<iframe id='difrm' style='border:none;height:0;width:0'></iframe>");
                        }
                        serialize = function(obj) {
                            var str = [];
                            for (var p in obj)
                                if (obj.hasOwnProperty(p)) {
                                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                }
                            return str.join("&");
                        }
                        data.cols = "eyJ0aXRsZSI6IlRpdGxlIiwib3BlbmVkX3RpbWUiOiJPcGVuIFRpbWUiLCJhc3NpZ25lZF9vbiI6IkFzc2lnbmVkIiwibGFzdF9yZXBsaWVkX2J5IjoiTGFzdCBSZXBseSIsImxhc3RfcmVwbHlfdGltZSI6IkwuUmVwbHkgVGltZSIsImN1c3RvbV9BQSI6InRlc3QiLCJhY3Rpb24iOiJBY3Rpb24ifQ==";
                        data.filename = "download";
                        var durl = "https://demo.appsbd.com/support-system/admin/ticket-data/mc-ticket.html?" + serialize(data);
                        jQuery("#difrm").attr("src", durl);
                    }

                    function Grid_tab1_1595152244_custom_reload() {
                        var IsMultiSearch = false;
                        var data = jQuery("#tab1_1595152244").jqGrid("getGridParam", "postData");
                        data.first = true;
                        data.download_csv = false;
                        data.isMultiSearch = IsMultiSearch;
                        if (IsMultiSearch) {
                            data.ms = jQuery("#ms_tab1_1595152244").serialize();
                            try {
                                if (window.Base64) {
                                    data.ms = Base64.encode(data.ms);
                                }
                            } catch (e) {
                                app_grid_log(e.message);
                            }
                        }
                        jQuery("#tab1_1595152244").jqGrid("setGridParam", {
                            "postData": data
                        });
                        Grid_tab1_1595152244_reload();
                        sbtnclick_tab1_1595152244 = false;
                        //alert("Test");
                    }

                    function Grid_tab1_1595152244_reset_custom_reload() {
                        jQuery("#ms_tab1_1595152244")[0].reset();
                        Grid_tab1_1595152244_custom_reload();
                    }

                    function Grid_tab1_1595152244_advance_search() {
                        jQuery("#tab1_1595152244").jqGrid('searchGrid');
                        $("body > .ui-widget-overlay").prependTo(".gs-jq-grid ");
                        $("#searchhdfbox_tab1_1595152244").addClass("alert-info");
                        $("#searchmodfbox_tab1_1595152244").addClass("jqgrid-input");
                        $("#searchmodfbox_tab1_1595152244 .ui-jqdialog-title").html('<i class="fa fa-search"></i> Advance Search');
                        $("#searchmodfbox_tab1_1595152244").prependTo(".gs-jq-grid ").css("display", "block");




                    }

                    function Grid_tab1_1595152244_reload() {
                        var stype = jQuery("#src_tab1_1595152244 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595152244").jqGrid("getGridParam", "postData");
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595152244 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595152244_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595152244_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595152244 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595152244 .srcOptionList").val();
                        data._search = true;

                        jQuery("#tab1_1595152244").jqGrid("setGridParam", {
                            "postData": data
                        });
                        jQuery("#tab1_1595152244").trigger("reloadGrid");
                        data.first = false;
                        jQuery("#tab1_1595152244").jqGrid("setGridParam", {
                            "postData": data
                        });

                    }
                    var config_tab1_1595152244 = {
                        "IsCSVDownload": false,
                        "width": "auto",
                        "height": "auto",
                        "url": "https:\/\/demo.appsbd.com\/support-system\/admin\/ticket-data\/mc-ticket.html",
                        "datatype": "json",
                        "colNames": ["Track ID", "Title", "Open Time", "Assigned", "Last Reply", "L.Reply Time", "test", "Action", "Category", "Priority"],
                        "afterInsertRow": "",
                        "container": ".grid-body",
                        "multiselect": false,
                        "multisearch": false,
                        "ShowAdvanceSearch": false,
                        "isColumnChoseable": true,
                        "colModel": [{
                            "Title": "Track ID",
                            "objectName": null,
                            "width": null,
                            "name": "ticket_track_id",
                            "index": "ticket_track_id",
                            "formater": "number",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": false,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": false,
                            "search": true,
                            "hidden": true,
                            "stype": "",
                            "searchoptions": null
                        }, {
                            "Title": "Title",
                            "objectName": null,
                            "width": 260,
                            "name": "title",
                            "index": "title",
                            "formater": "Grid_tab1_1595152244_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": false,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": true,
                            "align": "left",
                            "formatoptions": {}
                        }, {
                            "Title": "Open Time",
                            "objectName": null,
                            "width": 60,
                            "name": "opened_time",
                            "index": "opened_time",
                            "formater": "Grid_tab1_1595152244_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": true,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": true,
                            "align": "center",
                            "search": false,
                            "formatoptions": {}
                        }, {
                            "Title": "Assigned",
                            "objectName": null,
                            "width": 100,
                            "name": "assigned_on",
                            "index": "assigned_on",
                            "formater": "Grid_tab1_1595152244_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": false,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": true,
                            "align": "left",
                            "search": false,
                            "formatoptions": {}
                        }, {
                            "Title": "Last Reply",
                            "objectName": null,
                            "width": 100,
                            "name": "last_replied_by",
                            "index": "last_replied_by",
                            "formater": "Grid_tab1_1595152244_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": false,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": true,
                            "align": "left",
                            "search": false,
                            "formatoptions": {}
                        }, {
                            "Title": "L.Reply Time",
                            "objectName": null,
                            "width": 60,
                            "name": "last_reply_time",
                            "index": "last_reply_time",
                            "formater": "Grid_tab1_1595152244_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": true,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": true,
                            "align": "center",
                            "search": false,
                            "formatoptions": {}
                        }, {
                            "Title": "test",
                            "objectName": null,
                            "width": 100,
                            "name": "custom_AA",
                            "index": "custom_AA",
                            "formater": "Grid_tab1_1595152244_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": false,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": true,
                            "align": "center",
                            "formatoptions": {}
                        }, {
                            "Title": "Action",
                            "objectName": null,
                            "width": 80,
                            "name": "action",
                            "index": "action",
                            "formater": "Grid_tab1_1595152244_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": false,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": true,
                            "align": "center",
                            "search": false,
                            "formatoptions": {}
                        }, {
                            "Title": "Category",
                            "objectName": null,
                            "width": null,
                            "name": "cat_id",
                            "index": "cat_id",
                            "formater": "number",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": false,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": false,
                            "search": true,
                            "hidden": true,
                            "stype": "select",
                            "searchoptions": {
                                "value": {
                                    "*": "All Category",
                                    "0": "Android Basic",
                                    "1": "Customer Support",
                                    "2": "Joomla Theme Setup",
                                    "3": "PHP Basic",
                                    "4": "PHP Setup",
                                    "5": "Sales",
                                    "6": "WordPress Theme Setup"
                                }
                            }
                        }, {
                            "Title": "Priority",
                            "objectName": null,
                            "width": null,
                            "name": "priroty",
                            "index": "priroty",
                            "formater": "number",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": false,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": false,
                            "search": true,
                            "hidden": true,
                            "stype": "select",
                            "searchoptions": {
                                "value": {
                                    "*": "All Priorities",
                                    "L": "Low",
                                    "M": "Medium",
                                    "H": "High",
                                    "U": "Urgent"
                                }
                            }
                        }],
                        "rowNum": 20,
                        "rowList": [5, 10, 20, 50, 100, 200],
                        "mtype": "POST",
                        "caption": "<\/span><span style=\"float: left;\" class=\"gridtitle left\"> <a onclick=\"Grid_tab1_1595152244_reload()\" class=\"btn btn-xs btn-primary\" ><i class=\"fa fa-refresh\"><\/i> Reload<\/a> <\/span><span class=\"gridtitle text-right \">&nbsp;<div class=\"form-group form-group-sm\"><label class=\"control-label\" for=\"is_auto_refresh\">Enable Auto Reload (every 1 min) <\/label><div class=\"togglebutton \"><label><input   type=\"checkbox\"  value=\"Y\" class=\"\" id=\"is_auto_refresh\"  name=\"is_auto_refresh\" ><\/label><\/div><\/div> <a onclick=\"Grid_tab1_1595152244_download()\" class=\"btn btn-xs btn-success\" ><i class=\"fa fa-download\"><\/i> Download CSV<\/a> <span data-gridid=\"mc_tab1_1595152244\" class=\"full-screen btn btn-info btn-xs\"><i class=\"fa fa-expand \"><\/i><\/span> ",
                        "rownumbers": true,
                        "pager": "#pager_tab1_1595152244",
                        "sortname": "",
                        "viewrecords": true,
                        "sortorder": "asc",
                        "jsonReader": {
                            "root": "rowdata",
                            "repeatitems": false,
                            "id": 0
                        },
                        "autowidth": false,
                        "SRCObj": null,
                        "searchbtn": "",
                        "direction": "",
                        "loadComplete": "data_on_complete",
                        "OnSelectAll": null,
                        "onInitGrid": null,
                        "hidecaption": false,
                        "hidegrid": true,
                        "shrinkToFit": true,
                        "postData": {},
                        "CustomSearchOnTopGrid": true,
                        "ShowDefaultSearch": false,
                        "emptySetText": "No Record Found",
                        "TotalColumn": 7,
                        "isShowNoRecordMsg": true,
                        "IsColAutoWidth": false,
                        "minWidth": 200,
                        "rightPadding": 0,
                        "ShowReloadButtonInTitle": true,
                        "ShowDownloadButtonInBottom": false,
                        "ShowDownloadButtonInTitle": true,
                        "DownloadFileName": "download_",
                        "TextwDownloadButtonInTitle": "Download CSV",
                        "TextReloadButtonInTitle": "Reload",
                        "auto_height_records": 14,
                        "toolbar": [false, "top"],
                        "toolbarControl": "",
                        "toolbarHeight": null,
                        "toolbarCSS": "",
                        "attach_form": "",
                        "isForBootstrap": true,
                        "beforeSelectRow": "",
                        "hasDefaultvalue": false,
                        "visible_fields": [],
                        "custom_hidden_fields": ["ticket_track_id", "cat_id", "priroty"],
                        "groupingView": {
                            "groupField": [],
                            "groupColumnShow": []
                        }
                    };
                    jQuery(function($) {
                        //languages;
                        try {
                            $.extend($.jgrid, {
                                defaults: {
                                    recordtext: "View {0} - {1} of {2}",
                                    emptyrecords: "", //No records to view deleteted by sarwar
                                    loadtext: '<i class="fa fa-spinner fa-spin"></i> Loading...',
                                    pgtext: "Page {0} of {1}"
                                }
                            });
                        } catch (e) {
                            gcl(e);
                        }
                        //end language
                        try {
                            SetDateGridPicker();
                        } catch (e) {}

                        config_tab1_1595152244.afterInsertRow = eval(config_tab1_1595152244.afterInsertRow);
                        try {
                            for (var i in config_tab1_1595152244.colModel) {
                                try {
                                    config_tab1_1595152244.colModel[i].cellattr = eval(config_tab1_1595152244.colModel[i].cellattr);
                                    try {
                                        if (!config_tab1_1595152244.colModel[i].hidden) {
                                            config_tab1_1595152244.visible_fields[(config_tab1_1595152244.colModel[i].index)] = config_tab1_1595152244.colModel[i].Title;
                                        }
                                    } catch (e) {}
                                } catch (e) {
                                    app_grid_log(e.message);
                                }

                            }
                        } catch (e) {
                            app_grid_log(e.message);
                        }

                        config_tab1_1595152244.loadComplete = function(e) {
                            try {
                                for (i in addonGridDataLoad) {
                                    try {
                                        addonGridDataLoad[i]();
                                    } catch (e) {}
                                }
                            } catch (e) {
                                console.log(e);
                            }
                            SetLightBox();
                            data_on_complete(e);
                            try {
                                AppGridDataLoaded(e);
                            } catch (e) {
                                app_grid_log(e.message);
                            }
                            tab1_1595152244_resize_height(e);
                            jQuery("#gview_tab1_1595152244 .ui-jqgrid-bdiv .gridnorecord").hide().remove();
                            if (jQuery("#tab1_1595152244").getGridParam("records") == 0) {
                                jQuery("#gview_tab1_1595152244 .ui-jqgrid-bdiv").append('<div class="gridnorecord" id="gridnorecord">' + jQuery("#tab1_1595152244").getGridParam("emptySetText") + '</div>');
                            }
                            try {
                                app_handle_grid_unauthorize(e, jQuery("#gview_tab1_1595152244 .ui-jqgrid-bdiv > .gridnorecord"));
                            } catch (e) {};
                        };
                        config_tab1_1595152244.ajaxGridOptions = {
                            //contentType: "application/json; charset=utf-8",
                            dataFilter: function(data, dataType) { // preprocess the data
                                try {
                                    if (dataType == "json") {

                                        var data2 = JSON.parse(data);
                                        jQuery.each(data2.rowdata, function(key, value) {
                                            var optstr = "<div >" + ("<div class='col-xs-5 app-property-label'>" + config_tab1_1595152244.visible_fields["title"] + "</div>") + "<div class=' app-property-value col-xs-7 text-left '>" + data2.rowdata[key]["title"] + "</div></div>";
                                            jQuery.each(data2.rowdata[key], function(key2, value2) {
                                                if (key2 == "title") {
                                                    return;
                                                }
                                                try {
                                                    if (typeof config_tab1_1595152244.visible_fields[key2] != "undefined") {
                                                        optstr += "<div >" + (key2 == "action" ? "" : "<div class='col-xs-5 app-property-label'>" + config_tab1_1595152244.visible_fields[key2] + "</div>") + "<div class=' app-property-value col-xs-" + (key2 == "action" ? "12 text-center" : "7 text-left") + " '>" + data2.rowdata[key][key2] + "</div></div>";
                                                    }
                                                } catch (e) {}
                                            });
                                            data2.rowdata[key]["title"] = "<div class='hidden-xs'>" + data2.rowdata[key]["title"] + "</div><div class='visible-xs app-grid-property-row' style='text-align:left;'>" + optstr + "</div>";
                                        });
                                        //data2.rowdata[key]
                                    }
                                    data = JSON.stringify(data2);
                                } catch (e) {
                                    console.log(e);
                                }
                                //console.log(typeof data);
                                return data;

                            }
                        };
                        var isFirstLoaded_tab1_1595152244 = false;
                        tab1_1595152244_serialize = function(obj) {
                            var str = [];
                            for (var p in obj)
                                if (obj.hasOwnProperty(p)) {
                                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                }
                            return str.join("&");
                        }
                        config_tab1_1595152244.beforeRequest = function() {
                            var data = jQuery("#tab1_1595152244").jqGrid("getGridParam", "postData");
                            //console.log(data);
                            // myGrid.setGridParam({sortname: ''})
                            if (data.sidx != "") {
                                try {
                                    var th_obj = $("#jqgh_tab1_1595152244_" + data.sidx);
                                    jQuery(".app-sorting").removeClass("app-sorting");
                                    th_obj.addClass("app-sorting");
                                    jQuery(".tab1_1595152244-rm-srt").remove();
                                    var rmicon = jQuery('<i class="tab1_1595152244-rm-srt grid-reset-sort-btn fa fa-times-circle tooltip2" data-tooltip-position="top" title="Remove Sorting"></i>');
                                    rmicon.click(function(e) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                        tab1_1595152244_reset_sorting();
                                        th_obj.find(">.s-ico > span").addClass("ui-state-disabled");
                                        rmicon.fadeOut("fast", function() {
                                            $(this).remove();
                                        });
                                        th_obj.removeClass("app-sorting");
                                    });
                                    th_obj.append(rmicon);
                                } catch (e) {}


                            }
                            try {
                                data = set_csrf_param(data);
                            } catch (e) {
                                app_grid_log("grid msg: " + e.message);
                            }
                            jQuery("#tab1_1595152244").jqGrid("setGridParam", {
                                "postData": data
                            });
                            return true;
                        };

                        config_tab1_1595152244.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595152244.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595152244.onInitGrid = function() {
                            //This event does not raised.
                            try {
                                jQuery("#jqgh_tab1_1595152244_ticket_track_id").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595152244_title").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595152244_opened_time ").addClass("fld-sortable").find(" > .s-ico").show();
                                jQuery("#jqgh_tab1_1595152244_assigned_on").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595152244_last_replied_by").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595152244_last_reply_time ").addClass("fld-sortable").find(" > .s-ico").show();
                                jQuery("#jqgh_tab1_1595152244_custom_AA").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595152244_action").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595152244_cat_id").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595152244_priroty").addClass("no-hand-css");
                            } catch (e) {}
                        }

                        if (config_tab1_1595152244.width == "auto") {
                            config_tab1_1595152244.width = jQuery(".grid-body").width();
                            if (config_tab1_1595152244.width < minwidth_tab1_1595152244) {
                                config_tab1_1595152244.width = minwidth_tab1_1595152244;
                            }
                            config_tab1_1595152244.width -= 0;
                        }
                        tab1_1595152244_init_grid();
                    });

                    function check_all_visible_tab1_1595152244() {
                        try {
                            var cols_hidden = localStorage.getItem("ag_0fcbd1a8");
                            if (cols_hidden) {
                                cols_hidden = JSON.parse(cols_hidden);
                                if (typeof cols_hidden == "object") {
                                    config_tab1_1595152244.custom_hidden_fields = cols_hidden;
                                }
                            } else {
                                localStorage.setItem("ag_0fcbd1a8", JSON.stringify(config_tab1_1595152244.custom_hidden_fields));
                            }
                        } catch (e) {

                        }
                        var models = config_tab1_1595152244.colModel;
                        var $searchOnly = ["ticket_track_id", "cat_id", "priroty"];
                        for (var i in models) {
                            var isChecked = check_visible_tab1_1595152244(models[i].index);
                            if ($searchOnly.indexOf(models[i].index) > -1) {
                                continue;
                            }
                            if (models[i].Title) {
                                append_into_checklist_tab1_1595152244(models[i].index, models[i].Title, isChecked);
                                if (isChecked) {
                                    jQuery("#tab1_1595152244").showCol(models[i].index);
                                }
                            }
                        }

                    }

                    function check_visible_tab1_1595152244(index) {
                        var custom_visible = config_tab1_1595152244.custom_hidden_fields;
                        if (custom_visible.indexOf(index) > -1) {
                            return false;
                        }
                        return true;
                    }

                    function show_coll_tab1_1595152244(index) {
                        if (config_tab1_1595152244.custom_hidden_fields.indexOf(index) > -1) {
                            jQuery("#tab1_1595152244").hideCol(index);
                            return;
                        }
                        jQuery("#tab1_1595152244").showCol(index);
                    }

                    function set_unset_key_tab1_1595152244(index, isSet) {

                        if (isSet) {
                            if (config_tab1_1595152244.custom_hidden_fields.indexOf(index) > -1) {
                                return;
                            }
                            config_tab1_1595152244.custom_hidden_fields.push(index);
                        } else {
                            var aind = config_tab1_1595152244.custom_hidden_fields.indexOf(index)
                            if (aind !== -1) {
                                config_tab1_1595152244.custom_hidden_fields.splice(aind, 1);
                            }
                        }
                        localStorage.setItem("ag_0fcbd1a8", JSON.stringify(config_tab1_1595152244.custom_hidden_fields));


                    }

                    function append_into_checklist_tab1_1595152244(index, title, isChecked) {
                        jQuery("#mc_tab1_1595152244 .ag_column-choose > .ag-column-container").append('<label class="cl-chose-input"> <input data-cl-key="' + index + '" type="checkbox" ' + (isChecked ? "checked" : "") + '> ' + title + '</label>');

                    }

                    function tab1_1595152244_init_grid() {
                        if (is_init_tab1_1595152244) {
                            return;
                        }
                        is_init_tab1_1595152244 = true;
                        jQuery("#tab1_1595152244").jqGrid(config_tab1_1595152244);
                        check_all_visible_tab1_1595152244();
                        jQuery("#tab1_1595152244").jqGrid('navGrid', '#pager_tab1_1595152244', {
                            edit: false,
                            add: false,
                            del: false,
                            search: false,
                            reloadtext: "Reload",
                            searchtext: " Search&nbsp;"
                        }, {}, {}, {}, {
                            sopt: ['cn', 'bw', 'eq', 'ne', 'lt', 'gt', 'ew']
                        });
                        $("#pager_tab1_1595152244").after(jQuery("#alertmod_tab1_1595152244"));


                        jQuery(window).bind('resize', function() {
                            tab1_1595152244_ResizeGrid();
                            setTimeout(tab1_1595152244_ResizeGrid, 500);
                        }).trigger('resize');
                        try {
                            jQuery('body').resize(function() {
                                tab1_1595152244_ResizeGrid();
                                setTimeout(tab1_1595152244_ResizeGrid, 500);
                            });
                        } catch (e) {}
                        try {
                            AddOnPageResize(tab1_1595152244_ResizeGrid);
                        } catch (e) {}


                        var applyClassesToHeaders = function(grid) {
                            // Use the passed in grid as context,
                            // in case we have more than one table on the page.
                            var trHead = jQuery("thead:first tr", grid.hdiv);
                            var colModel = grid.getGridParam("colModel");
                            for (var iCol = 0; iCol < colModel.length; iCol++) {
                                var columnInfo = colModel[iCol];
                                if (columnInfo.thclasses) {
                                    var headDiv = jQuery("th:eq(" + iCol + ")", trHead);
                                    headDiv.addClass(columnInfo.thclasses);
                                }
                            }
                        };
                        try {
                            applyClassesToHeaders(jQuery("#tab1_1595152244"));
                        } catch (e) {}

                        try {
                            var firstThID = jQuery("#mc_tab1_1595152244 .ui-jqgrid-htable > thead .ui-jqgrid-labels #tab1_1595152244_rn");
                            var settings_i = jQuery('<i class="apg-settings fa fa-cog"></i>');
                            settings_i.on("click", function(e) {
                                e.preventDefault();
                                e.stopPropagation();
                                if (jQuery(this).hasClass('ap-db-open')) {
                                    jQuery(this).removeClass('ap-db-open');
                                    jQuery("#mc_tab1_1595152244 >.ag_column-choose").hide();
                                } else {
                                    jQuery(this).addClass('ap-db-open');
                                    jQuery("#mc_tab1_1595152244 >.ag_column-choose").show();
                                }
                                //alert("Clicked me");
                            });
                            jQuery("#mc_tab1_1595152244 >.ag_column-choose .cl-chose-input").on("click", function(e) {
                                e.stopPropagation();

                            });
                            jQuery("#mc_tab1_1595152244 >.ag_column-choose .cl-chose-input input").on("change", function(e) {
                                var key = jQuery(this).data("cl-key");
                                var customHidden = config_tab1_1595152244.custom_hidden_fields;
                                if (jQuery(this).is(":checked")) {
                                    set_unset_key_tab1_1595152244(key, false);
                                } else {
                                    set_unset_key_tab1_1595152244(key, true);
                                }
                                show_coll_tab1_1595152244(key);
                                tab1_1595152244_ResizeGrid();
                            });
                            jQuery("body").on("click", function() {
                                jQuery("#mc_tab1_1595152244 >.ag_column-choose").hide();
                                settings_i.removeClass('ap-db-open');
                            });
                            firstThID.html(settings_i);
                        } catch (e) {}




                    }

                    function tab1_1595152244_resize_height(e) {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        try {
                            if (config_tab1_1595152244.height == "auto") {
                                return;
                            }
                            var data = config_tab1_1595152244.auto_height_records;
                            if (e.records < data) {
                                jQuery("#tab1_1595152244").setGridHeight('auto');
                            } else {
                                jQuery("#tab1_1595152244").setGridHeight(config_tab1_1595152244.height);
                            }
                            //app_grid_log(config_tab1_1595152244.height);
                        } catch (e) {}
                    }

                    function tab1_1595152244_reset_sorting() {

                        var myGrid = jQuery("#tab1_1595152244");
                        $("span.s-ico", myGrid[0].grid.hDiv).hide(); // hide sort icons
                        myGrid.setGridParam({
                            sortname: ''
                        }).trigger('reloadGrid');

                    }

                    function tab1_1595152244_ResizeGrid() {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        var c_minwidth_tab1_1595152244 = jQuery(".grid-body").width();
                        if (c_minwidth_tab1_1595152244 <= minwidth_tab1_1595152244) {
                            c_minwidth_tab1_1595152244 = minwidth_tab1_1595152244;
                        }
                        c_minwidth_tab1_1595152244 -= 5;
                        jQuery("#tab1_1595152244").setGridWidth(c_minwidth_tab1_1595152244);
                        var windowWidth = jQuery(window).width();


                        if (windowWidth < 768) {
                            for (var key in config_tab1_1595152244.visible_fields) {
                                //console.log("title");
                                if (key != "title") {
                                    jQuery("#tab1_1595152244").hideCol(key);
                                }
                            }
                        } else {
                            for (var kindex in config_tab1_1595152244.visible_fields) {
                                show_coll_tab1_1595152244(kindex);
                            }
                        }
                        if (windowWidth < 991) {

                        } else {
                            for (var kindex in config_tab1_1595152244.visible_fields) {
                                show_coll_tab1_1595152244(kindex);
                            }

                        }


                    }
                </script>
                <div id="mc_tab1_1595152244" class="gs-jq-grid " data-unique-id="ag_0fcbd1a8">
                    <div class="ag_column-choose">
                        <div class="ag-column-container">
                            <label class="cl-chose-input"> <input data-cl-key="title" type="checkbox" checked=""> Title</label><label class="cl-chose-input"> <input data-cl-key="opened_time" type="checkbox" checked=""> Open Time</label><label class="cl-chose-input"> <input data-cl-key="assigned_on" type="checkbox" checked=""> Assigned</label><label class="cl-chose-input"> <input data-cl-key="last_replied_by" type="checkbox" checked=""> Last Reply</label><label class="cl-chose-input"> <input data-cl-key="last_reply_time" type="checkbox" checked=""> L.Reply Time</label><label class="cl-chose-input"> <input data-cl-key="custom_AA" type="checkbox" checked=""> test</label><label class="cl-chose-input"> <input data-cl-key="action" type="checkbox" checked=""> Action</label></div>
                    </div>
                    <div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_tab1_1595152244" dir="ltr" style="width: 1635px;">
                        <div class="ui-widget-overlay jqgrid-overlay" id="lui_tab1_1595152244"></div>
                        <div class="loading ui-state-default ui-state-active" id="load_tab1_1595152244" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Loading...</div>
                        <div class="ui-jqgrid-view" id="gview_tab1_1595152244" style="width: 1635px;">
                            <div class="ui-jqgrid-titlebar ui-jqgrid-caption ui-widget-header ui-corner-top ui-helper-clearfix"><a role="link" class="ui-jqgrid-titlebar-close ui-corner-all HeaderButton" style="right: 0px;"><span class="ui-icon ui-icon-circle-triangle-n"></span></a><span class="ui-jqgrid-title"></span><span style="float: left;" class="gridtitle left"> <a onclick="Grid_tab1_1595152244_reload()" class="btn btn-xs btn-primary added-ripples"><i class="fa fa-refresh"></i> Reload</a> </span><span class="gridtitle text-right ">&nbsp;<div class="form-group form-group-sm"><label class="control-label" for="is_auto_refresh">Enable Auto Reload (every 1 min) </label>
                                        <div class="togglebutton "><label><input type="checkbox" value="Y" class="" id="is_auto_refresh" name="is_auto_refresh"></label></div>
                                    </div> <a onclick="Grid_tab1_1595152244_download()" class="btn btn-xs btn-success added-ripples"><i class="fa fa-download"></i> Download CSV</a> <span data-gridid="mc_tab1_1595152244" class="full-screen btn btn-info btn-xs added-ripples"><i class="fa fa-expand "></i></span> </span></div>
                            <div class="ui-state-default ui-jqgrid-hdiv" style="width: 1635px;">
                                <div class="ui-jqgrid-hbox">
                                    <table class="ui-jqgrid-htable" style="width: 1635px;" role="grid" aria-labelledby="gbox_tab1_1595152244" cellspacing="0" cellpadding="0" border="0">
                                        <thead>
                                            <tr class="ui-jqgrid-labels" role="rowheader">
                                                <th id="tab1_1595152244_rn" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 25px;"><i class="apg-settings fa fa-cog"></i></th>
                                                <th id="tab1_1595152244_ticket_track_id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 150px; display: none;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_ticket_track_id" class="ui-jqgrid-sortable no-hand-css">Track ID<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595152244_title" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 537px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_title" class="ui-jqgrid-sortable no-hand-css">Title<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595152244_opened_time" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 124px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_opened_time" class="ui-jqgrid-sortable fld-sortable">Open Time<span class="s-ico"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595152244_assigned_on" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 207px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_assigned_on" class="ui-jqgrid-sortable no-hand-css">Assigned<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595152244_last_replied_by" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 207px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_last_replied_by" class="ui-jqgrid-sortable no-hand-css">Last Reply<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595152244_last_reply_time" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 124px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_last_reply_time" class="ui-jqgrid-sortable fld-sortable">L.Reply Time<span class="s-ico"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595152244_custom_AA" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 207px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_custom_AA" class="ui-jqgrid-sortable no-hand-css">test<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595152244_action" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 164px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_action" class="ui-jqgrid-sortable no-hand-css">Action<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595152244_cat_id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 150px; display: none;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_cat_id" class="ui-jqgrid-sortable no-hand-css">Category<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595152244_priroty" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 150px; display: none;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595152244_priroty" class="ui-jqgrid-sortable no-hand-css">Priority<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                            </tr>
                                        </thead><tbody>
                                            <tr class="jqgfirstrow" role="row" style="height:auto">
                                                <td role="gridcell" style="height:0px;width:25px;"></td>
                                                <td role="gridcell" style="height:0px;width:150px;display:none;"></td>
                                                <td role="gridcell" style="height: 0px; width: 537px;"></td>
                                                <td role="gridcell" style="height:0px;width:124px;"></td>
                                                <td role="gridcell" style="height:0px;width:207px;"></td>
                                                <td role="gridcell" style="height:0px;width:207px;"></td>
                                                <td role="gridcell" style="height:0px;width:124px;"></td>
                                                <td role="gridcell" style="height:0px;width:207px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 164px;"></td>
                                                <td role="gridcell" style="height:0px;width:150px;display:none;"></td>
                                                <td role="gridcell" style="height:0px;width:150px;display:none;"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                        <div class="ui-jqgrid-resize-mark" id="rs_mtab1_1595152244">&nbsp;</div>
                        <div id="pager_tab1_1595152244" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 1635px;">
                            <div id="pg_pager_tab1_1595152244" class="ui-pager-control" role="group">
                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;" role="row">
                                    <tbody>
                                        <tr>
                                            <td id="pager_tab1_1595152244_left" align="left">
                                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table navtable" style="float:left;table-layout:auto;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="ui-pg-button ui-corner-all" title="Reload Grid" id="refresh_tab1_1595152244">
                                                                <div class="ui-pg-div"><span class="ui-icon ui-icon-refresh"></span></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td id="pager_tab1_1595152244_center" align="center" style="white-space: pre; width: 202px;">
                                                <table cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;" class="ui-pg-table">
                                                    <tbody>
                                                        <tr>
                                                            <td id="first_pager_tab1_1595152244" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-first"></span></td>
                                                            <td id="prev_pager_tab1_1595152244" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-prev"></span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td dir="ltr">Page <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox"> of <span id="sp_1_pager_tab1_1595152244">0</span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td id="next_pager_tab1_1595152244" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-next"></span></td>
                                                            <td id="last_pager_tab1_1595152244" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-end"></span></td>
                                                            <td dir="ltr"><select class="ui-pg-selbox" role="listbox">
                                                                    <option role="option" value="5">5</option>
                                                                    <option role="option" value="10">10</option>
                                                                    <option role="option" value="20" selected="selected">20</option>
                                                                    <option role="option" value="50">50</option>
                                                                    <option role="option" value="100">100</option>
                                                                    <option role="option" value="200">200</option>
                                                                </select></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td id="pager_tab1_1595152244_right" align="right">
                                                <div dir="ltr" style="text-align:right" class="ui-paging-info"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="ui-widget ui-widget-content ui-corner-all ui-jqdialog" id="alertmod_tab1_1595152244" dir="ltr" tabindex="-1" role="dialog" aria-labelledby="alerthd_tab1_1595152244" aria-hidden="true" style="width: 200px; height: auto; z-index: 950; overflow: hidden; top: 328.5px; left: 860px;">
                            <div class="ui-jqdialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" id="alerthd_tab1_1595152244" style="cursor: move;"><span class="ui-jqdialog-title" style="float: left;">Warning</span><a class="ui-jqdialog-titlebar-close ui-corner-all" style="right: 0.3em;"><span class="ui-icon ui-icon-closethick"></span></a></div>
                            <div class="ui-jqdialog-content ui-widget-content" id="alertcnt_tab1_1595152244">
                                <div>Please, select row</div><span tabindex="0"><span tabindex="-1" id="jqg_alrt"></span></span>
                            </div>
                            <div class="jqResize ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script type="text/javascript">
            var reload_interval = null;

            function data_on_complete(rdata) {
                setToolTipNalert();
                $("[aria-describedby$=cat_id]").removeAttr("title");
            }

            function Reload_setting() {
                var isChecked = $("#is_auto_refresh").is(":checked");
                if (isChecked) {
                    //gcl("checked");
                    setCookie(appGlobalLang.base_cookie_name + "_1d222bc2", "Y", 15, "/");
                    if (!reload_interval) {
                        //gcl("starting");
                        reload_interval = setInterval(
                            function() {
                                //gcl("Called");

                                Grid_tab1_1595152244_reload();
                            }, 60000);
                    }
                } else {
                    try {
                        //gcl("unchecked");
                        deleteCookie(appGlobalLang.base_cookie_name + "_1d222bc2");
                        clearInterval(reload_interval);
                        reload_interval = null;

                    } catch (e) {}
                }
            }
            /*window.onbeforeunload = function(e) {
                return 'Are you sure you want to leave this page?  You will lose any unsaved data.';
             };*/
            $(function() {
                AddOnPageCloseMethod(function(e) {
                    console.log("Called");
                    //return "Test";
                });
                AddOnCloseMethod(Grid_tab1_1595152244_reload);
                AddOnShowNotificationMethod(Grid_tab1_1595152244_reload);
                Reload_setting();
                $("#is_auto_refresh").on("change", function() {
                    Reload_setting();

                });

            });
        </script>
    </section>
</div>
@endsection
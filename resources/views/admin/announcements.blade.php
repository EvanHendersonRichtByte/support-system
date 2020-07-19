@extends('layout.admin.user_settings.user_settings_master')

@section('tab-title')
Announcements List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-bullhorn "></i>
            Announcements List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="https://demo.appsbd.com/support-system/"><i class=""></i> Home</a>
            </li>
            <li>
                Announcements List </li>
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
        <div class="box box-primary">
            <div class="box-body grid-body">
                <div class="grid-search-panel">
                    <div class="gs-grid-serach row form-horizontal" id="src_tab1_1595153944" style="padding: 5px;">
                        <div class="col-md-5 col-sm-4">
                            <div class="form-group form-group-xs">
                                <label for="selectpropery" class="control-label first-label col-md-6  hidden-xs"><span class="hidden-sm">Select</span> Property</label>
                                <div class="col-md-6">
                                    <select class="input-sm srcOptionList form-control">
                                        <option value="">Select</option>
                                        <option stype="daterange" value="start_date">Start Date</option>
                                        <option stype="daterange" value="end_date">End Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8">
                            <form id="ms_tab1_1595153944" onsubmit="if (!window.__cfRLUnblockHandlers) return false; return false;">
                                <div class="row">
                                    <div id="src_tab1_1595153944_text" class="col-md-12">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-6 hidden-xs"><span class="hidden-sm">Select</span> Value</label>
                                            <div class="col-md-6">
                                                <input autocomplete="off" class="srcTextValue form-control input-sm" type="text" name="srcText" value=""> <select class="input-sm srcSelectValue form-control" style="display: none;" name="srcText">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="src_tab1_1595153944_from" class="col-md-6 col-sm-6 hidden">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-2">From</label>
                                            <div class="ag-from-container col-md-10">
                                                <div class="input-group date gs-date-picker-grid-options addedDate">
                                                    <input autocomplete="off" class="input-xs srcTextValue form-control srcFrom input-sm" type="text" name="srcFrom" value=""> <span class="input-group-addon" style="height: 24px !important; padding: 6px 3px 0px 1px !important; line-height: 4px !important;"><span style="font-size: 8px !important;" class="fa fa-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="src_tab1_1595153944_to" class="col-md-6 col-sm-6 hidden">
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
                            <a class="btn btn-xs btn-warning added-ripples" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:Grid_tab1_1595153944_custom_reload();"><i class="fa fa-search"></i>Search</a> <a class="btn btn-xs btn-danger added-ripples" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:Grid_tab1_1595153944_reset_custom_reload();"><i class="fa fa-times"> </i> Reset</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <script type="text/javascript">
                    var is_init_tab1_1595153944 = false;
                    var sbtnclick_tab1_1595153944 = false;
                    var minwidth_tab1_1595153944 = 200;

                    function app_grid_log(e) {}

                    function col_cellattr(ts, rowId, tv, rawObject, cm, rdata) {
                        if (rawObject.name == "action" || rawObject.name == "action2") {
                            return ' title=" "';
                        }
                    }
                    jQuery(function($) {

                        var srcDivId = "#src_tab1_1595153944";
                        jQuery("#src_tab1_1595153944 .srcSelectValue").change(function() {
                            if (jQuery("#autosearch_tab1_1595153944").is(':checked')) {
                                Grid_tab1_1595153944_custom_reload();
                            }
                        });
                        var timeoutHnd_tab1_1595153944 = null;
                        jQuery("#src_tab1_1595153944 .srcTextValue").keydown(function(e) {
                            var s = jQuery(this).val();
                            var code = (e.keyCode ? e.keyCode : e.which);
                            if ((s.length == 1 && code == 8) || jQuery("#autosearch_tab1_1595153944").is(':checked')) {
                                if (timeoutHnd_tab1_1595153944) clearTimeout(timeoutHnd_tab1_1595153944);
                                timeoutHnd_tab1_1595153944 = setTimeout(Grid_tab1_1595153944_reload, 500);
                            } else if (code == 13) {
                                Grid_tab1_1595153944_custom_reload();
                            }
                        });


                        jQuery("#autosearch_tab1_1595153944").click(function() {
                            if (jQuery("#autosearch_tab1_1595153944").is(':checked')) {
                                jQuery("#src_tab1_1595153944 .srcButton").hide();
                                Grid_tab1_1595153944_reload();
                            } else {
                                jQuery("#src_tab1_1595153944 .srcButton").show();
                            }
                        });

                        jQuery("#src_tab1_1595153944 .srcOptionList").change(function(e) {
                            SetSearchOption_src_tab1_1595153944();
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
                            var gridh = jQuery("#tab1_1595153944").getGridParam("height");
                            $(this).attr("lasth", gridh);
                            $("#" + panelid).addClass("grid-panel-full-screen");
                            $(this).addClass("exit-full-screen");
                            var wheight = $(window).height();
                            var wwidth = $(window).width();
                            var offset = jQuery("#pager_tab1_1595153944").height();
                            if (offset <= 0) {
                                offset = 130;
                            } else {
                                offset += 75;
                            }
                            jQuery("#tab1_1595153944").setGridWidth(wwidth);
                            jQuery("#tab1_1595153944").setGridHeight(wheight - offset);

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
                            jQuery("#tab1_1595153944").setGridHeight(lastheight);
                            // requestFullScreen(document.getElementById(panelid));
                            try {
                                jQuery(".grid-body").removeClass('grid-full-screen');
                            } catch (e) {}
                            tab1_1595153944_ResizeGrid();

                        });
                        SetSearchOption_src_tab1_1595153944();
                    });

                    function SetSearchOption_src_tab1_1595153944() {
                        try {
                            UnsetDateGridPicker();
                        } catch (e) {
                            //gcl(e.message);
                        }
                        var stype = jQuery("#src_tab1_1595153944 .srcOptionList option:selected").attr("stype");

                        if (stype == "select") {
                            jQuery("#src_tab1_1595153944 .srcTextValue").hide();
                            var selectOption = jQuery("#src_tab1_1595153944 .srcOptionList option:selected").attr("data");
                            selectOption = jQuery.parseJSON(atob(selectOption));
                            jQuery("#src_tab1_1595153944 .srcSelectValue option").remove();
                            for (var i in selectOption) {
                                jQuery("#src_tab1_1595153944 .srcSelectValue").append("<option value='" + i + "'>" + selectOption[i] + "</option>");
                            }
                            jQuery("#src_tab1_1595153944 .srcSelectValue").show();
                        } else if (stype == "date" || stype == "dateonly" || stype == "time" || stype == "datetime") {
                            jQuery("#src_tab1_1595153944_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595153944_text").addClass("hidden");
                            jQuery("#src_tab1_1595153944_from").removeClass("hidden");
                            jQuery("#src_tab1_1595153944_from").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595153944_from .control-label ").removeClass("col-sm-2").addClass("col-sm-6").html('<span class="hidden-sm">Select</span> Value');
                            jQuery("#src_tab1_1595153944_from .form-group > div.ag-from-container").removeClass("col-sm-8").addClass("col-sm-6");
                            jQuery("#src_tab1_1595153944_from .srcFrom ").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595153944 .srcTextValue").show();
                            jQuery("#src_tab1_1595153944 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else if (stype == "daterange" || stype == "datetimerange" || stype == "timerange") {
                            jQuery("#src_tab1_1595153944_from").removeClass("col-xs-8").addClass("col-xs-4");
                            jQuery("#src_tab1_1595153944_from .control-label ").removeClass("col-sm-6").addClass("col-sm-2").html('From');
                            jQuery("#src_tab1_1595153944_from .form-group > div.ag-from-container").removeClass("col-sm-6").addClass("col-sm-8");
                            jQuery("#src_tab1_1595153944_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595153944_to .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595153944_text").addClass("hidden");
                            jQuery("#src_tab1_1595153944_from").removeClass("hidden");
                            jQuery("#src_tab1_1595153944_to").removeClass("hidden");
                            jQuery("#src_tab1_1595153944 .srcTextValue").show();
                            jQuery("#src_tab1_1595153944 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else {
                            jQuery("#src_tab1_1595153944_from").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595153944_to").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595153944_text").removeClass("hidden");
                            jQuery("#src_tab1_1595153944 .srcTextValue").show();
                            jQuery("#src_tab1_1595153944 .srcSelectValue").hide();
                        }
                        if (jQuery("#autosearch_tab1_1595153944").is(':checked')) {
                            Grid_tab1_1595153944_custom_reload();
                        }

                    }

                    function Grid_tab1_1595153944_download() {
                        var stype = jQuery("#src_tab1_1595153944 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595153944").jqGrid("getGridParam", "postData");
                        data.download_csv = true;
                        data.searchOper = "eq";
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595153944 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595153944_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595153944_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595153944 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595153944 .srcOptionList").val();
                        data._search = true;
                        data.searchString = (typeof(data.searchString) == "undefined") ? "" : data.searchString;
                        data.searchField = jQuery("#src_tab1_1595153944 .srcOptionList").val();
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
                        data.cols = "eyJ0aXRsZSI6IlRpdGxlIiwic3RhcnRfZGF0ZSI6IlN0YXJ0IERhdGUiLCJlbmRfZGF0ZSI6IkVuZCBEYXRlIiwibXNnX2ZvciI6Ik5vdGljZSBGb3IiLCJhZGRlZF9ieSI6IkFkZGVkIEJ5IiwiYWRkZWRfb24iOiJFbnRyeSBUaW1lIiwic3RhdHVzIjoiU3RhdHVzIiwiYWN0aW9uIjoiQWN0aW9uIn0=";
                        data.filename = "download";
                        var durl = "https://demo.appsbd.com/support-system/admin/notice-data/notice-list.html?" + serialize(data);
                        jQuery("#difrm").attr("src", durl);
                    }

                    function Grid_tab1_1595153944_custom_reload() {
                        var IsMultiSearch = false;
                        var data = jQuery("#tab1_1595153944").jqGrid("getGridParam", "postData");
                        data.first = true;
                        data.download_csv = false;
                        data.isMultiSearch = IsMultiSearch;
                        if (IsMultiSearch) {
                            data.ms = jQuery("#ms_tab1_1595153944").serialize();
                            try {
                                if (window.Base64) {
                                    data.ms = Base64.encode(data.ms);
                                }
                            } catch (e) {
                                app_grid_log(e.message);
                            }
                        }
                        jQuery("#tab1_1595153944").jqGrid("setGridParam", {
                            "postData": data
                        });
                        Grid_tab1_1595153944_reload();
                        sbtnclick_tab1_1595153944 = false;
                        //alert("Test");
                    }

                    function Grid_tab1_1595153944_reset_custom_reload() {
                        jQuery("#ms_tab1_1595153944")[0].reset();
                        Grid_tab1_1595153944_custom_reload();
                    }

                    function Grid_tab1_1595153944_advance_search() {
                        jQuery("#tab1_1595153944").jqGrid('searchGrid');
                        $("body > .ui-widget-overlay").prependTo(".gs-jq-grid ");
                        $("#searchhdfbox_tab1_1595153944").addClass("alert-info");
                        $("#searchmodfbox_tab1_1595153944").addClass("jqgrid-input");
                        $("#searchmodfbox_tab1_1595153944 .ui-jqdialog-title").html('<i class="fa fa-search"></i> Advance Search');
                        $("#searchmodfbox_tab1_1595153944").prependTo(".gs-jq-grid ").css("display", "block");




                    }

                    function Grid_tab1_1595153944_reload() {
                        var stype = jQuery("#src_tab1_1595153944 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595153944").jqGrid("getGridParam", "postData");
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595153944 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595153944_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595153944_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595153944 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595153944 .srcOptionList").val();
                        data._search = true;

                        jQuery("#tab1_1595153944").jqGrid("setGridParam", {
                            "postData": data
                        });
                        jQuery("#tab1_1595153944").trigger("reloadGrid");
                        data.first = false;
                        jQuery("#tab1_1595153944").jqGrid("setGridParam", {
                            "postData": data
                        });

                    }
                    var config_tab1_1595153944 = {
                        "IsCSVDownload": false,
                        "width": "auto",
                        "height": "auto",
                        "url": "https:\/\/demo.appsbd.com\/support-system\/admin\/notice-data\/notice-list.html",
                        "datatype": "json",
                        "colNames": ["Title", "Start Date", "End Date", "Notice For", "Added By", "Entry Time", "Status", "Action"],
                        "afterInsertRow": "",
                        "container": ".grid-body",
                        "multiselect": false,
                        "multisearch": false,
                        "ShowAdvanceSearch": false,
                        "isColumnChoseable": false,
                        "colModel": [{
                            "Title": "Title",
                            "objectName": null,
                            "width": 100,
                            "name": "title",
                            "index": "title",
                            "formater": "Grid_tab1_1595153944_formatter",
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
                            "Title": "Start Date",
                            "objectName": null,
                            "width": 80,
                            "name": "start_date",
                            "index": "start_date",
                            "formater": "Grid_tab1_1595153944_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": true,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": null,
                            "viewable": true,
                            "align": "center",
                            "stype": "daterange",
                            "formatoptions": {}
                        }, {
                            "Title": "End Date",
                            "objectName": null,
                            "width": 80,
                            "name": "end_date",
                            "index": "end_date",
                            "formater": "Grid_tab1_1595153944_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": true,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": null,
                            "viewable": true,
                            "align": "center",
                            "stype": "daterange",
                            "formatoptions": {}
                        }, {
                            "Title": "Notice For",
                            "objectName": null,
                            "width": 80,
                            "name": "msg_for",
                            "index": "msg_for",
                            "formater": "Grid_tab1_1595153944_formatter",
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
                            "Title": "Added By",
                            "objectName": null,
                            "width": 80,
                            "name": "added_by",
                            "index": "added_by",
                            "formater": "Grid_tab1_1595153944_formatter",
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
                            "Title": "Entry Time",
                            "objectName": null,
                            "width": 110,
                            "name": "added_on",
                            "index": "added_on",
                            "formater": "Grid_tab1_1595153944_formatter",
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
                            "Title": "Status",
                            "objectName": null,
                            "width": 100,
                            "name": "status",
                            "index": "status",
                            "formater": "Grid_tab1_1595153944_formatter",
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
                            "Title": "Action",
                            "objectName": null,
                            "width": 100,
                            "name": "action",
                            "index": "action",
                            "formater": "Grid_tab1_1595153944_formatter",
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
                        }],
                        "rowNum": 20,
                        "rowList": [5, 10, 20, 50, 100, 200],
                        "mtype": "POST",
                        "caption": "<\/span><span style=\"float: left;\" class=\"gridtitle left\"> <a onclick=\"Grid_tab1_1595153944_reload()\" class=\"btn btn-xs btn-primary\" ><i class=\"fa fa-refresh\"><\/i> Reload<\/a> <\/span><span class=\"gridtitle text-right \">&nbsp;<a data-effect=\"mfp-move-from-top\" class=\"popupformWR btn btn-xs btn-info\" href=\"https:\/\/demo.appsbd.com\/support-system\/admin\/notice\/add.html\" ><i class=\"fa fa-plus\"><\/i>Add New<\/a> <a onclick=\"Grid_tab1_1595153944_download()\" class=\"btn btn-xs btn-success\" ><i class=\"fa fa-download\"><\/i> Download CSV<\/a> <span data-gridid=\"mc_tab1_1595153944\" class=\"full-screen btn btn-info btn-xs\"><i class=\"fa fa-expand \"><\/i><\/span> ",
                        "rownumbers": true,
                        "pager": "#pager_tab1_1595153944",
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
                        "loadComplete": null,
                        "OnSelectAll": null,
                        "onInitGrid": null,
                        "hidecaption": false,
                        "hidegrid": true,
                        "shrinkToFit": true,
                        "postData": {},
                        "CustomSearchOnTopGrid": true,
                        "ShowDefaultSearch": false,
                        "emptySetText": "No Record Found",
                        "TotalColumn": 8,
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
                        "custom_hidden_fields": [],
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

                        config_tab1_1595153944.afterInsertRow = eval(config_tab1_1595153944.afterInsertRow);
                        try {
                            for (var i in config_tab1_1595153944.colModel) {
                                try {
                                    config_tab1_1595153944.colModel[i].cellattr = eval(config_tab1_1595153944.colModel[i].cellattr);
                                    try {
                                        if (!config_tab1_1595153944.colModel[i].hidden) {
                                            config_tab1_1595153944.visible_fields[(config_tab1_1595153944.colModel[i].index)] = config_tab1_1595153944.colModel[i].Title;
                                        }
                                    } catch (e) {}
                                } catch (e) {
                                    app_grid_log(e.message);
                                }

                            }
                        } catch (e) {
                            app_grid_log(e.message);
                        }

                        config_tab1_1595153944.loadComplete = function(e) {
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
                            (e);
                            try {
                                AppGridDataLoaded(e);
                            } catch (e) {
                                app_grid_log(e.message);
                            }
                            tab1_1595153944_resize_height(e);
                            jQuery("#gview_tab1_1595153944 .ui-jqgrid-bdiv .gridnorecord").hide().remove();
                            if (jQuery("#tab1_1595153944").getGridParam("records") == 0) {
                                jQuery("#gview_tab1_1595153944 .ui-jqgrid-bdiv").append('<div class="gridnorecord" id="gridnorecord">' + jQuery("#tab1_1595153944").getGridParam("emptySetText") + '</div>');
                            }
                            try {
                                app_handle_grid_unauthorize(e, jQuery("#gview_tab1_1595153944 .ui-jqgrid-bdiv > .gridnorecord"));
                            } catch (e) {};
                        };
                        config_tab1_1595153944.ajaxGridOptions = {
                            //contentType: "application/json; charset=utf-8",
                            dataFilter: function(data, dataType) { // preprocess the data
                                try {
                                    if (dataType == "json") {

                                        var data2 = JSON.parse(data);
                                        jQuery.each(data2.rowdata, function(key, value) {
                                            var optstr = "<div >" + ("<div class='col-xs-5 app-property-label'>" + config_tab1_1595153944.visible_fields["title"] + "</div>") + "<div class=' app-property-value col-xs-7 text-left '>" + data2.rowdata[key]["title"] + "</div></div>";
                                            jQuery.each(data2.rowdata[key], function(key2, value2) {
                                                if (key2 == "title") {
                                                    return;
                                                }
                                                try {
                                                    if (typeof config_tab1_1595153944.visible_fields[key2] != "undefined") {
                                                        optstr += "<div >" + (key2 == "action" ? "" : "<div class='col-xs-5 app-property-label'>" + config_tab1_1595153944.visible_fields[key2] + "</div>") + "<div class=' app-property-value col-xs-" + (key2 == "action" ? "12 text-center" : "7 text-left") + " '>" + data2.rowdata[key][key2] + "</div></div>";
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
                        var isFirstLoaded_tab1_1595153944 = false;
                        tab1_1595153944_serialize = function(obj) {
                            var str = [];
                            for (var p in obj)
                                if (obj.hasOwnProperty(p)) {
                                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                }
                            return str.join("&");
                        }
                        config_tab1_1595153944.beforeRequest = function() {
                            var data = jQuery("#tab1_1595153944").jqGrid("getGridParam", "postData");
                            //console.log(data);
                            // myGrid.setGridParam({sortname: ''})
                            if (data.sidx != "") {
                                try {
                                    var th_obj = $("#jqgh_tab1_1595153944_" + data.sidx);
                                    jQuery(".app-sorting").removeClass("app-sorting");
                                    th_obj.addClass("app-sorting");
                                    jQuery(".tab1_1595153944-rm-srt").remove();
                                    var rmicon = jQuery('<i class="tab1_1595153944-rm-srt grid-reset-sort-btn fa fa-times-circle tooltip2" data-tooltip-position="top" title="Remove Sorting"></i>');
                                    rmicon.click(function(e) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                        tab1_1595153944_reset_sorting();
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
                            jQuery("#tab1_1595153944").jqGrid("setGridParam", {
                                "postData": data
                            });
                            return true;
                        };

                        config_tab1_1595153944.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595153944.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595153944.onInitGrid = function() {
                            //This event does not raised.
                            try {
                                jQuery("#jqgh_tab1_1595153944_title").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595153944_start_date ").addClass("fld-sortable").find(" > .s-ico").show();
                                jQuery("#jqgh_tab1_1595153944_end_date ").addClass("fld-sortable").find(" > .s-ico").show();
                                jQuery("#jqgh_tab1_1595153944_msg_for").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595153944_added_by").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595153944_added_on").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595153944_status").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595153944_action").addClass("no-hand-css");
                            } catch (e) {}
                        }

                        if (config_tab1_1595153944.width == "auto") {
                            config_tab1_1595153944.width = jQuery(".grid-body").width();
                            if (config_tab1_1595153944.width < minwidth_tab1_1595153944) {
                                config_tab1_1595153944.width = minwidth_tab1_1595153944;
                            }
                            config_tab1_1595153944.width -= 0;
                        }
                        tab1_1595153944_init_grid();
                    });

                    function check_all_visible_tab1_1595153944() {
                        return;
                        try {
                            var cols_hidden = localStorage.getItem("ag_aff17433");
                            if (cols_hidden) {
                                cols_hidden = JSON.parse(cols_hidden);
                                if (typeof cols_hidden == "object") {
                                    config_tab1_1595153944.custom_hidden_fields = cols_hidden;
                                }
                            } else {
                                localStorage.setItem("ag_aff17433", JSON.stringify(config_tab1_1595153944.custom_hidden_fields));
                            }
                        } catch (e) {

                        }
                        var models = config_tab1_1595153944.colModel;
                        var $searchOnly = [];
                        for (var i in models) {
                            var isChecked = check_visible_tab1_1595153944(models[i].index);
                            if ($searchOnly.indexOf(models[i].index) > -1) {
                                continue;
                            }
                            if (models[i].Title) {
                                append_into_checklist_tab1_1595153944(models[i].index, models[i].Title, isChecked);
                                if (isChecked) {
                                    jQuery("#tab1_1595153944").showCol(models[i].index);
                                }
                            }
                        }

                    }

                    function check_visible_tab1_1595153944(index) {
                        var custom_visible = config_tab1_1595153944.custom_hidden_fields;
                        if (custom_visible.indexOf(index) > -1) {
                            return false;
                        }
                        return true;
                    }

                    function show_coll_tab1_1595153944(index) {
                        if (config_tab1_1595153944.custom_hidden_fields.indexOf(index) > -1) {
                            jQuery("#tab1_1595153944").hideCol(index);
                            return;
                        }
                        jQuery("#tab1_1595153944").showCol(index);
                    }

                    function set_unset_key_tab1_1595153944(index, isSet) {

                        if (isSet) {
                            if (config_tab1_1595153944.custom_hidden_fields.indexOf(index) > -1) {
                                return;
                            }
                            config_tab1_1595153944.custom_hidden_fields.push(index);
                        } else {
                            var aind = config_tab1_1595153944.custom_hidden_fields.indexOf(index)
                            if (aind !== -1) {
                                config_tab1_1595153944.custom_hidden_fields.splice(aind, 1);
                            }
                        }


                    }

                    function append_into_checklist_tab1_1595153944(index, title, isChecked) {
                        jQuery("#mc_tab1_1595153944 .ag_column-choose > .ag-column-container").append('<label class="cl-chose-input"> <input data-cl-key="' + index + '" type="checkbox" ' + (isChecked ? "checked" : "") + '> ' + title + '</label>');

                    }

                    function tab1_1595153944_init_grid() {
                        if (is_init_tab1_1595153944) {
                            return;
                        }
                        is_init_tab1_1595153944 = true;
                        jQuery("#tab1_1595153944").jqGrid(config_tab1_1595153944);
                        check_all_visible_tab1_1595153944();
                        jQuery("#tab1_1595153944").jqGrid('navGrid', '#pager_tab1_1595153944', {
                            edit: false,
                            add: false,
                            del: false,
                            search: false,
                            reloadtext: "Reload",
                            searchtext: " Search&nbsp;"
                        }, {}, {}, {}, {
                            sopt: ['cn', 'bw', 'eq', 'ne', 'lt', 'gt', 'ew']
                        });
                        $("#pager_tab1_1595153944").after(jQuery("#alertmod_tab1_1595153944"));


                        jQuery(window).bind('resize', function() {
                            tab1_1595153944_ResizeGrid();
                            setTimeout(tab1_1595153944_ResizeGrid, 500);
                        }).trigger('resize');
                        try {
                            jQuery('body').resize(function() {
                                tab1_1595153944_ResizeGrid();
                                setTimeout(tab1_1595153944_ResizeGrid, 500);
                            });
                        } catch (e) {}
                        try {
                            AddOnPageResize(tab1_1595153944_ResizeGrid);
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
                            applyClassesToHeaders(jQuery("#tab1_1595153944"));
                        } catch (e) {}




                    }

                    function tab1_1595153944_resize_height(e) {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        try {
                            if (config_tab1_1595153944.height == "auto") {
                                return;
                            }
                            var data = config_tab1_1595153944.auto_height_records;
                            if (e.records < data) {
                                jQuery("#tab1_1595153944").setGridHeight('auto');
                            } else {
                                jQuery("#tab1_1595153944").setGridHeight(config_tab1_1595153944.height);
                            }
                            //app_grid_log(config_tab1_1595153944.height);
                        } catch (e) {}
                    }

                    function tab1_1595153944_reset_sorting() {

                        var myGrid = jQuery("#tab1_1595153944");
                        $("span.s-ico", myGrid[0].grid.hDiv).hide(); // hide sort icons
                        myGrid.setGridParam({
                            sortname: ''
                        }).trigger('reloadGrid');

                    }

                    function tab1_1595153944_ResizeGrid() {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        var c_minwidth_tab1_1595153944 = jQuery(".grid-body").width();
                        if (c_minwidth_tab1_1595153944 <= minwidth_tab1_1595153944) {
                            c_minwidth_tab1_1595153944 = minwidth_tab1_1595153944;
                        }
                        c_minwidth_tab1_1595153944 -= 5;
                        jQuery("#tab1_1595153944").setGridWidth(c_minwidth_tab1_1595153944);
                        var windowWidth = jQuery(window).width();


                        if (windowWidth < 768) {
                            for (var key in config_tab1_1595153944.visible_fields) {
                                //console.log("title");
                                if (key != "title") {
                                    jQuery("#tab1_1595153944").hideCol(key);
                                }
                            }
                        } else {
                            for (var kindex in config_tab1_1595153944.visible_fields) {
                                show_coll_tab1_1595153944(kindex);
                            }
                        }
                        if (windowWidth < 991) {

                        } else {
                            for (var kindex in config_tab1_1595153944.visible_fields) {
                                show_coll_tab1_1595153944(kindex);
                            }

                        }


                    }
                </script>
                <div id="mc_tab1_1595153944" class="gs-jq-grid " data-unique-id="ag_aff17433">
                    <div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_tab1_1595153944" dir="ltr" style="width: 1635px;">
                        <div class="ui-widget-overlay jqgrid-overlay" id="lui_tab1_1595153944"></div>
                        <div class="loading ui-state-default ui-state-active" id="load_tab1_1595153944" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Loading...</div>
                        <div class="ui-jqgrid-view" id="gview_tab1_1595153944" style="width: 1635px;">
                            <div class="ui-jqgrid-titlebar ui-jqgrid-caption ui-widget-header ui-corner-top ui-helper-clearfix"><a role="link" class="ui-jqgrid-titlebar-close ui-corner-all HeaderButton" style="right: 0px;"><span class="ui-icon ui-icon-circle-triangle-n"></span></a><span class="ui-jqgrid-title"></span><span style="float: left;" class="gridtitle left"> <a onclick="Grid_tab1_1595153944_reload()" class="btn btn-xs btn-primary added-ripples"><i class="fa fa-refresh"></i> Reload</a> </span><span class="gridtitle text-right ">&nbsp;<a data-effect="mfp-move-from-top" class="popupformWR btn btn-xs btn-info added-ripples apopf" href="https://demo.appsbd.com/support-system/admin/notice/add.html"><i class="fa fa-plus"></i>Add New</a> <a onclick="Grid_tab1_1595153944_download()" class="btn btn-xs btn-success added-ripples"><i class="fa fa-download"></i> Download CSV</a> <span data-gridid="mc_tab1_1595153944" class="full-screen btn btn-info btn-xs added-ripples"><i class="fa fa-expand "></i></span> </span></div>
                            <div class="ui-state-default ui-jqgrid-hdiv" style="width: 1635px;">
                                <div class="ui-jqgrid-hbox">
                                    <table class="ui-jqgrid-htable" style="width: 1635px;" role="grid" aria-labelledby="gbox_tab1_1595153944" cellspacing="0" cellpadding="0" border="0">
                                        <thead>
                                            <tr class="ui-jqgrid-labels" role="rowheader">
                                                <th id="tab1_1595153944_rn" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 25px;">
                                                    <div id="jqgh_tab1_1595153944_rn"><span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595153944_title" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 214px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595153944_title" class="ui-jqgrid-sortable no-hand-css">Title<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595153944_start_date" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 172px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595153944_start_date" class="ui-jqgrid-sortable fld-sortable">Start Date<span class="s-ico"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595153944_end_date" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 172px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595153944_end_date" class="ui-jqgrid-sortable fld-sortable">End Date<span class="s-ico"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595153944_msg_for" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 172px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595153944_msg_for" class="ui-jqgrid-sortable no-hand-css">Notice For<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595153944_added_by" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 172px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595153944_added_by" class="ui-jqgrid-sortable no-hand-css">Added By<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595153944_added_on" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 236px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595153944_added_on" class="ui-jqgrid-sortable no-hand-css">Entry Time<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595153944_status" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 214px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595153944_status" class="ui-jqgrid-sortable no-hand-css">Status<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595153944_action" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 213px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595153944_action" class="ui-jqgrid-sortable no-hand-css">Action<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="jqgfirstrow" role="row" style="height:auto">
                                                <td role="gridcell" style="height:0px;width:25px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 214px;"></td>
                                                <td role="gridcell" style="height:0px;width:172px;"></td>
                                                <td role="gridcell" style="height:0px;width:172px;"></td>
                                                <td role="gridcell" style="height:0px;width:172px;"></td>
                                                <td role="gridcell" style="height:0px;width:172px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 236px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 214px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 213px;"></td>
                                            </tr>
                                            <tr role="row" id="1" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;width: 25px;" title="1" aria-describedby="tab1_1595153944_rn">1</td>
                                                <td role="gridcell" style="text-align:center;" title="Demo Site NoticeTitleDemo Site NoticeStart Date2018-02-01End Date2021-02-01Notice For SiteAdded ByadminEntry TimeJul 13, 2018 15:41Status  ActiveEdit Delete" aria-describedby="tab1_1595153944_title">
                                                    <div class="hidden-xs">Demo Site Notice</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Demo Site Notice</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Start Date</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">2018-02-01</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">End Date</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">2021-02-01</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Notice For</div>
                                                            <div class=" app-property-value col-xs-7 text-left "><span class="text-success"> Site</span></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Added By</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">admin</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Entry Time</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Jul 13, 2018 15:41</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change?" href="https://demo.appsbd.com/support-system/admin/notice-confirm/status-change/1.html"><span class="text-"> Active</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a data-effect="mfp-move-from-top" class="popupformWR btn btn-info btn-xs added-ripples apopf" href="https://demo.appsbd.com/support-system/admin/notice/edit/1.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/notice-confirm/notice-delete/1.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:center;" title="2018-02-01" aria-describedby="tab1_1595153944_start_date">2018-02-01</td>
                                                <td role="gridcell" style="text-align:center;" title="2021-02-01" aria-describedby="tab1_1595153944_end_date">2021-02-01</td>
                                                <td role="gridcell" style="text-align:center;" title=" Site" aria-describedby="tab1_1595153944_msg_for"><span class="text-success"> Site</span></td>
                                                <td role="gridcell" style="text-align:center;" title="admin" aria-describedby="tab1_1595153944_added_by">admin</td>
                                                <td role="gridcell" style="text-align:center;" title="Jul 13, 2018 15:41" aria-describedby="tab1_1595153944_added_on">Jul 13, 2018 15:41</td>
                                                <td role="gridcell" style="text-align:center;" title="  Active" aria-describedby="tab1_1595153944_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change?" href="https://demo.appsbd.com/support-system/admin/notice-confirm/status-change/1.html"><span class="text-"> Active</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595153944_action" title=" "><a data-effect="mfp-move-from-top" class="popupformWR btn btn-info btn-xs added-ripples apopf" href="https://demo.appsbd.com/support-system/admin/notice/edit/1.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/notice-confirm/notice-delete/1.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="2" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="2" aria-describedby="tab1_1595153944_rn">2</td>
                                                <td role="gridcell" style="text-align:center;" title="Purchase LinkTitlePurchase LinkStart Date2018-07-01End Date2022-07-30Notice For BothAdded ByadminEntry TimeAug 31, 2018 16:03Status  ActiveEdit Delete" aria-describedby="tab1_1595153944_title">
                                                    <div class="hidden-xs">Purchase Link</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Purchase Link</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Start Date</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">2018-07-01</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">End Date</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">2022-07-30</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Notice For</div>
                                                            <div class=" app-property-value col-xs-7 text-left "><span class="text-success"> Both</span></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Added By</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">admin</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Entry Time</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Aug 31, 2018 16:03</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change?" href="https://demo.appsbd.com/support-system/admin/notice-confirm/status-change/2.html"><span class="text-"> Active</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a data-effect="mfp-move-from-top" class="popupformWR btn btn-info btn-xs added-ripples apopf" href="https://demo.appsbd.com/support-system/admin/notice/edit/2.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/notice-confirm/notice-delete/2.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:center;" title="2018-07-01" aria-describedby="tab1_1595153944_start_date">2018-07-01</td>
                                                <td role="gridcell" style="text-align:center;" title="2022-07-30" aria-describedby="tab1_1595153944_end_date">2022-07-30</td>
                                                <td role="gridcell" style="text-align:center;" title=" Both" aria-describedby="tab1_1595153944_msg_for"><span class="text-success"> Both</span></td>
                                                <td role="gridcell" style="text-align:center;" title="admin" aria-describedby="tab1_1595153944_added_by">admin</td>
                                                <td role="gridcell" style="text-align:center;" title="Aug 31, 2018 16:03" aria-describedby="tab1_1595153944_added_on">Aug 31, 2018 16:03</td>
                                                <td role="gridcell" style="text-align:center;" title="  Active" aria-describedby="tab1_1595153944_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change?" href="https://demo.appsbd.com/support-system/admin/notice-confirm/status-change/2.html"><span class="text-"> Active</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595153944_action" title=" "><a data-effect="mfp-move-from-top" class="popupformWR btn btn-info btn-xs added-ripples apopf" href="https://demo.appsbd.com/support-system/admin/notice/edit/2.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/notice-confirm/notice-delete/2.html">Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="ui-jqgrid-resize-mark" id="rs_mtab1_1595153944">&nbsp;</div>
                        <div id="pager_tab1_1595153944" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 1635px;">
                            <div id="pg_pager_tab1_1595153944" class="ui-pager-control" role="group">
                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;" role="row">
                                    <tbody>
                                        <tr>
                                            <td id="pager_tab1_1595153944_left" align="left">
                                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table navtable" style="float:left;table-layout:auto;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="ui-pg-button ui-corner-all" title="Reload Grid" id="refresh_tab1_1595153944">
                                                                <div class="ui-pg-div"><span class="ui-icon ui-icon-refresh"></span></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td id="pager_tab1_1595153944_center" align="center" style="white-space: pre; width: 202px;">
                                                <table cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;" class="ui-pg-table">
                                                    <tbody>
                                                        <tr>
                                                            <td id="first_pager_tab1_1595153944" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-first"></span></td>
                                                            <td id="prev_pager_tab1_1595153944" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-prev"></span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td dir="ltr">Page <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox"> of <span id="sp_1_pager_tab1_1595153944">1</span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td id="next_pager_tab1_1595153944" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-next"></span></td>
                                                            <td id="last_pager_tab1_1595153944" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-end"></span></td>
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
                                            <td id="pager_tab1_1595153944_right" align="right">
                                                <div dir="ltr" style="text-align:right" class="ui-paging-info">View 1 - 2 of 2</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="ui-widget ui-widget-content ui-corner-all ui-jqdialog" id="alertmod_tab1_1595153944" dir="ltr" tabindex="-1" role="dialog" aria-labelledby="alerthd_tab1_1595153944" aria-hidden="true" style="width: 200px; height: auto; z-index: 950; overflow: hidden; top: 328.5px; left: 860px;">
                            <div class="ui-jqdialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" id="alerthd_tab1_1595153944" style="cursor: move;"><span class="ui-jqdialog-title" style="float: left;">Warning</span><a class="ui-jqdialog-titlebar-close ui-corner-all" style="right: 0.3em;"><span class="ui-icon ui-icon-closethick"></span></a></div>
                            <div class="ui-jqdialog-content ui-widget-content" id="alertcnt_tab1_1595153944">
                                <div>Please, select row</div><span tabindex="0"><span tabindex="-1" id="jqg_alrt"></span></span>
                            </div>
                            <div class="jqResize ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                AddOnCloseMethod(Grid_tab1_1595153944_reload);
            });
        </script>
    </section>
</div>
@endsection
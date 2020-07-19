@extends('layout.admin.user_settings.user_settings_master')

@section('tab-title')
Knowledge List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            Knowledge List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="https://demo.appsbd.com/support-system/"><i class=""></i> Home</a>
            </li>
            <li>
                Knowledge List </li>
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
                    <div class="gs-grid-serach row form-horizontal" id="src_tab1_1595154351" style="padding: 5px;">
                        <div class="col-md-5 col-sm-4">
                            <div class="form-group form-group-xs">
                                <label for="selectpropery" class="control-label first-label col-md-6  hidden-xs"><span class="hidden-sm">Select</span> Property</label>
                                <div class="col-md-6">
                                    <select class="input-sm srcOptionList form-control">
                                        <option value="">Select</option>
                                        <option stype="" value="title">Title</option>
                                        <option stype="select" data="eyIwIjoiQWxsIENhdGVnb3J5IiwiMiI6IkFuZHJvaWQgQmFzaWMiLCI3IjoiQ3VzdG9tZXIgU3VwcG9ydCIsIjYiOiJKb29tbGEgVGhlbWUgU2V0dXAiLCIxIjoiUEhQIEJhc2ljIiwiMyI6IlBIUCBTZXR1cCIsIjQiOiJTYWxlcyIsIjUiOiJXb3JkUHJlc3MgVGhlbWUgU2V0dXAifQ==" value="cat_id">Category</option>
                                        <option stype="" value="is_stickey">Sticky/Pinned</option>
                                        <option stype="select" data="eyIqIjoiQWxsIiwiUCI6IlB1Ymxpc2hlZCIsIlUiOiJVbnB1Ymxpc2hlZCJ9" value="status">Status</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8">
                            <form id="ms_tab1_1595154351" onsubmit="if (!window.__cfRLUnblockHandlers) return false; return false;">
                                <div class="row">
                                    <div id="src_tab1_1595154351_text" class="col-md-12">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-6 hidden-xs"><span class="hidden-sm">Select</span> Value</label>
                                            <div class="col-md-6">
                                                <input autocomplete="off" class="srcTextValue form-control input-sm" type="text" name="srcText" value=""> <select class="input-sm srcSelectValue form-control" style="display: none;" name="srcText">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="src_tab1_1595154351_from" class="col-md-6 col-sm-6 hidden">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-2">From</label>
                                            <div class="ag-from-container col-md-10">
                                                <div class="input-group date gs-date-picker-grid-options addedDate">
                                                    <input autocomplete="off" class="input-xs srcTextValue form-control srcFrom input-sm" type="text" name="srcFrom" value=""> <span class="input-group-addon" style="height: 24px !important; padding: 6px 3px 0px 1px !important; line-height: 4px !important;"><span style="font-size: 8px !important;" class="fa fa-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="src_tab1_1595154351_to" class="col-md-6 col-sm-6 hidden">
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
                            <a class="btn btn-xs btn-warning added-ripples" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:Grid_tab1_1595154351_custom_reload();"><i class="fa fa-search"></i>Search</a> <a class="btn btn-xs btn-danger added-ripples" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:Grid_tab1_1595154351_reset_custom_reload();"><i class="fa fa-times"> </i> Reset</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <script type="text/javascript">
                    var is_init_tab1_1595154351 = false;
                    var sbtnclick_tab1_1595154351 = false;
                    var minwidth_tab1_1595154351 = 200;

                    function app_grid_log(e) {}

                    function col_cellattr(ts, rowId, tv, rawObject, cm, rdata) {
                        if (rawObject.name == "action" || rawObject.name == "action2") {
                            return ' title=" "';
                        }
                    }
                    jQuery(function($) {

                        var srcDivId = "#src_tab1_1595154351";
                        jQuery("#src_tab1_1595154351 .srcSelectValue").change(function() {
                            if (jQuery("#autosearch_tab1_1595154351").is(':checked')) {
                                Grid_tab1_1595154351_custom_reload();
                            }
                        });
                        var timeoutHnd_tab1_1595154351 = null;
                        jQuery("#src_tab1_1595154351 .srcTextValue").keydown(function(e) {
                            var s = jQuery(this).val();
                            var code = (e.keyCode ? e.keyCode : e.which);
                            if ((s.length == 1 && code == 8) || jQuery("#autosearch_tab1_1595154351").is(':checked')) {
                                if (timeoutHnd_tab1_1595154351) clearTimeout(timeoutHnd_tab1_1595154351);
                                timeoutHnd_tab1_1595154351 = setTimeout(Grid_tab1_1595154351_reload, 500);
                            } else if (code == 13) {
                                Grid_tab1_1595154351_custom_reload();
                            }
                        });


                        jQuery("#autosearch_tab1_1595154351").click(function() {
                            if (jQuery("#autosearch_tab1_1595154351").is(':checked')) {
                                jQuery("#src_tab1_1595154351 .srcButton").hide();
                                Grid_tab1_1595154351_reload();
                            } else {
                                jQuery("#src_tab1_1595154351 .srcButton").show();
                            }
                        });

                        jQuery("#src_tab1_1595154351 .srcOptionList").change(function(e) {
                            SetSearchOption_src_tab1_1595154351();
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
                            var gridh = jQuery("#tab1_1595154351").getGridParam("height");
                            $(this).attr("lasth", gridh);
                            $("#" + panelid).addClass("grid-panel-full-screen");
                            $(this).addClass("exit-full-screen");
                            var wheight = $(window).height();
                            var wwidth = $(window).width();
                            var offset = jQuery("#pager_tab1_1595154351").height();
                            if (offset <= 0) {
                                offset = 130;
                            } else {
                                offset += 75;
                            }
                            jQuery("#tab1_1595154351").setGridWidth(wwidth);
                            jQuery("#tab1_1595154351").setGridHeight(wheight - offset);

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
                            jQuery("#tab1_1595154351").setGridHeight(lastheight);
                            // requestFullScreen(document.getElementById(panelid));
                            try {
                                jQuery(".grid-body").removeClass('grid-full-screen');
                            } catch (e) {}
                            tab1_1595154351_ResizeGrid();

                        });
                        SetSearchOption_src_tab1_1595154351();
                    });

                    function SetSearchOption_src_tab1_1595154351() {
                        try {
                            UnsetDateGridPicker();
                        } catch (e) {
                            //gcl(e.message);
                        }
                        var stype = jQuery("#src_tab1_1595154351 .srcOptionList option:selected").attr("stype");

                        if (stype == "select") {
                            jQuery("#src_tab1_1595154351 .srcTextValue").hide();
                            var selectOption = jQuery("#src_tab1_1595154351 .srcOptionList option:selected").attr("data");
                            selectOption = jQuery.parseJSON(atob(selectOption));
                            jQuery("#src_tab1_1595154351 .srcSelectValue option").remove();
                            for (var i in selectOption) {
                                jQuery("#src_tab1_1595154351 .srcSelectValue").append("<option value='" + i + "'>" + selectOption[i] + "</option>");
                            }
                            jQuery("#src_tab1_1595154351 .srcSelectValue").show();
                        } else if (stype == "date" || stype == "dateonly" || stype == "time" || stype == "datetime") {
                            jQuery("#src_tab1_1595154351_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595154351_text").addClass("hidden");
                            jQuery("#src_tab1_1595154351_from").removeClass("hidden");
                            jQuery("#src_tab1_1595154351_from").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595154351_from .control-label ").removeClass("col-sm-2").addClass("col-sm-6").html('<span class="hidden-sm">Select</span> Value');
                            jQuery("#src_tab1_1595154351_from .form-group > div.ag-from-container").removeClass("col-sm-8").addClass("col-sm-6");
                            jQuery("#src_tab1_1595154351_from .srcFrom ").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595154351 .srcTextValue").show();
                            jQuery("#src_tab1_1595154351 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else if (stype == "daterange" || stype == "datetimerange" || stype == "timerange") {
                            jQuery("#src_tab1_1595154351_from").removeClass("col-xs-8").addClass("col-xs-4");
                            jQuery("#src_tab1_1595154351_from .control-label ").removeClass("col-sm-6").addClass("col-sm-2").html('From');
                            jQuery("#src_tab1_1595154351_from .form-group > div.ag-from-container").removeClass("col-sm-6").addClass("col-sm-8");
                            jQuery("#src_tab1_1595154351_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595154351_to .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595154351_text").addClass("hidden");
                            jQuery("#src_tab1_1595154351_from").removeClass("hidden");
                            jQuery("#src_tab1_1595154351_to").removeClass("hidden");
                            jQuery("#src_tab1_1595154351 .srcTextValue").show();
                            jQuery("#src_tab1_1595154351 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else {
                            jQuery("#src_tab1_1595154351_from").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595154351_to").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595154351_text").removeClass("hidden");
                            jQuery("#src_tab1_1595154351 .srcTextValue").show();
                            jQuery("#src_tab1_1595154351 .srcSelectValue").hide();
                        }
                        if (jQuery("#autosearch_tab1_1595154351").is(':checked')) {
                            Grid_tab1_1595154351_custom_reload();
                        }

                    }

                    function Grid_tab1_1595154351_download() {
                        var stype = jQuery("#src_tab1_1595154351 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595154351").jqGrid("getGridParam", "postData");
                        data.download_csv = true;
                        data.searchOper = "eq";
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595154351 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595154351_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595154351_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595154351 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595154351 .srcOptionList").val();
                        data._search = true;
                        data.searchString = (typeof(data.searchString) == "undefined") ? "" : data.searchString;
                        data.searchField = jQuery("#src_tab1_1595154351 .srcOptionList").val();
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
                        data.cols = "eyJ0aXRsZSI6IlRpdGxlIiwiY2F0X2lkIjoiQ2F0ZWdvcnkiLCJpc19zdGlja2V5IjoiU3RpY2t5XC9QaW5uZWQiLCJzdGF0dXMiOiJTdGF0dXMiLCJhY3Rpb24iOiJBY3Rpb24ifQ==";
                        data.filename = "download";
                        var durl = "https://demo.appsbd.com/support-system/admin/knowledge-data/knowledge-list.html?" + serialize(data);
                        jQuery("#difrm").attr("src", durl);
                    }

                    function Grid_tab1_1595154351_custom_reload() {
                        var IsMultiSearch = false;
                        var data = jQuery("#tab1_1595154351").jqGrid("getGridParam", "postData");
                        data.first = true;
                        data.download_csv = false;
                        data.isMultiSearch = IsMultiSearch;
                        if (IsMultiSearch) {
                            data.ms = jQuery("#ms_tab1_1595154351").serialize();
                            try {
                                if (window.Base64) {
                                    data.ms = Base64.encode(data.ms);
                                }
                            } catch (e) {
                                app_grid_log(e.message);
                            }
                        }
                        jQuery("#tab1_1595154351").jqGrid("setGridParam", {
                            "postData": data
                        });
                        Grid_tab1_1595154351_reload();
                        sbtnclick_tab1_1595154351 = false;
                        //alert("Test");
                    }

                    function Grid_tab1_1595154351_reset_custom_reload() {
                        jQuery("#ms_tab1_1595154351")[0].reset();
                        Grid_tab1_1595154351_custom_reload();
                    }

                    function Grid_tab1_1595154351_advance_search() {
                        jQuery("#tab1_1595154351").jqGrid('searchGrid');
                        $("body > .ui-widget-overlay").prependTo(".gs-jq-grid ");
                        $("#searchhdfbox_tab1_1595154351").addClass("alert-info");
                        $("#searchmodfbox_tab1_1595154351").addClass("jqgrid-input");
                        $("#searchmodfbox_tab1_1595154351 .ui-jqdialog-title").html('<i class="fa fa-search"></i> Advance Search');
                        $("#searchmodfbox_tab1_1595154351").prependTo(".gs-jq-grid ").css("display", "block");




                    }

                    function Grid_tab1_1595154351_reload() {
                        var stype = jQuery("#src_tab1_1595154351 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595154351").jqGrid("getGridParam", "postData");
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595154351 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595154351_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595154351_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595154351 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595154351 .srcOptionList").val();
                        data._search = true;

                        jQuery("#tab1_1595154351").jqGrid("setGridParam", {
                            "postData": data
                        });
                        jQuery("#tab1_1595154351").trigger("reloadGrid");
                        data.first = false;
                        jQuery("#tab1_1595154351").jqGrid("setGridParam", {
                            "postData": data
                        });

                    }
                    var config_tab1_1595154351 = {
                        "IsCSVDownload": false,
                        "width": "auto",
                        "height": "auto",
                        "url": "https:\/\/demo.appsbd.com\/support-system\/admin\/knowledge-data\/knowledge-list.html",
                        "datatype": "json",
                        "colNames": ["Title", "Category", "Sticky\/Pinned", "Status", "Action"],
                        "afterInsertRow": "",
                        "container": ".grid-body",
                        "multiselect": false,
                        "multisearch": false,
                        "ShowAdvanceSearch": false,
                        "isColumnChoseable": false,
                        "colModel": [{
                            "Title": "Title",
                            "objectName": null,
                            "width": 150,
                            "name": "title",
                            "index": "title",
                            "formater": "Grid_tab1_1595154351_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": true,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": true,
                            "align": "left",
                            "formatoptions": {}
                        }, {
                            "Title": "Category",
                            "objectName": null,
                            "width": 150,
                            "name": "cat_id",
                            "index": "cat_id",
                            "formater": "Grid_tab1_1595154351_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": true,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": null,
                            "viewable": true,
                            "align": "left",
                            "stype": "select",
                            "searchoptions": {
                                "value": {
                                    "0": "All Category",
                                    "2": "Android Basic",
                                    "7": "Customer Support",
                                    "6": "Joomla Theme Setup",
                                    "1": "PHP Basic",
                                    "3": "PHP Setup",
                                    "4": "Sales",
                                    "5": "WordPress Theme Setup"
                                }
                            },
                            "formatoptions": {}
                        }, {
                            "Title": "Sticky\/Pinned",
                            "objectName": null,
                            "width": 50,
                            "name": "is_stickey",
                            "index": "is_stickey",
                            "formater": "Grid_tab1_1595154351_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": true,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": "",
                            "viewable": true,
                            "align": "center",
                            "formatoptions": {}
                        }, {
                            "Title": "Status",
                            "objectName": null,
                            "width": 50,
                            "name": "status",
                            "index": "status",
                            "formater": "Grid_tab1_1595154351_formatter",
                            "sopt": null,
                            "cellattr": "col_cellattr",
                            "sortable": true,
                            "dvalue": "",
                            "dvalue2": "",
                            "ExtraParam": null,
                            "viewable": true,
                            "align": "center",
                            "stype": "select",
                            "searchoptions": {
                                "value": {
                                    "*": "All",
                                    "P": "Published",
                                    "U": "Unpublished"
                                }
                            },
                            "formatoptions": {}
                        }, {
                            "Title": "Action",
                            "objectName": null,
                            "width": 50,
                            "name": "action",
                            "index": "action",
                            "formater": "Grid_tab1_1595154351_formatter",
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
                        "caption": "<\/span><span style=\"float: left;\" class=\"gridtitle left\"> <a onclick=\"Grid_tab1_1595154351_reload()\" class=\"btn btn-xs btn-primary\" ><i class=\"fa fa-refresh\"><\/i> Reload<\/a> <\/span><span class=\"gridtitle text-right \">&nbsp;<a class=\"btn btn-xs btn-info\" href=\"https:\/\/demo.appsbd.com\/support-system\/admin\/knowledge\/add.html\" ><i class=\"fa fa-plus\"><\/i>Add New<\/a> <a onclick=\"Grid_tab1_1595154351_download()\" class=\"btn btn-xs btn-success\" ><i class=\"fa fa-download\"><\/i> Download CSV<\/a> <span data-gridid=\"mc_tab1_1595154351\" class=\"full-screen btn btn-info btn-xs\"><i class=\"fa fa-expand \"><\/i><\/span> ",
                        "rownumbers": true,
                        "pager": "#pager_tab1_1595154351",
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
                        "TotalColumn": 5,
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

                        config_tab1_1595154351.afterInsertRow = eval(config_tab1_1595154351.afterInsertRow);
                        try {
                            for (var i in config_tab1_1595154351.colModel) {
                                try {
                                    config_tab1_1595154351.colModel[i].cellattr = eval(config_tab1_1595154351.colModel[i].cellattr);
                                    try {
                                        if (!config_tab1_1595154351.colModel[i].hidden) {
                                            config_tab1_1595154351.visible_fields[(config_tab1_1595154351.colModel[i].index)] = config_tab1_1595154351.colModel[i].Title;
                                        }
                                    } catch (e) {}
                                } catch (e) {
                                    app_grid_log(e.message);
                                }

                            }
                        } catch (e) {
                            app_grid_log(e.message);
                        }

                        config_tab1_1595154351.loadComplete = function(e) {
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
                            tab1_1595154351_resize_height(e);
                            jQuery("#gview_tab1_1595154351 .ui-jqgrid-bdiv .gridnorecord").hide().remove();
                            if (jQuery("#tab1_1595154351").getGridParam("records") == 0) {
                                jQuery("#gview_tab1_1595154351 .ui-jqgrid-bdiv").append('<div class="gridnorecord" id="gridnorecord">' + jQuery("#tab1_1595154351").getGridParam("emptySetText") + '</div>');
                            }
                            try {
                                app_handle_grid_unauthorize(e, jQuery("#gview_tab1_1595154351 .ui-jqgrid-bdiv > .gridnorecord"));
                            } catch (e) {};
                        };
                        config_tab1_1595154351.ajaxGridOptions = {
                            //contentType: "application/json; charset=utf-8",
                            dataFilter: function(data, dataType) { // preprocess the data
                                try {
                                    if (dataType == "json") {

                                        var data2 = JSON.parse(data);
                                        jQuery.each(data2.rowdata, function(key, value) {
                                            var optstr = "<div >" + ("<div class='col-xs-5 app-property-label'>" + config_tab1_1595154351.visible_fields["title"] + "</div>") + "<div class=' app-property-value col-xs-7 text-left '>" + data2.rowdata[key]["title"] + "</div></div>";
                                            jQuery.each(data2.rowdata[key], function(key2, value2) {
                                                if (key2 == "title") {
                                                    return;
                                                }
                                                try {
                                                    if (typeof config_tab1_1595154351.visible_fields[key2] != "undefined") {
                                                        optstr += "<div >" + (key2 == "action" ? "" : "<div class='col-xs-5 app-property-label'>" + config_tab1_1595154351.visible_fields[key2] + "</div>") + "<div class=' app-property-value col-xs-" + (key2 == "action" ? "12 text-center" : "7 text-left") + " '>" + data2.rowdata[key][key2] + "</div></div>";
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
                        var isFirstLoaded_tab1_1595154351 = false;
                        tab1_1595154351_serialize = function(obj) {
                            var str = [];
                            for (var p in obj)
                                if (obj.hasOwnProperty(p)) {
                                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                }
                            return str.join("&");
                        }
                        config_tab1_1595154351.beforeRequest = function() {
                            var data = jQuery("#tab1_1595154351").jqGrid("getGridParam", "postData");
                            //console.log(data);
                            // myGrid.setGridParam({sortname: ''})
                            if (data.sidx != "") {
                                try {
                                    var th_obj = $("#jqgh_tab1_1595154351_" + data.sidx);
                                    jQuery(".app-sorting").removeClass("app-sorting");
                                    th_obj.addClass("app-sorting");
                                    jQuery(".tab1_1595154351-rm-srt").remove();
                                    var rmicon = jQuery('<i class="tab1_1595154351-rm-srt grid-reset-sort-btn fa fa-times-circle tooltip2" data-tooltip-position="top" title="Remove Sorting"></i>');
                                    rmicon.click(function(e) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                        tab1_1595154351_reset_sorting();
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
                            jQuery("#tab1_1595154351").jqGrid("setGridParam", {
                                "postData": data
                            });
                            return true;
                        };

                        config_tab1_1595154351.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595154351.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595154351.onInitGrid = function() {
                            //This event does not raised.
                            try {
                                jQuery("#jqgh_tab1_1595154351_title ").addClass("fld-sortable").find(" > .s-ico").show();
                                jQuery("#jqgh_tab1_1595154351_cat_id ").addClass("fld-sortable").find(" > .s-ico").show();
                                jQuery("#jqgh_tab1_1595154351_is_stickey ").addClass("fld-sortable").find(" > .s-ico").show();
                                jQuery("#jqgh_tab1_1595154351_status ").addClass("fld-sortable").find(" > .s-ico").show();
                                jQuery("#jqgh_tab1_1595154351_action").addClass("no-hand-css");
                            } catch (e) {}
                        }

                        if (config_tab1_1595154351.width == "auto") {
                            config_tab1_1595154351.width = jQuery(".grid-body").width();
                            if (config_tab1_1595154351.width < minwidth_tab1_1595154351) {
                                config_tab1_1595154351.width = minwidth_tab1_1595154351;
                            }
                            config_tab1_1595154351.width -= 0;
                        }
                        tab1_1595154351_init_grid();
                    });

                    function check_all_visible_tab1_1595154351() {
                        return;
                        try {
                            var cols_hidden = localStorage.getItem("ag_c23e6c94");
                            if (cols_hidden) {
                                cols_hidden = JSON.parse(cols_hidden);
                                if (typeof cols_hidden == "object") {
                                    config_tab1_1595154351.custom_hidden_fields = cols_hidden;
                                }
                            } else {
                                localStorage.setItem("ag_c23e6c94", JSON.stringify(config_tab1_1595154351.custom_hidden_fields));
                            }
                        } catch (e) {

                        }
                        var models = config_tab1_1595154351.colModel;
                        var $searchOnly = [];
                        for (var i in models) {
                            var isChecked = check_visible_tab1_1595154351(models[i].index);
                            if ($searchOnly.indexOf(models[i].index) > -1) {
                                continue;
                            }
                            if (models[i].Title) {
                                append_into_checklist_tab1_1595154351(models[i].index, models[i].Title, isChecked);
                                if (isChecked) {
                                    jQuery("#tab1_1595154351").showCol(models[i].index);
                                }
                            }
                        }

                    }

                    function check_visible_tab1_1595154351(index) {
                        var custom_visible = config_tab1_1595154351.custom_hidden_fields;
                        if (custom_visible.indexOf(index) > -1) {
                            return false;
                        }
                        return true;
                    }

                    function show_coll_tab1_1595154351(index) {
                        if (config_tab1_1595154351.custom_hidden_fields.indexOf(index) > -1) {
                            jQuery("#tab1_1595154351").hideCol(index);
                            return;
                        }
                        jQuery("#tab1_1595154351").showCol(index);
                    }

                    function set_unset_key_tab1_1595154351(index, isSet) {

                        if (isSet) {
                            if (config_tab1_1595154351.custom_hidden_fields.indexOf(index) > -1) {
                                return;
                            }
                            config_tab1_1595154351.custom_hidden_fields.push(index);
                        } else {
                            var aind = config_tab1_1595154351.custom_hidden_fields.indexOf(index)
                            if (aind !== -1) {
                                config_tab1_1595154351.custom_hidden_fields.splice(aind, 1);
                            }
                        }


                    }

                    function append_into_checklist_tab1_1595154351(index, title, isChecked) {
                        jQuery("#mc_tab1_1595154351 .ag_column-choose > .ag-column-container").append('<label class="cl-chose-input"> <input data-cl-key="' + index + '" type="checkbox" ' + (isChecked ? "checked" : "") + '> ' + title + '</label>');

                    }

                    function tab1_1595154351_init_grid() {
                        if (is_init_tab1_1595154351) {
                            return;
                        }
                        is_init_tab1_1595154351 = true;
                        jQuery("#tab1_1595154351").jqGrid(config_tab1_1595154351);
                        check_all_visible_tab1_1595154351();
                        jQuery("#tab1_1595154351").jqGrid('navGrid', '#pager_tab1_1595154351', {
                            edit: false,
                            add: false,
                            del: false,
                            search: false,
                            reloadtext: "Reload",
                            searchtext: " Search&nbsp;"
                        }, {}, {}, {}, {
                            sopt: ['cn', 'bw', 'eq', 'ne', 'lt', 'gt', 'ew']
                        });
                        $("#pager_tab1_1595154351").after(jQuery("#alertmod_tab1_1595154351"));


                        jQuery(window).bind('resize', function() {
                            tab1_1595154351_ResizeGrid();
                            setTimeout(tab1_1595154351_ResizeGrid, 500);
                        }).trigger('resize');
                        try {
                            jQuery('body').resize(function() {
                                tab1_1595154351_ResizeGrid();
                                setTimeout(tab1_1595154351_ResizeGrid, 500);
                            });
                        } catch (e) {}
                        try {
                            AddOnPageResize(tab1_1595154351_ResizeGrid);
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
                            applyClassesToHeaders(jQuery("#tab1_1595154351"));
                        } catch (e) {}




                    }

                    function tab1_1595154351_resize_height(e) {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        try {
                            if (config_tab1_1595154351.height == "auto") {
                                return;
                            }
                            var data = config_tab1_1595154351.auto_height_records;
                            if (e.records < data) {
                                jQuery("#tab1_1595154351").setGridHeight('auto');
                            } else {
                                jQuery("#tab1_1595154351").setGridHeight(config_tab1_1595154351.height);
                            }
                            //app_grid_log(config_tab1_1595154351.height);
                        } catch (e) {}
                    }

                    function tab1_1595154351_reset_sorting() {

                        var myGrid = jQuery("#tab1_1595154351");
                        $("span.s-ico", myGrid[0].grid.hDiv).hide(); // hide sort icons
                        myGrid.setGridParam({
                            sortname: ''
                        }).trigger('reloadGrid');

                    }

                    function tab1_1595154351_ResizeGrid() {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        var c_minwidth_tab1_1595154351 = jQuery(".grid-body").width();
                        if (c_minwidth_tab1_1595154351 <= minwidth_tab1_1595154351) {
                            c_minwidth_tab1_1595154351 = minwidth_tab1_1595154351;
                        }
                        c_minwidth_tab1_1595154351 -= 5;
                        jQuery("#tab1_1595154351").setGridWidth(c_minwidth_tab1_1595154351);
                        var windowWidth = jQuery(window).width();


                        if (windowWidth < 768) {
                            for (var key in config_tab1_1595154351.visible_fields) {
                                //console.log("title");
                                if (key != "title") {
                                    jQuery("#tab1_1595154351").hideCol(key);
                                }
                            }
                        } else {
                            for (var kindex in config_tab1_1595154351.visible_fields) {
                                show_coll_tab1_1595154351(kindex);
                            }
                        }
                        if (windowWidth < 991) {

                        } else {
                            for (var kindex in config_tab1_1595154351.visible_fields) {
                                show_coll_tab1_1595154351(kindex);
                            }

                        }


                    }
                </script>
                <div id="mc_tab1_1595154351" class="gs-jq-grid " data-unique-id="ag_c23e6c94">
                    <div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_tab1_1595154351" dir="ltr" style="width: 1618px;">
                        <div class="ui-widget-overlay jqgrid-overlay" id="lui_tab1_1595154351"></div>
                        <div class="loading ui-state-default ui-state-active" id="load_tab1_1595154351" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Loading...</div>
                        <div class="ui-jqgrid-view" id="gview_tab1_1595154351" style="width: 1618px;">
                            <div class="ui-jqgrid-titlebar ui-jqgrid-caption ui-widget-header ui-corner-top ui-helper-clearfix"><a role="link" class="ui-jqgrid-titlebar-close ui-corner-all HeaderButton" style="right: 0px;"><span class="ui-icon ui-icon-circle-triangle-n"></span></a><span class="ui-jqgrid-title"></span><span style="float: left;" class="gridtitle left"> <a onclick="Grid_tab1_1595154351_reload()" class="btn btn-xs btn-primary added-ripples"><i class="fa fa-refresh"></i> Reload</a> </span><span class="gridtitle text-right ">&nbsp;<a class="btn btn-xs btn-info added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/add.html"><i class="fa fa-plus"></i>Add New</a> <a onclick="Grid_tab1_1595154351_download()" class="btn btn-xs btn-success added-ripples"><i class="fa fa-download"></i> Download CSV</a> <span data-gridid="mc_tab1_1595154351" class="full-screen btn btn-info btn-xs added-ripples"><i class="fa fa-expand "></i></span> </span></div>
                            <div class="ui-state-default ui-jqgrid-hdiv" style="width: 1618px;">
                                <div class="ui-jqgrid-hbox">
                                    <table class="ui-jqgrid-htable" style="width: 1618px;" role="grid" aria-labelledby="gbox_tab1_1595154351" cellspacing="0" cellpadding="0" border="0">
                                        <thead>
                                            <tr class="ui-jqgrid-labels" role="rowheader">
                                                <th id="tab1_1595154351_rn" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 25px;">
                                                    <div id="jqgh_tab1_1595154351_rn"><span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154351_title" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 521px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154351_title" class="ui-jqgrid-sortable fld-sortable">Title<span class="s-ico"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154351_cat_id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 521px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154351_cat_id" class="ui-jqgrid-sortable fld-sortable">Category<span class="s-ico"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154351_is_stickey" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 174px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154351_is_stickey" class="ui-jqgrid-sortable fld-sortable">Sticky/Pinned<span class="s-ico"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154351_status" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 174px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154351_status" class="ui-jqgrid-sortable fld-sortable">Status<span class="s-ico"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154351_action" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 173px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154351_action" class="ui-jqgrid-sortable no-hand-css">Action<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="jqgfirstrow" role="row" style="height:auto">
                                                <td role="gridcell" style="height:0px;width:25px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 521px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 521px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 174px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 174px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 173px;"></td>
                                            </tr>
                                            <tr role="row" id="1" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;width: 25px;" title="1" aria-describedby="tab1_1595154351_rn">1</td>
                                                <td role="gridcell" style="text-align:left;" title="How Do You Find Good PHP Programmers?TitleHow Do You Find Good PHP Programmers?CategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">How Do You Find Good PHP Programmers?</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">How Do You Find Good PHP Programmers?</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/1.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/1.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/1.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/1.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/1.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/1.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/1.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/1.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="2" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="2" aria-describedby="tab1_1595154351_rn">2</td>
                                                <td role="gridcell" style="text-align:left;" title="Where To Start To Be A PHP?TitleWhere To Start To Be A PHP?CategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Where To Start To Be A PHP?</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Where To Start To Be A PHP?</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/2.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/2.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/2.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/2.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/2.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/2.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/2.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/2.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="3" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="3" aria-describedby="tab1_1595154351_rn">3</td>
                                                <td role="gridcell" style="text-align:left;" title="Php Forms CreatorTitlePhp Forms CreatorCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Php Forms Creator</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Php Forms Creator</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/3.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/3.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/3.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/3.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/3.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/3.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/3.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/3.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="4" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="4" aria-describedby="tab1_1595154351_rn">4</td>
                                                <td role="gridcell" style="text-align:left;" title="Php ServiceTitlePhp ServiceCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Php Service</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Php Service</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/4.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/4.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/4.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/4.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/4.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/4.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/4.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/4.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="5" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="5" aria-describedby="tab1_1595154351_rn">5</td>
                                                <td role="gridcell" style="text-align:left;" title="Why Hire Dedicared PHP Programmer?TitleWhy Hire Dedicared PHP Programmer?CategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Why Hire Dedicared PHP Programmer?</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Why Hire Dedicared PHP Programmer?</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/5.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/5.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/5.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/5.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/5.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/5.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/5.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/5.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="6" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr ui-state-hover">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="6" aria-describedby="tab1_1595154351_rn">6</td>
                                                <td role="gridcell" style="text-align:left;" title="Another View, Why Hire Dedicared Php Programmer?TitleAnother View, Why Hire Dedicared Php Programmer?CategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Another View, Why Hire Dedicared Php Programmer?</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Another View, Why Hire Dedicared Php Programmer?</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/6.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/6.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/6.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/6.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/6.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/6.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/6.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/6.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="7" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="7" aria-describedby="tab1_1595154351_rn">7</td>
                                                <td role="gridcell" style="text-align:left;" title="Android TabletsTitleAndroid TabletsCategoryAndroid BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Android Tablets</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Android Tablets</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Android Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/16.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/16.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/16.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/16.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="Android Basic" aria-describedby="tab1_1595154351_cat_id">Android Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/16.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/16.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/16.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/16.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="8" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="8" aria-describedby="tab1_1595154351_rn">8</td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Application DevelopmentTitlePHP Application DevelopmentCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">PHP Application Development</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Application Development</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/7.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/7.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/7.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/7.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/7.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/7.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/7.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/7.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="9" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="9" aria-describedby="tab1_1595154351_rn">9</td>
                                                <td role="gridcell" style="text-align:left;" title="How To Hire Php Developer For Php DevelopmentTitleHow To Hire Php Developer For Php DevelopmentCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">How To Hire Php Developer For Php Development</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">How To Hire Php Developer For Php Development</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/8.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/8.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/8.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/8.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/8.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/8.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/8.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/8.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="10" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="10" aria-describedby="tab1_1595154351_rn">10</td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Website DevelopmentTitlePHP Website DevelopmentCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">PHP Website Development</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Website Development</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/9.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/9.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/9.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/9.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/9.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/9.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/9.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/9.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="11" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="11" aria-describedby="tab1_1595154351_rn">11</td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Website DevelopmentTitlePHP Website DevelopmentCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">PHP Website Development</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Website Development</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/10.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/10.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/10.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/10.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/10.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/10.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/10.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/10.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="12" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="12" aria-describedby="tab1_1595154351_rn">12</td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Ecommerce SolutionsTitlePHP Ecommerce SolutionsCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">PHP Ecommerce Solutions</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Ecommerce Solutions</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/11.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/11.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/11.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/11.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/11.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/11.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/11.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/11.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="13" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="13" aria-describedby="tab1_1595154351_rn">13</td>
                                                <td role="gridcell" style="text-align:left;" title="Css &amp; Php ServicesTitleCss &amp; Php ServicesCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Css &amp; Php Services</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Css &amp; Php Services</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/12.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/12.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/12.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/12.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/12.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/12.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/12.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/12.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="14" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="14" aria-describedby="tab1_1595154351_rn">14</td>
                                                <td role="gridcell" style="text-align:left;" title="Php Application DevelopmentTitlePhp Application DevelopmentCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Php Application Development</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Php Application Development</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/13.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/13.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/13.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/13.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/13.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/13.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/13.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/13.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="15" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="15" aria-describedby="tab1_1595154351_rn">15</td>
                                                <td role="gridcell" style="text-align:left;" title="CakePHP Web DevelopmentTitleCakePHP Web DevelopmentCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">CakePHP Web Development</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">CakePHP Web Development</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/14.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/14.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/14.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/14.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/14.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/14.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/14.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/14.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="16" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="16" aria-describedby="tab1_1595154351_rn">16</td>
                                                <td role="gridcell" style="text-align:left;" title="Top Android AppsTitleTop Android AppsCategoryAndroid BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Top Android Apps</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Top Android Apps</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Android Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/30.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/30.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/30.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/30.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="Android Basic" aria-describedby="tab1_1595154351_cat_id">Android Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/30.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/30.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/30.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/30.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="17" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="17" aria-describedby="tab1_1595154351_rn">17</td>
                                                <td role="gridcell" style="text-align:left;" title="Charts For PHP PagesTitleCharts For PHP PagesCategoryPHP BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Charts For PHP Pages</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Charts For PHP Pages</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">PHP Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/15.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/15.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/15.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/15.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="PHP Basic" aria-describedby="tab1_1595154351_cat_id">PHP Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/15.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/15.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/15.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/15.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="18" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="18" aria-describedby="tab1_1595154351_rn">18</td>
                                                <td role="gridcell" style="text-align:left;" title="Android Voice Actions BasicsTitleAndroid Voice Actions BasicsCategoryAndroid BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Android Voice Actions Basics</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Android Voice Actions Basics</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Android Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/17.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/17.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/17.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/17.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="Android Basic" aria-describedby="tab1_1595154351_cat_id">Android Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/17.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/17.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/17.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/17.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="19" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="19" aria-describedby="tab1_1595154351_rn">19</td>
                                                <td role="gridcell" style="text-align:left;" title="Android Developer For HiringTitleAndroid Developer For HiringCategoryAndroid BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Android Developer For Hiring</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Android Developer For Hiring</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Android Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/18.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/18.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/18.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/18.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="Android Basic" aria-describedby="tab1_1595154351_cat_id">Android Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/18.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/18.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/18.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/18.html">Delete</a></td>
                                            </tr>
                                            <tr role="row" id="20" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="20" aria-describedby="tab1_1595154351_rn">20</td>
                                                <td role="gridcell" style="text-align:left;" title="Popular Android Free Phone AppsTitlePopular Android Free Phone AppsCategoryAndroid BasicSticky/Pinned  NoStatus  PublishedEdit Delete" aria-describedby="tab1_1595154351_title">
                                                    <div class="hidden-xs">Popular Android Free Phone Apps</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Popular Android Free Phone Apps</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Category</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Android Basic</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Sticky/Pinned</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/19.html"><span class="text-red"> No</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/19.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/19.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/19.html">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:left;" title="Android Basic" aria-describedby="tab1_1595154351_cat_id">Android Basic</td>
                                                <td role="gridcell" style="text-align:center;" title="  No" aria-describedby="tab1_1595154351_is_stickey"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article pinned status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/is-stickey-change/19.html"><span class="text-red"> No</span></a></td>
                                                <td role="gridcell" style="text-align:center;" title="  Published" aria-describedby="tab1_1595154351_status"> <a class="ConfirmAjaxWR" data-on-complete="confirm_wr_change" data-msg="Are you sure to change article status?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/status-change/19.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Published</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595154351_action" title=" "><a class="btn btn-info btn-xs added-ripples" href="https://demo.appsbd.com/support-system/admin/knowledge/edit/19.html">Edit</a> <a class="ConfirmAjaxWR btn btn-danger btn-xs added-ripples" data-msg="Are you sure to delete?" href="https://demo.appsbd.com/support-system/admin/knowledge-confirm/knowledge-delete/19.html">Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="ui-jqgrid-resize-mark" id="rs_mtab1_1595154351">&nbsp;</div>
                        <div id="pager_tab1_1595154351" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 1618px;">
                            <div id="pg_pager_tab1_1595154351" class="ui-pager-control" role="group">
                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;" role="row">
                                    <tbody>
                                        <tr>
                                            <td id="pager_tab1_1595154351_left" align="left">
                                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table navtable" style="float:left;table-layout:auto;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="ui-pg-button ui-corner-all" title="Reload Grid" id="refresh_tab1_1595154351">
                                                                <div class="ui-pg-div"><span class="ui-icon ui-icon-refresh"></span></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td id="pager_tab1_1595154351_center" align="center" style="white-space: pre; width: 202px;">
                                                <table cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;" class="ui-pg-table">
                                                    <tbody>
                                                        <tr>
                                                            <td id="first_pager_tab1_1595154351" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-first"></span></td>
                                                            <td id="prev_pager_tab1_1595154351" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-prev"></span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td dir="ltr">Page <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox"> of <span id="sp_1_pager_tab1_1595154351">5</span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td id="next_pager_tab1_1595154351" class="ui-pg-button ui-corner-all"><span class="ui-icon ui-icon-seek-next"></span></td>
                                                            <td id="last_pager_tab1_1595154351" class="ui-pg-button ui-corner-all"><span class="ui-icon ui-icon-seek-end"></span></td>
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
                                            <td id="pager_tab1_1595154351_right" align="right">
                                                <div dir="ltr" style="text-align:right" class="ui-paging-info">View 1 - 20 of 88</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="ui-widget ui-widget-content ui-corner-all ui-jqdialog" id="alertmod_tab1_1595154351" dir="ltr" tabindex="-1" role="dialog" aria-labelledby="alerthd_tab1_1595154351" aria-hidden="true" style="width: 200px; height: auto; z-index: 950; overflow: hidden; top: 328.5px; left: 860px;">
                            <div class="ui-jqdialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" id="alerthd_tab1_1595154351" style="cursor: move;"><span class="ui-jqdialog-title" style="float: left;">Warning</span><a class="ui-jqdialog-titlebar-close ui-corner-all" style="right: 0.3em;"><span class="ui-icon ui-icon-closethick"></span></a></div>
                            <div class="ui-jqdialog-content ui-widget-content" id="alertcnt_tab1_1595154351">
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
                AddOnCloseMethod(Grid_tab1_1595154351_reload);
            });
        </script>
    </section>
</div>
@endsection
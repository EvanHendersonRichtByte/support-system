@extends('layout.admin.user_settings.user_settings_master')

@section('tab-title')
My Message
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            <i class="fa fa-envelope "></i>
            My Message </h1>
        <ol class="breadcrumb">
            <li>
                <a href="https://demo.appsbd.com/support-system/"><i class=""></i> Home</a>
            </li>
            <li>
                My Message </li>
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
                <script type="text/javascript">
                    var is_init_tab1_1595154948 = false;
                    var sbtnclick_tab1_1595154948 = false;
                    var minwidth_tab1_1595154948 = 200;

                    function app_grid_log(e) {}

                    function col_cellattr(ts, rowId, tv, rawObject, cm, rdata) {
                        if (rawObject.name == "action" || rawObject.name == "action2") {
                            return ' title=" "';
                        }
                    }
                    jQuery(function($) {

                        var srcDivId = "#src_tab1_1595154948";
                        jQuery("#src_tab1_1595154948 .srcSelectValue").change(function() {
                            if (jQuery("#autosearch_tab1_1595154948").is(':checked')) {
                                Grid_tab1_1595154948_custom_reload();
                            }
                        });
                        var timeoutHnd_tab1_1595154948 = null;
                        jQuery("#src_tab1_1595154948 .srcTextValue").keydown(function(e) {
                            var s = jQuery(this).val();
                            var code = (e.keyCode ? e.keyCode : e.which);
                            if ((s.length == 1 && code == 8) || jQuery("#autosearch_tab1_1595154948").is(':checked')) {
                                if (timeoutHnd_tab1_1595154948) clearTimeout(timeoutHnd_tab1_1595154948);
                                timeoutHnd_tab1_1595154948 = setTimeout(Grid_tab1_1595154948_reload, 500);
                            } else if (code == 13) {
                                Grid_tab1_1595154948_custom_reload();
                            }
                        });


                        jQuery("#autosearch_tab1_1595154948").click(function() {
                            if (jQuery("#autosearch_tab1_1595154948").is(':checked')) {
                                jQuery("#src_tab1_1595154948 .srcButton").hide();
                                Grid_tab1_1595154948_reload();
                            } else {
                                jQuery("#src_tab1_1595154948 .srcButton").show();
                            }
                        });

                        jQuery("#src_tab1_1595154948 .srcOptionList").change(function(e) {
                            SetSearchOption_src_tab1_1595154948();
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
                            var gridh = jQuery("#tab1_1595154948").getGridParam("height");
                            $(this).attr("lasth", gridh);
                            $("#" + panelid).addClass("grid-panel-full-screen");
                            $(this).addClass("exit-full-screen");
                            var wheight = $(window).height();
                            var wwidth = $(window).width();
                            var offset = jQuery("#pager_tab1_1595154948").height();
                            if (offset <= 0) {
                                offset = 130;
                            } else {
                                offset += 75;
                            }
                            jQuery("#tab1_1595154948").setGridWidth(wwidth);
                            jQuery("#tab1_1595154948").setGridHeight(wheight - offset);

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
                            jQuery("#tab1_1595154948").setGridHeight(lastheight);
                            // requestFullScreen(document.getElementById(panelid));
                            try {
                                jQuery(".grid-body").removeClass('grid-full-screen');
                            } catch (e) {}
                            tab1_1595154948_ResizeGrid();

                        });
                    });

                    function SetSearchOption_src_tab1_1595154948() {
                        try {
                            UnsetDateGridPicker();
                        } catch (e) {
                            //gcl(e.message);
                        }
                        var stype = jQuery("#src_tab1_1595154948 .srcOptionList option:selected").attr("stype");

                        if (stype == "select") {
                            jQuery("#src_tab1_1595154948 .srcTextValue").hide();
                            var selectOption = jQuery("#src_tab1_1595154948 .srcOptionList option:selected").attr("data");
                            selectOption = jQuery.parseJSON(atob(selectOption));
                            jQuery("#src_tab1_1595154948 .srcSelectValue option").remove();
                            for (var i in selectOption) {
                                jQuery("#src_tab1_1595154948 .srcSelectValue").append("<option value='" + i + "'>" + selectOption[i] + "</option>");
                            }
                            jQuery("#src_tab1_1595154948 .srcSelectValue").show();
                        } else if (stype == "date" || stype == "dateonly" || stype == "time" || stype == "datetime") {
                            jQuery("#src_tab1_1595154948_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595154948_text").addClass("hidden");
                            jQuery("#src_tab1_1595154948_from").removeClass("hidden");
                            jQuery("#src_tab1_1595154948_from").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595154948_from .control-label ").removeClass("col-sm-2").addClass("col-sm-6").html('<span class="hidden-sm">Select</span> Value');
                            jQuery("#src_tab1_1595154948_from .form-group > div.ag-from-container").removeClass("col-sm-8").addClass("col-sm-6");
                            jQuery("#src_tab1_1595154948_from .srcFrom ").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595154948 .srcTextValue").show();
                            jQuery("#src_tab1_1595154948 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else if (stype == "daterange" || stype == "datetimerange" || stype == "timerange") {
                            jQuery("#src_tab1_1595154948_from").removeClass("col-xs-8").addClass("col-xs-4");
                            jQuery("#src_tab1_1595154948_from .control-label ").removeClass("col-sm-6").addClass("col-sm-2").html('From');
                            jQuery("#src_tab1_1595154948_from .form-group > div.ag-from-container").removeClass("col-sm-6").addClass("col-sm-8");
                            jQuery("#src_tab1_1595154948_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595154948_to .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595154948_text").addClass("hidden");
                            jQuery("#src_tab1_1595154948_from").removeClass("hidden");
                            jQuery("#src_tab1_1595154948_to").removeClass("hidden");
                            jQuery("#src_tab1_1595154948 .srcTextValue").show();
                            jQuery("#src_tab1_1595154948 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else {
                            jQuery("#src_tab1_1595154948_from").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595154948_to").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595154948_text").removeClass("hidden");
                            jQuery("#src_tab1_1595154948 .srcTextValue").show();
                            jQuery("#src_tab1_1595154948 .srcSelectValue").hide();
                        }
                        if (jQuery("#autosearch_tab1_1595154948").is(':checked')) {
                            Grid_tab1_1595154948_custom_reload();
                        }

                    }

                    function Grid_tab1_1595154948_download() {
                        var stype = jQuery("#src_tab1_1595154948 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595154948").jqGrid("getGridParam", "postData");
                        data.download_csv = true;
                        data.searchOper = "eq";
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595154948 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595154948_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595154948_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595154948 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595154948 .srcOptionList").val();
                        data._search = true;
                        data.searchString = (typeof(data.searchString) == "undefined") ? "" : data.searchString;
                        data.searchField = jQuery("#src_tab1_1595154948 .srcOptionList").val();
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
                        data.cols = "eyJmcm9tX3VzZXIiOiJGcm9tIiwibGFzdF9yZXBsaWVkIjoiTGFzdCBSZXBsaWVkIiwiZW50cnlfdGltZSI6IlRpbWUiLCJzdWJqZWN0IjoiU3ViamVjdCIsImFjdGlvbiI6IkFjdGlvbiJ9";
                        data.filename = "download";
                        var durl = "https://demo.appsbd.com/support-system/admin/admin-message-data/admin-message-list.html?" + serialize(data);
                        jQuery("#difrm").attr("src", durl);
                    }

                    function Grid_tab1_1595154948_custom_reload() {
                        var IsMultiSearch = false;
                        var data = jQuery("#tab1_1595154948").jqGrid("getGridParam", "postData");
                        data.first = true;
                        data.download_csv = false;
                        data.isMultiSearch = IsMultiSearch;
                        if (IsMultiSearch) {
                            data.ms = jQuery("#ms_tab1_1595154948").serialize();
                            try {
                                if (window.Base64) {
                                    data.ms = Base64.encode(data.ms);
                                }
                            } catch (e) {
                                app_grid_log(e.message);
                            }
                        }
                        jQuery("#tab1_1595154948").jqGrid("setGridParam", {
                            "postData": data
                        });
                        Grid_tab1_1595154948_reload();
                        sbtnclick_tab1_1595154948 = false;
                        //alert("Test");
                    }

                    function Grid_tab1_1595154948_reset_custom_reload() {
                        jQuery("#ms_tab1_1595154948")[0].reset();
                        Grid_tab1_1595154948_custom_reload();
                    }

                    function Grid_tab1_1595154948_advance_search() {
                        jQuery("#tab1_1595154948").jqGrid('searchGrid');
                        $("body > .ui-widget-overlay").prependTo(".gs-jq-grid ");
                        $("#searchhdfbox_tab1_1595154948").addClass("alert-info");
                        $("#searchmodfbox_tab1_1595154948").addClass("jqgrid-input");
                        $("#searchmodfbox_tab1_1595154948 .ui-jqdialog-title").html('<i class="fa fa-search"></i> Advance Search');
                        $("#searchmodfbox_tab1_1595154948").prependTo(".gs-jq-grid ").css("display", "block");




                    }

                    function Grid_tab1_1595154948_reload() {
                        var stype = jQuery("#src_tab1_1595154948 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595154948").jqGrid("getGridParam", "postData");
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595154948 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595154948_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595154948_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595154948 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595154948 .srcOptionList").val();
                        data._search = true;

                        jQuery("#tab1_1595154948").jqGrid("setGridParam", {
                            "postData": data
                        });
                        jQuery("#tab1_1595154948").trigger("reloadGrid");
                        data.first = false;
                        jQuery("#tab1_1595154948").jqGrid("setGridParam", {
                            "postData": data
                        });

                    }
                    var config_tab1_1595154948 = {
                        "IsCSVDownload": false,
                        "width": "auto",
                        "height": "auto",
                        "url": "https:\/\/demo.appsbd.com\/support-system\/admin\/admin-message-data\/admin-message-list.html",
                        "datatype": "json",
                        "colNames": ["From", "Last Replied", "Time", "Subject", "Action"],
                        "afterInsertRow": "",
                        "container": ".grid-body",
                        "multiselect": false,
                        "multisearch": false,
                        "ShowAdvanceSearch": false,
                        "isColumnChoseable": false,
                        "colModel": [{
                            "Title": "From",
                            "objectName": null,
                            "width": 100,
                            "name": "from_user",
                            "index": "from_user",
                            "formater": "Grid_tab1_1595154948_formatter",
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
                            "Title": "Last Replied",
                            "objectName": null,
                            "width": 100,
                            "name": "last_replied",
                            "index": "last_replied",
                            "formater": "Grid_tab1_1595154948_formatter",
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
                            "Title": "Time",
                            "objectName": null,
                            "width": 100,
                            "name": "entry_time",
                            "index": "entry_time",
                            "formater": "Grid_tab1_1595154948_formatter",
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
                            "Title": "Subject",
                            "objectName": null,
                            "width": 100,
                            "name": "subject",
                            "index": "subject",
                            "formater": "Grid_tab1_1595154948_formatter",
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
                            "formater": "Grid_tab1_1595154948_formatter",
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
                        "caption": "<\/span><span style=\"float: left;\" class=\"gridtitle left\"> <a onclick=\"Grid_tab1_1595154948_reload()\" class=\"btn btn-xs btn-primary\" ><i class=\"fa fa-refresh\"><\/i> Reload<\/a> <\/span><span class=\"gridtitle text-right \">&nbsp;<a onclick=\"Grid_tab1_1595154948_download()\" class=\"btn btn-xs btn-success\" ><i class=\"fa fa-download\"><\/i> Download CSV<\/a> <span data-gridid=\"mc_tab1_1595154948\" class=\"full-screen btn btn-info btn-xs\"><i class=\"fa fa-expand \"><\/i><\/span> ",
                        "rownumbers": true,
                        "pager": "#pager_tab1_1595154948",
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
                        "CustomSearchOnTopGrid": false,
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

                        config_tab1_1595154948.afterInsertRow = eval(config_tab1_1595154948.afterInsertRow);
                        try {
                            for (var i in config_tab1_1595154948.colModel) {
                                try {
                                    config_tab1_1595154948.colModel[i].cellattr = eval(config_tab1_1595154948.colModel[i].cellattr);
                                    try {
                                        if (!config_tab1_1595154948.colModel[i].hidden) {
                                            config_tab1_1595154948.visible_fields[(config_tab1_1595154948.colModel[i].index)] = config_tab1_1595154948.colModel[i].Title;
                                        }
                                    } catch (e) {}
                                } catch (e) {
                                    app_grid_log(e.message);
                                }

                            }
                        } catch (e) {
                            app_grid_log(e.message);
                        }

                        config_tab1_1595154948.loadComplete = function(e) {
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
                            tab1_1595154948_resize_height(e);
                            jQuery("#gview_tab1_1595154948 .ui-jqgrid-bdiv .gridnorecord").hide().remove();
                            if (jQuery("#tab1_1595154948").getGridParam("records") == 0) {
                                jQuery("#gview_tab1_1595154948 .ui-jqgrid-bdiv").append('<div class="gridnorecord" id="gridnorecord">' + jQuery("#tab1_1595154948").getGridParam("emptySetText") + '</div>');
                            }
                            try {
                                app_handle_grid_unauthorize(e, jQuery("#gview_tab1_1595154948 .ui-jqgrid-bdiv > .gridnorecord"));
                            } catch (e) {};
                        };
                        config_tab1_1595154948.ajaxGridOptions = {
                            //contentType: "application/json; charset=utf-8",
                            dataFilter: function(data, dataType) { // preprocess the data
                                try {
                                    if (dataType == "json") {

                                        var data2 = JSON.parse(data);
                                        jQuery.each(data2.rowdata, function(key, value) {
                                            var optstr = "<div >" + ("<div class='col-xs-5 app-property-label'>" + config_tab1_1595154948.visible_fields["from_user"] + "</div>") + "<div class=' app-property-value col-xs-7 text-left '>" + data2.rowdata[key]["from_user"] + "</div></div>";
                                            jQuery.each(data2.rowdata[key], function(key2, value2) {
                                                if (key2 == "from_user") {
                                                    return;
                                                }
                                                try {
                                                    if (typeof config_tab1_1595154948.visible_fields[key2] != "undefined") {
                                                        optstr += "<div >" + (key2 == "action" ? "" : "<div class='col-xs-5 app-property-label'>" + config_tab1_1595154948.visible_fields[key2] + "</div>") + "<div class=' app-property-value col-xs-" + (key2 == "action" ? "12 text-center" : "7 text-left") + " '>" + data2.rowdata[key][key2] + "</div></div>";
                                                    }
                                                } catch (e) {}
                                            });
                                            data2.rowdata[key]["from_user"] = "<div class='hidden-xs'>" + data2.rowdata[key]["from_user"] + "</div><div class='visible-xs app-grid-property-row' style='text-align:left;'>" + optstr + "</div>";
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
                        var isFirstLoaded_tab1_1595154948 = false;
                        tab1_1595154948_serialize = function(obj) {
                            var str = [];
                            for (var p in obj)
                                if (obj.hasOwnProperty(p)) {
                                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                }
                            return str.join("&");
                        }
                        config_tab1_1595154948.beforeRequest = function() {
                            var data = jQuery("#tab1_1595154948").jqGrid("getGridParam", "postData");
                            //console.log(data);
                            // myGrid.setGridParam({sortname: ''})
                            if (data.sidx != "") {
                                try {
                                    var th_obj = $("#jqgh_tab1_1595154948_" + data.sidx);
                                    jQuery(".app-sorting").removeClass("app-sorting");
                                    th_obj.addClass("app-sorting");
                                    jQuery(".tab1_1595154948-rm-srt").remove();
                                    var rmicon = jQuery('<i class="tab1_1595154948-rm-srt grid-reset-sort-btn fa fa-times-circle tooltip2" data-tooltip-position="top" title="Remove Sorting"></i>');
                                    rmicon.click(function(e) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                        tab1_1595154948_reset_sorting();
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
                            jQuery("#tab1_1595154948").jqGrid("setGridParam", {
                                "postData": data
                            });
                            return true;
                        };

                        config_tab1_1595154948.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595154948.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595154948.onInitGrid = function() {
                            //This event does not raised.
                            try {
                                jQuery("#jqgh_tab1_1595154948_from_user").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595154948_last_replied").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595154948_entry_time").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595154948_subject").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595154948_action").addClass("no-hand-css");
                            } catch (e) {}
                        }

                        if (config_tab1_1595154948.width == "auto") {
                            config_tab1_1595154948.width = jQuery(".grid-body").width();
                            if (config_tab1_1595154948.width < minwidth_tab1_1595154948) {
                                config_tab1_1595154948.width = minwidth_tab1_1595154948;
                            }
                            config_tab1_1595154948.width -= 0;
                        }
                        tab1_1595154948_init_grid();
                    });

                    function check_all_visible_tab1_1595154948() {
                        return;
                        try {
                            var cols_hidden = localStorage.getItem("ag_7caf6a63");
                            if (cols_hidden) {
                                cols_hidden = JSON.parse(cols_hidden);
                                if (typeof cols_hidden == "object") {
                                    config_tab1_1595154948.custom_hidden_fields = cols_hidden;
                                }
                            } else {
                                localStorage.setItem("ag_7caf6a63", JSON.stringify(config_tab1_1595154948.custom_hidden_fields));
                            }
                        } catch (e) {

                        }
                        var models = config_tab1_1595154948.colModel;
                        var $searchOnly = [];
                        for (var i in models) {
                            var isChecked = check_visible_tab1_1595154948(models[i].index);
                            if ($searchOnly.indexOf(models[i].index) > -1) {
                                continue;
                            }
                            if (models[i].Title) {
                                append_into_checklist_tab1_1595154948(models[i].index, models[i].Title, isChecked);
                                if (isChecked) {
                                    jQuery("#tab1_1595154948").showCol(models[i].index);
                                }
                            }
                        }

                    }

                    function check_visible_tab1_1595154948(index) {
                        var custom_visible = config_tab1_1595154948.custom_hidden_fields;
                        if (custom_visible.indexOf(index) > -1) {
                            return false;
                        }
                        return true;
                    }

                    function show_coll_tab1_1595154948(index) {
                        if (config_tab1_1595154948.custom_hidden_fields.indexOf(index) > -1) {
                            jQuery("#tab1_1595154948").hideCol(index);
                            return;
                        }
                        jQuery("#tab1_1595154948").showCol(index);
                    }

                    function set_unset_key_tab1_1595154948(index, isSet) {

                        if (isSet) {
                            if (config_tab1_1595154948.custom_hidden_fields.indexOf(index) > -1) {
                                return;
                            }
                            config_tab1_1595154948.custom_hidden_fields.push(index);
                        } else {
                            var aind = config_tab1_1595154948.custom_hidden_fields.indexOf(index)
                            if (aind !== -1) {
                                config_tab1_1595154948.custom_hidden_fields.splice(aind, 1);
                            }
                        }


                    }

                    function append_into_checklist_tab1_1595154948(index, title, isChecked) {
                        jQuery("#mc_tab1_1595154948 .ag_column-choose > .ag-column-container").append('<label class="cl-chose-input"> <input data-cl-key="' + index + '" type="checkbox" ' + (isChecked ? "checked" : "") + '> ' + title + '</label>');

                    }

                    function tab1_1595154948_init_grid() {
                        if (is_init_tab1_1595154948) {
                            return;
                        }
                        is_init_tab1_1595154948 = true;
                        jQuery("#tab1_1595154948").jqGrid(config_tab1_1595154948);
                        check_all_visible_tab1_1595154948();
                        jQuery("#tab1_1595154948").jqGrid('navGrid', '#pager_tab1_1595154948', {
                            edit: false,
                            add: false,
                            del: false,
                            search: false,
                            reloadtext: "Reload",
                            searchtext: " Search&nbsp;"
                        }, {}, {}, {}, {
                            sopt: ['cn', 'bw', 'eq', 'ne', 'lt', 'gt', 'ew']
                        });
                        $("#pager_tab1_1595154948").after(jQuery("#alertmod_tab1_1595154948"));


                        jQuery(window).bind('resize', function() {
                            tab1_1595154948_ResizeGrid();
                            setTimeout(tab1_1595154948_ResizeGrid, 500);
                        }).trigger('resize');
                        try {
                            jQuery('body').resize(function() {
                                tab1_1595154948_ResizeGrid();
                                setTimeout(tab1_1595154948_ResizeGrid, 500);
                            });
                        } catch (e) {}
                        try {
                            AddOnPageResize(tab1_1595154948_ResizeGrid);
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
                            applyClassesToHeaders(jQuery("#tab1_1595154948"));
                        } catch (e) {}




                    }

                    function tab1_1595154948_resize_height(e) {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        try {
                            if (config_tab1_1595154948.height == "auto") {
                                return;
                            }
                            var data = config_tab1_1595154948.auto_height_records;
                            if (e.records < data) {
                                jQuery("#tab1_1595154948").setGridHeight('auto');
                            } else {
                                jQuery("#tab1_1595154948").setGridHeight(config_tab1_1595154948.height);
                            }
                            //app_grid_log(config_tab1_1595154948.height);
                        } catch (e) {}
                    }

                    function tab1_1595154948_reset_sorting() {

                        var myGrid = jQuery("#tab1_1595154948");
                        $("span.s-ico", myGrid[0].grid.hDiv).hide(); // hide sort icons
                        myGrid.setGridParam({
                            sortname: ''
                        }).trigger('reloadGrid');

                    }

                    function tab1_1595154948_ResizeGrid() {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        var c_minwidth_tab1_1595154948 = jQuery(".grid-body").width();
                        if (c_minwidth_tab1_1595154948 <= minwidth_tab1_1595154948) {
                            c_minwidth_tab1_1595154948 = minwidth_tab1_1595154948;
                        }
                        c_minwidth_tab1_1595154948 -= 5;
                        jQuery("#tab1_1595154948").setGridWidth(c_minwidth_tab1_1595154948);
                        var windowWidth = jQuery(window).width();


                        if (windowWidth < 768) {
                            for (var key in config_tab1_1595154948.visible_fields) {
                                //console.log("from_user");
                                if (key != "from_user") {
                                    jQuery("#tab1_1595154948").hideCol(key);
                                }
                            }
                        } else {
                            for (var kindex in config_tab1_1595154948.visible_fields) {
                                show_coll_tab1_1595154948(kindex);
                            }
                        }
                        if (windowWidth < 991) {

                        } else {
                            for (var kindex in config_tab1_1595154948.visible_fields) {
                                show_coll_tab1_1595154948(kindex);
                            }

                        }


                    }
                </script>
                <div id="mc_tab1_1595154948" class="gs-jq-grid " data-unique-id="ag_7caf6a63">
                    <div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_tab1_1595154948" dir="ltr" style="width: 1635px;">
                        <div class="ui-widget-overlay jqgrid-overlay" id="lui_tab1_1595154948"></div>
                        <div class="loading ui-state-default ui-state-active" id="load_tab1_1595154948" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Loading...</div>
                        <div class="ui-jqgrid-view" id="gview_tab1_1595154948" style="width: 1635px;">
                            <div class="ui-jqgrid-titlebar ui-jqgrid-caption ui-widget-header ui-corner-top ui-helper-clearfix"><a role="link" class="ui-jqgrid-titlebar-close ui-corner-all HeaderButton" style="right: 0px;"><span class="ui-icon ui-icon-circle-triangle-n"></span></a><span class="ui-jqgrid-title"></span><span style="float: left;" class="gridtitle left"> <a onclick="Grid_tab1_1595154948_reload()" class="btn btn-xs btn-primary added-ripples"><i class="fa fa-refresh"></i> Reload</a> </span><span class="gridtitle text-right ">&nbsp;<a onclick="Grid_tab1_1595154948_download()" class="btn btn-xs btn-success added-ripples"><i class="fa fa-download"></i> Download CSV</a> <span data-gridid="mc_tab1_1595154948" class="full-screen btn btn-info btn-xs added-ripples"><i class="fa fa-expand "></i></span> </span></div>
                            <div class="ui-state-default ui-jqgrid-hdiv" style="width: 1635px;">
                                <div class="ui-jqgrid-hbox">
                                    <table class="ui-jqgrid-htable" style="width: 1635px;" role="grid" aria-labelledby="gbox_tab1_1595154948" cellspacing="0" cellpadding="0" border="0">
                                        <thead>
                                            <tr class="ui-jqgrid-labels" role="rowheader">
                                                <th id="tab1_1595154948_rn" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 25px;">
                                                    <div id="jqgh_tab1_1595154948_rn"><span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154948_from_user" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 316px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154948_from_user" class="ui-jqgrid-sortable no-hand-css">From<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154948_last_replied" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 316px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154948_last_replied" class="ui-jqgrid-sortable no-hand-css">Last Replied<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154948_entry_time" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 316px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154948_entry_time" class="ui-jqgrid-sortable no-hand-css">Time<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154948_subject" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 316px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154948_subject" class="ui-jqgrid-sortable no-hand-css">Subject<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595154948_action" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 316px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595154948_action" class="ui-jqgrid-sortable no-hand-css">Action<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="jqgfirstrow" role="row" style="height:auto">
                                                <td role="gridcell" style="height:0px;width:25px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 316px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 316px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 316px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 316px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 316px;"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="ui-jqgrid-resize-mark" id="rs_mtab1_1595154948">&nbsp;</div>
                        <div id="pager_tab1_1595154948" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 1635px;">
                            <div id="pg_pager_tab1_1595154948" class="ui-pager-control" role="group">
                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;" role="row">
                                    <tbody>
                                        <tr>
                                            <td id="pager_tab1_1595154948_left" align="left">
                                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table navtable" style="float:left;table-layout:auto;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="ui-pg-button ui-corner-all" title="Reload Grid" id="refresh_tab1_1595154948">
                                                                <div class="ui-pg-div"><span class="ui-icon ui-icon-refresh"></span></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td id="pager_tab1_1595154948_center" align="center" style="white-space: pre; width: 202px;">
                                                <table cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;" class="ui-pg-table">
                                                    <tbody>
                                                        <tr>
                                                            <td id="first_pager_tab1_1595154948" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-first"></span></td>
                                                            <td id="prev_pager_tab1_1595154948" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-prev"></span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td dir="ltr">Page <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox"> of <span id="sp_1_pager_tab1_1595154948">0</span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td id="next_pager_tab1_1595154948" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-next"></span></td>
                                                            <td id="last_pager_tab1_1595154948" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-end"></span></td>
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
                                            <td id="pager_tab1_1595154948_right" align="right">
                                                <div dir="ltr" style="text-align:right" class="ui-paging-info"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="ui-widget ui-widget-content ui-corner-all ui-jqdialog" id="alertmod_tab1_1595154948" dir="ltr" tabindex="-1" role="dialog" aria-labelledby="alerthd_tab1_1595154948" aria-hidden="true" style="width: 200px; height: auto; z-index: 950; overflow: hidden; top: 328.5px; left: 860px;">
                            <div class="ui-jqdialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" id="alerthd_tab1_1595154948" style="cursor: move;"><span class="ui-jqdialog-title" style="float: left;">Warning</span><a class="ui-jqdialog-titlebar-close ui-corner-all" style="right: 0.3em;"><span class="ui-icon ui-icon-closethick"></span></a></div>
                            <div class="ui-jqdialog-content ui-widget-content" id="alertcnt_tab1_1595154948">
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
                AddOnCloseMethod(Grid_tab1_1595154948_reload);
            });
        </script>
    </section>
</div>
@endsection
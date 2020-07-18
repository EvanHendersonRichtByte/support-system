@extends('layout.admin.user_settings.user_settings_master')

@section('tab-title')
User List
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 294px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            User List </h1>
        <ol class="breadcrumb">
            <li>
                <a href="https://demo.appsbd.com/support-system/admin/dashboard.html"><i class=""></i> Home</a>
            </li>
            <li>
                User List </li>
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
                    var is_init_tab1_1595056273 = false;
                    var sbtnclick_tab1_1595056273 = false;
                    var minwidth_tab1_1595056273 = 200;

                    function app_grid_log(e) {}

                    function col_cellattr(ts, rowId, tv, rawObject, cm, rdata) {
                        if (rawObject.name == "action" || rawObject.name == "action2") {
                            return ' title=" "';
                        }
                    }
                    jQuery(function($) {

                        var srcDivId = "#src_tab1_1595056273";
                        jQuery("#src_tab1_1595056273 .srcSelectValue").change(function() {
                            if (jQuery("#autosearch_tab1_1595056273").is(':checked')) {
                                Grid_tab1_1595056273_custom_reload();
                            }
                        });
                        var timeoutHnd_tab1_1595056273 = null;
                        jQuery("#src_tab1_1595056273 .srcTextValue").keydown(function(e) {
                            var s = jQuery(this).val();
                            var code = (e.keyCode ? e.keyCode : e.which);
                            if ((s.length == 1 && code == 8) || jQuery("#autosearch_tab1_1595056273").is(':checked')) {
                                if (timeoutHnd_tab1_1595056273) clearTimeout(timeoutHnd_tab1_1595056273);
                                timeoutHnd_tab1_1595056273 = setTimeout(Grid_tab1_1595056273_reload, 500);
                            } else if (code == 13) {
                                Grid_tab1_1595056273_custom_reload();
                            }
                        });


                        jQuery("#autosearch_tab1_1595056273").click(function() {
                            if (jQuery("#autosearch_tab1_1595056273").is(':checked')) {
                                jQuery("#src_tab1_1595056273 .srcButton").hide();
                                Grid_tab1_1595056273_reload();
                            } else {
                                jQuery("#src_tab1_1595056273 .srcButton").show();
                            }
                        });

                        jQuery("#src_tab1_1595056273 .srcOptionList").change(function(e) {
                            SetSearchOption_src_tab1_1595056273();
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
                            var gridh = jQuery("#tab1_1595056273").getGridParam("height");
                            $(this).attr("lasth", gridh);
                            $("#" + panelid).addClass("grid-panel-full-screen");
                            $(this).addClass("exit-full-screen");
                            var wheight = $(window).height();
                            var wwidth = $(window).width();
                            var offset = jQuery("#pager_tab1_1595056273").height();
                            if (offset <= 0) {
                                offset = 130;
                            } else {
                                offset += 75;
                            }
                            jQuery("#tab1_1595056273").setGridWidth(wwidth);
                            jQuery("#tab1_1595056273").setGridHeight(wheight - offset);

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
                            jQuery("#tab1_1595056273").setGridHeight(lastheight);
                            // requestFullScreen(document.getElementById(panelid));
                            try {
                                jQuery(".grid-body").removeClass('grid-full-screen');
                            } catch (e) {}
                            tab1_1595056273_ResizeGrid();

                        });
                    });

                    function SetSearchOption_src_tab1_1595056273() {
                        try {
                            UnsetDateGridPicker();
                        } catch (e) {
                            //gcl(e.message);
                        }
                        var stype = jQuery("#src_tab1_1595056273 .srcOptionList option:selected").attr("stype");

                        if (stype == "select") {
                            jQuery("#src_tab1_1595056273 .srcTextValue").hide();
                            var selectOption = jQuery("#src_tab1_1595056273 .srcOptionList option:selected").attr("data");
                            selectOption = jQuery.parseJSON(atob(selectOption));
                            jQuery("#src_tab1_1595056273 .srcSelectValue option").remove();
                            for (var i in selectOption) {
                                jQuery("#src_tab1_1595056273 .srcSelectValue").append("<option value='" + i + "'>" + selectOption[i] + "</option>");
                            }
                            jQuery("#src_tab1_1595056273 .srcSelectValue").show();
                        } else if (stype == "date" || stype == "dateonly" || stype == "time" || stype == "datetime") {
                            jQuery("#src_tab1_1595056273_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595056273_text").addClass("hidden");
                            jQuery("#src_tab1_1595056273_from").removeClass("hidden");
                            jQuery("#src_tab1_1595056273_from").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595056273_from .control-label ").removeClass("col-sm-2").addClass("col-sm-6").html('<span class="hidden-sm">Select</span> Value');
                            jQuery("#src_tab1_1595056273_from .form-group > div.ag-from-container").removeClass("col-sm-8").addClass("col-sm-6");
                            jQuery("#src_tab1_1595056273_from .srcFrom ").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595056273 .srcTextValue").show();
                            jQuery("#src_tab1_1595056273 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else if (stype == "daterange" || stype == "datetimerange" || stype == "timerange") {
                            jQuery("#src_tab1_1595056273_from").removeClass("col-xs-8").addClass("col-xs-4");
                            jQuery("#src_tab1_1595056273_from .control-label ").removeClass("col-sm-6").addClass("col-sm-2").html('From');
                            jQuery("#src_tab1_1595056273_from .form-group > div.ag-from-container").removeClass("col-sm-6").addClass("col-sm-8");
                            jQuery("#src_tab1_1595056273_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595056273_to .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595056273_text").addClass("hidden");
                            jQuery("#src_tab1_1595056273_from").removeClass("hidden");
                            jQuery("#src_tab1_1595056273_to").removeClass("hidden");
                            jQuery("#src_tab1_1595056273 .srcTextValue").show();
                            jQuery("#src_tab1_1595056273 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else {
                            jQuery("#src_tab1_1595056273_from").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595056273_to").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595056273_text").removeClass("hidden");
                            jQuery("#src_tab1_1595056273 .srcTextValue").show();
                            jQuery("#src_tab1_1595056273 .srcSelectValue").hide();
                        }
                        if (jQuery("#autosearch_tab1_1595056273").is(':checked')) {
                            Grid_tab1_1595056273_custom_reload();
                        }

                    }

                    function Grid_tab1_1595056273_download() {
                        var stype = jQuery("#src_tab1_1595056273 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595056273").jqGrid("getGridParam", "postData");
                        data.download_csv = true;
                        data.searchOper = "eq";
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595056273 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595056273_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595056273_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595056273 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595056273 .srcOptionList").val();
                        data._search = true;
                        data.searchString = (typeof(data.searchString) == "undefined") ? "" : data.searchString;
                        data.searchField = jQuery("#src_tab1_1595056273 .srcOptionList").val();
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
                        data.cols = "eyJ1c2VyIjoiVXNlciIsInRpdGxlIjoiVGl0bGUiLCJlbWFpbCI6IkVtYWlsIiwicm9sZSI6IlJvbGUiLCJzdGF0dXMiOiJTdGF0dXMiLCJhY3Rpb24iOiJBY3Rpb24ifQ==";
                        data.filename = "download";
                        var durl = "https://demo.appsbd.com/support-system/admin/app-permission-data-center/user-list.html?" + serialize(data);
                        jQuery("#difrm").attr("src", durl);
                    }

                    function Grid_tab1_1595056273_custom_reload() {
                        var IsMultiSearch = false;
                        var data = jQuery("#tab1_1595056273").jqGrid("getGridParam", "postData");
                        data.first = true;
                        data.download_csv = false;
                        data.isMultiSearch = IsMultiSearch;
                        if (IsMultiSearch) {
                            data.ms = jQuery("#ms_tab1_1595056273").serialize();
                            try {
                                if (window.Base64) {
                                    data.ms = Base64.encode(data.ms);
                                }
                            } catch (e) {
                                app_grid_log(e.message);
                            }
                        }
                        jQuery("#tab1_1595056273").jqGrid("setGridParam", {
                            "postData": data
                        });
                        Grid_tab1_1595056273_reload();
                        sbtnclick_tab1_1595056273 = false;
                        //alert("Test");
                    }

                    function Grid_tab1_1595056273_reset_custom_reload() {
                        jQuery("#ms_tab1_1595056273")[0].reset();
                        Grid_tab1_1595056273_custom_reload();
                    }

                    function Grid_tab1_1595056273_advance_search() {
                        jQuery("#tab1_1595056273").jqGrid('searchGrid');
                        $("body > .ui-widget-overlay").prependTo(".gs-jq-grid ");
                        $("#searchhdfbox_tab1_1595056273").addClass("alert-info");
                        $("#searchmodfbox_tab1_1595056273").addClass("jqgrid-input");
                        $("#searchmodfbox_tab1_1595056273 .ui-jqdialog-title").html('<i class="fa fa-search"></i> Advance Search');
                        $("#searchmodfbox_tab1_1595056273").prependTo(".gs-jq-grid ").css("display", "block");




                    }

                    function Grid_tab1_1595056273_reload() {
                        var stype = jQuery("#src_tab1_1595056273 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595056273").jqGrid("getGridParam", "postData");
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595056273 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595056273_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595056273_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595056273 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595056273 .srcOptionList").val();
                        data._search = true;

                        jQuery("#tab1_1595056273").jqGrid("setGridParam", {
                            "postData": data
                        });
                        jQuery("#tab1_1595056273").trigger("reloadGrid");
                        data.first = false;
                        jQuery("#tab1_1595056273").jqGrid("setGridParam", {
                            "postData": data
                        });

                    }
                    var config_tab1_1595056273 = {
                        "IsCSVDownload": false,
                        "width": "auto",
                        "height": 340,
                        "url": "https:\/\/demo.appsbd.com\/support-system\/admin\/app-permission-data-center\/user-list.html",
                        "datatype": "json",
                        "colNames": ["User", "Title", "Email", "Role", "Status", "Action"],
                        "afterInsertRow": "",
                        "container": ".grid-body",
                        "multiselect": false,
                        "multisearch": false,
                        "ShowAdvanceSearch": false,
                        "isColumnChoseable": false,
                        "colModel": [{
                            "Title": "User",
                            "objectName": null,
                            "width": 80,
                            "name": "user",
                            "index": "user",
                            "formater": "Grid_tab1_1595056273_formatter",
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
                            "Title": "Title",
                            "objectName": null,
                            "width": 100,
                            "name": "title",
                            "index": "title",
                            "formater": "Grid_tab1_1595056273_formatter",
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
                            "Title": "Email",
                            "objectName": null,
                            "width": 120,
                            "name": "email",
                            "index": "email",
                            "formater": "Grid_tab1_1595056273_formatter",
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
                            "Title": "Role",
                            "objectName": null,
                            "width": 80,
                            "name": "role",
                            "index": "role",
                            "formater": "Grid_tab1_1595056273_formatter",
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
                            "width": 70,
                            "name": "status",
                            "index": "status",
                            "formater": "Grid_tab1_1595056273_formatter",
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
                            "width": 80,
                            "name": "action",
                            "index": "action",
                            "formater": "Grid_tab1_1595056273_formatter",
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
                        "caption": "<\/span><span style=\"float: left;\" class=\"gridtitle left\"> <a onclick=\"Grid_tab1_1595056273_reload()\" class=\"btn btn-xs btn-primary\" ><i class=\"fa fa-refresh\"><\/i> Reload<\/a> <\/span><span class=\"gridtitle text-right \">&nbsp;<a data-effect=\"mfp-move-from-top\" class=\"popupformWR btn btn-xs btn-info\" href=\"https:\/\/demo.appsbd.com\/support-system\/admin\/app-permission\/add-edit-appuser.html\" ><i class=\"fa fa-plus\"><\/i>Add New<\/a> <a onclick=\"Grid_tab1_1595056273_download()\" class=\"btn btn-xs btn-success\" ><i class=\"fa fa-download\"><\/i> Download CSV<\/a> <span data-gridid=\"mc_tab1_1595056273\" class=\"full-screen btn btn-info btn-xs\"><i class=\"fa fa-expand \"><\/i><\/span> ",
                        "rownumbers": true,
                        "pager": "#pager_tab1_1595056273",
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
                        "TotalColumn": 6,
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

                        config_tab1_1595056273.afterInsertRow = eval(config_tab1_1595056273.afterInsertRow);
                        try {
                            for (var i in config_tab1_1595056273.colModel) {
                                try {
                                    config_tab1_1595056273.colModel[i].cellattr = eval(config_tab1_1595056273.colModel[i].cellattr);
                                    try {
                                        if (!config_tab1_1595056273.colModel[i].hidden) {
                                            config_tab1_1595056273.visible_fields[(config_tab1_1595056273.colModel[i].index)] = config_tab1_1595056273.colModel[i].Title;
                                        }
                                    } catch (e) {}
                                } catch (e) {
                                    app_grid_log(e.message);
                                }

                            }
                        } catch (e) {
                            app_grid_log(e.message);
                        }

                        config_tab1_1595056273.loadComplete = function(e) {
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
                            tab1_1595056273_resize_height(e);
                            jQuery("#gview_tab1_1595056273 .ui-jqgrid-bdiv .gridnorecord").hide().remove();
                            if (jQuery("#tab1_1595056273").getGridParam("records") == 0) {
                                jQuery("#gview_tab1_1595056273 .ui-jqgrid-bdiv").append('<div class="gridnorecord" id="gridnorecord">' + jQuery("#tab1_1595056273").getGridParam("emptySetText") + '</div>');
                            }
                            try {
                                app_handle_grid_unauthorize(e, jQuery("#gview_tab1_1595056273 .ui-jqgrid-bdiv > .gridnorecord"));
                            } catch (e) {};
                        };
                        config_tab1_1595056273.ajaxGridOptions = {
                            //contentType: "application/json; charset=utf-8",
                            dataFilter: function(data, dataType) { // preprocess the data
                                try {
                                    if (dataType == "json") {

                                        var data2 = JSON.parse(data);
                                        jQuery.each(data2.rowdata, function(key, value) {
                                            var optstr = "<div >" + ("<div class='col-xs-5 app-property-label'>" + config_tab1_1595056273.visible_fields["user"] + "</div>") + "<div class=' app-property-value col-xs-7 text-left '>" + data2.rowdata[key]["user"] + "</div></div>";
                                            jQuery.each(data2.rowdata[key], function(key2, value2) {
                                                if (key2 == "user") {
                                                    return;
                                                }
                                                try {
                                                    if (typeof config_tab1_1595056273.visible_fields[key2] != "undefined") {
                                                        optstr += "<div >" + (key2 == "action" ? "" : "<div class='col-xs-5 app-property-label'>" + config_tab1_1595056273.visible_fields[key2] + "</div>") + "<div class=' app-property-value col-xs-" + (key2 == "action" ? "12 text-center" : "7 text-left") + " '>" + data2.rowdata[key][key2] + "</div></div>";
                                                    }
                                                } catch (e) {}
                                            });
                                            data2.rowdata[key]["user"] = "<div class='hidden-xs'>" + data2.rowdata[key]["user"] + "</div><div class='visible-xs app-grid-property-row' style='text-align:left;'>" + optstr + "</div>";
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
                        var isFirstLoaded_tab1_1595056273 = false;
                        tab1_1595056273_serialize = function(obj) {
                            var str = [];
                            for (var p in obj)
                                if (obj.hasOwnProperty(p)) {
                                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                }
                            return str.join("&");
                        }
                        config_tab1_1595056273.beforeRequest = function() {
                            var data = jQuery("#tab1_1595056273").jqGrid("getGridParam", "postData");
                            //console.log(data);
                            // myGrid.setGridParam({sortname: ''})
                            if (data.sidx != "") {
                                try {
                                    var th_obj = $("#jqgh_tab1_1595056273_" + data.sidx);
                                    jQuery(".app-sorting").removeClass("app-sorting");
                                    th_obj.addClass("app-sorting");
                                    jQuery(".tab1_1595056273-rm-srt").remove();
                                    var rmicon = jQuery('<i class="tab1_1595056273-rm-srt grid-reset-sort-btn fa fa-times-circle tooltip2" data-tooltip-position="top" title="Remove Sorting"></i>');
                                    rmicon.click(function(e) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                        tab1_1595056273_reset_sorting();
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
                            jQuery("#tab1_1595056273").jqGrid("setGridParam", {
                                "postData": data
                            });
                            return true;
                        };

                        config_tab1_1595056273.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595056273.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595056273.onInitGrid = function() {
                            //This event does not raised.
                            try {
                                jQuery("#jqgh_tab1_1595056273_user").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595056273_title").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595056273_email").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595056273_role").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595056273_status").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595056273_action").addClass("no-hand-css");
                            } catch (e) {}
                        }

                        if (config_tab1_1595056273.width == "auto") {
                            config_tab1_1595056273.width = jQuery(".grid-body").width();
                            if (config_tab1_1595056273.width < minwidth_tab1_1595056273) {
                                config_tab1_1595056273.width = minwidth_tab1_1595056273;
                            }
                            config_tab1_1595056273.width -= 0;
                        }
                        tab1_1595056273_init_grid();
                    });

                    function check_all_visible_tab1_1595056273() {
                        return;
                        try {
                            var cols_hidden = localStorage.getItem("ag_97b309ba");
                            if (cols_hidden) {
                                cols_hidden = JSON.parse(cols_hidden);
                                if (typeof cols_hidden == "object") {
                                    config_tab1_1595056273.custom_hidden_fields = cols_hidden;
                                }
                            } else {
                                localStorage.setItem("ag_97b309ba", JSON.stringify(config_tab1_1595056273.custom_hidden_fields));
                            }
                        } catch (e) {

                        }
                        var models = config_tab1_1595056273.colModel;
                        var $searchOnly = [];
                        for (var i in models) {
                            var isChecked = check_visible_tab1_1595056273(models[i].index);
                            if ($searchOnly.indexOf(models[i].index) > -1) {
                                continue;
                            }
                            if (models[i].Title) {
                                append_into_checklist_tab1_1595056273(models[i].index, models[i].Title, isChecked);
                                if (isChecked) {
                                    jQuery("#tab1_1595056273").showCol(models[i].index);
                                }
                            }
                        }

                    }

                    function check_visible_tab1_1595056273(index) {
                        var custom_visible = config_tab1_1595056273.custom_hidden_fields;
                        if (custom_visible.indexOf(index) > -1) {
                            return false;
                        }
                        return true;
                    }

                    function show_coll_tab1_1595056273(index) {
                        if (config_tab1_1595056273.custom_hidden_fields.indexOf(index) > -1) {
                            jQuery("#tab1_1595056273").hideCol(index);
                            return;
                        }
                        jQuery("#tab1_1595056273").showCol(index);
                    }

                    function set_unset_key_tab1_1595056273(index, isSet) {

                        if (isSet) {
                            if (config_tab1_1595056273.custom_hidden_fields.indexOf(index) > -1) {
                                return;
                            }
                            config_tab1_1595056273.custom_hidden_fields.push(index);
                        } else {
                            var aind = config_tab1_1595056273.custom_hidden_fields.indexOf(index)
                            if (aind !== -1) {
                                config_tab1_1595056273.custom_hidden_fields.splice(aind, 1);
                            }
                        }


                    }

                    function append_into_checklist_tab1_1595056273(index, title, isChecked) {
                        jQuery("#mc_tab1_1595056273 .ag_column-choose > .ag-column-container").append('<label class="cl-chose-input"> <input data-cl-key="' + index + '" type="checkbox" ' + (isChecked ? "checked" : "") + '> ' + title + '</label>');

                    }

                    function tab1_1595056273_init_grid() {
                        if (is_init_tab1_1595056273) {
                            return;
                        }
                        is_init_tab1_1595056273 = true;
                        jQuery("#tab1_1595056273").jqGrid(config_tab1_1595056273);
                        check_all_visible_tab1_1595056273();
                        jQuery("#tab1_1595056273").jqGrid('navGrid', '#pager_tab1_1595056273', {
                            edit: false,
                            add: false,
                            del: false,
                            search: false,
                            reloadtext: "Reload",
                            searchtext: " Search&nbsp;"
                        }, {}, {}, {}, {
                            sopt: ['cn', 'bw', 'eq', 'ne', 'lt', 'gt', 'ew']
                        });
                        $("#pager_tab1_1595056273").after(jQuery("#alertmod_tab1_1595056273"));


                        jQuery(window).bind('resize', function() {
                            tab1_1595056273_ResizeGrid();
                            setTimeout(tab1_1595056273_ResizeGrid, 500);
                        }).trigger('resize');
                        try {
                            jQuery('body').resize(function() {
                                tab1_1595056273_ResizeGrid();
                                setTimeout(tab1_1595056273_ResizeGrid, 500);
                            });
                        } catch (e) {}
                        try {
                            AddOnPageResize(tab1_1595056273_ResizeGrid);
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
                            applyClassesToHeaders(jQuery("#tab1_1595056273"));
                        } catch (e) {}




                    }

                    function tab1_1595056273_resize_height(e) {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        try {
                            if (config_tab1_1595056273.height == "auto") {
                                return;
                            }
                            var data = config_tab1_1595056273.auto_height_records;
                            if (e.records < data) {
                                jQuery("#tab1_1595056273").setGridHeight('auto');
                            } else {
                                jQuery("#tab1_1595056273").setGridHeight(config_tab1_1595056273.height);
                            }
                            //app_grid_log(config_tab1_1595056273.height);
                        } catch (e) {}
                    }

                    function tab1_1595056273_reset_sorting() {

                        var myGrid = jQuery("#tab1_1595056273");
                        $("span.s-ico", myGrid[0].grid.hDiv).hide(); // hide sort icons
                        myGrid.setGridParam({
                            sortname: ''
                        }).trigger('reloadGrid');

                    }

                    function tab1_1595056273_ResizeGrid() {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        var c_minwidth_tab1_1595056273 = jQuery(".grid-body").width();
                        if (c_minwidth_tab1_1595056273 <= minwidth_tab1_1595056273) {
                            c_minwidth_tab1_1595056273 = minwidth_tab1_1595056273;
                        }
                        c_minwidth_tab1_1595056273 -= 5;
                        jQuery("#tab1_1595056273").setGridWidth(c_minwidth_tab1_1595056273);
                        var windowWidth = jQuery(window).width();


                        if (windowWidth < 768) {
                            for (var key in config_tab1_1595056273.visible_fields) {
                                //console.log("user");
                                if (key != "user") {
                                    jQuery("#tab1_1595056273").hideCol(key);
                                }
                            }
                        } else {
                            for (var kindex in config_tab1_1595056273.visible_fields) {
                                show_coll_tab1_1595056273(kindex);
                            }
                        }
                        if (windowWidth < 991) {

                        } else {
                            for (var kindex in config_tab1_1595056273.visible_fields) {
                                show_coll_tab1_1595056273(kindex);
                            }

                        }


                    }
                </script>
                <div id="mc_tab1_1595056273" class="gs-jq-grid " data-unique-id="ag_97b309ba">
                    <div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_tab1_1595056273" dir="ltr" style="width: 1064px;">
                        <div class="ui-widget-overlay jqgrid-overlay" id="lui_tab1_1595056273"></div>
                        <div class="loading ui-state-default ui-state-active" id="load_tab1_1595056273" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Loading...</div>
                        <div class="ui-jqgrid-view" id="gview_tab1_1595056273" style="width: 1064px;">
                            <div class="ui-jqgrid-titlebar ui-jqgrid-caption ui-widget-header ui-corner-top ui-helper-clearfix"><a role="link" class="ui-jqgrid-titlebar-close ui-corner-all HeaderButton" style="right: 0px;"><span class="ui-icon ui-icon-circle-triangle-n"></span></a><span class="ui-jqgrid-title"></span><span style="float: left;" class="gridtitle left"> <a onclick="Grid_tab1_1595056273_reload()" class="btn btn-xs btn-primary added-ripples"><i class="fa fa-refresh"></i> Reload</a> </span><span class="gridtitle text-right ">&nbsp;<a data-effect="mfp-move-from-top" class="popupformWR btn btn-xs btn-info added-ripples apopf" href="https://demo.appsbd.com/support-system/admin/app-permission/add-edit-appuser.html"><i class="fa fa-plus"></i>Add New</a> <a onclick="Grid_tab1_1595056273_download()" class="btn btn-xs btn-success added-ripples"><i class="fa fa-download"></i> Download CSV</a> <span data-gridid="mc_tab1_1595056273" class="full-screen btn btn-info btn-xs added-ripples"><i class="fa fa-expand "></i></span> </span></div>
                            <div class="ui-state-default ui-jqgrid-hdiv" style="width: 1064px;">
                                <div class="ui-jqgrid-hbox">
                                    <table class="ui-jqgrid-htable" style="width: 1064px;" role="grid" aria-labelledby="gbox_tab1_1595056273" cellspacing="0" cellpadding="0" border="0">
                                        <thead>
                                            <tr class="ui-jqgrid-labels" role="rowheader">
                                                <th id="tab1_1595056273_rn" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 25px;">
                                                    <div id="jqgh_tab1_1595056273_rn"><span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595056273_user" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 152px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595056273_user" class="ui-jqgrid-sortable no-hand-css">User<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595056273_title" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 189px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595056273_title" class="ui-jqgrid-sortable no-hand-css">Title<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595056273_email" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 227px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595056273_email" class="ui-jqgrid-sortable no-hand-css">Email<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595056273_role" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 152px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595056273_role" class="ui-jqgrid-sortable no-hand-css">Role<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595056273_status" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 133px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595056273_status" class="ui-jqgrid-sortable no-hand-css">Status<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595056273_action" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 151px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595056273_action" class="ui-jqgrid-sortable no-hand-css">Action<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="ui-jqgrid-bdiv" style="height: auto; width: 1064px;">
                                <div style="position:relative;">
                                    <div></div>
                                    <table id="tab1_1595056273" tabindex="0" cellspacing="0" cellpadding="0" border="0" role="grid" aria-multiselectable="false" aria-labelledby="gbox_tab1_1595056273" class="ui-jqgrid-btable" style="width: 1064px;">
                                        <tbody>
                                            <tr class="jqgfirstrow" role="row" style="height:auto">
                                                <td role="gridcell" style="height:0px;width:25px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 152px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 189px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 227px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 152px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 133px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 151px;"></td>
                                            </tr>
                                            <tr role="row" id="1" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;width: 25px;" title="1" aria-describedby="tab1_1595056273_rn">1</td>
                                                <td role="gridcell" style="text-align:center;" title="adminUseradminTitleadminEmailsupport-admin@appsbd.comRoleSuper AdminStatus Active&nbsp; MenuEdit" aria-describedby="tab1_1595056273_user">
                                                    <div class="hidden-xs">admin</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">User</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">admin</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">admin</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Email</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">support-admin@appsbd.com</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Role</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Super Admin</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "><span class="text-success"><i class="fa fa-check-circle-o"></i> Active</span></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><button class="btn btn-xs btn-default app-grid-dropdown added-ripples" data-content="#dpdown_AA" type="button" id="dAA"><i class="fa fa-chevron-circle-down"></i><span class="hidden-sm">&nbsp; Menu</span></button></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:center;" title="admin" aria-describedby="tab1_1595056273_title">admin</td>
                                                <td role="gridcell" style="text-align:center;" title="support-admin@appsbd.com" aria-describedby="tab1_1595056273_email">support-admin@appsbd.com</td>
                                                <td role="gridcell" style="text-align:center;" title="Super Admin" aria-describedby="tab1_1595056273_role">Super Admin</td>
                                                <td role="gridcell" style="text-align:center;" title=" Active" aria-describedby="tab1_1595056273_status"><span class="text-success"><i class="fa fa-check-circle-o"></i> Active</span></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595056273_action" title=" "><button class="btn btn-xs btn-default app-grid-dropdown added-ripples" data-content="#dpdown_AA" type="button" id="dAA"><i class="fa fa-chevron-circle-down"></i><span class="hidden-sm">&nbsp; Menu</span></button></td>
                                            </tr>
                                            <tr role="row" id="2" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" class="ui-state-default jqgrid-rownum" style="text-align:center;" title="2" aria-describedby="tab1_1595056273_rn">2</td>
                                                <td role="gridcell" style="text-align:center;" title="agentUseragentTitleAgentEmailagent@appsbd.comRoleAgentStatus Active&nbsp; MenuEdit Set PasswordEmail Password Reset Link Archive" aria-describedby="tab1_1595056273_user">
                                                    <div class="hidden-xs">agent</div>
                                                    <div class="visible-xs app-grid-property-row" style="text-align:left;">
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">User</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">agent</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Title</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Agent</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Email</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">agent@appsbd.com</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Role</div>
                                                            <div class=" app-property-value col-xs-7 text-left ">Agent</div>
                                                        </div>
                                                        <div>
                                                            <div class="col-xs-5 app-property-label">Status</div>
                                                            <div class=" app-property-value col-xs-7 text-left "><a class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-user-status/uid/AB.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Active</span></a></div>
                                                        </div>
                                                        <div>
                                                            <div class=" app-property-value col-xs-12 text-center "><button class="btn btn-xs btn-default app-grid-dropdown added-ripples" data-content="#dpdown_AB" type="button" id="dAB"><i class="fa fa-chevron-circle-down"></i><span class="hidden-sm">&nbsp; Menu</span></button></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td role="gridcell" style="text-align:center;" title="Agent" aria-describedby="tab1_1595056273_title">Agent</td>
                                                <td role="gridcell" style="text-align:center;" title="agent@appsbd.com" aria-describedby="tab1_1595056273_email">agent@appsbd.com</td>
                                                <td role="gridcell" style="text-align:center;" title="Agent" aria-describedby="tab1_1595056273_role">Agent</td>
                                                <td role="gridcell" style="text-align:center;" title=" Active" aria-describedby="tab1_1595056273_status"><a class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-user-status/uid/AB.html"><span class="text-success"><i class="fa fa-check-circle-o"></i> Active</span></a></td>
                                                <td role="gridcell" style="text-align:center;" aria-describedby="tab1_1595056273_action" title=" "><button class="btn btn-xs btn-default app-grid-dropdown added-ripples" data-content="#dpdown_AB" type="button" id="dAB"><i class="fa fa-chevron-circle-down"></i><span class="hidden-sm">&nbsp; Menu</span></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="ui-jqgrid-resize-mark" id="rs_mtab1_1595056273">&nbsp;</div>
                        <div id="pager_tab1_1595056273" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 1064px;">
                            <div id="pg_pager_tab1_1595056273" class="ui-pager-control" role="group">
                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;" role="row">
                                    <tbody>
                                        <tr>
                                            <td id="pager_tab1_1595056273_left" align="left">
                                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table navtable" style="float:left;table-layout:auto;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="ui-pg-button ui-corner-all" title="Reload Grid" id="refresh_tab1_1595056273">
                                                                <div class="ui-pg-div"><span class="ui-icon ui-icon-refresh"></span></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td id="pager_tab1_1595056273_center" align="center" style="white-space: pre; width: 202px;">
                                                <table cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;" class="ui-pg-table">
                                                    <tbody>
                                                        <tr>
                                                            <td id="first_pager_tab1_1595056273" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-first"></span></td>
                                                            <td id="prev_pager_tab1_1595056273" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-prev"></span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td dir="ltr">Page <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox"> of <span id="sp_1_pager_tab1_1595056273">1</span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td id="next_pager_tab1_1595056273" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-next"></span></td>
                                                            <td id="last_pager_tab1_1595056273" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-end"></span></td>
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
                                            <td id="pager_tab1_1595056273_right" align="right">
                                                <div dir="ltr" style="text-align:right" class="ui-paging-info">View 1 - 2 of 2</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="ui-widget ui-widget-content ui-corner-all ui-jqdialog" id="alertmod_tab1_1595056273" dir="ltr" tabindex="-1" role="dialog" aria-labelledby="alerthd_tab1_1595056273" aria-hidden="true" style="width: 200px; height: auto; z-index: 950; overflow: hidden; top: 172.5px; left: 583px;">
                            <div class="ui-jqdialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" id="alerthd_tab1_1595056273" style="cursor: move;"><span class="ui-jqdialog-title" style="float: left;">Warning</span><a class="ui-jqdialog-titlebar-close ui-corner-all" style="right: 0.3em;"><span class="ui-icon ui-icon-closethick"></span></a></div>
                            <div class="ui-jqdialog-content ui-widget-content" id="alertcnt_tab1_1595056273">
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
                AddOnCloseMethod(Grid_tab1_1595056273_reload);
            });
        </script>
    </section>
</div>
@endsection
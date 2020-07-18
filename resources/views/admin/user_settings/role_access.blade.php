@extends('layout.admin.user_settings.user_settings_master')

@section('tab-title')
Role Access
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 294px;">
    <div id="MainFormLoader" class="MainLoader">
        <div class="msgText"></div>
    </div>

    <section class="content-header">
        <h1>
            Role Access <small>Permission</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="https://demo.appsbd.com/support-system/admin/dashboard.html"><i class=""></i> Home</a>
            </li>
            <li>
                Role Access </li>
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
                    <div class="gs-grid-serach row form-horizontal" id="src_tab1_1595057945" style="padding: 5px;">
                        <div class="col-md-5 col-sm-4">
                            <div class="form-group form-group-xs">
                                <label for="selectpropery" class="control-label first-label col-md-6  hidden-xs"><span class="hidden-sm">Select</span> Property</label>
                                <div class="col-md-6">
                                    <select class="input-sm srcOptionList form-control">
                                        <option stype="select" data="eyIqIjoiQWxsIiwiMDEuIEFkbWluIFJlcG9ydCI6IjAxLiBBZG1pbiBSZXBvcnQiLCIwMi4gQWRtaW4gU2V0dGluZyI6IjAyLiBBZG1pbiBTZXR0aW5nIiwiMDMuIEFQSSBTZXR0aW5nIjoiMDMuIEFQSSBTZXR0aW5nIiwiMDQuIFBheW1lbnQgTGlzdCI6IjA0LiBQYXltZW50IExpc3QiLCIwNS4gVXNlciBTZXR0aW5ncyI6IjA1LiBVc2VyIFNldHRpbmdzIiwiMDYuIFRpY2tldCBGZWVkYmFjayI6IjA2LiBUaWNrZXQgRmVlZGJhY2siLCIwNy4gQXBwIEluZm9ybWF0aW9uIjoiMDcuIEFwcCBJbmZvcm1hdGlvbiIsIjA5LiBBbm5vdW5jZW1lbnRzIjoiMDkuIEFubm91bmNlbWVudHMiLCIxMC4gVGlja2V0IjoiMTAuIFRpY2tldCIsIjExLiBLbm93bGVkZ2UiOiIxMS4gS25vd2xlZGdlIiwiMTIuIENhdGVnb3J5IjoiMTIuIENhdGVnb3J5IiwiMTMuIENhbm5lZCBNc2ciOiIxMy4gQ2FubmVkIE1zZyIsIjE0LiBDbGllbnQiOiIxNC4gQ2xpZW50IiwiMTUuIE1lc3NhZ2UiOiIxNS4gTWVzc2FnZSIsIjE2LiAgU3lzdGVtIE1lc3NhZ2UiOiIxNi4gIFN5c3RlbSBNZXNzYWdlIiwiMTcuIFRpY2tldCBBc3NpZ24gUnVsZSI6IjE3LiBUaWNrZXQgQXNzaWduIFJ1bGUiLCIxNy4gV2ViIENoYXQiOiIxNy4gV2ViIENoYXQiLCJTeXN0ZW0gVXBkYXRlIjoiU3lzdGVtIFVwZGF0ZSJ9" value="controller_title">Type</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8">
                            <form id="ms_tab1_1595057945" onsubmit="if (!window.__cfRLUnblockHandlers) return false; return false;">
                                <div class="row">
                                    <div id="src_tab1_1595057945_text" class="col-md-12">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-6 hidden-xs"><span class="hidden-sm">Select</span> Value</label>
                                            <div class="col-md-6">
                                                <input autocomplete="off" class="srcTextValue form-control input-sm" type="text" name="srcText" value="" style="display: none;"> <select class="input-sm srcSelectValue form-control" name="srcText">
                                                    <option value="*">All</option>
                                                    <option value="01. Admin Report">01. Admin Report</option>
                                                    <option value="02. Admin Setting">02. Admin Setting</option>
                                                    <option value="03. API Setting">03. API Setting</option>
                                                    <option value="04. Payment List">04. Payment List</option>
                                                    <option value="05. User Settings">05. User Settings</option>
                                                    <option value="06. Ticket Feedback">06. Ticket Feedback</option>
                                                    <option value="07. App Information">07. App Information</option>
                                                    <option value="09. Announcements">09. Announcements</option>
                                                    <option value="10. Ticket">10. Ticket</option>
                                                    <option value="11. Knowledge">11. Knowledge</option>
                                                    <option value="12. Category">12. Category</option>
                                                    <option value="13. Canned Msg">13. Canned Msg</option>
                                                    <option value="14. Client">14. Client</option>
                                                    <option value="15. Message">15. Message</option>
                                                    <option value="16.  System Message">16. System Message</option>
                                                    <option value="17. Ticket Assign Rule">17. Ticket Assign Rule</option>
                                                    <option value="17. Web Chat">17. Web Chat</option>
                                                    <option value="System Update">System Update</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="src_tab1_1595057945_from" class="col-md-6 col-sm-6 hidden">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-2">From</label>
                                            <div class="ag-from-container col-md-10">
                                                <div class="input-group date gs-date-picker-grid-options addedDate">
                                                    <input autocomplete="off" class="input-xs srcTextValue form-control srcFrom input-sm" type="text" name="srcFrom" value="" style="display: none;"> <span class="input-group-addon" style="height: 24px !important; padding: 6px 3px 0px 1px !important; line-height: 4px !important;"><span style="font-size: 8px !important;" class="fa fa-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="src_tab1_1595057945_to" class="col-md-6 col-sm-6 hidden">
                                        <div class="form-group form-group-xs">
                                            <label for="srcText" class="control-label col-md-2">To</label>
                                            <div class="ag-to-container col-md-10">
                                                <div class="input-group date gs-date-picker-grid-options addedDate" data-date-format="YYYY-MM-DD">
                                                    <input autocomplete="off" class="srcTextValue form-control  srcTo input-sm" type="text" name="srcTo" value="" style="display: none;"> <span class="input-group-addon" style="height: 24px !important; padding: 6px 3px 0px 1px !important; line-height: 4px !important;"><span style="font-size: 8px !important;" class="fa fa-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2 col-sm-12 sm-text-right">
                            <a class="btn btn-xs btn-warning added-ripples" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:Grid_tab1_1595057945_custom_reload();"><i class="fa fa-search"></i>Search</a> <a class="btn btn-xs btn-danger added-ripples" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:Grid_tab1_1595057945_reset_custom_reload();"><i class="fa fa-times"> </i> Reset</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <script type="text/javascript">
                    var is_init_tab1_1595057945 = false;
                    var sbtnclick_tab1_1595057945 = false;
                    var minwidth_tab1_1595057945 = 200;

                    function app_grid_log(e) {}

                    function col_cellattr(ts, rowId, tv, rawObject, cm, rdata) {
                        if (rawObject.name == "action" || rawObject.name == "action2") {
                            return ' title=" "';
                        }
                    }
                    jQuery(function($) {

                        var srcDivId = "#src_tab1_1595057945";
                        jQuery("#src_tab1_1595057945 .srcSelectValue").change(function() {
                            if (jQuery("#autosearch_tab1_1595057945").is(':checked')) {
                                Grid_tab1_1595057945_custom_reload();
                            }
                        });
                        var timeoutHnd_tab1_1595057945 = null;
                        jQuery("#src_tab1_1595057945 .srcTextValue").keydown(function(e) {
                            var s = jQuery(this).val();
                            var code = (e.keyCode ? e.keyCode : e.which);
                            if ((s.length == 1 && code == 8) || jQuery("#autosearch_tab1_1595057945").is(':checked')) {
                                if (timeoutHnd_tab1_1595057945) clearTimeout(timeoutHnd_tab1_1595057945);
                                timeoutHnd_tab1_1595057945 = setTimeout(Grid_tab1_1595057945_reload, 500);
                            } else if (code == 13) {
                                Grid_tab1_1595057945_custom_reload();
                            }
                        });


                        jQuery("#autosearch_tab1_1595057945").click(function() {
                            if (jQuery("#autosearch_tab1_1595057945").is(':checked')) {
                                jQuery("#src_tab1_1595057945 .srcButton").hide();
                                Grid_tab1_1595057945_reload();
                            } else {
                                jQuery("#src_tab1_1595057945 .srcButton").show();
                            }
                        });

                        jQuery("#src_tab1_1595057945 .srcOptionList").change(function(e) {
                            SetSearchOption_src_tab1_1595057945();
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
                            var gridh = jQuery("#tab1_1595057945").getGridParam("height");
                            $(this).attr("lasth", gridh);
                            $("#" + panelid).addClass("grid-panel-full-screen");
                            $(this).addClass("exit-full-screen");
                            var wheight = $(window).height();
                            var wwidth = $(window).width();
                            var offset = jQuery("#pager_tab1_1595057945").height();
                            if (offset <= 0) {
                                offset = 130;
                            } else {
                                offset += 75;
                            }
                            jQuery("#tab1_1595057945").setGridWidth(wwidth);
                            jQuery("#tab1_1595057945").setGridHeight(wheight - offset);

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
                            jQuery("#tab1_1595057945").setGridHeight(lastheight);
                            // requestFullScreen(document.getElementById(panelid));
                            try {
                                jQuery(".grid-body").removeClass('grid-full-screen');
                            } catch (e) {}
                            tab1_1595057945_ResizeGrid();

                        });
                        SetSearchOption_src_tab1_1595057945();
                    });

                    function SetSearchOption_src_tab1_1595057945() {
                        try {
                            UnsetDateGridPicker();
                        } catch (e) {
                            //gcl(e.message);
                        }
                        var stype = jQuery("#src_tab1_1595057945 .srcOptionList option:selected").attr("stype");

                        if (stype == "select") {
                            jQuery("#src_tab1_1595057945 .srcTextValue").hide();
                            var selectOption = jQuery("#src_tab1_1595057945 .srcOptionList option:selected").attr("data");
                            selectOption = jQuery.parseJSON(atob(selectOption));
                            jQuery("#src_tab1_1595057945 .srcSelectValue option").remove();
                            for (var i in selectOption) {
                                jQuery("#src_tab1_1595057945 .srcSelectValue").append("<option value='" + i + "'>" + selectOption[i] + "</option>");
                            }
                            jQuery("#src_tab1_1595057945 .srcSelectValue").show();
                        } else if (stype == "date" || stype == "dateonly" || stype == "time" || stype == "datetime") {
                            jQuery("#src_tab1_1595057945_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595057945_text").addClass("hidden");
                            jQuery("#src_tab1_1595057945_from").removeClass("hidden");
                            jQuery("#src_tab1_1595057945_from").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595057945_from .control-label ").removeClass("col-sm-2").addClass("col-sm-6").html('<span class="hidden-sm">Select</span> Value');
                            jQuery("#src_tab1_1595057945_from .form-group > div.ag-from-container").removeClass("col-sm-8").addClass("col-sm-6");
                            jQuery("#src_tab1_1595057945_from .srcFrom ").removeClass("col-xs-4").addClass("col-xs-8");
                            jQuery("#src_tab1_1595057945 .srcTextValue").show();
                            jQuery("#src_tab1_1595057945 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else if (stype == "daterange" || stype == "datetimerange" || stype == "timerange") {
                            jQuery("#src_tab1_1595057945_from").removeClass("col-xs-8").addClass("col-xs-4");
                            jQuery("#src_tab1_1595057945_from .control-label ").removeClass("col-sm-6").addClass("col-sm-2").html('From');
                            jQuery("#src_tab1_1595057945_from .form-group > div.ag-from-container").removeClass("col-sm-6").addClass("col-sm-8");
                            jQuery("#src_tab1_1595057945_from .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595057945_to .gs-date-picker-grid-options").attr("data-type", stype);
                            jQuery("#src_tab1_1595057945_text").addClass("hidden");
                            jQuery("#src_tab1_1595057945_from").removeClass("hidden");
                            jQuery("#src_tab1_1595057945_to").removeClass("hidden");
                            jQuery("#src_tab1_1595057945 .srcTextValue").show();
                            jQuery("#src_tab1_1595057945 .srcSelectValue").hide();
                            try {
                                SetDateGridPicker();
                            } catch (e) {
                                //gcl(e.message);
                            }

                        } else {
                            jQuery("#src_tab1_1595057945_from").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595057945_to").addClass("hidden").removeAttr("data-type", stype);
                            jQuery("#src_tab1_1595057945_text").removeClass("hidden");
                            jQuery("#src_tab1_1595057945 .srcTextValue").show();
                            jQuery("#src_tab1_1595057945 .srcSelectValue").hide();
                        }
                        if (jQuery("#autosearch_tab1_1595057945").is(':checked')) {
                            Grid_tab1_1595057945_custom_reload();
                        }

                    }

                    function Grid_tab1_1595057945_download() {
                        var stype = jQuery("#src_tab1_1595057945 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595057945").jqGrid("getGridParam", "postData");
                        data.download_csv = true;
                        data.searchOper = "eq";
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595057945 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595057945_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595057945_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595057945 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595057945 .srcOptionList").val();
                        data._search = true;
                        data.searchString = (typeof(data.searchString) == "undefined") ? "" : data.searchString;
                        data.searchField = jQuery("#src_tab1_1595057945 .srcOptionList").val();
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
                        data.cols = "eyJpZCI6IiMiLCJjb250cm9sbGVyX3RpdGxlIjoiQ29udHJvbGxlciBUaXRsZSIsInRpdGxlIjoiUGFnZSBOYW1lIiwiUjEiOiJTdXBlciBBZG1pbiIsIlIzIjoiU3VwZXJ2aXNvciIsIlI0IjoiQWdlbnQifQ==";
                        data.filename = "download";
                        var durl = "https://demo.appsbd.com/support-system/admin/app-permission-data-center/role-access-list.html?" + serialize(data);
                        jQuery("#difrm").attr("src", durl);
                    }

                    function Grid_tab1_1595057945_custom_reload() {
                        var IsMultiSearch = false;
                        var data = jQuery("#tab1_1595057945").jqGrid("getGridParam", "postData");
                        data.first = true;
                        data.download_csv = false;
                        data.isMultiSearch = IsMultiSearch;
                        if (IsMultiSearch) {
                            data.ms = jQuery("#ms_tab1_1595057945").serialize();
                            try {
                                if (window.Base64) {
                                    data.ms = Base64.encode(data.ms);
                                }
                            } catch (e) {
                                app_grid_log(e.message);
                            }
                        }
                        jQuery("#tab1_1595057945").jqGrid("setGridParam", {
                            "postData": data
                        });
                        Grid_tab1_1595057945_reload();
                        sbtnclick_tab1_1595057945 = false;
                        //alert("Test");
                    }

                    function Grid_tab1_1595057945_reset_custom_reload() {
                        jQuery("#ms_tab1_1595057945")[0].reset();
                        Grid_tab1_1595057945_custom_reload();
                    }

                    function Grid_tab1_1595057945_advance_search() {
                        jQuery("#tab1_1595057945").jqGrid('searchGrid');
                        $("body > .ui-widget-overlay").prependTo(".gs-jq-grid ");
                        $("#searchhdfbox_tab1_1595057945").addClass("alert-info");
                        $("#searchmodfbox_tab1_1595057945").addClass("jqgrid-input");
                        $("#searchmodfbox_tab1_1595057945 .ui-jqdialog-title").html('<i class="fa fa-search"></i> Advance Search');
                        $("#searchmodfbox_tab1_1595057945").prependTo(".gs-jq-grid ").css("display", "block");




                    }

                    function Grid_tab1_1595057945_reload() {
                        var stype = jQuery("#src_tab1_1595057945 .srcOptionList option:selected").attr("stype");
                        var data = jQuery("#tab1_1595057945").jqGrid("getGridParam", "postData");
                        if (stype == "select") {
                            data.searchString = jQuery("#src_tab1_1595057945 .srcSelectValue").val();
                        } else if (stype == "date" || stype == "daterange") {
                            data.searchString = "" + jQuery("#src_tab1_1595057945_from .srcFrom").val();
                            data.toString = "" + jQuery("#src_tab1_1595057945_to .srcTo").val();
                            data.searchOper = "bt";
                        } else {
                            data.searchString = jQuery("#src_tab1_1595057945 .srcTextValue").val();
                            data.searchOper = "eq";
                        }
                        data.searchField = jQuery("#src_tab1_1595057945 .srcOptionList").val();
                        data._search = true;

                        jQuery("#tab1_1595057945").jqGrid("setGridParam", {
                            "postData": data
                        });
                        jQuery("#tab1_1595057945").trigger("reloadGrid");
                        data.first = false;
                        jQuery("#tab1_1595057945").jqGrid("setGridParam", {
                            "postData": data
                        });

                    }
                    var config_tab1_1595057945 = {
                        "IsCSVDownload": false,
                        "width": "auto",
                        "height": 540,
                        "url": "https:\/\/demo.appsbd.com\/support-system\/admin\/app-permission-data-center\/role-access-list.html",
                        "datatype": "json",
                        "colNames": ["Type", "#", "Controller Title", "Page Name", "Super Admin", "Supervisor", "Agent"],
                        "afterInsertRow": "",
                        "container": ".grid-body",
                        "multiselect": false,
                        "multisearch": false,
                        "ShowAdvanceSearch": false,
                        "isColumnChoseable": false,
                        "colModel": [{
                            "Title": "Type",
                            "objectName": null,
                            "width": null,
                            "name": "controller_title",
                            "index": "controller_title",
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
                                    "*": "All",
                                    "01. Admin Report": "01. Admin Report",
                                    "02. Admin Setting": "02. Admin Setting",
                                    "03. API Setting": "03. API Setting",
                                    "04. Payment List": "04. Payment List",
                                    "05. User Settings": "05. User Settings",
                                    "06. Ticket Feedback": "06. Ticket Feedback",
                                    "07. App Information": "07. App Information",
                                    "09. Announcements": "09. Announcements",
                                    "10. Ticket": "10. Ticket",
                                    "11. Knowledge": "11. Knowledge",
                                    "12. Category": "12. Category",
                                    "13. Canned Msg": "13. Canned Msg",
                                    "14. Client": "14. Client",
                                    "15. Message": "15. Message",
                                    "16.  System Message": "16.  System Message",
                                    "17. Ticket Assign Rule": "17. Ticket Assign Rule",
                                    "17. Web Chat": "17. Web Chat",
                                    "System Update": "System Update"
                                }
                            }
                        }, {
                            "Title": "#",
                            "objectName": null,
                            "width": 30,
                            "name": "id",
                            "index": "id",
                            "formater": "Grid_tab1_1595057945_formatter",
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
                            "Title": "Controller Title",
                            "objectName": null,
                            "width": 100,
                            "name": "controller_title",
                            "index": "controller_title",
                            "formater": "Grid_tab1_1595057945_formatter",
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
                            "Title": "Page Name",
                            "objectName": null,
                            "width": 160,
                            "name": "title",
                            "index": "title",
                            "formater": "Grid_tab1_1595057945_formatter",
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
                            "Title": "Super Admin",
                            "objectName": null,
                            "width": 130,
                            "name": "R1",
                            "index": "R1",
                            "formater": "Grid_tab1_1595057945_formatter",
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
                            "Title": "Supervisor",
                            "objectName": null,
                            "width": 130,
                            "name": "R3",
                            "index": "R3",
                            "formater": "Grid_tab1_1595057945_formatter",
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
                            "Title": "Agent",
                            "objectName": null,
                            "width": 130,
                            "name": "R4",
                            "index": "R4",
                            "formater": "Grid_tab1_1595057945_formatter",
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
                        "rowNum": 200,
                        "rowList": [5, 10, 20, 50, 100, 200],
                        "mtype": "POST",
                        "caption": "<\/span><span style=\"float: left;\" class=\"gridtitle left\"> <a onclick=\"Grid_tab1_1595057945_reload()\" class=\"btn btn-xs btn-primary\" ><i class=\"fa fa-refresh\"><\/i> Reload<\/a> <\/span><span class=\"gridtitle text-right \">&nbsp;<a id=\"a\" data-effect=\"mfp-move-from-top\" class=\"popupformWR btn btn-xs btn-danger\" href=\"https:\/\/demo.appsbd.com\/support-system\/admin\/app-permission\/reset-access.html\" ><i class=\"fa fa-retweet\"><\/i>Reset Role<\/a> <a id=\"a\" data-effect=\"mfp-move-from-top\" class=\"popupformWR btn btn-xs btn-warning\" href=\"https:\/\/demo.appsbd.com\/support-system\/admin\/app-permission\/copy-access.html\" ><i class=\"fa fa-retweet\"><\/i>Copy Role Access<\/a> <a id=\"b\" data-effect=\"mfp-move-from-top\" class=\"popupformWR btn btn-xs btn-info\" data-onclose=\"new_role_created\" href=\"https:\/\/demo.appsbd.com\/support-system\/admin\/app-permission\/role-add.html\" ><i class=\"fa fa-plus\"><\/i>Add New Role<\/a>  <span data-gridid=\"mc_tab1_1595057945\" class=\"full-screen btn btn-info btn-xs\"><i class=\"fa fa-expand \"><\/i><\/span> ",
                        "rownumbers": true,
                        "pager": "#pager_tab1_1595057945",
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
                        "TotalColumn": 6,
                        "isShowNoRecordMsg": true,
                        "IsColAutoWidth": false,
                        "minWidth": 200,
                        "rightPadding": 0,
                        "ShowReloadButtonInTitle": true,
                        "ShowDownloadButtonInBottom": false,
                        "ShowDownloadButtonInTitle": false,
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
                        "custom_hidden_fields": ["controller_title"],
                        "groupingView": {
                            "groupField": ["controller_title"],
                            "groupColumnShow": [false]
                        },
                        "grouping": true
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

                        config_tab1_1595057945.afterInsertRow = eval(config_tab1_1595057945.afterInsertRow);
                        try {
                            for (var i in config_tab1_1595057945.colModel) {
                                try {
                                    config_tab1_1595057945.colModel[i].cellattr = eval(config_tab1_1595057945.colModel[i].cellattr);
                                    try {
                                        if (!config_tab1_1595057945.colModel[i].hidden) {
                                            config_tab1_1595057945.visible_fields[(config_tab1_1595057945.colModel[i].index)] = config_tab1_1595057945.colModel[i].Title;
                                        }
                                    } catch (e) {}
                                } catch (e) {
                                    app_grid_log(e.message);
                                }

                            }
                        } catch (e) {
                            app_grid_log(e.message);
                        }

                        config_tab1_1595057945.loadComplete = function(e) {
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
                            tab1_1595057945_resize_height(e);
                            jQuery("#gview_tab1_1595057945 .ui-jqgrid-bdiv .gridnorecord").hide().remove();
                            if (jQuery("#tab1_1595057945").getGridParam("records") == 0) {
                                jQuery("#gview_tab1_1595057945 .ui-jqgrid-bdiv").append('<div class="gridnorecord" id="gridnorecord">' + jQuery("#tab1_1595057945").getGridParam("emptySetText") + '</div>');
                            }
                            try {
                                app_handle_grid_unauthorize(e, jQuery("#gview_tab1_1595057945 .ui-jqgrid-bdiv > .gridnorecord"));
                            } catch (e) {};
                        };
                        config_tab1_1595057945.ajaxGridOptions = {
                            //contentType: "application/json; charset=utf-8",
                            dataFilter: function(data, dataType) { // preprocess the data
                                //console.log(typeof data);
                                return data;

                            }
                        };
                        var isFirstLoaded_tab1_1595057945 = false;
                        tab1_1595057945_serialize = function(obj) {
                            var str = [];
                            for (var p in obj)
                                if (obj.hasOwnProperty(p)) {
                                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                                }
                            return str.join("&");
                        }
                        config_tab1_1595057945.beforeRequest = function() {
                            var data = jQuery("#tab1_1595057945").jqGrid("getGridParam", "postData");
                            //console.log(data);
                            // myGrid.setGridParam({sortname: ''})
                            if (data.sidx != "") {
                                try {
                                    var th_obj = $("#jqgh_tab1_1595057945_" + data.sidx);
                                    jQuery(".app-sorting").removeClass("app-sorting");
                                    th_obj.addClass("app-sorting");
                                    jQuery(".tab1_1595057945-rm-srt").remove();
                                    var rmicon = jQuery('<i class="tab1_1595057945-rm-srt grid-reset-sort-btn fa fa-times-circle tooltip2" data-tooltip-position="top" title="Remove Sorting"></i>');
                                    rmicon.click(function(e) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                        tab1_1595057945_reset_sorting();
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
                            jQuery("#tab1_1595057945").jqGrid("setGridParam", {
                                "postData": data
                            });
                            return true;
                        };

                        config_tab1_1595057945.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595057945.onSelectAll = function(aRowids, status) {

                        }
                        config_tab1_1595057945.onInitGrid = function() {
                            //This event does not raised.
                            try {
                                jQuery("#jqgh_tab1_1595057945_controller_title").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595057945_id").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595057945_controller_title").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595057945_title").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595057945_R1").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595057945_R3").addClass("no-hand-css");
                                jQuery("#jqgh_tab1_1595057945_R4").addClass("no-hand-css");
                            } catch (e) {}
                        }

                        if (config_tab1_1595057945.width == "auto") {
                            config_tab1_1595057945.width = jQuery(".grid-body").width();
                            if (config_tab1_1595057945.width < minwidth_tab1_1595057945) {
                                config_tab1_1595057945.width = minwidth_tab1_1595057945;
                            }
                            config_tab1_1595057945.width -= 0;
                        }
                        tab1_1595057945_init_grid();
                    });

                    function check_all_visible_tab1_1595057945() {
                        return;
                        try {
                            var cols_hidden = localStorage.getItem("ag_befab5e6");
                            if (cols_hidden) {
                                cols_hidden = JSON.parse(cols_hidden);
                                if (typeof cols_hidden == "object") {
                                    config_tab1_1595057945.custom_hidden_fields = cols_hidden;
                                }
                            } else {
                                localStorage.setItem("ag_befab5e6", JSON.stringify(config_tab1_1595057945.custom_hidden_fields));
                            }
                        } catch (e) {

                        }
                        var models = config_tab1_1595057945.colModel;
                        var $searchOnly = ["controller_title"];
                        for (var i in models) {
                            var isChecked = check_visible_tab1_1595057945(models[i].index);
                            if ($searchOnly.indexOf(models[i].index) > -1) {
                                continue;
                            }
                            if (models[i].Title) {
                                append_into_checklist_tab1_1595057945(models[i].index, models[i].Title, isChecked);
                                if (isChecked) {
                                    jQuery("#tab1_1595057945").showCol(models[i].index);
                                }
                            }
                        }

                    }

                    function check_visible_tab1_1595057945(index) {
                        var custom_visible = config_tab1_1595057945.custom_hidden_fields;
                        if (custom_visible.indexOf(index) > -1) {
                            return false;
                        }
                        return true;
                    }

                    function show_coll_tab1_1595057945(index) {
                        if (config_tab1_1595057945.custom_hidden_fields.indexOf(index) > -1) {
                            jQuery("#tab1_1595057945").hideCol(index);
                            return;
                        }
                        jQuery("#tab1_1595057945").showCol(index);
                    }

                    function set_unset_key_tab1_1595057945(index, isSet) {

                        if (isSet) {
                            if (config_tab1_1595057945.custom_hidden_fields.indexOf(index) > -1) {
                                return;
                            }
                            config_tab1_1595057945.custom_hidden_fields.push(index);
                        } else {
                            var aind = config_tab1_1595057945.custom_hidden_fields.indexOf(index)
                            if (aind !== -1) {
                                config_tab1_1595057945.custom_hidden_fields.splice(aind, 1);
                            }
                        }


                    }

                    function append_into_checklist_tab1_1595057945(index, title, isChecked) {
                        jQuery("#mc_tab1_1595057945 .ag_column-choose > .ag-column-container").append('<label class="cl-chose-input"> <input data-cl-key="' + index + '" type="checkbox" ' + (isChecked ? "checked" : "") + '> ' + title + '</label>');

                    }

                    function tab1_1595057945_init_grid() {
                        if (is_init_tab1_1595057945) {
                            return;
                        }
                        is_init_tab1_1595057945 = true;
                        jQuery("#tab1_1595057945").jqGrid(config_tab1_1595057945);
                        check_all_visible_tab1_1595057945();
                        jQuery("#tab1_1595057945").jqGrid('navGrid', '#pager_tab1_1595057945', {
                            edit: false,
                            add: false,
                            del: false,
                            search: false,
                            reloadtext: "Reload",
                            searchtext: " Search&nbsp;"
                        }, {}, {}, {}, {
                            sopt: ['cn', 'bw', 'eq', 'ne', 'lt', 'gt', 'ew']
                        });
                        $("#pager_tab1_1595057945").after(jQuery("#alertmod_tab1_1595057945"));


                        jQuery(window).bind('resize', function() {
                            tab1_1595057945_ResizeGrid();
                            setTimeout(tab1_1595057945_ResizeGrid, 500);
                        }).trigger('resize');
                        try {
                            jQuery('body').resize(function() {
                                tab1_1595057945_ResizeGrid();
                                setTimeout(tab1_1595057945_ResizeGrid, 500);
                            });
                        } catch (e) {}
                        try {
                            AddOnPageResize(tab1_1595057945_ResizeGrid);
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
                            applyClassesToHeaders(jQuery("#tab1_1595057945"));
                        } catch (e) {}




                    }

                    function tab1_1595057945_resize_height(e) {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        try {
                            if (config_tab1_1595057945.height == "auto") {
                                return;
                            }
                            var data = config_tab1_1595057945.auto_height_records;
                            if (e.records < data) {
                                jQuery("#tab1_1595057945").setGridHeight('auto');
                            } else {
                                jQuery("#tab1_1595057945").setGridHeight(config_tab1_1595057945.height);
                            }
                            //app_grid_log(config_tab1_1595057945.height);
                        } catch (e) {}
                    }

                    function tab1_1595057945_reset_sorting() {

                        var myGrid = jQuery("#tab1_1595057945");
                        $("span.s-ico", myGrid[0].grid.hDiv).hide(); // hide sort icons
                        myGrid.setGridParam({
                            sortname: ''
                        }).trigger('reloadGrid');

                    }

                    function tab1_1595057945_ResizeGrid() {
                        if (jQuery(".grid-body").hasClass('grid-full-screen')) {
                            return;
                        }
                        var c_minwidth_tab1_1595057945 = jQuery(".grid-body").width();
                        if (c_minwidth_tab1_1595057945 <= minwidth_tab1_1595057945) {
                            c_minwidth_tab1_1595057945 = minwidth_tab1_1595057945;
                        }
                        c_minwidth_tab1_1595057945 -= 5;
                        jQuery("#tab1_1595057945").setGridWidth(c_minwidth_tab1_1595057945);
                        var windowWidth = jQuery(window).width();


                        if (windowWidth < 768) {} else {}
                        if (windowWidth < 991) {

                        } else {

                        }


                    }
                </script>
                <div id="mc_tab1_1595057945" class="gs-jq-grid " data-unique-id="ag_befab5e6">
                    <div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_tab1_1595057945" dir="ltr" style="width: 1064px;">
                        <div class="ui-widget-overlay jqgrid-overlay" id="lui_tab1_1595057945"></div>
                        <div class="loading ui-state-default ui-state-active" id="load_tab1_1595057945" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Loading...</div>
                        <div class="ui-jqgrid-view" id="gview_tab1_1595057945" style="width: 1064px;">
                            <div class="ui-jqgrid-titlebar ui-jqgrid-caption ui-widget-header ui-corner-top ui-helper-clearfix"><a role="link" class="ui-jqgrid-titlebar-close ui-corner-all HeaderButton" style="right: 0px;"><span class="ui-icon ui-icon-circle-triangle-n"></span></a><span class="ui-jqgrid-title"></span><span style="float: left;" class="gridtitle left"> <a onclick="Grid_tab1_1595057945_reload()" class="btn btn-xs btn-primary added-ripples"><i class="fa fa-refresh"></i> Reload</a> </span><span class="gridtitle text-right ">&nbsp;<a id="a" data-effect="mfp-move-from-top" class="popupformWR btn btn-xs btn-danger added-ripples apopf" href="https://demo.appsbd.com/support-system/admin/app-permission/reset-access.html"><i class="fa fa-retweet"></i>Reset Role</a> <a id="a" data-effect="mfp-move-from-top" class="popupformWR btn btn-xs btn-warning added-ripples apopf" href="https://demo.appsbd.com/support-system/admin/app-permission/copy-access.html"><i class="fa fa-retweet"></i>Copy Role Access</a> <a id="b" data-effect="mfp-move-from-top" class="popupformWR btn btn-xs btn-info added-ripples apopf" data-onclose="new_role_created" href="https://demo.appsbd.com/support-system/admin/app-permission/role-add.html"><i class="fa fa-plus"></i>Add New Role</a> <span data-gridid="mc_tab1_1595057945" class="full-screen btn btn-info btn-xs added-ripples"><i class="fa fa-expand "></i></span> </span></div>
                            <div class="ui-state-default ui-jqgrid-hdiv" style="width: 1064px;">
                                <div class="ui-jqgrid-hbox">
                                    <table class="ui-jqgrid-htable" style="width: 1046px;" role="grid" aria-labelledby="gbox_tab1_1595057945" cellspacing="0" cellpadding="0" border="0">
                                        <thead>
                                            <tr class="ui-jqgrid-labels" role="rowheader">
                                                <th id="tab1_1595057945_controller_title" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 150px; display: none;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595057945_controller_title" class="ui-jqgrid-sortable no-hand-css">Type<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595057945_id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 53px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595057945_id" class="ui-jqgrid-sortable no-hand-css">#<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595057945_controller_title" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 153px; display: none;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595057945_controller_title" class="ui-jqgrid-sortable">Controller Title<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595057945_title" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 282px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595057945_title" class="ui-jqgrid-sortable no-hand-css">Page Name<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595057945_R1" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 229px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595057945_R1" class="ui-jqgrid-sortable no-hand-css">Super Admin<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595057945_R3" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 229px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595057945_R3" class="ui-jqgrid-sortable no-hand-css">Supervisor<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                                <th id="tab1_1595057945_R4" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 228px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
                                                    <div id="jqgh_tab1_1595057945_R4" class="ui-jqgrid-sortable no-hand-css">Agent<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="ui-jqgrid-bdiv" style="height: 540px; width: 1064px;">
                                <div style="position:relative;">
                                    <div></div>
                                    <table id="tab1_1595057945" tabindex="0" cellspacing="0" cellpadding="0" border="0" role="grid" aria-multiselectable="false" aria-labelledby="gbox_tab1_1595057945" class="ui-jqgrid-btable" style="width: 1046px;">
                                        <tbody>
                                            <tr class="jqgfirstrow" role="row" style="height:auto">
                                                <td role="gridcell" style="height:0px;width:150px;display:none;"></td>
                                                <td role="gridcell" style="height: 0px; width: 53px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 153px; display: none;"></td>
                                                <td role="gridcell" style="height: 0px; width: 282px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 229px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 229px;"></td>
                                                <td role="gridcell" style="height: 0px; width: 228px;"></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_0" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_0');return false;"></span>01. Admin Report</td>
                                            </tr>
                                            <tr role="row" id="1" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="01. Admin Report" aria-describedby="tab1_1595057945_controller_title">01. Admin Report</td>
                                                <td role="gridcell" style="text-align:left;" title="1" aria-describedby="tab1_1595057945_id">1</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="01. Admin Report" aria-describedby="tab1_1595057945_controller_title">01. Admin Report</td>
                                                <td role="gridcell" style="text-align:left;" title="Admin Dashboard" aria-describedby="tab1_1595057945_title">Admin Dashboard</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GJ/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GJ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_1" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_1');return false;"></span>02. Admin Setting</td>
                                            </tr>
                                            <tr role="row" id="2" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="2" aria-describedby="tab1_1595057945_id">2</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="General Settings" aria-describedby="tab1_1595057945_title">General Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BK/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BK/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="3" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="3" aria-describedby="tab1_1595057945_id">3</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="General" aria-describedby="tab1_1595057945_title">General</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BL/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BL/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="4" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="4" aria-describedby="tab1_1595057945_id">4</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Modify" aria-describedby="tab1_1595057945_title">Modify</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BO/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BO/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="5" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="5" aria-describedby="tab1_1595057945_id">5</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Custom Field List" aria-describedby="tab1_1595057945_title">Custom Field List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BS/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BS/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="6" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="6" aria-describedby="tab1_1595057945_id">6</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="New Custom Field" aria-describedby="tab1_1595057945_title">New Custom Field</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BT/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BT/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="7" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="7" aria-describedby="tab1_1595057945_id">7</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Custom Field" aria-describedby="tab1_1595057945_title">Edit Custom Field</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BU/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BU/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="8" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="8" aria-describedby="tab1_1595057945_id">8</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Status Change" aria-describedby="tab1_1595057945_title">Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BX/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BX/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="9" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="9" aria-describedby="tab1_1595057945_id">9</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Custom Field Delete" aria-describedby="tab1_1595057945_title">Custom Field Delete</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BZ/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BZ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="10" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="10" aria-describedby="tab1_1595057945_id">10</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Email To Ticket Settings" aria-describedby="tab1_1595057945_title">Email To Ticket Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CY/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CY/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="11" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="11" aria-describedby="tab1_1595057945_id">11</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Email Templates List" aria-describedby="tab1_1595057945_title">Email Templates List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DA/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DA/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="12" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="12" aria-describedby="tab1_1595057945_id">12</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Update Email Template" aria-describedby="tab1_1595057945_title">Update Email Template</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DB/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DB/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="13" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="13" aria-describedby="tab1_1595057945_id">13</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Status Change" aria-describedby="tab1_1595057945_title">Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DC/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DC/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="14" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="14" aria-describedby="tab1_1595057945_id">14</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Email Outgoing Settings" aria-describedby="tab1_1595057945_title">Email Outgoing Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DF/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DF/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="15" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="15" aria-describedby="tab1_1595057945_id">15</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Menu List" aria-describedby="tab1_1595057945_title">Menu List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DV/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DV/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="16" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="16" aria-describedby="tab1_1595057945_id">16</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="New Menu" aria-describedby="tab1_1595057945_title">New Menu</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DW/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DW/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="17" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="17" aria-describedby="tab1_1595057945_id">17</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Menu Status Change" aria-describedby="tab1_1595057945_title">Menu Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DX/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DX/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="18" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="18" aria-describedby="tab1_1595057945_id">18</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Menu" aria-describedby="tab1_1595057945_title">Edit Menu</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DY/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DY/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="19" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="19" aria-describedby="tab1_1595057945_id">19</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Menu Delete" aria-describedby="tab1_1595057945_title">Menu Delete</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DZ/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DZ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="20" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="20" aria-describedby="tab1_1595057945_id">20</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="New Window Status Change" aria-describedby="tab1_1595057945_title">New Window Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EA/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EA/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="21" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="21" aria-describedby="tab1_1595057945_id">21</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Topbar Icon List" aria-describedby="tab1_1595057945_title">Topbar Icon List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EB/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EB/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="22" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="22" aria-describedby="tab1_1595057945_id">22</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="New Topbar Icon" aria-describedby="tab1_1595057945_title">New Topbar Icon</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EC/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EC/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="23" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="23" aria-describedby="tab1_1595057945_id">23</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Topbar Icon Delete" aria-describedby="tab1_1595057945_title">Topbar Icon Delete</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ED/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ED/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="24" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="24" aria-describedby="tab1_1595057945_id">24</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Topbar Icon Status Change" aria-describedby="tab1_1595057945_title">Topbar Icon Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EE/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EE/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="25" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="25" aria-describedby="tab1_1595057945_id">25</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Topbar Icon" aria-describedby="tab1_1595057945_title">Edit Topbar Icon</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EF/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EF/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="26" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="26" aria-describedby="tab1_1595057945_id">26</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="IP List" aria-describedby="tab1_1595057945_title">IP List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EI/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EI/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="27" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="27" aria-describedby="tab1_1595057945_id">27</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="New IP Entry" aria-describedby="tab1_1595057945_title">New IP Entry</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EJ/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EJ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="28" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="28" aria-describedby="tab1_1595057945_id">28</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Security Settings" aria-describedby="tab1_1595057945_title">Security Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EP/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EP/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="29" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="29" aria-describedby="tab1_1595057945_id">29</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Modify Security" aria-describedby="tab1_1595057945_title">Modify Security</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EQ/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EQ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="30" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="30" aria-describedby="tab1_1595057945_id">30</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Locked User List" aria-describedby="tab1_1595057945_title">Locked User List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ER/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ER/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="31" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="31" aria-describedby="tab1_1595057945_id">31</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Unlock Admin User" aria-describedby="tab1_1595057945_title">Unlock Admin User</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ES/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ES/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="32" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="32" aria-describedby="tab1_1595057945_id">32</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit IP" aria-describedby="tab1_1595057945_title">Edit IP</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ET/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ET/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="33" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="33" aria-describedby="tab1_1595057945_id">33</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Block IP Reset" aria-describedby="tab1_1595057945_title">Block IP Reset</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EU/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EU/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="34" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="34" aria-describedby="tab1_1595057945_id">34</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Theme Settings" aria-describedby="tab1_1595057945_title">Theme Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FT/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FT/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="35" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="35" aria-describedby="tab1_1595057945_id">35</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Modify Theme" aria-describedby="tab1_1595057945_title">Modify Theme</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FU/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FU/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="36" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="36" aria-describedby="tab1_1595057945_id">36</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Admin Notification Settings" aria-describedby="tab1_1595057945_title">Admin Notification Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GW/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GW/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="37" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="37" aria-describedby="tab1_1595057945_id">37</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Chat Settings" aria-describedby="tab1_1595057945_title">Chat Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HU/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HU/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="38" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="38" aria-describedby="tab1_1595057945_id">38</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Page List" aria-describedby="tab1_1595057945_title">Page List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IS/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IS/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="39" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="39" aria-describedby="tab1_1595057945_id">39</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="New Page" aria-describedby="tab1_1595057945_title">New Page</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IT/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IT/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="40" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="40" aria-describedby="tab1_1595057945_id">40</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting" aria-describedby="tab1_1595057945_controller_title">02. Admin Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Page" aria-describedby="tab1_1595057945_title">Edit Page</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IU/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IU/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_2" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_2');return false;"></span>03. API Setting</td>
                                            </tr>
                                            <tr role="row" id="41" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="41" aria-describedby="tab1_1595057945_id">41</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Other API Settings" aria-describedby="tab1_1595057945_title">Other API Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BR/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BR/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="42" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="42" aria-describedby="tab1_1595057945_id">42</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Paypal Settings" aria-describedby="tab1_1595057945_title">Paypal Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CU/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CU/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="43" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="43" aria-describedby="tab1_1595057945_id">43</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Social Settings" aria-describedby="tab1_1595057945_title">Social Settings</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CW/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CW/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="44" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="44" aria-describedby="tab1_1595057945_id">44</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Remote Login List" aria-describedby="tab1_1595057945_title">Remote Login List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IL/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IL/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="45" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="45" aria-describedby="tab1_1595057945_id">45</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="New Remote Login" aria-describedby="tab1_1595057945_title">New Remote Login</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IM/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IM/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="46" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="46" aria-describedby="tab1_1595057945_id">46</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Remote Login" aria-describedby="tab1_1595057945_title">Edit Remote Login</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IN/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IN/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="47" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="47" aria-describedby="tab1_1595057945_id">47</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Delete Remote Login" aria-describedby="tab1_1595057945_title">Delete Remote Login</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IO/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IO/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="48" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="48" aria-describedby="tab1_1595057945_id">48</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting" aria-describedby="tab1_1595057945_controller_title">03. API Setting</td>
                                                <td role="gridcell" style="text-align:left;" title="Remote Login Status Change" aria-describedby="tab1_1595057945_title">Remote Login Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IP/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IP/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_3" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_3');return false;"></span>04. Payment List</td>
                                            </tr>
                                            <tr role="row" id="49" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="04. Payment List" aria-describedby="tab1_1595057945_controller_title">04. Payment List</td>
                                                <td role="gridcell" style="text-align:left;" title="49" aria-describedby="tab1_1595057945_id">49</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="04. Payment List" aria-describedby="tab1_1595057945_controller_title">04. Payment List</td>
                                                <td role="gridcell" style="text-align:left;" title="Ticket Payment List" aria-describedby="tab1_1595057945_title">Ticket Payment List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GL/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GL/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="50" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="04. Payment List" aria-describedby="tab1_1595057945_controller_title">04. Payment List</td>
                                                <td role="gridcell" style="text-align:left;" title="50" aria-describedby="tab1_1595057945_id">50</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="04. Payment List" aria-describedby="tab1_1595057945_controller_title">04. Payment List</td>
                                                <td role="gridcell" style="text-align:left;" title="Ticket Payment Details" aria-describedby="tab1_1595057945_title">Ticket Payment Details</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GM/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GM/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_4" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_4');return false;"></span>05. User Settings</td>
                                            </tr>
                                            <tr role="row" id="51" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="51" aria-describedby="tab1_1595057945_id">51</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Role  List" aria-describedby="tab1_1595057945_title">Role List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AA/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AA/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="52" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="52" aria-describedby="tab1_1595057945_id">52</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Role Access" aria-describedby="tab1_1595057945_title">Role Access</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AB/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AB/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="53" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="53" aria-describedby="tab1_1595057945_id">53</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="New Role" aria-describedby="tab1_1595057945_title">New Role</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AC/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AC/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="54" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="54" aria-describedby="tab1_1595057945_id">54</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Role" aria-describedby="tab1_1595057945_title">Edit Role</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AD/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AD/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="55" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="55" aria-describedby="tab1_1595057945_id">55</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Change Role Access" aria-describedby="tab1_1595057945_title">Change Role Access</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AE/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AE/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="56" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="56" aria-describedby="tab1_1595057945_id">56</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="User List" aria-describedby="tab1_1595057945_title">User List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AI/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AI/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="57" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="57" aria-describedby="tab1_1595057945_id">57</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Update User" aria-describedby="tab1_1595057945_title">Update User</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AK/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AK/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="58" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="58" aria-describedby="tab1_1595057945_id">58</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Role Delete" aria-describedby="tab1_1595057945_title">Role Delete</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AT/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AT/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="59" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="59" aria-describedby="tab1_1595057945_id">59</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Change User Status" aria-describedby="tab1_1595057945_title">Change User Status</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FK/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FK/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="60" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="60" aria-describedby="tab1_1595057945_id">60</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Reset User Pass" aria-describedby="tab1_1595057945_title">Reset User Pass</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FL/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FL/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="61" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="61" aria-describedby="tab1_1595057945_id">61</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Copy Role Access" aria-describedby="tab1_1595057945_title">Copy Role Access</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GQ/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GQ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="62" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="62" aria-describedby="tab1_1595057945_id">62</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Reset Role Access" aria-describedby="tab1_1595057945_title">Reset Role Access</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GR/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GR/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="63" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="63" aria-describedby="tab1_1595057945_id">63</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings" aria-describedby="tab1_1595057945_controller_title">05. User Settings</td>
                                                <td role="gridcell" style="text-align:left;" title="Archive User" aria-describedby="tab1_1595057945_title">Archive User</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HI/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HI/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_5" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_5');return false;"></span>06. Ticket Feedback</td>
                                            </tr>
                                            <tr role="row" id="64" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="06. Ticket Feedback" aria-describedby="tab1_1595057945_controller_title">06. Ticket Feedback</td>
                                                <td role="gridcell" style="text-align:left;" title="64" aria-describedby="tab1_1595057945_id">64</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="06. Ticket Feedback" aria-describedby="tab1_1595057945_controller_title">06. Ticket Feedback</td>
                                                <td role="gridcell" style="text-align:left;" title="Ticket Feedback List" aria-describedby="tab1_1595057945_title">Ticket Feedback List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GN/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GN/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_6" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_6');return false;"></span>07. App Information</td>
                                            </tr>
                                            <tr role="row" id="65" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="65" aria-describedby="tab1_1595057945_id">65</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="Debug Log List" aria-describedby="tab1_1595057945_title">Debug Log List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DG/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DG/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="66" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="66" aria-describedby="tab1_1595057945_id">66</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="Details Debug Log" aria-describedby="tab1_1595057945_title">Details Debug Log</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DH/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DH/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="67" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="67" aria-describedby="tab1_1595057945_id">67</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="Application Update Info" aria-describedby="tab1_1595057945_title">Application Update Info</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DN/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DN/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="68" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="68" aria-describedby="tab1_1595057945_id">68</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="License Details" aria-describedby="tab1_1595057945_title">License Details</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DO/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DO/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="69" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="69" aria-describedby="tab1_1595057945_id">69</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="Remove License Button" aria-describedby="tab1_1595057945_title">Remove License Button</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DQ/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DQ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="70" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="70" aria-describedby="tab1_1595057945_id">70</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="07. App Information" aria-describedby="tab1_1595057945_controller_title">07. App Information</td>
                                                <td role="gridcell" style="text-align:left;" title="Application Update Process" aria-describedby="tab1_1595057945_title">Application Update Process</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FM/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FM/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_7" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_7');return false;"></span>09. Announcements</td>
                                            </tr>
                                            <tr role="row" id="71" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="09. Announcements" aria-describedby="tab1_1595057945_controller_title">09. Announcements</td>
                                                <td role="gridcell" style="text-align:left;" title="71" aria-describedby="tab1_1595057945_id">71</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="09. Announcements" aria-describedby="tab1_1595057945_controller_title">09. Announcements</td>
                                                <td role="gridcell" style="text-align:left;" title="Announcements List" aria-describedby="tab1_1595057945_title">Announcements List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EX/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EX/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="72" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="09. Announcements" aria-describedby="tab1_1595057945_controller_title">09. Announcements</td>
                                                <td role="gridcell" style="text-align:left;" title="72" aria-describedby="tab1_1595057945_id">72</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="09. Announcements" aria-describedby="tab1_1595057945_controller_title">09. Announcements</td>
                                                <td role="gridcell" style="text-align:left;" title="New Announcements" aria-describedby="tab1_1595057945_title">New Announcements</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EY/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EY/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="73" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="09. Announcements" aria-describedby="tab1_1595057945_controller_title">09. Announcements</td>
                                                <td role="gridcell" style="text-align:left;" title="73" aria-describedby="tab1_1595057945_id">73</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="09. Announcements" aria-describedby="tab1_1595057945_controller_title">09. Announcements</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Announcements" aria-describedby="tab1_1595057945_title">Edit Announcements</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EZ/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EZ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="74" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="09. Announcements" aria-describedby="tab1_1595057945_controller_title">09. Announcements</td>
                                                <td role="gridcell" style="text-align:left;" title="74" aria-describedby="tab1_1595057945_id">74</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="09. Announcements" aria-describedby="tab1_1595057945_controller_title">09. Announcements</td>
                                                <td role="gridcell" style="text-align:left;" title="Announcements Status Change" aria-describedby="tab1_1595057945_title">Announcements Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FE/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FE/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_8" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_8');return false;"></span>10. Ticket</td>
                                            </tr>
                                            <tr role="row" id="75" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="75" aria-describedby="tab1_1595057945_id">75</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="Ticket List" aria-describedby="tab1_1595057945_title">Ticket List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AR/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AR/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="76" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="76" aria-describedby="tab1_1595057945_id">76</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="Ticket Delete" aria-describedby="tab1_1595057945_title">Ticket Delete</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CQ/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CQ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="77" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="77" aria-describedby="tab1_1595057945_id">77</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="Closed Ticket List" aria-describedby="tab1_1595057945_title">Closed Ticket List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CR/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CR/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="78" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="78" aria-describedby="tab1_1595057945_id">78</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="Assign Ticket" aria-describedby="tab1_1595057945_title">Assign Ticket</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CS/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CS/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="79" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="79" aria-describedby="tab1_1595057945_id">79</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="Assign Me" aria-describedby="tab1_1595057945_title">Assign Me</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CT/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CT/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="80" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="80" aria-describedby="tab1_1595057945_id">80</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="Ticket Reply" aria-describedby="tab1_1595057945_title">Ticket Reply</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DS/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DS/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="81" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="81" aria-describedby="tab1_1595057945_id">81</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="Re Open" aria-describedby="tab1_1595057945_title">Re Open</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FQ/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FQ/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="82" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="82" aria-describedby="tab1_1595057945_id">82</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="All Paid Ticket" aria-describedby="tab1_1595057945_title">All Paid Ticket</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GA/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GA/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="83" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="83" aria-describedby="tab1_1595057945_id">83</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket" aria-describedby="tab1_1595057945_controller_title">10. Ticket</td>
                                                <td role="gridcell" style="text-align:left;" title="Admin Ticket Creation" aria-describedby="tab1_1595057945_title">Admin Ticket Creation</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IC/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IC/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_9" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_9');return false;"></span>11. Knowledge</td>
                                            </tr>
                                            <tr role="row" id="84" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="84" aria-describedby="tab1_1595057945_id">84</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="Knowledge List" aria-describedby="tab1_1595057945_title">Knowledge List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AP/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AP/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="85" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="85" aria-describedby="tab1_1595057945_id">85</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="New Knowledge" aria-describedby="tab1_1595057945_title">New Knowledge</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AQ/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AQ/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="86" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="86" aria-describedby="tab1_1595057945_id">86</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Knowledge" aria-describedby="tab1_1595057945_title">Edit Knowledge</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AU/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AU/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="87" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="87" aria-describedby="tab1_1595057945_id">87</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="Status Change" aria-describedby="tab1_1595057945_title">Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AV/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AV/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="88" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="88" aria-describedby="tab1_1595057945_id">88</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="Is Stickey/Pinned Status Change" aria-describedby="tab1_1595057945_title">Is Stickey/Pinned Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GT/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GT/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="89" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="89" aria-describedby="tab1_1595057945_id">89</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge" aria-describedby="tab1_1595057945_controller_title">11. Knowledge</td>
                                                <td role="gridcell" style="text-align:left;" title="Delete Attach File" aria-describedby="tab1_1595057945_title">Delete Attach File</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HY/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HY/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_10" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_10');return false;"></span>12. Category</td>
                                            </tr>
                                            <tr role="row" id="90" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="90" aria-describedby="tab1_1595057945_id">90</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="Category List" aria-describedby="tab1_1595057945_title">Category List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AL/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AL/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="91" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="91" aria-describedby="tab1_1595057945_id">91</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="New Category" aria-describedby="tab1_1595057945_title">New Category</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AM/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AM/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="92" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="92" aria-describedby="tab1_1595057945_id">92</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Category" aria-describedby="tab1_1595057945_title">Edit Category</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AN/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AN/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="93" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="93" aria-describedby="tab1_1595057945_id">93</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="Status Change" aria-describedby="tab1_1595057945_title">Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AO/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AO/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="94" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="94" aria-describedby="tab1_1595057945_id">94</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="12. Category" aria-describedby="tab1_1595057945_controller_title">12. Category</td>
                                                <td role="gridcell" style="text-align:left;" title="Category Delete" aria-describedby="tab1_1595057945_title">Category Delete</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CA/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CA/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_11" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_11');return false;"></span>13. Canned Msg</td>
                                            </tr>
                                            <tr role="row" id="95" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="95" aria-describedby="tab1_1595057945_id">95</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="Canned Msg List" aria-describedby="tab1_1595057945_title">Canned Msg List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GF/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GF/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="96" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="96" aria-describedby="tab1_1595057945_id">96</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="New Canned Msg" aria-describedby="tab1_1595057945_title">New Canned Msg</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GG/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GG/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="97" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="97" aria-describedby="tab1_1595057945_id">97</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Canned Message" aria-describedby="tab1_1595057945_title">Edit Canned Message</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GH/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GH/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="98" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="98" aria-describedby="tab1_1595057945_id">98</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="Canned Msg Delete" aria-describedby="tab1_1595057945_title">Canned Msg Delete</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GI/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GI/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="99" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="99" aria-describedby="tab1_1595057945_id">99</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg" aria-describedby="tab1_1595057945_controller_title">13. Canned Msg</td>
                                                <td role="gridcell" style="text-align:left;" title="Status Change" aria-describedby="tab1_1595057945_title">Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GV/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GV/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_12" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_12');return false;"></span>14. Client</td>
                                            </tr>
                                            <tr role="row" id="100" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="14. Client" aria-describedby="tab1_1595057945_controller_title">14. Client</td>
                                                <td role="gridcell" style="text-align:left;" title="100" aria-describedby="tab1_1595057945_id">100</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="14. Client" aria-describedby="tab1_1595057945_controller_title">14. Client</td>
                                                <td role="gridcell" style="text-align:left;" title="Client List" aria-describedby="tab1_1595057945_title">Client List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BH/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BH/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr role="row" id="101" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="14. Client" aria-describedby="tab1_1595057945_controller_title">14. Client</td>
                                                <td role="gridcell" style="text-align:left;" title="101" aria-describedby="tab1_1595057945_id">101</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="14. Client" aria-describedby="tab1_1595057945_controller_title">14. Client</td>
                                                <td role="gridcell" style="text-align:left;" title="New Client" aria-describedby="tab1_1595057945_title">New Client</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BI/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BI/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="102" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="14. Client" aria-describedby="tab1_1595057945_controller_title">14. Client</td>
                                                <td role="gridcell" style="text-align:left;" title="102" aria-describedby="tab1_1595057945_id">102</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="14. Client" aria-describedby="tab1_1595057945_controller_title">14. Client</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Client" aria-describedby="tab1_1595057945_title">Edit Client</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DJ/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DJ/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="103" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="14. Client" aria-describedby="tab1_1595057945_controller_title">14. Client</td>
                                                <td role="gridcell" style="text-align:left;" title="103" aria-describedby="tab1_1595057945_id">103</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="14. Client" aria-describedby="tab1_1595057945_controller_title">14. Client</td>
                                                <td role="gridcell" style="text-align:left;" title="Reset User Pass" aria-describedby="tab1_1595057945_title">Reset User Pass</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HV/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HV/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_13" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_13');return false;"></span>15. Message</td>
                                            </tr>
                                            <tr role="row" id="104" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="15. Message" aria-describedby="tab1_1595057945_controller_title">15. Message</td>
                                                <td role="gridcell" style="text-align:left;" title="104" aria-describedby="tab1_1595057945_id">104</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="15. Message" aria-describedby="tab1_1595057945_controller_title">15. Message</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Admin Message" aria-describedby="tab1_1595057945_title">Edit Admin Message</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FD/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FD/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_14" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_14');return false;"></span>16. System Message</td>
                                            </tr>
                                            <tr role="row" id="105" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="16.  System Message" aria-describedby="tab1_1595057945_controller_title">16. System Message</td>
                                                <td role="gridcell" style="text-align:left;" title="105" aria-describedby="tab1_1595057945_id">105</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="16.  System Message" aria-describedby="tab1_1595057945_controller_title">16. System Message</td>
                                                <td role="gridcell" style="text-align:left;" title="System Message Dismiss" aria-describedby="tab1_1595057945_title">System Message Dismiss</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EV/rid/R3.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EV/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_15" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_15');return false;"></span>17. Ticket Assign Rule</td>
                                            </tr>
                                            <tr role="row" id="106" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="106" aria-describedby="tab1_1595057945_id">106</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="Ticket Assign Rule List" aria-describedby="tab1_1595057945_title">Ticket Assign Rule List</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ID/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ID/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="107" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="107" aria-describedby="tab1_1595057945_id">107</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="Edit Ticket Assign Rule" aria-describedby="tab1_1595057945_title">Edit Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IE/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IE/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="108" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="108" aria-describedby="tab1_1595057945_id">108</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="New Ticket Assign Rule" aria-describedby="tab1_1595057945_title">New Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IF/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IF/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="109" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="109" aria-describedby="tab1_1595057945_id">109</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IG/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IG/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr role="row" id="110" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="110" aria-describedby="tab1_1595057945_id">110</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule" aria-describedby="tab1_1595057945_controller_title">17. Ticket Assign Rule</td>
                                                <td role="gridcell" style="text-align:left;" title="Status Change" aria-describedby="tab1_1595057945_title">Status Change</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IH/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IH/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_16" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_16');return false;"></span>17. Web Chat</td>
                                            </tr>
                                            <tr role="row" id="111" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="17. Web Chat" aria-describedby="tab1_1595057945_controller_title">17. Web Chat</td>
                                                <td role="gridcell" style="text-align:left;" title="111" aria-describedby="tab1_1595057945_id">111</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="17. Web Chat" aria-describedby="tab1_1595057945_controller_title">17. Web Chat</td>
                                                <td role="gridcell" style="text-align:left;" title="WebChat Panel" aria-describedby="tab1_1595057945_title">WebChat Panel</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HL/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HL/rid/R4.html"><i class="grid-icon  fa fa-check text-success"></i></a></td>
                                            </tr>
                                            <tr id="tab1_1595057945ghead_0_17" role="row" class="ui-widget-content jqgroup ui-row-ltr tab1_1595057945ghead_0">
                                                <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;" class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr" onclick="jQuery('#tab1_1595057945').jqGrid('groupingToggle','tab1_1595057945ghead_0_17');return false;"></span>System Update</td>
                                            </tr>
                                            <tr role="row" id="112" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                                                <td role="gridcell" style="display:none;" title="System Update" aria-describedby="tab1_1595057945_controller_title">System Update</td>
                                                <td role="gridcell" style="text-align:left;" title="112" aria-describedby="tab1_1595057945_id">112</td>
                                                <td role="gridcell" style="text-align:left;display:none;" title="System Update" aria-describedby="tab1_1595057945_controller_title">System Update</td>
                                                <td role="gridcell" style="text-align:left;" title="Re Check" aria-describedby="tab1_1595057945_title">Re Check</td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R1"><i class="grid-icon  fa fa-check text-success"></i></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R3"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GU/rid/R3.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                                <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595057945_R4"><a oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?" href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GU/rid/R4.html"><i class="grid-icon  fa fa-times text-danger"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="ui-jqgrid-resize-mark" id="rs_mtab1_1595057945">&nbsp;</div>
                        <div id="pager_tab1_1595057945" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 1064px;">
                            <div id="pg_pager_tab1_1595057945" class="ui-pager-control" role="group">
                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;" role="row">
                                    <tbody>
                                        <tr>
                                            <td id="pager_tab1_1595057945_left" align="left">
                                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table navtable" style="float:left;table-layout:auto;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="ui-pg-button ui-corner-all" title="Reload Grid" id="refresh_tab1_1595057945">
                                                                <div class="ui-pg-div"><span class="ui-icon ui-icon-refresh"></span></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td id="pager_tab1_1595057945_center" align="center" style="white-space: pre; width: 202px;">
                                                <table cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;" class="ui-pg-table">
                                                    <tbody>
                                                        <tr>
                                                            <td id="first_pager_tab1_1595057945" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-first"></span></td>
                                                            <td id="prev_pager_tab1_1595057945" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-prev"></span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td dir="ltr">Page <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox"> of <span id="sp_1_pager_tab1_1595057945">1</span></td>
                                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td>
                                                            <td id="next_pager_tab1_1595057945" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-next"></span></td>
                                                            <td id="last_pager_tab1_1595057945" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-end"></span></td>
                                                            <td dir="ltr"><select class="ui-pg-selbox" role="listbox">
                                                                    <option role="option" value="5">5</option>
                                                                    <option role="option" value="10">10</option>
                                                                    <option role="option" value="20">20</option>
                                                                    <option role="option" value="50">50</option>
                                                                    <option role="option" value="100">100</option>
                                                                    <option role="option" value="200" selected="selected">200</option>
                                                                </select></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td id="pager_tab1_1595057945_right" align="right">
                                                <div dir="ltr" style="text-align:right" class="ui-paging-info">View 1 - 112 of 159</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="ui-widget ui-widget-content ui-corner-all ui-jqdialog" id="alertmod_tab1_1595057945" dir="ltr" tabindex="-1" role="dialog" aria-labelledby="alerthd_tab1_1595057945" aria-hidden="true" style="width: 200px; height: auto; z-index: 950; overflow: hidden; top: 172.5px; left: 583px;">
                            <div class="ui-jqdialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" id="alerthd_tab1_1595057945" style="cursor: move;"><span class="ui-jqdialog-title" style="float: left;">Warning</span><a class="ui-jqdialog-titlebar-close ui-corner-all" style="right: 0.3em;"><span class="ui-icon ui-icon-closethick"></span></a></div>
                            <div class="ui-jqdialog-content ui-widget-content" id="alertcnt_tab1_1595057945">
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
                AddOnCloseMethod(Grid_tab1_1595057945_reload);
            });

            function response_process(rdata, element) {
                if (typeof(swal) == "function") {
                    swal(rdata.status ? "Success" : "Failed", rdata.msg, rdata.status ? "success" : "error");
                } else {
                    ShowGritterMsg(rdata.msg, rdata.status, rdata.is_sticky);
                }

                if (rdata.status) {
                    var span = element.find('i');
                    if (span.hasClass('fa-times')) {
                        span.removeClass('fa-times text-danger').addClass('fa-check text-success');
                    } else if (span.hasClass('fa-check')) {
                        span.removeClass('fa-check text-success').addClass('fa-times text-danger');
                    }
                }
            }

            function new_role_created() {
                if (MyAjaxChange) {
                    ReloadSiteUrl();
                }
            }
        </script>
    </section>
</div>
@endsection
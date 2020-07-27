@extends('layout.admin.user_settings.user_settings_master')

@section('tab-title')
Role Access
@endsection

@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 606px;">
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
        <table class="table table-striped table-light">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Page Name</th>
                    <th scope="col">Super Admin</th>
                    <th scope="col">Supervisor</th>
                    <th scope="col">Agent</th>
                </tr>
            </thead>
            <tbody>
                <tr class="jqgfirstrow" role="row" style="height:auto">
                    <td role="gridcell" style="height:0px;width:150px;display:none;"></td>
                    <td role="gridcell" style="height: 0px; width: 24px;"></td>
                    <td role="gridcell" style="height: 0px; width: 153px; display: none;"></td>
                    <td role="gridcell" style="height: 0px; width: 129px;"></td>
                    <td role="gridcell" style="height: 0px; width: 104px;"></td>
                    <td role="gridcell" style="height: 0px; width: 104px;"></td>
                    <td role="gridcell" style="height: 0px; width: 105px;"></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_0" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_0');return false;"></span>01.
                        Admin Report</td>
                </tr>
                <tr role="row" id="1" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="01. Admin Report"
                        aria-describedby="tab1_1595761483_controller_title">01. Admin Report</td>
                    <td role="gridcell" style="text-align:left;" title="1" aria-describedby="tab1_1595761483_id">1</td>
                    <td role="gridcell" style="text-align:left;display:none;" title="01. Admin Report"
                        aria-describedby="tab1_1595761483_controller_title">01. Admin Report</td>
                    <td role="gridcell" style="text-align:left;" title="Admin Dashboard"
                        aria-describedby="tab1_1595761483_title">Admin
                        Dashboard</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GJ/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GJ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_1" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_1');return false;"></span>02.
                        Admin Setting</td>
                </tr>
                <tr role="row" id="2" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="2" aria-describedby="tab1_1595761483_id">2</td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="General Settings"
                        aria-describedby="tab1_1595761483_title">
                        General Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BK/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BK/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="3" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="3" aria-describedby="tab1_1595761483_id">3</td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="General"
                        aria-describedby="tab1_1595761483_title">General</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BL/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BL/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="4" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="4" aria-describedby="tab1_1595761483_id">4</td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Modify"
                        aria-describedby="tab1_1595761483_title">Modify</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BO/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BO/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="5" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="5" aria-describedby="tab1_1595761483_id">5</td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Custom Field List"
                        aria-describedby="tab1_1595761483_title">
                        Custom Field List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BS/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BS/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="6" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="6" aria-describedby="tab1_1595761483_id">6</td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="New Custom Field"
                        aria-describedby="tab1_1595761483_title">New
                        Custom Field</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BT/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BT/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="7" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="7" aria-describedby="tab1_1595761483_id">7</td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Custom Field"
                        aria-describedby="tab1_1595761483_title">Edit
                        Custom Field</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BU/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BU/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="8" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="8" aria-describedby="tab1_1595761483_id">8</td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Status Change"
                        aria-describedby="tab1_1595761483_title">Status
                        Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BX/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BX/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="9" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="9" aria-describedby="tab1_1595761483_id">9</td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Custom Field Delete"
                        aria-describedby="tab1_1595761483_title">
                        Custom Field Delete</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BZ/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BZ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="10" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="10" aria-describedby="tab1_1595761483_id">10
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Email To Ticket Settings"
                        aria-describedby="tab1_1595761483_title">Email To Ticket Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CY/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CY/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="11" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="11" aria-describedby="tab1_1595761483_id">11
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Email Templates List"
                        aria-describedby="tab1_1595761483_title">
                        Email Templates List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DA/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DA/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="12" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="12" aria-describedby="tab1_1595761483_id">12
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Update Email Template"
                        aria-describedby="tab1_1595761483_title">
                        Update Email Template</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DB/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DB/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="13" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="13" aria-describedby="tab1_1595761483_id">13
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Status Change"
                        aria-describedby="tab1_1595761483_title">Status
                        Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DC/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DC/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="14" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="14" aria-describedby="tab1_1595761483_id">14
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Email Outgoing Settings"
                        aria-describedby="tab1_1595761483_title">Email Outgoing Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DF/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DF/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="15" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="15" aria-describedby="tab1_1595761483_id">15
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Menu List"
                        aria-describedby="tab1_1595761483_title">Menu List
                    </td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DV/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DV/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="16" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="16" aria-describedby="tab1_1595761483_id">16
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="New Menu"
                        aria-describedby="tab1_1595761483_title">New Menu</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DW/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DW/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="17" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="17" aria-describedby="tab1_1595761483_id">17
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Menu Status Change"
                        aria-describedby="tab1_1595761483_title">
                        Menu Status Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DX/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DX/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="18" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="18" aria-describedby="tab1_1595761483_id">18
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Menu"
                        aria-describedby="tab1_1595761483_title">Edit Menu
                    </td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DY/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DY/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="19" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="19" aria-describedby="tab1_1595761483_id">19
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Menu Delete"
                        aria-describedby="tab1_1595761483_title">Menu
                        Delete</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DZ/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DZ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="20" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="20" aria-describedby="tab1_1595761483_id">20
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="New Window Status Change"
                        aria-describedby="tab1_1595761483_title">New Window Status Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EA/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EA/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="21" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="21" aria-describedby="tab1_1595761483_id">21
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Topbar Icon List"
                        aria-describedby="tab1_1595761483_title">
                        Topbar Icon List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EB/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EB/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="22" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="22" aria-describedby="tab1_1595761483_id">22
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="New Topbar Icon"
                        aria-describedby="tab1_1595761483_title">New
                        Topbar Icon</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EC/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EC/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="23" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="23" aria-describedby="tab1_1595761483_id">23
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Topbar Icon Delete"
                        aria-describedby="tab1_1595761483_title">
                        Topbar Icon Delete</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ED/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ED/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="24" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="24" aria-describedby="tab1_1595761483_id">24
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Topbar Icon Status Change"
                        aria-describedby="tab1_1595761483_title">Topbar Icon Status Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EE/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EE/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="25" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="25" aria-describedby="tab1_1595761483_id">25
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Topbar Icon"
                        aria-describedby="tab1_1595761483_title">Edit
                        Topbar Icon</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EF/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EF/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="26" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="26" aria-describedby="tab1_1595761483_id">26
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="IP List"
                        aria-describedby="tab1_1595761483_title">IP List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EI/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EI/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="27" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="27" aria-describedby="tab1_1595761483_id">27
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="New IP Entry"
                        aria-describedby="tab1_1595761483_title">New IP
                        Entry</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EJ/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EJ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="28" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="28" aria-describedby="tab1_1595761483_id">28
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Security Settings"
                        aria-describedby="tab1_1595761483_title">
                        Security Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EP/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EP/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="29" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="29" aria-describedby="tab1_1595761483_id">29
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Modify Security"
                        aria-describedby="tab1_1595761483_title">Modify
                        Security</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EQ/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EQ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="30" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="30" aria-describedby="tab1_1595761483_id">30
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Locked User List"
                        aria-describedby="tab1_1595761483_title">
                        Locked User List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ER/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ER/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="31" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="31" aria-describedby="tab1_1595761483_id">31
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Unlock Admin User"
                        aria-describedby="tab1_1595761483_title">
                        Unlock Admin User</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ES/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ES/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="32" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="32" aria-describedby="tab1_1595761483_id">32
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Edit IP"
                        aria-describedby="tab1_1595761483_title">Edit IP</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ET/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ET/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="33" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="33" aria-describedby="tab1_1595761483_id">33
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Block IP Reset"
                        aria-describedby="tab1_1595761483_title">Block
                        IP Reset</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EU/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EU/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="34" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="34" aria-describedby="tab1_1595761483_id">34
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Theme Settings"
                        aria-describedby="tab1_1595761483_title">Theme
                        Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FT/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FT/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="35" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="35" aria-describedby="tab1_1595761483_id">35
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Modify Theme"
                        aria-describedby="tab1_1595761483_title">Modify
                        Theme</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FU/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FU/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="36" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="36" aria-describedby="tab1_1595761483_id">36
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Admin Notification Settings"
                        aria-describedby="tab1_1595761483_title">Admin Notification Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GW/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GW/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="37" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="37" aria-describedby="tab1_1595761483_id">37
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Chat Settings"
                        aria-describedby="tab1_1595761483_title">Chat
                        Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HU/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HU/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="38" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="38" aria-describedby="tab1_1595761483_id">38
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Page List"
                        aria-describedby="tab1_1595761483_title">Page List
                    </td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IS/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IS/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="39" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="39" aria-describedby="tab1_1595761483_id">39
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="New Page"
                        aria-describedby="tab1_1595761483_title">New Page</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IT/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IT/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="40" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="40" aria-describedby="tab1_1595761483_id">40
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="02. Admin Setting"
                        aria-describedby="tab1_1595761483_controller_title">02. Admin Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Page"
                        aria-describedby="tab1_1595761483_title">Edit Page
                    </td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IU/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IU/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_2" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_2');return false;"></span>03.
                        API Setting</td>
                </tr>
                <tr role="row" id="41" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="41" aria-describedby="tab1_1595761483_id">41
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Other API Settings"
                        aria-describedby="tab1_1595761483_title">
                        Other API Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BR/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BR/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="42" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="42" aria-describedby="tab1_1595761483_id">42
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Paypal Settings"
                        aria-describedby="tab1_1595761483_title">Paypal
                        Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CU/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CU/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="43" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="43" aria-describedby="tab1_1595761483_id">43
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Social Settings"
                        aria-describedby="tab1_1595761483_title">Social
                        Settings</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CW/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CW/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="44" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="44" aria-describedby="tab1_1595761483_id">44
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Remote Login List"
                        aria-describedby="tab1_1595761483_title">
                        Remote Login List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IL/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IL/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="45" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="45" aria-describedby="tab1_1595761483_id">45
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="New Remote Login"
                        aria-describedby="tab1_1595761483_title">New
                        Remote Login</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IM/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IM/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="46" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="46" aria-describedby="tab1_1595761483_id">46
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Remote Login"
                        aria-describedby="tab1_1595761483_title">Edit
                        Remote Login</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IN/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IN/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="47" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="47" aria-describedby="tab1_1595761483_id">47
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Delete Remote Login"
                        aria-describedby="tab1_1595761483_title">
                        Delete Remote Login</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IO/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IO/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="48" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="48" aria-describedby="tab1_1595761483_id">48
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="03. API Setting"
                        aria-describedby="tab1_1595761483_controller_title">03. API Setting</td>
                    <td role="gridcell" style="text-align:left;" title="Remote Login Status Change"
                        aria-describedby="tab1_1595761483_title">Remote Login Status Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IP/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IP/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_3" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_3');return false;"></span>04.
                        Payment List</td>
                </tr>
                <tr role="row" id="49" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="04. Payment List"
                        aria-describedby="tab1_1595761483_controller_title">04. Payment List</td>
                    <td role="gridcell" style="text-align:left;" title="49" aria-describedby="tab1_1595761483_id">49
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="04. Payment List"
                        aria-describedby="tab1_1595761483_controller_title">04. Payment List</td>
                    <td role="gridcell" style="text-align:left;" title="Ticket Payment List"
                        aria-describedby="tab1_1595761483_title">
                        Ticket Payment List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GL/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GL/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="50" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="04. Payment List"
                        aria-describedby="tab1_1595761483_controller_title">04. Payment List</td>
                    <td role="gridcell" style="text-align:left;" title="50" aria-describedby="tab1_1595761483_id">50
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="04. Payment List"
                        aria-describedby="tab1_1595761483_controller_title">04. Payment List</td>
                    <td role="gridcell" style="text-align:left;" title="Ticket Payment Details"
                        aria-describedby="tab1_1595761483_title">Ticket Payment Details</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GM/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GM/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_4" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_4');return false;"></span>05.
                        User Settings</td>
                </tr>
                <tr role="row" id="51" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="51" aria-describedby="tab1_1595761483_id">51
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Role  List"
                        aria-describedby="tab1_1595761483_title">Role List
                    </td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AA/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AA/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="52" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="52" aria-describedby="tab1_1595761483_id">52
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Role Access"
                        aria-describedby="tab1_1595761483_title">Role
                        Access</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AB/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AB/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="53" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="53" aria-describedby="tab1_1595761483_id">53
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="New Role"
                        aria-describedby="tab1_1595761483_title">New Role</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AC/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AC/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="54" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="54" aria-describedby="tab1_1595761483_id">54
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Role"
                        aria-describedby="tab1_1595761483_title">Edit Role
                    </td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AD/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AD/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="55" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="55" aria-describedby="tab1_1595761483_id">55
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Change Role Access"
                        aria-describedby="tab1_1595761483_title">
                        Change Role Access</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AE/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AE/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="56" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="56" aria-describedby="tab1_1595761483_id">56
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="User List"
                        aria-describedby="tab1_1595761483_title">User List
                    </td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AI/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AI/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="57" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="57" aria-describedby="tab1_1595761483_id">57
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Update User"
                        aria-describedby="tab1_1595761483_title">Update
                        User</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AK/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AK/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="58" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="58" aria-describedby="tab1_1595761483_id">58
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Role Delete"
                        aria-describedby="tab1_1595761483_title">Role
                        Delete</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AT/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AT/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="59" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="59" aria-describedby="tab1_1595761483_id">59
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Change User Status"
                        aria-describedby="tab1_1595761483_title">
                        Change User Status</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FK/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FK/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="60" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="60" aria-describedby="tab1_1595761483_id">60
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Reset User Pass"
                        aria-describedby="tab1_1595761483_title">Reset
                        User Pass</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FL/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FL/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="61" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="61" aria-describedby="tab1_1595761483_id">61
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Copy Role Access"
                        aria-describedby="tab1_1595761483_title">Copy
                        Role Access</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GQ/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GQ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="62" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="62" aria-describedby="tab1_1595761483_id">62
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Reset Role Access"
                        aria-describedby="tab1_1595761483_title">
                        Reset Role Access</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GR/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GR/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="63" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="63" aria-describedby="tab1_1595761483_id">63
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="05. User Settings"
                        aria-describedby="tab1_1595761483_controller_title">05. User Settings</td>
                    <td role="gridcell" style="text-align:left;" title="Archive User"
                        aria-describedby="tab1_1595761483_title">Archive
                        User</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HI/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HI/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_5" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_5');return false;"></span>06.
                        Ticket Feedback</td>
                </tr>
                <tr role="row" id="64" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="06. Ticket Feedback"
                        aria-describedby="tab1_1595761483_controller_title">06. Ticket Feedback</td>
                    <td role="gridcell" style="text-align:left;" title="64" aria-describedby="tab1_1595761483_id">64
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="06. Ticket Feedback"
                        aria-describedby="tab1_1595761483_controller_title">06. Ticket Feedback</td>
                    <td role="gridcell" style="text-align:left;" title="Ticket Feedback List"
                        aria-describedby="tab1_1595761483_title">
                        Ticket Feedback List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GN/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GN/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_6" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_6');return false;"></span>07.
                        App Information</td>
                </tr>
                <tr role="row" id="65" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="65" aria-describedby="tab1_1595761483_id">65
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="Debug Log List"
                        aria-describedby="tab1_1595761483_title">Debug
                        Log List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DG/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DG/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="66" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="66" aria-describedby="tab1_1595761483_id">66
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="Details Debug Log"
                        aria-describedby="tab1_1595761483_title">
                        Details Debug Log</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DH/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DH/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="67" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="67" aria-describedby="tab1_1595761483_id">67
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="Application Update Info"
                        aria-describedby="tab1_1595761483_title">Application Update Info</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DN/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DN/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="68" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="68" aria-describedby="tab1_1595761483_id">68
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="License Details"
                        aria-describedby="tab1_1595761483_title">
                        License Details</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DO/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DO/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="69" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="69" aria-describedby="tab1_1595761483_id">69
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="Remove License Button"
                        aria-describedby="tab1_1595761483_title">
                        Remove License Button</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DQ/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DQ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="70" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="70" aria-describedby="tab1_1595761483_id">70
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="07. App Information"
                        aria-describedby="tab1_1595761483_controller_title">07. App Information</td>
                    <td role="gridcell" style="text-align:left;" title="Application Update Process"
                        aria-describedby="tab1_1595761483_title">Application Update Process</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FM/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FM/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_7" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_7');return false;"></span>09.
                        Announcements</td>
                </tr>
                <tr role="row" id="71" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="09. Announcements"
                        aria-describedby="tab1_1595761483_controller_title">09. Announcements</td>
                    <td role="gridcell" style="text-align:left;" title="71" aria-describedby="tab1_1595761483_id">71
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="09. Announcements"
                        aria-describedby="tab1_1595761483_controller_title">09. Announcements</td>
                    <td role="gridcell" style="text-align:left;" title="Announcements List"
                        aria-describedby="tab1_1595761483_title">
                        Announcements List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EX/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EX/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="72" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="09. Announcements"
                        aria-describedby="tab1_1595761483_controller_title">09. Announcements</td>
                    <td role="gridcell" style="text-align:left;" title="72" aria-describedby="tab1_1595761483_id">72
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="09. Announcements"
                        aria-describedby="tab1_1595761483_controller_title">09. Announcements</td>
                    <td role="gridcell" style="text-align:left;" title="New Announcements"
                        aria-describedby="tab1_1595761483_title">New
                        Announcements</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EY/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EY/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="73" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="09. Announcements"
                        aria-describedby="tab1_1595761483_controller_title">09. Announcements</td>
                    <td role="gridcell" style="text-align:left;" title="73" aria-describedby="tab1_1595761483_id">73
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="09. Announcements"
                        aria-describedby="tab1_1595761483_controller_title">09. Announcements</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Announcements"
                        aria-describedby="tab1_1595761483_title">
                        Edit Announcements</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EZ/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EZ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="74" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="09. Announcements"
                        aria-describedby="tab1_1595761483_controller_title">09. Announcements</td>
                    <td role="gridcell" style="text-align:left;" title="74" aria-describedby="tab1_1595761483_id">74
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="09. Announcements"
                        aria-describedby="tab1_1595761483_controller_title">09. Announcements</td>
                    <td role="gridcell" style="text-align:left;" title="Announcements Status Change"
                        aria-describedby="tab1_1595761483_title">Announcements Status Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FE/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FE/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_8" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_8');return false;"></span>10.
                        Ticket</td>
                </tr>
                <tr role="row" id="75" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10.
                        Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="75" aria-describedby="tab1_1595761483_id">75
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10. Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="Ticket List"
                        aria-describedby="tab1_1595761483_title">Ticket
                        List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AR/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AR/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="76" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10.
                        Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="76" aria-describedby="tab1_1595761483_id">76
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10. Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="Ticket Delete"
                        aria-describedby="tab1_1595761483_title">Ticket
                        Delete</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CQ/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CQ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="77" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10.
                        Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="77" aria-describedby="tab1_1595761483_id">77
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10. Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="Closed Ticket List"
                        aria-describedby="tab1_1595761483_title">
                        Closed Ticket List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CR/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CR/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="78" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10.
                        Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="78" aria-describedby="tab1_1595761483_id">78
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10. Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="Assign Ticket"
                        aria-describedby="tab1_1595761483_title">Assign
                        Ticket</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CS/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CS/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="79" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10.
                        Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="79" aria-describedby="tab1_1595761483_id">79
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10. Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="Assign Me"
                        aria-describedby="tab1_1595761483_title">Assign Me
                    </td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CT/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CT/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="80" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10.
                        Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="80" aria-describedby="tab1_1595761483_id">80
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10. Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="Ticket Reply"
                        aria-describedby="tab1_1595761483_title">Ticket
                        Reply</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DS/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DS/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="81" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10.
                        Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="81" aria-describedby="tab1_1595761483_id">81
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10. Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="Re Open"
                        aria-describedby="tab1_1595761483_title">Re Open</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FQ/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FQ/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="82" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10.
                        Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="82" aria-describedby="tab1_1595761483_id">82
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10. Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="All Paid Ticket"
                        aria-describedby="tab1_1595761483_title">All
                        Paid Ticket</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GA/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GA/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="83" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10.
                        Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="83" aria-describedby="tab1_1595761483_id">83
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="10. Ticket"
                        aria-describedby="tab1_1595761483_controller_title">10. Ticket</td>
                    <td role="gridcell" style="text-align:left;" title="Admin Ticket Creation"
                        aria-describedby="tab1_1595761483_title">
                        Admin Ticket Creation</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IC/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IC/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_9" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_9');return false;"></span>11.
                        Knowledge</td>
                </tr>
                <tr role="row" id="84" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">
                        11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="84" aria-describedby="tab1_1595761483_id">84
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="Knowledge List"
                        aria-describedby="tab1_1595761483_title">
                        Knowledge List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AP/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AP/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="85" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">
                        11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="85" aria-describedby="tab1_1595761483_id">85
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="New Knowledge"
                        aria-describedby="tab1_1595761483_title">New
                        Knowledge</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AQ/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AQ/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="86" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">
                        11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="86" aria-describedby="tab1_1595761483_id">86
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Knowledge"
                        aria-describedby="tab1_1595761483_title">Edit
                        Knowledge</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AU/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AU/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="87" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">
                        11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="87" aria-describedby="tab1_1595761483_id">87
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="Status Change"
                        aria-describedby="tab1_1595761483_title">Status
                        Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AV/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AV/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="88" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">
                        11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="88" aria-describedby="tab1_1595761483_id">88
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="Is Stickey/Pinned Status Change"
                        aria-describedby="tab1_1595761483_title">Is Stickey/Pinned Status Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GT/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GT/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="89" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">
                        11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="89" aria-describedby="tab1_1595761483_id">89
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="11. Knowledge"
                        aria-describedby="tab1_1595761483_controller_title">11. Knowledge</td>
                    <td role="gridcell" style="text-align:left;" title="Delete Attach File"
                        aria-describedby="tab1_1595761483_title">
                        Delete Attach File</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HY/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HY/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_10" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_10');return false;"></span>12.
                        Category</td>
                </tr>
                <tr role="row" id="90" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">
                        12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="90" aria-describedby="tab1_1595761483_id">90
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="Category List"
                        aria-describedby="tab1_1595761483_title">Category
                        List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AL/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AL/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="91" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">
                        12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="91" aria-describedby="tab1_1595761483_id">91
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="New Category"
                        aria-describedby="tab1_1595761483_title">New
                        Category</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AM/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AM/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="92" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">
                        12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="92" aria-describedby="tab1_1595761483_id">92
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Category"
                        aria-describedby="tab1_1595761483_title">Edit
                        Category</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AN/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AN/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="93" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">
                        12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="93" aria-describedby="tab1_1595761483_id">93
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="Status Change"
                        aria-describedby="tab1_1595761483_title">Status
                        Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AO/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/AO/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="94" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">
                        12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="94" aria-describedby="tab1_1595761483_id">94
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="12. Category"
                        aria-describedby="tab1_1595761483_controller_title">12. Category</td>
                    <td role="gridcell" style="text-align:left;" title="Category Delete"
                        aria-describedby="tab1_1595761483_title">
                        Category Delete</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CA/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/CA/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_11" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_11');return false;"></span>13.
                        Canned Msg</td>
                </tr>
                <tr role="row" id="95" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="95" aria-describedby="tab1_1595761483_id">95
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="Canned Msg List"
                        aria-describedby="tab1_1595761483_title">Canned
                        Msg List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GF/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GF/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="96" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="96" aria-describedby="tab1_1595761483_id">96
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="New Canned Msg"
                        aria-describedby="tab1_1595761483_title">New
                        Canned Msg</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GG/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GG/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="97" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="97" aria-describedby="tab1_1595761483_id">97
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Canned Message"
                        aria-describedby="tab1_1595761483_title">
                        Edit Canned Message</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GH/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GH/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="98" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="98" aria-describedby="tab1_1595761483_id">98
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="Canned Msg Delete"
                        aria-describedby="tab1_1595761483_title">
                        Canned Msg Delete</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GI/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GI/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="99" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="99" aria-describedby="tab1_1595761483_id">99
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="13. Canned Msg"
                        aria-describedby="tab1_1595761483_controller_title">13. Canned Msg</td>
                    <td role="gridcell" style="text-align:left;" title="Status Change"
                        aria-describedby="tab1_1595761483_title">Status
                        Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GV/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GV/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_12" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_12');return false;"></span>14.
                        Client</td>
                </tr>
                <tr role="row" id="100" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="14. Client"
                        aria-describedby="tab1_1595761483_controller_title">14.
                        Client</td>
                    <td role="gridcell" style="text-align:left;" title="100" aria-describedby="tab1_1595761483_id">100
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="14. Client"
                        aria-describedby="tab1_1595761483_controller_title">14. Client</td>
                    <td role="gridcell" style="text-align:left;" title="Client List"
                        aria-describedby="tab1_1595761483_title">Client
                        List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BH/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BH/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr role="row" id="101" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="14. Client"
                        aria-describedby="tab1_1595761483_controller_title">14.
                        Client</td>
                    <td role="gridcell" style="text-align:left;" title="101" aria-describedby="tab1_1595761483_id">101
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="14. Client"
                        aria-describedby="tab1_1595761483_controller_title">14. Client</td>
                    <td role="gridcell" style="text-align:left;" title="New Client"
                        aria-describedby="tab1_1595761483_title">New Client
                    </td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BI/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/BI/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="102" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="14. Client"
                        aria-describedby="tab1_1595761483_controller_title">14.
                        Client</td>
                    <td role="gridcell" style="text-align:left;" title="102" aria-describedby="tab1_1595761483_id">102
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="14. Client"
                        aria-describedby="tab1_1595761483_controller_title">14. Client</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Client"
                        aria-describedby="tab1_1595761483_title">Edit
                        Client</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DJ/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/DJ/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="103" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="14. Client"
                        aria-describedby="tab1_1595761483_controller_title">14.
                        Client</td>
                    <td role="gridcell" style="text-align:left;" title="103" aria-describedby="tab1_1595761483_id">103
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="14. Client"
                        aria-describedby="tab1_1595761483_controller_title">14. Client</td>
                    <td role="gridcell" style="text-align:left;" title="Reset User Pass"
                        aria-describedby="tab1_1595761483_title">Reset
                        User Pass</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HV/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HV/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_13" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_13');return false;"></span>15.
                        Message</td>
                </tr>
                <tr role="row" id="104" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="15. Message"
                        aria-describedby="tab1_1595761483_controller_title">
                        15. Message</td>
                    <td role="gridcell" style="text-align:left;" title="104" aria-describedby="tab1_1595761483_id">104
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="15. Message"
                        aria-describedby="tab1_1595761483_controller_title">15. Message</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Admin Message"
                        aria-describedby="tab1_1595761483_title">
                        Edit Admin Message</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FD/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/FD/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_14" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_14');return false;"></span>16.
                        System Message</td>
                </tr>
                <tr role="row" id="105" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="16.  System Message"
                        aria-describedby="tab1_1595761483_controller_title">16. System Message</td>
                    <td role="gridcell" style="text-align:left;" title="105" aria-describedby="tab1_1595761483_id">105
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="16.  System Message"
                        aria-describedby="tab1_1595761483_controller_title">16. System Message</td>
                    <td role="gridcell" style="text-align:left;" title="System Message Dismiss"
                        aria-describedby="tab1_1595761483_title">System Message Dismiss</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EV/rid/R3.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/EV/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_15" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_15');return false;"></span>17.
                        Ticket Assign Rule</td>
                </tr>
                <tr role="row" id="106" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="106" aria-describedby="tab1_1595761483_id">106
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="Ticket Assign Rule List"
                        aria-describedby="tab1_1595761483_title">Ticket Assign Rule List</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ID/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/ID/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="107" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="107" aria-describedby="tab1_1595761483_id">107
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="Edit Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_title">Edit Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IE/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IE/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="108" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="108" aria-describedby="tab1_1595761483_id">108
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="New Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_title">New Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IF/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IF/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="109" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="109" aria-describedby="tab1_1595761483_id">109
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IG/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IG/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr role="row" id="110" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="110" aria-describedby="tab1_1595761483_id">110
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="17. Ticket Assign Rule"
                        aria-describedby="tab1_1595761483_controller_title">17. Ticket Assign Rule</td>
                    <td role="gridcell" style="text-align:left;" title="Status Change"
                        aria-describedby="tab1_1595761483_title">Status
                        Change</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IH/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/IH/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_16" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_16');return false;"></span>17.
                        Web Chat</td>
                </tr>
                <tr role="row" id="111" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="17. Web Chat"
                        aria-describedby="tab1_1595761483_controller_title">
                        17. Web Chat</td>
                    <td role="gridcell" style="text-align:left;" title="111" aria-describedby="tab1_1595761483_id">111
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="17. Web Chat"
                        aria-describedby="tab1_1595761483_controller_title">17. Web Chat</td>
                    <td role="gridcell" style="text-align:left;" title="WebChat Panel"
                        aria-describedby="tab1_1595761483_title">WebChat
                        Panel</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HL/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/HL/rid/R4.html"><i
                                class="grid-icon  fa fa-check text-success"></i></a></td>
                </tr>
                <tr id="tab1_1595761483ghead_0_17" role="row"
                    class="ui-widget-content jqgroup ui-row-ltr tab1_1595761483ghead_0">
                    <td style="padding-left:0px;" colspan="5"><span style="cursor:pointer;"
                            class="ui-icon ui-icon-circlesmall-minus tree-wrap-ltr"
                            onclick="jQuery('#tab1_1595761483').jqGrid('groupingToggle','tab1_1595761483ghead_0_17');return false;"></span>System
                        Update</td>
                </tr>
                <tr role="row" id="112" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
                    <td role="gridcell" style="display:none;" title="System Update"
                        aria-describedby="tab1_1595761483_controller_title">
                        System Update</td>
                    <td role="gridcell" style="text-align:left;" title="112" aria-describedby="tab1_1595761483_id">112
                    </td>
                    <td role="gridcell" style="text-align:left;display:none;" title="System Update"
                        aria-describedby="tab1_1595761483_controller_title">System Update</td>
                    <td role="gridcell" style="text-align:left;" title="Re Check"
                        aria-describedby="tab1_1595761483_title">Re Check</td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R1"><i
                            class="grid-icon  fa fa-check text-success"></i></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R3"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GU/rid/R3.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                    <td role="gridcell" style="text-align:center;" title="" aria-describedby="tab1_1595761483_R4"><a
                            oncompleted="response_process" class="ConfirmAjaxWR" data-msg="Are you sure?"
                            href="https://demo.appsbd.com/support-system/admin/app-permission-confirm/change-role-access/pid/GU/rid/R4.html"><i
                                class="grid-icon  fa fa-times text-danger"></i></a></td>
                </tr>
            </tbody>
        </table>
    </section>
</div>
@endsection
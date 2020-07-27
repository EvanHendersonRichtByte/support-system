@extends('layout.admin.ticket.ticket_master')

@section('tab-title')
    Admin Ticket Creation
@endsection

@section('main-content')
    <div id="main-content" class="content-wrapper" style="min-height: 294px;">
        <div id="MainFormLoader" class="MainLoader">
            <div class="msgText"></div>
        </div>
    
        <section class="content-header">
            <h1>
                <i class="fa fa-ticket"></i>
                Admin ticket creation </h1>
            <ol class="breadcrumb">
                <li>
                    Admin ticket creation </li>
            </ol>
        </section>
    
        <section class="content">
    
            
            <div class="row">
                <div class="col-md-12">
                    <form action="https://demo.appsbd.com/support-system/admin/ticket/open.html" class="form bv-form"
                        id="ticket_open_form" method="post" enctype="multipart/form-data" data-on-complete="on_complete"
                        data-beforesend="on_beforesend" data-multipart="true" accept-charset="utf-8"
                        novalidate="novalidate">
                        <input type="hidden" name="app_form" value="9046055233ca3424ec67e0e89c23906c">
                        <div class="panel panel-default app-panel-box">
                            <div class="panel-heading">New Ticket Form</div>
                            <div class="panel-body">
                                <div class="form-horizontal form-horizontal-text-left">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label label-required col-md-4" for="user_email">Email
                                                    Address</label>
                                                <div class="col-md-8">
                                                    <input type="Email" class="form-control" id="user_email" value=""
                                                        name="user_email" placeholder="Email Address"
                                                        data-bv-notempty="true" data-bv-emailaddress="true"
                                                        data-bv-emailaddress-message="Invalid email address."
                                                        data-bv-notempty-message="Email is required"
                                                        data-bv-field="user_email"><i class="form-control-feedback"
                                                        data-bv-icon-for="user_email" style="display: none;"></i>
                                                    <small class="help-block" data-bv-validator="emailAddress"
                                                        data-bv-for="user_email" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">Invalid email address.</small><small
                                                        class="help-block" data-bv-validator="notEmpty"
                                                        data-bv-for="user_email" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">Email is required</small></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label label-required col-md-4"
                                                    for="priroty">Priroty</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="priroty" name="priroty"
                                                        data-bv-notempty="true"
                                                        data-bv-notempty-message="Priroty is required"
                                                        data-bv-field="priroty">
                                                        <option value="">Select</option>
                                                        <option selected="selected" value="L">Low</option>
                                                        <option value="M">Medium</option>
                                                        <option value="H">High</option>
                                                        <option value="U">Urgent</option>
                                                    </select><i class="form-control-feedback" data-bv-icon-for="priroty"
                                                        style="display: none;"></i>
                                                    <small class="help-block" data-bv-validator="notEmpty"
                                                        data-bv-for="priroty" data-bv-result="NOT_VALIDATED"
                                                        style="display: none;">Priroty is required</small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="control-label label-required col-md-2" for="title">Ticket
                                            Subject</label>
                                        <div class="col-md-10">
                                            <input type="text" maxlength="150" value="" class="form-control" id="title"
                                                name="title" placeholder="Title" data-bv-notempty="true"
                                                data-bv-notempty-message="Ticket subject is required"
                                                data-bv-field="title"><i class="form-control-feedback"
                                                data-bv-icon-for="title" style="display: none;"></i>
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="title"
                                                data-bv-result="NOT_VALIDATED" style="display: none;">Ticket subject is
                                                required</small><small class="help-block" data-bv-validator="stringLength"
                                                data-bv-for="title" data-bv-result="NOT_VALIDATED"
                                                style="display: none;">This value is not valid</small></div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="control-label label-required col-md-2" for="cat_id">Ticket
                                            Category</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="cat_id" name="cat_id" data-bv-notempty="true"
                                                data-bv-notempty-message="Category is required" data-bv-field="cat_id">
                                                <option value="">Select</option>
                                                <option value="2">Android Basic</option>
                                                <option value="7">Customer Support</option>
                                                <option value="6">Joomla Theme Setup</option>
                                                <option value="1">PHP Basic</option>
                                                <option value="3">PHP Setup</option>
                                                <option value="4">Sales</option>
                                                <option value="5">WordPress Theme Setup</option>
                                            </select><i class="form-control-feedback" data-bv-icon-for="cat_id"
                                                style="display: none;"></i>
                                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="cat_id"
                                                data-bv-result="NOT_VALIDATED" style="display: none;">Category is
                                                required</small></div>
                                    </div>
                                    <div id="custom-fields" class="">
                                        <div class="form-group custom-field-group grp-cat-4 grp-AA has-feedback"
                                            style="display: none;">
                                            <label class="control-label  col-md-2 label-required " for="fld_AA">test</label>
                                            <div class="col-md-10">
                                                <input class="form-control " id="custom_AA" value="" name="custom_AA"
                                                    type="text" data-bv-notempty="true"
                                                    data-bv-notempty-message="test is required" data-bv-field="custom_AA"><i
                                                    class="form-control-feedback" data-bv-icon-for="custom_AA"
                                                    style="display: none;"></i>
                                                <span class="form-group-help-block">test</span>
                                                <small class="help-block" data-bv-validator="notEmpty"
                                                    data-bv-for="custom_AA" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">test is required</small></div>
                                        </div>
                                        <div class="form-group custom-field-group grp-cat-4 grp-AB has-feedback"
                                            style="display: none;">
                                            <label class="control-label  col-md-2 label-required "
                                                for="fld_AB">radio</label>
                                            <div class="col-md-10">
                                                <div class="inline radio-inline">
                                                    <div class="radio">
                                                        <label> <input class="" id="custom_AB" type="radio" name="custom_AB"
                                                                value="OptionA" data-bv-notempty="true"
                                                                data-bv-notempty-message="Choose radio"
                                                                data-bv-field="custom_AB"><span class="circle"></span><span
                                                                class="check"></span>
                                                            OptionA </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label> <input class="" id="custom_AB" type="radio" name="custom_AB"
                                                                value="OptionB" data-bv-notempty="true"
                                                                data-bv-notempty-message="Choose radio"
                                                                data-bv-field="custom_AB"><span class="circle"></span><span
                                                                class="check"></span>
                                                            OptionB </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label> <input class="" id="custom_AB" type="radio" name="custom_AB"
                                                                value="OptionC" data-bv-notempty="true"
                                                                data-bv-notempty-message="Choose radio"
                                                                data-bv-field="custom_AB"><span class="circle"></span><span
                                                                class="check"></span>
                                                            OptionC </label>
                                                    </div>
                                                </div>
                                                <span class="form-group-help-block">radio</span>
                                                <small class="help-block" data-bv-validator="notEmpty"
                                                    data-bv-for="custom_AB" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">Choose radio</small>
                                            </div>
                                        </div>
                                        <div class="form-group custom-field-group grp-cat-4 grp-AC has-feedback"
                                            style="display: none;">
                                            <label class="control-label  col-md-2 label-required " for="fld_AC">date
                                                de retour</label>
                                            <div class="col-md-10">
                                                <input class="form-control app-date-picker added-picker" id="custom_AC"
                                                    value="" name="custom_AC" type="text" data-bv-notempty="true"
                                                    data-bv-notempty-message="date de retour is required"
                                                    data-bv-field="custom_AC"><i class="form-control-feedback"
                                                    data-bv-icon-for="custom_AC" style="display: none;"></i>
                                                <span class="form-group-help-block">date de retour</span>
                                                <small class="help-block" data-bv-validator="notEmpty"
                                                    data-bv-for="custom_AC" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">date de retour is required</small></div>
                                        </div>
                                        <div class="form-group custom-field-group grp-cat-4  grp-AD" style="display: none;">
                                            <label class="control-label  col-md-2 label-required "
                                                for="fld_AD">Ordinateur</label>
                                            <div class="col-md-10">
                                                <div class="togglebutton ">
                                                    <input name="custom_AD" value="N" type="hidden">
                                                    <label>
                                                        <input type="checkbox" value="Y" class="" id="custom_AD"
                                                            name="custom_AD"><span class="toggle"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-field-group grp-cat-4 grp-AE has-feedback"
                                            style="display: none;">
                                            <label class="control-label  col-md-2 label-required "
                                                for="fld_AE">test4</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="custom_AE" name="custom_AE"
                                                    data-bv-notempty="true" data-bv-notempty-message="test4 is required"
                                                    data-bv-field="custom_AE">
                                                    <option value="">Select</option>
                                                    <option value="OptionA">OptionA</option>
                                                    <option value="OptionB">OptionB</option>
                                                    <option value="OptionC">OptionC</option>
                                                </select><i class="form-control-feedback" data-bv-icon-for="custom_AE"
                                                    style="display: none;"></i>
                                                <span class="form-group-help-block">test4</span>
                                                <small class="help-block" data-bv-validator="notEmpty"
                                                    data-bv-for="custom_AE" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">test4 is required</small></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label label-required" for="ticket_body">Ticket
                                        Body</label>
                                    <textarea style="height: 200px; display: none;"
                                        class="form-control app-html-editor force-bv .added-ck" id="ticket_body"
                                        name="ticket_body" required="required" placeholder="Ticket Body"
                                        data-bv-notempty="true" data-bv-notempty-message="Ticket Body is required"
                                        data-bv-field="ticket_body"></textarea>
                                    <!-- <div class="note-editor note-frame panel panel-default">
                                                <div class="note-dropzone">
                                                    <div class="note-dropzone-message"></div>
                                                </div>
                                                <div class="note-toolbar panel-heading">
                                                    <div class="note-btn-group btn-group note-undoredo">
                                                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="Style"><i class="note-icon-magic"></i> <span class="note-icon-caret"></span></button>
                                                            <div class="dropdown-menu dropdown-style">
                                                                <li><a href="#" data-value="p">
                                                                        <p>Normal</p>
                                                                    </a></li>
                                                                <li><a href="#" data-value="blockquote">
                                                                        <blockquote>Quote</blockquote>
                                                                    </a></li>
                                                                <li><a href="#" data-value="pre">
                                                                        <pre>Code</pre></a></li>
                                                                <li><a href="#" data-value="h1">
                                                                        <h1>Header 1</h1>
                                                                    </a></li>
                                                                <li><a href="#" data-value="h2">
                                                                        <h2>Header 2</h2>
                                                                    </a></li>
                                                                <li><a href="#" data-value="h3">
                                                                        <h3>Header 3</h3>
                                                                    </a></li>
                                                                <li><a href="#" data-value="h4">
                                                                        <h4>Header 4</h4>
                                                                    </a></li>
                                                                <li><a href="#" data-value="h5">
                                                                        <h5>Header 5</h5>
                                                                    </a></li>
                                                                <li><a href="#" data-value="h6">
                                                                        <h6>Header 6</h6>
                                                                    </a></li>
                                                            </div>
                                                        </div><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Undo (CTRL+Z)"><i class="note-icon-undo"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Redo (CTRL+Y)"><i class="note-icon-redo"></i></button>
                                                    </div>
                                                    <div class="note-btn-group btn-group note-style"><button type="button" class="note-btn btn btn-default btn-sm note-btn-bold" tabindex="-1" title="" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-default btn-sm note-btn-italic" tabindex="-1" title="" data-original-title="Italic (CTRL+I)"><i class="note-icon-italic"></i></button><button type="button" class="note-btn btn btn-default btn-sm note-btn-underline" tabindex="-1" title="" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div>
                                                    <div class="note-btn-group btn-group note-insert">
                                                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="Table"><i class="note-icon-table"></i> <span class="note-icon-caret"></span></button>
                                                            <div class="dropdown-menu note-table">
                                                                <div class="note-dimension-picker">
                                                                    <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>
                                                                    <div class="note-dimension-picker-highlighted"></div>
                                                                    <div class="note-dimension-picker-unhighlighted"></div>
                                                                </div>
                                                                <div class="note-dimension-display">1 x 1</div>
                                                            </div>
                                                        </div><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Link (CTRL+K)"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Insert Horizontal Rule (CTRL+ENTER)"><i class="note-icon-minus"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Video"><i class="note-icon-video"></i></button>
                                                    </div>
                                                    <div class="note-btn-group btn-group note-fontsize">
                                                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="Font Family"><span class="note-current-fontname">Source Sans Pro</span> <span class="note-icon-caret"></span></button>
                                                            <div class="dropdown-menu note-check dropdown-fontname">
                                                                <li><a href="#" data-value="Arial"><i class="note-icon-menu-check"></i> <span style="font-family:Arial">Arial</span></a></li>
                                                                <li><a href="#" data-value="Arial Black"><i class="note-icon-menu-check"></i> <span style="font-family:Arial Black">Arial Black</span></a></li>
                                                                <li><a href="#" data-value="Comic Sans MS"><i class="note-icon-menu-check"></i> <span style="font-family:Comic Sans MS">Comic Sans MS</span></a></li>
                                                                <li><a href="#" data-value="Courier New"><i class="note-icon-menu-check"></i> <span style="font-family:Courier New">Courier New</span></a></li>
                                                                <li><a href="#" data-value="Helvetica"><i class="note-icon-menu-check"></i> <span style="font-family:Helvetica">Helvetica</span></a></li>
                                                                <li><a href="#" data-value="Impact"><i class="note-icon-menu-check"></i> <span style="font-family:Impact">Impact</span></a></li>
                                                                <li><a href="#" data-value="Tahoma"><i class="note-icon-menu-check"></i> <span style="font-family:Tahoma">Tahoma</span></a></li>
                                                                <li><a href="#" data-value="Times New Roman"><i class="note-icon-menu-check"></i> <span style="font-family:Times New Roman">Times New Roman</span></a></li>
                                                                <li><a href="#" data-value="Verdana"><i class="note-icon-menu-check"></i> <span style="font-family:Verdana">Verdana</span></a></li>
                                                            </div>
                                                        </div>
                                                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="Font Size"><span class="note-current-fontsize">14</span> <span class="note-icon-caret"></span></button>
                                                            <div class="dropdown-menu note-check dropdown-fontsize">
                                                                <li><a href="#" data-value="8"><i class="note-icon-menu-check"></i> 8</a></li>
                                                                <li><a href="#" data-value="9"><i class="note-icon-menu-check"></i> 9</a></li>
                                                                <li><a href="#" data-value="10"><i class="note-icon-menu-check"></i> 10</a></li>
                                                                <li><a href="#" data-value="11"><i class="note-icon-menu-check"></i> 11</a></li>
                                                                <li><a href="#" data-value="12"><i class="note-icon-menu-check"></i> 12</a></li>
                                                                <li><a href="#" data-value="14" class="checked"><i class="note-icon-menu-check"></i> 14</a></li>
                                                                <li><a href="#" data-value="18"><i class="note-icon-menu-check"></i> 18</a></li>
                                                                <li><a href="#" data-value="24"><i class="note-icon-menu-check"></i> 24</a></li>
                                                                <li><a href="#" data-value="36"><i class="note-icon-menu-check"></i> 36</a></li>
                                                            </div>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-color"><button type="button" class="note-btn btn btn-default btn-sm note-current-color-button" tabindex="-1" title="" data-original-title="Recent Color" data-backcolor="#FFFF00"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0);"></i></button><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="More Color"> <span class="note-icon-caret"></span></button>
                                                            <div class="dropdown-menu">
                                                                <div class="note-palette">
                                                                    <div class="note-palette-title">Background Color</div>
                                                                    <div> <button type="button" class="note-color-reset btn btn-light" data-event="backColor" data-value="inherit">Transparent </button> </div>
                                                                    <div class="note-holder" data-event="backColor">
                                                                        <div class="note-color-palette">
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="note-palette">
                                                                    <div class="note-palette-title">Foreground Color</div>
                                                                    <div> <button type="button" class="note-color-reset btn btn-light" data-event="removeFormat" data-value="foreColor">Reset to default </button> </div>
                                                                    <div class="note-holder" data-event="foreColor">
                                                                        <div class="note-color-palette">
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button></div>
                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button>
                                                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="Paragraph"><i class="note-icon-align-left"></i> <span class="note-icon-caret"></span></button>
                                                            <div class="dropdown-menu">
                                                                <div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div>
                                                                <div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-btn-group btn-group note-height">
                                                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="Line Height"><i class="note-icon-text-height"></i> <span class="note-icon-caret"></span></button>
                                                            <div class="dropdown-menu note-check dropdown-line-height">
                                                                <li><a href="#" data-value="1.0" class=""><i class="note-icon-menu-check"></i> 1.0</a></li>
                                                                <li><a href="#" data-value="1.2" class=""><i class="note-icon-menu-check"></i> 1.2</a></li>
                                                                <li><a href="#" data-value="1.4" class=""><i class="note-icon-menu-check"></i> 1.4</a></li>
                                                                <li><a href="#" data-value="1.5" class=""><i class="note-icon-menu-check"></i> 1.5</a></li>
                                                                <li><a href="#" data-value="1.6" class=""><i class="note-icon-menu-check"></i> 1.6</a></li>
                                                                <li><a href="#" data-value="1.8" class=""><i class="note-icon-menu-check"></i> 1.8</a></li>
                                                                <li><a href="#" data-value="2.0" class=""><i class="note-icon-menu-check"></i> 2.0</a></li>
                                                                <li><a href="#" data-value="3.0" class=""><i class="note-icon-menu-check"></i> 3.0</a></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-btn-group btn-group note-codeview"><button type="button" class="note-btn btn btn-default btn-sm btn-codeview" tabindex="-1" title="" data-original-title="Code View"><i class="note-icon-code"></i></button><button type="button" class="note-btn btn btn-default btn-sm note-fullscreen2" tabindex="-1" title="" data-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button></div>
                                                </div>
                                                <div class="note-editing-area">
                                                    <div class="note-handle">
                                                        <div class="note-control-selection">
                                                            <div class="note-control-selection-bg"></div>
                                                            <div class="note-control-holder note-control-nw"></div>
                                                            <div class="note-control-holder note-control-ne"></div>
                                                            <div class="note-control-holder note-control-sw"></div>
                                                            <div class="note-control-sizing note-control-se"></div>
                                                            <div class="note-control-selection-info"></div>
                                                        </div>
                                                    </div><textarea class="note-codable"></textarea>
                                                    <div class="note-editable panel-body" contenteditable="true" style="height: 284px; min-height: 60px;">
                                                        <p><br></p>
                                                    </div>
                                                </div>
                                                <div class="note-statusbar">
                                                    <div class="note-resizebar">
                                                        <div class="note-icon-bar"></div>
                                                        <div class="note-icon-bar"></div>
                                                        <div class="note-icon-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="modal link-dialog" aria-hidden="false" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title">Insert Link</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group note-form-group"><label class="note-form-label">Text to display</label><input class="note-link-text form-control  note-form-control  note-input" type="text"></div>
                                                                <div class="form-group note-form-group"><label class="note-form-label">To what URL should this link go?</label><input class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div>
                                                                <div class="checkbox"> <label for="sn-checkbox-open-in-new-window"> <input type="checkbox" id="sn-checkbox-open-in-new-window" checked="">Open in new window</label></div>
                                                            </div>
                                                            <div class="modal-footer"><button href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn disabled" disabled="">Insert Link</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal" aria-hidden="false" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title">Insert Image</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group note-form-group note-group-select-from-files"><label class="note-form-label">Select from files</label><input class="note-image-input form-control note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div>
                                                                <div class="form-group note-group-image-url" style="overflow:auto;"><label class="note-form-label">Image URL</label><input class="note-image-url form-control note-form-control note-input  col-md-12" type="text"></div>
                                                            </div>
                                                            <div class="modal-footer"><button href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn disabled" disabled="">Insert Image</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal" aria-hidden="false" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title">Insert Video</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group note-form-group row-fluid"><label class="note-form-label">Video URL? <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input class="note-video-url form-control  note-form-control note-input span12" type="text"></div>
                                                            </div>
                                                            <div class="modal-footer"><button href="#" class="btn btn-primary note-btn note-btn-primary  note-video-btn disabled" disabled="">Insert Video</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal" aria-hidden="false" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title">Help</h4>
                                                            </div>
                                                            <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.8</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                    <div class="text-right app-edittor-limit-text">Characters : 0</div><i
                                        class="form-control-feedback" data-bv-icon-for="ticket_body"
                                        style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="ticket_body"
                                        data-bv-result="NOT_VALIDATED" style="display: none;">Ticket Body is
                                        required</small></div>
                            </div>
                            <div class="panel-footer text-center">
                                <button type="submit" class="btn btn-success btn-lg added-ripples"><i
                                        class="fa fa-ticket"></i> Create Ticket</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <script type="text/javascript">
                var custom_flds = {
                            "4": [{
                                "id": "AA",
                                "cat_id": "4",
                                "title": "test",
                                "help_text": "test",
                                "type": "T",
                                "opt_json_base": "",
                                "is_required": "Y",
                                "default_value": "",
                                "is_api_based": "N",
                                "is_private": "N",
                                "is_on_grid": "Y",
                                "api_name": "",
                                "on_submit_api_check": "N",
                                "status": "A",
                                "fld_order": "0"
                            }, {
                                "id": "AB",
                                "cat_id": "4",
                                "title": "radio",
                                "help_text": "radio",
                                "type": "R",
                                "opt_json_base": "OptionA,OptionB,OptionC",
                                "is_required": "Y",
                                "default_value": "",
                                "is_api_based": "N",
                                "is_private": "N",
                                "is_on_grid": "N",
                                "api_name": "",
                                "on_submit_api_check": "N",
                                "status": "A",
                                "fld_order": "0"
                            }, {
                                "id": "AC",
                                "cat_id": "4",
                                "title": "date de retour",
                                "help_text": "date de retour",
                                "type": "A",
                                "opt_json_base": "",
                                "is_required": "Y",
                                "default_value": "",
                                "is_api_based": "N",
                                "is_private": "N",
                                "is_on_grid": "N",
                                "api_name": "",
                                "on_submit_api_check": "N",
                                "status": "A",
                                "fld_order": "0"
                            }, {
                                "id": "AD",
                                "cat_id": "4",
                                "title": "Ordinateur",
                                "help_text": "Ordinateur",
                                "type": "O",
                                "opt_json_base": "",
                                "is_required": "Y",
                                "default_value": "",
                                "is_api_based": "N",
                                "is_private": "N",
                                "is_on_grid": "N",
                                "api_name": "",
                                "on_submit_api_check": "N",
                                "status": "A",
                                "fld_order": "0"
                            }, {
                                "id": "AE",
                                "cat_id": "4",
                                "title": "test4",
                                "help_text": "test4",
                                "type": "D",
                                "opt_json_base": "OptionA,OptionB,OptionC",
                                "is_required": "Y",
                                "default_value": "",
                                "is_api_based": "N",
                                "is_private": "N",
                                "is_on_grid": "N",
                                "api_name": "",
                                "on_submit_api_check": "N",
                                "status": "A",
                                "fld_order": "0"
                            }]
                        };
                        var cat_parent_list = {
                            "1": [],
                            "2": [],
                            "3": [],
                            "4": [],
                            "5": [],
                            "6": [],
                            "7": []
                        };
    
                        function resetFile(obj) {
                            var parentBodyElem = obj.closest(".app-file-upload-container");
                            var previewWindowElem = parentBodyElem.find(".file-preview-img");
                            previewWindowElem.addClass("hidden");
                            parentBodyElem.find("input[type=file]").val("");
                            obj.addClass("hidden");
                        }
    
                        function enable_all_custom_field_by(cat_id) {
                            activeFlields = $(".grp-cat-" + cat_id);
                            if (activeFlields.length > 0) {
                                activeFlields.find("input,select").prop("disabled", false);
                                activeFlields.show();
                            }
                        }
    
                        function disable_all_custom_field() {
                            activeFlields = $(".custom-field-group");
                            if (activeFlields.length > 0) {
                                activeFlields.hide();
                                activeFlields.find("input,select").prop("disabled", false);
                            }
                        }
    
                        function show_custom_inputs() {
                            disable_all_custom_field();
                            var cat_id = $("#cat_id").val();
                            if (cat_id != "") {
                                var parent_list = cat_parent_list[cat_id];
                                if (parent_list && parent_list.length > 0) {
                                    for (var pi = 0; pi < parent_list.length; pi++) {
                                        console.log("HC3-" + parent_list[pi]);
                                        enable_all_custom_field_by(parent_list[pi]);
                                    }
                                }
                                enable_all_custom_field_by(cat_id);
                            }
                        }
                        $(function() {
                            CallOnAjaxComplete("https://demo.appsbd.com/support-system/user/email-check/ticket-open/user_email.html", function(event, xhr, settings) {
                                if (!xhr.responseJSON.valid) {
                                    _popupajaxLoadComplted();
                                }
                            });
                            show_custom_inputs();
                            $(".app-custom-fld-container").removeClass("app-custom-fld-container");
                            $("#cat_id").on("change", function(e) {
                                show_custom_inputs();
                            });
                            $('body').on("click", ".app-btn-file-reset", function(e) {
                                e.preventDefault();
                                $(this).closest(".app-file-main-container").fadeOut('fast', function() {
                                    $(this).remove();
                                });
    
                            });
                            $('body').on("click", ".app-btn-file-reset-2", function(e) {
                                e.preventDefault();
                                $(this).closest(".panel").fadeOut('fast', function() {
                                    $(this).remove();
                                });
    
                            });
                            $("body").on("change", ".app-ticket-file", function() {
    
                                var parentBodyElem = $(this).closest(".app-file-upload-container");
                                var resetInput = parentBodyElem.find(".app-btn-file-reset");
                                var previewWindowElem = parentBodyElem.find(".file-preview-img");
                                var fileTypeElem = previewWindowElem.find(".u-file-type");
                                var fileSizeElem = previewWindowElem.find(".u-file-size");
                                var fileIconElem = previewWindowElem.find(".u-file-preview > i");
                                var fileImgElem = previewWindowElem.find(".u-file-preview > img");
    
                                //this.files[0].size gets the size of your file. u-file-dtls>u-file-type+u-file-size, 
    
                                var maxfilezone = 2097152;
                                var fileExtension = this.files[0].name.substr(-4);
                                var fileAccepts = $(this).attr("accept");
                                var isExtensionOk = fileAccepts.indexOf(fileExtension) != -1;
                                if (maxfilezone < this.files[0].size) {
                                    $(this).val("");
                                    resetFile(resetInput);
                                    ShowGritterMsg("Max file size is  2 MB", false, false, "Large File Error", 'times-circle-o');
                                } else if (!isExtensionOk) {
                                    $(this).val("");
                                    resetFile(resetInput);
                                    ShowGritterMsg("Uploaded file is not  supported", false, false, "File Error", 'times-circle-o');
                                } else {
                                    var isImg = this.files[0].type.substr(0, 3).toLowerCase();
                                    if (isImg == "ima") {
                                        var fr = new FileReader();
                                        // when image is loaded, set the src of the image where you want to display it
                                        fr.onload = function(e) {
                                            fileIconElem.addClass("hidden")
                                            fileImgElem.attr("src", this.result);
                                            fileImgElem.removeClass("hidden");
                                            previewWindowElem.removeClass("hidden");
                                        };
                                        fr.readAsDataURL(this.files[0]);
                                    } else {
                                        fileImgElem.addClass("hidden");
                                        previewWindowElem.removeClass("hidden");
                                        fileIconElem.removeClass("hidden");
    
                                    }
    
                                    var type = typeTitle = this.files[0].type;
                                    if (type == "application/x-zip-compressed") {
                                        typeTitle = type = "Zip File"
                                        fileIconElem.attr("class", "fa fa-file-zip-o pull-right");
                                        fileIconElem.css("color", "#fbb847");
                                    } else if (type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || type == "application/msword") {
                                        typeTitle = type = "Word File"
                                        fileIconElem.attr("class", "fa fa-file-word-o pull-right");
                                        fileIconElem.css("color", "#2C5990");
                                    } else if (type == "application/pdf") {
                                        typeTitle = type = "PDF File"
                                        fileIconElem.attr("class", "fa fa-file-pdf-o pull-right");
                                        fileIconElem.css("color", "#E42101");
                                    } else {
                                        if (type.length > 20) {
                                            type = type.substr(0, 17) + "...";
                                        }
                                        fileIconElem.attr("class", "fa fa-file-o pull-right").css("color", "#CCCCCC");;
                                    }
                                    fileTypeElem.text(type).attr("title", typeTitle);;
                                    fileSizeElem.text(((this.files[0].size / (1024 * 1024)).toFixed(2)) + " MB");
                                    resetInput.removeClass("hidden");
                                }
                            });
                        });
            </script>
        </section>
    </div>
@endsection
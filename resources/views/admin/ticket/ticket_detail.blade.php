

@extends('layout.admin.ticket.ticket_master')
@section('main-content')
<div id="main-content" class="content-wrapper" style="min-height: 515px;">
   <div id="MainFormLoader" class="MainLoader">
      <div class="msgText"></div>
   </div>
   <section class="content-header">
      <h1>
         <i class="fa fa-ticket"></i>
         Ticket Details 
      </h1>
      <ol class="breadcrumb">
         <li>
            <a href="https://demo.appsbd.com/support-system/ticket/active-tickets.html"><i class="fa fa-ticket"></i> Active Tickets</a>
         </li>
         <li>
            Ticket Details 
         </li>
      </ol>
   </section>
   <section class="content">
      <div class="box box-primary">
         <div class="box-body text-justify app-ticket-dtls">
            <div class="col-md-8 md-r-10 p-l-0 ticket-dtls">
               <div id="ticket_6" class="panel panel-default app-panel-box m-b-10">
                  <div class="panel-heading">
                     <h4 class="m-0" title="Guest Ticket Test">{{$data->ticket_subject}}</h4>
                  </div>
                  <div class="panel-body text-justify">
                     {{$data->ticket_body}}
                  </div>
               </div>
               <div id="id_6_1" class=" panel panel-default app-panel-box m-b-10 ticket-reply admin-user">
                  <div class="panel-body text-justify">
                     <div class="user-type">Super Admin</div>
                     <div class="row">
                        <div class=" col-xs-3 col-sm-2 col-md-2 user-profile ">
                           <div class="r-img sm-user-img  online ">
                              <div class="o-w">
                                 <div class="tooltip2 img-div tooltipstered added-tooltip2">
                                    <img src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg" alt="" class="">
                                 </div>
                              </div>
                           </div>
                           <div class="tooltip2 r-user-title tooltipstered added-tooltip2">admin</div>
                           <div class="r-user-title">
                              Feb 20, 2020<br>
                              07:07 
                           </div>
                        </div>
                        <div class="col-xs-9 col-sm-10 col-md-10">
                           <div class="reply-text">
                              <p>hey wat it do</p>
                           </div>
                           <div class="ticket-footer-info">
                              <div class="row">
                                 <div class="col-xs-6 col-sm-4">
                                    <div class="pro-row">
                                       <div class="pro-title">Ticket Status </div>
                                       <div class="pro-value">
                                          <span class="text-info text-bold"><i class="fa fa-hourglass-1"></i> In Progress</span> 
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6"></div>
                                 <div class="col-xs-12 col-sm-2 text-right text-italic p-l-0">
                                    <a href="https://demo.appsbd.com/support-system/admin/ticket/edit-reply/6/1.html" class="popupformWR apopf" data-onclose="ReloadSiteUrl" data-effect="mfp-move-from-top">Edit</a> &nbsp;
                                    <i data-tooltip-position="top" class="tooltip2 fa fa-eye-slash u-unseen tooltipstered added-tooltip2"></i> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="new_reply_here"></div>
               <div class="panel panel-default">
                  <div class="panel-body">
                     <div class="text-success">Current Ticket Status : <span class="ticket-status"><span class="text-danger text-bold"><i class="fa fa-user"></i> Action Required</span></span></div>
                  </div>
               </div>
               <form action="https://demo.appsbd.com/support-system/admin/ticket-confirm/ticket-reply/6.html" class="form app-ajax-form bv-form" id="reply_form" method="post" enctype="multipart/form-data" data-on-complete="on_complete" data-beforesend="on_beforesend" data-multipart="true" accept-charset="utf-8" novalidate="novalidate">
                  <input type="hidden" name="app_form" value="6d886eb90f3aba357ee7a5905771354e">
                  <div class="panel panel-default app-panel-box m-b-10">
                     <div class="panel-heading p-b-5">
                        <div class="row">
                           <h5 class="m-0 col-md-6">Reply To Ticket</h5>
                           <div class=" col-md-6 ">
                              <div class="form-group form-group-sm f-content f-hz m-b-0" style="margin-top: -5px;">
                                 <label class="control-label text-no-wrap" style="line-height: 26px;padding-right: 5px;" for="canned_msg">Canned Messages</label>
                                 <select style="width: 100%" class="form-control" id="canned_msg">
                                    <option value="">Choose..</option>
                                    <option value="3">Thanks for patient</option>
                                    <option value="4">Test Reply</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel-body text-justify">
                        <div>
                           <div class="form-group has-feedback">
                              <textarea data-no-image="true" style="min-height: 150px; padding: 5px; display: none;" data-bv-stringlength-message=" Text must be less then 256 characters length " class="form-control app-html-editor .added-ck" id="ticket_body" name="ticket_body" placeholder="Write here.." data-bv-notempty="true" data-bv-notempty-message="Reply text is required" data-bv-field="ticket_body"></textarea>
                              <div class="text-right app-edittor-limit-text">Characters : 0</div>
                              <div class="text-right app-edittor-limit-text">Characters : 0</div>
                              <div class="text-right app-edittor-limit-text">Characters : 0</div>
                              <div class="text-right app-edittor-limit-text">Characters : 0</div>
                              <div class="text-right app-edittor-limit-text">Characters : 0</div>
                              <div class="text-right app-edittor-limit-text">Characters : 0</div>
                              
                              <div class="text-right app-edittor-limit-text">Characters : 0</div>
                              <i class="form-control-feedback" data-bv-icon-for="ticket_body" style="display: none; top: 0px;"></i>
                              <small class="help-block" data-bv-validator="notEmpty" data-bv-for="ticket_body" data-bv-result="NOT_VALIDATED" style="display: none;">Reply text is required</small>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 form-horizontal">
                              <div class="form-group form-group-sm">
                                 <label class="control-label col-md-4" for="status">Set Status</label>
                                 <div class="col-md-7">
                                    <select class="form-control" id="status" name="status">
                                       <option value="">Leave as Current</option>
                                       <option value="C">Closed</option>
                                       <option value="P">In Progress</option>
                                       <option value="A">Action Required</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6"><button type="submit" class="btn btn-success btn-block btn-sm added-ripples"> Reply</button></div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-4 md-p-0 ticket-dtls">
               <div class="panel panel-default app-panel-box">
                  <div class="panel-heading">
                     <h4 class="m-0">Ticket Information</h4>
                  </div>
                  <div class="panel-body p-0" style="margin-top: -1px;">
                     <table class="table m-b-0">
                        <tbody>
                           <tr>
                              <th style="width: 122px; ">Ticket Track ID</th>
                              <th style="width: 10px; ">:</th>
                              <td>{{$data->id_ticket}}</td>
                           </tr>
                           <tr>
                              <th>Ticket User</th>
                              <th>:</th>
                              <td>
                                 <div class="u-img-wrapr " style="margin-top: -5px;margin-bottom: -10px;">
                                    <div class="grid-img  offline ">
                                       <div><img src="https://demo.appsbd.com/support-system/images/default-user-image.png" alt="[GUEST USER] " class=""></div>
                                    </div>
                                    <span class="grid-u-c">[GUEST USER] </span>
                                 </div>
                                 <a data-effect="mfp-move-from-top" class="popupformWR btn btn-xs btn-info pull-right apopf added-ripples" href=" https://demo.appsbd.com/support-system/admin/client/profile/3.html">
                                 <i class="fa fa-eye"></i> Details </a>
                              </td>
                           </tr>
                           <tr>
                              <th>Ticket Email</th>
                              <th>:</th>
                              <td>
                                 {{$data->email}}
                              </td>
                           </tr>
                           <tr>
                              <th>Ticket Priority</th>
                              <th>:</th>
                              <td><span class="text- label label-default">{{$data->priority}}</span></td>
                           </tr>
                           <tr>
                              <th>Ticket Category</th>
                              <th>:</th>
                              <td class="abs-c h-c">
                                 {{$data->ticket_category}} 
                                 <div class="abs-r-t m-t-5 m-r-5 ">
                                    <a href="https://demo.appsbd.com/support-system/admin/ticket/change-category/6.html" data-on-complete="ReloadSiteUrl" class="popupformWR btn btn-xs btn-success h-el apopf added-ripples" data-effect="mfp-move-from-top"><i class="fa fa-refresh"></i> Change</a>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <th>Assigned On</th>
                              <th>:</th>
                              <td id="assign-container" class="abs-c">
                                 <div class="u-img-wrapr " style="margin-top: -5px;margin-bottom: -10px;">
                                    <div class="grid-img  online ">
                                       <div><img src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg" alt="admin (You) " class=""></div>
                                    </div>
                                    <span class="grid-u-c">admin (You) </span>
                                 </div>
                                 
                                    
                                 <button class="btn btn-success" data-toggle="modal"
                                    data-target="#change" data-effect="mfp-move-from-top"> <span><i
                                        class="fa fa-wpforms"></i> Change </span>
                                </button>
                                <div class="abs-r-t m-t-5 m-r-5">

                                <div class="modal fade" id="change" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <form action="#" method="POST">
                                    {{ csrf_field() }}
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Assign On Ticket
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            Admin
                                                            <input id="assigned_on" type="assigned_on" class="form-control" name="assigned_on" required autofocus>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <th>Opened Time</th>
                              <th>:</th>
                              <td>Mar 05, 2018 02:40</td>
                           </tr>
                           <tr>
                              <th>Status</th>
                              <th>:</th>
                              <td><span class="ticket-status"><span class="text-danger text-bold"><i class="fa fa-user"></i> Action Required</span></span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="panel panel-success app-panel-box">
                  <div class="panel-heading bg-green">
                     <h4 class="m-0">
                        <i class="fa fa-sticky-note"></i> Admin Notes 
                        
                        
                        <button class="btn btn-success" data-toggle="modal"
                                    data-target="#adminnote" data-effect="mfp-move-from-top"> <span><i
                                        class="fa fa-wpforms"></i> Add Note </span>
                                </button>

                                <div class="modal fade" id="adminnote" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <form action="#" method="POST">
                                    {{ csrf_field() }}
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">New Admin Note
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                            <div class="form-group">
                                            <p>Note On :</p>
  <input type="radio" id="note_on" name="note_on" value="note_on">
  <label for="note_on">This Ticket</label><br>
  <input type="radio" id="note_on" name="note_on" value="note_on">
  <label for="note_on">Client (User)</label><br>
  </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            Note
                                                            <input id="note" type="note" class="form-control" name="note" required autofocus>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                     </h4>
                  </div>
                  <div id="admin-note" class="panel-body p-0" style="margin-top: -1px;"></div>
               </div>
               <div class="panel panel-success app-panel-box">
                  <div class="panel-heading bg-green">
                     <h4 class="m-0">
                        <i class="fa fa-clock-o"></i> Admin Work Log 

                        <button class="btn btn-success" data-toggle="modal"
                                    data-target="#adminlog" data-effect="mfp-move-from-top"> <span><i
                                        class="fa fa-wpforms"></i> Add Note </span>
                                </button>

                                <div class="modal fade" id="adminlog" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <form action="#" method="POST">
                                    {{ csrf_field() }}
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">New Work Log
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            Note
                                                            <input id="work_log" type="work_log" class="form-control" name="work_log" required autofocus>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            Work Time
                                                            <div class="input-group mb-3">

  <input type="text" id="work_time" class="form-control" name="work_time" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
    <span class="input-group-text">MIN</span>
  </div>
</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                     </h4>
                  </div>
                  <div id="wadmin-note" class="panel-body p-0" style="margin-top: -1px;"></div>
               </div>
               <div class="panel panel-default app-panel-box">
                  <div class="panel-heading">
                     <h4 class="m-0">Ticket History</h4>
                  </div>
                  <div class="panel-body p-0" style="margin-top: -1px;">
                     <ul id="app-ticket-log" class="kn-list">
                        <li id="log_6_4" class="">
                           Assign self by <span class="text-info">admin (You) </span><br>
                           <div><small><em>on Jul 29, 2020 11:44</em></small>
                              <small style="min-width: 160px;" class="pull-right"> <em>Ticket Status : <span class="text-danger text-bold"><i class="fa fa-user"></i> Action Required</span></em></small>
                           </div>
                        </li>
                        <li id="log_6_3" class="">
                           Replied by <span class="text-info">admin (You) </span><br>
                           <div><small><em>on Feb 20, 2020 07:07</em></small>
                              <small style="min-width: 160px;" class="pull-right"> <em>Ticket Status : <span class="text-info text-bold"><i class="fa fa-hourglass-1"></i> In Progress</span></em></small>
                           </div>
                        </li>
                        <li id="log_6_2" class="">
                           Assign self by <span class="text-info">admin (You) </span><br>
                           <div><small><em>on Mar 05, 2018 02:53</em></small>
                              <small style="min-width: 160px;" class="pull-right"> <em>Ticket Status : <span class="text-info text-bold"><i class="fa fa-dot-circle-o"></i> New</span></em></small>
                           </div>
                        </li>
                        <li id="log_6_1" class="">
                           Ticket Opened <span class="text-info"> </span><br>
                           <div><small><em>on Mar 05, 2018 02:40</em></small>
                              <small style="min-width: 160px;" class="pull-right"> <em>Ticket Status : <span class="text-info text-bold"><i class="fa fa-dot-circle-o"></i> New</span></em></small>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <script type="text/javascript">
               var cannedMsg={"3":{"id":"3","user_id":"","title":"Thanks for patient","canned_msg":"<p>Dear\u00a0 - ,<\/p><p>Thanks for your patient.<\/p><p><br><\/p><p>We are working on it. Please wait some more time.<\/p><p>Thanks again,<br>admin<br>Super Admin<\/p>","entry_date":"2017-12-21 23:56:05","added_by":"AA","canned_type":"T","status":"A"},"4":{"id":"4","user_id":"","title":"Test Reply","canned_msg":"<p>Dear - ,<\/p><p>Thanks for your message. We are sending to our technical team to handle it.<\/p><p><br><\/p>Thanks<br>admin<br>Super Admin","entry_date":"2017-12-22 00:14:18","added_by":"AA","canned_type":"T","status":"A"}};
                function AssignMe(rdata){
                 swal.close();
                 ShowWait(true,"Reloading",function(){
               	  
               	  ReloadSiteUrl();
                  });
                
                }		      
                function resetFile(obj){
                   	  var parentBodyElem=obj.closest(".app-file-upload-container");
               	  		var previewWindowElem=parentBodyElem.find(".file-preview-img");
               	  		previewWindowElem.addClass("hidden");
               	  		parentBodyElem.find("input[type=file]").val("");
               	  		obj.addClass("hidden");
                }
                function resetFormFile(){
               	 $(".app-file-upload-container").find(".file-preview-img").addClass("hidden");
               	 $(".app-file-upload-container").find(".app-btn-file-reset").addClass("hidden");
               	 $(".app-file-upload-container input").val("");
               	 $(".app-file-main-container:not(#main_file_btn) .panel").fadeOut("fast",function(){
               		 $(this).remove();
               	  });
                }
                function on_beforesend(form){	 
               	   form.find(">.panel").addClass("state-loading");
               	   //console.log(form);
               }  
               function on_complete(rdata,form){
               	   ShowGritterMsg(rdata.msg,rdata.status,rdata.is_sticky,rdata.title,rdata.icon);
               	   form.find(">.panel").removeClass("state-loading");
               	   if(rdata.status){
               		   $("#new_reply_here").before(rdata.data.reply);
               		   $("#app-ticket-log").prepend(rdata.data.log);
               		   _popupajaxLoadComplted();
               		   if(rdata.data.current_status=="C"){
               			   $("#reply_form").fadeOut("fast",function(e){
               				   $(this).remove();
               				   $("#re-open").removeClass("hidden");
               			   });			  
               		   }
               		   try{
                			  $(".ticket-status").html(rdata.data.current_status_str);  
               		   }catch(e){}
               		  
               		   try{
               			   $('#ticket_body').summernote('reset');
               		   }catch(e){}
               
               		   $('#reply_form')[0].reset();
                		   
               		   resetFormFile();
                		  HidePaymentBox();
               	   }
               }
               function HidePaymentBox(){
                   try{
                $("#payment-box").addClass("hidden").find("input").prop("disabled",true);
                $("#add-payment").removeClass("hidden");
                   }catch(e){}
               }
               function setCannedMsg(){
                   var id= $("#canned_msg").val();
                   try{
                  	 //console.log(cannedMsg[id].canned_msg); 
                  	 set_edittor_text("ticket_body",cannedMsg[id].canned_msg);
                   }catch(e){
                       gcl(e);
                   }
               }
               function note_added() {
                   CallMyAjax("https://demo.appsbd.com/support-system/admin/admin-note/get-notes/3/6.html", {}, function(){}, function(data) {
                       $("#admin-note").html(data);
               
                   },false);
               }
               function wnote_added() {
                   CallMyAjax("https://demo.appsbd.com/support-system/admin/work-log/get-notes/6.html", {}, function(){}, function(data) {
                       $("#wadmin-note").html(data);
               
                   },false);
               }
               $(function(){	
                AddOnCloseMethod(ReloadSiteUrl);
                AddMethodOnNewNotification(gotNewNotification);
               	$('body').on("click",".app-btn-file-reset",function(e){
               		e.preventDefault();
               		$(this).closest(".app-file-main-container").fadeOut('fast',function(){
               			$(this).remove();
               		});
               		
               	});
               	$('body').on("click",".app-btn-file-reset-2",function(e){
               		e.preventDefault();
               		$(this).closest(".panel").fadeOut('fast',function(){
               			$(this).remove();
               		});
               		
               	});
               	HidePaymentBox();
               	$("#add-payment").on("click",function(e){
                   	e.preventDefault();
                   	$("#payment-box").removeClass("hidden").find("input").prop("disabled",false);
                   	$("#add-payment").addClass("hidden");
                   });
                  $("#remove-payment").on("click",function(e){
                   	e.preventDefault();
                   	HidePaymentBox();
                   });
                  try{
                   $("#canned_msg").on("change",function(e){
                      try{
                      	setCannedMsg(); 
                      }catch(e){}
                       
                 	  });
                  }catch(e){}
               	$("body").on("change",".app-ticket-file", function() {
               		
               			var parentBodyElem=$(this).closest(".app-file-upload-container");
               			var resetInput=parentBodyElem.find(".app-btn-file-reset");
               			var previewWindowElem=parentBodyElem.find(".file-preview-img");
               			var fileTypeElem=previewWindowElem.find(".u-file-type");
               			var fileSizeElem=previewWindowElem.find(".u-file-size");
               			var fileIconElem=previewWindowElem.find(".u-file-preview > i");
               			var fileImgElem=previewWindowElem.find(".u-file-preview > img");
               			
               		  //this.files[0].size gets the size of your file. u-file-dtls>u-file-type+u-file-size, 
               		  		 
               		 var maxfilezone=2097152;
               		 var fileExtension=this.files[0].name.substr(-4);
               		 var fileAccepts=$(this).attr("accept");
               		var isExtensionOk=fileAccepts.indexOf(fileExtension)!=-1;
               		 if(maxfilezone<this.files[0].size){
               			 $(this).val("");
               			 resetFile(resetInput);
               			 ShowGritterMsg("Max file size is  2 MB",false,false,"Large File Error",'times-circle-o');	
               		 }else if(!isExtensionOk){
               			 $(this).val("");
               			 resetFile(resetInput);
               			 ShowGritterMsg("Uploaded file is not  supported",false,false,"File Error",'times-circle-o');
               		 }else{
               			 var isImg=this.files[0].type.substr(0,3).toLowerCase();					
               			 if(isImg=="ima"){					 			
               			 	var fr=new FileReader();
               				// when image is loaded, set the src of the image where you want to display it
               				fr.onload = function(e) {		
               					fileIconElem.addClass("hidden")			
               					fileImgElem.attr("src",this.result);
               					fileImgElem.removeClass("hidden");
               					previewWindowElem.removeClass("hidden");					
               				};
               				fr.readAsDataURL(this.files[0]);
               			 }else{
               				 fileImgElem.addClass("hidden");
               				previewWindowElem.removeClass("hidden");	
               				fileIconElem.removeClass("hidden");				
               				
               			 }
               			
               			 var type=typeTitle=this.files[0].type;			
               			 if(type=="application/x-zip-compressed"){
               				 typeTitle=type="Zip File"				 
               				 fileIconElem.attr("class","fa fa-file-zip-o pull-right");
               				 fileIconElem.css("color","#fbb847");
               			 }else if(type=="application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||type=="application/msword"){
               				 typeTitle=type="Word File"				 
               				 fileIconElem.attr("class","fa fa-file-word-o pull-right");
               				 fileIconElem.css("color","#2C5990");
               			 }else if(type=="application/pdf"){
               				 typeTitle=type="PDF File"				 
               				 fileIconElem.attr("class","fa fa-file-pdf-o pull-right");
               				 fileIconElem.css("color","#E42101");
               			 }else{
               				 if(type.length>20){
               					 type=type.substr(0,17)+"...";
               				 }
               				 fileIconElem.attr("class","fa fa-file-o pull-right").css("color","#CCCCCC");;
               			 }
               			fileTypeElem.text(type).attr("title",typeTitle);;
               			fileSizeElem.text(((this.files[0].size/(1024*1024)).toFixed(2))+" MB");	
               			resetInput.removeClass("hidden");
               		 }
               		  
               	});
               	
               });
               
               function gotNewNotification(rdata){
                   if($("#ticket_"+rdata.ticket_id).length>0){
                       reloadReply(rdata.ticket_id);
                       return true;
                   }
                   return false;
               }
               function reloadReply(ticket_id){
                   var ticketdlts=$(".ticket-dtls");
                   var ticketLogdlts=$("#app-ticket-log");
                   //$("#new_reply_here").before(rdata.data.reply);
                   var previous_elem=null;
                   CallMyAjax("https://demo.appsbd.com/support-system/admin/ticket/load-ticket-reply/"+ticket_id, {}, function(){
                       //before send
                   }, function(rdata){
                       //success
                       if(rdata.status){
                           for(var i in rdata.data){
                               if(ticketdlts.find("#"+rdata.data[i].id).length==0){
                                  if(previous_elem!=null){
                                      previous_elem.after(rdata.data[i].html);
                                  }else{
                                      previous_elem=$(rdata.data[i].html);
                                      $("#new_reply_here").before(previous_elem);
                                  }
                               }else{
                                   previous_elem=ticketdlts.find("#"+rdata.data[i].id);
                               }
                           }
                           for(var i in rdata.tlog){
                               if(ticketLogdlts.find("#"+rdata.tlog[i].id).length==0){
                                   ticketLogdlts.prepend(rdata.tlog[i].html);
                               }
                           }
                       }
               
                   });
               }
            </script>
         </div>
      </div>
   </section>
</div>
@endsection
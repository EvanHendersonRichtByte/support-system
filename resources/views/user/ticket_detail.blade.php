@extends('layout.user.ticket.ticket_master')

@section('tab-title')
Ticket Details
@endsection

@section('content-title')
Ticket Details
@endsection

@section('main-content')
<div class="app-content p-t-15">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="row">

                    <section class="content-breadcrumb">
                        <ol class="breadcrumb m-b-10">
                            <li>
                                <a href="{{url('/ticket/active-tickets')}}"><i class="fa fa-ticket"></i> Active
                                    Tickets</a>
                            </li>
                            <li>
                                <i class=""></i>
                                Ticket Details </li>
                        </ol>
                    </section>
                    <div class="col-md-8 md-r-10 p-l-0 ticket-dtls">
                        <div class="panel panel-default app-panel-box m-b-10">
                            <div class="panel-heading">
                                <h4 class="m-0" title="What is Lorem Ipsum?">{{$tickets->ticket_subject}}</h4>
                            </div>
                            <div class="panel-body text-justify app-ticket-dtls">
                                {{$tickets->ticket_body}}
                            </div>
                        </div>
                        <div id="new_reply_here"></div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-success">Current Ticket Status : <span class="ticket-status"><span
                                            class="text-info text-bold"><i class="fa fa-dot-circle-o"></i>
                                            {{$tickets->status}}</span></span></div>
                            </div>
                        </div>
                        <form action="https://demo.appsbd.com/support-system/ticket-confirm/ticket-reply/4.html"
                            class="form app-ajax-form bv-form" id="reply_form" method="post"
                            enctype="multipart/form-data" data-on-complete="on_complete" data-beforesend="on_beforesend"
                            data-multipart="true" accept-charset="utf-8" novalidate="novalidate">
                            <input type="hidden" name="app_form" value="a8a9603485fdfa9cbd764dfd6d082531">
                            <div class="panel panel-default app-panel-box m-b-10">
                                <div class="panel-heading">
                                    <h5 class="m-0">Reply To Ticket</h5>
                                </div>
                                <div class="panel-body text-justify">
                                    <div>
                                        <div class="form-group has-feedback">
                                            <textarea data-no-image="true"
                                                style="min-height: 80px; padding: 5px; display: none;"
                                                data-bv-stringlength-message=" Text must be less then 256 characters length "
                                                class="form-control app-html-editor .added-ck" id="ticket_body"
                                                name="ticket_body" placeholder="Write here.." data-bv-notempty="true"
                                                data-bv-notempty-message="Reply text is required"
                                                data-bv-field="ticket_body"></textarea>
                                            
                                            <div class="text-right app-edittor-limit-text">Characters : 0</div>
                                            <i class="form-control-feedback" data-bv-icon-for="ticket_body"
                                                style="display: none; top: 0px;"></i>
                                            <small class="help-block" data-bv-validator="notEmpty"
                                                data-bv-for="ticket_body" data-bv-result="NOT_VALIDATED"
                                                style="display: none;">Reply text is required</small></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-horizontal">
                                            <div class="form-group form-group-sm">
                                                <label class="control-label col-md-4" for="status">Set
                                                    Status</label>
                                                <div class="col-md-7">
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="">Leave as Current</option>
                                                        <option value="C">Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"><button type="submit"
                                                class="btn btn-success btn-block btn-sm added-ripples">
                                                Reply</button></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="re-open" class="panel panel-default app-panel-box m-b-10 hidden">
                            <div class="panel-body text-center bg-danger">
                                Ticket closed do you want to re-open? <a
                                    href="https://demo.appsbd.com/support-system/ticket/re-open/4.html"
                                    class="btn btn-xs btn-info added-ripples"><i class="fa fa-ticket"></i>
                                    Re-Open</a>
                            </div>
                        </div>
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
                                            <td>{{$tickets->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Ticket User</th>
                                            <th>:</th>
                                            <td>
                                                <div class="u-img-wrapr "
                                                    style="margin-top: -5px;margin-bottom: -10px;">
                                                    <div class="grid-img  online ">
                                                        <div><img
                                                                src="https://demo.appsbd.com/support-system/images/default-user-image.png"
                                                                alt="Mohamed Sharaf" class=""></div>
                                                    </div><span class="grid-u-c">{{$user->username}}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Ticket Priority</th>
                                            <th>:</th>
                                            @if ($tickets->priority == 'Low')
                                                <td><span class="text- label label-secondary">{{$tickets->priority}}</span></td>
                                            @elseif($tickets->priority == 'Medium')
                                                <td><span class="text- label label-primary">{{$tickets->priority}}</span></td>
                                            @elseif($tickets->priority == 'High')
                                                <td><span class="text- label label-warning">{{$tickets->priority}}</span></td>
                                            @elseif($tickets->priority == 'Urgent')
                                                <td><span class="text- label label-danger">{{$tickets->priority}}</span></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th>Ticket Category</th>
                                            <th>:</th>
                                            <td>{{$tickets->ticket_category}}</td>
                                        </tr>
                                        <tr>
                                            <th>Assigned On</th>
                                            <th>:</th>
                                            <td id="assign-container" class="abs-c">
                                                <div class="u-img-wrapr "
                                                    style="margin-top: -5px;margin-bottom: -10px;">
                                                    <div class="grid-img  online ">
                                                        <div><img
                                                                src="https://demo.appsbd.com/support-system/images/default-user-image.png"
                                                                alt="admin" class=""></div>
                                                    </div><span class="grid-u-c">admin</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Opened Time</th>
                                            <th>:</th>
                                            <td>{{$tickets->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <th>:</th>
                                            <td><span class="ticket-status"><span class="text-info text-bold"><i
                                                            class="fa fa-dot-circle-o"></i>
                                                        {{$tickets->status}}</span></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default app-panel-box">
                            <div class="panel-heading">
                                <h4 class="m-0">Ticket History</h4>
                            </div>
                            <div class="panel-body p-0" style="margin-top: -1px;">
                                <ul id="app-ticket-log" class="kn-list">
                                    <li id="log_4_2" class="">
                                        Assign self by <span class="text-info">admin </span><br>
                                        <div><small><em>on Mar 05, 2018 03:23</em></small>
                                            <small style="min-width: 160px;" class="pull-right"> <em>Ticket
                                                    Status : <span class="text-info text-bold"><i
                                                            class="fa fa-dot-circle-o"></i>
                                                        New</span></em></small>
                                        </div>
                                    </li>
                                    <li id="log_4_1" class="">
                                        Ticket Opened by <span class="text-info">Mohamed Sharaf (You)
                                        </span><br>
                                        <div><small><em>on Feb 06, 2018 12:30</em></small>
                                            <small style="min-width: 160px;" class="pull-right"> <em>Ticket
                                                    Status : <span class="text-info text-bold"><i
                                                            class="fa fa-dot-circle-o"></i>
                                                        New</span></em></small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
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
   }
}

$(function(){	

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
                    </script>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-left m-t-0 m-b-5" style="font-size: 10px; font-style: italic;">
                ** The time is base on Asia/Dhaka timezone</div>
        </div>
    </div>
</div>

<div class="row">
    <footer class="">
        <div class="main-footer">
            <div class="container ">
                <div class="row main-footer-top">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p>This a support system of for our client. We will try our best for you. Please
                                    feel free to contact with us</p>
                            </div>
                        </div>
                        <div class="row"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-copywrite text-center">
            <div class="container ">
                <div class="row main-footer-top">

                    <div class="col-md-12">
                        © Copyright <a href="http://www.appsbd.com">appsbd.com</a> 2020
                        <div class="row"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<button class="go_top btn-theme animated hidden zoomOut"><i class="fa fa-chevron-up"></i></button>
</div>

<script src="https://demo.appsbd.com/support-system/theme/client/js/theme-main.js" type="text/javascript"></script>
<script type="text/javascript">
    var __previous_h=-1;
            $(function(){
                $('body').removeClass("body-loading");

                $(window).on("scroll",function(e){
                    __set_stickey();
                });
                __set_stickey();
                $(".go_top").on("click",function(e){
                    e.preventDefault();
                     $("html, body").animate({ scrollTop: 0 }, 600);
                });
                
            });	
            function __set_stickey(){
                __goTop();
                return;
                                }	
            function __goTop(){
                var height=$(window).height();
                var windowTop = $(window).scrollTop();						
                if(windowTop>50){
                    $(".go_top").removeClass("hidden").removeClass("zoomOut").addClass("zoomIn");
                }else{						
                    $(".go_top").removeClass("zoomIn").addClass("zoomOut");
                }
            }		
</script>
<script type="text/javascript">
    var chatbox=null;
$(function () {
    chatbox=$.appsbdChat({
        url:"https://demo.appsbd.com/support-system/chat",
        chatKey:"ct5f27b33572e07",
        chatTitle:"Appsbd Live Chat",
        chatSubTitle:"Smart Techonology",
        chatLogo:"https://demo.appsbd.com/support-system/images/logo.png",
        preMsg:"Welcome to our chat system.if you want to start chat with our agent then please click the button bellow.",
        startBtnText:'Start Conversation',
        audioPath:"https://demo.appsbd.com/support-system/images/chatnoti.ogg",
        userImg:"https://demo.appsbd.com/support-system/images/default-user-image.png",
        fileUrl:"https://demo.appsbd.com/support-system/chat",
        fileAccepts:".jpg,.png,.zip",
        maxFileSize:2,
        loadMoreText:"Load More",
        buttonIcon:"ap ap-chat2",
        onInit:function (plugin) {
        }
    });
    //chatbox.Resize();
});

</script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-97189522-3" type="text/javascript"></script>
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-97189522-3');
</script>


<iframe id="app-print-iframe" style="border:none;height:0;width:0" __idm_frm__="2622"></iframe>
<div class="note-popover popover in note-link-popover bottom">
    <div class="arrow"></div>
    <div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
        <div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm"
                tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button><button
                type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title=""
                data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button></div>
    </div>
</div>
<div class="note-popover popover in note-image-popover bottom">
    <div class="arrow"></div>
    <div class="popover-content note-children-container">
        <div class="note-btn-group btn-group note-imagesize"><button type="button"
                class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span
                    class="note-fontsize-10">100%</span></button><button type="button"
                class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span
                    class="note-fontsize-10">50%</span></button><button type="button"
                class="note-btn btn btn-default btn-sm" tabindex="-1" title=""
                data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button></div>
        <div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm"
                tabindex="-1" title="" data-original-title="Float Left"><i
                    class="note-icon-align-left"></i></button><button type="button"
                class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i
                    class="note-icon-align-right"></i></button><button type="button"
                class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i
                    class="note-icon-align-justify"></i></button></div>
        <div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm"
                tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
    </div>
    @endsection
<script type="text/javascript">
    var chatbox = null;
    $(function() {
        chatbox = $.appsbdChat({
            url: "https://demo.appsbd.com/support-system/chat",
            chatKey: "ct5f1110517a6b8",
            chatTitle: "Appsbd Live Chat",
            chatSubTitle: "Smart Techonology",
            chatLogo: "https://demo.appsbd.com/support-system/images/logo.png",
            preMsg: "Welcome to our chat system.if you want to start chat with our agent then please click the button bellow.",
            startBtnText: 'Start Conversation',
            audioPath: "https://demo.appsbd.com/support-system/images/chatnoti.ogg",
            userImg: "https://demo.appsbd.com/support-system/images/default-user-image.png",
            fileUrl: "https://demo.appsbd.com/support-system/chat",
            fileAccepts: ".jpg,.png,.zip",
            maxFileSize: 2,
            loadMoreText: "Load More",
            buttonIcon: "ap ap-chat2",
            onInit: function(plugin) {}
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


<iframe id="app-print-iframe" style="border:none;height:0;width:0" __idm_frm__="177"></iframe>
<div id="apbd-cht-container">
    <div id="apbd-cht-conversation" class="apc-msg-window apc-not-started" style="height: 450px; display: none;">
        <div class="apc-alert-msg"></div> <button class="apc-header-sound apc-enable">
            <i class="ap-volume-high ap"></i> </button>
        <button class="apc-header-close-window">
            <svg style="height: 15px;width: 15px;">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-340.000000, -32.000000)" fill="#FFFFFF">
                        <polygon points="350.656537 44 346 39.343463 341.343463 44 340 42.656537 344.656537 38 340 33.343463 341.343463 32 346 36.656537 350.656537 32 352 33.343463 347.343463 38 352 42.656537"></polygon>
                    </g>
                </g>
            </svg>
        </button>
        <div class="apc-header">
            <div class="apc-header-row">
                <div class="apc-company-img">
                    <img src="https://demo.appsbd.com/support-system/images/logo.png" alt="Logo">
                </div>
                <div class="apc-header-info">
                    <div class="apc-header-info-title">Appsbd Live Chat</div>
                    <div class="apc-header-info-tag-line">Smart Techonology</div>
                </div>

            </div>

        </div>
        <div id="apc-system-single-msg" class="apc-system-single-msg">
            <div class="apc-msg">

            </div>
        </div>
        <div class="apc-msgs">
            <div class="apc-load-move text-center"><button class="btn btn-xs btn-info added-ripples"><i class="fa fa-arrow-circle-o-down"></i> Load More</button></div>
        </div>
        <div class="apc-type-container">
            <div class="apc-msg-typing">
                <div class="apc-spinner">
                    <div class="apc-bounce1"></div>
                    <div class="apc-bounce2"></div>
                    <div class="apc-bounce3"></div>
                </div>
                typing
            </div>
            <div class="apc-file-up-status"></div> <textarea id="apbd-cht-input" placeholder="Send a message.." class="apc-chat-input"></textarea>
            <div class="apc-send-ctrl">
                <i class="apc-attach-btn fa fa-paperclip"></i>
                <i class="apc-send-btn fa fa-send"></i>
            </div>
        </div>
        <div class="apc-start text-center">
            <p class="text-center">
                Welcome to our chat system.if you want to start chat with our agent then please click the button bellow..
            </p>
            <button id="apc-start-chat-btn" class="btn btn-success added-ripples">Start Conversation </button>
        </div>
    </div>
    <div id="apbd-cht-btn" class="apc-main-icon">
        <i class="ap ap-chat2"></i>
    </div>
</div>
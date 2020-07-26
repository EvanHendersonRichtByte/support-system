@extends('layout.admin.chat.chat_master')

@section('tab-title')
    Chat Panel
@endsection

@section('main-content')
    <div id="main-content" class="content-wrapper" style="min-height: 606px;">
        <div id="MainFormLoader" class="MainLoader">
            <div class="msgText"></div>
        </div>
    
        <section class="content-header">
            <h1>
                <i class="ap ap-images"></i>
                Chat Panel </h1>
            <ol class="breadcrumb">
                <li>
                    Chat Panel </li>
            </ol>
        </section>
    
        <section class="content">
            <div class="box box-solid  m-b-0">
                <div class="box-body border-radius-none p-0">
                    <div id="apbd-cht-admin-container" style="height: 476px;">
                        <div class="apc-main-container">
                            <div class="apc-loading" style="display: none;">
                                <div class="apc-loading-msg">
                                    Loading Chat Data Please wait.. </div>
                            </div>
                            <div class="apc-user-list ">
                                <div class="apc-pnl-header">
                                    User List <i class="apc-close-btn fa fa-angle-left"></i>
                                </div>
                                <div class="apc-pnl-content">
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 250px;">
                                        <ul class="apc-chat-list" style="height: 203px; overflow: hidden; width: auto;">
                                            <li id="btn-chat-6" data-istyping="N" data-chatid="6" class="apc-active"><span
                                                    class="name">Mohamed Sharaf</span><span class="apc-rtc-c badge"><span
                                                        class="apc-btn-rc">0</span></span>
                                            </li>
                                            <li id="btn-chat-4" data-istyping="N" data-chatid="4"><span class="name">Guest
                                                    User</span><span class="apc-rtc-c badge"><span
                                                        class="apc-btn-rc">0</span></span>
                                            </li>
                                            <li id="btn-chat-3" data-istyping="N" data-chatid="3"><span class="name">Guest
                                                    User</span><span class="apc-rtc-c badge"><span
                                                        class="apc-btn-rc">0</span></span>
                                            </li>
                                            <li id="btn-chat-2" data-istyping="" data-chatid="2"><span class="name">Guest
                                                    User</span><span class="apc-rtc-c badge"><span
                                                        class="apc-btn-rc">0</span></span>
                                            </li>
                                            <li id="btn-chat-1" data-istyping="N" data-chatid="1"><span class="name">Guest
                                                    User</span><span class="apc-rtc-c badge"><span
                                                        class="apc-btn-rc">0</span></span>
                                            </li>
                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 250px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                    <div class="apc-diver bg-red" style="height: 44px;">Last 5 Closed Chat</div>
                                    <div class="slimScrollDiv"
                                        style="position: relative; overflow: hidden; width: auto; height: 250px;">
                                        <ul class="apc-chat-end-list" style="height: 183px; overflow: hidden; width: auto;">
                                            <li id="btn-chat-5" data-istyping="N" data-chatid="5"><span class="name">Mohamed
                                                    Sharaf</span> <span class="apc-rtc-c badge"><span
                                                        class="apc-btn-rc">0</span></span>
                                            </li>
                                        </ul>
                                        <div class="slimScrollBar"
                                            style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 183px;">
                                        </div>
                                        <div class="slimScrollRail"
                                            style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="apc-chat-container">
                                <div class="apc-pnl-header">
                                    <i class="apc-open-user-list fa fa-bars"></i>
                                    <div class="apc-chat-title">Mohamed Sharaf</div>
                                    <div class="apc-chat-desi">IP:108.162.229.216</div>
                                    <i class="apc-open-chatinfo fa fa-bars"></i>
                                </div>
                                <div class="apc-pnl-content">
                                    <div class="apc-chat-item-content">
                                        <div id="chat_id_5" style="display: none;" class="apc-msgs">
                                            <div class="apc-load-move text-center" data-chat-id="5"><button
                                                    class="btn btn-xs btn-info"><i class="fa fa-arrow-circle-o-down"></i>
                                                    Load More</button>
                                            </div>
                                            <div id="AAAA" data-msg-id="AAAA"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">**DEMO MODE AUTO RESPONSE-Welcome to our chat
                                                    session.
                                                    <br>I am admin, how may I help you sir? </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:40</span></div>
                                            </div>
                                            <div id="3ace64ef_1582146635049" data-msg-id="AAAB"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Hello </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:40</span></div>
                                            </div>
                                            <div id="AAAC" data-msg-id="AAAC"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">**DEMO MODE AUTO RESPONSE- Hello </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:40</span></div>
                                            </div>
                                            <div id="AA1582146672700" data-msg-id="AAAD"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Hello Mohamed </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:41</span></div>
                                            </div>
                                            <div id="3ace64ef_1582147686754" data-msg-id="AAAE"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Hi </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:58</span></div>
                                            </div>
                                            <div id="AAAF" data-msg-id="AAAF"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">**DEMO MODE AUTO RESPONSE- Hi </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:58</span></div>
                                            </div>
                                            <div id="3ace64ef_1582147689225" data-msg-id="AAAG"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Hi 123 </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:58</span></div>
                                            </div>
                                            <div id="AAAH" data-msg-id="AAAH"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">**DEMO MODE AUTO RESPONSE- Hi 123 </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:58</span></div>
                                            </div>
                                        </div>
                                        <div id="chat_id_6" class="apc-msgs">
                                            <div class="apc-load-move text-center" data-chat-id="6" style="display: block;">
                                                <button class="btn btn-xs btn-info"><i
                                                        class="fa fa-arrow-circle-o-down"></i> Load More</button>
                                            </div>
                                            <div id="3ace64ef_1582147800405" data-msg-id="AAAB"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Helloooooo </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:59</span></div>
                                            </div>
                                            <div id="3ace64ef_1582147917317" data-msg-id="AAAD"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Hello </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        03:01</span></div>
                                            </div>
                                            <div id="AAAE" data-msg-id="AAAE"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">**DEMO MODE AUTO RESPONSE- Hello </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        03:01</span></div>
                                            </div>
                                            <div id="AA1582147980994" data-msg-id="AAAF"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Hi Mohamed </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        03:03</span></div>
                                            </div>
                                            <div id="AA1582147984145" data-msg-id="AAAG"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Welcome come to our chat session. it is canned
                                                    message for you </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        03:03</span></div>
                                            </div>
                                            <div id="AA1582147987417" data-msg-id="AAAH"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Thank you very much for contacting us </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        03:03</span></div>
                                            </div>
                                            <div id="3ace64ef_1582148008493" data-msg-id="AAAI"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">ok </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        03:03</span></div>
                                            </div>
                                            <div id="AAAJ" data-msg-id="AAAJ"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">**DEMO MODE AUTO RESPONSE- ok </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        03:03</span></div>
                                            </div>
                                        </div>
                                        <div id="chat_id_4" style="display: none;" class="apc-msgs">
                                            <div class="apc-load-move text-center" data-chat-id="4"><button
                                                    class="btn btn-xs btn-info"><i class="fa fa-arrow-circle-o-down"></i>
                                                    Load More</button>
                                            </div>
                                            <div id="3ace64ef_1582145914401" data-msg-id="AAAB"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Hi </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:28</span></div>
                                            </div>
                                            <div id="3ace64ef_1582145918007" data-msg-id="AAAD"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Hi </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:28</span></div>
                                            </div>
                                            <div id="AA1582146217633" data-msg-id="AAAF"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">welcome </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:33</span></div>
                                            </div>
                                            <div id="3ace64ef_1582146235884" data-msg-id="AAAG"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">welcome </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:33</span></div>
                                            </div>
                                            <div id="AA1582146252186" data-msg-id="AAAI"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">Welcome come to our chat session. it is canned
                                                    message for you </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:34</span></div>
                                            </div>
                                            <div id="AA1582146285532" data-msg-id="AAAJ"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">CakePHP Web Development <a target="_blank"
                                                        href="https://demo.appsbd.com/support-system/knowledge/details/14.html">https://demo.appsbd.com/support-system/knowledge/details/14.html</a>
                                                </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:34</span></div>
                                            </div>
                                            <div id="AA1582146324712" data-msg-id="AAAK"
                                                class="apc-item animated fadeIn apc-msg-item apc-me">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">PHP Application Development<br> <a target="_blank"
                                                        href="https://demo.appsbd.com/support-system/knowledge/details/7/php-application-development–-php-web-development-india.html">https://demo.appsbd.com/support-system/knowledge/details/7/php-application-development–-php-web-development-india.html</a>
                                                </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Feb 20, 2020
                                                        02:35</span></div>
                                            </div>
                                        </div>
                                        <div id="chat_id_3" style="display: none;" class="apc-msgs">
                                            <div class="apc-load-move text-center" data-chat-id="3"><button
                                                    class="btn btn-xs btn-info"><i class="fa fa-arrow-circle-o-down"></i>
                                                    Load More</button>
                                            </div>
                                        </div>
                                        <div id="chat_id_2" style="display: none;" class="apc-msgs">
                                            <div class="apc-load-move text-center" data-chat-id="2"><button
                                                    class="btn btn-xs btn-info"><i class="fa fa-arrow-circle-o-down"></i>
                                                    Load More</button>
                                            </div>
                                            <div id="3ace64ef_1530814809817" data-msg-id="AAAB"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">hi </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Jul 05, 2018
                                                        23:50</span></div>
                                            </div>
                                            <div id="3ace64ef_1530814817026" data-msg-id="AAAD"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">hello </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Jul 05, 2018
                                                        23:50</span></div>
                                            </div>
                                        </div>
                                        <div id="chat_id_1" style="display: none;" class="apc-msgs">
                                            <div class="apc-load-move text-center" data-chat-id="1"><button
                                                    class="btn btn-xs btn-info"><i class="fa fa-arrow-circle-o-down"></i>
                                                    Load More</button>
                                            </div>
                                            <div id="3ace64ef_1530814805054" data-msg-id="AAAB"
                                                class="apc-item animated fadeIn apc-msg-item ">
                                                <div class="apc-umg"><img
                                                        src="https://demo.appsbd.com/support-system/images/no-image.png"
                                                        alt="Chatimg"></div>
                                                <div class="apc-msg">vv </div>
                                                <div class="apc-msg-time"> <span class="apc-sending">Jul 05, 2018
                                                        23:50</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apc-chat-msg-type-panel">
                                        <div class="apc-msg-typing" style="display: none;">
                                            <div class="apc-spinner">
                                                <div class="apc-bounce1"></div>
                                                <div class="apc-bounce2"></div>
                                                <div class="apc-bounce3"></div>
                                            </div>
                                            typing
                                        </div>
                                        <div class="apc-file-up-status"></div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <div class="chat-canned-msg form-inline ">
                                                    <div class="form-group form-group-sm">
                                                        <label class="control-label" for="">Canned Message</label>
                                                        <select type="text" class="form-control" id="chat-canned-msg">
                                                            <option value="">Select</option>
                                                            <option value="0">Welcome 1</option>
                                                            <option value="1">Closing message</option>
                                                        </select>
                                                        <button id="chat-canned-msg-btn"
                                                            class="btn btn-success btn-xs added-ripples">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <textarea class="apc-admin-chat-input" name="" id=""
                                                    placeholder="Write"></textarea>
                                                <div class="apc-send-ctrl">
                                                    <i class="apc-attach-btn fa fa-paperclip"></i>
                                                    <i class="apc-send-btn fa fa-send"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="apc-chat-user-info">
                                <div class="apc-pnl-header">
                                    <i class="apc-close-btn fa fa-angle-right"></i>
                                    User Info </div>
                                <div class="apc-pnl-content">
                                    <dl class="dl-horizontal">
                                        <dt>Name</dt>
                                        <dd id="dd-name">Mohamed Sharaf</dd>
                                        <dt>Browser</dt>
                                        <dd id="dd-browser">Chrome 79.0</dd>
                                        <dt>Country</dt>
                                        <dd id="dd-country">FR</dd>
                                        <dt>IP</dt>
                                        <dd id="dd-ip">108.162.229.216</dd>
                                        <dt>Start Time</dt>
                                        <dd id="dd-start-time">4 months ago</dd>
                                        <dt>End Time</dt>
                                        <dd id="dd-end-time">
                                            <button class="chat-end-button btn btn-xs btn-danger added-ripples"><i
                                                    class="fa fa-times"></i> Close Chat</button>
                                            <span class="endtimestr" style="display: none;"></span>
                                        </dd>
                                    </dl>
                                    <div class="apc-diver apc-kn-search-divder bg-green"><input id="apc-kn-search"
                                            type="text" placeholder="Knowledge Search"> <i id="apc-kn-search-loader"
                                            class=" fa fa-spin fa-spinner"></i></div>
                                    <div id="apc-kn-container" style="height: 221px;">
                                        <div class="slimScrollDiv"
                                            style="position: relative; overflow: hidden; width: auto; height: 221px;">
                                            <ul id="chat-knowledge" class="list-group"
                                                style="height: 221px; overflow: hidden; width: auto;">
                                                <li class="list-group-item apc-kn-li">
                                                    <a class="apc-kn-title popupform apopf" data-effect="mfp-move-from-top "
                                                        target="_blank"
                                                        href="https://demo.appsbd.com/support-system/knowledge/details/14.html">
                                                        CakePHP Web Development</a>
                                                    <small>PHP Basic</small>
                                                    <button data-id="#dt-0"
                                                        class="kn-send-btn btn btn-xs btn-success added-ripples">Send</button>
                                                    <div id="dt-0" class="hidden">CakePHP Web Development
                                                        https://demo.appsbd.com/support-system/knowledge/details/14.html
                                                    </div>
                                                </li>
                                                <li class="list-group-item apc-kn-li">
                                                    <a class="apc-kn-title popupform apopf" data-effect="mfp-move-from-top "
                                                        target="_blank"
                                                        href="https://demo.appsbd.com/support-system/knowledge/details/88.html">
                                                        Joomla Zooming High in Technology</a>
                                                    <small>Joomla Theme Setup</small>
                                                    <button data-id="#dt-0"
                                                        class="kn-send-btn btn btn-xs btn-success added-ripples">Send</button>
                                                    <div id="dt-0" class="hidden">Joomla Zooming High in Technology
                                                        https://demo.appsbd.com/support-system/knowledge/details/88.html
                                                    </div>
                                                </li>
                                                <li class="list-group-item apc-kn-li">
                                                    <a class="apc-kn-title popupform apopf" data-effect="mfp-move-from-top "
                                                        target="_blank"
                                                        href="https://demo.appsbd.com/support-system/knowledge/details/15.html">
                                                        Charts For PHP Pages</a>
                                                    <small>PHP Basic</small>
                                                    <button data-id="#dt-0"
                                                        class="kn-send-btn btn btn-xs btn-success added-ripples">Send</button>
                                                    <div id="dt-0" class="hidden">Charts For PHP Pages
                                                        https://demo.appsbd.com/support-system/knowledge/details/15.html
                                                    </div>
                                                </li>
                                                <li class="list-group-item apc-kn-li">
                                                    <a class="apc-kn-title popupform apopf" data-effect="mfp-move-from-top "
                                                        target="_blank"
                                                        href="https://demo.appsbd.com/support-system/knowledge/details/18.html">
                                                        Android Developer For Hiring</a>
                                                    <small>Android Basic</small>
                                                    <button data-id="#dt-0"
                                                        class="kn-send-btn btn btn-xs btn-success added-ripples">Send</button>
                                                    <div id="dt-0" class="hidden">Android Developer For Hiring
                                                        https://demo.appsbd.com/support-system/knowledge/details/18.html
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="slimScrollBar"
                                                style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 193.498px;">
                                            </div>
                                            <div class="slimScrollRail"
                                                style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
            <style type="text/css">
                #apc-kn-container {
                    padding: 0 !important;
                }
    
                #apc-kn-container ul li {
                    padding: 10px;
                }
    
                #apc-kn-search-loader {
                    position: absolute;
                    right: 8px;
                    top: 9px;
                    color: #999999;
                    display: none;
                }
    
                .apc-kn-search-divder {
                    border: none !important;
    
                }
    
                .apc-kn-search-divder input {
                    margin-top: 0px !important;
                }
    
                #chat-knowledge {
                    width: calc(100% + 30px);
                    border: none;
                }
    
                #chat-knowledge,
                #chat-knowledge li {
                    -webkit-border-radius: 0 !important;
                    -moz-border-radius: 0 !important;
                    border-radius: 0 !important;
                    border-left: none;
                    border-right: none;
                }
    
                .apc-kn-title {
                    white-space: nowrap;
                    width: 100%;
                    text-overflow: ellipsis;
                    overflow: hidden;
                    display: block;
                }
    
                .apc-kn-li small {
                    display: block;
                    font-style: italic;
                    white-space: nowrap;
                    width: 100%;
                    text-overflow: ellipsis;
                    overflow: hidden;
                }
    
                @media all and (max-width: 768px) {
                    .content-header {
                        display: none;
                    }
    
                    #apc-kn-container {
                        display: none;
                    }
    
                    .apc-kn-search-divder {
                        display: none;
                    }
                }
            </style>
            <script type="text/javascript">
                var chatAdminbox = null;
                        var original = document.title;
                        var timeout;
    
                        window.coders = function(newMsg, howManyTimes) {
                            function step() {
                                document.title = (document.title == original) ? newMsg : original;
    
                                if (--howManyTimes > 0) {
                                    timeout = setTimeout(step, 1000);
                                };
                            };
    
                            howManyTimes = parseInt(howManyTimes);
    
                            if (isNaN(howManyTimes)) {
                                howManyTimes = 5;
                            };
    
                            cancelcoders(timeout);
                            step();
                        };
    
                        window.cancelcoders = function() {
                            clearTimeout(timeout);
                            document.title = original;
                        };
                        window.is_chat_remove = false;
    
                        function ApcShowSrcLoader(status) {
                            if (status === undefined) {
                                status = true;
                            }
                            if (status) {
                                $("#apc-kn-search-loader").fadeIn();
                            } else {
                                $("#apc-kn-search-loader").fadeOut();
                            }
    
                        }
    
                        function setSearchPanel() {
    
    
                            $("#apc-kn-search").keyup(function(e) {
                                var va = $(this).val();
                                //console.log(va);
                                if (va.length > 2) {
                                    var data = {
                                        src: va
                                    };
                                    ApcShowSrcLoader(true);
                                    apc_search_delay(function() {
                                        $.ajax({
                                            url: appGlobalLang.src_url,
                                            data: set_csrf_param(data),
                                            type: "POST",
                                            scriptCharset: "utf-8",
                                            dataType: "json",
                                            beforeSend: function() {
    
                                            },
                                            success: function(rdata) {
                                                app_set_src_list(rdata);
                                            },
                                            complete: function(jqXHR, textStatus) {
                                                ApcShowSrcLoader(false);
                                            }
                                        });
                                    }, 600);
                                } else {
                                    //close_src_panel();
                                }
                            });
                        }
    
                        var apc_search_delay = (function() {
                            var timer = 0;
                            return function(callback, ms) {
                                clearTimeout(timer);
                                timer = setTimeout(callback, ms);
                            };
                        })();
    
                        // function app_set_src_list(items) {
                        //     //gcl(items.length);
                        //     $("#chat-knowledge").html("");
                        //     if (items.total > 0) {
                        //         for (var i = 0; i < items.data.length; i++) {
                        //             var li = '<li class="list-group-item" ><a class="apc-kn-title popupform " data-effect="mfp-move-from-top " target="_blank" href="' + items.data[i].href + '">' + items.data[i].title + '</a>' +
                        //                 '<small>' + $(items.data[i].cat_link).text() + '</small><br/>' +
                        //                 '<button data-id="#dt-' + i + '" class="kn-send-btn btn btn-xs btn-success">Send</button>' +
                        //                 '<div id="dt-' + i + '" class="hidden">' +
                        //                 items.data[i].title + '\n ' + items.data[i].href '</div>' +
                        //                 '</li>';
                        //             $("#chat-knowledge").append(li);
                        //         }
                        //         setPopUpAjax();
                        //     } else {
                        //         $("#chat-knowledge").html('<li class="list-group-item text-red">No result found</li>');
                        //     }
                        // }
    
                        function knresize(thisobj) {
                            try {
                                var height = thisobj.height() - $("#apc-kn-container").offset().top + thisobj.offset().top;
                                $("#apc-kn-container").height(height).find(".slimScrollDiv").height(height);
                                $("#chat-knowledge").height(height);
    
                            } catch (e) {
                                gcl(e);
                            }
                        }
    
                        $(function() {
                            var TitleMsgStatus = "";
                            localStorage.setItem("adchatwindow", "o");
                            chatbox = $("#apbd-cht-admin-container").appsbdAdminChat({
                                url: "https://demo.appsbd.com/support-system/admin/admin-chat/chat-response.html",
                                userId: "AA",
                                userImage: "https://demo.appsbd.com/support-system/data/appuser/AA/profile.jpg",
                                audioPath: "https://demo.appsbd.com/support-system/images/chatnoti.ogg",
                                cancelUrl: "https://demo.appsbd.com/support-system/admin/admin-chat-confirm/user-chat-close",
                                cannedMessages: [{
                                    "id": "5",
                                    "user_id": "",
                                    "title": "Welcome 1",
                                    "canned_msg": "Welcome come to our chat session. it is canned message for you",
                                    "entry_date": "2018-05-28 04:55:53",
                                    "added_by": "AA",
                                    "canned_type": "C",
                                    "status": "A"
                                }, {
                                    "id": "6",
                                    "user_id": "",
                                    "title": "Closing message",
                                    "canned_msg": "Thank you very much for contacting us",
                                    "entry_date": "2018-05-28 05:01:35",
                                    "added_by": "AA",
                                    "canned_type": "C",
                                    "status": "A"
                                }],
                                fileAccepts: ".jpg,.png,.zip",
                                maxFileSize: 2,
                                loadMoreText: "Load More",
                                onInit: function(thisobj) {
                                    setSearchPanel();
                                    $("#chat-knowledge").slimScroll();
                                    $("#chat-knowledge").on("click", ".kn-send-btn", function(e) {
                                        e.preventDefault();
                                        try {
                                            var dataid = $(this).data("id");
                                            thisobj.SendMsg($(dataid).text(), true);
                                        } catch (e) {}
                                    });
                                    knresize(thisobj);
                                },
                                onResize: function(thisobj) {
                                    knresize(thisobj);
                                },
                                onNewChatOrMsg: function(obj, type) {
                                    if (localStorage.getItem("adchatwindow") == "b") {
                                        coders("New message or chat", 100);
                                    }
                                }
                            });
    
                            // chatbox
                            //chatbox.Resize();
                            $(window).on("beforeunload", function() {
                                window.is_chat_remove = true;
                                localStorage.removeItem("adchatwindow");
                                return true;
                            });
                            $(window).on("blur", function() {
                                if (!window.is_chat_remove) {
                                    localStorage.setItem("adchatwindow", "b");
                                }
    
                            });
                            $(window).on("focus", function() {
                                if (!window.is_chat_remove) {
                                    localStorage.setItem("adchatwindow", "f");
                                }
                                cancelcoders(timeout);
                            })
                        });
            </script>
        </section>
    </div>
@endsection
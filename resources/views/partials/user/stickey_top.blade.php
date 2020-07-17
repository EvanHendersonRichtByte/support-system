<script type="text/javascript">
    var __previous_h = -1;
    $(function() {
        $('body').removeClass("body-loading");

        $(window).on("scroll", function(e) {
            __set_stickey();
        });
        __set_stickey();
        $(".go_top").on("click", function(e) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 600);
        });

    });

    function __set_stickey() {
        __goTop();
        return;
    }

    function __goTop() {
        var height = $(window).height();
        var windowTop = $(window).scrollTop();
        if (windowTop > 50) {
            $(".go_top").removeClass("hidden").removeClass("zoomOut").addClass("zoomIn");
        } else {
            $(".go_top").removeClass("zoomIn").addClass("zoomOut");
        }
    }
</script>
new Vue({
    el: '#app',
    data: {
        height: 0
    },
    created: function () {
        $('header').height($(window).height());
        $(window).resize(function(){
            $('header').height($(window).height());
        });

    }
});
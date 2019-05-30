(function ($) {
    $(document).ready(function ($) {

        $.ajax({
            type: 'GET',
            url: 'https://api.twitch.tv/kraken/streams/' + marctvtwitchsettings.channelname,
            headers: {
                'Client-ID': 'c63pi9xlfs7bqtt0h9otarutq6nc1h1'
            },
            success: function (a) {
                if (a.stream) {
                    var submenu = '';

                    if (marctvtwitchsettings.showmeta == 'on') {
                        var submenu = '<ul class="sub-menu"><li class="menu-item twitch-meta">' +
                            '<a class="twitch-link" target="_blank" title="' + a.stream.viewers + ' viewers" href="' + marctvtwitchsettings.channelurl + '">' +
                            '<p>' + a.stream.game + '</p>' +
                            '<img src="' + a.stream.preview.medium + '"></li></ul>' +
                            '</a>';
                    }

                    $(marctvtwitchsettings.menuselector).append('<li id="twitch-status" class="twitch-status menu-item">' +
                        '<a class="twitch-link" target="_blank" title="' + a.stream.viewers + ' viewers" href="' + marctvtwitchsettings.channelurl + '">Live!</a>' +
                        submenu +
                        '</li>');
                    $('.offline', marctvtwitchsettings.menuselector).hide();
                }
            }
        });
    });
})(jQuery);

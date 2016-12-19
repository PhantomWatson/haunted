var floorMap = {
    init: function () {
        $('img.map').mapster({
            fillColor: 'aaffaa',
            fillOpacity: 0.25,
            stroke: true,
            strokeColor: 'aaffaa',
            strokeOpacity: 1,
            strokeWidth: 3,
            onConfigured: function () {
                $('#map-container > div').css('display', 'inline-block');
                floorMap.resize();
            },
            onClick: function () {
                return true;
            }
        });
        $('map area').hover(function () {
            var area = $(this);
            var title = area.attr('title');
            $('#map-helper').html(title);
        }).mouseout(function () {
            $('#map-helper').html('');
        });

        $(window).on('resize', function(){
            floorMap.resize();
        });
    },

    resize: function () {
        var windowWidth = $('#map-container').width();
        var maxWidth = 1000;
        var width = windowWidth; //Math.max(windowWidth, maxWidth);
        $('img.map').mapster('resize', width, null, 0);
    }
};

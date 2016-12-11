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
                $('img.map').mapster('resize', '1000', null, 0);
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
    }
};

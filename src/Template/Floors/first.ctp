<?php
    use App\Map\Map;
    $map = new Map(1);
    $map->addTarget('567,247,582,260', 'girlsrr', 'Girl\'s Restroom');
    $map->addTarget('0,153,63,252', 'pool', 'Swimming Pool');
    $map->addTarget('61,109,187,272', 'gym', 'Gymnasium');
    $map->addTarget('32,281,54,314', 'room100', 'Room 100 - Wafer');
    $map->addTarget('54,281,85,314', 'room102', 'Room 102');
    $map->addTarget('85,280,112,314', 'room108', 'Room 108');
    $map->addTarget('112,282,133,314', 'room110', 'Room 110 - T. Janeway');
    $map->addTarget('147,283,202,317', 'room116', 'Room 116 - L Benner & May');
    $map->addTarget('12,30,51,98', 'room144', 'Room 144');
    $map->addTarget('50,30,85,97', 'room140', 'Room 140');
    $map->addTarget('84,31,113,98', 'room138', 'Room 138 - Flynn & Austin');
    $map->addTarget('142,31,181,77', 'room128', 'Room 128');
    $map->addTarget('197,30,234,72', 'room124', 'Room 124 - Computer Design');
    $map->addTarget('197,73,235,122', 'room122', 'Room 122 - Photography');
    $map->addTarget('198,137,235,173', 'room120', 'Room 120');
    $map->addTarget('251,129,279,174', 'room248', 'Room 248 - Byrum');
    $map->addTarget('278,128,308,173', 'room246', 'Room 246 - Muhiga');
    $map->addTarget('307,151,343,172', 'room244', 'Room 244 - Harrell');
    $map->addTarget('307,128,344,151', 'room242', 'Room 242 - Conner');
    $map->addTarget('368,127,407,149', 'room238', 'Room 238 - Mink');
    $map->addTarget('226,205,255,220', 'room250', 'Room 250 - Peppler');
    $map->addTarget('227,219,257,233', 'room201', 'Room 201');
    $map->addTarget('254,184,278,216', 'room252', 'Room 252');
    $map->addTarget('278,185,299,220', 'room254', 'Room 254');
    $map->addTarget('256,218,279,249', 'room203', 'Room 203');
    $map->addTarget('279,220,302,249', 'room258', 'Room 258');
    $map->addTarget('314,184,405,203', 'nurse', 'Nurse\'s Office');
    $map->addTarget('315,202,342,250', 'guidance', 'Guidance Office');
    $map->addTarget('341,203,369,247', 'attendance', 'Attendance Office');
    $map->addTarget('368,202,404,247', 'admin', 'Administrative Office');
    $map->addTarget('413,182,434,217', 'room226', 'Room 226');
    $map->addTarget('435,180,459,217', 'room228', 'Room 228 - L. Wile');
    $map->addTarget('414,215,437,247', 'room222', 'Room 222 - Huggins');
    $map->addTarget('256,262,279,309', 'room200', 'Room 200 - Meyer');
    $map->addTarget('280,262,304,307', 'room204', 'Room 204');
    $map->addTarget('301,262,321,309', 'room206', 'Room 206 - S. Lewis');
    $map->addTarget('321,262,348,308', 'room208', 'Room 208a - Van Lue');
    $map->addTarget('374,287,394,306', 'room212', 'Room 212');
    $map->addTarget('393,286,441,306', 'room218', 'Room 218');
    $map->addTarget('372,261,392,286', 'room214', 'Room 214');
    $map->addTarget('393,261,418,288', 'room216', 'Room 216 - Dennis');
    $map->addTarget('440,260,460,305', 'room220', 'Room 220');
    $map->addTarget('499,139,542,150', 'room318a', 'Room 318a - Student Council Room');
    $map->addTarget('565,148,588,166', 'boysrr', 'Boy\'s Restroom');
    $map->addTarget('132,281,148,315', 'girlsrr', 'Girl\'s Restroom');
    $map->addTarget('113,31,145,97', 'boysrr', 'Boy\'s Restroom');
    $map->addTarget('209,193,227,246', 'greenhouse', 'Greenhouse');
    $map->addTarget('484,152,564,261', 'studentcenter', 'Student Center');
    $map->addTarget('653,148,657,260,583,261,582,233,567,233,566,165,590,165,590,148', 'auditorium', 'Auditorium');

    // Quest-conditional targets
    if (! $this->Game->questCompleted('i')) {
        $map->addTarget('566,234,575,246', 'phoneroom', 'Phone Room');
    }
    if (! $this->Game->questCompleted('2')) {
        $map->addTarget('369,149,408,172', 'room236', 'Room 236 - Amman');
    }
    if (! $this->Game->questCompleted('o')) {
        $map->addTarget('408,138,434,171', 'room232', 'Room 232 - Wolter');
    }
    if (! $this->Game->questCompleted('m')) {
        $map->addTarget('432,125,459,170', 'room230', 'Room 230 - Conaway');
    }
    if (! $this->Game->questCompleted('6')) {
        $map->addTarget('479,76,612,138', 'cafeteria', 'Cafeteria');
    }
    if (! $this->Game->questCompleted('a') && $this->Game->questCompleted('6')) {
        $map->addTarget('478,40,512,75', 'cafeteria', 'Room 320 - Computer Lab', 'comp_lab');
    }
    if (! $this->Game->questCompleted('0') && $this->Game->questCompleted('6')) {
        $map->addTarget('510,38,608,77', 'cafeteria', 'Cafeteria Kitchen', 'kitchen');
    }
    if(! $this->Game->questCompleted('9')) {
        $map->addTarget('557,277,609,322', 'room304', 'Room 304');
        $map->addTarget('630,276,668,320', 'room308', 'Room 308 - Band Room');
    }
    if(! $this->Game->questCompleted('g')) {
        $map->addTarget('542,138,553,151', 'room318b', 'Room 318b - Vending Machine Room');
    }

    // Stairs up
    $stairCoords = [
        '356,135,370,172',
        '224,191,247,207',
        '227,232,248,245',
        '348,263,360,295',
        '462,189,483,206',
        '462,227,484,240'
    ];
    foreach ($stairCoords as $coords) {
        $map->addTarget($coords, 'secondFloor', '(go upstairs)');
    }
?>

<map name="first-floor">
    <?= $map->getAreaTags() ?>
</map>
<div id="map-container">
    <img src="/img/MCHS1st.gif" border="0" width="673" height="371" alt="" usemap="#first-floor" class="map" />
</div>
<div id="map-helper">
</div>

<script>
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
        area.css({
        //    "background-color": "lime",
        //    "border": "2px solid red"
        });
        $('#map-helper').html(title);
    }).mouseout(function () {
        $('#map-helper').html('');
    });
</script>

<?php
    use App\Map\Map;
    $map = new Map();
    $map->addTarget('567,247,582,260', 'girlsrr', 'Girl\'s Restroom');
    $map->addTarget('0,153,63,252', 'pool', 'Swimming Pool');
    $map->addTarget('61,109,187,272', 'gym', 'Gymnasium');
    $map->addTarget('32,281,54,314', '100', '100 - Wafer');
    $map->addTarget('54,281,85,314', '102', '102');
    $map->addTarget('85,280,112,314', '108', '108');
    $map->addTarget('112,282,133,314', '110', '110 - T. Janeway');
    $map->addTarget('147,283,202,317', '116', '116 - L Benner & May');
    $map->addTarget('12,30,51,98', '144', '144');
    $map->addTarget('50,30,85,97', '140', '140');
    $map->addTarget('84,31,113,98', '138', '138 - Flynn & Austin');
    $map->addTarget('142,31,181,77', '128', '128');
    $map->addTarget('197,30,234,72', '124', '124 - Computer Design');
    $map->addTarget('197,73,235,122', '122', '122 - Photography');
    $map->addTarget('198,137,235,173', '120', '120');
    $map->addTarget('251,129,279,174', '248', '248 - Byrum');
    $map->addTarget('278,128,308,173', '246', '246 - Muhiga');
    $map->addTarget('307,151,343,172', '244', '244 - Harrell');
    $map->addTarget('307,128,344,151', '242', '242 - Conner');
    $map->addTarget('368,127,407,149', '238', '238 - Mink');
    $map->addTarget('226,205,255,220', '250', '250 - Peppler');
    $map->addTarget('227,219,257,233', '201', '201');
    $map->addTarget('254,184,278,216', '252', '252');
    $map->addTarget('278,185,299,220', '254', '254');
    $map->addTarget('256,218,279,249', '203', '203');
    $map->addTarget('279,220,302,249', '258', '258');
    $map->addTarget('314,184,405,203', 'nurse', 'Nurse\'s Office');
    $map->addTarget('315,202,342,250', 'guidance', 'Guidance Office');
    $map->addTarget('341,203,369,247', 'attendance', 'Attendance Office');
    $map->addTarget('368,202,404,247', 'admin', 'Administrative Office');
    $map->addTarget('413,182,434,217', '226', '226');
    $map->addTarget('435,180,459,217', '228', '228 - L. Wile');
    $map->addTarget('414,215,437,247', '222', '222 - Huggins');
    $map->addTarget('256,262,279,309', '200', '200 - Meyer');
    $map->addTarget('280,262,304,307', '204', '204');
    $map->addTarget('301,262,321,309', '206', '206 - S. Lewis');
    $map->addTarget('321,262,348,308', '208', '208a - Van Lue');
    $map->addTarget('374,287,394,306', '212', '212');
    $map->addTarget('393,286,441,306', '218', '218');
    $map->addTarget('372,261,392,286', '214', '214');
    $map->addTarget('393,261,418,288', '216', '216 - Dennis');
    $map->addTarget('440,260,460,305', '220', '220');
    $map->addTarget('499,139,542,150', '318a', '318a - Student Council Room');
    $map->addTarget('565,148,588,166', 'boysrr', 'Boy\'s Restroom');
    $map->addTarget('132,281,148,315', 'girlsrr', 'Girl\'s Restroom');
    $map->addTarget('113,31,145,97', 'boysrr', 'Boy\'s Restroom');
    $map->addTarget('209,193,227,246', 'greenhouse', 'Greenhouse');
    $map->addTarget('484,152,564,261', 'studentcenter', 'Student Center');
    $map->addTarget('653,148,657,260,583,261,582,233,567,233,566,165,590,165,590,148', 'auditorium', 'Auditorium');

    // Quest-conditional targets
    if (! strstr($quests, 'i')) {
        $map->addTarget('566,234,575,246', 'phoneroom', 'Phone Room');
    }
    if (! strstr($quests, "2")) {
        $map->addTarget('369,149,408,172', '236', '236 - Amman');
    }
    if (! strstr($quests, "o")) {
        $map->addTarget('408,138,434,171', '232', '232 - Wolter');
    }
    if (! strstr($quests, "m")) {
        $map->addTarget('432,125,459,170', '230', '230 - Conaway');
    }
    if (! strstr($quests, "6")) {
        $map->addTarget('479,76,612,138', 'cafeteria', 'Cafeteria');
    }
    if (! strstr($quests, "a") && strstr($quests, "6")) {
        $map->addTarget('478,40,512,75', 'cafeteria', '320 - Computer Lab', 'comp_lab');
    }
    if (! strstr($quests, "0") && strstr($quests, "6")) {
        $map->addTarget('510,38,608,77', 'cafeteria', 'Cafeteria Kitchen', 'kitchen');
    }
    if(! strstr($quests, "9")) {
        $map->addTarget('557,277,609,322', '304', '304');
        $map->addTarget('630,276,668,320', '308', '308 - Band Room');
    }
    if(! strstr($quests, "g")) {
        $map->addTarget('542,138,553,151', '318b', '318b - Vending Machine Room');
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
        $map->addTarget($coords, 'firstFloor', '(go upstairs)');
    }
?>

<map name="first-floor">
    <?= $map->getAreaTags() ?>
</map>
<img src="/img/MCHS1st.gif" border="0" width="673" height="371" alt="" usemap="#first-floor">
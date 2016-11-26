<?php
    use App\Map\Map;
    $map = new Map();
    $map->addTarget('465,160,487,181', null, 'Darkroom (inside Publications Room)');
    $map->addTarget('464,216,478,236', null, 'Nelson\'s Office (inside Publications Room)');
    $map->addTarget('213,161,385,236', 'library', 'Library');
    $map->addTarget('122,13,173,51', '466', '466 - Bly');
    $map->addTarget('78,13,121,57', '465', '465 - Springman');
    $map->addTarget('79,57,123,98', '464', '464 - Masters');
    $map->addTarget('79,98,123,142', '462', '462 - Madsen');
    $map->addTarget('143,105,188,139', '461', '461 - Paul');
    $map->addTarget('172,13,223,50', '468', '468 - Kowalkowski');
    $map->addTarget('253,30,298,70', '469', '469 - Bales');
    $map->addTarget('470,98,514,140', '442', '442 - Vogelbacher');
    $map->addTarget('254,254,298,291', '412', '412 - Wright');
    $map->addTarget('189,256,224,295', '400', '400 - Miller');
    $map->addTarget('124,346,174,382', '406', '406 - White');
    $map->addTarget('371,345,422,383', '428', '428 - Murray');
    $map->addTarget('420,344,471,381', '426', '426 - Clock');
    $map->addTarget('471,336,515,380', '425', '425 - Renner');
    $map->addTarget('471,296,516,337', '424', '424 - Warrner');
    $map->addTarget('471,253,515,296', '422', '422 - T. Gibson');
    $map->addTarget('370,253,406,295', '420', '420 - J. Warrner');
    $map->addTarget('370,294,404,324', 'storage', '427 - Departmental Storage');
    $map->addTarget('405,291,449,325', '423', '423 - Cantu');
    $map->addTarget('406,256,450,291', '421', '421 - Jones');
    $map->addTarget('385,180,426,217', '438', '438 - Journalism Room');
    $map->addTarget('464,181,488,181,487,187,514,187,515,215,464,215', '439', '439 - Publications Room');
    $map->addTarget('488,162,515,187', 'girlspubrr', 'Girl\'s Restroom');
    $map->addTarget('478,217,516,235', 'boyspubrr', 'Boy\'s Restroom');
    $map->addTarget('471,56,515,98', '444', '444 - Dowling');
    $map->addTarget('404,104,449,139', '441', '441 - Meade');
    $map->addTarget('470,13,515,57', '445', '445 - Fitzgerald');
    $map->addTarget('369,13,420,49', '448', '448 - Weachter');
    $map->addTarget('419,14,470,50', '446', '446 - Scott');
    $map->addTarget('404,69,449,104', '443', '443 - Zick/Keever');
    $map->addTarget('370,70,404,100', 'storage', '447 - Departmental Storage');
    $map->addTarget('371,101,404,139', '440', '440 - Fairley');
    $map->addTarget('297,103,341,140', '472', '472 - Shaw');
    $map->addTarget('253,103,296,140', '471', '471 - Hritz');
    $map->addTarget('252,70,341,103', 'langoffice', 'Language Arts / Foreign Languages Office');
    $map->addTarget('313,43,341,55', '449', '449');
    $map->addTarget('298,70,298,62,312,62,311,55,340,55,340,68', '450', '450');
    $map->addTarget('79,255,123,298', '402', '402 - Von Dielingen');
    $map->addTarget('79,298,124,338', '404', '404 - Seale');
    $map->addTarget('79,338,124,383', '405', '405 - Miner');
    $map->addTarget('174,346,225,383', '408', '408 - Cowgill');
    $map->addTarget('298,325,342,364', '429', '429 - Gorin');
    $map->addTarget('253,323,282,341', '410', '410');
    $map->addTarget('254,340,283,352', '409', '409');
    $map->addTarget('78,162,113,182', 'boysrr', 'Boy\'s Restroom');
    $map->addTarget('79,217,113,235', 'girlsrr', 'Girl\'s Restroom');
    $map->addTarget('78,182,114,217', '433b', '433b - Studio');
    $map->addTarget('145,180,172,236', '431', '431 - A/V');
    $map->addTarget('113,209,144,236', '430', '430 - Editing or something\n\n...I think');
    $map->addTarget('114,189,128,210', '433a', '433a - Studio Booth');
    $map->addTarget('154,161,172,181', '436', '436 - Mr. Reason\'s Office');
    $map->addTarget('131,160,155,182', '435', '435 - Secretary\'s Office');
    $map->addTarget('113,161,132,181', '434', '434');
    $map->addTarget('144,291,189,326', '403', '403 - Crabtree');
    $map->addTarget('191,294,224,325', 'storage', '407 - Departmental Storage');
    $map->addTarget('298,254,341,292', '413', '413 - Computer Lab');
    $map->addTarget('254,290,341,325', 'mathsocoffice', 'Math / Social Studies Office');
    $map->addTarget('142,68,188,104', '463', '463');
    $map->addTarget('189,69,224,101', 'storage', '467 - Departmental Storage');
    $map->addTarget('188,100,223,138', '460', '460 - Richardson');

    // Quest-conditional targets
    if (! strstr($quests, "3") ) {
        $map->addTarget('143,210,143,180,107,180,108,189,127,189,128,210', '432', '432 - A/V Control Room');
    }
    if (! strstr($quests, "j") || ! strstr($quests, "k") ) {
        $map->addTarget('144,256,188,291', '401', '401 - Bartling');
    }
    
    // Stairs down
    $stairCoords = [
        '508,139,534,160',
        '506,234,535,254',
        '299,31,312,61',
        '55,141,92,162',
        '58,236,91,255',
        '283,331,299,364'
    ];
    foreach ($stairCoords as $coords) {
        $map->addTarget($coords, 'secondFloor', '(go downstairs)');
    }
?>

<map name="second-floor">
    <?= $map->getAreaTags() ?>
</map>
<img src="/img/MCHS2nd.gif" border="0" width="613" height="396" alt="" usemap="#second-floor" />

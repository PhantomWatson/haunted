<?php
    use App\Map\Map;
    $map = new Map(2);
    $map->addTarget('465,160,487,181', null, 'Darkroom (inside Publications Room)');
    $map->addTarget('464,216,478,236', null, 'Nelson\'s Office (inside Publications Room)');
    $map->addTarget('213,161,385,236', 'library', 'Library');
    $map->addTarget('122,13,173,51', 'room466', 'Room 466 - Bly');
    $map->addTarget('78,13,121,57', 'room465', 'Room 465 - Springman');
    $map->addTarget('79,57,123,98', 'room464', 'Room 464 - Masters');
    $map->addTarget('79,98,123,142', 'room462', 'Room 462 - Madsen');
    $map->addTarget('143,105,188,139', 'room461', 'Room 461 - Paul');
    $map->addTarget('172,13,223,50', 'room468', 'Room 468 - Kowalkowski');
    $map->addTarget('253,30,298,70', 'room469', 'Room 469 - Bales');
    $map->addTarget('470,98,514,140', 'room442', 'Room 442 - Vogelbacher');
    $map->addTarget('254,254,298,291', 'room412', 'Room 412 - Wright');
    $map->addTarget('189,256,224,295', 'room400', 'Room 400 - Miller');
    $map->addTarget('124,346,174,382', 'room406', 'Room 406 - White');
    $map->addTarget('371,345,422,383', 'room428', 'Room 428 - Murray');
    $map->addTarget('420,344,471,381', 'room426', 'Room 426 - Clock');
    $map->addTarget('471,336,515,380', 'room425', 'Room 425 - Renner');
    $map->addTarget('471,296,516,337', 'room424', 'Room 424 - Warrner');
    $map->addTarget('471,253,515,296', 'room422', 'Room 422 - T. Gibson');
    $map->addTarget('370,253,406,295', 'room420', 'Room 420 - J. Warrner');
    $map->addTarget('370,294,404,324', 'storage', 'Room 427 - Departmental Storage');
    $map->addTarget('405,291,449,325', 'room423', 'Room 423 - Cantu');
    $map->addTarget('406,256,450,291', 'room421', 'Room 421 - Jones');
    $map->addTarget('385,180,426,217', 'room438', 'Room 438 - Journalism Room');
    $map->addTarget('464,181,488,181,487,187,514,187,515,215,464,215', 'room439', 'Room 439 - Publications Room');
    $map->addTarget('488,162,515,187', 'girlspubrr', 'Girl\'s Restroom');
    $map->addTarget('478,217,516,235', 'boyspubrr', 'Boy\'s Restroom');
    $map->addTarget('471,56,515,98', 'room444', 'Room 444 - Dowling');
    $map->addTarget('404,104,449,139', 'room441', 'Room 441 - Meade');
    $map->addTarget('470,13,515,57', 'room445', 'Room 445 - Fitzgerald');
    $map->addTarget('369,13,420,49', 'room448', 'Room 448 - Weachter');
    $map->addTarget('419,14,470,50', 'room446', 'Room 446 - Scott');
    $map->addTarget('404,69,449,104', 'room443', 'Room 443 - Zick/Keever');
    $map->addTarget('370,70,404,100', 'storage', 'Room 447 - Departmental Storage');
    $map->addTarget('371,101,404,139', 'room440', 'Room 440 - Fairley');
    $map->addTarget('297,103,341,140', 'room472', 'Room 472 - Shaw');
    $map->addTarget('253,103,296,140', 'room471', 'Room 471 - Hritz');
    $map->addTarget('252,70,341,103', 'langoffice', 'Language Arts / Foreign Languages Office');
    $map->addTarget('313,43,341,55', 'room449', 'Room 449');
    $map->addTarget('298,70,298,62,312,62,311,55,340,55,340,68', 'room450', 'Room 450');
    $map->addTarget('79,255,123,298', 'room402', 'Room 402 - Von Dielingen');
    $map->addTarget('79,298,124,338', 'room404', 'Room 404 - Seale');
    $map->addTarget('79,338,124,383', 'room405', 'Room 405 - Miner');
    $map->addTarget('174,346,225,383', 'room408', 'Room 408 - Cowgill');
    $map->addTarget('298,325,342,364', 'room429', 'Room 429 - Gorin');
    $map->addTarget('253,323,282,341', 'room410', 'Room 410');
    $map->addTarget('254,340,283,352', 'room409', 'Room 409');
    $map->addTarget('78,162,113,182', 'boysrr', 'Boy\'s Restroom');
    $map->addTarget('79,217,113,235', 'girlsrr', 'Girl\'s Restroom');
    $map->addTarget('78,182,114,217', 'room433b', 'Room 433b - Studio');
    $map->addTarget('145,180,172,236', 'room431', 'Room 431 - A/V');
    $map->addTarget('113,209,144,236', 'room430', 'Room 430 - Editing or something\n\n...I think');
    $map->addTarget('114,189,128,210', 'room433a', 'Room 433a - Studio Booth');
    $map->addTarget('154,161,172,181', 'room436', 'Room 436 - Mr. Reason\'s Office');
    $map->addTarget('131,160,155,182', 'room435', 'Room 435 - Secretary\'s Office');
    $map->addTarget('113,161,132,181', 'room434', 'Room 434');
    $map->addTarget('144,291,189,326', 'room403', 'Room 403 - Crabtree');
    $map->addTarget('191,294,224,325', 'storage', 'Room 407 - Departmental Storage');
    $map->addTarget('298,254,341,292', 'room413', 'Room 413 - Computer Lab');
    $map->addTarget('254,290,341,325', 'mathsocoffice', 'Math / Social Studies Office');
    $map->addTarget('142,68,188,104', 'room463', 'Room 463');
    $map->addTarget('189,69,224,101', 'storage', 'Room 467 - Departmental Storage');
    $map->addTarget('188,100,223,138', 'room460', 'Room 460 - Richardson');

    // Quest-conditional targets
    if (! strstr($quests, "3") ) {
        $map->addTarget('143,210,143,180,107,180,108,189,127,189,128,210', 'room432', 'Room 432 - A/V Control Room');
    }
    if (! strstr($quests, "j") || ! strstr($quests, "k") ) {
        $map->addTarget('144,256,188,291', 'room401', 'Room 401 - Bartling');
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

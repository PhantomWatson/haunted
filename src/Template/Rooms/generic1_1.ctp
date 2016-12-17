<?php
    $this->Game->spendTime();
    $this->Game->clearRoom();
?>
<p>
    You detect the faint odor of chemicals, but you can't identify them. The room has evidence of all sorts of monsters
    running around in it. There are grubby smudges on the chalkboard made by three-fingered, clawed hands. Tiny bare
    feet and either slugs or snakes have left tracks across the floor in something like thin, wet, blue mud. The room is
    a mess, with books and papers scattered about and chairs overturned. You hear a low growl coming from underneath a
    table in the back of the room. You think it wise to leave before you find out what it is coming from.
</p>
<?= $this->Game->hallwayLink() ?>

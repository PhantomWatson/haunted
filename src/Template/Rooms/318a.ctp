<?php $this->Game->clearRoom(); ?>
<p>
    In here, you see a group of zombie student council members discussing business. On the subject of homecoming
    floats, they can't seem to decide whether they should be fueled by the brains of humans or the souls of the
    damned. In the back of the room, Amber McKnight calls for a vote on whether their theme should be more
    demon-focused or zombie-focused, then angrily asks you why you're not participating. When everyone in the room
    looks over at you, it is discovered that you're the only human present. <em>"BRAAAAAIIIINS!"</em> they all cry
    out, lunging at you. Zombie McKnight whines, "Hey guys, save some for me!" You beat back a half-dozen of your
    cannibalistic, green classmates with a flagpole, then sprint out into the student center.
</p>
<?= $this->Game->link('Investigate the student center', ['room' => 'studentcenter']) ?>
<?= $this->Game->hallwayLink(null, 1) ?>

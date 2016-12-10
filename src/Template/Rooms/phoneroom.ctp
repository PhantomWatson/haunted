<p>
    You walk into a little booth with a rotary phone and try to dial your house. In the middle of dialing the number,
    you hear a voice on the phone:
</p>
<p>
    "Hey, stop!"<br />
    "Uh... what?" you ask.<br />
    "Stop tying up the phone line, <?= $name ?>. I'm trying to order pizza!" You recognize his voice as Mr. Murray's
    <br />
    "Oh, sorry."<br />
    "Don't be sorry! Be off the phone! Get up here and you can have some of this pizza when it comes."<br />
    "Alright," you say.<br />
    "Sorry about that," Mr. Murray says, "So the two-liter is free if I get two large thin-crusts?"<br />
</p>
<?php $this->Game->completeQuest('i'); ?>
<?= $this->Game->link('Investigate the student center', ['room' => 'studentcenter']) ?>
<?= $this->Game->hallwayLink(null, 1) ?>

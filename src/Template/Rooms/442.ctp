<?php if (! $move): ?>
    <p>
        In Frau Vogelbacher's room, you are greeted by a German woman who asks, "Hallo. Hast du die Hausaufgabe
        von Gestern?"
    </p>
    <?= $this->Game->link('Reply "Ja, ich habe dass."', ['move' => 'ja']) ?>
    <?= $this->Game->link('Reply "Nein, ich habe dass nicht."', ['move' => 'nein']) ?>
    <?= $this->Game->link('Reply "Es ist sch&ouml;nes Wetter. Es ist hei&szlig;. Heute gibt ein Picnic. Ein Picnic und ein Eis."', ['move' => 'wetter']) ?>
<?php elseif ($move == "ja"): ?>
    <p>
        She stands there, waiting for you to give her something. Confused, you run back out into the hallway.
    </p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "nein"): ?>
	<p>
        She acts disappointed and shakes a finger at you, scolding you in German. You run back out into the hallway
        before she can ask you any more questions.
    </p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "wetter"): ?>
    <p>
        She tosses a trashcan at you for reminding her of The Weather Song and you retreat back into the hallway.
    </p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php endif; ?>

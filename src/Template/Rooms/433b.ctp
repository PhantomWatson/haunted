<?php if (! $move ): ?>
	<p>
        The television studio seems to be in the middle of filming. Lights are on and a camera is pointed at a giant
        slug in a cage, doing very little. You look up and see two students in the booth operating the controls.
    </p>
    <?= $this->Game->link('Pet the giant slug', ['move' => 'pet']) ?>
    <?= $this->Game->link('Go up into the booth', ['room' => 'room433a']) ?>
    <?= $this->Game->link('Go through the back office', ['room' => 'room434']) ?>
    <?= $this->Game->link('Go into the editing room', ['room' => 'room430']) ?>
<?php elseif ($move == "pet"): ?>
    <p>
        This is why mother wouldn't let you keep a giant slug as a pet when you were little. You pet the slug, get
        your arm covered in slug snot, and <strong>lose a period getting the slime off of you</strong>.
    </p>
    <?= $this->Game->link('Go up into the booth', ['room' => 'room433a']) ?>
    <?= $this->Game->link('Go through the back office', ['room' => 'room434']) ?>
    <?= $this->Game->link('Go into the editing room', ['room' => 'room430']) ?>
<?php endif; ?>

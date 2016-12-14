<p>
	You hear sounds coming from the television studio. Lights are on and some of the editing equipment is running.
</p>
<?= $this->Game->link('Go into the studio', ['room' => 'room433b']) ?>
<?= $this->Game->link('Go up into the booth', ['room' => 'room433a']) ?>
<?php if (! $this->Game->questCompleted('3')): ?>
    <?= $this->Game->link('Go into A/V control room', ['room' => 'room432']) ?>
<?php endif; ?>
<?= $this->Game->hallwayLink(null, 1) ?>

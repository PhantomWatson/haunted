<p>
	<?php if ($this->Game->questCompleted('3')): ?>
        The television studio is quieter now that it's not the epicenter of an evil plot. The evil
        purple-fungus-generated zombie-waves that Steve was broadcasting have been replaced with old reruns
        of The Joy of Painting with Bob Ross.
    <?php else: ?>
        You hear sounds coming from the television studio. Lights are on and some of the editing equipment is running.
    <?php endif; ?>
</p>
<?= $this->Game->link('Go into the studio', ['room' => 'room433b']) ?>
<?= $this->Game->link('Go up into the booth', ['room' => 'room433a']) ?>
<?php if (! $this->Game->questCompleted('3')): ?>
    <?= $this->Game->link('Go into A/V control room', ['room' => 'room432']) ?>
<?php endif; ?>
<?= $this->Game->hallwayLink(null, 1) ?>

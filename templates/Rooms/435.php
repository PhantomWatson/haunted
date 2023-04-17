<p>
    This is the secretary's office. She is nowhere to be found, and in her place sits what appears to be a giant,
    anthropomorphic pineapple. You glance at the desk to see if there are any stray passes and it abruptly starts
    growling at you, shaking its leaves violently.
</p>
<?= $this->Game->link('Go into the equipment/copying room', ['room' => 'room431']) ?>
<?= $this->Game->link('Go into the back office', ['room' => 'room434']) ?>
<?php if (! $this->Game->questCompleted("3") ): ?>
    <?= $this->Game->link('Go into A/V control room', ['room' => 'room432']) ?>
<?php endif; ?>
<?= $this->Game->link('Go into Mr. Reason\'s office', ['room' => 'room436']) ?>
<?= $this->Game->hallwayLink(null, 1) ?>

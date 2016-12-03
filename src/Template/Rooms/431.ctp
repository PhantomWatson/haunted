<p>
    What appear to be bright green, hairless squirrels with giant eyes are trying to copy themselves in the copy
    machine. Two are trapped inside and three more are on the outside, anxiously pressing all of the buttons on
    the machine.
</p>
<?= $this->Game->link('Go into the secretary\'s office', ['room' => 'room435']) ?>
<?php if (! $this->Game->questCompleted('3')): ?>
    <?= $this->Game->link('Go into A/V control room', ['room' => 'room432']) ?>
<?php endif; ?>
<?= $this->Game->link('Go into Mr. Reason\'s office', ['room' => 'room436']) ?>
<?= $this->Game->hallwayLink(null, 1) ?>

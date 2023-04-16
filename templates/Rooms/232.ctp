<?php if (! $move): ?>
	<p>
        Mr. Wolter's room seems to be stuck in the Purple Dimension. The floor, ceiling, tables, and chairs are all
        shades of purple. The room has the deafening sound of purple and you are overpowered with the smell of purple.
        Mr. Wolter is at his desk, apparently not minding the change one bit. Seeing you, he asks you,
        <strong>
            "According to the studies of modern physics, which of the following is the greatest vehicle ever, and
            is famously driven by color-coordinated high school teachers?"
        </strong>
        After a moment, he adds, <strong>"Ready, set, go."</strong>
    </p>
    <?= $this->Game->link('Pt Cruiser', ['move' => 1]) ?>
    <?= $this->Game->link('Honda S-2000', ['move' => 2]) ?>
    <?= $this->Game->link('Corvette', ['move' => 3]) ?>
    <?= $this->Game->link('Newtonmobile', ['move' => 4]) ?>
    <?= $this->Game->link('Rudely ignore his question and leave', ['move' => 'ignore']) ?>
<?php elseif ($move == 'ignore'): ?>
    <?php $this->Game->spendTime(); ?>
    <p>
        <strong>"Oh, I see that you're <em>cruising</em> out of here? I like your style."</strong>
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == 1): ?>
    <?php
        $this->Game->completeQuest('o');
        $this->Game->clearRoom();
    ?>
	<p>
        "You know your physics well," he says. "<strong>Here's a pass.</strong> Now go bug Mr. Murray or whoever so I
        can be alone to enjoy my purple."
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move > 1): ?>
    <?php $this->Game->spendTime(); ?>
    <p>
        Mr. Wolter throws you out into the hallway for your blasphemy with a force of 250 Newtons.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

<?php if (! $move): ?>
	<?php if ($gpa == 5): ?>
        <?php $this->Game->spendTime(3); ?>
        <p>
            People are so shocked to see you in the attendance office, they immediately start staring at you and
            whispering:
        </p>
        <p>
            "Why is <?= ($sex == "m") ? 'he' : 'she' ?> in here? Did <?= ($sex == "m") ? 'he' : 'she' ?> get in
            trouble?"
            <br />
            "Do you think <?= ($sex == "m") ? 'he' : 'she' ?>'ll get detention?"
            <br/>
            "What? They're giving <?= ($sex == "m") ? 'him' : 'her' ?> detention? What did
            <?= ($sex == "m") ? 'he' : 'she' ?> do?"
        </p>
        <p>
            ...and once word gets around to the assistant principals, you are consequently sent to detention, where
            you spend the next two periods.
        </p>
        <?= $this->Game->hallwayLink() ?>
	<?php elseif ($gpa < 5 && $gpa > 1): ?>
        <p>
            The secretary asks you what you need.
        </p>
        <?= $this->Game->link('Admit that you really had no reason to wander into the office', ['move' => 'admit']) ?>
        <?= $this->Game->link('Start dancing', ['move' => 'dance']) ?>
        <?= $this->Game->link('Run', ['move' => 'run']) ?>
	<?php elseif ($gpa <= 1): ?>
        <p>
            People are so used to seeing you in the attendance office that they don't even seem to notice you.
        </p>
        <?= $this->Game->link('Swipe some passes off of the secretary\'s desk', ['move' => 'swipe']) ?>
        <?= $this->Game->link('Stealing is <strong>wrong</strong>', ['move' => 'noswipe']) ?>
	<?php endif; ?>
<?php elseif ($move == "admit"): ?>
    <?php $this->Game->spendTime(2); ?>
    <p>
        The secretary sends you to detention for one period for annoying her.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "dance"): ?>
    <p>
        You entrance the secretary with your dancing. While she stares at you in a daze, you grab a pass from her desk
        and run back out into the hallway.
    </p>
    <?= $this->Game->hallwayLink('Search more rooms') ?>
<?php elseif ($move == "run"): ?>
    <?php $this->Game->spendTime(1); ?>
    <p>
        You make it back out into the hallway before anything terrible happens.
    </p>
    <?= $this->Game->hallwayLink('Search more rooms') ?>
<?php elseif ($move == "swipe"): ?>
	<?php if ($this->Game->questCompleted("f")): ?>
        <?php $this->Game->spendTime(2); ?>
        <p>
            You search the secretary's desk to realize that you have already stolen all of her passes. As you search
            for any that you might have forgotten, the secretary notices what you're doing and
            <strong>sends you to a period of detention.</strong>
        </p>
        <?= $this->Game->hallwayLink() ?>
	<?php else: ?>
        <?php $this->Game->completeQuest('f'); ?>
        <?php $this->Game->addPasses(4); ?>
        <p>
            You make off with <strong>five passes</strong> without anyone noticing.
        </p>
        <?= $this->Game->hallwayLink() ?>
	<?php endif; ?>
<?php elseif ($move == "noswipe"): ?>
    <?php $this->Game->spendTime(1); ?>
    <p>
        Your sense of moral decency robbing you of the ability to have any fun, you wander back out of the attendance
        office.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

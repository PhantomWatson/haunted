<?php if (! $move ): ?>
    <p>
        You walk into the cold, dark gymnasium and gasp in horror at the army of zombies shambling about in basketball
        shorts and jerseys.
    </p>
    <?php if ($gpa == 4): ?>
        <?php $this->Game->spendTime(); ?>
        <p>
            The zombies shout, <em>"NERD!!!"</em> and shove you back out into the hallway. Zombies can <em>smell</em>
            high GPAs, it turns out.
        </p>
        <?= $this->Game->hallwayLink(null, 1) ?>
    <?php elseif ($gpa == 5): ?>
        <?php $this->Game->spendTime(2); ?>
        <p>
            The zombies shout, <em>"NERD!!!"</em> and shove you into a locker, where you spend the next period.
            Zombies can <em>smell</em> high GPAs, it turns out.
        </p>
        <?= $this->Game->hallwayLink(null, 1) ?>
    <?php elseif ($gpa <= 3): ?>
        <p>
            The zombies, though frightening, don't pay much attention to you.
        </p>
        <?php if (! $this->Game->questCompleted("b") ): ?>
            <?= $this->Game->link('Play basketball with them', ['move' => 'play']) ?>
        <?php endif; ?>
        <?= $this->Game->link('Investigate boys locker room', ['room' => 'lockerroom', '?' => ['lr' => 'b']]) ?>
        <?= $this->Game->link('Investigate girls locker room', ['room' => 'lockerroom', '?' => ['lr' => 'g']]) ?>
        <?= $this->Game->hallwayLink(null, 1) ?>
    <?php endif; ?>
<?php elseif ($move == "play"): ?>
    <?php $this->Game->completeQuest('b'); ?>
	<p>
        You annihilate your opposition, since you don't have their pathetic zombie physique.
    </p>
	<?php if ($gpa > 0): ?>
		<?php $this->Game->addPasses(1); ?>
        <p>
            <strong>Two give you their passes</strong> out of respect.
        </p>
	<?php elseif ($gpa == 0): ?>
        <?php $this->Game->addPasses(3); ?>
        <p>
            <strong>Two give you two passes each</strong> (don't bother trying to multiply that) out of respect for your
            basketball skills and your impressively low GPA.
        </p>
    <?php endif; ?>
    <?= $this->Game->link('Hit the showers (Boys\' Locker Room)', ['room' => 'lockerroom', '?' => ['lr' => 'b']]) ?>
    <?= $this->Game->link('Hit the showers (Girls\' Locker Room)', ['room' => 'lockerroom', '?' => ['lr' => 'g']]) ?>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

<?php if (! $move): ?>
	<p>
		You see Mr. Conaway in his classroom, floating a foot off of the ground and glaring at you with dark red eyes.
		A small, purple squid is hanging halfway out of his ear. "Bloooooood..." he moans. "Must have
		<em>blooooooood</em>!" Jerking his head to the side as if suddenly struck by a thought, he holds his wrist to
		feel his pulse. "Oh, I've got some." One of your shoes squeaks and Mr. Conway notices you. "How <em>dare</em>
		you disturb me?!" he screams. The squid in his ear retracts slightly. You guess that it has somehow taken
		control of his mind. "Answer this question or be severely repremanded!"
	</p>
	<p>
		In chemistry, a mole _____
	</p>
	<?= $this->Game->link('Is a derivative unit of the Avacado Theorem', ['move' => 1]) ?>
	<?= $this->Game->link('Is green', ['move' => 2]) ?>
	<?= $this->Game->link('Has something to do with Avigadro', ['move' => 3]) ?>
	<?= $this->Game->link('Is a kind of blemish', ['move' => 4]) ?>
	<?= $this->Game->link('Will get you in to most national Shriner conventions', ['move' => 5]) ?>
<?php elseif ($move == 3): ?>
	<?php
        $this->Game->completeQuest('m');
        $this->Game->clearRoom();
    ?>
	<p>
		Mr. Conaway blurts out a congratulatory message in Squiddese and hands you a pass.
	</p>
    <?= $this->Game->hallwayLink() ?>
<?php else: ?>
	<p>
		Mr. Conaway loudly jibbers at you in Squiddese and chases you out of his room.
	</p>
	<p>
		You guess that you didn't answer correctly.
	</p>
	<?php $this->Game->spendTime(); ?>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>
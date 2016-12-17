<?php if (! $move ): ?>
	<p>
		The A/V control room has been drastically changed. An evil purple fungus has spread across all of the
		controls, moving slowly and blinking large, curious eyes at you as you enter. When you enter, Stevo the
		Magnificenticious (known to others as Steve Geraci) is hanging upside down from the ceiling by the superhuman
		strength contained in his toes. Once he notices you, he detaches and jumps gracefully to the floor. He
		glares at you menacingly. Stevo seems to be masterminding the scheme to broadcast evil purple-fungus-generated
		zombie-waves to all of the classrooms in order to create a race of zombie students for him to command.
	</p>
	<p>
		"Hey, you jerk! Stop that right-quick!" you say.
	</p>
	<p>
		"Foolish mortal! Thou hast trespassed in my sacred domain. You will pay dearly for your crimes!"
	</p>
	<p>
		What do you do, Hot Shot? <strong>WHAT DO YOU DO?!?</strong>
	</p>
	<?= $this->Game->link('Throw the pitcher of water all over Stevo and the controls', ['move' => 'water']) ?>
	<?= $this->Game->link('Physically assualt Stevo', ['move' => 'fight']) ?>
	<?= $this->Game->hallwayLink('RUN', 1) ?>
<?php elseif ($move == "water"): ?>
	<p>
		The fungus absorbs the water and Stevo seems to grow even more menacing and imposing. You are paralyzed in
		fear and are thrown out of the room with Stevo's famous Two-Wheeler Backwards Midnight Shin-Whack.
		<strong>You lose one hour.</strong>
	</p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "fight"): ?>
	<?php
        $this->Game->completeQuest('3');
        $this->Game->clearRoom();
    ?>
	<p>
		Stevo develops scary muscles from out of nowhere. His terrifying mass and awesome strength seem to be
		draining his intellect. <strong>"Stevo smash!"</strong> Even though he looks prepared to pummel you, he seems
        to have forgotten his evil scheme. While he beats you senseless, he inadvertently  uses your skull to trip the
        master switch and deactivate his diabolical machine. The fungus shamefully oozes away to find kinship among the
		older, wiser locker room mold. You manage to escape, having saved the school.
	</p>
	<p>
		<strong>What do you do now?</strong>
	</p>
    <?= $this->Game->link('Run around and brag to everyone you see?', ['move' => 'brag']) ?>
    <?= $this->Game->link('Keep it to yourself', ['move' => 'dontbrag']) ?>
<?php elseif ($move == "brag"): ?>
    <?php $this->Game->completeQuest('d'); ?>
    <?php $this->Game->addPasses(3); ?>
	<p>
		The first four teachers you see happen to be Honors English teachers. Hearing of your exploits,
		<strong>they reward you with one pass from each of them</strong> for vanquishing their mortal enemy,
		Steve Geraci, and proclaim you to be <?= $this->Game->getTitle('d') ?> <?= $name ?>.
	</p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "dontbrag"): ?>
	<p>
		You enjoy a quiet triumph and spend the rest of the hour in quiet reflection of your selfless deed.
	</p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php endif; ?>

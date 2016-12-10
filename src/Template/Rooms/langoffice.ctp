<?php if (! $move): ?>
    <p>
        In here, Darth Andronicus (who bears a striking resemblance to Brandon Nolley) is practicing the dark side of
        the Force. You see him levitating books, then slicing them to bits with his lightsaber. Upon seeing you, he
        shrieks like a girl and puts away his weapon. He runs into the corner of the room and ducks behind a cubicle.
        You follow him. Someone suddenly jumps out from behind the same cubicle before you can get to the corner of the
        room. You don't recognize who he is, but he seems like a friendly, trustworthy person.
    </p>
    <p>
        "Hey, where did Brandon go?" you ask.<br/>
        "DARTH ANDRONICUS!" the stranger corrects you. "And I didn't see him anywhere around here. I don't know what
        you're talking about. Hey, want to hear a secret?"<br/>
        "Sure." He motions for you to come closer.<br/>
        "I can tell you how to get out of here." He motions for you to come even closer.<br/>
    </p>
    <?= $this->Game->link('Listen to what he has to say', ['move' => 'listen']) ?>
    <?= $this->Game->link('Back away and go out into the hallway', ['move' => 'run']) ?>
    <?= $this->Game->link('Kick the stranger in the privates and run away', ['move' => 'nutshot']) ?>
<?php elseif ($move == "listen"): ?>
    <?php $this->Game->completeQuest('p'); ?>
	<?php $this->Game->spendTime(3); ?>
	<p>
        The stranger chuckles under his breath. As he gazes into your eyes seductively, he commands you to walk through
        the halls in circles, chanting "Darth Andronicus is the coolest!" until tomorrow. Hypnotized, you follow his
        commands and begin to traverse the halls, yelling the phrase.
    </p>
    <p>
        <strong>Two hours later,</strong> a pair of students get fed up with listening to you and hang you upside down
        from the top of the stairs until you regain your senses.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "run"): ?>
    <?php $this->Game->spendTime(); ?>
    <p>
        As you run away from the stranger, he suddenly turns into a very angry Darth Andronicus, who blasts Force
        lightning at you and tries to levitate furniture to block your path. Once safely in the hallway, you hear him
        softly sobbing to himself.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "nutshot"): ?>
    <?php $this->Game->spendTime(); ?>
    <p>
        You give Darth Andronicus a shot to the pills, bringing him quickly to his knees. He whimpers in a falsetto
        voice, "How dare you?!" As you walk out of the office, you see him trying to use his Force powers while very
        distracted and getting electrocuted with his own Force lightning.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

<?php
    $newGpa = $gpa + 1;
    $gpaMore = ($gpa == 4) ? '4.0' : ($gpa + 0.5);
?>

<?php if (! $move): ?>
    <p>
        The library looks relatively normal, except for it being slightly darker than usual and occupied with an ogre, three homunculi, and a gnome with severe acne.
    </p>
	<?php if (! $this->Game->questCompleted('8')): ?>
		<p>
		    There is a strange old man wearing a cloak in the corner who starts beckoning you his way.
        </p>
	<?php endif; ?>
	<p>
        <strong>What would you like to do in here?</strong>
    </p>
    <?php if ($gpa != "5"): ?>
        <?= $this->Game->link(
            "Spend an extra period reading in the library to raise your GPA to $gpaMore",
            ['move' => 'read']
        ) ?>
    <?php endif; ?>
    <?= $this->Game->link('Pull a fire alarm', ['move' => 'firealarm']) ?>
    <?php if (! $this->Game->questCompleted('8') ): ?>
        <?= $this->Game->link('See what the old man wants', ['move' => 'vincent']) ?>
    <?php endif; ?>
    <?= $this->Game->hallwayLink('Leave the library', 1) ?>
<?php elseif ($move == "read"): ?>
    <?php $this->Game->changeGpa($newGpa); ?>
    <?php $this->Game->spendTime(2); ?>
    <p>
        Your hard work has paid off. By spending an additional period with your nose in some books, your GPA has been
        raised to <?= $gpaMore ?>. Now teachers will treat you better, nerds will respect you, and jocks will stuff you
        into lockers.
        <?php if ($newGpa != "5"): ?>
            But you <em>still</em> don't have a 4.0. Can you, an apparent nerd, live with the shame?
        <?php endif; ?>
    </p>
    <?= $this->Game->hallwayLink('Leave the library') ?>
<?php elseif ($move == "firealarm"): ?>
    <?php $this->Game->spendTime(2); ?>
    <p>
        The library attendants see you pulling the alarm and report you to security. You lose a period in detention.
        <strong><em>
            WHY WOULD YOU DO THAT?!
        </em></strong>
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "vincent"): ?>
    <p>
        You walk over to where to old man is sitting. On your way, you step on a rake and smack yourself in the head.
        Upon seeing this, the old man cackles loudly. You step past two beartraps, a hanging noose, and what appears to
        be a land mine. The man seems disappointed when you make it to him and you see him slouch a little more
        underneath his cloak as you sit down across a table from him.
    </p>
    <p>
        "Hello," he says. "My name is Master Sung. Would you like to be taught the art of backstabbing? It's the only
        way that you're going to be able to escape this school. You have to be <em>ruthless</em>.
    </p>
    <?= $this->Game->link('"Yeah, sure. Sounds like fun."', ['move' => 'trust_vincent']) ?>
    <?= $this->Game->link('"Sorry, I have a class to get to."', ['move' => 'reject_vincent']) ?>
<?php elseif ($move == "reject_vincent"): ?>
    <?php $this->Game->spendTime(); ?>
    <p>
        You get up and walk out of the library. You hear Master Sung shout, <strong>"You'll be sorry!!!"</strong> as you
        leave.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "trust_vincent"): ?>
    <?php $this->Game->completeQuest('8'); ?>
    <p>
        You see Master Sung's excited smile from underneath his cloak. "Wait right here. I'll go get my teaching
        supplies," he says before dashing out of the library.
    </p>
    <p>
        After a minute or two of waiting at the table, he still hasn't come back.
    </p>
    <?= $this->Game->link('Continue to wait for Master Sung', ['move' => 'wait']) ?>
    <?= $this->Game->link('Leave the library', ['move' => 'dont_wait']) ?>
<?php elseif ($move == "dont_wait"): ?>
    <?php $this->Game->spendTime(); ?>
    <p>
        You walk back out in the direction that Master Sung left in and see him out in the hallway, pulling a giant net
        out of a supply closet. Upon seeing you, he immediately shrieks, drops the net, a duck, and three chewed-up
        nickels, and runs away shouting, "Oh, just like that, you filthy swine!" A nearby student chuckles to himself,
        "Heh. Warcraft references."
    </p>
    <?= $this->Game->hallwayLink('Continue searching rooms') ?>
<?php elseif ($move == "wait"): ?>
    <p>
        After waiting until the end of the period, <strong>and then until the end of the next period</strong>, you
        finally get fed up and leave the library.
    </p>
    <?= $this->Game->link('Go back out into the hallway', ['move' => 'leave']) ?>
<?php elseif ($move == 'leave'): ?>
    <?php $this->Game->spendTime(3); ?>
    <p>
        The moment you step outside the library, someone throws a giant net around you and starts hogtying you. It's
        Master Sung! He gags you with a shoe before you can ask him what he's doing.
        <strong>You lose an additional period</strong>
        getting the ropes around your hands and feet undone, the net off of you, and out of the closet that he throws
        you into.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

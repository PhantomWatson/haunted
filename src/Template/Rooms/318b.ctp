<?php if (! $move): ?>
    <p>
        The vending machine room is dark and much, much larger than it appears to be from the outside. You can hear
        the chanting of unseen monks and see in front of you the beginning of a great, carpeted staircase that leads
        up into darkness. You can see the top of the stairs, where only a golden vending machine is illuminated. An
        eerie wind whistles through the room.
    </p>
    <?= $this->Game->link('Ascend the staircase to the golden vending machine', ['move' => 'ascend']) ?>
    <?= $this->Game->hallwayLink('Flee', 1) ?>
<?php elseif ($move == "ascend"): ?>
	<p>
        The staircase gradually gets narrower as you approach the top. Once there, you step into a ring of light, in the
        center of which is a solid gold Mountain Dew vending machine. You reach into your pocket and remove one solid
        gold Illinois state quarter.
    </p>
    <?= $this->Game->link('Purchase a can', ['move' => 'buy']) ?>
    <?= $this->Game->link('Don\'t do the Dew', ['move' => 'nobuy']) ?>
<?php elseif ($move == "buy"): ?>
    <p>
        An ice-cold, golden Mountain Dew can rolls gently out of the loins of the godlike machine. It glistens in
        your hand. It is calling to you. It wants you to drink it.
    </p>
    <?= $this->Game->link('Give in', ['move' => 'drink']) ?>
    <?= $this->Game->link('Refuse to drink it', ['move' => 'nodrink']) ?>
<?php elseif ($move == "drink"): ?>
	<?php $this->Game->completeQuest('g'); ?>
    <?php $this->Game->doublePasses(); ?>
	<p>
	    As you take in the delicious tonic, seemingly squeezed from the fruit of life itself, your body undertakes an
        amazing change. You feel like you can move faster and see more than you could before.
        <strong>
            Your new abilities and confidence now allow you to avoid hall monitors and search twice as many rooms
            with the passes that you've already gotten than you could before.
        </strong>
    </p>
    <?= $this->Game->link('Investigate the student center', ['room' => 'studentcenter']) ?>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "nodrink"): ?>
	<p>
        You try to resist the heavenly liquid, but find it impossible to eschew the Dew.
    </p>
    <?= $this->Game->link('Give in', ['move' => 'drink']) ?>
<?php elseif ($move == "nobuy"): ?>
    <p>
        Having abandoned the only think that you could have gained from walking up all of those stairs, you slink
        back into the hallway to refuse to be adventurous somewhere else.
    </p>
    <?= $this->Game->link('Investigate the student center', ['room' => 'studentcenter']) ?>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php endif; ?>

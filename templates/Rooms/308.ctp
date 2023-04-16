<?php if (! $move): ?>
    <p>
        As you enter the bandroom you are confronted with a raging, flaming pit of burning musical instruments.
        Overseeing the destruction are two demons. One, a short and oddly hairless creature yells at you forcing you
        to weep and causing an uncontrollable desire to drop band class. The other, younger and more nimble, has an
        obscenely large head that seems to occupy a vast portion of the room. The demons are holding Mr. Pritchett and
        Mr. Arnett hostage in the band office.
    </p>
    <?= $this->Game->link('Try to save the teachers', ['move' => 'save']) ?>
    <?= $this->Game->link('Revel in their anguish', ['move' => 'revel']) ?>
<?php elseif ($move == 'save'): ?>
	<p>
        Ok, you're going to save them. But what are you going to do?!
    </p>
    <?= $this->Game->link('Grab a musical instrument and challenge them "Devil went down to Georgia" style for the lives of the teachers.', ['move' => 'save1']) ?>
    <?= $this->Game->link('Take a timpani and lunge the flaming drum at the demons.', ['move' => 'save2']) ?>
    <?= $this->Game->link('Grab the Merletto and show the demons to their imminent destruction!!!', ['move' => 'save3']) ?>
<?php elseif ($move == 'save1'): ?>
	<?php
        $this->Game->completeQuest('9');
        $this->Game->clearRoom();
    ?>
	<p>
        The demons are horrified into a helpless stupor by for feeble attempts at playing an instrument at them.
        While they are in their daze, you push them into the pit and free their captives.
        <strong>Arnett and Pritchett each give you a pass and send you on your merry way.</strong>
    </p>
    <?php $this->Game->addPasses(1); ?>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == 'save2'): ?>
    <p>
        The demons catch the drum and hurl it back at you, dodgeball-style. Your head goes through the head of the
        drum and you are trapped there until the demons get tired of you <strong>two periods later</strong> and toss
        you
        <?php if ($sex == 'm'): ?>
            and your girly arms
        <?php endif; ?>
        back into the hallway.
    </p>
	<?php $this->Game->spendTime(3); ?>
    <?= $this->Game->hallwayLink('Continue searching rooms') ?>
<?php elseif ($move == 'save3'): ?>
	<p>
        You must not have known that <strong><em>merletto</em> is Italian for shoelace</strong>. Either that or you
        were under the impression that shoelaces can be effectively used to slay demons. The demons, who just sit and
        laugh, are obviously not impressed by your attack. The captive teachers slap their heads in shame and vow to
        give you F's! <strong>You lose an hour</strong> as you walk the hallway in shameful contemplation.
    </p>
    <?php $this->Game->spendTime(2); ?>
    <?= $this->Game->hallwayLink('Continue searching rooms') ?>
<?php elseif ($move == 'revel'): ?>
    <?= $this->Game->link('The power of Pritchett compels you... HELP THEM!', ['move' => 'save']) ?>
<?php endif; ?>

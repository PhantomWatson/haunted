<?php if (! $move): ?>
    <p>
        Mrs. Amman's chemistry room reeks of various noxious chemicals. You see in the corner, a mess of beakers, test
        tubes, and Bunsen burners, in the middle of which is a giant bubbling vat of chemicals. Out of the vat is
        crawling monsters of every shape and size. Horned lizard monsters, winged demons, spiked monkey turtles, and
        Ravenous Bugblatter Beasts of Traal hobble away from this monsterous matrix and out into the hallway to wreak
        havoc. In the opposite corner stands former Muncie Central student and head of Alexandrian organized crime,
        Joe Fuschetto, with his bodyguard Eccentrica Galumbits at his side, cackling madly at his creation.
    </p>
    <?= $this->Game->link('Try to stop his evil plan', ['move' => 'fight']) ?>
    <?= $this->Game->link('Ignore his evil plan', ['move' => 'abide']) ?>
    <?= $this->Game->hallwayLink('Shriek and run back out into the hallway', 1) ?>
<?php elseif ($move == 'fight'): ?>
	<?php $this->Game->spendTime(); ?>
    <p>
        As you prepare for fisticuffs, he immediately orders Eccentrica Galumbits to toss you back out into the
        hallway. She does. And she's not very gentle about it.
    </p>
    <?= $this->Game->hallwayLink('Continue searching rooms') ?>
<?php elseif ($move == 'abide'): ?>
	<?php $this->Game->completeQuest('2'); ?>
    <p>
        He's very upset by your lack of interest and saunters off back to his van, his evil plan thwarted by his own
        lack of confidence. Eccentrica Galumbits follows him and the cauldron of chemicals dies down, the steady
        stream of demonic creations ceases.
    </p>
	<p>
        <strong>
            You've defeated the evil mastermind Joe Fuschetto!
        </strong>
    </p>
    <p>
        You will now and forever be known as
        <strong>
            <?= $this->Game->getTitle() ?> <?= $name ?>!
        </strong>
    </p>
    <?= $this->Game->link('Search Mrs. Amman\'s desk before you leave', ['move' => 'search']) ?>
    <?= $this->Game->hallwayLink('Flee before any more stray demons notice you', 1) ?>
<?php elseif ($move == 'search'): ?>
    <p>
        You greedily rummage through her desk and find <strong>ten passes</strong>. If it were any other day, you would
        do the honest thing and leave them there. But considering the state of the school and how this is a computer
        game, you grab them all and dash back out into the hallway.
    </p>
    <?php $this->Game->addPasses(9); ?>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

<?php if (! $move ): ?>
    <p>
        Entering the cafeteria, you immediately notice a giant pirate ship being sailed across the enormous room,
        scattering tables and chairs in its wake. You look up to the front of the ship and see a crazed James Updike
        directing the ship's movements with a pirate hat and rapier in hand, screaming,
        <strong>"<em>ARRRRRR!</em> Give me your booty!"</strong>.
    </p>
    <p>
        <strong>What do you do?</strong>
    </p>
    <?= $this->Game->link('Order him to stop his foolishness', ['move' => 'stop']) ?>
    <?= $this->Game->link('Ask if you can join his pirate ship', ['move' => 'join']) ?>
    <?= $this->Game->hallwayLink('RUN', 1) ?>
<?php elseif ($move == "stop"): ?>
    <?php $this->Game->spendTime(2); ?>
    <p>
        You dare to oppose the immortal pirate James Updike. He considers your order to be a challenge and fires the
        cannon. An extra period in the nurse's office patches you up.
    </p>
	<?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "join"): ?>
    <?php $this->Game->completeQuest('6'); ?>
    <?php $this->Game->addPasses(2); ?>
	<p>
	    He thinks about it for a moment, then agrees to appoint you Cabin <?= ($sex == "m") ? 'Girl' : 'Boy' ?>
	    of his ship. He takes a few minutes to explain to you the benefits of being a pirate on his ship. After
	    briefing you on the gold-tooth dental plan and reimbursement-for-lost-parrots policy,
	    <strong>he gives you three passes as a sign-on bonus</strong>.
	    You are now known as <?= $this->Game->getTitle('6') ?> <?= $name ?>.
    </p>
	<p>
	    What do you do now that you can safely walk through the cafeteria?
    </p>
    <?= $this->Game->link('Look in the kitchen', ['move' => 'kitchen']) ?>
    <?= $this->Game->link('Look in the computer lab', ['move' => 'comp_lab']) ?>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "kitchen"): ?>
    <p>
        The scent of beef chicken fried beefsteak meatlike Porque&trade; product/caulking paste lures you back into the
        kitchen. There, you find dozens of freshmen in vats of soup, begging to be released.
    </p>
	<?= $this->Game->link('Help the freshmen?', ['move' => 'help']) ?>
	<?= $this->Game->link('Quietly walk back out into the hallway', ['move' => 'donthelp']) ?>
<?php elseif ($move == "help"): ?>
    <?= $this->Game->link('Demand passes from the freshmen first', ['move' => 'for_passes']) ?>
    <?= $this->Game->link('Help them out for nothing in return', ['move' => 'for_nothing']) ?>
<?php elseif ($move == "for_passes"): ?>
    <?php $this->Game->spendTime(2); ?>
    <p>
        <strong>You lose a period</strong> trying to explain the concept of blackmail to them, then give up.
    </p>
	<?= $this->Game->link('Look in the computer lab', ['move' => 'comp_lab']) ?>
	<?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "for_nothing"): ?>
	<?php $this->Game->completeQuest('0'); ?>
	<p>
        You quickly tip over the soup vats so the freshmen can run free, then run from the wrath of the cooks.
        For your selfless act, you will forever be known as <?= $this->Game->getTitle('0') ?> <?= $name ?>.
    </p>
	<?php if (! $this->Game->questCompleted("a")): ?>
		<?= $this->Game->link('Look in the computer lab', ['move' => 'comp_lab']) ?>
	<?php endif; ?>
	<?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "donthelp"): ?>
    <p>
        You quietly walk back out into the hallway, ignoring the pitiful screams of your fellow students. Jerk.
    </p>
	<?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "comp_lab"): ?>
	<?php $this->Game->completeQuest('a'); ?>
	<?php $this->Game->addPasses(9); ?>
	<p>
	    The room is dark, but you see the the lone silhouette of a lanky figure with long, unkempt hair hunched over
	    a computer in the back corner of the room and madly typing away. You ask him who he is, but he replies with
	    only an indistinct murmur. You ask him if he knows what's going on in the school or how to get out. He replies
	    only with another distracted grunt. You ask if he can give you anything at all that would help. He replies,
	    "Yes," and the printer next to you immediately spits out a piece of paper with this printed onto it:
    </p>
    <pre class="meta"><?= htmlentities(file_get_contents(__FILE__)) ?></pre>
    <p>
        You quickly leave, knowing not why you fear this person so.
    </p>
    <?php if (! $this->Game->questCompleted("0")): ?>
        <?= $this->Game->link('Look in the kitchen', ['move' => 'kitchen']) ?>
    <?php endif; ?>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

<?php
    $lrSide = $_GET['lr'];
    $matchingSex = ("$lrSide$sex" == 'gf' || "$lrSide$sex" == 'bm');
?>
<?php if (! $move && $matchingSex): ?>
    <p>
        The disgusting locker room is crawling with roaches and a thin, yellow fungus. You step carefully. You see no
        one nearby, so you are free to do as you please.
    </p>
    <?= $this->Game->link('Take a shower', ['move' => 'shower', '?' => ['lr' => $lrSide]]) ?>
    <?= $this->Game->link('Search the lockers', ['move' => 'search', '?' => ['lr' => $lrSide]]) ?>
    <?= $this->Game->link('Go into the swimming pool', ['room' => 'pool', '?' => ['lr' => $lrSide]]) ?>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == 'search' && $matchingSex): ?>
    <p>
        <?php if (rand(1,2) == 1): ?>
            You find nothing. <strong>YOU <em>FAILURE</em></strong>.
	    <?php else: ?>
            <?php $this->Game->addPasses(); ?>
		    After searching for quite a long time, <strong>you find a single pass.</strong>
        <?php endif; ?>
    </p>
    <?= $this->Game->link('Go into the swimming pool', ['room' => 'pool', '?' => ['lr' => $lrSide]]) ?>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "shower" && $matchingSex): ?>
    <p>
        To relax from your exhausting journey through your haunted school, you take a shower. Halfway through the
        shower, a mischievous demon comes in and steals your clothes. When you come out of the shower and realize that
        your clothes are gone, you are forced to take someone else's athletic uniform from their locker to hide your
        shame. <strong>You lose one period</strong> running around in circles to get rid of the smell that the previous
        owner of the uniform left on it.
    </p>
    <?= $this->Game->hallwayLink(null, 2) ?>
<?php elseif ($sex == "m" && ! $matchingSex): ?>
    <?php $this->Game->completeQuest('c'); ?>
    <?php $this->Game->spendTime(4) ?>
	<p>
        A gang of demon girls scream in shock and abruptly start beating you in the face with tennis rackets and shoving
        you into a locker. After you've been securely trapped inside a locker, the girls tip the locker over so that the
        door is pinned against the ground. Things don't look so good, you creep.
    </p>
    <p>
        <strong>Losing three periods,</strong> you
        finally pry your way out of the locker and into the hallway. But there, you find that the girls that beat you up
        have spread word all over the school about how you tried to enter No Man's Land. You will from now on be
        referred to as "<?= $this->Game->getTitle('c') ?>".
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($sex == "f" && ! $matchingSex): ?>
    <?php $this->Game->spendTime(3) ?>
    <p>
        You immediately pass out because of the incredible stench of the boys' locker room. Two periods later, you wake
        up to find that you have crawled back out into the hallway.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

<?php if (! $move): ?>
	<p>
        You walk into the JROTC room hoping to gain access to their sliding door to the outside world. Unfortunately,
        this area has been made a staging point for the final offensive against the demons. Armed with fake rifles and
        large flags, the uniformed members of the MCHS JROTC are in formation and marching at you out of the room.
    </p>
	<p>
        <strong>Do you join the ranks?</strong>
    </p>
    <?= $this->Game->link('Yes', ['move' => 'yes']) ?>
    <?= $this->Game->link('No', ['move' => 'no']) ?>
<?php elseif ($move == "yes"): ?>
    <?php
        $this->Game->spendTime(2);
        $this->Game->clearRoom();
    ?>
	<p>
        You fall into the ranks, but you learn the meaning of that fancy foriegn word "bayonette" the hard way.
        <strong>You spend the next hour nursing your wounds.</strong>
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "no"): ?>
    <?php
        $this->Game->spendTime();
        $this->Game->clearRoom();
    ?>
	<p>
        You try to slip out the door from whence you came, but the sergeant notices you and screams "Drop and give me
        100!" Instead of going to fight evil, the JROTC soldiers just stand and taunt you while you try to finish
        your punishment. Your arms are so sore by the time you finish, you can't even grab the passbook that you see on
        the nearby desk. <strong>Tough luck!</strong>
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

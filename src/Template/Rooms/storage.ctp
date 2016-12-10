<p>
    In this departmental storage room (fancy term for Big Closet), you see boxes, books, chairs, more books, and also
    some books.
</p>
<?php $chance = rand(0,4); ?>
<?php if ($chance < 4): ?>
    <?php $this->Game->spendTime(2); ?>
    <p>
        There's nothing of interest in here. Way to waste a period.
    </p>
<?php elseif ($chance == 4): ?>
    <p>
        You see <strong>an unused pass on the floor</strong>. SCORE!
    </p>
<?php elseif ($chance == 5): ?>
    <?php $this->Game->spendTime(2); ?>
    <p>
        The door closes and jams behind you. You have to spend <strong>another period</strong> getting the door back open.
    </p>
<?php endif; ?>
<?= $this->Game->hallwayLink() ?>

<?php if (! $move): ?>
    <p>
        The icy planetarium is dark and you can see stars projected onto the ceiling. You see the faint outlines of several
        students frozen into chairs. You can see their breath in the chilly air.
    </p>
    <p>
        <strong>Sit down and look at the stars with your fellow students?</strong>
    </p>
    <?= $this->Game->link('Yes', ['move' => 'sit']) ?>
    <?= $this->Game->link('No', ['move' => 'leave']) ?>
<?php elseif ($move == "sit"): ?>
    <?php $this->Game->spendTime(2); ?>
    <p>
        You sit down in a freezing chair and gaze up at the projected stars, then notice that you can't move your arms or
        legs. You're frozen in place, just like the other students! Good going. After
        <strong>you lose another hour waiting</strong>, a friendly senior comes by with a hairdryer to let you out.
    </p>

    <?php if ($period2 > 13): ?>
        <?php $this->Game->removePasses() ?>
        <p>
            He demands one of the passes that you've collected before he lets you go and you grudgingly agree to the
            trade.
            <?= $this->Game->hallwayLink() ?>
        </p>
    <?php else: ?>
        <?php $this->Game->spendTime(); ?>
        <p>
            He demands passes from each of the students before he helps them. When he gets to you, you're the only person
            that's still stuck in a chair. You explain to him that you haven't collected any passes yet and frustrated, he
            runs back out into the hallway, leaving the dryer on a table. After you wait for
            <strong>one additional hour</strong>, the heat from the distant hairdryer warms you up enough to allow you to
            tear yourself free of the frosty seat. You leave the other students to fend for themselves.
        </p>
        <?= $this->Game->hallwayLink() ?>
    <?php endif; ?>
<?php elseif ($move == "leave"): ?>
    <p>
        Sensing danger, you flee the area, screaming like a schoolgirl.
    </p>
    <?php $this->Game->spendTime(); ?>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

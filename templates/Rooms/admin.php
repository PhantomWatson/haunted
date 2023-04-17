<?php if (! $move): ?>
    <p>
        The administrative office seems to be normal, except for a number of worms crawling through the ceiling tiles
        and a faculty member in the back making copies of a notice reading <strong>"Do not use drinking fountains.
        May give you chest-beetles."</strong> The secretary greets you and asks how she can help you.
    </p>
    <?= $this->Game->link('Ask for passes so you can spend some time at the library doing research', ['move' => 'passes']) ?>
    <?= $this->Game->link('Ask what\'s been going on with the school lately', ['move' => 'whatsup']) ?>
    <?= $this->Game->link('Ask how to get out', ['move' => 'escape']) ?>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "passes"): ?>
    <?php if ($this->Game->questCompleted("e")): ?>
        <p>
            The secretary asks, "Didn't I just give you some passes earlier?"
        </p>
        <?= $this->Game->hallwayLink(null, 1) ?>
    <?php else: ?>
        <?php if ($gpa == 5): ?>
            <?php $this->Game->completeQuest('e'); ?>
            <?php $this->Game->addPasses(1); ?>
            <p>
                <strong>You get two passes from the secretary</strong>, who marvels at your high GPA and scholarly tenacity.
            </p>
            <?= $this->Game->link('Ask what\'s been going on with the school lately', ['move' => 'whatsup']) ?>
            <?= $this->Game->link('Ask how to get out', ['move' => 'escape']) ?>
            <?= $this->Game->hallwayLink() ?>
        <?php endif; ?>
        <?php if ($gpa < 5 && $gpa > 1): ?>
            <?php $this->Game->completeQuest('e'); ?>
            <p>
                The secretary looks at you oddly, <strong>then concedes to give you a single pass.</strong>
            </p>
            <?= $this->Game->link('Go back out into the hallway', ['move' => 'whatsup']) ?>
        <?php endif; ?>
        <?php if ($gpa <= 1): ?>
            <p>
                The secretary scoffs, "Yeah, right. With a GPA like yours, do you really think that I'd fall for
                <em>that?</em> Get back to class."
            </p>
            <?= $this->Game->hallwayLink(null, 1) ?>
        <?php endif; ?>
    <?php endif; ?>
<?php elseif ($move == "whatsup"): ?>
    <p>
        Well, all these demons and monsters running around the school are being created somewhere in here, they're
        definitely not coming <em>into</em> the school. Some of the students in here are being turned into zombies by
        these weird zombie-waves from the televisions. We'd cancel school, but Indiana state law doesn't define demonic
        invasion as a legitimate federal emergency."
    </p>
	<p>
        "But why are all of the doors and windows locked and incapable of being broken down?"
    </p>
    <p>
        "To make the game harder. <em>DER.</em>"
    </p>
    <?= $this->Game->link('Ask for passes so you can spend some time at the library doing research', ['move' => 'passes']) ?>
    <?= $this->Game->link('Ask how to get out', ['move' => 'escape']) ?>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "escape"): ?>
    <p>
        Study hard, keep up your attendance, and you'll graduate some day, <?= ($sex == "m") ? 'sonny' : 'missy' ?>!"
    </p>
    <?= $this->Game->link('Ask for passes so you can spend some time at the library doing research', ['move' => 'passes']) ?>
    <?= $this->Game->link('Ask what\'s been going on with the school lately', ['move' => 'whatsup']) ?>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php endif; ?>

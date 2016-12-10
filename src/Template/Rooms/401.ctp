<?php if (! $move): ?>
    <p>
        Mr. Bartling is in the back of the room. You ask him if he would be kind enough to have mercy on your and
	    give you some passes so that you can have more time to try to save the school.
    </p>
    <p>
        <?php if ($gpa == 5): ?>
            "But," Mr. Bartling says, "I'd expect one of you 4.0 geeks to be good at this. I'll give you one pass for
            answering either of the questions."
        <?php elseif ($gpa < 5 && $gpa > 1): ?>
            "I'll give you two passes for answering the calculus question and one for the algebra question,"
            Mr. Bartling says.
        <?php elseif ($gpa == 1): ?>
            "With a GPA like yours, I can tell that it's going to be hard for you to answer these. I'll give you
            three passes if you can solve the algebra problem and five if you can solve the calculus problem,"
            Mr. Bartling says.
        <?php elseif ($gpa == 0): ?>
            "I'll be amazed if you can answer either of these questions," Mr. Bartling says, "So I'll give you five
            passes if you can solve the algebra problem and ten if you can solve the calculus problem.
        <?php endif; ?>
    </p>
	<?php if (! $this->Game->questCompleted('j')): ?>
        <?= $this->Game->link('Try his algebra question', ['move' => 'algebra']) ?>
    <?php endif; ?>
    <?php if (! $this->Game->questCompleted('k')): ?>
        <?= $this->Game->link('Try his calculus question', ['move' => 'calculus']) ?>
    <?php endif; ?>
    <?= $this->Game->hallwayLink('Decline his offer and retreat into the hallway', 1) ?>
<?php elseif ($move == "calculus"): ?>
    <?php if ($this->request->data('calc_answer') !== null): ?>
        <?php if ($this->request->data('calc_answer') == 5): ?>
            <?php $this->Game->completeQuest('k'); ?>
            <p>
                <?php if ($gpa == 5): ?>
                    "Good job," Mr. Bartling says, "You get <strong>one pass</strong>."
                <?php elseif ($gpa < 5 && $gpa > 1): ?>
                    <?php $this->Game->addPasses(1); ?>
                    "Good job," Mr. Bartling says, "You get <strong>two passes</strong> for your impressive
                    calculus skills."
                <?php elseif ($gpa = 1): ?>
                    <?php $this->Game->addPasses(4); ?>
                    "Good job," Mr. Bartling says, "You get <strong>five passes</strong>. You have impressive
                    calculus skills for someone with your kind of GPA."
                <?php elseif ($gpa = 0): ?>
                    <?php $this->Game->addPasses(9); ?>
                    "Amazing!" Mr. Bartling says, "I'll give you <strong>ten passes</strong> for being able to
                    solve that problem with your kind of GPA."
                <?php endif; ?>
            </p>
            <?= $this->Game->hallwayLink() ?>
        <?php else: ?>
            "No, sorry," Mr. Bartling says. "You can come back later and try again."
            <?php $this->Game->spendTime(1); ?>
            <?= $this->Game->hallwayLink() ?>
        <?php endif; ?>
    <?php else: ?>
        <p>
            "Ah, you're brave."
        </p>
        <p style="font-size: 150%;">
            f "(x) = 12x<sup>2</sup> - 2
            <br />
            f(0) = 2
            <br />
            f '(0) = 3
            <br />
            <strong>find f(1)</strong>
            <br />
            <?= $this->Game->formStart('post') ?>
            <?= $this->Game->formInput('calc_answer') ?>
            <?= $this->Game->formSubmit('Answer') ?>
            <?= $this->Game->formEnd() ?>
        </p>
    <?php endif; ?>
<?php elseif ($move == "algebra"): ?>
    <?php if ($this->request->data('alg_answer') !== null): ?>
        <?php if ($alg_answer == 28): ?>
            <?php $this->Game->completeQuest('j'); ?>
            <p>
                <?php if ($gpa == 5): ?>
                    "Good job," Mr. Bartling says, "You get <strong>one pass</strong>."
                <?php elseif ($gpa < 5 && $gpa > 1): ?>
                    "Good job," Mr. Bartling says, "You get <strong>one pass</strong> for your impressive algebra
                    skills."
                <?php elseif ($gpa = 1): ?>
                    <?php $this->Game->addPasses(2); ?>
                    "Good job," Mr. Bartling says, "You get <strong>three passes</strong>. You have impressive
                    algebra skills for someone with your kind of GPA."
                <?php elseif ($gpa = 0): ?>
                    <?php $this->Game->addPasses(4); ?>
                    "Amazing!" Mr. Bartling says, "I'll give you <strong>five passes</strong> for being able to
                    solve that problem with your kind of GPA."
                <?php endif; ?>
            </p>
            <?= $this->Game->hallwayLink() ?>
        <?php else: ?>
            "No, sorry," Mr. Bartling says. "You can come back later and try again."
            <?php $this->Game->spendTime(1); ?>
            <?= $this->Game->hallwayLink() ?>
        <?php endif; ?>
    <?php else: ?>
        <p>
            "Alright, try this one on for size. <strong>Solve for X.</strong>"
        </p>
        <table>
            <tr>
                <td align=center valign=bottom>
                    <u> &nbsp; 3 &nbsp; </u>
                </td>
                <td rowspan=2 align=center valign=middle>
                    +
                </td>
                <td align=center valign=bottom>
                    <u> &nbsp; x &nbsp; </u>
                </td>
                <td rowspan=2 align=center valign=middle>
                    = 1
                </td>
            </tr>
            <tr>
                <td align=center valign=top>
                    x - 4
                </td>
                <td align=center valign=top>
                    x + 4
                </td>
             </tr>
        </table>
        <?= $this->Game->formStart('post') ?>
        <?= $this->Game->formInput('alg_answer') ?>
        <?= $this->Game->formSubmit('Answer') ?>
        <?= $this->Game->formEnd() ?>
    <?php endif; ?>
<?php endif; ?>

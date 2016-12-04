<?php
    $answers = [
        1 => '...they would taste terrible.',
        2 => '...oh what a great Christmas there will be.',
        3 => '...we would all have a wax tadpole to bite.',
        4 => '...we wouldn\'t have to take Cryptoxylshine.',
        5 => '...please let me go, Ms. Bly!'
    ];
?>

<?php if (! $move ): ?>
	<p>
        You enter Ms. Bly's room to find her looming above you in a giant stool, ornately decorated with gold and
        jewels. At her right side is a crossbow in which she has loaded a red Swingline stapler. At her left side
        is a cannon that has been loaded with a giant glasses case. She booms out, "Foolish mortal who calls
        <?= ($sex == "m") ? 'himself' : 'herself' ?> <?= $this->Game->getTitle() ?> <?= $name ?>!" the door behind
        you suddenly slams shut. She pauses, glaring down at you from underneath her crown. "Finish this sentence,"
        she commands.
    </p>
	<p>
        "If ifs and buts were fruits and nuts..."
    </p>
    <?php foreach ($answers as $answerVal => $label): ?>
        <?= $this->Game->link($label, ['move' => $answerVal]) ?>
    <?php endforeach; ?>
<?php elseif ($move): ?>
	<?php $this->Game->setBlyAnswer($move); ?>
    <p>
        <strong>"WRONG!" she bellows out.</strong>
    </p>
    <?php $answerAvailable = false; ?>
    <?php foreach ($answers as $answerVal => $label): ?>
        <?php if (! $this->Game->blyAnswerGiven($answerVal)): ?>
            <?= $this->Game->link($label, ['move' => $answerVal]) ?>
            <?php $answerAvailable = true; ?>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php if (! $answerAvailable): ?>
        <p>
            You whine that she has given you a trick question. Growing cross, Ms. Bly says, "Oh, what a lovely
            Christmas we'll <em>have</em>, of course." You tell her that that wasn't one of the choices and she
            abruptly interrupts you by pointing to her cannon and asking, <strong>"YOU WANT SOME OF THIS?!"</strong>
            The door behind you swings open.
        </p>
    <?php endif; ?>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php endif; ?>

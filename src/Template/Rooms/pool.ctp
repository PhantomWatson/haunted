<?php
    $answer = isset($_POST['answer']) ? $_POST['answer'] : null;
?>
<?php if ($this->Game->questCompleted("h")): ?>
    <?php $this->Game->spendTime(); ?>
    <p>
        The pool is empty and dark, the old man is left. On the diving board is a note from him that reads, "Gone
        Schemin'".
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif (stristr($answer, 'tongue')): ?>
    <?php $this->Game->completeQuest('h'); ?>
    <p>
        His jaw drops. "Wha?!" The old man glares at you for a moment from underneath his hood, then says, "You
        suck. That's the right answer." He paddles a little closer to you.
    </p>
    <p>
        <?php if ($gpa == "5"): ?>
            "But I would expect that from someone with a 4.0 GPA. You only get <em>one</em> pass." <strong>He hands
            you a single pass</strong> and angrily paddles his bright pink pony inner tube away.
        <?php elseif ($gpa < 5 && $gpa > 1): ?>
            <?php $this->Game->addPasses(1); ?>
            "Here's two passes. Now go away," he says. <strong>He throws two passes at your feet</strong> and angrily
            paddles his bright pink pony inner tube away.
        <?php elseif ($gpa <= 1): ?>
            <?php $this->Game->addPasses(3); ?>
            "I can't believe you got that riddle with such a pitiful GPA. Here's four passes." <strong>He tosses four
            passes at your feet</strong> and begins to paddles his bright pink pony inner tube in circles, ignoring
            you.
        <?php endif; ?>
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif (! $move): ?>
    <p>
        The pool is dark and empty, except for an old, bearded man in a cloak. He's floating in the middle of the
        pool in an inner tube in the shape of a bright pink pony.
        <?php if ($this->Game->questCompleted("8")): ?>
            You recognize him from the library and are sure to be wary of his shenanigans.
        <?php endif; ?>
    </p>
    <p>
        As you stand at the edge of the pool, he says to you:
        "Think of words that end in -GRY. Angry and hungry are but two of them. There are but three words in the
        common tongue. <strong>What is the third word?</strong> It is used by one each day. If thou has listened
        carefully, I have already told thee what it is."
    </p>
    <?= $this->Game->formStart('post', ['move' => 'first_guess']) ?>
    <?= $this->Game->formInput('answer', 'Your guess') ?>
    <?= $this->Game->formSubmit('Tell him your guess') ?>
    <?= $this->Game->formEnd() ?>
    <?= $this->Game->hallwayLink('Ignore the old man and run', 1) ?>
<?php elseif ($move == 'first_guess'): ?>
    <p>
        "Ha!" he laughs, "You'll never get this! But I'll give you one more chance just so I can watch you
        <em>fail</em> again."
    </p>
    <?= $this->Game->formStart('post', ['move' => 'second_guess']) ?>
    <?= $this->Game->formInput('answer', 'Your guess') ?>
    <?= $this->Game->formSubmit('Tell him your guess') ?>
    <?= $this->Game->formEnd() ?>
<?php elseif ($move == 'second_guess'): ?>
    <p>
        <?php if ($gpa == 5): ?>
            <?php $this->Game->spendTime(2); ?>
            Disgusted by your inability to solve his riddle
            despite your impressive GPA, the old man pulls you into the pool and quickly paddles away, <strong>leaving
            you to spend the next hour getting your clothes dry.</strong>
	    <?php elseif ($gpa < 5 && $gpa > 0): ?>
            <?php $this->Game->spendTime(); ?>
            Disgusted by your inability to solve his riddle, the old man angrily paddles his bright pink pony inner tube
            away, refusing to talk to you any further.
	    <?php elseif ($gpa == 0): ?>
            <?php $this->Game->spendTime(); ?>
            Disgusted by your inability to solve his riddle, the old man angrily paddles his bright pink pony inner tube
            away, muttering, "You've lost your head. Find a spare in the greenhouse," before refusing to talk to you any
            further.
        <?php endif; ?>
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

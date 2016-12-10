<?php if (! $move): ?>
    <p>
        Mrs. Madsen is in her room. She doesn't know what's going on with the school and she doesn't know how to get 
        out, but she knows that she has a new question for her classes that she's itching to have you try.
    </p>
    <p>
        <strong>Try out her question?</strong>
    </p>
    <?= $this->Game->link('Yes', ['move' => 'yes']) ?>
	<?= $this->Game->link('No', ['move' => 'no']) ?>
<?php elseif ($move == "yes"): ?>
    <p>
        She slowly reads from a sheet of paper, <strong>"Which of the following is not a fundamental component of 
        the writing process?"</strong>
    </p>
    <?= $this->Game->link('Researching', ['move' => '1']) ?>
    <?= $this->Game->link('Brainstorming', ['move' => '2']) ?>
    <?= $this->Game->link('Editing', ['move' => '3']) ?>
    <?= $this->Game->link('Revising', ['move' => '4']) ?>
<?php elseif ($move == "1"): ?>
	<p>
	    "Good answer!" she says, "You get some candy." You're disappointed. It's not even the candy that you like. 
	    You ask for two passes instead (one, then a second in case you lose the first). "Oh, where do you need passes 
	    to?"
    </p>
	<?= $this->Game->formStart('post', ['move' => 'pass']) ?>
    <?= $this->Game->formInput('destination', 'Enter a destination') ?>
    <?= $this->Game->formSubmit('Get passes') ?>
    <?= $this->Game->formEnd() ?>
<?php elseif ($move == "2" || $move == "3" || $move == "4"): ?>
	<p>
        "Wrong answer," she says with a frown, "But you get some candy anyway." You're disappointed. It's not even
        the candy that you like.
    </p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == "pass"): ?>
    <p>
        Mrs. Madsen takes out a pencil and writes you two passes. Once you leave her room, you erase
        "<?= $this->request->data('destination') ?>" and make them both general passes.
    </p>
    <?php $this->Game->addPasses(1); ?>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == "no"): ?>
    <p>
        Mrs. Madsen thanks you for stopping in. You stealthily take her phone before you leave.
    </p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php endif; ?>

<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php if (! $move): ?>
    <?php if ($this->Game->questCompleted("7")): ?>
        <?php $this->Game->clearRoom(); ?>
        <p>
            You see the floating apparition of Abraham Lincoln, no longer headless, breakdancing on stage.
        </p>
        <?= $this->Game->link('Investigate the student center', ['room' => 'studentcenter']) ?>
        <?= $this->Game->hallwayLink() ?>
    <?php else: ?>
        <p>
            You walk into the auditorium and are shocked to see the floating specter of a headless Abraham Lincoln,
            colored greenish brown and holding the seam of his coat. You ask him what he wants from you and he gurgles
            a warning through his gaping neck-hole, threateningly lunging toward you without moving his arms or legs.
        </p>
        <?= $this->Game->link('Tell him where he can find his head', ['move' => 'help_abe']) ?>
        <?= $this->Game->hallwayLink('Run away in justifiable terror', 1) ?>
    <?php endif; ?>
<?php elseif ($move == "help_abe"): ?>
    <p>
        You tell Abraham Lincoln that his head can be found...
    </p>
    <?= $this->Game->formStart('post', ['move' => 'tell_abe']) ?>
    <?= $this->Game->formInput('head_is', 'Enter a location') ?>
    <?= $this->Game->formSubmit('Tell him') ?>
    <?= $this->Game->formEnd() ?>
<?php elseif ($move == 'tell_abe'): ?>
    <?php
        $answer = $this->getRequest()->getData('head_is');
        $correct = stristr($answer ?? '', 'greenhouse') || stristr($answer ?? '', 'green house');
    ?>
    <?php if ($correct): ?>
        <?php $this->Game->completeQuest('7'); ?>
        <?php $this->Game->addPasses(4); ?>
        <p>
            He disappears, reappearing a moment later with his head reattached slightly off-center. His gaze fixed a
            couple feet to the left of you, <strong>he drops five passes for you to pick up</strong>. Though they're
            from the 1860s and signed by Mr. Rowe, you're sure that they're still good. Before the former president
            disappears for good, he bestowes upon you the name of <?= $this->Game->getTitle('7') ?> <?= $name ?>.
        </p>
        <?= $this->Game->link('Investigate the student center', ['room' => 'studentcenter']) ?>
        <?= $this->Game->hallwayLink() ?>
    <?php else: ?>
        <?php $this->Game->spendTime(); ?>
        <p>
            He disappears for a moment, reappearing still headless and very annoyed. He grunts at you while once again
            lunging threateningly and you think it best to leave.
        </p>
        <?= $this->Game->link('Investigate the student center', ['room' => 'studentcenter']) ?>
        <?= $this->Game->hallwayLink() ?>
    <?php endif; ?>
<?php endif; ?>

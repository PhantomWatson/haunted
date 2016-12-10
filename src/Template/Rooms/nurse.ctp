<?php if (! $move): ?>
    <p>
        You find Mrs. Amman in the waiting room of the nurse's office, with multiple casts and bandages all over her
        injured body. You ask her what happened to her, but you can't understand the muffled response that you hear
        coming from her heavily bandaged face. She hands you a sheet of paper with a problem on it.
    </p>
    <p>
        <strong>
            How many atoms of nitrogen are in one formula unit of Pb[Fe(CN)<sub>6</sub>]<sub>2</sub>?
        </strong>
    </p>
    <?= $this->Game->link('Six', ['move' => '6']) ?>
    <?= $this->Game->link('Twelve', ['move' => '12']) ?>
    <?= $this->Game->link('Two', ['move' => '2']) ?>
    <?= $this->Game->link('One', ['move' => '1']) ?>
    <?= $this->Game->link('Cannot determine with information given', ['move' => 'na']) ?>
<?php elseif ($move == "12"): ?>
    <?php $this->Game->addPasses(2); ?>
    <p>
        Mrs. Amman enthusiastically mumbles under her bandages and hands you <strong>two passes.</strong>
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif (in_array($move, ["6", "2", "1", "na"])): ?>
	<?php $this->Game->spendTime(); ?>
    <p>
        Mrs. Amman mumbles in a disappointed tone under her bandages and you assume that you didn't answer the question
        correctly.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

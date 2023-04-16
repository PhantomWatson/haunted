<?php if (! $move): ?>
    <p>
        The moment you step into the guidance office, you are disoriented by a whirlwind of flying papers. You're in the
        middle of a spinning tornado of records, passes, and forms! You can't stay a moment longer without being
        swallowed up by the vortex!
    </p>
    <?= $this->Game->link('Try to grab one of the passes on your way out', ['move' => 'grab_pass']) ?>
    <?= $this->Game->hallwayLink('Run out quickly', 1) ?>
<?php elseif ($move == 'grab_pass'): ?>
    <?php
        $originalName = $name;
        $scrambledName = $this->Game->scrambleVowels($name);
        $this->Game->changeName($scrambledName);
    ?>
	<p>
        You grope through the air to get one of those elusive tickets to unfettered hallway roaming and
        <strong>manage to grab one.</strong>
    </p>
    <p>
        <?php if ($scrambledName != $originalName): ?>
            But in your struggle to get back out, the tornado of paperwork changes your name into <?= $scrambledName ?>.
        <?php else: ?>
            Fortunately, you safely escape the danger, unaffected by the toxic concentration of bureaucracy.
        <?php endif; ?>
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

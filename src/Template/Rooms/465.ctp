<p>
	You walk into Mrs. Springman's room and immediately start falling through an endless sea of text. It looks like
    there's no bottom to this abyss as you fall past hundreds of banal, uninteresting characters, all seeking to
    devour your brain and all of your free time.
</p>
<?php if ($gpa != 0): ?>
    <?php $this->Game->changeGpa($gpa - 1); ?>
    <p>
        You feel your GPA fall an entire grade by merely being in this place.
    </p>
<?php endif; ?>
<p>
	You think that you'll be lost in this whirlpool of literary Hell forever when you suddenly get a brilliant idea.
    You cross your eyes and feel all of the text around you reverse. You can feel yourself floating back up out of the
    abyss of text and after a moment, you are ejected from it and thrown into the hallway, uninjured (now dyslexic
    slightly yet).
</p>
<?= $this->Game->hallwayLink(null, 1) ?>

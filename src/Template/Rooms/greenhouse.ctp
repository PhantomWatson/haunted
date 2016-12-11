<?php $this->Game->spendTime(); ?>
<p>
    You slide open the glass door to the greenhouse and pause, noticing a soft, munching sound. The plants in this
    room have taken on a menacing, predatory disposition, warped by whatever malevolent forces have subverted the rest
    of the school.
</p>
<?php if (! $this->Game->questCompleted('7')): ?>
    <p>
        Looking around, you notice the head of Abraham Lincoln on the ground, wedged between a fanged orchid and a
        cactus that seems to be inching toward you. You make a mental note that if anyone wonders where the former
        president's head is, to tell them that it's <strong>in the greenhouse</strong>.
    </p>
<?php endif; ?>
<p>
    A huge shadow moves over you and you turn around to see a giant, man-eating turtle lumbering slowly in your
    direction. You bound over carnivorous plants and sand traps to escape before the ravenous reptile catches you.
</p>
<?= $this->Game->hallwayLink() ?>

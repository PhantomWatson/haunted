<?php
    $this->Game->spendTime();
    $this->Game->clearRoom();
?>
<?php if ($this->Game->questCompleted('3')): ?>
    <?php if ($this->Game->questCompleted('2')): ?>
        <p>
            This room's television is displaying a looping video of various school announcements. A "Breaking News"
            announcement has recently been added that reads
            <strong>
                "School Saved by <?= $this->Game->getTitle() ?> <?= $name ?>!"
            </strong>
            Another announcement is urging students and faculty to remain calm while administrators try to find some
            way out of the barricaded school.
        </p>
        <p>
            Looks like the only thing left is to <strong>find some way to get out of this place</strong>.
        </p>
    <?php else: ?>
        <p>
            This room's television is displaying a looping video of various school announcements. One of them urges
            caution for any students on the first floor, which is infested with all manner of strange monsters that are
            coming from somewhere inside the school.
        </p>
        <p>
            Looks like you need to get to the bottom of <strong>the source of the monsters on the first floor</strong>.
        </p>
    <?php endif; ?>
<?php else: ?>
    <p>
        You see bits of purple fungus on the carpet. A television attached to the ceiling is on and displaying a
        strange spiral pattern while playing incoherent backwards-speech. Several students are gathered under this
        television, watching it silently with their mouths open and eyes wide. The ones in front are starting to take
        on a greenish hue in their skin and sunken eyes. It seems as if they're being turned into zombies. You
        quickly leave the room before you are turned into a zombie yourself.
    </p>
    <p>
        It seems like someone's using the television system for nefarious purposes,
        <strong>and it's up to you to find out who</strong>.
    </p>
<?php endif; ?>
<?= $this->Game->hallwayLink() ?>

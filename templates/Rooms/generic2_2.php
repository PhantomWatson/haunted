<?php
    $this->Game->spendTime();
    $this->Game->clearRoom();
?>
<?php if ($this->Game->questCompleted('2')): ?>
    <?php if ($this->Game->questCompleted('3')): ?>
        <p>
            The school debate team has wandered into this room and is helping set furniture back in place and clean up
            while debating how to get out of the school.
        </p>
        <p>
            "So all the doors are barricaded?"<br />
            "Yeah, and all the first-floor windows are boarded up too. Probably for plot convenience."<br />
            "Is there any way out through a sewer line or storm drain? We could Shawshank our way out."<br />
            "Is there a way onto the roof? Maybe a helicopter could rescue us."<br />
            "We could just break out a second-floor window, but they're, like... <em>really</em> thick. I bet if we
            could find a teacher who could bench at least 428 pounds, he could probably bust us out of here."
        </p>
        <p>
            They turn to stare at you, noticing that you had just been standing in the doorway and eavesdropping on
            them.
        </p>
        <p>
            "Hey, thanks for saving the school," a girl says, still overtly creeped out. "Now could you help us find a
            way out?"
        </p>
        <p>
            You shrug heroically.
        </p>
    <?php else: ?>
        <p>
            A thick purple fungus is crawling across the carpet and reaching furry, spore-laden tendrils up the walls.
            A projector screen is displaying a feed from the school television system, and a group of students
            are staring at it, transfixed by a hypnotic spiral pattern and monotonous, garbled speech. They look like
            becoming physically disfigured and growing increasingly agitated.
        </p>
        <p>
            You feel the hypnotic video drawing you in and a growing urge to munch on some brains. You realize you need
            to leave before you give in and join this growing horde of zombies.
        </p>
        <p>
            It seems like someone's using the television system for nefarious purposes,
            <strong>and it's up to you to find out who</strong>.
        </p>
    <?php endif; ?>
<?php else: ?>
    <p>
        <?php if (! $this->Game->questCompleted('3')): ?>
            You see bits of purple fungus on the carpet. You also see
        <?php else: ?>
            You see
        <?php endif; ?>
        a spot in the carpet a few feet in front of you moving as
        if there is something underneath it, trying to claw its way up from underneath. As you stand there, you witness
        claws breaking through the carpet and tearing a hole in it, allowing three scaly mole-like creatures to emerge from
        it and scatter across the room. You leave, wishing not to gain the attention of the monsters, but before you do, you
        peer into the hole in the carpet and see that they had torn a hole through the ceiling of the first floor and dug
        up. You are sure to close the door tightly as you leave.
    </p>
<?php endif; ?>
<?= $this->Game->hallwayLink() ?>

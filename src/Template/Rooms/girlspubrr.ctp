<?php $this->Game->spendTime(); ?>
<?php if ($sex == "f"): ?>
    <p>
        As you walk into the restroom the first thing you notice is a door at the back. You try to open it, but it's
        locked. You notice that it probably leads into the publications room and there is probably another, similar door
        in the nearby boys' restroom. Taking your attention away from the impassable door, you realize that all the
        tiles have changed to a disturbing green color. Unfortunately, the second thing you notice is what turned them
        that way. The massive pyre of <em>filth</em> makes you wonder whether or not any of your fellow classmates have
        died in there. Your worst fears are confirmed when you see a lone janitorial broom sticking out of the top of
        the pile. You reflect peacefully for a moment in remembrance of your fallen dirt removal engineer who died
        gallantly in the line of duty. You are about to go back out into the hallway, but thinking twice, you double
        back and check the mirror to see if your battle against evil has negatively affected your appearance. You see
        that your hair looks just the way it did when you got up this morning, but you also see that the filth behind
        you is forming into a giant, unsanitary monster. You scream as a dark, smelly giant stands up and roars. Before
        it has a chance to cause chaos in the school and probably leave some nasty stains, cleverly whip out a bottle of
        the most offensive perfume that you have out of your purse and spritz the dirty incarnation into oblivion.
    </p>
<?php elseif ($sex == "m"): ?>
    <p>
        You walk into the restroom and immediately hear the screams of a half-dozen demon girls who were previously
        doing their hair in the mirrors. They rush out into the hallway, calling you a creepy jerk. Once you are alone,
        you notice that there is a door in the back of the restroom that probably leads into the publications room. You
        attempt to open it, but find that it's locked. You leave, knowing that there is probably a similar door in the
        boys' restroom on the other side of the pub' room.
    </p>
<?php endif; ?>
<?= $this->Game->hallwayLink() ?>

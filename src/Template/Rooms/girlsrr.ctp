<?php $this->Game->spendTime(); ?>
<?php if ($sex == "f"): ?>
    <p>
        As you walk into the restroom the first thing you notice that all the tiles have changed to a disturbing green
        color. Unfortunately, the second thing you notice is what turned them that way. The massive pyre of
        <em>filth</em> makes you wonder whether or not any of your fellow classmates have died in there. Your worst fears
        are confirmed when you see a lone janitorial broom sticking out of the top of the pile. You reflect peacefully
        for a moment in remembrance of your fallen dirt removal engineer who died gallantly in the line of duty. You
        are about to go back out into the hallway, but thinking twice, you double back and check the mirror to see if
        your battle against evil has negatively affected your appearance. You see that your hair looks just the way it
        did when you got up this morning, but you also see that the filth behind you is forming into a giant, unsanitary
        monster. You scream as a dark, smelly giant stands up and roars. Before it has a chance to cause chaos in the
        school and probably leave some nasty stains, you cleverly whip out a bottle of the most offensive perfume that
        you have out of your purse and spritz the dirty incarnation into oblivion.
    </p>
<?php elseif ($sex == "m"): ?>
    <p>
        You walk into the restroom and immediately hear the screams of a half-dozen demon girls who were previously
        doing their hair in the mirrors. They rush out into the hallway, calling you a creepy jerk. You spend a moment
        wondering why the girls' restrooms get doors on their stalls, then quietly creep back into the hallway, making
        sure not to run into those girls again.
    </p>
<?php endif; ?>
<?= $this->Game->hallwayLink() ?>

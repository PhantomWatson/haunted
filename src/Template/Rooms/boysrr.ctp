<?php if ($sex == "m"): ?>
    <p>
        As you walk into the restroom the first thing you notice is that all the tiles have changed to a disturbing
        green color. Unfortunately, the second thing you notice is what turned them that way. The massive pyre of
        <i>filth</i> makes you wonder whether or not any of your fellow classmates have died in there. Your worst
        fears are confirmed when you see a lone janitorial broom sticking out of the top of the pile. You reflect
        peacefully for a moment in remembrance of your fallen dirt removal engineer who died gallantly in the line
        of duty. You are about to go back out into the hallway, but thinking twice, you double back and carve a
        warning in the stall to keep this from happening again. Thinking once more, <strong>you carve
        "<?= $name ?> was here"</strong> into the stall.
    </p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($sex == "f"): ?>
    <p>
        You walk into the restroom and see a group of ogre football players stop talking and look at you. For an awkward
        moment, you are just staring back at them. All of a sudden, one of the urinals sprouts arms and legs, detaches
        from the wall, and catches the football players by surprise by swallowing them up whole! You try to run out into
        the hallway, but it circles around you and blocks your exit. The urinal monster bellows a monstrous laugh and
        spits pink urinal cakes from its gaping maw at you. Knowing that if you don't act fast, you'll be eaten by it
        too, you pick up a trashcan and with your amazing strength, hurl it at the monster's shiny, metal head. You not
        only knock the creature backwards, but you also trip its handle. It starts to flush itself and all of the
        football players are thrown out of its porcelain gullet. Once they all rise to their feet and regaining their
        composure, they beat the urinal monster into many, many small pieces. Proud of their fine work, they leave the
        restroom congratulating each other, without thanking you at all. Jerks.
    </p>
	<?= $this->Game->hallwayLink(null, 1) ?>
<?php endif; ?>

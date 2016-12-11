<?php
    $completed = $this->Game->questCompleted('2') && $this->Game->questCompleted('3');
    $yohlerInterruption =
        '<p>On your way out, Mrs. Yohler asks if you would like to try one of her extra credit geography ' .
        'questions for a pass.</p>';
    $yohlerInterruption .= $this->Game->link('Try her question', ['move' => 'quiz']);
    $yohlerInterruption .= $this->Game->hallwayLink('Decline and go back out into the hallway', 1);
?>
	 
<?php if (! $move && ! $completed): ?>
    <p>
        <?php if ($this->Game->questCompleted('i')): ?>
            As you enter his room, Mr. Murray is eating pizza. He offers you a slice and a seat. After a few minutes of
            chatting casually, you bring up the subject of the school having been taken over by monsters and there being
            no way for people to get out and save themselves.
        <?php else: ?>
            As you enter his room, Mr. Murray is on the phone and Mrs. Yohler is nearby, grading papers. After getting
            off of the phone, he offers you a seat. After a few minutes of chatting casually, you bring up the subject
            of the school having been taken over by monsters and there being no way for people to get out and save
            themselves.
        <?php endif; ?>
    </p>
    <p>
        "Oh, there's a way out," Mr. Murray says.
    </p>
    <p>
        "What?" you ask. "Where is it?"
    </p>
    <p>
        "I'll tell you when the right time comes. Come back later and I might help you get out too."
    </p>
    <p>
        "Why haven't you left already?" you ask him.
    </p>
    <p>
        "What, <em>now?</em> The building is <em>crawling</em> with disgusting, evil little creatures.
        And there are monsters running around, too.

        <?php if (! $this->Game->questCompleted('3') && ! $this->Game->questCompleted('2')): ?>
            <strong>Once the first floor stops spawning new monsters and students stop getting turned into zombies up
            here, I'll leave.</strong>"
        <?php elseif ($this->Game->questCompleted('2') && ! $this->Game->questCompleted('3')): ?>
            <strong>Once students stop getting turned into zombies up here, I'll leave.</strong>"
        <?php elseif ($this->Game->questCompleted('3') && ! $this->Game->questCompleted('2')): ?>
            <strong>Once the first floor stops spawning new monsters, I'll leave.</strong>"
        <?php endif; ?>
    </p>
    <p>
        "Do you know what rooms this stuff is happening in?" you ask him. "I want to put an end to this."
    </p>
    <p>
        "Now did you come here to interrogate me or did you come here to
        <?php if ($this->Game->questCompleted('i')): ?>
            hang out and eat pizza?"
        <?php else: ?>
            hang out?"
        <?php endif; ?>
    </p>

    <?= $this->Game->link('Stay an extra period with Mr. Murray', ['move' => 'stay']) ?>

	<?php if ($this->Game->questCompleted('n')): ?>
        <?= $this->Game->hallwayLink('Excuse yourself and leave', 1) ?>
	<?php else: ?>
        <?= $this->Game->link('Excuse yourself and leave', ['move' => 'leave']) ?>
	<?php endif; ?>
<?php elseif ($move == 'leave'): ?>
    <?= $yohlerInterruption ?>
<?php elseif ($move == 'stay'): ?>
	<p>
        Mr. Murray explains, "I know for a fact that students are being turned into zombies through the televisions
        in the upstairs rooms," he points to his television, a book smashed through it, "and my first guess would be
        that someone's in A/V doing that. As for the monsters downstairs, I'd check out either home ec' or the
        chemistry department. I think it's great that you're trying to stop this and if you can go through with it
        and save the school, I'll tell you how to get out."
    </p>
    <p>
        You thank him for his
        <?php if ($this->Game->questCompleted('i')): ?>
            help and pizza
        <?php else: ?>
            help
        <?php endif; ?>
        and tell him that you really must leave and go on to other rooms.
    </p>

	<?php if ($this->Game->questCompleted('n')): ?>
        <?= $this->Game->hallwayLink(null, 1) ?>
	<?php else: ?>
        <?= $yohlerInterruption ?>
    <?php endif; ?>
<?php elseif ($move == 'quiz'): ?>
    <?php $this->Game->spendTime(); ?>
    <p>
        <strong>
            "Which city in Russia is known as the 'Venice of the North'?"
        </strong>
    </p>
    <?= $this->Game->link('Moscow', ['move' => 'answer_1']) ?>
    <?= $this->Game->link('Omsk', ['move' => 'answer_2']) ?>
    <?= $this->Game->link('St. Petersburg', ['move' => 'answer_3']) ?>
    <?= $this->Game->link('Murmansk', ['move' => 'answer_4']) ?>
<?php elseif ($move == 'answer_3'): ?>
    <?php $this->Game->addPasses(1); ?>
    <?php $this->Game->completeQuest('n'); ?>
    <p>
        "Good answer! Here are <strong>two passes</strong>." Mrs. Yohler says.
        "If you have the time, be sure to check out the <strong>greenhouse</strong> today. Oh, and you might like to
        know that the answer to Mr. Bartling's calculus question of the day is <strong>5</strong>."
    </p>
    <p>
        You thank her for her help and leave the room.
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == 'answer_2'): ?>
	<p>
        "What?!" Mrs. Yohler pulls a paintball gun out of her back pocket and takes aim. As you scramble out the door,
        she shoots you twice in the back with bright pink paintballs and criticizes you for not studying enough.
    </p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == 'answer_1'): ?>
	<p>
        "Good, um... answer," Mrs. Yohler says, looking off to the side and smirking. "Hey, if you have time today,
        you should talk to Master Sung in the library. Be sure to wait while he gets his teaching materials once you
        get him to give you one of his lessons. Oh, and you might like to know that the answer to Mr. Bartling's
        calculus question of the day is -17."
    </p>
    <p>
        You thank her for her help and leave the room.
    </p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($move == 'answer_4'): ?>
	<p>
        Horrified at your lack of geographical knowledge, she grabs a cup that she had just finished drinking out of
        and starts throwing the ice chips inside at you. You start edging closer to the door as you dodge her attacks,
        but retreat much faster once she lifts a chair over her head menacingly and starts growling at you.
    </p>
    <?= $this->Game->hallwayLink(null, 1) ?>
<?php elseif ($completed): ?>
    <p>
        You enter Mr. Murray's room to find him staring out his window. He looks up at you.
        "So, you've saved the school, more or less." You nod. "Well, then your job is done here, so I'll show you
        the way out. Seinfeld is on in ten minutes, so I'm going too." <strong>You're getting out!</strong>
    </p>
    <p>
        Mr. Murray walks to the back of the room and grabs onto his giant
        150lb metal desk. He lifts it up with one hand and tells you to stand back. You duck into the corner of
        the room and he hurls the desk through his window, sending shards of glass spraying through the room. He
        motions for you to follow him as he jumps out of the window and lands in a nearby pine tree. You walk up
        to the edge of the window and see him climbing down to the grass below. Gathering your courage, you step
        back to get a running start and sail out of the building and into the tree.
    </p>
    <p>
        Some cuts, some bruises, and a broken rib later, you find yourself safely back home. The next day, the front
        page of the newspaper reads...

    </p>

    <div id="win">
        Haunted Muncie Central High School Saved By <?= $this->Game->getTitle() ?> <?= $name ?>!
    </div>

    <?= $this->Game->link(
        'Play again',
        [
            'controller' => 'Pages',
            'action' => 'restart'
        ]
    ) ?>

    <p style="font-size: 80%; margin-top: 200px;">
        Later that night, it finally dawns on you that it wasn't really "haunted" since there was only...
        like, maybe <em>one</em> ghost. And then a million random other kinds of monsters. But whatever.
    </p>
<?php endif; ?>

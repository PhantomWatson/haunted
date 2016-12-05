<?php if ($sex == "m"): ?>
    <p>
        You hear a girl scream. Two winged demons are circling around her head, throwing books and papers at her. She
        sees you enter and pleads for your help. Pausing a moment to think, you grab a nearby trashcan and watch the way
        that the two monsters are flying. At just the right second, you swing the trashcan in their direction, netting
        both of them. You slam the trashcan onto the floor upside-down, trapping both inside. They angrily claw at the
        inside, hissing at you. The girl thanks you, <strong>giving you a pass that she found earlier for your
        troubles</strong> and hurries out into the hallway. Before you leave the classroom, you pile a stack of books
        on top of the trashcan and leave a note that says "Lift trashcan at own risk."
    </p>
<?php elseif ($sex =="f"): ?>
    <p>
        You hear a guy shouting. He's a student and two apelike monsters have him pinned against the ground with a pile
        of chairs, tables, and bookcases and they're grabbing more stuff from around the room to pile atop his hapless
        body. You yell for them to stop, but they don't listen to you. Pausing for a moment to think, you grab a nearby
        fire extinguisher and sneak across the room so that you're behind both of them. Right when they stop walking to
        toss a chair on top of the mass of furniture, you fire it right into the back of each of their heads. Startled,
        they shriek and stumble out into the hallway. You pull some tables off of the boy and help him get up. He thanks
        you for saving him from being crushed and <strong>gives you a pass that he found earlier</strong>, but
        apologizes that he has to run off and get to class since the punishment for being tardy is much worse than
        anything that those monsters could have done.
    </p>
<?php endif; ?>
<?= $this->Game->hallwayLink() ?>

<?php if (! $move): ?>
    <p>
        You walk into the Latin room of Ron Meade to find a bizarre forest directly in the center of the room. All of
        a sudden you hear mixed germanic war cries with interspersed shouts of "Strength and Honor!!" coming from
        behind you. Leading the Roman army is Mr. Meade himself. With a ragtag group of Latin students, he plans to
        conquer the Germanic demon army.
    </p>
    <?= $this->Game->link('Stay and fight for the glory of Rome', ['move' => 'fight']) ?>
    <?= $this->Game->link('Flee', ['move' => 'flee']) ?>
<?php elseif ($move == 'fight'): ?>
    <?php
        $this->Game->completeQuest('5');
        $this->Game->clearRoom();
    ?>
    <p>
        You ride on horseback at the side of Mr. Meade. Armed with nothing but a keychain and a Bic Pen, you and the
        Latin students manage to subdue the zombies!
        <strong>
            Mr. Meade rewards your gallant effort by proclaiming you <?= ($sex == 'f') ? 'Empress' : 'Emperor' ?>
            of the Second Floor, and you get his last, bloodstained, pass.
        </strong>
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php elseif ($move == 'flee'): ?>
    <?php $this->Game->spendTime(2); ?>
    <p>
        Your cowardice is rewarded by having a group of angry zombies playing keep-away with your shoes
        <strong>for an entire period.</strong> You slacker! Back to the hallway with you!
    </p>
    <?= $this->Game->hallwayLink() ?>
<?php endif; ?>

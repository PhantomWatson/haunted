<?php $this->Game->spendTime(); ?>
<p>
    As you step into the classroom, it seems empty. You quickly realize the opposite when a trashcan is shoved over your
    head and you are grabbed by several students. You can't see who they are, but you can look down and see their
    shuffling feet as well as hear their moaning voices. They grab you and pin you against a wall. As you struggle to
    get free, you hear them talking.
</p>
<p>
    "Do we get to eat <?= ($sex == "m") ? 'his' : 'her' ?> brains now?"
    <br />
    "No, we have to turn <?= ($sex == "m") ? 'him' : 'her' ?> into a slave of Master Stevo like us."
    <br />
    "Why do we have to do that?"
    <br />
    "Because that's what we do!"
    <br />
    "Why can't we eat <?= ($sex == "m") ? 'his' : 'her' ?> brains now?"
    <br />
    "Wait, what if <?= ($sex == "m") ? 'he' : 'she' ?> <em>is</em> Master Stevo?"
    <br />
    "What are you <em>talking</em> about? Of course <?= ($sex == "m") ? 'he' : 'she' ?> isn't!"
</p>
<p>
    The zombie students continue their argument and don't notice that you have escaped and quietly slipped out into the
    hallway.
</p>
<?= $this->Game->hallwayLink() ?>

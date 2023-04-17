<?php if (! $move ): ?>
    <p>
        You stumble through the not-so-secret panel and emerge in the publications room. The room is dark, lit only by a
        large fire over which a cauldron is boiling and several rows of Macintosh computers, built for the physical and
        mental specifications of five-year-olds. Next to the cauldron is a spice rack, a recipe card labeled "To Serve
        Adolescents", and two pikes with skulls set atop them. You see through a windowed slot in the massive door in
        the front of the room the rickety, wooden bridge that extends across the moat surrounding the room. You quietly
        creep across the room, so as to not alert the troll guarding the bridge, nor The Great and Powerful Nelson, who
        is dozing off behind a curtained booth full of electronic equipment.
    </p>
    <?= $this->Game->link('Go into the darkroom', ['move' => 'darkroom']) ?>
	<?php if (! $this->Game->questCompleted("4") ): ?>
        <?= $this->Game->link('Go into Nelson\'s office', ['move' => 'office']) ?>
	<?php endif; ?>
    <?= $this->Game->hallwayLink('Go back through the restroom and into the hallway', 1) ?>
<?php elseif ($move == "darkroom"): ?>
    <p>
        You go through the circular door into the darkroom and flick on a light. The room is full of jugs of chemicals,
        trays with overdeveloped prints in them, and strips of negatives hanging out to dry. Not very surprising, eh?
    </p>
    <?= $this->Game->link('Open up some of the chemical jugs', ['move' => 'jugs']) ?>
	<?php if (! $this->Game->questCompleted("4") ): ?>
        <?= $this->Game->link('Leave, go into Nelson\'s office', ['move' => 'office']) ?>
    <?php endif; ?>
    <?= $this->Game->hallwayLink('Leave, go back through the restroom and into the hallway', 1) ?>
<?php elseif ($move == "jugs"): ?>
    <p>
        Oh, <em>brilliant</em>. The room fills with the thick smell of developer, stop bath, cryptoxylshine, and fixer.
    </p>
    <p>
        <?php if ($gpa == "0"): ?>
            You feel a bit dizzy, but you are fortunately unaffected.
        <?php else: ?>
            <?php $this->Game->changeGpa(0); ?>
            You feel dizzy as you breathe in this noxious concoction and <strong>feel your GPA fall to 0.0.</strong>
        <?php endif; ?>
    </p>
	<?php if (! $this->Game->questCompleted("4")): ?>
        <?= $this->Game->link('Leave, go into Nelson\'s office', ['move' => 'office']) ?>
    <?php endif; ?>
    <?= $this->Game->hallwayLink('Leave, go back through the restroom and into the hallway', 1) ?>
<?php elseif ($move == "office"): ?>
    <p>
        The office of The Great and Powerful Nelson is spotless and orderly. In fact, there's nothing in it. Confused,
        you try to walk into it to find that you haven't actually opened the door yet. When you turn the knob and open
        the door into the office, you see a staggering depository of papers, old yearbooks, and office supplies reaching
        to the ceiling. It would take you all of this period and the next to find <em>anything</em> in this room!
    </p>
    <?= $this->Game->link('Spend an extra period looking through her papers anyway', ['move' => 'search']) ?>
    <?= $this->Game->link('Leave and check out the darkroom', ['move' => 'darkroom']) ?>
    <?= $this->Game->hallwayLink('Leave, go back through the restroom and into the hallway', 1) ?>
<?php elseif ($move == "search"): ?>
	<?php
        $found = rand(2, 12);
        $this->Game->addPasses($found);
        $this->Game->completeQuest('4');
	?>
    <p>
        Your gamble has paid off. You find <?= $found ?> passes in the mess.
        <?php if ($found == 12): ?>
            <em><strong>BOOYAH!</strong></em>
        <?php endif; ?>
    </p>
    <?= $this->Game->link('Leave and check out the darkroom', ['move' => 'darkroom']) ?>
    <?= $this->Game->hallwayLink('Leave, go back through the restroom and into the hallway') ?>
<?php endif; ?>

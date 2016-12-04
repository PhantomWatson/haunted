<p>
    Mr. Reason isn't in his office. A piece of parchment is stuck to his door with a dagger. The note reads:
</p>
<p>
    <em>
        Greetings, young traveler. I am currently off battling a myriad of digital monsters that have taken up
        residence in our sacred school's network, drawn to our Microsoft IIS as if it was a beacon for them. They
        seem to have been spawned by the many savescummed Nethack characters that Stevo the Magnificentitious has been
        playing on the network. if ( I am successful,) { I will return safely with their &lt;head&gt;s as trophies.} ELSEif
        ( not,) { then the whole school is screwed without me.}
        <br />
        Regards,
        <br/>
        Tech Warrior Reason
    </em>
</p>
<?= $this->Game->link('Go into the secretary\'s office', ['room' => 'room435']) ?>
<?= $this->Game->link('Go into the equipment/copying room', ['room' => 'room431']) ?>
<?php if (! $this->Game->questCompleted("3")): ?>
    <?= $this->Game->link('Go into A/V control room', ['room' => 'room432']) ?>
<?php endif; ?>
<?= $this->Game->hallwayLink(null, 1) ?>

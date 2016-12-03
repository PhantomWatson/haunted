<p>
    From the booth, you can look down into the television studio and see a giant slug. Two students, male and female,
    are at the controls and filming the slug's activity, what little of it is evident.
</p>

<?php if ($gpa == "5"): ?>
	<p>"What are you two doing?" you ask them.</p>
    <p>"We're messing with this studio," the girl replies.</p>
    <p>"Why?"</p>
    <p>"Why are you asking us all of these questions, nerd?" the boy snaps.</p>
    <p>
        "Shouldn't you be getting back to class? <em>NERD CLASS?</em>"
        the girl shouts while flicking you on the nose.
    </p>
    <p>
        The two students immediately beat you up and toss you into a locker.
        <strong>You lose a period getting back out.</strong>
    </p>
    <?= $this->Game->link('Go through the back office', ['room' => 'room434']) ?>
    <?= $this->Game->link('Go into the editing room', ['room' => 'room430']) ?>
<?php elseif ($gpa < "5" && $gpa > "0"): ?>
    <p>"What are you two doing?" you ask them.</p>
    <p>"We're messing with this studio," the girl replies.</p>
    <p>"What is that thing?" you inquire, pointing to the slug monster.</p>
    <p>
        "We found it in one of the restrooms. The Discovery channel is going to pay us a ton of money
        for footage of it," the boy explains.
    </p>
    <p>"Cool."</p>
    <p>Having exhausted all present subjects of conversation, you wander away.</p>
    <?= $this->Game->link('Go through the back office', ['room' => 'room434']) ?>
    <?= $this->Game->link('Go into the editing room', ['room' => 'room430']) ?>
<?php elseif ($gpa == "0"): ?>
	<p>"What's that?"</p>
    <p>"That's a giant slug. What does it <em>look</em> like?"</p>
    <p>"Why are you filming it?"</p>
    <p>They both shrug.</p>
    <p>An awkward silence fills the booth.</p>
    <p>"I just ate a handful of honeybees," you blurt out.</p>
    <p>
        The other two students glance at each other, then quickly walk out of the booth, leaving you alone.
        After admiring the shiny things for a moment or two, you find your way back out into the hallway.
    </p>
    <?= $this->Game->link('Go through the back office', ['room' => 'room434']) ?>
    <?= $this->Game->link('Go into the editing room', ['room' => 'room430']) ?>
<?php endif; ?>

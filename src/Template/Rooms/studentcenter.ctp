<p>
    In the Student Center, you see that the skylights are broken open and various winged monsters are flying and
    crawling up onto the roof. All of Muncie will be invaded by these creatures if you don't stop them at their source!
    <strong>Find out where they are being created.</strong>
</p>

<?php if (! $this->Game->questCompleted("7")): ?>
    <p>
        Oh and by the way, it seems as if a headless Abraham Lincoln is lurking about the auditorium.
    </p>
    <?= $this->Game->link('Investigate the auditorium', ['room' => 'auditorium']) ?>
<?php endif; ?>
<?php if (! $this->Game->questCompleted("i")): ?>
    <?= $this->Game->link('Investigate the phone room', ['room' => 'phoneroom']) ?>
<?php endif; ?>
<?php if (! $this->Game->questCompleted("g")): ?>
    <?= $this->Game->link('Investigate the vending machine room', ['room' => 'room318b']) ?>
<?php endif; ?>
<?= $this->Game->link('Investigate the student council room', ['room' => 'room318a']) ?>
<?= $this->Game->hallwayLink(null, 1) ?>

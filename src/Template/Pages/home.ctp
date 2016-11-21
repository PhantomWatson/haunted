<p>
    You are trapped in a haunted Muncie Central High School. The doors and windows are all sealed shut and unbreakable
    and the teachers and classrooms have all undergone monsterous changes. You must save the school and find a way out
    of this building by searching through rooms before the 13<sup>th</sup> period is up.
</p>

<ul>
    <li>Search through over 120 rooms to find out what's going on and save the school</li>
    <li>Hover your cursor over rooms to see what teachers may inhabit them</li>
    <li>Use the stairs to go between floors. (duh)</li>
    <li>The red bar in the upper-left tracks how much time you have left.</li>
    <li>Passes from teachers increase your time.</li>
    <li>Goofing off, getting trapped in places, getting injured, and getting sent to detention waste your time.</li>
    <li>People will treat you differently based on what your GPA is.</li>
    <li>Complete all of the numerous quests around the school and defeat all of the supervillains</li>
    <li>Become <strong>GRANDMASTER</strong>!</li>
    <li>
        <?= $this->Html->link(
            'Read the FAQ',
            ['controller' => 'Pages', 'action' => 'faq']
        ) ?>
        for more info.
    </li>
</ul>

<?= $this->Form->create($player) ?>

<?= $this->Form->input('name', [
    'required' => true
]) ?>

<?= $this->Form->input('sex', [
    'empty' => true,
    'options' => [
        'm' => 'Male',
        'f' => 'Female'
    ],
    'required' => true
]) ?>

<?= $this->Form->input('gpa', [
    'empty' => true,
    'options' => [
        5 => '4.0',
        4 => '3.9 - 3.0',
        3 => '2.9 - 2.0',
        2 => '1.9 - 1.0',
        1 => '0.9 - 0.1',
        0 => '0.0'
    ],
    'required' => true
]) ?>

<?= $this->Form->button(
    'Begin',
    ['class' => 'btn btn-primary']
) ?>

<?= $this->Form->end() ?>

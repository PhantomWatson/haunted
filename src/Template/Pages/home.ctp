<p>
    You are trapped in a haunted Muncie Central High School. The doors and windows are all sealed shut and unbreakable
    and the teachers and classrooms have all undergone monsterous changes. You must save the school and find a way out
    of this building by searching through rooms before the 13<sup>th</sup> period is up.
</p>

<ul>
    <li>Search through over 120 rooms to find out what's going on and save the school</li>
    <li>Hover your cursor over rooms to see what teachers may inhabit them</li>
    <li>Use the stairs to go between floors. (duh)</li>
    <li>The bar in the header tracks how much time you have left.</li>
    <li>Passes from teachers increase your time.</li>
    <li>Goofing off, getting trapped in places, getting injured, and getting sent to detention waste your time.</li>
    <li>People will treat you differently based on what your GPA is.</li>
    <li>Complete all of the numerous quests around the school and defeat all of the supervillains</li>
    <li>
        <?= $this->Html->link(
            'Read the FAQ',
            ['controller' => 'Pages', 'action' => 'faq']
        ) ?>
        for more info.
    </li>
</ul>

<p>
    This game was originally developed in 2002 for the students of MCHS to play. Because I still dig the concept and
    occasionally hear people saying that it's fun to play, I dusted it off and overhauled it in 2016. I haven't changed
    any of the original content (or updated any of the many outdated references), but I gave the interface a polish.
    I hope you like it!
    <span style="display: block; text-align: right;">
        - <a href="mailto:graham@phantomwatson.com">Graham "Phantom" Watson</a>
    </span>
</p>

<hr />

<?php if ($period1): ?>
    <section>
        <h2>
            Resume Game
        </h2>
        <p>
            It looks like you have a game already in progress.
        </p>
        <?= $this->Html->link(
            'Keep Playing',
            [
                'controller' => 'Floors',
                'action' => 'first'
            ],
            ['class' => 'btn btn-lg btn-default']
        ) ?>
    </section>
    <hr />
<?php endif; ?>

<section class="begin">
    <h2>
        Start a New Game
    </h2>
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
        'label' => 'GPA',
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
        ['class' => 'btn btn-default btn-lg']
    ) ?>

    <?= $this->Form->end() ?>
</section>

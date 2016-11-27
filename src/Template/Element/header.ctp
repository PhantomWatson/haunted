<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <?php if ($period1): ?>
            <?= $playerTitle.$name ?>
            <br />
            GPA: <?= $gpaDisplayed ?>
            <br />
            <?php if ($period2 && ($period1 / $period2) < 1): ?>
                Time left
                <br />
                <?= round($timeRemaining['percent'], 0) ?>% <?= $timeRemaining['color'] ?>
            <?php endif; ?>
        <?php else: ?>
            <div class="navbar-brand">
                Escape from Haunted Muncie Central High School
            </div>
        <?php endif; ?>
    </div>
</nav>

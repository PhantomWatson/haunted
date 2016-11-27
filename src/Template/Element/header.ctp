<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <?php if ($period1): ?>
            <?= $title.$name ?>
            <br />
            GPA: <?= $gpaDisplayed ?>
            <br />
            <?php if ($period2 && ($period1 / $period2) < 1): ?>
                Time left
                <br />
                <?= round($percent, 0) ?>% <?= $timeRemainingColor ?>
            <?php endif; ?>
        <?php else: ?>
            <div class="navbar-brand">
                Escape from Haunted Muncie Central High School
            </div>
        <?php endif; ?>
    </div>
</nav>

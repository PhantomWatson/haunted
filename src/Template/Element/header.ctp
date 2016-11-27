Phantom Presents...
<br />
Escape from Haunted Muncie Central]
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
<?php endif; ?>

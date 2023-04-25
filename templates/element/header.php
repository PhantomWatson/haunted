<?php
/**
 * @var array $timeRemaining
 * @var int $period1
 * @var string $playerTitle
 * @var string $name
 * @var string $gpaDisplayed
 */
if ($timeRemaining['percent'] < 50) {
    $progressBarClass = 'progress-bar-success';
} elseif ($timeRemaining['percent'] < 75) {
    $progressBarClass = 'progress-bar-warning';
} else {
    $progressBarClass = 'progress-bar-danger';
}
?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <?php if ($period1): ?>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerbar" aria-expanded="false">
                    <span class="sr-only">Toggle header</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="headerbar">
                <ul class="nav navbar-nav">
                    <li>
                        <span class="navbar-text">
                            <strong>
                                <?= $playerTitle ?>
                                <?= $name ?>
                            </strong>
                        </span>
                    </li>
                    <li>
                        <span class="navbar-text">
                            GPA:
                            <span class="badge">
                                <?= $gpaDisplayed ?>
                            </span>
                        </span>
                    </li>
                    <li class="time navbar-text">
                        Time spent:
                        <div class="progress">
                            <div class="progress-bar <?= $progressBarClass ?>"
                                  role="progressbar"
                                  aria-valuenow="<?= round($timeRemaining['percent']) ?>"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                  style="width: <?= round($timeRemaining['percent']) ?>%;">
                                <?= round($timeRemaining['percent']) ?>%
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        <?php else: ?>
            <div class="navbar-brand">
                Escape from Haunted MCHS
            </div>
        <?php endif; ?>
    </div>
</nav>

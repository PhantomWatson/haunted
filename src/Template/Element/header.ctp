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
                            <?= $playerTitle.$name ?>
                        </span>
                    </li>
                    <li>
                        <span class="navbar-text">
                            GPA: <?= $gpaDisplayed ?>
                        </span>
                    </li>
                    <li>
                        <span class="navbar-text">
                            Time left:
                            <?= round($timeRemaining['percent'], 0) ?>% <?= $timeRemaining['color'] ?>
                        </span>
                    </li>
                </ul>
            </div>
        <?php else: ?>
            <div class="navbar-brand">
                Escape from Haunted Muncie Central High School
            </div>
        <?php endif; ?>
    </div>
</nav>

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
                            <?= $playerTitle ?>
                            <?= $name ?>
                        </span>
                    </li>
                    <li>
                        <span class="navbar-text">
                            GPA: <?= $gpaDisplayed ?>
                        </span>
                    </li>
                    <li class="time">
                        <span class="navbar-text">
                            Time:
                        </span>
                        <div class="progress" style="width: 200px;">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                aria-valuenow="<?= round($timeRemaining['percent']) ?>"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="
                                    background-color: <?= $timeRemaining['color'] ?>;
                                    min-width: 40px;
                                    width: <?= round($timeRemaining['percent']) ?>%;
                                "
                            >
                                <?= round($timeRemaining['percent']) ?>%
                            </div>
                        </div>
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

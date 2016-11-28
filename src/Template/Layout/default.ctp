<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Escape from Haunted Muncie Central High School
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('style.css') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <?= $this->Html->script('script.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <?= $this->element('header') ?>
    </header>
    <?= $this->Flash->render() ?>
    <?php
        $class = 'container clearfix';
        if ($this->request->controller == 'Rooms') {
            $class .= ' room';
        }
    ?>
    <div class="<?= $class ?>">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <?= $this->element('footer') ?>
    </footer>
</body>
</html>

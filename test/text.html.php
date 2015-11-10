<!-- app/Resources/views/test/text.html.php -->
<?php $view->extend('base.html.php') ?>
 
<?php $view['slots']->start('body') ?>
    <h1>Рома сьогодні: <?php echo $view->escape($word) ?>
<?php $view['slots']->stop() ?>
<h2 class="game-over">
    Game Over
</h2>
<p>
    Oh no, <strong>you ran out of time</strong>. Muncie Central High School was <em>not</em> saved from the various
    horrors infesting it, and the resulting death and destruction is blamed squarely on you by the local newsmedia.
</p>
<?= $this->Game->link(
    'Try Again',
    [
        'controller' => 'Pages',
        'action' => 'restart'
    ]
) ?>

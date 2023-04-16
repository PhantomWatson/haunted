<?= $this->Html->link(
    '<span class="glyphicon glyphicon-arrow-left"></span> Back to the game',
    ['controller' => 'Pages', 'action' => 'home'],
    [
        'class' => 'btn btn-lg btn-default',
        'escape' => false
    ]
) ?>

<hr />

<strong>Is there a cheat mode?</strong><br>
<blockquote>
    There are certain teachers that you can scam for passes. And I'm sure that there are some bugs in the game that can
    be found that give you an infinite number of passes.
</blockquote>

<hr />

<strong>How do the thirteen periods, passes, and time-outs work?</strong><br>
<em>In a game sense:</em><blockquote>You have thirteen periods. You can go to one classroom for a period, then another the next period, then another the next period, until you've lost the game. Of couse, you wouldn't want to go roaming the halls between periods and get sent to detention for truancy. When you get passes, you can go to several different rooms in the same period freely. When you get stuffed into a locker, sent to the nurse's office, or put in detention, you lose a period. But you can easily make up for it by getting lots of passes to use in the next period.
</blockquote>
<em>In a programming sense:</em>
<blockquote>
    The red time bar in the corner shows the ratio of periods used to periods total. You can think of periods as "turns" in this sense. You begin with no "used periods" and thirteen total periods. Passes increase the number of total periods that you are able to use and time-outs increase the number of periods used. Once the number of periods used is higher than the number of periods given, you lose the game.
    <br>Going into any room increments to "used periods" variable unless if you are given a pass, in which case your time is unaffected. If you are given two passes, your "used periods" variable is still not affected and now your total period count goes up by one. To eliminate the problem of getting too many passes and going into negative periods, division is used instead of subtraction. Simple, eh?
</blockquote>

<hr />

<p><strong>What's up with the little title quests that you can go on?</strong>
<blockquote>
    There are little tasks that you can perform and things that you can do to help people out and in return, receive titles like "Heroic" and "Emperor" and "Patriot". If you look through the whole building and play cleverly, you can collect the five positive titles and the single negative title.
</blockquote>

<hr />

<p><strong>Do you get an advantage if you play as a boy/girl or with a high/low GPA?</strong>
<blockquote>
    It's fairly balanced. With a high GPA, you get treated well by teachers, but not by students. And it's vice-versa with a low GPA. There are parts of the game where you run into trouble if you're a guy and parts where you run into trouble if you're a girl. Neither gender has any advantage.
    <br>Actually, parts of the game are so drastically different if you're playing with a high/low GPA or as a boy/girl, you might want to play the game several times with different attributes just to see everything that there is to see.
</blockquote>

<hr />

<p><strong>How did you make this game?</strong>
<blockquote>
    PHP in the back end.
</blockquote>

<hr />

<p><strong><em>WHERE IS ABRAHAM LINCOLN'S HEAD!?</em></strong>
<blockquote>
    Look for it, slacker!
</blockquote>

<hr />

<p><strong>I'm not a slacker!</strong>
<blockquote>
    That's not a question.
</blockquote>

<hr />

<p><strong>Seriously, WHERE IS ABE'S HEAD!?</strong>
<blockquote>
    Bernard moues in your general direction.
</blockquote>

<hr />

<p><strong>What's the answer to Master Sung's riddle?</strong>
<blockquote>
    Bernard moues more strongly in your general direction.
</blockquote>

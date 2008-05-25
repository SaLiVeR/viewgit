<h1><?php echo htmlentities($page['message']); ?></h1>

<div class="authorinfo">
<?php
echo htmlentities($page['author_name']);
echo ' ['. $page['author_datetime'] .']';
?>
</div>

<div class="commitmessage">
<pre>
<?php echo htmlentities($page['message_full']); ?>
</pre>
</div>

<?php /* TODO: list of changed files with section links to diff */ ?>

<div class="diff">
<pre>
<?php echo htmlentities($page['diffdata']); ?>
</pre>
</div>


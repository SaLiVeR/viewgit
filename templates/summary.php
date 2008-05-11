<h1>Summary for <?php echo $page['project']; ?></h1>

<h2>Shortlog</h2>

<table class="shortlog">
<thead>
<tr>
	<th class="date">Date</th>
	<th class="author">Author</th>
	<th class="message">Message</th>
	<th class="actions">Actions</th>
</tr>
</thead>
<tbody>
<?php
foreach ($page['shortlog'] as $l) {
	echo "<tr>\n";
	echo "\t<td>$l[date]</td>\n";
	echo "\t<td>$l[author]</td>\n";
	echo "\t<td><a href=\"". makelink(array('a' => 'commit', 'p' => $page['project'], 'h' => $l['commit_id'])) ."\">$l[message]</a></td>\n";
	echo "\t<td>";
	echo "[<a href=\"". makelink(array('a' => 'tree', 'p' => $page['project'], 'h' => $l['tree'])) ."\">tree</a>]";
	echo "[<a href=\"". makelink(array('a' => 'archive', 'p' => $page['project'], 'h' => $l['tree'], 't' => 'targz')) ."\">tar/gz</a>]";
	echo "[<a href=\"". makelink(array('a' => 'archive', 'p' => $page['project'], 'h' => $l['tree'], 't' => 'zip')) ."\">zip</a>]";
	echo "</td>\n";
	echo "</tr>\n";
}
?>
</tbody>
</table>

<h2>Tags</h2>

<table class="heads">
<thead>
<tr>
	<th class="date">Date</th>
	<th class="branch">Tag</th>
	<th class="actions">Actions</th>
</tr>
</thead>
<tbody>
<?php
foreach ($page['tags'] as $tag) {
	echo "<tr>\n";
	echo "\t<td>$tag[date]</td>\n";
	echo "\t<td><a href=\"\">$tag[name]</a></td>\n";
	echo "\t<td></td>\n";
	echo "</tr>\n";
}
?>
</tbody>
</table>

<h2>Heads</h2>

<table class="heads">
<thead>
<tr>
	<th class="date">Date</th>
	<th class="branch">Branch</th>
	<th class="actions">Actions</th>
</tr>
</thead>
<tbody>
<?php
foreach ($page['heads'] as $h) {
	echo "<tr>\n";
	echo "\t<td>$h[date]</td>\n";
	echo "\t<td><a href=\"". makelink(array('a' => 'shortlog', 'p' => $page['project'], 'h' => $h['fullname'])) ."\">$h[name]</a></td>\n";
	echo "\t<td></td>\n";
	echo "</tr>\n";
}
?>
</tbody>
</table>


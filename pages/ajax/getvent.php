<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
<?php
	$get = $conf['database']->db_query_get('select * from vents order by id desc');
?>
<?php foreach ($get as $a) : ?>
	<div id="vents">
		<i>#<?= $a->id ?></i><button onclick="msgDelete(<?= $a->id; ?>)">Delete.</button>
		<h3 style="color: <?= $a->color ?>"><u><?= $a->title ?></u><h3>
		<p style="font-size: <?= $a->font ?>; color: <?= $a->color ?>;"><?= $a->message ?></p>
		<img src="img/<?= $a->pic ?>"/>
	</div><br/><br/>
<?php endforeach; ?>
<?php endif; ?>

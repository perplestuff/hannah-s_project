<?php if ($_SERVER['REQUEST_METHOD'] == "POST") : ?>
<?php
$id = $_POST['id'];
$get = $conf['database']->db_query_get("select pic from vents where id = $id");
foreach ($get as $a) {
	unlink('img/'.$a->pic);
	$conf['database']->db_query_set("delete from vents where id = $id");
}
?>
<?php endif; ?>

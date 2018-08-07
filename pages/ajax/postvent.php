<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
<?php
	$title = htmlspecialchars($_POST['title']);
	$message = htmlspecialchars($_POST['msg']);
	$color = htmlspecialchars($_POST['color']);
	$font = htmlspecialchars($_POST['font']);
	$pic = $_FILES['pic'];
	$picName = date("m_d_y").htmlspecialchars($pic['name']);
	if (!$pic['error']) {
		if (!move_uploaded_file($pic['tmp_name'], 'img/'.$picName)) {
			echo('File failed to upload.');
		}
	}
	$conf['database']->db_query_insert("vents",[
		'title'=>$title,
		'message'=>$message,
		'color'=>$color,
		'font'=>$font,
		'pic'=>$picName
	]);
?>
<?php endif; ?>

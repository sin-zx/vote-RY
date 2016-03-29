<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload</title>
</head>
<body>
	<form action=<?php echo site_url('upload/up') ?> method="post" enctype="multipart/form-data">
		<label for="title">文件名：</label>
		<input type="text" name="title">
		<input type="file" name="upfile">
		<input type="submit" value="submit">
	</form>
</body>
</html>
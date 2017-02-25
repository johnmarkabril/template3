<?php
	session_start();

	if ( empty( $_SESSION['session_data'] ) ) {
?>
<html>
			<head>
				<link href="css/bootstrap.min.css" rel="stylesheet"/>
				<link href="css/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" media="all"/>
				<link href="css/plugins/hover/hover.css" rel="stylesheet" media="all" />
				<link href="css/animate.css" rel="stylesheet"/>
				<link href="css/style.css" rel="stylesheet"/>
				<link href="css/style_custom.css" rel="stylesheet"/>
			</head>
			<body>

				<?php include 'common/nav_menu.php'; ?>
				<?php include 'user/reservationcontent.php'; ?>
				<?php include 'js/js_files.php'; ?>
				<?php include 'common/footer.php'; ?>
			</body>
</html>
<?php
	} else {
		header('Location: admin.php');
		exit();
	}

?>
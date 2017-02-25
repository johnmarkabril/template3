<?php
    session_start();

    if ( !empty( $_SESSION['session_data'] ) ) {
?>
        <html>
            <head>
                <link href="css/bootstrap.min.css" rel="stylesheet"/>
                <link href="css/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" media="all"/>
                <link href="css/plugins/hover/hover.css" rel="stylesheet" media="all" />
                <link href="css/animate.css" rel="stylesheet"/>
                <link href="css/fullcalendar.print.min.css" rel="stylesheet" media="print" />
                <link href="css/fullcalendar.min.css" rel="stylesheet"/>
                <link href="css/style.css" rel="stylesheet"/>
                <link href="css/style_custom.css" rel="stylesheet"/>
                <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
            </head>
            <body>

                <?php include 'common/navtop_admin.php'; ?>
                <?php include 'user/admineventlistcontent.php'; ?>
                <?php include 'user/admineventlistcontent_1.php'; ?>
                <?php include 'user/admineventlistcontent_2.php'; ?>
                <?php include 'js/js_files_admin_2.php'; ?>
            </body>
        </html>
<?php
    } else {
        header('Location: index.php');
    }

?>
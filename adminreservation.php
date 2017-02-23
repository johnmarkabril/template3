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
            </head>
            <body>

                <?php include 'common/navtop_admin.php'; ?>
                <div class="container" style="padding-top: 15px;padding-bottom: 15px;">
                <div id="calendar" style="background-color: white;"></div>
                </div>
                <?php include 'js/js_files_admin.php'; ?>
            </body>
        </html>
<?php
    } else {
        header('Location: index.php');
    }

?>
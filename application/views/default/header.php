<?php
    $GLOBALS['css_load'] = array(
        'bootstrap.css',
        'style.css',
        'font-awesome/css/font-awesome.min.css'
    );

    $GLOBALS['js_load'] = array(
        'jquery-1.11.0.js',
        'bootstrap.min.js',
        'script.js'
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo isset($page_title) ? $page_title.' - ' : ''; ?>OCHL</title>

    <!-- CSS -->
    <?php
        foreach($GLOBALS['css_load'] as $file) {
            echo load_css($file);
        }
    ?>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
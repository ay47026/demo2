<?php
  if(!isset($page_title)) { $page_title = 'Staff Page'; }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <link rel="stylesheet" href="<?php echo url_for('/stylesheets/bootstrap.css'); ?>" />
     <link rel="stylesheet" href="<?php echo url_for('/stylesheets/style.css'); ?>" />
     <link rel="stylesheet" href="<?php echo url_for('/stylesheets/jquery-ui.css'); ?>" />
     <link rel="stylesheet" href="<?php echo url_for('/stylesheets/animate.css'); ?>" />


    <script src="https://kit.fontawesome.com/e8019bc349.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>CMS <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
</head>

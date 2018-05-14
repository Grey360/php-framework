<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>MVC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>www/css/style.css" rel="stylesheet">
</head>
<body>
<!-- logo -->
<?php echo HEADER; ?>

<!-- navigation -->
<div class="navigation">
    <a href="<?php echo URL; ?>">home</a>
    <a href="<?php echo URL; ?>home/exampleone">subpage</a>
    <a href="<?php echo URL; ?>home/exampletwo">subpage 2</a>
    <a href="<?php echo URL; ?>user">user</a>
</div>

<h1>Enfin ça fonctionne !</h1>

On est ou là ? ici : <?php echo $_SERVER["REQUEST_URI"] ?>

<?php echo FOOTER; ?>
<!-- jQuery, loaded in the recommended protocol-less way -->
<!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
<script>
    var url = "<?php echo URL; ?>";
</script>

<!-- our JavaScript -->
<script src="<?php echo URL; ?>www/js/application.js"></script>
</body>
</html>
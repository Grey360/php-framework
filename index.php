
<!DOCTYPE html>
<?php
    // We use the loader.php script.
    require join(DIRECTORY_SEPARATOR, array( __DIR__ , 'vendor', 'loader.php'));

    // We call the load method in the 
    // Root\System\Application namespace.
    Root\System\Application::load();
?>

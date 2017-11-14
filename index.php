<?php
set_include_path(dirname(__FILE__));
?>
<html>
    <head>
        <title>test</title>
    </head>
    <body>
        <p>
            <?php
                require_once "/lib/Logger.php";
                require_once "/db/db.php";

                db::query();
                Logger::debugger('index');
            ?>
        </p>
    </body>
</html>
<?php

$title = 'Boop the Bug!';
$description = 'Swift has a very boopable snoot.';
$fully_qualified = true;
$include_3d_model = false;

require_once 'functions.php';

require_once 'template_parts/header.php';
require_once 'template_parts/nav.php';

?>
    <main>
        <?php

        require_once 'template_parts/boop-part.php';

        ?>
    </main>
<?php

require_once 'template_parts/footer.php';
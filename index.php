<?php
include './header.php';
include './nav-workshops.php';
?>
<div class="width1">

<?php

    switch ($_REQUEST['page']) {
        case "wie": 
            include "wie.php";
            break;
        default: 
            include "home.php";
            break;
    }
?>

</div>
</section>


<?php
include './footer.php';
?>
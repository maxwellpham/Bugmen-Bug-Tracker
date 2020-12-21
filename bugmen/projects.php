<?php
   require("services/ProjectService.php");

?>
<div>
    <p>You saw projects.php file</p>
    <p><?php
        $allProj = getAllProjects();
        echo $allProj[0]['pname'];
        echo $allProj[0]['id'];
    ?></p>
</div>
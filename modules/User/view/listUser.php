<div class="users">
    <div>
        <h3>Firstname</h3>
        <h3>Surname</h3>
    </div>
    <?php

    $users = UserModel::getUsers();
    foreach ($users as $key => $value) { ?> 
        <div>
            <div id="firstname<?php echo $value["id"] ?>"> <?php echo $value["firstname"] ?> </div>
            <div id="surname<?php echo $value["id"] ?>"> <?php echo $value["surname"] ?> </div>  
        </div>
    <?php } ?>
</div>

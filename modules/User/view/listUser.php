<div class="users">
    <?php

    $users = UserModel::getUsers();
    foreach ($users as $key => $value) { ?> 
        
            <div id="firstname"> <?php echo $value["firstname"] ?> </div>
            <div id="surname"> <?php echo $value["surname"] ?> </div>  
    <?php } ?>
</div>

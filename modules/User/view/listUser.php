<main id="main">
    <div class="users">
        <div>
            <div class="users-col">
                <h3>Firstname</h3>
            </div>
            <div class="users-col">
                <h3>Surname</h3>
            </div>
            <div class="users-col">
                <h3>Street</h3>
            </div>
            <div class="users-col">
                <h3>Number</h3>
            </div>
            <div class="users-col">
                <h3>Country</h3>
            </div>
            <div class="users-col">
                <h3>City</h3>
            </div>
        </div>
        <?php

        $users = UserModel::getUsers();
        $usersAddresses = AddressModel::getUsersAddresses();
        foreach ($usersAddresses as $key => $value) { ?> 
            <div>
                <div id="firstname<?php echo $value["id"] ?>" class="users-col"> <?php echo $value["firstname"] ?> </div>
                <div id="surname<?php echo $value["id"] ?>" class="users-col"> <?php echo $value["surname"] ?> </div>
                <div id="street<?php echo $value["id"] ?>" class="users-col"> <?php echo $value["street"] ?> </div>
                <div id="number<?php echo $value["id"] ?>" class="users-col"> <?php echo $value["number"] ?> </div>
                <div id="country<?php echo $value["id"] ?>" class="users-col"> <?php echo $value["country"] ?> </div>
                <div id="city<?php echo $value["id"] ?>" class="users-col"> <?php echo $value["city"] ?> </div>  
            </div>
        <?php } ?>
        <a class="previous-btn" href="/">Previous Page</a>
    </div>
    
</main>

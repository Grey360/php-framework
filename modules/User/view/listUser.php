    <table class="users">
        <tr>
            <th>Firstname</th>
            <th>Surname</th>
            <th>Street</th>
            <th>Number</th>
            <th>Country</th>
            <th>City</th>
        </tr>
        <?php
        $users = UserModel::getUsers();
        $usersAddresses = AddressModel::getUsersAddresses();
        foreach ($usersAddresses as $key => $value) { ?> 
            <tr>
                <td id="firstname<?php echo $value["id"] ?>"> <?php echo $value["firstname"] ?> </td>
                <td id="surname<?php echo $value["id"] ?>"> <?php echo $value["surname"] ?> </td>
                <td id="street<?php echo $value["id"] ?>"> <?php echo $value["street"] ?> </td>
                <td id="number<?php echo $value["id"] ?>"> <?php echo $value["number"] ?> </td>
                <td id="country<?php echo $value["id"] ?>"> <?php echo $value["country"] ?> </td>
                <td id="city<?php echo $value["id"] ?>"> <?php echo $value["city"] ?> </td>  
            </tr>
        <?php } ?>
       
        </table>
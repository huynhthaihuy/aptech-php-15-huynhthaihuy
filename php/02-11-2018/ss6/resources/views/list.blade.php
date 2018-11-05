<?php
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>";
foreach($users as $users) {
    echo "<tr><td>".$users->ID."</td><td>".$users->Name."</td><td> ".$users->Email."</td><td><button type='submit' class='btn btn-warning mx-2'>Show</button><button type='submit' class='btn btn-danger'>Edit</button><button type='submit' class='btn btn-warning'>Delete</button></td></tr>";
}
echo "</table>";
?>
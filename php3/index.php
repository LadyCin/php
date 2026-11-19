<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "myfirstdb";

$conn = @new mysqli($servername, $username, $password, $db);

$isSuccess = false;

// Handle form submission
if($conn && !$conn->connect_error && isset($_POST['submit'])) {
    $fname   = $conn->real_escape_string($_POST['fname']);
    $mname   = $conn->real_escape_string($_POST['mname']);
    $lname   = $conn->real_escape_string($_POST['lname']);
    $age     = $conn->real_escape_string($_POST['age']);
    $gender  = $conn->real_escape_string($_POST['gender']);
    $email   = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $contact = $conn->real_escape_string($_POST['contact']);

    $sql = "INSERT INTO persons(person_fname,person_mname,person_lname,person_age,person_gender,person_email,person_address,person_contact) 
            VALUES('$fname', '$mname', '$lname', '$age', '$gender', '$email', '$address', '$contact')";

    if($conn->query($sql) === TRUE) {
        $isSuccess = true;
    } else {
        echo $sql." ".$conn->error;
    }
}

// Handle filter functionality (Sample Output #4)
$result = null;
if($conn && !$conn->connect_error) {
    $where = array();
    $query = "SELECT * FROM persons";

    if(isset($_GET["filter_submit"])) {
        if(!empty($_GET["person_id"])) {$where[] = "person_id LIKE '{$_GET["person_id"]}%'"; }
        if(!empty($_GET["person_fname"])) {$where[] = "person_fname LIKE '{$_GET["person_fname"]}%'"; }
        if(!empty($_GET["person_mname"])) {$where[] = "person_mname LIKE '{$_GET["person_mname"]}%'"; }
        if(!empty($_GET["person_lname"])) {$where[] = "person_lname LIKE '{$_GET["person_lname"]}%'"; }
        if(!empty($_GET["person_gender"])) {$where[] = "person_gender LIKE '{$_GET["person_gender"]}%'"; }

        if(!(count($where) === 0)) {
            $query .= " WHERE " . implode(" AND ", $where);
            $query .= " ORDER BY person_lname";
            $result = $conn->query($query);
            $where = array();
        } else {
            $query = "SELECT * FROM persons ORDER BY person_lname";
            $result = $conn->query($query);
        }
    } else {
        $query = "SELECT * FROM persons ORDER BY person_id DESC";
        $result = $conn->query($query);
    }
}
?>

<?php include './layout/head.php'; ?>
    <h1>PHP Output 3 & 4</h1>
    <p>This output connects to the database, allows user to save records directly, and displays the registered persons in a filterable table below.</p>
    
    <?php if($isSuccess): ?>
        <h3 style="color: green;">Record Successfully Inserted to Database</h3>
    <?php endif; ?>

    <form action="index.php" method="POST">
        <h2>Register Person</h2>
        <table>
            <tr>
                <td><label for="fname">First Name</label></td>
                <td><input type="text" name="fname" id="fname" placeholder="Enter First Name" required></td>
            </tr>
            <tr>
                <td><label for="mname">Middle Name</label></td>
                <td><input type="text" name="mname" id="mname" placeholder="Enter Middle Name"></td>
            </tr>
            <tr>
                <td><label for="lname">Last Name</label></td>
                <td><input type="text" name="lname" id="lname" placeholder="Enter Last Name" required></td>
            </tr>
            <tr>
                <td><label for="age">Age</label></td>
                <td><input type="number" name="age" id="age" placeholder="Enter Age" min="1" max="120" required></td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td>
                    <select name="gender" id="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" placeholder="Enter Email" required></td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td><input type="text" name="address" id="address" placeholder="Enter Address" required></td>
            </tr>
            <tr>
                <td><label for="contact">Contact Number</label></td>
                <td><input type="tel" name="contact" id="contact" placeholder="Enter Contact Number" pattern="[0-9]{11}" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="cancel" value="Cancel">
                </td>
            </tr>
        </table>
    </form>

    <hr style="margin-block: 30px;">

    <h2>List of Registered Person</h2>
    <p>This table has the same functionality as Sample Output #4.</p>

    <form action="index.php" method="GET">
    <table id="example" class="dataTable">
        <thead>
            <tr>
                <th>Person Id</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>

            <tr>
                <th>
                    <input type="text" name="person_id" value="<?php echo isset($_GET['person_id']) ? $_GET['person_id'] : "";?>">
                </th>
                <th>
                    <input type="text" name="person_fname" value="<?php echo isset($_GET['person_fname']) ? $_GET['person_fname'] : "";?>">
                </th>
                <th>
                    <input type="text" name="person_mname" value="<?php echo isset($_GET['person_mname']) ? $_GET['person_mname'] : "";?>">
                </th>
                <th>
                    <input type="text" name="person_lname" value="<?php echo isset($_GET['person_lname']) ? $_GET['person_lname'] : "";?>">
                </th>
                <th></th>
                <th>
                    <select name="person_gender" id="person_gender">
                        <option value="" selected>Select All</option>
                        <option value="Male" <?php echo isset($_GET['person_gender']) && $_GET['person_gender'] == "Male" ? "selected" : "";?>>Male</option>
                        <option value="Female" <?php echo isset($_GET['person_gender']) && $_GET['person_gender'] == "Female" ? "selected" : "";?>>Female</option>
                    </select>
                </th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <input type="submit" name="filter_submit" value="Filter">
                </th>
            </tr>
        </thead>
 
        <tbody>
            <?php 
                if($result) {
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <tr>
                                <td>'. $row['person_id'] .'</td>
                                <td>'. $row['person_fname'] .'</td>
                                <td>'. $row['person_mname'] .'</td>
                                <td>'. $row['person_lname'] .'</td>
                                <td>'. ($row['person_age'] ?? '') .'</td>
                                <td>'. ($row['person_gender'] ?? '') .'</td>
                                <td>'. ($row['person_email'] ?? '') .'</td>
                                <td>'. ($row['person_address'] ?? '') .'</td>
                                <td>'. ($row['person_contact'] ?? '') .'</td>
                                <td></td>
                            </tr>
                        ';
                    }
                }
            ?>
        </tbody>
    </table>
    </form>

<?php include './layout/foot.php'; ?>

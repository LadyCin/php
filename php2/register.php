<?php require './layout/head.php'; ?>
<?php require './layout/nav.php'; ?>

<h1>Register Page</h1>
<p>This page uses the <code>require</code> statement to load layout files.</p>

<fieldset style="width: 450px;">
    <legend>User Registration</legend>
    <form action="register.php" method="POST">
    <table>
        <tr>
            <td>Full Name:</td>
            <td><input type="text" name="fullname" placeholder="Enter Full Name" required /></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" placeholder="Enter Username" required /></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" placeholder="Enter Email" required /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Enter Password" required /></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="cpassword" placeholder="Confirm Password" required /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Register">
                <input type="reset" value="Cancel">
            </td>
        </tr>
    </table>
    </form>
</fieldset>

<?php require './layout/foot.php'; ?>

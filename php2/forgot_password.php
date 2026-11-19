<?php require './layout/head.php'; ?>
<?php require './layout/nav.php'; ?>

<h1>Forgot Password Page</h1>
<p>This page uses the <code>require</code> statement to load layout files.</p>

<fieldset style="width: 450px;">
    <legend>Reset Password</legend>
    <form action="forgot_password.php" method="POST">
    <table>
        <tr>
            <td>Email Address:</td>
            <td><input type="email" name="email" placeholder="Enter Registered Email" required /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit Request">
                <input type="reset" value="Cancel">
            </td>
        </tr>
    </table>
    </form>
</fieldset>

<p>
    <a href="login.php">Back to Login</a>
</p>

<?php require './layout/foot.php'; ?>

<?php require './layout/head.php'; ?>
<?php require './layout/nav.php'; ?>

<h1>Login Page</h1>
<p>This page uses the <code>require</code> statement to load layout files.</p>

<fieldset style="width: 450px;">
    <legend>User Login</legend>
    <form action="login.php" method="POST">
    <table>
        <tr>
            <td>Username / Email:</td>
            <td><input type="text" name="username" placeholder="Enter Username or Email" required /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Enter Password" required /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Login">
                <input type="reset" value="Cancel">
            </td>
        </tr>
    </table>
    </form>
</fieldset>

<p>
    <a href="forgot_password.php">Forgot Password?</a>
</p>

<?php require './layout/foot.php'; ?>

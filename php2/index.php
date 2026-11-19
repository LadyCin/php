<?php include './layout/head.php'; ?>
<?php include './layout/nav.php'; ?>

<h1>PHP Output No. 2 (Home Page)</h1>
<p>This output uses <strong>include</strong> and <strong>require</strong> statements in PHP.</p>
<p>
    Welcome to the Home Page. Use the navigation links above to view the other pages:
</p>
<ul>
    <li><a href="register.php">Register Page</a></li>
    <li><a href="login.php">Login Page</a></li>
    <li><a href="forgot_password.php">Forgot Password Page</a></li>
</ul>

<p>
    Note on include vs require:
</p>
<ul>
    <li><code>include</code> produces a warning (E_WARNING) if the file is not found, and the script continues.</li>
    <li><code>require</code> produces a fatal error (E_COMPILE_ERROR) if the file is not found, and stops the script.</li>
</ul>

<?php include './layout/foot.php'; ?>

<?php

if ($_SESSION['logged_in'] == true) {

    // logout form

    echo '<div class="login_logout logout">
    <a href="index.php?logout=true"><b>logout</b></a>
    </div>';

} else {

// login form
echo '<form method="POST" id="logIn" class="login">
    <div>
        <label for="uname"><b>User name</b></label>
        <input type="text" placeholder="User name" name="uname" value="admin" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Password" name="psw" value="admin" required>
        <button type="submit" name="login">Login</button>
    </div>
</form>';
}

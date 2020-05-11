<?php 

// Forbid entering admin page  without authorization

if(($_SERVER['REQUEST_URI'] == '/PHPbasicCMS/Admin/' || $_SERVER['REQUEST_URI'] == '/PHPbasicCMS/admin/index.php') && !isset($_SESSION['logged_in'])) {
    header('Location:/PHPbasicCMS');
}

// Authentication

if (isset($_POST['login'])) {
    $user = $entityManager->find('User', $_POST['uname']);
    if ($user != null) {
        $password = $user->getUser_password();
        if ($password == $_POST['psw']) {
            echo 'work';
            $_SESSION['logged_in'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $user;
            header('Location:/PHPbasicCMS/Admin');
        } else {
            echo "Wrong user name or password. Please, try again";
        }
    } else {
        echo 'Username was not found';
    }
}

// logout

if ($_GET['logout'] == true) {
    session_destroy();
    header('Location:/PHPbasicCMS/');
}

if (isset($_GET['logout']) && $_GET['logout'] == true) {
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['logged_in']);
}

// Delete page

if(isset($_POST['pageToDelete'])) {
    $page = $entityManager->find('Page', $_POST['pageToDelete']);
    $entityManager->remove($page);
    $entityManager->flush();
}

// Update

if(isset($_POST['Update'])) {

    $page = $entityManager->find('Page', $_POST['pageID']);
    $page->setTitle($_POST['newPageTitle']);
    $page->setContent($_POST['newPageContent']);
    $entityManager->flush();
}

// Add new product

if(isset($_POST['createPage'])) {
    $page = new Page();
    $page->setTitle($_POST['title']);
    $page->setContent($_POST['content']);
    $entityManager->persist($page);
    $entityManager->flush();
}
?>
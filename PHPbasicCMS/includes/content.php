<?php

// back to admin

if ($_SESSION['logged_in'] == true) {
    echo '<div id="back_to_admin"><a href="admin/index.php">Back to admin</a></div>';
}

if (!isset($_GET['visit'])) {
    $page = $entityManager->find('Page', 1);
} else {
    $page = $entityManager->find('Page', $_GET['visit']);
}

echo '<h1>' . $page->getTitle() .'</h1>';
echo '<p>' . $page->getContent() . '</p>';
?>
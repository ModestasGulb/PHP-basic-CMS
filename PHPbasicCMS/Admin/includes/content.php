<?php

if (isset($_POST['pageToEdit'])) {
    include 'includes/edit.php';
} else if (isset($_POST['addPage'])) {
    include 'includes/add_page.php';
} else {
    echo '<h1>Manage pages</h1>
    <table><thead><tr>
    <th>Title</th>
    <th>Action</th>
    </tr></thead>
<tbody>';

    $pagesRepository = $entityManager->getRepository('Page');
    $pages = $pagesRepository->findAll();

    foreach ($pages as $page) {
        if ($page->getRestrict_delete() == 1) {
            echo "<tr>
        <td>" . $page->getTitle() . "</td>
        <td class='actions'><form method='POST'>
        <input type='submit' value='Edit'>
        <input type='hidden' name='pageToEdit' value='" . $page->getID() . "'>
        </form></td>
        </tr>";
        } else {
            echo "<tr>
        <td>" . $page->getTitle() . "</td>
        <td class='actions'>
        <form method='POST'>
        <input type='submit' value='Delete' class='delete'>
        <input type='hidden' name='pageToDelete' value='" . $page->getID() . "'>
        </form>
        <form method='POST'>
        <input type='submit' value='Edit'>
        <input type='hidden' name='pageToEdit' value='" . $page->getID() . "'>
        </form></td>
        </tr>";
        }
    }
    echo "</tbody></table>";

    echo "<form class='addPage' method='POST'><input type='submit' name='addPage' value='Add new page'></form>";
}

?>
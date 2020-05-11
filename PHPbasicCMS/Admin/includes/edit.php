<?php
if(isset($_POST['pageToEdit'])) {
$page = $entityManager->find('Page', $_POST['pageToEdit']);
echo "<h1>Edit page</h1>";
echo "<form method='POST' id='pageUpdate' class='addPage'>
<input type='submit' name='Update' value='Update'>
<input type='hidden' name='pageID' value='" . $_POST['pageToEdit'] . "'>
<div class='titles'><textarea name='newPageTitle' form='pageUpdate' required>" .
$page->getTitle() . "</textarea></div>
<div class='contents'><textarea name='newPageContent' form='pageUpdate' required>
" . $page->getContent() ."</textarea></div>";
}
?>
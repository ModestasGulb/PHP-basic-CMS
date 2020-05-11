<?php
if (isset($_POST['addPage'])) {
echo '<h1>Create new page</h1>';
echo '<form id="createPage" method="POST">
<div class="titles"><input type="text" name="title" placeholder="Enter page title" required></div>
<div class="contents"><input type="text" name="content" placeholder="Enter page content" required></div>
<div class="addPage"><input type="submit" value="Create page" name="createPage"></div>
</form>';
}
?>
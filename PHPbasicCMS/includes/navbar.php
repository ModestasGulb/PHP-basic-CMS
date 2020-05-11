<?php
echo '<nav><ul>';

$pagesRepository = $entityManager->getRepository('Page');
$pages = $pagesRepository->findAll();

foreach ($pages as $page) {
    echo '<li><a href="index.php?visit=' . $page->getID() .'">' . $page->getTitle(). '</a></li>';
}

echo '</ul></nav>';

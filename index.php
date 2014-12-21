<?php

$req = (isset($_GET['req']) ? $_GET['req'] : FALSE);

if ($req && file_exists('./pages/' . $req . '.php')) {
    
    $html = new DOMDocument();
    libxml_use_internal_errors(true);
    $html->loadHTMLFile('./pages/master.php');

    $page = new DOMDocument();
    $page->loadHTMLFile('./pages/' . $req . '.php');

    $head = $html->getElementsByTagName('head');
    $pageHead = $page->getElementsByTagName('head');

    foreach ($pageHead->item(0)->childNodes as $node) {
        $head->item(0)->appendChild($html->importNode($node, TRUE));
    }

    $main = $html->getElementsByTagName('main');
    $mainPage = $page->getElementsByTagName('main');

    foreach ($mainPage->item(0)->childNodes as $node) {
        $main->item(0)->appendChild($html->importNode($node, TRUE));
    }

    echo $html->saveHTML();
} else {
    require_once "./404/index.php";
}

?>

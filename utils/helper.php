<?php

function getHeader() {
    include './views/partials/header.php';
}

function getFooter() {
    include './views/partials/footer.php';
}

function redirect($path)
{
    return header('Location: ' . $path);
}

<?php

function view($name) {
    return require "app/views/{$name}.view.php";
}
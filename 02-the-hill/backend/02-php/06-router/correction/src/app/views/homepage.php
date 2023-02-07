<?php

if (!empty($_GET['name'])) {
    echo 'Bonjour ' . $_GET['name'];
} else {
    echo 'Bonjour inconnu';
}

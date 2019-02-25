<?php

/**
 * Patch $file with translations
 * @param string $file Inside SimpleArmory/ dir
 * @param array $l18n Translations, eg: ["Quests" => "Задания"]
 * @return void
 */
function patch(string $file, array $l18n): void
{
    $text = file_get_contents('./SimpleArmory/'.$file);
    $text = str_replace(array_keys($l18n), array_values($l18n), $text);
    file_put_contents('./SimpleArmory/'.$file, $text);
}

/**
 * Get all patch files and apply them to Simple Armory
 */
foreach(glob('./patches/*.php') as $patchfile) {
    $patches = include $patchfile;
    foreach($patches as $file => $l18n) {
        patch($file, $l18n);
    }
}

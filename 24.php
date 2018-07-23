<?php
/**
 * Записать информацию в текстовый файл.
 * Если файла не существуе, то создать, иначе в существующий файл необходимо добавлять информацию, не переписывая содержимое.
 *
 */

$content = "wablabdab";

$file = "24.txt";

if (!file_exists($file)) {
    $fp = fopen($file, 'w');
    fwrite($fp, $content);
    fclose($fp);
    echo "Файл создан. В файл записана иформация: ".$content;
} else {
    file_put_contents($file, $content, FILE_APPEND);
    echo "В файл записана иформация: ".$content;
}
<?php
/**
 * dFile is original file removed following part:
 * start flag(md5199604179420nnnnfebca21a)
 * characters before the first 'z' appear
 * end flag(zvvvve3a5ccd9)
 * characters after the end flag
 */
//$dFile = file_get_contents('update_cfg.dtxt');
//$dFile = file_get_contents('readme.dtxt');
$dFile = file_get_contents('test_ed_403.dtxt');
/**
 * In these file we can find that
 * z72z6f => \r\n => x0dx0a
 * offset = x0d - z72 + 128 = x0a - z6f + 128 = 27
 * so original hex = (zEncrypt + offset) % 128
 */
$offset = 27;
preg_match_all('/z(\S{2})/', $dFile, $matches);
$characters = $matches[1];
foreach($characters as $character){
    $char = base_convert($character, 16, 10);
    $char += $offset;
    $char %= 128;
    $char = base_convert($char, 10, 16);
    if(strlen($char)==1){
        $char = '0'.$char;
    }
    echo hex2bin($char);
}

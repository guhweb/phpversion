<?php


require __DIR__ . "/../vendor/autoload.php";

USE PHPVersion\PHPVersion;

$versao = new PHPVersion;

//echo $versao->getPhpVersion();

$versao->getPhpInfo();


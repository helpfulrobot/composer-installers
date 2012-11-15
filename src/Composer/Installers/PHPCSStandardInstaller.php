<?php
namespace Composer\Installers;

class PHPCSStandardInstaller extends BaseInstaller
{
    protected $locations = array(
        'standard' => 'squizlabs/php_codesniffer/CodeSniffer/Standards/{$name}',
    );
}

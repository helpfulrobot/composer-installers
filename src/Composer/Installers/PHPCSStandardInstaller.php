<?php
namespace Composer\Installers;

class PHPCSStandardInstaller extends BaseInstaller
{
    protected $locations = array(
        'standard' => 'vendor/squizlabs/php_codesniffer/CodeSniffer/Standards/',
    );

    /**
     * Format package name
     */
    /*
    public function inflectPackageVars($vars)
    {
        $vars['name'] = strtoupper($vars['name']);

        return $vars;
    }
    */
}

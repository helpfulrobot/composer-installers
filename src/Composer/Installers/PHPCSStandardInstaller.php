<?php
namespace Composer\Installers;

class PHPCSStandardInstaller extends BaseInstaller
{
    protected $locations = array(
        'standard' => 'vendor/squizlabs/php_codesniffer/CodeSniffer/Standards/{$name}',
    );

    /**
     * Format package name
     */
    public function inflectPackageVars($vars)
    {
        if (strpos($vars['name'], 'typo3') !== false)
        {
            $vars['name'] = preg_replace_callback('/(typo3cms|typo3)(.*)/', function($matches) {
                     return strtoupper($matches[1]) . ucwords($matches[2]);
            }, $vars['name']);
        }
        else
        {
            $vars['name'] = ucwords($vars['name']);
        }

        return $vars;
    }
}

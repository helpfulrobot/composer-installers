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
        if (strpos($vars['name'], 'typo3') !== false) {
            reg_replace_callback('/(typo3)(.*)', function($matches) {
                     strtoupper($matches[1]);
                     ucwords($matches[2]);
            }, $vars['name']);
        } else {
            $vars['name'] = substr_replace($vars['name'], ucwords($vars['name']), 0);
        }

        return $vars;
    }
}

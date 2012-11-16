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
            $vars['name'] = substr_replace($vars['name'], strtoupper($vars['name']), 0, 4);
            $vars['name'] = substr_replace($vars['name'], ucwords($vars['name']), 5);
        } else {
            $vars['name'] = substr_replace($vars['name'], ucwords($vars['name']), 0);
        }

        return $vars;
    }
}

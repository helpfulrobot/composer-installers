<?php

namespace Composer\Installers;

class KestaneInstaller extends BaseInstaller
{
    protected $locations = [
        'admin'     => 'resources/themes/{$name}/',
        'theme'     => 'themes/{$name}/',
        'plugin'    => 'plugins/{$name}/',
        'component' => 'components/{$name}/',
    ];

    public function inflectPackageVars($vars)
    {
        if ($vars['type'] === 'kestane-admin') {
            return $this->inflectAdminThemeVars($vars);
        }

        if ($vars['type'] === 'kestane-theme') {
            return $this->inflectThemeVars($vars);
        }

        if ($vars['type'] === 'kestane-plugin') {
            return $this->inflectPluginVars($vars);
        }

        if ($vars['type'] === 'kestane-component') {
            return $this->inflectComponentVars($vars);
        }

        return $vars;
    }

    protected function inflectAdminThemeVars($vars)
    {
        $vars['name'] = str_replace('kestane-admin-theme-', '', $vars['name']);

        return $vars;
    }

    protected function inflectThemeVars($vars)
    {
        $vars['name'] = str_replace('kestane-theme-', '', $vars['name']);

        return $vars;
    }

    protected function inflectPluginVars($vars)
    {
        $vars['name'] = str_replace('kestane-plugin-', '', $vars['name']);

        return $vars;
    }

    protected function inflectComponentVars($vars)
    {
        $vars['name'] = str_replace('kestane-component-', '', $vars['name']);

        return $vars;
    }
}
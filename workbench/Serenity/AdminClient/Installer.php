<?php

namespace Serenity\AdminClient;

use Serenity\ModulesContracts\InstallerContract;
use Serenity\ModulesContracts\UninstallerContract;
use Serenity\ModulesContracts\ModuleContract;
use Serenity\ModulesContracts\ModulesManagerContract;

class Installer implements InstallerContract, UninstallerContract
{
    /**
     * Install the module.
     *
     * @param  Serenity\ModulesContracts\Contracts\ModuleContract  $module
     * @param  Serenity\ModulesContracts\Contracts\ModulesManagerContract  $modulesManager
     */
    static function install(ModuleContract $module, ModulesManagerContract $modulesManager)
    {
        // Do something ...
    }

    /**
     * Uninstall the module.
     *
     * @param  Serenity\ModulesContracts\Contracts\ModuleContract  $module
     * @param  Serenity\ModulesContracts\Contracts\ModulesManagerContract  $modulesManager
     */
    static function uninstall(ModuleContract $module, ModulesManagerContract $modulesManager)
    {
        // Do something ...
    }
}

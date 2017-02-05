<?php

namespace Serenity\Test;

use Serenity\ModulesContracts\InstallerContract;
use Serenity\ModulesContracts\ModuleContract;
use Serenity\ModulesContracts\ModulesManagerContract;

class Installer implements InstallerContract
{
    /**
     * Install the module.
     *
     * @param  Serenity\ModulesContracts\Contracts\ModuleContract  $module
     * @param  Serenity\ModulesContracts\Contracts\ModulesManagerContract  $modulesManager
     */
    static function install(ModuleContract $module, ModulesManagerContract $modulesManager)
    {
        //
    }
}

<?php

namespace cmsadmin\blocks;

use cmsadmin\Module;
use cmsadmin\blockgroups\DevelopmentGroup;

class DevBlock extends \cmsadmin\base\Block
{
    public $module = 'cmsadmin';

    public function name()
    {
        return Module::t('block_dev_name');
    }

    public function icon()
    {
        return 'developer_mode';
    }

    public function config()
    {
        return ['',
        ];
    }

    public function twigFrontend()
    {
        return $this->render();
    }

    public function twigAdmin()
    {
        return '';
    }
    
    public function getBlockGroup()
    {
        return DevelopmentGroup::className();
    }
}

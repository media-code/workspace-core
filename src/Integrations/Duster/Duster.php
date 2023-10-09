<?php

namespace Gedachtegoed\Workspace\Core\Integrations\Duster;

use Gedachtegoed\Workspace\Core\Builder;

class Duster extends Builder
{
    public function __invoke()
    {
        $this
            ->composerRequireDev('tightenco/duster')
            ->composerUpdate('tightenco/duster')
            ->publishesConfigs([
                'duster.json' => 'duster.json',
            ]);
    }
}

<?php
namespace Opportunities\Jobs;

use MapasCulturais\App;
use MapasCulturais\Entities\Opportunity;
use MapasCulturais\Definitions\JobType;

class StartDataCollectionPhase extends JobType
{
    const SLUG = "StartDataCollectionPhase";

    protected function _generateId(array $data, string $start_string, string $interval_string, int $iterations)
    {
        return "StartDataCollectionPhase:{$data['opportunity']->id}";
    }

    protected function _execute(\MapasCulturais\Entities\Job $job){
        $app = App::i();
        
        /** @var Opportunity $opportunity */
        $opportunity = $job->opportunity;
        
        /** @var \OpportunityPhases\Module $module */
        $module = $app->modules['OpportunityPhases'];
        
        /**
         * importa as inscrições da fase anterior 
         */
        if (!$opportunity->isFirstPhase && $opportunity->isDataCollection ) {
            $module->importLastPhaseRegistrations($opportunity->previousPhase, $opportunity, true);
        }
        
        echo "> $job->opportunity " . __CLASS__ . "\n\n";
        return true;
    }
}
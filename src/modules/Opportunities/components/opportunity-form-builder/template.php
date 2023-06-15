<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->layout = 'entity';

$this->addOpportunityPhasesToJs();

$this->import('
    entity-field
    opportunity-form-export
    opportunity-form-import
    opportunity-phase-header
    v1-embed-tool
');
?>
<div class="form-builder__content grid-12">
    <opportunity-phase-header classes="col-12" :phase="entity"></opportunity-phase-header>

    <div class="col-12">
        <h2><?= i::__("Configuração de formulário de coleta de dados") ?></h2>
    </div>

    <opportunity-form-import classes="col-12" :entity="entity"></opportunity-form-import>
    
    <div class="form-builder__cards col-12 grid-12">
        <div class="col-6 sm:col-12" v-if="entity.isFirstPhase">
            <mc-card>
                <template #default>
                    <div class="input-group grid-12">
                        <div v-if="entity.isFirstPhase" class="col-12">
                            <h4 class="input-group__title"><?= i::__("Solicitar Agente Coletivo?") ?></h4>
                            <h6 class="input-group__subtitle"><?= i::__("Permitir inscrição de Agente Coletivo") ?></h6>
                            <div class="input-group__inputs">
                                <label class="input-group__input"> <input v-model="entity.useAgentRelationColetivo" type="radio" name="useAgentRelationColetivo" value="dontUse" /> <?= i::_e('Não Utilizar') ?> </label>
                                <label class="input-group__input"> <input v-model="entity.useAgentRelationColetivo" type="radio" name="useAgentRelationColetivo" value="required" /> <?= i::_e('Obrigatório') ?> </label>
                                <label class="input-group__input"> <input v-model="entity.useAgentRelationColetivo" type="radio" name="useAgentRelationColetivo" value="optional" /> <?= i::_e('Opcional') ?> </label>
                            </div>
                        </div>
                        <div v-if="entity.isFirstPhase" class="col-12">
                            <h4 class="input-group__title"><?= i::__("Solicitar instituição responsável?") ?></h4>
                            <h6 class="input-group__subtitle"><?= i::__("Solicite a inscrição de instituções (agentes coletivos com CNPJ).") ?></h6>
                            <div class="input-group__inputs">
                                <label class="input-group__input"> <input v-model="entity.useAgentRelationInstituicao" type="radio" name="useAgentRelationInstituicao" value="dontUse" /> <?= i::_e('Não Utilizar') ?> </label>
                                <label class="input-group__input"> <input v-model="entity.useAgentRelationInstituicao" type="radio" name="useAgentRelationInstituicao" value="required" /> <?= i::_e('Obrigatório') ?> </label>
                                <label class="input-group__input"> <input v-model="entity.useAgentRelationInstituicao" type="radio" name="useAgentRelationInstituicao" value="optional" /> <?= i::_e('Opcional') ?> </label>
                            </div>
                        </div>
                    </div>
                </template>
            </mc-card>
        </div>

        <div class="col-6 sm:col-12 grid-12" v-if="entity.isFirstPhase">
            <mc-card class="col-12">
                <template #default>
                    <div class="input-group">
                        <h4 class="input-group__title"><?= i::__("Permitir vínculo de Espaço?") ?></h4>
                        <h6 class="input-group__subtitle"><?= i::__("Permitir um espaço para associar à inscrição.") ?></h6>
                        <div class="input-group__inputs no-padding-bottom">
                            <label class="input-group__input"> <input v-model="entity.useSpaceRelationIntituicao" type="radio" name="useSpaceRelationIntituicao" value="dontUse" /> <?= i::_e('Não Utilizar') ?> </label>
                            <label class="input-group__input"> <input v-model="entity.useSpaceRelationIntituicao" type="radio" name="useSpaceRelationIntituicao" value="required" /> <?= i::_e('Obrigatório') ?> </label>
                            <label class="input-group__input"> <input v-model="entity.useSpaceRelationIntituicao" type="radio" name="useSpaceRelationIntituicao" value="optional" /> <?= i::_e('Opcional') ?> </label>
                        </div>
                    </div>
                </template>
            </mc-card>
            
            <mc-card class="col-12">
                <template #default>
                    <div class="input-group">
                        <h4 class="input-group__title"><?= i::__("Habilitar informações de Projeto?") ?></h4>
                        <h6 class="input-group__subtitle"><?= i::__("Permitir que proponente vizualise informações básicas sobre um projeto.") ?></h6>
                        <div class="input-group__inputs no-padding-bottom">
                            <label class="input-group__input"> <input v-model="entity.projectName" type="radio" name="projectName" value="0" /> <?= i::_e('Não Utilizar') ?> </label>
                            <label class="input-group__input"> <input v-model="entity.projectName" type="radio" name="projectName" value="2" /> <?= i::_e('Obrigatório') ?> </label>
                            <label class="input-group__input"> <input v-model="entity.projectName" type="radio" name="projectName" value="1" /> <?= i::_e('Opcional') ?> </label>
                        </div>
                    </div>
                </template>
            </mc-card>
        </div>
    </div>

    <div class="col-12 form-export">
        <opportunity-form-export :entity="entity"></opportunity-form-export>
    </div>

    <div class="col-12">
        <v1-embed-tool route="formbuilder" :id="entity.id"></v1-embed-tool>
    </div>
</div>
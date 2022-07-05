<?php
use MapasCulturais\i;

$this->import('create-agent panel--entity-tabs panel--entity-card');
?>
<div class="panel__row">
    <h1>
        <iconify icon="mdi:account-multiple-outline"></iconify>
        <?= i::__('Meus agentes') ?>
    </h1>
    <a class="panel__help-link" href="#"><?=i::__('Ajuda')?></a>
</div>
<div class="panel__row">
    <p><?=i::__('Nesta seção você visualiza e gerencia seu perfil de usuário e outros agentes criados')?></p>
    <a class="button button--large button--primary" href="#">
        <iconify icon="mdi:account-multiple-plus"></iconify>
        <create-agent :entity="entity" :editable="true" #default="{modal}"  >
            <span @click="modal.open()"><?=i::__('Criar agente!!')?></span>
        </create-agent>
    </a>
</div>

<div class="panel-list panel-main-content">    
    <panel--entity-tabs type="agent"></panel--entity-tabs>
</div>

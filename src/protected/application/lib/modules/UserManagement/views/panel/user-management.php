<?php
use MapasCulturais\i;

$this->import('
    loading messages 
    panel--card-user 
    entities mc-icon
    panel--entity-tabs
');

$profile = $app->user->profile;
?>

<div class="panel-page">
    <header class="panel-page__header">
        <div class="panel-page__header-title">
            <div class="title">
                <div class="title__icon default"> <mc-icon name="user-config"></mc-icon> </div>
                <div class="title__title"> <?= i::_e('Gestão de usuários') ?> </div>
            </div>
            <div class="help">
                <a class="panel__help-link" href="#"><?=i::__('Ajuda?')?></a>
            </div>
        </div>
        <p class="panel-page__header-subtitle">
            <?= i::_e('Gestão dos usuários do sistema') ?>
        </p>
    </header>
    
    <div class="panel-page__content">
        <panel--entity-tabs type="user" user="" select="id,email,status,profile.{id,name,type},roles.{id,name,subsite.{id,name}}">
            <template #filters-additional="{query, entities}">
                <entities #default="roles" type="system-role" select="name,slug">
                    <select v-model="query['@roles']" @change="query['@roles'] || delete query['@roles'];">
                        <option :value="undefined"><?= i::__('Exibir todas') ?></option>
                        <option value="saasSuperAdmin" ><?= i::__('Super Administrador da Rede') ?></option>
                        <option value="saasAdmin" ><?= i::__('Administrador da Rede') ?></option>
                        <option value="superAdmin" ><?= i::__('Super Administrador') ?></option>
                        <option value="admin" ><?= i::__('Administrador') ?></option>
                        <option v-for="role in roles.entities" v-bind:value="role.slug">{{role.name}}</option>
                    </select>
                </entities>
            </template>
            <template #default="{entity,moveEntity}">
                <panel--card-user :entity="entity"></panel--card-user>    
            </template>
        </panel--entity-tabs>
    </div>
</div>
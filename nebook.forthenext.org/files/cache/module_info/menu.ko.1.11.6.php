<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispMenuAdminSiteMap';
$info->permission = new stdClass;
$info->permission->getMenuAdminSiteMap = 'manager';
$info->permission->procMenuAdminUpdateAuth = 'manager';
$info->menu = new stdClass;
$info->menu->siteMap = new stdClass;
$info->menu->siteMap->title='사이트 메뉴 편집';
$info->menu->siteMap->type='';
$info->menu->siteDesign = new stdClass;
$info->menu->siteDesign->title='사이트 디자인 설정';
$info->menu->siteDesign->type='';
$info->action = new stdClass;
$info->action->dispMenuMenu = new stdClass;
$info->action->dispMenuMenu->type='mobile';
$info->action->dispMenuMenu->grant='guest';
$info->action->dispMenuMenu->standalone='true';
$info->action->dispMenuMenu->ruleset='';
$info->action->dispMenuMenu->method='';
$info->action->dispMenuMenu->check_csrf='true';
$info->action->dispMenuMenu->meta_noindex='false';
$info->action->dispMenuAdminMidList = new stdClass;
$info->action->dispMenuAdminMidList->type='view';
$info->action->dispMenuAdminMidList->grant='guest';
$info->action->dispMenuAdminMidList->standalone='true';
$info->action->dispMenuAdminMidList->ruleset='';
$info->action->dispMenuAdminMidList->method='';
$info->action->dispMenuAdminMidList->check_csrf='true';
$info->action->dispMenuAdminMidList->meta_noindex='false';
$info->menu->siteMap->index='dispMenuAdminSiteMap';
$info->menu->siteMap->acts[0]='dispMenuAdminSiteMap';
$info->action->dispMenuAdminSiteMap = new stdClass;
$info->action->dispMenuAdminSiteMap->type='view';
$info->action->dispMenuAdminSiteMap->grant='guest';
$info->action->dispMenuAdminSiteMap->standalone='true';
$info->action->dispMenuAdminSiteMap->ruleset='';
$info->action->dispMenuAdminSiteMap->method='';
$info->action->dispMenuAdminSiteMap->check_csrf='true';
$info->action->dispMenuAdminSiteMap->meta_noindex='false';
$info->menu->siteDesign->index='dispMenuAdminSiteDesign';
$info->menu->siteDesign->acts[0]='dispMenuAdminSiteDesign';
$info->action->dispMenuAdminSiteDesign = new stdClass;
$info->action->dispMenuAdminSiteDesign->type='view';
$info->action->dispMenuAdminSiteDesign->grant='guest';
$info->action->dispMenuAdminSiteDesign->standalone='true';
$info->action->dispMenuAdminSiteDesign->ruleset='';
$info->action->dispMenuAdminSiteDesign->method='';
$info->action->dispMenuAdminSiteDesign->check_csrf='true';
$info->action->dispMenuAdminSiteDesign->meta_noindex='false';
$info->action->getMenuAdminTplInfo = new stdClass;
$info->action->getMenuAdminTplInfo->type='model';
$info->action->getMenuAdminTplInfo->grant='guest';
$info->action->getMenuAdminTplInfo->standalone='true';
$info->action->getMenuAdminTplInfo->ruleset='';
$info->action->getMenuAdminTplInfo->method='';
$info->action->getMenuAdminTplInfo->check_csrf='true';
$info->action->getMenuAdminTplInfo->meta_noindex='false';
$info->action->getMenuAdminItemInfo = new stdClass;
$info->action->getMenuAdminItemInfo->type='model';
$info->action->getMenuAdminItemInfo->grant='guest';
$info->action->getMenuAdminItemInfo->standalone='true';
$info->action->getMenuAdminItemInfo->ruleset='';
$info->action->getMenuAdminItemInfo->method='';
$info->action->getMenuAdminItemInfo->check_csrf='true';
$info->action->getMenuAdminItemInfo->meta_noindex='false';
$info->action->getMenuAdminSiteMap = new stdClass;
$info->action->getMenuAdminSiteMap->type='model';
$info->action->getMenuAdminSiteMap->grant='guest';
$info->action->getMenuAdminSiteMap->standalone='true';
$info->action->getMenuAdminSiteMap->ruleset='';
$info->action->getMenuAdminSiteMap->method='';
$info->action->getMenuAdminSiteMap->check_csrf='true';
$info->action->getMenuAdminSiteMap->meta_noindex='false';
$info->action->getMenuAdminInstalledMenuType = new stdClass;
$info->action->getMenuAdminInstalledMenuType->type='model';
$info->action->getMenuAdminInstalledMenuType->grant='guest';
$info->action->getMenuAdminInstalledMenuType->standalone='true';
$info->action->getMenuAdminInstalledMenuType->ruleset='';
$info->action->getMenuAdminInstalledMenuType->method='';
$info->action->getMenuAdminInstalledMenuType->check_csrf='true';
$info->action->getMenuAdminInstalledMenuType->meta_noindex='false';
$info->action->getMenuAdminDetailSetup = new stdClass;
$info->action->getMenuAdminDetailSetup->type='model';
$info->action->getMenuAdminDetailSetup->grant='guest';
$info->action->getMenuAdminDetailSetup->standalone='true';
$info->action->getMenuAdminDetailSetup->ruleset='';
$info->action->getMenuAdminDetailSetup->method='';
$info->action->getMenuAdminDetailSetup->check_csrf='true';
$info->action->getMenuAdminDetailSetup->meta_noindex='false';
$info->action->procMenuAdminInsert = new stdClass;
$info->action->procMenuAdminInsert->type='controller';
$info->action->procMenuAdminInsert->grant='guest';
$info->action->procMenuAdminInsert->standalone='true';
$info->action->procMenuAdminInsert->ruleset='insertMenu';
$info->action->procMenuAdminInsert->method='';
$info->action->procMenuAdminInsert->check_csrf='true';
$info->action->procMenuAdminInsert->meta_noindex='false';
$info->action->procMenuAdminUpdate = new stdClass;
$info->action->procMenuAdminUpdate->type='controller';
$info->action->procMenuAdminUpdate->grant='guest';
$info->action->procMenuAdminUpdate->standalone='true';
$info->action->procMenuAdminUpdate->ruleset='updateMenuTitle';
$info->action->procMenuAdminUpdate->method='';
$info->action->procMenuAdminUpdate->check_csrf='true';
$info->action->procMenuAdminUpdate->meta_noindex='false';
$info->action->procMenuAdminDelete = new stdClass;
$info->action->procMenuAdminDelete->type='controller';
$info->action->procMenuAdminDelete->grant='guest';
$info->action->procMenuAdminDelete->standalone='true';
$info->action->procMenuAdminDelete->ruleset='';
$info->action->procMenuAdminDelete->method='';
$info->action->procMenuAdminDelete->check_csrf='true';
$info->action->procMenuAdminDelete->meta_noindex='false';
$info->action->procMenuAdminInsertItem = new stdClass;
$info->action->procMenuAdminInsertItem->type='controller';
$info->action->procMenuAdminInsertItem->grant='guest';
$info->action->procMenuAdminInsertItem->standalone='true';
$info->action->procMenuAdminInsertItem->ruleset='insertMenuItem';
$info->action->procMenuAdminInsertItem->method='';
$info->action->procMenuAdminInsertItem->check_csrf='true';
$info->action->procMenuAdminInsertItem->meta_noindex='false';
$info->action->procMenuAdminUpdateItem = new stdClass;
$info->action->procMenuAdminUpdateItem->type='controller';
$info->action->procMenuAdminUpdateItem->grant='guest';
$info->action->procMenuAdminUpdateItem->standalone='true';
$info->action->procMenuAdminUpdateItem->ruleset='updateMenuItem';
$info->action->procMenuAdminUpdateItem->method='';
$info->action->procMenuAdminUpdateItem->check_csrf='true';
$info->action->procMenuAdminUpdateItem->meta_noindex='false';
$info->action->procMenuAdminButtonUpload = new stdClass;
$info->action->procMenuAdminButtonUpload->type='controller';
$info->action->procMenuAdminButtonUpload->grant='guest';
$info->action->procMenuAdminButtonUpload->standalone='true';
$info->action->procMenuAdminButtonUpload->ruleset='';
$info->action->procMenuAdminButtonUpload->method='';
$info->action->procMenuAdminButtonUpload->check_csrf='true';
$info->action->procMenuAdminButtonUpload->meta_noindex='false';
$info->action->procMenuAdminInsertItemForAdminMenu = new stdClass;
$info->action->procMenuAdminInsertItemForAdminMenu->type='controller';
$info->action->procMenuAdminInsertItemForAdminMenu->grant='guest';
$info->action->procMenuAdminInsertItemForAdminMenu->standalone='true';
$info->action->procMenuAdminInsertItemForAdminMenu->ruleset='';
$info->action->procMenuAdminInsertItemForAdminMenu->method='';
$info->action->procMenuAdminInsertItemForAdminMenu->check_csrf='true';
$info->action->procMenuAdminInsertItemForAdminMenu->meta_noindex='false';
$info->action->procMenuAdminDeleteItem = new stdClass;
$info->action->procMenuAdminDeleteItem->type='controller';
$info->action->procMenuAdminDeleteItem->grant='guest';
$info->action->procMenuAdminDeleteItem->standalone='true';
$info->action->procMenuAdminDeleteItem->ruleset='';
$info->action->procMenuAdminDeleteItem->method='';
$info->action->procMenuAdminDeleteItem->check_csrf='true';
$info->action->procMenuAdminDeleteItem->meta_noindex='false';
$info->action->procMenuAdminMakeXmlFile = new stdClass;
$info->action->procMenuAdminMakeXmlFile->type='controller';
$info->action->procMenuAdminMakeXmlFile->grant='guest';
$info->action->procMenuAdminMakeXmlFile->standalone='true';
$info->action->procMenuAdminMakeXmlFile->ruleset='';
$info->action->procMenuAdminMakeXmlFile->method='';
$info->action->procMenuAdminMakeXmlFile->check_csrf='true';
$info->action->procMenuAdminMakeXmlFile->meta_noindex='false';
$info->action->procMenuAdminMoveItem = new stdClass;
$info->action->procMenuAdminMoveItem->type='controller';
$info->action->procMenuAdminMoveItem->grant='guest';
$info->action->procMenuAdminMoveItem->standalone='true';
$info->action->procMenuAdminMoveItem->ruleset='';
$info->action->procMenuAdminMoveItem->method='';
$info->action->procMenuAdminMoveItem->check_csrf='true';
$info->action->procMenuAdminMoveItem->meta_noindex='false';
$info->action->procMenuAdminCopyItem = new stdClass;
$info->action->procMenuAdminCopyItem->type='controller';
$info->action->procMenuAdminCopyItem->grant='guest';
$info->action->procMenuAdminCopyItem->standalone='true';
$info->action->procMenuAdminCopyItem->ruleset='';
$info->action->procMenuAdminCopyItem->method='';
$info->action->procMenuAdminCopyItem->check_csrf='true';
$info->action->procMenuAdminCopyItem->meta_noindex='false';
$info->action->procMenuAdminArrangeItem = new stdClass;
$info->action->procMenuAdminArrangeItem->type='controller';
$info->action->procMenuAdminArrangeItem->grant='guest';
$info->action->procMenuAdminArrangeItem->standalone='true';
$info->action->procMenuAdminArrangeItem->ruleset='';
$info->action->procMenuAdminArrangeItem->method='';
$info->action->procMenuAdminArrangeItem->check_csrf='true';
$info->action->procMenuAdminArrangeItem->meta_noindex='false';
$info->action->procMenuAdminUploadButton = new stdClass;
$info->action->procMenuAdminUploadButton->type='controller';
$info->action->procMenuAdminUploadButton->grant='guest';
$info->action->procMenuAdminUploadButton->standalone='true';
$info->action->procMenuAdminUploadButton->ruleset='';
$info->action->procMenuAdminUploadButton->method='';
$info->action->procMenuAdminUploadButton->check_csrf='true';
$info->action->procMenuAdminUploadButton->meta_noindex='false';
$info->action->procMenuAdminDeleteButton = new stdClass;
$info->action->procMenuAdminDeleteButton->type='controller';
$info->action->procMenuAdminDeleteButton->grant='guest';
$info->action->procMenuAdminDeleteButton->standalone='true';
$info->action->procMenuAdminDeleteButton->ruleset='';
$info->action->procMenuAdminDeleteButton->method='';
$info->action->procMenuAdminDeleteButton->check_csrf='true';
$info->action->procMenuAdminDeleteButton->meta_noindex='false';
$info->action->procMenuAdminAllActList = new stdClass;
$info->action->procMenuAdminAllActList->type='controller';
$info->action->procMenuAdminAllActList->grant='guest';
$info->action->procMenuAdminAllActList->standalone='true';
$info->action->procMenuAdminAllActList->ruleset='';
$info->action->procMenuAdminAllActList->method='';
$info->action->procMenuAdminAllActList->check_csrf='true';
$info->action->procMenuAdminAllActList->meta_noindex='false';
$info->action->procMenuAdminUpdateAuth = new stdClass;
$info->action->procMenuAdminUpdateAuth->type='controller';
$info->action->procMenuAdminUpdateAuth->grant='guest';
$info->action->procMenuAdminUpdateAuth->standalone='true';
$info->action->procMenuAdminUpdateAuth->ruleset='';
$info->action->procMenuAdminUpdateAuth->method='';
$info->action->procMenuAdminUpdateAuth->check_csrf='true';
$info->action->procMenuAdminUpdateAuth->meta_noindex='false';
return $info;
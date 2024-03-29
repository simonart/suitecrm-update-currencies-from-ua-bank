<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Валюта',
    'LBL_LIST_FORM_TITLE' => 'Валюта',
    'LBL_CURRENCY' => 'Валюта',
    'LBL_ADD' => 'Добавить',
    'LBL_MERGE' => 'Объединить',
    'LBL_MERGE_TXT' => 'Пожалуйста, выберите валюты, которые вы хотите отображать как текущие. В результате будут удалены все оставшиеся валюты, а все значения будут ассоциированы с выбранной валютой.',
    'LBL_US_DOLLAR' => 'Доллар США',
    'LBL_DELETE' => 'Удалить',
    'LBL_LIST_SYMBOL' => 'Символ валюты',
    'LBL_LIST_NAME' => 'Название валюты',
    'LBL_LIST_ISO4217' => 'Код ISO-4217',
    'LBL_LIST_ISO4217_HELP' => 'Введите три символа кода валюты в соответствии со стандартом ISO 4217.',
    'LBL_UPDATE' => 'Обновление',
    'LBL_LIST_RATE' => 'Курс обмена',
    'LBL_LIST_RATE_HELP' => 'Курс обмена 0.5 для Евро означает, что 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'Статус',
    'LNK_NEW_CONTACT' => 'Новый контакт',
    'LNK_NEW_ACCOUNT' => 'Новый контрагент',
    'LNK_NEW_OPPORTUNITY' => 'Новая сделка',
    'LNK_NEW_CASE' => 'Новое обращение',
    'LNK_NEW_NOTE' => 'Создать заметку или вложение',
    'LNK_NEW_CALL' => 'Новый звонок',
    'LNK_NEW_EMAIL' => 'Новое E-mail',
    'LNK_NEW_MEETING' => 'Новая встреча',
    'LNK_NEW_TASK' => 'Создать задачу',
    'NTC_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить эту запись? При доступе к любой записи, использующей эту валюту, произойдёт её конвертация в валюту по умолчанию. Лучше всего поставить статус "Не активна".',
    'LBL_BELOW_MIN' => 'Курс обмена должен быть больше 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Активна',
            'Inactive' => 'Не активна',
        ),
    'LBL_CREATED_BY' => 'Кем создано',
    'LBL_UPDATED' => 'Обновлено: ',
    'LBL_EDIT_LAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,
    'LBL_ADDITINAL_CURSE' => 'Добавочный курс, %',
    'LBL_ADDITINAL_CURSE_DESC' => 'Указанный % будет добавляться к курсу гривны в отношении других валют при обновлении',
);

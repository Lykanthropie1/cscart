<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

if ($mode === 'view') {

    $params = $_REQUEST;

    if ($items_per_page = 10) {
        $params['items_per_page'] = $items_per_page;
    }

    $params['user_id'] = Tygh::$app['session']['auth']['user_id'];

    list($departments, $search) = fn_get_departments($params, Registry::get('settings.Appearance.products_per_page'), CART_LANGUAGE);

    if (isset($search['page']) && ($search['page'] > 1) && empty($departments)) {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    foreach ($departments as $department => $key) {
        if($key['director_id']) {
            $departments[$department]['director_id'] = fn_get_user_short_info($departments[$department]['director_id']);
        } else {
            $departments[$department]['director_id'] = '';
        }
        $departments = $departments;
    }

    Tygh::$app['view']->assign('departments', $departments);
    Tygh::$app['view']->assign('search', $search);
    Tygh::$app['view']->assign('columns', 3);


    fn_add_breadcrumb("Отделы");

} elseif ($mode === 'info') {
    $department_data = [];
    $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] : 0;
    $department_data = fn_get_department_data($department_id, CART_LANGUAGE);
    if (empty($department_data)) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    Tygh::$app['view']->assign('department_data', $department_data);

    fn_add_breadcrumb($department_data['department']);

    foreach ($department_data['workers_ids'] as $worker => $id) {
        $department_data['workers_ids'][$worker] = fn_get_user_short_info($id);
        $worker++;
    }

    Tygh::$app['view']->assign('workers', $department_data['workers_ids']);
//    Tygh::$app['view']->assign('search', $search);
//    Tygh::$app['view']->assign('selected_layout', $selected_layout);
}
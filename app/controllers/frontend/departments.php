<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

if ($mode === 'view') {
    $params = $_REQUEST;

    if ($items_per_page = 6) {
        $params['items_per_page'] = $items_per_page;
    }

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
    }

    Tygh::$app['view']->assign('departments', $departments);
    Tygh::$app['view']->assign('search', $search);
    Tygh::$app['view']->assign('columns', 3);

    fn_add_breadcrumb("Отделы");

} elseif ($mode === 'info') {
    $params = $_REQUEST;

    if ($items_per_page = 10) {
        $params['items_per_page'] = $items_per_page;
    }

    $department_data = [];
    $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] : 0;
    $department_data = fn_get_department_data($department_id, CART_LANGUAGE);

    if (empty($department_data)) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    $params['user_id'] = Tygh::$app['session']['auth']['user_id'];

    if (empty($params['user_id'])) {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    if (!empty($department_data ['workers_ids'])) {
        $params['user_id'] = $department_data ['workers_ids'];
        list($users, $search) = fn_get_users($params, $auth, Registry::get('settings.Appearance.admin_elements_per_page'));
    }

    Tygh::$app['view']->assign('department_data', $department_data);
    Tygh::$app['view']->assign('search', $search);
    Tygh::$app['view']->assign('workers', $users);
    fn_add_breadcrumb($department_data['department']);
}

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
        };
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

    fn_add_breadcrumb($department_data['collection']);

    $params = $_REQUEST;
    $params['extend'] = ['description'];
    $params['item_ids'] = !empty($department_data['workers_ids']) ? implode(',', $department_data['workers_ids']) : -1;

    if ($items_per_page = fn_change_session_param(Tygh::$app['session']['search_params'], $_REQUEST, 'items_per_page')) {
        $params['items_per_page'] = $items_per_page;
    }
    if ($sort_by = fn_change_session_param(Tygh::$app['session']['search_params'], $_REQUEST, 'sort_by')) {
        $params['sort_by'] = $sort_by;
    }
    if ($sort_order = fn_change_session_param(Tygh::$app['session']['search_params'], $_REQUEST, 'sort_order')) {
        $params['sort_order'] = $sort_order;
    }

    list($products, $search) = fn_get_products($params, Registry::get('settings.Appearance.products_per_page'));


    fn_filters_handle_search_result($params, $products, $search);

    fn_gather_additional_products_data($products, [
        'get_icon'      => true,
        'get_detailed'  => true,
        'get_options'   => true,
        'get_discounts' => true,
        'get_features'  => false
    ]);

    $selected_layout = fn_get_products_layout($_REQUEST);
    Tygh::$app['view']->assign('products', $products);
    Tygh::$app['view']->assign('search', $search);
    Tygh::$app['view']->assign('selected_layout', $selected_layout);
}

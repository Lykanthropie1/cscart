<?php

use Tygh\Tygh;
use Tygh\Registry;

defined('BOOTSTRAP') or die('Access denied');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($mode === 'update_department') {
        $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] : 0;
        $data = !empty($_REQUEST['department_data']) ? $_REQUEST['department_data'] : [];
        $department_id = fn_update_department($data, $department_id );

        if (!empty($department_id)) {
            return [CONTROLLER_STATUS_OK, 'departments.update_department?department_id=' . $department_id];
        } else {
            return [CONTROLLER_STATUS_OK, 'departments.add_department'];
        }

    }if ($mode === 'adding_department') {

        $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] : 0;
        $data = !empty($_REQUEST['department_data']) ? $_REQUEST['department_data'] : [];
        $department_id = fn_add_department($data, $department_id );

        if (!empty($department_id)) {
            return [CONTROLLER_STATUS_OK, 'departments.update_department?department_id=' . $department_id];
        } else {
            return [CONTROLLER_STATUS_OK, 'departments.add_department'];
        }

    }elseif ($mode === 'update_departments') {

        if (!empty($_REQUEST['departments_data'])) {
            foreach ($_REQUEST['departments_data'] as $department_id => $data) {
                fn_update_departments($data, $department_id );
            }
        }

        return [CONTROLLER_STATUS_OK, 'departments.manage'];

    } elseif ($mode === 'delete_department'){

        $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] : 0;
        fn_delete_department($department_id);

        return [CONTROLLER_STATUS_OK, 'departments.manage'];

    } elseif ($mode === 'delete_departments') {

        if (!empty($_REQUEST['department_ids'])) {
            foreach ($_REQUEST['department_ids'] as $department_id) {
                fn_delete_department($department_id);
            }
        }

        return [CONTROLLER_STATUS_OK, 'departments.manage'];
    }
}

//GET controllers for departments

if ($mode === 'manage') {

    list($departments, $search) = fn_get_departments($_REQUEST, 3, DESCR_SL);

    Tygh::$app['view']->assign('departments', $departments);
    Tygh::$app['view']->assign('search', $search);

}elseif ($mode === 'add_department' || $mode === 'update_department') {

    $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] : 0;
    $department_data = fn_get_department_data($department_id, DESCR_SL);

    if (empty($department_data) && mode === 'update') {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    Tygh::$app['view']->assign([

        'department_data' => $department_data,
        'd_info' => !empty($department_data)? fn_get_user_short_info($department_data['director_id']) : [],
        'w_info' => !empty($department_data)? fn_get_user_short_info($department_data['worker_id']) : []

    ]);

}
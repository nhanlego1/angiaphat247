<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 10/12/16
 * Time: 8:10 PM
 */

/**
 * mapping array key value
 */


function agp_getValue($data, $key, $value_default = '')
{
    if (is_null($data) || empty($data)) {
        return $value_default;
    }
    $sub_fields = explode('.', $key);
    foreach ($sub_fields as $k) {
        if (is_array($data)) {
            $data = isset($data[$k]) ? ($data[$k]) : $value_default;
        } elseif (is_object($data)) {
            $data = isset($data->{$k}) ? ($data->{$k}) : $value_default;
        } else {
            $data = $value_default;
            break;
        }
    }
    return $data;
}

/**
 * @param $variables
 * @return string
 */
function agp_breadcrumb($variables)
{
    $breadcrumb = $variables['breadcrumb'];
    //dsm($breadcrumb);
    $breadcrumbs = array();

    //custom breadcrumb
    //check langding page
    $custom_bread = array();

    $breadcrumbs[] = '<li><a href="' . url('<front>') . '" title="HOME" target="_self"><i class="fa fa-home"></i></a></li>';
    $breadcrumbs[] = $custom_bread[] = '<li><a href="' . url($_GET['q']) . '" title="" target="_self">'.drupal_get_title().'</a></li>';


    if (!empty($breadcrumbs)) {

        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

        $output .= '<ul class="breadcrumb">' . implode(' ', $breadcrumbs) . '</ul>';
        return $output;
    }
}

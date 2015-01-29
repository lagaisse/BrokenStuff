<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'apiv1/reports_get' => array(
        array(
            'field' => 'id',
            'label' => 'identifier',
            'rules' => 'required|is_natural'
            )
        ),
    'apiv1/reports_list_get' => array(
        array(
            'field' => 'since_id',
            'label' => 'Identifier',
            'rules' => 'is_natural'
            ),
        array(
            'field' => 'count',
            'label' => 'Number',
            'rules' => 'is_natural'
            )
        ),
    'apiv1/reports_geo_get' => array(
        array(
            'field' => 'latitude',
            'label' => 'latitude',
            'rules' => 'required|numeric_positive'
            ),
        array(
            'field' => 'longitude',
            'label' => 'longitude',
            'rules' => 'required|numeric_positive'
            ),
        array(
            'field' => 'distance',
            'label' => 'distance',
            'rules' => 'required|numeric_positive'
            )
        )
    );
?>
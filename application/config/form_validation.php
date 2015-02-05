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
            'rules' => 'required|numeric'
            ),
        array(
            'field' => 'longitude',
            'label' => 'longitude',
            'rules' => 'required|numeric'
            ),
        array(
            'field' => 'distance',
            'label' => 'distance',
            'rules' => 'required|numeric_positive'
            ),
        array(
            'field' => 'start',
            'label' => 'start',
            'rules' => 'is_natural'
            ),
        array(
            'field' => 'count',
            'label' => 'Number',
            'rules' => 'is_natural'
            )
        ),
    'apiv1/reports_post' => array(
        array(
            'field' => 'name',
            'label' => 'name',
            'rules' => 'required'
            ),
        array(
            'field' => 'location1',
            'label' => 'location1',
            'rules' => 'required|alpha_numeric'
            ),
        array(
            'field' => 'location2',
            'label' => 'location2',
            'rules' => 'required|alpha_numeric'
            ),
        array(
            'field' => 'geolocation[latitude]',
            'label' => 'latitude',
            'rules' => 'numeric'
            ),
        array(
            'field' => 'geolocation[longitude]',
            'label' => 'longitude',
            'rules' => 'numeric'
            ),
        array(
            'field' => 'datetime',
            'label' => 'datetime',
            'rules' => 'required|is_natural'
            )
        ),
    'apiv1/pictures_post' => array(
        array(
            'field' => 'id_reports',
            'label' => 'id',
            'rules' => 'required|is_natural'
            ),
        array(
            'field' => 'picture',
            'label' => 'picture',
            'rules' => 'required|image_base64|image_data_base64|valid_base64'
            ),
        array(
            'field' => 'crop[top]',
            'label' => 'top position',
            'rules' => 'is_natural'
            ),
        array(
            'field' => 'crop[left]',
            'label' => 'left position',
            'rules' => 'is_natural'
            ),
        array(
            'field' => 'crop[width]',
            'label' => 'width',
            'rules' => 'is_natural'
            ),
        array(
            'field' => 'crop[height]',
            'label' => 'height',
            'rules' => 'is_natural'
            )
        ),
    'apiv1/location_get' => array(
        array(
            'field' => 'id',
            'label' => 'location',
            'rules' => 'required|alpha_numeric'
            )
        )


    );
<?php

function acf_mission_statement()
{
    return array(
        array(
            'key' => 'field_626aca39f562z',
            'label' => 'Mission Statement',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_6182f5e7311cd',
            'label' => 'Mission Header',
            'name' => 'mission_header',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_626ac878121cz',
            'label' => 'Mission Statement',
            'name' => 'mission_statement',
            'type' => 'textarea',
            'instructions' => '*Max 500 characters',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => 500,
            'rows' => 4,
            'new_lines' => 'br',
        ),
    );
}

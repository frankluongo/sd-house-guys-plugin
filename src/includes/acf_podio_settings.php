<?php
if (function_exists('acf_add_local_field_group')) :

  $location = array(
    array(
      array(
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'theme-general-settings',
      ),
    ),
  );

  $podio_tab = array(
    'key' => 'field_6174386fd0731',
    'label' => 'Podio Form',
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
  );

  // Podio Form
  // ============================================================================

  $podio_form_options = array(
    'key' => 'field_61743705d0726',
    'label' => 'Podio Form Details',
    'name' => 'podio_form_details',
    'type' => 'group',
    'instructions' => '',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => array(
      'width' => '',
      'class' => '',
      'id' => '',
    ),
    'layout' => 'block',
    'sub_fields' => array(
      array(
        'key' => 'field_6174370fd0727',
        'label' => 'Section Title (Optional)',
        'name' => 'section_title',
        'type' => 'text',
        'instructions' => 'Displays when the form is placed on a page in a section.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
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
        'key' => 'field_61743728d0728',
        'label' => 'Form Title (Optional)',
        'name' => 'form_title',
        'type' => 'text',
        'instructions' => 'Displays at the top of the form.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 'Receive My Cash Offer',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_61743741d0729',
        'label' => 'Form ID (Required)',
        'name' => 'form_id',
        'type' => 'text',
        'instructions' => 'The Form ID that Podio uses to keep track of the form.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 1710114,
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_61743767d072a',
        'label' => 'App ID',
        'name' => 'app_id',
        'type' => 'text',
        'instructions' => 'Your App ID for your Podio Account.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => 23706431,
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_61743782d072b',
        'label' => 'Form Fields',
        'name' => 'form_fields',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'block',
        'button_label' => 'Add Field',
        'sub_fields' => array(
          array(
            'key' => 'field_617437a2d072c',
            'label' => 'Label',
            'name' => 'label',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
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
            'key' => 'field_617437d6d072d',
            'label' => 'Slug',
            'name' => 'slug',
            'type' => 'text',
            'instructions' => 'The hyphenated, all lowercase value for a form Label',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
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
            'key' => 'field_617437ecd072e',
            'label' => 'Input Type',
            'name' => 'input_type',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'email' => 'Email',
              'tel' => 'Telephone',
              'text' => 'Text',
            ),
            'default_value' => 'text',
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
          ),
          array(
            'key' => 'field_6174382cd072f',
            'label' => 'Required?',
            'name' => 'required',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
        ),
      ),
    ),
  );

  // ============================================================================

  acf_add_local_field_group(array(
    'key' => 'group_theme_settings',
    'title' => 'Theme Settings',
    'fields' => array(
      $podio_tab,
      $podio_form_options
    ),
    'location' => $location,
    'menu_order' => 0,
  ));

// ============================================================================

endif;

<?php

theme_option()
    // ->setField([
    //     'id'         => 'copyright',
    //     'section_id' => 'opt-text-subsection-general',
    //     'type'       => 'text',
    //     'label'      => __('Copyright'),
    //     'attributes' => [
    //         'name'    => 'copyright',
    //         'value'   => '© 2021 Laravel Technologies. All right reserved.',
    //         'options' => [
    //             'class'        => 'form-control',
    //             'placeholder'  => __('Change copyright'),
    //             'data-counter' => 250,
    //         ],
    //     ],
    //     'helper'     => __('Copyright on footer of site'),
    // ])
    ->setField([
        'id'         => 'primary_font',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'googleFonts',
        'label'      => __('Primary font'),
        'attributes' => [
            'name'  => 'primary_font',
            'value' => 'Roboto',
        ],
    ])
    ->setField([
        'id'         => 'primary_color',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'customColor',
        'label'      => __('Primary color'),
        'attributes' => [
            'name'  => 'primary_color',
            'value' => '#ff2b4a',
        ],
    ])
    ->setField([
        'id'         => 'hotline',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => 'Hotline',
        'attributes' => [
            'name'  => 'hotline',
            'value' => null,
            'options' => [
                            'class'       => 'form-control',
                            'placeholder'  => __('enter hotline...')
                        ],
        ],
        'helper' => __('hotline'),
    ])
    ->setSection([ // Set section with no field
        'title' => __('Footer infomation'),
        'desc' => __('Footer infomation'),
        'id' => 'footer_left',
        'subsection' => true,
        'icon' => 'fa fa-bars',
    ])
    ->setField([
        'id'         => 'logo_footer',
        'section_id' => 'footer_left',
        'type'       => 'mediaImage',
        'label'      => 'LOGO footer',
        'attributes' => [
            'name'  => 'logo_footer',
            'value' => null,
        ],
        'helper' => __('picture size(152x46)px'),
    ])

    ->setField([
        'id'         => 'footer-title',
        'section_id' => 'footer_left',
        'type'       => 'text',
        'label'      => 'Footer Title',
        'attributes' => [
            'name'  => 'footer-title',
            'value' => null,
            'options' => [
                            'class'       => 'form-control',
                            'placeholder'  => __('enter title...')
                        ],
        ],
        'helper' => __('Enter title under logo '),
    ])
    ->setField([
        'id'         => 'footer-map-image',
        'section_id' => 'footer_left',
        'type'       => 'mediaImage',
        'label'      => 'Footer Map Image',
        'attributes' => [
            'name'  => 'footer-map-image',
            'value' => null,
        ],
        'helper' => __('picture size(100x102)px'),
    ])
    ->setField([
        'id'         => 'footer-title-office',
        'section_id' => 'footer_left',
        'type'       => 'text',
        'label'      => 'Footer Office Title',
        'attributes' => [
            'name'  => 'footer-title-office',
            'value' => null,
            'options' => [
                            'class'       => 'form-control',
                            'placeholder'  => __('enter title...')
                        ],
        ],
        'helper' => __('Enter title'),
    ])
    ->setField([
        'id'         => 'footer-position',
        'section_id' => 'footer_left',
        'type'       => 'text',
        'label'      => 'Footer Office Position',
        'attributes' => [
            'name'  => 'footer-office-position',
            'value' => null,
            'options' => [
                            'class'       => 'form-control',
                            'placeholder'  => __('enter position...')
                        ],
        ],
        'helper' => __('Enter Position'),
    ])
    ->setField([
        'id'         => 'footer-phone',
        'section_id' => 'footer_left',
        'type'       => 'text',
        'label'      => 'Phone',
        'attributes' => [
            'name'  => 'footer-phone',
            'value' => null,
            'options' => [
                            'class'       => 'form-control',
                            'placeholder'  => __('enter phone number...')
                        ],
        ],
        'helper' => __('Phone Number'),
    ])
    ->setField([
        'id'         => 'footer-international',
        'section_id' => 'footer_left',
        'type'       => 'text',
        'label'      => 'Phone International',
        'attributes' => [
            'name'  => 'footer-phone-international',
            'value' => null,
            'options' => [
                            'class'       => 'form-control',
                            'placeholder'  => __('enter phone number...')
                        ],
        ],
        'helper' => __('Phone Number'),
    ])
    ->setField([
        'id'         => 'footer-email',
        'section_id' => 'footer_left',
        'type'       => 'text',
        'label'      => 'Email',
        'attributes' => [
            'name'  => 'footer-email',
            'value' => null,
            'options' => [
                            'class'       => 'form-control',
                            'placeholder'  => __('enter email...')
                        ],
        ],
        'helper' => __('Enter Email'),
    ])
    ->setField([
        'id'         => 'footer-social',
        'section_id' => 'footer_left',
        'type'       => 'text',
        'label'      => 'Link Facebook',
        'attributes' => [
            'name'  => 'footer-social',
            'value' => null,
            'options' => [
                            'class'       => 'form-control',
                            'placeholder'  => __('enter link...')
                        ],
        ],
        'helper' => __('Enter Link'),
    ])
    ->setField([
        'id'         => 'footer-copyright',
        'section_id' => 'footer_left',
        'type'       => 'text',
        'label'      => __('Copyright'),
        'attributes' => [
            'name'    => 'footer-copyright',
            'value' => null,
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Change copyright'),
                'data-counter' => 250,
            ],
        ],
        'helper'     => __('Copyright on footer of site'),
    ]);



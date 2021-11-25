<?php

function reign_reset_customizer_to_default() {
    $default_value_set = array(
        'reign_body_typography',
        'reign_h1_typography',
        'reign_h2_typography',
        'reign_h3_typography',
        'reign_h4_typography',
        'reign_h5_typography',
        'reign_h6_typography',
        'reign_quote_typography',
        'reign_header_bg_color',
        'reign_header_nav_bg_color',
        'reign_header_bg_color_on_scroll',
        'reign_header_main_menu_bg_hover_color',
        'reign_header_main_menu_bg_active_color',
        'reign_header_main_menu_text_hover_color',
        'reign_header_main_menu_text_active_color',
        'reign_header_icons_set',
        'reign_header_mobile_menu_bg_color',
        'reign_header_mobile_menu_text_color',
        'reign_header_mobile_menu_text_hover_color',
        'reign_header_sub_menu_bg_color',
        'reign_header_sub_menu_text_hover_color',
        'reign_header_sub_menu_bg_hover_color',
        'reign_header_sticky_menu_bg_color',
        'reign_sticky_header_logo_color',
        'reign_header_sticky_menu_text_color',
        'reign_header_sticky_menu_text_hover_color',
        'reign_header_sticky_menu_text_active_color',
        'reign_header_sticky_menu_bg_hover_color',
        'reign_header_sticky_menu_bg_active_color',
        'reign_sticky_header_icon_color',
        'reign_sticky_header_icon_hover_color',
        'reign_footer_widget_area_bg_color',
        'reign_footer_widget_title_color',
        'reign_footer_widget_text_color',
        'reign_footer_widget_link_color',
        'reign_footer_widget_link_hover_color',
        'reign_footer_copyright_bg_color',
        'reign_footer_copyright_text_color',
        'reign_footer_copyright_link_color',
        'reign_footer_copyright_link_hover_color',
        'reign_colors_theme',
        'reign_colors_links',
        'reign_colors_links_hover',
        'reign_colors_button_bg',
        'reign_colors_button_bg_hover',
        'reign_accent_color',
        'reign_accent_hover_color',
        'reign_colors_button_text',
        'reign_colors_button_text_hover',
        'reign_colors_button_border',
        'reign_header_search_option',
    );
    foreach ($default_value_set as $key) {
        remove_theme_mod($key);
    }
}

function reign_get_customizer_default_value_set() {
    $default_value_set = array(
        'reign_title_tagline_typography' => array(
            'font-family' => '',
            'variant' => '500',
            'font-size' => '36px',
            // 'line-height'    => '0',
            'letter-spacing' => '0',
            //'color'			 => '#ffffff',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_header_main_menu_font' => array(
            'font-family' => '',
            'variant' => '',
            'font-size' => '16px',
            // 'line-height'    => '45px',
            'letter-spacing' => '0',
            //'color'			 => '#ffffff',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_header_sub_menu_font' => array(
            'font-family' => '',
            'variant' => '',
            'font-size' => '14px',
            // 'line-height'    => '20px',
            'letter-spacing' => '0',
            //'color'			 => '#252525',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_header_mobile_menu_font' => array(
            'font-family' => '',
            'variant' => '400',
            'font-size' => '',
            'line-height' => '24',
            'letter-spacing' => '0',
            'color' => '#ffffff',
            'text-transform' => 'none',
            'text-align' => 'left',
        ),
        'reign_body_typography' => array(
            'font-family' => '',
            'variant' => '400',
            'font-size' => '16px',
            //'line-height'	 => '22px',
            'letter-spacing' => '0',
            //'color'			 => '#252525',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_h1_typography' => array(
            'font-family' => '',
            'variant' => '500',
            'font-size' => '32px',
            'line-height' => '48px',
            'letter-spacing' => '0',
            //'color'			 => '#252525',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_h2_typography' => array(
            'font-family' => '',
            'variant' => '500',
            'font-size' => '24px',
            'line-height' => '32px',
            'letter-spacing' => '0',
            //'color'			 => '#252525',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_h3_typography' => array(
            'font-family' => '',
            'variant' => '500',
            'font-size' => '22px',
            'line-height' => '30px',
            'letter-spacing' => '0',
            //'color'			 => '#252525',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_h4_typography' => array(
            'font-family' => '',
            'variant' => '500',
            'font-size' => '20px',
            'line-height' => '28px',
            'letter-spacing' => '0',
            //'color'			 => '#252525',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_h5_typography' => array(
            'font-family' => '',
            'variant' => '500',
            'font-size' => '16px',
            'line-height' => '24px',
            'letter-spacing' => '0',
            //'color'			 => '#252525',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_h6_typography' => array(
            'font-family' => '',
            'variant' => '500',
            'font-size' => '12px',
            'line-height' => '18px',
            'letter-spacing' => '0',
            //'color'			 => '#252525',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_quote_typography' => array(
            'font-family' => 'Lora',
            'variant' => '600',
            'font-size' => '14px',
            'letter-spacing' => '0',
            'text-transform' => 'none',
            'text-align' => 'inherit',
        ),
        'reign_header_bg_color' => '#ffffff',
        'reign_header_nav_bg_color' => '#ffffff',
        'reign_header_bg_color_on_scroll' => '#ffffff',
        'reign_header_main_menu_text_color' => '#ffffff',
        //'reign_header_main_menu_bg_hover_color'			 => '#ffffff',
        //'reign_header_main_menu_bg_active_color'			 => '#ffffff',
        //'reign_header_main_menu_text_hover_color'			 => '#3b5998',
        //'reign_header_main_menu_text_active_color'		 => '#3b5998',
        'reign_header_icons_set' => reign_header_default_icons_set(),
        //'reign_header_icon_color'							 => '#ffffff',
        //'reign_header_icon_hover_color'					 => '#ffffff',
        'shiftnav_config_togglebar_mobile_header_icon_set' => reign_mobile_header_default_icons_set(),
        'reign_header_mobile_menu_bg_color' => '#252525',
        'reign_header_mobile_menu_text_color' => '#ffffff',
        'reign_header_mobile_menu_text_hover_color' => '#1d76da',
        //'reign_header_sub_menu_bg_color'					 => '#ffffff',
        'reign_header_sub_menu_text_color' => '#000000',
        //'reign_header_sub_menu_text_hover_color'			 => '#e4e4e4',
        //'reign_header_sub_menu_bg_hover_color'			 => '#3b5998',
        'reign_header_sticky_menu_bg_color' => '#ffffff',
        'reign_sticky_header_logo_color' => '#153045',
        'reign_header_sticky_menu_text_color' => '#153045',
        'reign_header_sticky_menu_text_hover_color' => '#1d76da',
        'reign_header_sticky_menu_text_active_color' => '#1d76da',
        'reign_header_sticky_menu_bg_hover_color' => '#ffffff',
        'reign_header_sticky_menu_bg_active_color' => '#ffffff',
        'reign_sticky_header_icon_color' => '#153045',
        'reign_sticky_header_icon_hover_color' => '#153045',
        'reign_header_topbar_enable' => '1',
        'reign_header_topbar_info_links' => reign_header_topbar_default_info_links(),
        'reign_header_topbar_social_links' => reign_header_topbar_default_social_links(),
        //'reign_header_topbar_bg_color'					 => '#3B5998',
        //'reign_header_topbar_text_color'					 => '#ffffff',
        //'reign_header_topbar_text_hover_color'			 => '#aac2f5',
        //'reign_footer_widget_area_bg_color'				 => '#000000',
        //'reign_footer_widget_title_color'					 => '#ffffff',
        //'reign_footer_widget_text_color'					 => '#ffffff',
        //'reign_footer_widget_link_color'					 => '#ffffff',
        //'reign_footer_widget_link_hover_color'			 => '#399dff',
        //'reign_footer_copyright_bg_color'					 => '#3B5998',
        //'reign_footer_copyright_text_color'				 => '#ffffff',
        //'reign_footer_copyright_link_color'				 => '#ffffff',
        //'reign_footer_copyright_link_hover_color'			 => '#aac2f5',
        'reign_colors_theme' => '#1d76da',
        'reign_colors_links' => '#ffffff',
        'reign_colors_links_hover' => '#1d76da',
        'reign_colors_button_bg' => '#1d76da',
        'reign_colors_button_bg_hover' => '#1d76da',
        'reign_accent_color' => '#1d76da',
        'reign_accent_hover_color' => '#3c8ce6',
        'reign_colors_button_text' => '#1d76da',
        'reign_colors_button_text_hover' => '#1d76da',
        'reign_colors_button_border' => '#1d76da',
        'buddypress_single_member_nav_style' => 'iconic',
        'buddypress_single_group_nav_style' => 'iconic',
        'reign_header_search_option' => 'product_search',
    );
    return $default_value_set;
}

function reign_color_scheme_set() {
    $color_schemes = array(
        'reign_default' => array(
            'reign_header_topbar_bg_color' => '#3B5998',
            'reign_header_topbar_text_color' => '#ffffff',
            'reign_header_topbar_text_hover_color' => '#aac2f5',
            'reign_header_bg_color' => '#252525',
            'reign_header_bg_color' => '#000000',
            'reign_title_tagline_typography' => '#ffffff',
            'reign_header_main_menu_font' => '#ffffff',
            'reign_header_main_menu_text_hover_color' => '#3b5998',
            'reign_header_main_menu_text_active_color' => '#3b5998',
            'reign_header_main_menu_bg_hover_color' => '#ffffff',
            'reign_header_main_menu_bg_active_color' => '#ffffff',
            'reign_header_sub_menu_bg_color' => '#ffffff',
            'reign_header_sub_menu_font' => '#252525',
            'reign_header_sub_menu_text_hover_color' => '#ffffff',
            'reign_header_sub_menu_bg_hover_color' => '#3b5998',
            'reign_header_icon_color' => '#ffffff',
            'reign_header_icon_hover_color' => '#ffffff',
            'reign_site_body_bg_color' => '#f4f4f4',
            'reign_site_body_text_color' => '#252525',
            'reign_colors_theme' => '#3b5998',
            'reign_site_link_color' => '#252525',
            'reign_site_link_hover_color' => '#3b5998',
            'reign_site_button_text_color' => '#ffffff',
            'reign_site_button_text_hover_color' => '#ffffff',
            'reign_site_button_bg_color' => '#3b5998',
            'reign_site_button_bg_hover_color' => '#233356',
            'reign_accent_color' => '#3b5998',
            'reign_accent_hover_color' => '#233356',
            'reign_site_border_color' => '#e3e3e3',
            'reign_site_sections_bg_color' => '#ffffff',
            'reign_site_hr_color' => '#e3e3e3',
            'reign_site_headings_color' => '#252525',
            'reign_footer_widget_area_bg_color' => '#000000',
            'reign_footer_widget_title_color' => '#ffffff',
            'reign_footer_widget_text_color' => '#ffffff',
            'reign_footer_widget_link_color' => '#ffffff',
            'reign_footer_widget_link_hover_color' => '#3B5998',
            'reign_footer_copyright_bg_color' => '#3B5998',
            'reign_footer_copyright_text_color' => '#ffffff',
            'reign_footer_copyright_link_color' => '#ffffff',
            'reign_footer_copyright_link_hover_color' => '#aac2f5',
            'reign_header_nav_bg_color' => '#3b2a2a',
        ),
        'reign_clean' => array(
            'reign_header_topbar_bg_color' => '#1d76da',
            'reign_header_topbar_text_color' => '#ffffff',
            'reign_header_topbar_text_hover_color' => '#153045',
            'reign_header_bg_color' => '#ffffff',
            'reign_header_nav_bg_color' => '#e2e2e2',
            'reign_title_tagline_typography' => '#153045',
            'reign_header_main_menu_font' => '#153045',
            'reign_header_main_menu_text_hover_color' => '#1d76da',
            'reign_header_main_menu_text_active_color' => '#1d76da',
            'reign_header_main_menu_bg_hover_color' => '#ffffff',
            'reign_header_main_menu_bg_active_color' => '#ffffff',
            'reign_header_sub_menu_bg_color' => '#ffffff',
            'reign_header_sub_menu_font' => '#153045',
            'reign_header_sub_menu_text_hover_color' => '#ffffff',
            'reign_header_sub_menu_bg_hover_color' => '#1d76da',
            'reign_header_icon_color' => '#153045',
            'reign_header_icon_hover_color' => '#153045',
            'reign_site_body_bg_color' => '#fafbfd',
            'reign_site_body_text_color' => '#515b67',
            'reign_colors_theme' => '#1d76da',
            'reign_site_link_color' => '#153045',
            'reign_site_link_hover_color' => '#1d76da',
            'reign_site_button_text_color' => '#ffffff',
            'reign_site_button_text_hover_color' => '#ffffff',
            'reign_site_button_bg_color' => '#1d76da',
            'reign_site_button_bg_hover_color' => '#3c8ce6',
            'reign_accent_color' => '#1d76da',
            'reign_accent_hover_color' => '#3c8ce6',
            'reign_site_border_color' => '#e3e3e3',
            'reign_site_sections_bg_color' => '#ffffff',
            'reign_site_hr_color' => '#e3e3e3',
            'reign_site_headings_color' => '#303030',
            'reign_footer_widget_area_bg_color' => '#ffffff',
            'reign_footer_widget_title_color' => '#153045',
            'reign_footer_widget_text_color' => '#515b67',
            'reign_footer_widget_link_color' => '#153045',
            'reign_footer_widget_link_hover_color' => '#1d76da',
            'reign_footer_copyright_bg_color' => '#ffffff',
            'reign_footer_copyright_text_color' => '#153045',
            'reign_footer_copyright_link_color' => '#153045',
            'reign_footer_copyright_link_hover_color' => '#1d76da',
        ),
        'reign_dark' => array(
            'reign_header_topbar_bg_color' => '#202020',
            'reign_header_topbar_text_color' => '#ffffff',
            'reign_header_topbar_text_hover_color' => '#ad854d',
            'reign_header_bg_color' => '#0e1014',
            'reign_header_nav_bg_color' => '#444444',
            'reign_title_tagline_typography' => '#ffffff',
            'reign_header_main_menu_font' => '#ffffff',
            'reign_header_main_menu_text_hover_color' => '#ad854d',
            'reign_header_main_menu_text_active_color' => '#ad854d',
            'reign_header_main_menu_bg_hover_color' => '#0e1014',
            'reign_header_main_menu_bg_active_color' => '#0e1014',
            'reign_header_sub_menu_bg_color' => '#0e1014',
            'reign_header_sub_menu_font' => '#ffffff',
            'reign_header_sub_menu_text_hover_color' => '#ad854d',
            'reign_header_sub_menu_bg_hover_color' => '#0e1014',
            'reign_header_icon_color' => '#ffffff',
            'reign_header_icon_hover_color' => '#ffffff',
            'reign_site_body_bg_color' => '#0c0c0c',
            'reign_site_body_text_color' => '#ababab',
            'reign_colors_theme' => '#ad854d',
            'reign_site_link_color' => '#ffffff',
            'reign_site_link_hover_color' => '#ad854d',
            'reign_site_button_text_color' => '#ffffff',
            'reign_site_button_text_hover_color' => '#ad854d',
            'reign_site_button_bg_color' => '#ad854d',
            'reign_site_button_bg_hover_color' => '#ffffff',
            'reign_accent_color' => '#ad854d',
            'reign_accent_hover_color' => '#ffffff',
            'reign_site_border_color' => 'rgba(173,173,173,0.5)',
            'reign_site_sections_bg_color' => '#0e1014',
            'reign_site_hr_color' => 'rgba(173,173,173,0.5)',
            'reign_site_headings_color' => '#ad854d',
            'reign_footer_widget_area_bg_color' => '#000000',
            'reign_footer_widget_title_color' => '#ffffff',
            'reign_footer_widget_text_color' => '#ffffff',
            'reign_footer_widget_link_color' => '#ffffff',
            'reign_footer_widget_link_hover_color' => '#ad854d',
            'reign_footer_copyright_bg_color' => '#0e1014',
            'reign_footer_copyright_text_color' => '#ababab',
            'reign_footer_copyright_link_color' => '#ffffff',
            'reign_footer_copyright_link_hover_color' => '#ad854d',
        ),
        'reign_ectoplasm' => array(
            'reign_header_topbar_bg_color' => '#413256',
            'reign_header_topbar_text_color' => '#ffffff',
            'reign_header_topbar_text_hover_color' => '#d46f15',
            'reign_header_bg_color' => '#f7fcf7',
            'reign_header_nav_bg_color' => '#e3e3e3',
            'reign_title_tagline_typography' => '#413256',
            'reign_header_main_menu_font' => '#413256',
            'reign_header_main_menu_text_hover_color' => '#d46f15',
            'reign_header_main_menu_text_active_color' => '#d46f15',
            'reign_header_main_menu_bg_hover_color' => '#ffffff',
            'reign_header_main_menu_bg_active_color' => '#ffffff',
            'reign_header_sub_menu_bg_color' => '#ffffff',
            'reign_header_sub_menu_font' => '#413256',
            'reign_header_sub_menu_text_hover_color' => '#ffffff',
            'reign_header_sub_menu_bg_hover_color' => '#d46f15',
            'reign_header_icon_color' => '#413256',
            'reign_header_icon_hover_color' => '#413256',
            'reign_site_body_bg_color' => '#ffffff',
            'reign_site_body_text_color' => '#444444',
            'reign_colors_theme' => '#d46f15',
            'reign_site_link_color' => '#413256',
            'reign_site_link_hover_color' => '#d46f15',
            'reign_site_button_text_color' => '#413256',
            'reign_site_button_text_hover_color' => '#a3b745',
            'reign_site_button_bg_color' => '#a3b745',
            'reign_site_button_bg_hover_color' => '#413256',
            'reign_accent_color' => '#d46f15',
            'reign_accent_hover_color' => '#413256',
            'reign_site_border_color' => '#e4e4e4',
            'reign_site_sections_bg_color' => '#f7fcf7',
            'reign_site_hr_color' => '#e4e4e4',
            'reign_site_headings_color' => '#413256',
            'reign_footer_widget_area_bg_color' => '#413256',
            'reign_footer_widget_title_color' => '#ffffff',
            'reign_footer_widget_text_color' => '#ababab',
            'reign_footer_widget_link_color' => '#ffffff',
            'reign_footer_widget_link_hover_color' => '#d46f15',
            'reign_footer_copyright_bg_color' => '#f7fcf7',
            'reign_footer_copyright_text_color' => '#413256',
            'reign_footer_copyright_link_color' => '#d46f15',
            'reign_footer_copyright_link_hover_color' => '#413256',
        ),
        'reign_sunrise' => array(
            'reign_header_topbar_bg_color' => '#be3631',
            'reign_header_topbar_text_color' => '#ffffff',
            'reign_header_topbar_text_hover_color' => '#ccaf0b',
            'reign_header_bg_color' => '#fcfcfc',
            'reign_header_nav_bg_color' => '#e3e3e3',
            'reign_title_tagline_typography' => '#252525',
            'reign_header_main_menu_font' => '#252525',
            'reign_header_main_menu_text_hover_color' => '#ccaf0b',
            'reign_header_main_menu_text_active_color' => '#ccaf0b',
            'reign_header_main_menu_bg_hover_color' => '#ffffff',
            'reign_header_main_menu_bg_active_color' => '#ffffff',
            'reign_header_sub_menu_bg_color' => '#ffffff',
            'reign_header_sub_menu_font' => '#252525',
            'reign_header_sub_menu_text_hover_color' => '#ffffff',
            'reign_header_sub_menu_bg_hover_color' => '#ccaf0b',
            'reign_header_icon_color' => '#252525',
            'reign_header_icon_hover_color' => '#252525',
            'reign_site_body_bg_color' => '#f2f2f2',
            'reign_site_body_text_color' => '#555555',
            'reign_colors_theme' => '#ccaf0b',
            'reign_site_link_color' => '#be3631',
            'reign_site_link_hover_color' => '#ccaf0b',
            'reign_site_button_text_color' => '#ffffff',
            'reign_site_button_text_hover_color' => '#ffffff',
            'reign_site_button_bg_color' => '#be3631',
            'reign_site_button_bg_hover_color' => '#ccaf0b',
            'reign_accent_color' => '#be3631',
            'reign_accent_hover_color' => '#ccaf0b',
            'reign_site_border_color' => '#e4e4e4',
            'reign_site_sections_bg_color' => '#fcfcfc',
            'reign_site_hr_color' => '#e4e4e4',
            'reign_site_headings_color' => '#ccaf0b',
            'reign_footer_widget_area_bg_color' => '#fcfcfc',
            'reign_footer_widget_title_color' => '#252525',
            'reign_footer_widget_text_color' => '#555555',
            'reign_footer_widget_link_color' => '#252525',
            'reign_footer_widget_link_hover_color' => '#ccaf0b',
            'reign_footer_copyright_bg_color' => '#fcfcfc',
            'reign_footer_copyright_text_color' => '#252525',
            'reign_footer_copyright_link_color' => '#be3631',
            'reign_footer_copyright_link_hover_color' => '#ccaf0b',
        ),
        'reign_coffee' => array(
            'reign_header_topbar_bg_color' => '#c7a589',
            'reign_header_topbar_text_color' => '#ffffff',
            'reign_header_topbar_text_hover_color' => '#45403b',
            'reign_header_bg_color' => '#45403b',
            'reign_header_nav_bg_color' => '#252525',
            'reign_title_tagline_typography' => '#ffffff',
            'reign_header_main_menu_font' => '#ffffff',
            'reign_header_main_menu_text_hover_color' => '#c7a589',
            'reign_header_main_menu_text_active_color' => '#c7a589',
            'reign_header_main_menu_bg_hover_color' => '#ffffff',
            'reign_header_main_menu_bg_active_color' => '#ffffff',
            'reign_header_sub_menu_bg_color' => '#45403b',
            'reign_header_sub_menu_font' => '#ffffff',
            'reign_header_sub_menu_text_hover_color' => '#c7a589',
            'reign_header_sub_menu_bg_hover_color' => '#ffffff',
            'reign_header_icon_color' => '#ffffff',
            'reign_header_icon_hover_color' => '#ffffff',
            'reign_site_body_bg_color' => '#2f2f2f',
            'reign_site_body_text_color' => '#909090',
            'reign_colors_theme' => '#c7a589',
            'reign_site_link_color' => '#ffffff',
            'reign_site_link_hover_color' => '#c7a589',
            'reign_site_button_text_color' => '#afafaf',
            'reign_site_button_text_hover_color' => '#ffffff',
            'reign_site_button_bg_color' => '#59524c',
            'reign_site_button_bg_hover_color' => '#c7a589',
            'reign_accent_color' => '#c7a589',
            'reign_accent_hover_color' => '#cacaca',
            'reign_site_border_color' => '#5f5f5f',
            'reign_site_sections_bg_color' => '#45403b',
            'reign_site_hr_color' => '#5f5f5f',
            'reign_site_headings_color' => '#ffffff',
            'reign_footer_widget_area_bg_color' => '#45403b',
            'reign_footer_widget_title_color' => '#ffffff',
            'reign_footer_widget_text_color' => '#909090',
            'reign_footer_widget_link_color' => '#ffffff',
            'reign_footer_widget_link_hover_color' => '#c7a589',
            'reign_footer_copyright_bg_color' => '#c7a589',
            'reign_footer_copyright_text_color' => '#ffffff',
            'reign_footer_copyright_link_color' => '#ffffff',
            'reign_footer_copyright_link_hover_color' => '#45403b',
        ),
    );

    return $color_schemes;
}

function reign_forms_color_scheme_default_set() {
    $forms_default_set = array(
        'reign_default' => array(
            'reign_form_text_color' => '#111111',
            'reign_form_background_color' => '#ffffff',
            'reign_form_border_color' => '#e3e3e3',
            'reign_form_placeholder_color' => '#666666',
            'reign_form_focus_text_color' => '#000000',
            'reign_form_focus_background_color' => '#fdfdfd',
            'reign_form_focus_border_color' => '#3b5998',
            'reign_form_focus_placeholder_color' => '#333333',
        ),
        'reign_clean' => array(
            'reign_form_text_color' => '#111111',
            'reign_form_background_color' => '#ffffff',
            'reign_form_border_color' => '#e3e3e3',
            'reign_form_placeholder_color' => '#666666',
            'reign_form_focus_text_color' => '#000000',
            'reign_form_focus_background_color' => '#fdfdfd',
            'reign_form_focus_border_color' => '#1d76da',
            'reign_form_focus_placeholder_color' => '#333333',
        ),
        'reign_dark' => array(
            'reign_form_text_color' => 'rgba(219,219,219,0.7)',
            'reign_form_background_color' => '#1e2124',
            'reign_form_border_color' => '#1e2124',
            'reign_form_placeholder_color' => '#666666',
            'reign_form_focus_text_color' => 'rgba(219,219,219,0.7)',
            'reign_form_focus_background_color' => '#1e2124',
            'reign_form_focus_border_color' => '#ad854d',
            'reign_form_focus_placeholder_color' => '#333333',
        ),
        'reign_ectoplasm' => array(
            'reign_form_text_color' => '#111111',
            'reign_form_background_color' => '#f7fcf7',
            'reign_form_border_color' => '#e4e4e4',
            'reign_form_placeholder_color' => '#666666',
            'reign_form_focus_text_color' => '#000000',
            'reign_form_focus_background_color' => '#ffffff',
            'reign_form_focus_border_color' => '#d46f15',
            'reign_form_focus_placeholder_color' => '#333333',
        ),
        'reign_sunrise' => array(
            'reign_form_text_color' => '#111111',
            'reign_form_background_color' => '#fcfcfc',
            'reign_form_border_color' => '#e4e4e4',
            'reign_form_placeholder_color' => '#666666',
            'reign_form_focus_text_color' => '#000000',
            'reign_form_focus_background_color' => '#f2f2f2',
            'reign_form_focus_border_color' => '#ccaf0b',
            'reign_form_focus_placeholder_color' => '#333333',
        ),
        'reign_coffee' => array(
            'reign_form_text_color' => '#ffffff',
            'reign_form_background_color' => '#45403b',
            'reign_form_border_color' => '#5f5f5f',
            'reign_form_placeholder_color' => '#666666',
            'reign_form_focus_text_color' => '#ffffff',
            'reign_form_focus_background_color' => '#2f2f2f',
            'reign_form_focus_border_color' => '#c7a589',
            'reign_form_focus_placeholder_color' => '#333333',
        ),
    );
    return $forms_default_set;
}
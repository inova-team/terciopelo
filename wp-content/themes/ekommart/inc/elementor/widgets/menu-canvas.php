<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Ekommart_Elementor_Menu_Canvas extends Elementor\Widget_Base{

    public function get_name()
    {
        return 'ekommart-menu-canvas';
    }

    public function get_title()
    {
        return esc_html__('Ekommart Menu Canvas', 'ekommart');
    }

    public function get_icon()
    {
        return 'eicon-nav-menu';
    }

    public function get_categories()
    {
        return ['ekommart-addons'];
    }

    protected function _register_controls()
    {
        $this -> start_controls_section(
            'icon-menu_style',
            [
                'label' => esc_html__('Icon','ekommart'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_menu_size',
            [
                'label'     => esc_html__( 'Size Icon', 'ekommart' ),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 6,
                        'max' => 300,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .menu-mobile-nav-button i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'icon_menu_color',
            [
                'label'     => esc_html__( 'Color', 'ekommart' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .menu-mobile-nav-button:not(:hover)' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'icon_menu_color_hover',
            [
                'label'     => esc_html__( 'Color Hover', 'ekommart' ),
                'type'      => Controls_Manager::COLOR,
                'global' => [
                    'default' => Global_Colors::COLOR_PRIMARY,
                ],
                'selectors' => [
                    '{{WRAPPER}} .menu-mobile-nav-button:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this -> start_controls_section(
            'content-menu_style',
            [
                'label' => esc_html__('Content','ekommart'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_menu_canvas',
            [
                'label'     => esc_html__( 'Color ', 'ekommart' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    'body .mobile-navigation ul li a' => 'color: {{VALUE}};',
                    'body .mobile-navigation .dropdown-toggle' => 'color: {{VALUE}};',
                    'body .ekommart-mobile-nav .ekommart-social ul li a:before' => 'color: {{VALUE}};',
                    'body .mobile-nav-close' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color-menu-canvas-active',
            [
                'label'     => esc_html__( 'Color Active ', 'ekommart' ),
                'type'      => Controls_Manager::COLOR,
                'global' => [
                    'default' => Global_Colors::COLOR_PRIMARY,
                ],
                'selectors' => [
                    'body .mobile-navigation ul.menu li.current-menu-ancestor > a' => 'color: {{VALUE}};',
                    'body .mobile-navigation ul.menu li.current-menu-parent > a' => 'color: {{VALUE}};',
                    'body .mobile-navigation ul.menu li.current-menu-item > a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color-menu-canvas-border',
            [
                'label'     => esc_html__( 'Color Border ', 'ekommart' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    'body .mobile-navigation ul li' => 'border-color: {{VALUE}};',
                    'body .ekommart-mobile-nav .ekommart-social' => 'border-top-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'background-menu-canvas',
            [
                'label'     => esc_html__( 'Background ', 'ekommart' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    'body .ekommart-mobile-nav' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $this->add_render_attribute( 'wrapper', 'class', 'elementor-canvas-menu-wrapper' );
        ?>
        <div <?php echo ekommart_elementor_get_render_attribute_string('wrapper', $this);?>>
            <?php ekommart_mobile_nav_button(); ?>
        </div>
        <?php
    }

}
$widgets_manager->register_widget_type(new Ekommart_Elementor_Menu_Canvas());

<?php
class AMPFE_ContactForm7 extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'ct-cf7';
    }

    /**
     * Get widget title.
     *
     * Retrieve  widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Contact Form 7', 'ampfe' );
    }

    /**
     * Get widget icon.
     *
     * Retrieve  widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-mail';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the  widget belongs to.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'addon-master-pack' ];
    }

    // Get Form List
    private function get_contact_form_7_posts(){

        $args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
    
            $catlist=[];
            
            if( $categories = get_posts($args)){
                foreach ( $categories as $category ) {
                    (int)$catlist[$category->ID] = $category->post_title;
                }
            }
            else{
                (int)$catlist['0'] = esc_html__('No contect From 7 form found', 'ampfe');
            }
        return $catlist;
    }

    /**
     * Register  widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {

            $this->start_controls_section(
                'cf7_section',
                [
                    'label' => __( 'Contact Form 7', 'ampfe' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );
           
            $this->add_control(
                'ct_cf7',
                [
                    'label' => esc_html__( 'Select Contact Form', 'ampfe' ),
                    'description' => esc_html__('Contact form 7 - plugin must be installed and there must be some contact forms made with the contact form 7','ampfe'),
                    'type' => \Elementor\Controls_Manager::SELECT2,
                    'multiple' => false,
                    'options' => $this->get_contact_form_7_posts()
                ]
            );
                
            $this->end_controls_section();

        }

    /**
     * Render  widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {

        $settings = $this->get_settings_for_display();

        $ct_cf7_id = $settings['ct_cf7'];

        if( $ct_cf7_id ){
           echo'<div class="ampfe-cf7 ampfe-cf7-'.$ct_cf7_id.'">';
                echo do_shortcode('[contact-form-7 id="'.$ct_cf7_id.'"]');    
           echo '</div>';  
        }
    }  

}
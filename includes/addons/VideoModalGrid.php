<?php
class AMPFE_VideoModalGrid extends \Elementor\Widget_Base {

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
        return 'video-modal-grid';
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
        return __( 'Video Modal Grid', 'ampfe' );
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
     * Get style dependencies.
     *
     * Retrieve the list of style dependencies the element requires.
     *
     * @since 1.9.0
     * @access public
     *
     * @return array Element styles dependencies.
     */
    public function get_style_depends() {
        return [ 'video-modal-grid' ];
    }
    
    /**
     * Retrieve the list of scripts the counter widget depended on.
     *
     * Used to set scripts dependencies required to run the widget.
     *
     * @since 1.3.0
     * @access public
     *
     * @return array Widget scripts dependencies.
     */
    public function get_script_depends() {
        return [ 'video-modal-grid' ];
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
                'vmg_section',
                [
                    'label' => __( 'Video Modal Grid', 'ampfe' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );
           
            $this->add_control(
                'vmg_video_url',
                [
                    'label' => esc_html__( 'Select Contact Form', 'ampfe' ),
                    'description' => esc_html__('Contact form 7 - plugin must be installed and there must be some contact forms made with the contact form 7','ampfe'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'multiple' => false,
                    //'options' => $this->get_contact_form_7_posts()
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


        //print_r($settings['vmg_video_url']);

        ?>

        <h1><?php echo $settings['vmg_video_url']; ?></h1>

        <?php
      
    }  

}
<?php

final class AMPFE_AddonMasterPack {

	/**
	 * Plugin Version
	 *
	 * @since 1.0.0
	 *
	 * @var string The plugin version.
	 */
	const VERSION = '1.0.0';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const MINIMUM_PHP_VERSION = '7.0';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var Elementor_Test_Extension The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return Elementor_Test_Extension An instance of the class.
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {

		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );


		add_action( 'admin_menu', [ $this, 'add_menu_page'] );
		add_action( 'admin_enqueue_scripts', [ $this, 'admin_scripts'], 15 );

	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 *
	 * Fired by `init` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function i18n() {

		load_plugin_textdomain( 'ampfe' );

	}

	/**
	 * Register menu page.
	 */
	function admin_scripts(){
	    wp_enqueue_style( 'ampfe', ADDONMASTER_PACK_URL . '/assets/admin/css/am-setting-page.css' );
	    wp_enqueue_script( 'ampfe-admin', ADDONMASTER_PACK_URL . '/assets/admin/js/ampfe-admin.js' );
	}

	/**
	 * Register menu page.
	 */
	function add_menu_page(){
	    add_menu_page(
            __('Addon Master Pack for Elementor', 'ampfe'),
            __('Addon Master Pack for Elementor', 'ampfe'),
            'manage_options',
            'ampfe-settings',
            [$this, 'ampfe_admin_settings_page'],
            ADDONMASTER_PACK_URL . '/assets/admin/img/amfe-logo.svg',
            '58.6'
        );
	}
 
	/**
	 * Display a custom menu page
	 */
	function ampfe_admin_settings_page(){
		?>
	    <div id="amadmin-dashboard" class="wrap amadmin-wrap">
			<div class="welcome-head am-clearfix">
			    <div class="am-row">
			        <div class="am-col-sm-9">
			            <h1> Addon Master Pack for Elementor  </h1>
			            <div class="am-welcome">
			                <!-- <p> -->
			                <strong>Addon Master Pack for Elementor</strong> - Most Powerful Addons &amp; Easy to Use for Elementor <span><a href="" target="_blank">Rate the plugin ★★★★★</a></span>
			                <!-- </p> -->
			            </div>
			        </div>
			        <div class="am-col-sm-3">
			            <img width="80" src="<?php echo ADDONMASTER_PACK_URL . '/assets/admin/img/AddonMasterPackElementorLogo.svg'; ?>">
			            <span class="am-theme-version">Version 5.1.0</span>
			        </div>
			    </div>
			</div>
			<div class="am-tab-container-wrap am-clearfix">
				<div class="am-row">
					<div class="am-col-sm-12">
						<div class="am-clearfix amsetting-wrap">
							<div class="am-box-head">
								<ul class="am-tab-nav">
									<li class="active"><a href="#general"><?php echo esc_html__('General','ampfe'); ?></a></li>
									<li><a href="#addons"><?php echo esc_html__('Addons','ampfe'); ?></a></li>
								</ul>
							</div>
							<div class="am-box-content am-box">
								<div class="am-tab-container">
									<!-- Start general tab -->
									<div id="general" class="am-tab-content active">
										<div class="am-row">
											<div class="am-col-sm-6">
												<div class="am-minibox">
													<div class="icon-area">
														<img src="<?php echo ADDONMASTER_PACK_URL . '/assets/admin/img/support.svg'; ?>" alt="">
													</div>
													<div class="am-content-area">
														<h4>Any Help Needed?</h4>
														<div class="am-content">
															<p>Are you stuck with something? or Do you need any <strong>Custom Addon</strong> to be added? Just let us know</p>
														</div>

														<div class="am-btn-group">
															<a href="#" class="am-main-btn">Support Forum</a>
															<a href="#" class="am-main-btn">Facebook Group</a>
															<a href="#" class="am-main-btn">Live Chat</a>
														</div>
													</div>
												</div>
											</div>
											<div class="am-col-sm-6">
												<div class="am-minibox">
													<div class="icon-area">
														<img src="<?php echo ADDONMASTER_PACK_URL . '/assets/admin/img/support.svg'; ?>" alt="">
													</div>
													<div class="am-content-area">
														<h4>Any Help Needed?</h4>
														<div class="am-content">
															<p>Are you stuck with something? or Do you need any <strong>Custom Addon</strong> to be added? Just let us know</p>
														</div>
													</div>
												</div>
											</div>
											<div class="am-col-sm-6">
												<div class="am-minibox">
													<div class="icon-area">
														<img src="<?php echo ADDONMASTER_PACK_URL . '/assets/admin/img/support.svg'; ?>" alt="">
													</div>
													<div class="am-content-area">
														<h4>Any Help Needed?</h4>
														<div class="am-content">
															<p>Are you stuck with something? or Do you need any <strong>Custom Addon</strong> to be added? Just let us know</p>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
									<!-- End general tab -->
									<!-- Start addon tab -->
									<div id="addons" class="am-tab-content">
										<div class="am-row">
											<?php for($i=0; $i<16; $i++):?>
											<div class="am-col-sm-3">
												<div class="am-minibox addons-box">
													<div class="icon-area">
														<img src="<?php echo ADDONMASTER_PACK_URL . '/assets/admin/img/support.svg'; ?>" alt="">
													</div>
													<div class="am-content-area">
														<h4>Your Addon Name</h4>
													</div>
													<div class="am-switch">
														<input type="checkbox" id="switch-<?php _e($i);?>" checked="checked" /><label for="switch-<?php _e($i);?>">Toggle</label>
													</div>
												</div>
											</div>
											<?php endfor; ?>
										</div>
									</div>
									<!-- End addons tab -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>

	    <?php
	}

	/**
	 * Initialize the plugin
	 *
	 * Load the plugin only after Elementor (and other plugins) are loaded.
	 * Checks for basic plugin requirements, if one check fail don't continue,
	 * if all check have passed load the files required to run the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}

		// Add Plugin actions
		add_action( 'elementor/elements/categories_registered', array( $this, 'add_elementor_category' ) );
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
		//add_action( 'elementor/controls/controls_registered', [ $this, 'init_controls' ] );
	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'ampfe' ),
			'<strong>' . esc_html__( 'Addon Master Pack', 'ampfe' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'ampfe' ) . '</strong>'
		);
		$active_msg = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			__( '<a href="%1$s" class="button-primary">%2$s</a>', 'ampfe' ),
			admin_url( '/plugin-install.php?s=Elementor&tab=search&type=term' ),
			esc_html__( 'Activate Elementor', 'ampfe' )
		);

		printf( '<div class="notice notice-error is-dismissible"><p>%1$s</p><p>%2$s</p></div>', $message, $active_msg );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'ampfe' ),
			'<strong>' . esc_html__( 'Addon Master Pack', 'ampfe' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'ampfe' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'ampfe' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'ampfe' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'ampfe' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

    /**
     * Add the Category for Theme Widgets.
     */
    function add_elementor_category( $elements_manager ) {

       $elements_manager->add_category(
           'addon-master-pack',
           [
               'title' => __( 'Addon Master Pack', 'ampfe' ),
               'icon' => 'fa fa-plug',
           ]
       );
    }

	/**
	 * Init Widgets
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init_widgets() {

        // Include Widget files
        require_once( __DIR__ . '/addons/ContactForm7.php' );
        require_once( __DIR__ . '/addons/VideoModalGrid.php' );

        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \AMPFE_ContactForm7() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \AMPFE_VideoModalGrid() );
	}

	/**
	 * Init Controls
	 *
	 * Include controls files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init_controls() {

		// Include Control files
		require_once( __DIR__ . '/controls/test-control.php' );

		// Register control
		\Elementor\Plugin::$instance->controls_manager->register_control( 'control-type-', new \Test_Control() );

	}

}

<?php
if ( !class_exists('Blog_Prime_Dashboard_Notice') ):

    class Blog_Prime_Dashboard_Notice
    {
        function __construct()
        {	
            global $pagenow;

        	if( $this->blog_prime_show_hide_notice() ){

	            if( is_multisite() ){

                  add_action( 'network_admin_notices',array( $this,'blog_prime_admin_notiece' ) );

                } else {

                  add_action( 'admin_notices',array( $this,'blog_prime_admin_notiece' ) );
                }
	        }
	        add_action( 'wp_ajax_blog_prime_notice_dismiss', array( $this, 'blog_prime_notice_dismiss' ) );
			add_action( 'switch_theme', array( $this, 'blog_prime_notice_clear_cache' ) );
        }
        
        public static function blog_prime_show_hide_notice( $status = false ){

            if( $status ){

                if( (class_exists( 'Booster_Extension_Class' ) ) || get_option('twp_blog_prime_admin_notice') ){

                    return false;

                }else{

                    return true;

                }

            }

            // Check If current Page 
            if ( isset( $_GET['page'] ) && $_GET['page'] == 'blog-prime-about'  ) {
                return false;
            }

        	// Hide if dismiss notice
        	if( get_option('twp_blog_prime_admin_notice') ){
				return false;
			}
        	// Hide if all plugin active
        	if ( class_exists( 'Booster_Extension_Class' ) ) {
				return false;
			}
			// Hide On TGMPA pages
			if ( ! empty( $_GET['tgmpa-nonce'] ) ) {
				return false;
			}
			// Hide if user can't access
        	if ( current_user_can( 'manage_options' ) ) {
				return true;
			}
			
        }

        // Define Global Value
        public static function blog_prime_admin_notiece(){ ?>

            <div class="updated notice is-dismissible welcome-panel twp-blog-prime-notice">

                <h3><?php esc_html_e('Quick Setup','blog-prime'); ?></h3>

                <p><strong><?php esc_html_e('Blog Prime is now installed and ready to use. Are you looking for a better experience to set up your site?','blog-prime'); ?></strong></p>

                <small><?php esc_html_e("We've prepared a unique onboarding process through our",'blog-prime'); ?> <a href="<?php echo esc_url( admin_url().'themes.php?page='.get_template().'-about') ?>"><?php esc_html_e('Getting started','blog-prime'); ?></a> <?php esc_html_e("page. It helps you get started and configure your upcoming website with ease. Let's make it shine!",'blog-prime'); ?></small>

                <p>
                    <a class="button button-primary twp-install-active" href="javascript:void(0)"><?php esc_html_e('Install and activate recommended plugins','blog-prime'); ?></a>
                    <span class="quick-loader-wrapper"><span class="quick-loader"></span></span>

                    <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://demo.themeinwp.com/blog-prime/' ); ?>"><?php esc_html_e('View Demo','blog-prime'); ?></a>
                    <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://www.themeinwp.com/theme/blog-prime-pro/' ); ?>"><?php esc_html_e('Upgrade to Pro','blog-prime'); ?></a>
                    <a class="btn-dismiss twp-custom-setup" href="javascript:void(0)"><?php esc_html_e('Dismiss this notice.','blog-prime'); ?></a>

                </p>

            </div>

        <?php
        }

        public function blog_prime_notice_dismiss(){

        	if ( isset( $_POST[ '_wpnonce' ] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST[ '_wpnonce' ] ) ), 'blog_prime_ajax_nonce' ) ) {

	        	update_option('twp_blog_prime_admin_notice','hide');

	        }

            die();

        }

        public function blog_prime_notice_clear_cache(){

        	update_option('twp_blog_prime_admin_notice','');

        }

    }
    new Blog_Prime_Dashboard_Notice();
endif;
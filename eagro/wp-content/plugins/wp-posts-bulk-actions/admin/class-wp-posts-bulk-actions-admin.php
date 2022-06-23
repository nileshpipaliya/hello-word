<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       #
 * @since      1.0.0
 *
 * @package    Wp_Posts_Bulk_Actions
 * @subpackage Wp_Posts_Bulk_Actions/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Posts_Bulk_Actions
 * @subpackage Wp_Posts_Bulk_Actions/admin
 * @author     Nilesh Pipaliya <pipaliyanilesh04@gmail.com>
 */
class Wp_Posts_Bulk_Actions_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */

	private $version;

	/**
	 *  The value of this plugin.
	 *
	 * @since    1.0.0
	 * @param    string    $wp_bulk_action_array    The option vaule variable of this plugin.
	 */

	private $wp_bulk_action_array;

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->wp_bulk_action_array = get_option( 'wp_posts_bulk_actions' );
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Posts_Bulk_Actions_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Posts_Bulk_Actions_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-posts-bulk-actions-admin.css', array(), $this->version, 'all' );
		
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Posts_Bulk_Actions_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Posts_Bulk_Actions_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-posts-bulk-actions-admin.js', array( 'jquery' ), $this->version, false );

		// we have to pass parameters to wp-posts-bulk-actions-admin.js script but we can get the parameters values only in PHP
		wp_localize_script( $this->plugin_name, 'wppostajax', array( 
			'ajaxurl' => admin_url( 'admin-ajax.php' ) , // WordPress AJAX
			'nonce' => wp_create_nonce('ajax-nonce')) // WordPress nonce
		);  
		
	}

	public function add_menu_panel(){

		/**
		 * This function is provided for item add on tool menu only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Posts_Bulk_Actions_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Posts_Bulk_Actions_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		add_management_page(
			esc_html__( 'WP Posts Bulk Actions', 'wp-posts-bulk-actions' ), // page <title>Title</title>
			esc_html__( 'WP Posts Bulk Actions', 'wp-posts-bulk-actions' ), // menu link text
			'manage_options', // capability to access the page
			'bulk_action_admin_options_page', // page URL slug
			array($this,'bulk_action_admin_options_page_view') // callback function /w content
		);
	}

	public function bulk_action_admin_options_page_view(){
		$args = array( 'public'   => true );
		$output = 'objects'; // 'names' or 'objects' (default: 'names')
		$operator = 'and'; // 'and' or 'or' (default: 'and')
		$post_types = get_post_types( $args, $output, $operator );
		unset( $post_types['attachment'] ); // remove attachment from the list
		
		?>
		<div class="wrap">
			<div class="wp-pb-action-page-title">
				<h1><?php echo esc_html__( 'WP Posts Bulk Actions Option', 'wp-posts-bulk-actions' ); ?></h1>
			</div>
			<div class="wp-pb-action-contant">
				<div class="wp-pb-action-inner-contant">
					<div class="wp-pb-action-inner-contant-header">
						<h4><?php echo esc_html__( 'Setting', 'wp-posts-bulk-actions' ); ?></h4>
					</div>
					<div class="wp-pb-action-inner-contant-body">
						<form method="post" id="wp-pb-action-form">
							<div class="wp-pb-action-select">
								<h6><?php echo esc_html__( 'Choose Post Types', 'wp-posts-bulk-actions' ); ?></h6>
								<label class="wp-bulk-actions-label">
									<input type='checkbox' class="wp-bulk-actions-label-all" value='all' /><?php echo esc_html__( 'All', 'wp-posts-bulk-actions' ); ?>
								</label>
								<?php foreach ($post_types  as $post_type) { ?>
								    <label class="wp-bulk-actions-label">
								    	<input type='checkbox' name='post_type[]' class="wp-bulk-actions-label-text" value='<?php echo esc_html__($post_type->name, 'wp-posts-bulk-actions'); ?>' 
								    	<?php 
								    	if(!empty($this->wp_bulk_action_array)){
								    		if(in_array($post_type->name, $this->wp_bulk_action_array)){
								    			echo 'checked';
								    		} 
								    	} ?>
								    	 />
								    	<?php echo esc_html__( $post_type->label, 'wp-posts-bulk-actions' ); ?>
								    </label>
								<?php } ?>
							</div>
							<button type="submit" name="submit" id="wp_posts_action_save_btn">
								<?php echo esc_html__('Submit', 'wp-posts-bulk-actions'); ?> 
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	public function wp_posts_action_save_callback(){
		$json = array();
		if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'ajax-nonce' ) ) {
			$json['status'] = '0';
			$json['message'] = 'You have not verified your nonce';
		} else {
			if (isset($_POST['formdata'])) { 
				$select_action_data_posts = $_POST['formdata'];
				$select_action_data = array_map( 'sanitize_text_field', $select_action_data_posts );
				$update_select_action_data = !empty($select_action_data) ? $select_action_data : array();
				update_option( 'wp_posts_bulk_actions', $update_select_action_data );
				$json['status'] = '1';
				$json['message'] = 'Update Bulk Actions Successfully';
			}
		}
		wp_send_json_success( $json); 
		die();
	}

	public function wp_posts_action_add_option_callback(){
		$qwe = $this->wp_bulk_action_array;
		if(!empty($qwe)){
			foreach ($qwe as $key => $value) {
				add_filter( 'bulk_actions-edit-'.$value, array($this,'wp_bulk_actions_edit_status_callback' )); // added callback funtion
				add_filter( 'handle_bulk_actions-edit-'.$value, array($this,'wp_bulk_actions_handel_callback' ), 10, 3 ); // added callback funtion
			}
		}
	}

	public function wp_bulk_actions_edit_status_callback($wp_bulk_array){
		$wp_bulk_array['move-to-draft'] = esc_html__('Move to Draft', 'wp-posts-bulk-actions'); // Added Draft Option 
		$wp_bulk_array['move-to-published'] = esc_html__('Move to Published', 'wp-posts-bulk-actions'); // Added Published Option
		return $wp_bulk_array;
	}
	public function wp_bulk_actions_handel_callback( $redirect_to, $doaction, $object_ids ) {

		// let's remove query args first
		$redirect_to = remove_query_arg( array( 'wp_posts_bulk_actions_make_draft_done', 'wp_posts_bulk_actions_make_publish_done' ), $redirect_to );
		
		// do something for "Make Draft" bulk action
		if ($doaction == 'move-to-draft') {
			foreach ( $object_ids as $post_id ) {
				wp_update_post( array(
					'ID' => $post_id,
					'post_status' => 'draft' // set status
				) );
				if (is_wp_error($post_id)) {
				    $errors = $post_id->get_error_messages();
				    foreach ($errors as $error) {
				        $redirect_to = add_query_arg(
							'wp_posts_bulk_actions_make_publish_error', // just a parameter for URL (we will use $_GET['wp_posts_bulk_actions_make_publish_error'] )
							$error, // parameter value - how much posts have been affected
						$redirect_to );
				    }
				}
			}

			// do not forget to add query args to URL because we will show notices later
			$redirect_to = add_query_arg(
				'wp_posts_bulk_actions_make_draft_done', // just a parameter for URL (we will use $_GET['wp_posts_bulk_actions_make_draft_done'] )
				count( $object_ids ), // parameter value - how much posts have been affected
			$redirect_to );

		} else if($doaction == 'move-to-published'){
			foreach ( $object_ids as $post_id ) {
				wp_update_post( array(
					'ID' => $post_id,
					'post_status' => 'publish' // set status
				) );
				wp_update_post( $post_id, true );                        
				if (is_wp_error($post_id)) {
				    $errors = $post_id->get_error_messages();
				    foreach ($errors as $error) {
				        $redirect_to = add_query_arg(
							'wp_posts_bulk_actions_make_publish_error', // just a parameter for URL (we will use $_GET['wp_posts_bulk_actions_make_publish_error'] )
							$error, // parameter value - how much posts have been affected
						$redirect_to );
				    }
				}
			}
			$redirect_to = add_query_arg(
				'wp_posts_bulk_actions_make_publish_done', // just a parameter for URL (we will use $_GET['wp_posts_bulk_actions_make_publish_done'] )
				count( $object_ids ), // parameter value - how much posts have been affected
			$redirect_to );
		} else {
			return $redirect_to;
		}
		return $redirect_to;
	}
	public function wp_posts_action_admin_notices_callback(){
		
		$class_success = 'updated notice notice-success is-dismissible';
		$class_error = 'notice notice-error is-dismissible';
		
		if (!empty($_GET['wp_posts_bulk_actions_make_draft_done']) ) {
			$number_of_project = (int) $_GET['wp_posts_bulk_actions_make_draft_done'];
			$message = esc_html__( $number_of_project.' posts Moved to Drafted.', 'wp-posts-bulk-actions' );
 		}

 		if (!empty($_GET['wp_posts_bulk_actions_make_publish_done']) ) {
			$number_of_project = (int) $_GET['wp_posts_bulk_actions_make_publish_done'];
			$message = esc_html__( $number_of_project.' posts Moved to Publish.', 'wp-posts-bulk-actions' );
 		}

 		if (!empty($_GET['wp_posts_bulk_actions_make_draft_done']) || !empty($_GET['wp_posts_bulk_actions_make_publish_done']) ) {
			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), $message ); 
		}

		if (!empty($_GET['wp_posts_bulk_actions_make_publish_error']) ) {
			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class_error), $_GET['wp_posts_bulk_actions_make_publish_error'] ); 
		}
	}
}

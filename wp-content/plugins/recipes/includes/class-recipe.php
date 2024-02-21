<?php
if ( !class_exists( 'Su_Recipes' ) ) :

    /**
     * This is our Recipe Class for registering Recipe Custom Type and taxonomy for it.
     */
    class Su_Recipes {
        public function __construct() {
            // Register the CPT and taxonomies
            add_action( 'init', array( $this, 'recipes_cpt' ) );
            add_action( 'init', array( $this, 'recipes_category_taxonomy' ) );
            // Register Metaboxes
            add_action( 'add_meta_boxes', array( $this, 'recipe_register_meta_boxes' ) );

            // Save Actions
            add_action( 'save_post', array( $this, 'recipe_meta_is_gluten_save' ) );
        }

        /**
         * Register our Recipe Custom Type
         *
         * @return void 
         */
        public function recipes_cpt() {
            $labels = array(
                'name'          => _x( 'Recipes', 'Post type general name', 'softuni' ),
                'singular_name' => _x( 'Recipe', 'Post type singular name', 'softuni' ),
                'menu_name'     => _x( 'Recipes', 'Admin Menu text', 'softuni' ),
                'name_admin_bar' => _x( 'Recipe', 'Add New on Toolbar', 'softuni' ),
                'add_new'       => __( 'Add New', 'softuni' ),
                'add_new_item'  => __( 'Add New Recipe', 'softuni' ),
                'new_item'      => __( 'New Recipe', 'softuni' ),
                'edit_item'     => __( 'Edit Recipe', 'softuni' ),
                'view_item'     => __( 'View Recipe', 'softuni' ),
                'all_items'     => __( 'All Recipes', 'softuni' ),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions' ),
                'show_in_rest'       => true
            );

            register_post_type( 'recipe', $args );
        }

        /**
         * Register our Category taxonomy for our Recipe CPT
         * 
         * @return void 
         */
        public function recipes_category_taxonomy() {

            $labels = array(
                'name'          => 'Categories',
                'singular_name' => 'Category',
            );

            $args = array(
                'labels'       => $labels,
                'show_in_rest' => true,
            );

            register_taxonomy( 'recipes_category', 'recipe', $args );
        }

        /**
         * Register meta box(es).
         */
        public function recipe_register_meta_boxes() {
            add_meta_box( 'gluten_free', __('Is Gluten free?', 'softuni'), array($this, 'recipe_featured_metabox_callback'), 'recipe', 'side' );
        }

        /**
         * Callback function for my Featured metabox
         * 
         * @return void
         */
        function recipe_featured_metabox_callback( $post_id ) {
            $checked = get_post_meta( $post_id->ID, 'is_gluten_free', true );
?>
            <div>
                <label for='isglutenfree'>Is Gluten free?</label>
                <input id='is-gluten-free' name='isglutenfree' type='checkbox' value='1' <?php checked( $checked, 1, true ); ?> />
            </div>
<?php
        }

        /**
         * Function to update my Is Gluten meta
         * 
         * @return void
         */
        public function recipe_meta_is_gluten_save( $post_id ) {
            if ( empty( $post_id ) ) {
                return;
            }

            $gluten = '';

            if ( isset( $_POST['isglutenfree'] ) ) {
                $gluten = $_POST['isglutenfree'];
            }

            update_post_meta( $post_id, 'is_gluten_free', $gluten );
        }
    }

    $su_recipe_instance = new Su_Recipes();
endif;

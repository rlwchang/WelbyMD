Wordpress Pages
index.php - Default home page and fallback
front-page.php
header.php - Template for get_header() function
footer.php - Template for get_footer() function
single.php - Template for individual post
page.php - Template for different pages
front-page.php -
functions.php - Functions to run when the pages load
archive.php - Template for posts when filtered (archives)

===================
Wordpress Functions
===================
+ Wordpress Query
  - new WP_Query({options_array})
  - wp_reset_postdata()

  + Methods
    - have_posts()
    - the_post()

  + Query Options
    - 'posts_per_page' => {int}
    - 'post_type' => {option_type || e.g. 'page' or 'post'}
    - 'category_name' => {category}

+ Posts Functions
  - bloginfo({parameter}) - Echoes site information based on parameter
  - have_posts()
  - the_title({before_text}, {after_text}, {bool echo}) - Echo post title unless last parameter is fasle
  - the_post()
  - the_content()
  - the_author()
  - the_excerpt()
  - the_time({date_format}) - Echoes out the time that a post was created in the given format
  - the_author_posts_link() - Echoes a link to all posts by the author
  - get_the_category_list() - Returns a list of all the categories of the post
  - paginate_links() - Echoes out pagination links

+ Archive Functions
  - the_archive_title()
  - the_archive_description()
  - is_category()
  - single_cat_title({prefix}) - Echoes cateogry title prefixed by the specified string


+ Bloginfo Parameters
  - 'name' - Site title
  - 'description' - Displays site tagline

+ Wordpress Head Functions
  - wp_head() - Place in the head to include built-in Wordpress functions
  - language_attributes() - Echoes out the language used
  - bloginfo('charset') - Used to echo the charset type

+ Wordpress Body Functions
  - body_class() - Includes useful classes into the body of each rendered page

+ Page Functions
  - wp_list_pages({options_array}) - Echoes out all of the pages in the site. Takes an array of arguments to modify result
  - get_pages({options_array}) - Returns pages based on array.

  + Pages Options
    - 'child_of' => {page_id} - Returns only pages that are a child of the given id. Defaults to 0, returning all pages.
    - 'sort_coulmn' => {str columns} - List of CSV to sort by
    - 'title_li' => {str heading} - Displays heading or nothing if null. Defaults to 'Pages'

  + Parent Page Functions
    - wp_get_post_parent_id({child_post_id}) - Returns 0 if there is no parent

  + Current Page Functions
    - get_the_ID()
    - get_permalink({page_id}) - Returns URL of page based on id. Defautls to current page.
    - get_the_title({page_id}) - Returns title of page based on id. Defaults to current page.

+ Get Functions
  - get_header()
  - get_footer()

+ Navigation Functions
  - register_nav_menu({menu_location}, {menu_name})
  - wp_nav_menu({options_array}) - Echo navigation menu

  + Navigation Options
    - 'theme_location' => {menu_location} - Uses the registered menu from register_nav_menu()

+ Wordpress Logistics
  - wp_enqueue_script({script_name}, {file_location}, {list_of_dependencies}, {version_number}, {bool in_footer})
  - wp_enqueue_style({stylesheet_name}, {file_location}, {list_of_dependencies}, {version_number}, {media type})
  - add_theme_support({feature_name || e.g. 'title_tag'}, {function_name})
  - register_post_type({post_name}, {options_array}) - Best to put in 'app/public/mu_plugins'
  - add_action({wp_hook}, {function_name})

  + Post Type Options
    - 'public' => true
    - 'labels' => array()
    - 'menu_icon' => {wordpress_dashicon}

    + Labels Options
      - 'name' => {dashboard_name}
      - 'add_new_item' => {text} - Title to display in the dashboard when adding a new item
      - 'edit_items' => {text} - Tilte to display in the dashboard when editing an item
      - 'all_items' => {text} - Title to display in the dashboard when hovering over the post type
      - 'singular_name' => {text} - Name of the singular form of the post type

+ Access Functions
  - get_theme_file_uri({path_name}) - Returns an absolute path to content using relative path to your root
  - site_url({path_name}) - Returns a hyperlink relative to home page. Defaults to home page.

+ Wordpress Hooks
  - 'init' - Use to register post types
  - 'after_setup_theme' - Right after functions.php is read. First action hook available to themes.
  - 'wp_enqueue_scripts' - When scripts and styles are to be enqueued.

+ Misc
  - wp_trim_words({string}, {number_of_words})

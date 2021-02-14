<?php
/**
 * Template for displaying search forms in Mash
 *
 * @package WordPress
 * @subpackage Mash
 * @since Mr 1.0
 */
?>

<form role="search" method="get" class="widget-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">


		<input type="search"  placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'mash' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <i class="fa fa-search"></i>

</form>

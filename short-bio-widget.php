<?php
/*
 * Plugin Name: Short Bio Widget
 * Plugin URI: http://nasirahmed.com
 * Description: A little widget to add your brief personal contacts.
 * Author: Nasir Ahmed
 * Version: 1.2
 * Author URI: http://nasirahmed.com
 * License: GPL2+
 */




class LFAShortBioWidget extends WP_Widget {

    public function __construct() {

        parent::__construct(
            'personal_short_bio', // Base ID
            'Short Bio Widget', // Name
            array( 'description' => __( 'A Personal Short Bio Widget', 'text_domain' ), ) // Args
        );
    }

    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title' );
        }

        $image_link = isset($instance['image_link'])?$instance['image_link']: '';
        $image_size = isset($instance['image_size'])?$instance['image_size']:"200";
        $full_name = isset($instance['full_name'])?$instance['full_name']: '';
        $fname_font_size = isset($instance['fname_font_size'])?$instance['fname_font_size']:"25";
        $brief_detail = isset($instance['brief_detail'])?$instance['brief_detail']: '';
        $email = isset($instance['email'])?$instance['email']:'';
        $telephone = isset($instance['telephone'])?$instance['telephone']:'';
        $facebook = isset($instance['facebook'])?$instance['facebook']:'';
        $twitter = isset($instance['twitter'])?$instance['twitter']:'';
        $github = isset($instance['github'])?$instance['github']:'';
        $youtube = isset($instance['youtube'])?$instance['youtube']:'';
        $linkedin = isset($instance['linkedin'])?$instance['linkedin']:'';
        $googleplus = isset($instance['googleplus'])?$instance['googleplus']:'';
        $skype = isset($instance['skype'])?$instance['skype']:'';
        $stackoverflow = isset($instance['stackoverflow'])?$instance['stackoverflow']:'';
        $bitbucket = isset($instance['bitbucket'])?$instance['bitbucket']:'';
        $rss = isset($instance['rss'])?$instance['rss']:'';
        $digg = isset($instance['digg'])?$instance['digg']:'';
        $foursquare = isset($instance['foursquare'])?$instance['foursquare']:'';
        $tumblr = isset($instance['tumblr'])?$instance['tumblr']:'';
        $instagram = isset($instance['instagram'])?$instance['instagram']:'';
        $pinterest = isset($instance['pinterest'])?$instance['pinterest']:'';


        require('inc/back-end.php');
    }


    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['image_link'] = strip_tags( $new_instance['image_link'] );
        $instance['image_size'] = strip_tags( $new_instance['image_size'] );
        $instance['full_name'] = strip_tags( $new_instance['full_name'] );
        $instance['fname_font_size'] = strip_tags( $new_instance['fname_font_size'] );
        $instance['brief_detail'] = strip_tags( $new_instance['brief_detail'] );
        $instance['email'] = strip_tags( $new_instance['email'] );
        $instance['telephone'] = strip_tags( $new_instance['telephone'] );
        $instance['facebook'] = esc_url( $new_instance['facebook'] );
        $instance['twitter'] = esc_url( $new_instance['twitter'] );
        $instance['github'] = esc_url( $new_instance['github'] );
        $instance['youtube'] = esc_url( $new_instance['youtube'] );
        $instance['linkedin'] = esc_url( $new_instance['linkedin'] );
        $instance['googleplus'] = esc_url( $new_instance['googleplus'] );
        $instance['skype'] = strip_tags( $new_instance['skype'] );
        $instance['stackoverflow'] = esc_url( $new_instance['stackoverflow'] );
        $instance['bitbucket'] = esc_url( $new_instance['bitbucket'] );
        $instance['rss'] = esc_url( $new_instance['rss'] );
        $instance['digg'] = esc_url( $new_instance['digg'] );
        $instance['foursquare'] = esc_url( $new_instance['foursquare'] );
        $instance['tumblr'] = esc_url( $new_instance['tumblr'] );
        $instance['instagram'] = esc_url( $new_instance['instagram'] );
        $instance['pinterest'] = esc_url( $new_instance['pinterest'] );

        return $instance;
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        //$image = "http://www.gravatar.com/avatar/" . md5($instance['image_link']) . "?s=" . $instance['image_size'];
        $image = get_avatar($instance['image_link'], $instance['image_size']);
        require ('inc/front-end.php');

    }

} // class LFAShortBioWidget

function init_LFAShortBio_Widget(){
    register_widget("LFAShortBioWidget");
}
add_action("widgets_init","init_LFAShortBio_Widget");



function sbw_enqueue_frontend_styles() {

    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_enqueue_style('frontend-css', plugins_url('short-bio-widget/css/style.css'));

}
add_action( 'wp_enqueue_scripts', 'sbw_enqueue_frontend_styles' );


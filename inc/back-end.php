<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'image_link' );?>"><?php _e( 'Gravatar Email:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('image_link');?>"
            id="<?php echo $this->get_field_id('image_link');?>" value="<?php echo $image_link;?>">
    <lable for="<?php echo $this->get_field_id('image_size'); ?>"><?php _e('Gravatar Size:'); ?></lable>
    <input type="text"
            name="<?php echo $this->get_field_name('image_size'); ?>"
            id="<?php echo $this->get_field_id('image_size'); ?>" value="<?php echo $image_size ?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'full_name' );?>"><?php _e( 'Full Name:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('full_name');?>"
            id="<?php echo $this->get_field_id('full_name');?>" value="<?php echo $full_name;?>">
    <lable for="<?php echo $this->get_field_id('fname_font_size'); ?>"><?php _e('Font Size:'); ?></lable>
    <input type="text" size="2"
           name="<?php echo $this->get_field_name('fname_font_size'); ?>"
           id="<?php echo $this->get_field_id('fname_font_size'); ?>" value="<?php echo $fname_font_size ?>">px
</p>

<p>
    <label for="<?php echo $this->get_field_id('brief_detail'); ?>"><?php _e('Brief Detail:' ); ?></label>
    <textarea class="widefat" id="<?php echo $this->get_field_id('brief_detail'); ?>" name="<?php echo $this->get_field_name('brief_detail'); ?>"><?php echo $brief_detail; ?></textarea>
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'email' );?>"><?php _e('Email:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('email');?>"
            id="<?php echo $this->get_field_id('email');?>" value="<?php echo $email;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'telephone' );?>"><?php _e('Telephone:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('telephone');?>"
            id="<?php echo $this->get_field_id('telephone');?>" value="<?php echo $telephone;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'facebook' );?>"><?php _e('Facebook:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('facebook');?>"
            id="<?php echo $this->get_field_id('facebook');?>" value="<?php echo $facebook;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'twitter' );?>"><?php _e('Twitter:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('twitter');?>"
            id="<?php echo $this->get_field_id('twitter');?>" value="<?php echo $twitter;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'github' );?>"><?php _e('Github:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('github');?>"
            id="<?php echo $this->get_field_id('github');?>" value="<?php echo $github;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'youtube' );?>"><?php _e('Youtube:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('youtube');?>"
            id="<?php echo $this->get_field_id('youtube');?>" value="<?php echo $youtube;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'linkedin' );?>"><?php _e('LinkedIn:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('linkedin');?>"
            id="<?php echo $this->get_field_id('linkedin');?>" value="<?php echo $linkedin;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'googleplus' );?>"><?php _e('Googleplus:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('googleplus');?>"
            id="<?php echo $this->get_field_id('googleplus');?>" value="<?php echo $googleplus;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'skype' );?>"><?php _e('Skype:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('skype');?>"
            id="<?php echo $this->get_field_id('skype');?>" value="<?php echo $skype;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'stackoverflow' );?>"><?php _e('Stackoverflow:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('stackoverflow');?>"
            id="<?php echo $this->get_field_id('stackoverflow');?>" value="<?php echo $stackoverflow;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'bitbucket' );?>"><?php _e('Bitbucket:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('bitbucket');?>"
            id="<?php echo $this->get_field_id('bitbucket');?>" value="<?php echo $github;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'rss' );?>"><?php _e('RSS:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('rss');?>"
            id="<?php echo $this->get_field_id('rss');?>" value="<?php echo $rss;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'digg' );?>"><?php _e('Digg:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('digg');?>"
            id="<?php echo $this->get_field_id('digg');?>" value="<?php echo $digg;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'foursquare' );?>"><?php _e('Foursquare:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('foursquare');?>"
            id="<?php echo $this->get_field_id('foursquare');?>" value="<?php echo $foursquare;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'tumblr' );?>"><?php _e('Tumblr:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('tumblr');?>"
            id="<?php echo $this->get_field_id('tumblr');?>" value="<?php echo $tumblr;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'instagram' );?>"><?php _e('Instagram:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('instagram');?>"
            id="<?php echo $this->get_field_id('instagram');?>" value="<?php echo $instagram;?>">
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'pinterest' );?>"><?php _e('Pinterest:'); ?></label>
    <input  class="widefat" type="text"
            name="<?php echo $this->get_field_name('pinterest');?>"
            id="<?php echo $this->get_field_id('pinterest');?>" value="<?php echo $pinterest;?>">
</p>


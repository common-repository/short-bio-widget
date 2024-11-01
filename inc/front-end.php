<?php

echo $args['before_widget'];

echo "<div class='bio-social-widget'>";
if ( ! empty( $title ) ){
    echo $args['before_title'] . $title . $args['after_title'];
}
echo "<div id='bio-image'>" . $image . "</div>";
?>
<div id="bio-full-name" style="font-size: <?php echo $instance['fname_font_size'] ?>px">
    <?php echo $instance['full_name']; ?>
</div>
<?php
echo "<div id='bio-brief-detail'>".$instance['brief_detail']. "</div>";
echo "<br/>";

echo "<div id='bio-social-icons'>";

if($instance['email']) {
    echo '<a class="social-icon" target="_blank" href="mailto:' . $instance['email'] . '"><i class="fa fa-envelope fa-2x"></i></a>';
}

if($instance['telephone']) {
    echo '<a target="_blank" href="tel:' . $instance['telephone'] . '"><i class="fa fa-phone-square fa-2x"></i></a>';
}

if($instance['facebook']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['facebook'] . '"><i class="fa fa-facebook-official fa-2x"></i></a>';
}

if($instance['twitter']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['twitter'] . '"><i class="fa fa-twitter-square fa-2x"></i></a>';
}

if($instance['github']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['github'] . '"><i class="fa fa-github-square fa-2x"></i></a>';
}



if($instance['linkedin']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['linkedin'] . '"><i class="fa fa-linkedin-square fa-2x"></i></a>';
}

if($instance['youtube']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['youtube'] . '"><i class="fa fa-youtube-square fa-2x"></i></a>';
}

if($instance['googleplus']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['googleplus'] . '"><i class="fa fa-google-plus-square fa-2x"></i></a>';
}

if($instance['skype']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['skype'] . '"><i class="fa fa-skype fa-2x"></i></a>';
}

if($instance['stackoverflow']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['stackoverflow'] . '"><i class="fa fa-stack-overflow fa-2x"></i></a>';
}

if($instance['bitbucket']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['bitbucket'] . '"><i class="fa fa-bitbucket-square fa-2x"></i></a>';
}

if($instance['rss']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['rss'] . '"><i class="fa fa-rss-square fa-2x"></i></a>';
}

if($instance['digg']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['digg'] . '"><i class="fa fa-digg fa-2x"></i></a>';
}

if($instance['foursquare']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['foursquare'] . '"><i class="fa fa-foursquare fa-2x"></i></a>';
}

if($instance['tumblr']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['tumblr'] . '"><i class="fa fa-tumblr fa-2x"></i></a>';
}

if($instance['instagram']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['instagram'] . '"><i class="fa fa-instagram fa-2x"></i></a>';
}

if($instance['pinterest']) {
    echo '<a class="social-icon" target="_blank" href="' . $instance['pinterest'] . '"><i class="fa fa-pinterest-square fa-2x"></i></a>';
}

echo "</div></div>";


echo $args['after_widget'];
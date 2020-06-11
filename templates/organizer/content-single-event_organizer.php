<div class="wpem-single-organizer-profile-wrapper" id="wpem_organizer_profile">
    <div class="wpem-organizer-profile">

        <?php do_action('single_event_listing_organizer_start'); ?>

        <div class="wpem-organizer-logo-wrapper">
            <div class="wpem-organizer-logo">
                <a><?php display_organizer_logo(); ?></a>
            </div>
            <?php /** <div class="wpem-organizer-logo-title wpem-heading-text"><a><span><?php echo $organizer_name; ?></span></a></div> */ ?>
        </div>

        <div class="wpem-organizer-infomation-wrapper">

            <div class="wpem-organizer-name wpem-heading-text">
                <span><?php display_organizer_name(); ?></span>
            </div>

            <div class="wpem-organizer-description"><?php printf(__('%s', 'wp-event-manager'), get_organizer_description()); ?></div>
            
            <div class="wpem-organizer-social-links">
                <div class="wpem-organizer-social-lists">
                    <?php do_action('single_event_listing_organizer_social_start'); ?>
                    <?php
                    $organizer_website  = get_organizer_website();
                    $organizer_facebook = get_organizer_facebook();
                    $organizer_twitter  = get_organizer_twitter();
                    $organizer_youtube  = get_organizer_youtube();
                    ?>
                    <?php
                    if (!empty($organizer_website))
                    {
                        ?>
                        <div class="wpem-social-icon wpem-weblink">
                            <a href="<?php echo esc_url($organizer_website); ?>" target="_blank" title="Get Connect on Website"><?php _e('Website', 'wp-event-manager'); ?></a>
                        </div>
                        <?php
                    }

                    if (!empty($organizer_facebook))
                    {
                        ?> 
                        <div class="wpem-social-icon wpem-facebook">
                            <a href="<?php echo esc_url($organizer_facebook); ?>" target="_blank" title="Get Connect on Facebook"><?php _e('Facebook', 'wp-event-manager'); ?></a>
                        </div>
                        <?php
                    }

                    if (!empty($organizer_twitter))
                    {
                        ?>
                        <div class="wpem-social-icon wpem-twitter">
                            <a href="<?php echo esc_url($organizer_twitter); ?>" target="_blank" title="Get Connect on Twitter"><?php _e('Twitter', 'wp-event-manager'); ?></a>
                        </div>
                        <?php
                    }
                    if (!empty($organizer_youtube))
                    {
                        ?>
                        <div class="wpem-social-icon wpem-youtube">
                            <a href="<?php echo esc_url($organizer_youtube); ?>" target="_blank" title="Get Connect on Whatsapp"><?php _e('Youtube', 'wp-event-manager'); ?></a>
                        </div>
                    <?php } ?>

                    <?php do_action('single_event_listing_organizer_single_social_end', $organizer_id); ?>

                </div>
            </div>

        </div>

        <div class="wpem-organizer-contact-actions">
            <?php do_action('single_event_listing_organizer_action_start', $organizer_id); ?>

            <?php do_action('single_event_listing_organizer_action_end', $organizer_id); ?>
        </div>


        <?php do_action('single_event_listing_organizer_end'); ?>
    </div>
</div>

<?php
get_event_manager_template( 
    'organizer-event_listing.php', 
    array(
        'organizer_id'  => $organizer_id,
        'per_page'      => $per_page,
        'show_pagination'   => $show_pagination,
        'upcomingEvents' => $upcomingEvents,
        'currentEvents' => $currentEvents,
        'pastEvents'    => $pastEvents,
    ), 
    'wp-event-manager', 
    EVENT_MANAGER_PLUGIN_DIR . '/templates/organizer/'
);
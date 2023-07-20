
<div class="menu-wrapper">
    <div class="bl-side-nav" id="bl-side-nav">
        <div class="nav-close-btn" id="nav-close-btn" >
            <button class="nav-close-btn-icon">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cancel" viewBox="0 0 24 24"><path d="M6.758 17.243 12.001 12m5.243-5.243L12 12m0 0L6.758 6.757M12.001 12l5.243 5.243" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </button>
        </div>
        <ul class="bl-nav-menu"> 
            <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'walker'          => new Custom_Nav_Menu(),
                ));
            ?>
        </ul>
        <?php 
            $social_icons = get_field('social_icons','options');
            if($social_icons):
        ?>
        <div class="bl-social-icons">
            <ul class="social-icon">
            <?php 
                foreach($social_icons as $icon) { 
                    $icon_url = $icon['icon_link'];
                    $icon_code = $icon['svg_icon'];

                    echo "<li> <a href='$icon_url'> $icon_code  </a> </li>";
                }
            ?>
           </ul>
        </div>
        <?php endif; ?>
    </div>
    <span class="menu-overlay"></span>
</div>
<div class="bl-header-container">
    <div class="bl-header-section-1 bl-header-section">
            <div class="bl-header-hamburger-icon" id="bl-header-hamburger-icon">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-menu" viewBox="0 0 24 24"><path d="M3 5h18M3 12h18M3 19h18" stroke="#000" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            <div class="bl-header-search-icon">
            <a href="">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewBox="0 0 24 24"><g stroke="currentColor"><path d="M10.85 2c2.444 0 4.657.99 6.258 2.592A8.85 8.85 0 1 1 10.85 2ZM17.122 17.122 22 22"></path></g></svg>
            </a>
            </div>
    </div>
    <div class="bl-header-section-2 bl-header-section">
            <div class="bl-header-icon site-icon">
                <?php if (has_site_icon()) : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url(get_site_icon_url()); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> Icon">
                    </a>
                <?php endif; ?>
            </div>
    </div>
    <div class="bl-header-section-3 bl-header-section">
            <div class="profile-icon">
                <a href="#">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-profile-circled" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"  stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.271 18.346S6.5 15.5 12 15.5s7.73 2.846 7.73 2.846M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </a>
            </div>
            <div class="cart-icon">
                <a href="#">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart" viewBox="0 0 24 24"><path d="M3 6h19l-3 10H6L3 6zm0 0-.75-2.5m8.75 16a1.5 1.5 0 0 1-3 0m9 0a1.5 1.5 0 0 1-3 0"  stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </a>
            </div>
    </div>
</div>
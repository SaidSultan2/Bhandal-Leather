<?php

class Custom_Nav_Menu extends Walker_Nav_Menu {
    private $current_parent_item = null; // Variable to track the current parent item

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        if ($depth === 0 && $this->current_parent_item) {
            $output .= "<ul class='sub-menu-wrap' id='sub-menu-wrap'>";
            $output .= "<li class=' sub-menu-parent'>";
            $output .= '<button class="sub-menu-close-btn" id="sub-menu-close-btn" ><span class="sub-menu-close-icon"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-left" viewBox="0 0 24 24"><path d="M18.5 12H6m0 0 6-6m-6 6 6 6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></button>';
            $output .= "<a class='parent-title' href='" . esc_attr($this->current_parent_item->url) . "'>";
            $output .= esc_html($this->current_parent_item->title);
            
            $output .= '</a>';
        } else {
            $output .= "<ul class='sub-menu'>";
        }
    }
    
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "</ul>";
        if ($depth === 0 && $this->current_parent_item) {
            $output .= "</li>"; // Close the parent item
            $this->current_parent_item = null; // Reset the current parent item after the sub-menu is processed
        }
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= "<li>";
    
        $has_children = ! empty( $item->classes ) && in_array( 'menu-item-has-children', $item->classes );

        if ($has_children && $depth === 0) {
            $this->current_parent_item = $item; // Set the current parent item if it has children and is at depth 0
        }

        $class;

        if($has_children) {
            $class = "bl-has-child";
        } else {
            $class = 'bl-no-child';
        }

        $output .= "<a class='{$class}' href='" . esc_attr($item->url) . "'>" . esc_html($item->title);


        if ( $has_children ) {
            $output .= "<span class='item-icon'> <svg aria-hidden='true' focusable='false' role='presentation' class='icon icon-arrow-right' viewBox='0 0 24 24'><path d='M6 12h12.5m0 0-6-6m6 6-6 6' stroke='#000' stroke-linecap='round' stroke-linejoin='round'></path></svg></span>";
        }
        
        $output .= "</a>";
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>";
    }
}

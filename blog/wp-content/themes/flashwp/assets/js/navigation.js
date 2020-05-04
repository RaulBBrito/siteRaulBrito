/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var flashwp_secondary_container, flashwp_secondary_button, flashwp_secondary_menu, flashwp_secondary_links, flashwp_secondary_i, flashwp_secondary_len;

    flashwp_secondary_container = document.getElementById( 'flashwp-secondary-navigation' );
    if ( ! flashwp_secondary_container ) {
        return;
    }

    flashwp_secondary_button = flashwp_secondary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof flashwp_secondary_button ) {
        return;
    }

    flashwp_secondary_menu = flashwp_secondary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof flashwp_secondary_menu ) {
        flashwp_secondary_button.style.display = 'none';
        return;
    }

    flashwp_secondary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === flashwp_secondary_menu.className.indexOf( 'nav-menu' ) ) {
        flashwp_secondary_menu.className += ' nav-menu';
    }

    flashwp_secondary_button.onclick = function() {
        if ( -1 !== flashwp_secondary_container.className.indexOf( 'flashwp-toggled' ) ) {
            flashwp_secondary_container.className = flashwp_secondary_container.className.replace( ' flashwp-toggled', '' );
            flashwp_secondary_button.setAttribute( 'aria-expanded', 'false' );
            flashwp_secondary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            flashwp_secondary_container.className += ' flashwp-toggled';
            flashwp_secondary_button.setAttribute( 'aria-expanded', 'true' );
            flashwp_secondary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    flashwp_secondary_links    = flashwp_secondary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( flashwp_secondary_i = 0, flashwp_secondary_len = flashwp_secondary_links.length; flashwp_secondary_i < flashwp_secondary_len; flashwp_secondary_i++ ) {
        flashwp_secondary_links[flashwp_secondary_i].addEventListener( 'focus', flashwp_secondary_toggleFocus, true );
        flashwp_secondary_links[flashwp_secondary_i].addEventListener( 'blur', flashwp_secondary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function flashwp_secondary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'flashwp-focus' ) ) {
                    self.className = self.className.replace( ' flashwp-focus', '' );
                } else {
                    self.className += ' flashwp-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( flashwp_secondary_container ) {
        var touchStartFn, flashwp_secondary_i,
            parentLink = flashwp_secondary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, flashwp_secondary_i;

                if ( ! menuItem.classList.contains( 'flashwp-focus' ) ) {
                    e.preventDefault();
                    for ( flashwp_secondary_i = 0; flashwp_secondary_i < menuItem.parentNode.children.length; ++flashwp_secondary_i ) {
                        if ( menuItem === menuItem.parentNode.children[flashwp_secondary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[flashwp_secondary_i].classList.remove( 'flashwp-focus' );
                    }
                    menuItem.classList.add( 'flashwp-focus' );
                } else {
                    menuItem.classList.remove( 'flashwp-focus' );
                }
            };

            for ( flashwp_secondary_i = 0; flashwp_secondary_i < parentLink.length; ++flashwp_secondary_i ) {
                parentLink[flashwp_secondary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( flashwp_secondary_container ) );
} )();


( function() {
    var flashwp_primary_container, flashwp_primary_button, flashwp_primary_menu, flashwp_primary_links, flashwp_primary_i, flashwp_primary_len;

    flashwp_primary_container = document.getElementById( 'flashwp-primary-navigation' );
    if ( ! flashwp_primary_container ) {
        return;
    }

    flashwp_primary_button = flashwp_primary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof flashwp_primary_button ) {
        return;
    }

    flashwp_primary_menu = flashwp_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof flashwp_primary_menu ) {
        flashwp_primary_button.style.display = 'none';
        return;
    }

    flashwp_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === flashwp_primary_menu.className.indexOf( 'nav-menu' ) ) {
        flashwp_primary_menu.className += ' nav-menu';
    }

    flashwp_primary_button.onclick = function() {
        if ( -1 !== flashwp_primary_container.className.indexOf( 'flashwp-toggled' ) ) {
            flashwp_primary_container.className = flashwp_primary_container.className.replace( ' flashwp-toggled', '' );
            flashwp_primary_button.setAttribute( 'aria-expanded', 'false' );
            flashwp_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            flashwp_primary_container.className += ' flashwp-toggled';
            flashwp_primary_button.setAttribute( 'aria-expanded', 'true' );
            flashwp_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    flashwp_primary_links    = flashwp_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( flashwp_primary_i = 0, flashwp_primary_len = flashwp_primary_links.length; flashwp_primary_i < flashwp_primary_len; flashwp_primary_i++ ) {
        flashwp_primary_links[flashwp_primary_i].addEventListener( 'focus', flashwp_primary_toggleFocus, true );
        flashwp_primary_links[flashwp_primary_i].addEventListener( 'blur', flashwp_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function flashwp_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'flashwp-focus' ) ) {
                    self.className = self.className.replace( ' flashwp-focus', '' );
                } else {
                    self.className += ' flashwp-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( flashwp_primary_container ) {
        var touchStartFn, flashwp_primary_i,
            parentLink = flashwp_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, flashwp_primary_i;

                if ( ! menuItem.classList.contains( 'flashwp-focus' ) ) {
                    e.preventDefault();
                    for ( flashwp_primary_i = 0; flashwp_primary_i < menuItem.parentNode.children.length; ++flashwp_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[flashwp_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[flashwp_primary_i].classList.remove( 'flashwp-focus' );
                    }
                    menuItem.classList.add( 'flashwp-focus' );
                } else {
                    menuItem.classList.remove( 'flashwp-focus' );
                }
            };

            for ( flashwp_primary_i = 0; flashwp_primary_i < parentLink.length; ++flashwp_primary_i ) {
                parentLink[flashwp_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( flashwp_primary_container ) );
} )();
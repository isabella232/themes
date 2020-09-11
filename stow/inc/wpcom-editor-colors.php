<?php
/*
 * Custom Editor Colors
 */

// Background Color
// $config-global--color-background-default
add_editor_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '#editor .editor-styles-wrapper,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation > div > ul > li > .sub-menu', 'background-color' ),

	// Text-color
	array( '.button,
			.button.has-focus,
			.button:focus,
			.button:hover,
			.fse-template-part .main-navigation .button,
			.fse-template-part .main-navigation .button:focus,
			.fse-template-part .main-navigation .button:hover,
			.fse-template-part .main-navigation .has-focus.button,
			.wp-block-a8c-blog-posts + .button,
			.wp-block-a8c-blog-posts + .button:focus,
			.wp-block-a8c-blog-posts + .button:hover,
			.wp-block-a8c-blog-posts + .has-focus.button,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color),
			.wp-block-button:not(.is-style-outline) .wp-block-button__link.has-focus:not(.has-text-color),
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color):focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color):hover,
			.wp-block-cover,
			.wp-block-cover.has-background-dim,
			.wp-block-cover-image,
			.wp-block-cover-image.has-background-dim,
			.wp-block-cover-image:not([class*="background-color"]) .block-editor-block-list__block,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
			.wp-block-cover:not([class*="background-color"]) .block-editor-block-list__block,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
			.wp-block-file div.wp-block-file__button,
			.wp-block-file div.wp-block-file__button:focus,
			.wp-block-file div.wp-block-file__button:hover,
			.wp-block-file div.wp-block-file__button:visited,
			.wp-block-pullquote.is-style-solid-color,
			.wp-block-search .wp-block-search__button,
			.wp-block-search .wp-block-search__button:focus,
			.wp-block-search .wp-block-search__button:hover,
			.wp-block-search .wp-block-search__button:visited', 'color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color[class],
			#editor .editor-styles-wrapper .has-secondary-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-dark-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-light-background-color[class],
			#editor .editor-styles-wrapper .has-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-primary-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-secondary-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-dark-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-light-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-color[class]', 'color' ),
	// Background-color
	array( '#editor .editor-styles-wrapper .has-background-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-background-color[class]', 'background-color' ),

	// Text-color darkened
	array( '#editor .editor-styles-wrapper .has-background-dark-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-dark-color[class]', 'color', '-1'  ),
	// Background-color darkened
	array( '#editor .editor-styles-wrapper .has-background-dark-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-dark-background-color[class]', 'background-color', '-1' ),

	// Text-color lightened
	array( '#editor .editor-styles-wrapper .has-background-light-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-light-color[class]', 'color', '+1'  ),
	// Background-color lightened
	array( '#editor .editor-styles-wrapper .has-background-light-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-light-background-color[class]', 'background-color', '+1' ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_editor_color_rule( 'link', '#404040', array(

	// Background-color
	array( '.wp-block-pullquote.is-style-solid-color', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .fse-template-part .main-navigation a,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation a:link,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation a:visited,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a,
			#editor .editor-styles-wrapper a', 'color' ),

	// Border color left
	array( '#editor .editor-styles-wrapper .wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '#editor .editor-styles-wrapper .wp-block-quote[style*="text-align: right"],
			#editor .editor-styles-wrapper .wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-color[class],
			#editor .editor-styles-wrapper .wp-block .has-primary-color[class]', 'color' ),
	// Background-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-primary-background-color[class]', 'background-color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_editor_color_rule( 'txt', '#444444', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .editor-post-title__block .editor-post-title__input,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation,
			#editor .editor-styles-wrapper .has-background-background-color,
			#editor .editor-styles-wrapper .has-background-dark-background-color,
			#editor .editor-styles-wrapper .has-background-light-background-color,
			#editor .editor-styles-wrapper .has-foreground-color,
			#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .wp-block-cover,
			#editor .editor-styles-wrapper .wp-block-cover-image', 'background-color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '#editor .editor-styles-wrapper .has-background-background-color[class],
			#editor .editor-styles-wrapper .has-background-dark-background-color[class],
			#editor .editor-styles-wrapper .has-background-light-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-color[class]', 'color' ),
	// Background-color
	array( '#editor .editor-styles-wrapper .has-foreground-background-color[class]', 'background-color' ),
	// Text-color darkened
	array( '#editor .editor-styles-wrapper .has-foreground-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '#editor .editor-styles-wrapper .has-foreground-dark-background-color[class]', 'background-color', '-1' ),
	// Text-color brightened
	array( '#editor .editor-styles-wrapper .has-foreground-light-color[class]', 'color', '+2' ),
	// Background-color brightened
	array( '#editor .editor-styles-wrapper .has-foreground-light-background-color[class]', 'background-color', '+2' ),

	/**
	 * Grays
	 * Same as text color
	 */
	// Text-color
	array( '#editor .editor-styles-wrapper .a8c-posts-list__item .a8c-posts-list-item__meta,
			#editor .editor-styles-wrapper .wp-block-image figcaption,
			#editor .editor-styles-wrapper .wp-block-latest-comments .wp-block-latest-comments__comment-date,
			#editor .editor-styles-wrapper .wp-block-latest-posts .wp-block-latest-posts__post-date,
			#editor .editor-styles-wrapper .wp-block-newspack-blocks-homepage-articles article .cat-links,
			#editor .editor-styles-wrapper .wp-block-newspack-blocks-homepage-articles article .entry-meta,
			#editor .editor-styles-wrapper .wp-block-pullquote .wp-block-pullquote__citation,
			#editor .editor-styles-wrapper .wp-block-pullquote cite,
			#editor .editor-styles-wrapper .wp-block-pullquote footer,
			#editor .editor-styles-wrapper .wp-block-quote .wp-block-quote__citation,
			#editor .editor-styles-wrapper .wp-block-quote cite,
			#editor .editor-styles-wrapper .wp-block-quote footer,
			#editor .editor-styles-wrapper .wp-block-quote.is-large .wp-block-quote__citation,
			#editor .editor-styles-wrapper .wp-block-quote.is-large cite,
			#editor .editor-styles-wrapper .wp-block-quote.is-large footer,
			#editor .editor-styles-wrapper .wp-block-quote.is-style-large .wp-block-quote__citation,
			#editor .editor-styles-wrapper .wp-block-quote.is-style-large cite,
			#editor .editor-styles-wrapper .wp-block-quote.is-style-large footer,
			#editor .editor-styles-wrapper .wp-block-video figcaption,
			#editor .editor-styles-wrapper figcaption,
			#editor .editor-styles-wrapper .wp-block-separator.is-style-dots', 'color' ),
	// Border-color
	array( '#editor .editor-styles-wrapper .wp-block-code', 'border-color' ),
	// Border-top-color
	array( '#editor .editor-styles-wrapper .wp-block-pullquote', 'border-top-color' ),
	// Border-bottom-color
	array( '#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper .wp-block-separator', 'border-bottom-color' ),

), __( 'Text Color' ) );

// Accent Color (Red)
// $config-global--color-secondary-default
add_editor_color_rule( 'fg1', '#f25f70', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .fse-template-part .main-navigation a:hover,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links a:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta a:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .more-link:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .more-link:hover,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline,
			#editor .editor-styles-wrapper .wp-block-coblocks-column a,
			#editor .editor-styles-wrapper .wp-block-quote .wp-block-quote__citation,
			#editor .editor-styles-wrapper .wp-block-quote[style*="text-align:center"] .wp-block-quote__citation,
			#editor .editor-styles-wrapper .wp-block-quote[style*="text-align:right"] .wp-block-quote__citation,
			#editor .editor-styles-wrapper a:hover', 'color' ),
	
	// Background-color
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation #toggle:focus + #toggle-menu,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-file div.wp-block-file__button,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button', 'background-color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '#editor .editor-styles-wrapper .has-secondary-color[class]', 'color' ),
	// Background-color
	array( '#editor .editor-styles-wrapper .has-secondary-background-color[class]', 'background-color' ),

), __( 'Secondary Color' ) );
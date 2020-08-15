<?php
/* ---------------------------------------------------------
 * Icon Fonts
 *
 * Functions related to Icon Fonts parsing and loading
  ---------------------------------------------------------- */


/**
 * Font Awesome classes
 *
 * @return array
 */
function wpbucket_font_awesome_classes() {

    $font_awesome_icons = array(
            'fa fa-glass',
            'fa fa-music',
            'fa fa-search',
            'fa fa-envelope-o',
            'fa fa-heart',
            'fa fa-star',
            'fa fa-star-o',
            'fa fa-user',
            'fa fa-film',
            'fa fa-th-large',
            'fa fa-th',
            'fa fa-th-list',
            'fa fa-check',
            'fa fa-times',
            'fa fa-search-plus',
            'fa fa-search-minus',
            'fa fa-power-off',
            'fa fa-signal',
            'fa fa-cog',
            'fa fa-trash-o',
            'fa fa-home',
            'fa fa-file-o',
            'fa fa-clock-o',
            'fa fa-road',
            'fa fa-download',
            'fa fa-arrow-circle-o-down',
            'fa fa-arrow-circle-o-up',
            'fa fa-inbox',
            'fa fa-play-circle-o',
            'fa fa-repeat',
            'fa fa-refresh',
            'fa fa-list-alt',
            'fa fa-lock',
            'fa fa-flag',
            'fa fa-headphones',
            'fa fa-volume-off',
            'fa fa-volume-down',
            'fa fa-volume-up',
            'fa fa-qrcode',
            'fa fa-barcode',
            'fa fa-tag',
            'fa fa-tags',
            'fa fa-book',
            'fa fa-bookmark',
            'fa fa-print',
            'fa fa-camera',
            'fa fa-font',
            'fa fa-bold',
            'fa fa-italic',
            'fa fa-text-height',
            'fa fa-text-width',
            'fa fa-align-left',
            'fa fa-align-center',
            'fa fa-align-right',
            'fa fa-align-justify',
            'fa fa-list',
            'fa fa-outdent',
            'fa fa-indent',
            'fa fa-video-camera',
            'fa fa-picture-o',
            'fa fa-pencil',
            'fa fa-map-marker',
            'fa fa-adjust',
            'fa fa-tint',
            'fa fa-pencil-square-o',
            'fa fa-share-square-o',
            'fa fa-check-square-o',
            'fa fa-arrows',
            'fa fa-step-backward',
            'fa fa-fast-backward',
            'fa fa-backward',
            'fa fa-play',
            'fa fa-pause',
            'fa fa-stop',
            'fa fa-forward',
            'fa fa-fast-forward',
            'fa fa-step-forward',
            'fa-eject',
            'fa fa-chevron-left',
            'fa fa-chevron-right',
            'fa fa-plus-circle',
            'fa fa-minus-circle',
            'fa fa-times-circle',
            'fa fa-check-circle',
            'fa fa-question-circle',
            'fa fa-info-circle',
            'fa fa-crosshairs',
            'fa fa-times-circle-o',
            'fa fa-check-circle-o',
            'fa fa-ban',
            'fa fa-arrow-left',
            'fa fa-arrow-right',
            'fa fa-arrow-up',
            'fa fa-arrow-down',
            'fa fa-share',
            'fa fa-expand',
            'fa fa-compress',
            'fa fa-plus',
            'fa fa-minus',
            'fa fa-asterisk',
            'fa fa-exclamation-circle',
            'fa fa-gift',
            'fa fa-leaf',
            'fa fa-fire',
            'fa fa-eye',
            'fa fa-eye-slash',
            'fa fa-exclamation-triangle',
            'fa fa-plane',
            'fa fa-calendar',
            'fa fa-random',
            'fa fa-comment',
            'fa fa-magnet',
            'fa fa-chevron-up',
            'fa fa-chevron-down',
            'fa fa-retweet',
            'fa fa-shopping-cart',
            'fa fa-folder',
            'fa fa-folder-open',
            'fa fa-arrows-v',
            'fa fa-arrows-h',
            'fa fa-bar-chart-o',
            'fa fa-twitter-square',
            'fa fa-facebook-square',
            'fa fa-camera-retro',
            'fa fa-key',
            'fa fa-cogs',
            'fa fa-comments',
            'fa fa-thumbs-o-up',
            'fa fa-thumbs-o-down',
            'fa fa-star-half',
            'fa fa-heart-o',
            'fa fa-sign-out',
            'fa fa-linkedin-square',
            'fa fa-thumb-tack',
            'fa fa-external-link',
            'fa fa-sign-in',
            'fa fa-trophy',
            'fa fa-github-square',
            'fa fa-upload',
            'fa fa-lemon-o',
            'fa fa-phone',
            'fa fa-square-o',
            'fa fa-bookmark-o',
            'fa fa-phone-square',
            'fa fa-twitter',
            'fa fa-facebook',
            'fa fa-github',
            'fa fa-unlock',
            'fa fa-credit-card',
            'fa fa-rss',
            'fa fa-hdd-o',
            'fa fa-bullhorn',
            'fa fa-bell',
            'fa fa-certificate',
            'fa fa-hand-o-right',
            'fa fa-hand-o-left',
            'fa fa-hand-o-up',
            'fa fa-hand-o-down',
            'fa fa-arrow-circle-left',
            'fa fa-arrow-circle-right',
            'fa fa-arrow-circle-up',
            'fa fa-arrow-circle-down',
            'fa fa-globe',
            'fa fa-wrench',
            'fa fa-tasks',
            'fa fa-filter',
            'fa fa-briefcase',
            'fa fa-arrows-alt',
            'fa fa-users',
            'fa fa-link',
            'fa fa-cloud',
            'fa fa-flask',
            'fa fa-scissors',
            'fa fa-files-o',
            'fa fa-paperclip',
            'fa fa-floppy-o',
            'fa fa-square',
            'fa fa-bars',
            'fa fa-list-ul',
            'fa fa-list-ol',
            'fa fa-strikethrough',
            'fa fa-underline',
            'fa fa-table',
            'fa fa-magic',
            'fa fa-truck',
            'fa fa-pinterest',
            'fa fa-pinterest-square',
            'fa fa-google-plus-square',
            'fa fa-google-plus',
            'fa fa-money',
            'fa fa-caret-down',
            'fa fa-caret-up',
            'fa fa-caret-left',
            'fa fa-caret-right',
            'fa fa-columns',
            'fa fa-sort',
            'fa fa-sort-desc',
            'fa fa-sort-asc',
            'fa fa-envelope',
            'fa fa-linkedin',
            'fa fa-undo',
            'fa fa-gavel',
            'fa fa-tachometer',
            'fa fa-comment-o',
            'fa fa-comments-o',
            'fa fa-bolt',
            'fa fa-sitemap',
            'fa fa-umbrella',
            'fa fa-clipboard',
            'fa fa-lightbulb-o',
            'fa fa-exchange',
            'fa fa-cloud-download',
            'fa fa-cloud-upload',
            'fa fa-user-md',
            'fa fa-stethoscope',
            'fa fa-suitcase',
            'fa fa-bell-o',
            'fa fa-coffee',
            'fa fa-cutlery',
            'fa fa-file-text-o',
            'fa fa-building-o',
            'fa fa-hospital-o',
            'fa fa-ambulance',
            'fa fa-medkit',
            'fa fa-fighter-jet',
            'fa fa-beer',
            'fa fa-h-square',
            'fa fa-plus-square',
            'fa fa-angle-double-left',
            'fa fa-angle-double-right',
            'fa fa-angle-double-up',
            'fa fa-angle-double-down',
            'fa fa-angle-left',
            'fa fa-angle-right',
            'fa fa-angle-up',
            'fa fa-angle-down',
            'fa fa-desktop',
            'fa fa-laptop',
            'fa fa-tablet',
            'fa fa-mobile',
            'fa fa-circle-o',
            'fa fa-quote-left',
            'fa fa-quote-right',
            'fa fa-spinner',
            'fa fa-circle',
            'fa fa-reply',
            'fa fa-github-alt',
            'fa fa-folder-o',
            'fa fa-folder-open-o',
            'fa fa-smile-o',
            'fa fa-frown-o',
            'fa fa-meh-o',
            'fa fa-gamepad',
            'fa fa-keyboard-o',
            'fa fa-flag-o',
            'fa fa-flag-checkered',
            'fa fa-terminal',
            'fa fa-code',
            'fa fa-reply-all',
            'fa fa-star-half-o',
            'fa fa-location-arrow',
            'fa fa-crop',
            'fa fa-code-fork',
            'fa fa-chain-broken',
            'fa fa-question',
            'fa fa-info',
            'fa fa-exclamation',
            'fa fa-superscript',
            'fa fa-subscript',
            'fa fa-eraser',
            'fa fa-puzzle-piece',
            'fa fa-microphone',
            'fa fa-microphone-slash',
            'fa fa-shield',
            'fa fa-calendar-o',
            'fa fa-fire-extinguisher',
            'fa fa-rocket',
            'fa fa-maxcdn',
            'fa fa-chevron-circle-left',
            'fa fa-chevron-circle-right',
            'fa fa-chevron-circle-up',
            'fa fa-chevron-circle-down',
            'fa fa-html5',
            'fa fa-css3',
            'fa fa-anchor',
            'fa fa-unlock-alt',
            'fa fa-bullseye',
            'fa fa-ellipsis-h',
            'fa fa-ellipsis-v',
            'fa fa-rss-square',
            'fa fa-play-circle',
            'fa fa-ticket',
            'fa fa-minus-square',
            'fa fa-minus-square-o',
            'fa fa-level-up',
            'fa fa-level-down',
            'fa fa-check-square',
            'fa fa-pencil-square',
            'fa fa-external-link-square',
            'fa fa-share-square',
            'fa fa-compass',
            'fa fa-caret-square-o-down',
            'fa fa-caret-square-o-up',
            'fa fa-caret-square-o-right',
            'fa fa-eur',
            'fa fa-gbp',
            'fa fa-usd',
            'fa fa-inr',
            'fa fa-jpy',
            'fa fa-rub',
            'fa fa-krw',
            'fa fa-btc',
            'fa fa-file',
            'fa fa-file-text',
            'fa fa-sort-alpha-asc',
            'fa fa-sort-alpha-desc',
            'fa fa-sort-amount-asc',
            'fa fa-sort-amount-desc',
            'fa fa-sort-numeric-asc',
            'fa fa-sort-numeric-desc',
            'fa fa-thumbs-up',
            'fa fa-thumbs-down',
            'fa fa-youtube-square',
            'fa fa-youtube',
            'fa fa-xing',
            'fa fa-xing-square',
            'fa fa-youtube-play',
            'fa fa-dropbox',
            'fa fa-stack-overflow',
            'fa fa-instagram',
            'fa fa-flickr',
            'fa fa-adn',
            'fa fa-bitbucket',
            'fa fa-bitbucket-square',
            'fa fa-tumblr',
            'fa fa-tumblr-square',
            'fa fa-long-arrow-down',
            'fa fa-long-arrow-up',
            'fa fa-long-arrow-left',
            'fa fa-long-arrow-right',
            'fa fa-apple',
            'fa fa-windows',
            'fa fa-android',
            'fa fa-linux',
            'fa fa-dribbble',
            'fa fa-skype',
            'fa fa-foursquare',
            'fa fa-trello',
            'fa fa-female',
            'fa fa-male',
            'fa fa-gittip',
            'fa fa-sun-o',
            'fa fa-moon-o',
            'fa fa-archive',
            'fa fa-bug',
            'fa fa-vk',
            'fa fa-weibo',
            'fa fa-renren',
            'fa fa-pagelines',
            'fa fa-stack-exchange',
            'fa fa-arrow-circle-o-right',
            'fa fa-arrow-circle-o-left',
            'fa fa-caret-square-o-left',
            'fa fa-dot-circle-o',
            'fa fa-wheelchair',
            'fa fa-vimeo-square',
            'fa fa-try',
            'fa fa-plus-square-o',
            'fa fa-space-shuttle',
            'fa fa-slack',
            'fa fa-envelope-square',
            'fa fa-wordpress',
            'fa fa-openid',
            'fa fa-university',
            'fa fa-graduation-cap',
            'fa fa-yahoo',
            'fa fa-google',
            'fa fa-reddit',
            'fa fa-reddit-square',
            'fa fa-stumbleupon-circle',
            'fa fa-stumbleupon',
            'fa fa-delicious',
            'fa fa-digg',
            'fa fa-pied-piper',
            'fa fa-pied-piper-alt',
            'fa fa-drupal',
            'fa fa-joomla',
            'fa fa-language',
            'fa fa-fax',
            'fa fa-building',
            'fa fa-child',
            'fa fa-paw',
            'fa fa-spoon',
            'fa fa-cube',
            'fa fa-cubes',
            'fa fa-behance',
            'fa fa-behance-square',
            'fa fa-steam',
            'fa fa-steam-square',
            'fa fa-recycle',
            'fa fa-car',
            'fa fa-taxi',
            'fa fa-tree',
            'fa fa-spotify',
            'fa fa-deviantart',
            'fa fa-soundcloud',
            'fa fa-database',
            'fa fa-file-pdf-o',
            'fa fa-file-word-o',
            'fa fa-file-excel-o',
            'fa fa-file-powerpoint-o',
            'fa fa-file-image-o',
            'fa fa-file-archive-o',
            'fa fa-file-audio-o',
            'fa fa-file-video-o',
            'fa fa-file-code-o',
            'fa fa-vine',
            'fa fa-codepen',
            'fa fa-jsfiddle',
            'fa fa-life-ring',
            'fa fa-circle-o-notch',
            'fa fa-rebel',
            'fa fa-empire',
            'fa fa-git-square',
            'fa fa-git',
            'fa fa-hacker-news',
            'fa fa-tencent-weibo',
            'fa fa-qq',
            'fa fa-weixin',
            'fa fa-paper-plane',
            'fa fa fa-paper-plane-o',
            'fa fa-history',
            'fa fa-circle-thin',
            'fa fa fa-header',
            'fa fa-paragraph',
            'fa fa-sliders',
            'fa fa-share-alt',
            'fa fa-share-alt-square',
            'fa fa-bomb'
        );
        return $font_awesome_icons;
}


/**
 * Font Awesome classes
 *
 * @return array
 */
function wpbucket_font_elegant_classes() {

    $font_elegant_icons = array(
        'icon_mobile',
        'icon_tablet',
        'icon_pin_alt',
        'icon_clock',
        'icon_clock_alt',
        'icon_phone',
        'social_facebook',
        'social_twitter',
        'social_pinterest',
        'social_googleplus',
        'social_tumblr',
    );
    return $font_elegant_icons;
}
/**
 * Font Flat classes
 *
 * @return array
 */
function wpbucket_return_flaticon()
{
    $flaticon = array(
        'flaticon-clock',
        'flaticon-contact-form',
        'flaticon-envelope',
        'flaticon-fence',
        'flaticon-forest',
        'flaticon-gardening',
        'flaticon-house',
        'flaticon-link',
        'flaticon-people',
        'flaticon-phone-call',
        'flaticon-placeholder',
        'flaticon-shop',
        'flaticon-shovel',
        'flaticon-shovel-1',
        'flaticon-sprout',
        'flaticon-swimming-pool',
        'flaticon-tree-leaf',
    );
    return $flaticon;
}
<?
const ICON_LIST = [
    'activity' => 'Activity',
    'airplay' => 'Airplay',
    'alert-circle' => 'Alert Circle',
    'alert-octagon' => 'Alert Octagon',
    'alert-triangle' => 'Alert Triangle',
    'align-center' => 'Align Center',
    'align-justify' => 'Align Justify',
    'align-left' => 'Align Left',
    'align-right' => 'Align Right',
    'anchor' => 'Anchor',
    'aperture' => 'Aperture',
    'apple' => 'Apple',
    'archive' => 'Archive',
    'arrow-down' => 'Arrow Down',
    'arrow-down-circle' => 'Arrow Down Circle',
    'arrow-down-left' => 'Arrow Down Left',
    'arrow-down-right' => 'Arrow Down Right',
    'arrow-left' => 'Arrow Left',
    'arrow-left-circle' => 'Arrow Left Circle',
    'arrow-right' => 'Arrow Right',
    'arrow-right-circle' => 'Arrow Right Circle',
    'arrow-up' => 'Arrow Up',
    'arrow-up-circle' => 'Arrow Up Circle',
    'arrow-up-left' => 'Arrow Up Left',
    'arrow-up-right' => 'Arrow Up Right',
    'at-sign' => 'At Sign',
    'award' => 'Award',
    'bar-chart' => 'Bar Chart',
    'bar-chart-2' => 'Bar Chart 2',
    'battery' => 'Battery',
    'battery-charging' => 'Battery Charging',
    'bell' => 'Bell',
    'bell-off' => 'Bell Off',
    'bluetooth' => 'Bluetooth',
    'bold' => 'Bold',
    'book' => 'Book',
    'book-open' => 'Book Open',
    'bookmark' => 'Bookmark',
    'box' => 'Box',
    'briefcase' => 'Briefcase',
    'calendar' => 'Calendar',
    'camera' => 'Camera',
    'camera-off' => 'Camera Off',
    'cashback-1' => 'Cashback 1',
    'cashback-2' => 'Cashback 2',
    'cast' => 'Cast',
    'check' => 'Check',
    'check-circle' => 'Check Circle',
    'check-square' => 'Check Square',
    'chevron-down' => 'Chevron Down',
    'chevron-left' => 'Chevron Left',
    'chevron-right' => 'Chevron Right',
    'chevron-up' => 'Chevron Up',
    'chevrons-down' => 'Chevrons Down',
    'chevrons-left' => 'Chevrons Left',
    'chevrons-right' => 'Chevrons Right',
    'chevrons-up' => 'Chevrons Up',
    'chrome' => 'Chrome',
    'circle' => 'Circle',
    'clipboard' => 'Clipboard',
    'clock' => 'Clock',
    'cloud' => 'Cloud',
    'cloud-drizzle' => 'Cloud Drizzle',
    'cloud-lightning' => 'Cloud Lightning',
    'cloud-off' => 'Cloud Off',
    'cloud-rain' => 'Cloud Rain',
    'cloud-snow' => 'Cloud Snow',
    'code' => 'Code',
    'codepen' => 'Codepen',
    'codesandbox' => 'Codesandbox',
    'coffee' => 'Coffee',
    'coin-stack' => 'Coin Stack',
    'coins' => 'Coins',
    'columns' => 'Columns',
    'command' => 'Command',
    'compass' => 'Compass',
    'copy' => 'Copy',
    'corner-down-left' => 'Corner Down Left',
    'corner-down-right' => 'Corner Down Right',
    'corner-left-down' => 'Corner Left Down',
    'corner-left-up' => 'Corner Left Up',
    'corner-right-down' => 'Corner Right Down',
    'corner-right-up' => 'Corner Right Up',
    'corner-up-left' => 'Corner Up Left',
    'corner-up-right' => 'Corner Up Right',
    'cpu' => 'CPU',
    'credit-card' => 'Credit Card',
    'crop' => 'Crop',
    'crosshair' => 'Crosshair',
    'database' => 'Database',
    'delete' => 'Delete',
    'deposite' => 'Deposite',
    'disc' => 'Disc',
    'divide' => 'Divide',
    'divide-circle' => 'Divide Circle',
    'divide-square' => 'Divide Square',
    'dollar-2' => 'Dollar 2',
    'dollar-sign' => 'Dollar Sign',
    'download' => 'Download',
    'download-cloud' => 'Download Cloud',
    'dribbble' => 'Dribbble',
    'droplet' => 'Droplet',
    'edit' => 'Edit',
    'edit-2' => 'Edit 2',
    'edit-3' => 'Edit 3',
    'external-link' => 'External Link',
    'eye' => 'Eye',
    'eye-off' => 'Eye Off',
    'facebook-regular' => 'Facebook Regular',
    'facebook-solid' => 'Facebook Solid',
    'fast-forward' => 'Fast Forward',
    'feather' => 'Feather',
    'figma' => 'Figma',
    'file' => 'File',
    'file-minus' => 'File Minus',
    'file-plus' => 'File Plus',
    'file-text' => 'File Text',
    'fill-circle' => 'Fill Circle',
    'film' => 'Film',
    'filter' => 'Filter',
    'filters-lines' => 'Filters Lines',
    'flag' => 'Flag',
    'folder' => 'Folder',
    'folder-minus' => 'Folder Minus',
    'folder-plus' => 'Folder Plus',
    'framer' => 'Framer',
    'frown' => 'Frown',
    'gift' => 'Gift',
    'git-branch' => 'Git Branch',
    'git-commit' => 'Git Commit',
    'git-merge' => 'Git Merge',
    'git-pull-request' => 'Git Pull Request',
    'github-regular' => 'GitHub Regular',
    'github-solid' => 'GitHub Solid',
    'gitlab' => 'GitLab',
    'globe' => 'Globe',
    'google' => 'Google',
    'grid' => 'Grid',
    'hard-drive' => 'Hard Drive',
    'hash' => 'Hash',
    'headphones' => 'Headphones',
    'heart' => 'Heart',
    'help-circle' => 'Help Circle',
    'hexagon' => 'Hexagon',
    'home' => 'Home',
    'home-solid' => 'Home Solid',
    'image' => 'Image',
    'inbox' => 'Inbox',
    'info' => 'Info',
    'instagram' => 'Instagram',
    'italic' => 'Italic',
    'key' => 'Key',
    'layers' => 'Layers',
    'layers1' => 'Layers 1',
    'layout' => 'Layout',
    'life-buoy' => 'Life Buoy',
    'link' => 'Link',
    'link-2' => 'Link 2',
    'linkedin-regular' => 'LinkedIn Regular',
    'linkedin-solid' => 'LinkedIn Solid',
    'list' => 'List',
    'loader' => 'Loader',
    'lock' => 'Lock',
    'log-in' => 'Log In',
    'log-out' => 'Log Out',
    'mail' => 'Mail',
    'map' => 'Map',
    'map-pin' => 'Map Pin',
    'maximize' => 'Maximize',
    'maximize-2' => 'Maximize 2',
    'meh' => 'Meh',
    'menu' => 'Menu',
    'menu-2' => 'Menu 2',
    'message-circle' => 'Message Circle',
    'message-square' => 'Message Square',
    'mic' => 'Mic',
    'mic-off' => 'Mic Off',
    'minimize' => 'Minimize',
    'minimize-2' => 'Minimize 2',
    'minus' => 'Minus',
    'minus-circle' => 'Minus Circle',
    'minus-square' => 'Minus Square',
    'money' => 'Money',
    'monitor' => 'Monitor',
    'moon' => 'Moon',
    'more-horizontal' => 'More Horizontal',
    'more-vertical' => 'More Vertical',
    'mouse-pointer' => 'Mouse Pointer',
    'move' => 'Move',
    'music' => 'Music',
    'navigation' => 'Navigation',
    'navigation-1' => 'Navigation 1',
    'navigation-2' => 'Navigation 2',
    'no-money' => 'No Money',
    'octagon' => 'Octagon',
    'package' => 'Package',
    'paperclip' => 'Paperclip',
    'pause' => 'Pause',
    'pause-circle' => 'Pause Circle',
    'pen-tool' => 'Pen Tool',
    'percent' => 'Percent',
    'phone' => 'Phone',
    'phone-call' => 'Phone Call',
    'phone-forwarded' => 'Phone Forwarded',
    'phone-incoming' => 'Phone Incoming',
    'phone-missed' => 'Phone Missed',
    'phone-off' => 'Phone Off',
    'phone-outgoing' => 'Phone Outgoing',
    'pie-chart' => 'Pie Chart',
    'pinterest' => 'Pinterest',
    'play' => 'Play',
    'play-circle' => 'Play Circle',
    'plus' => 'Plus',
    'plus-circle' => 'Plus Circle',
    'plus-square' => 'Plus Square',
    'pocket' => 'Pocket',
    'power' => 'Power',
    'printer' => 'Printer',
    'radio' => 'Radio',
    'real-money' => 'Real Money',
    'refresh-ccw' => 'Refresh CCW',
    'refresh-cw' => 'Refresh CW',
    'repeat' => 'Repeat',
    'rewind' => 'Rewind',
    'rocket' => 'Rocket',
    'rotate-ccw' => 'Rotate CCW',
    'rotate-cw' => 'Rotate CW',
    'rss' => 'RSS',
    'save' => 'Save',
    'scissors' => 'Scissors',
    'search' => 'Search',
    'send' => 'Send',
    'server' => 'Server',
    'settings' => 'Settings',
    'share' => 'Share',
    'share-2' => 'Share 2',
    'shield' => 'Shield',
    'shield-off' => 'Shield Off',
    'shopping-bag' => 'Shopping Bag',
    'shopping-cart' => 'Shopping Cart',
    'shuffle' => 'Shuffle',
    'sidebar' => 'Sidebar',
    'skip-back' => 'Skip Back',
    'skip-forward' => 'Skip Forward',
    'slack' => 'Slack',
    'slash' => 'Slash',
    'slash-divider' => 'Slash Divider',
    'sliders' => 'Sliders',
    'smartphone' => 'Smartphone',
    'smile' => 'Smile',
    'snapchat' => 'Snapchat',
    'speaker' => 'Speaker',
    'square' => 'Square',
    'star' => 'Star',
    'star-02' => 'Star 02',
    'stop-circle' => 'Stop Circle',
    'sun' => 'Sun',
    'sunrise' => 'Sunrise',
    'sunset' => 'Sunset',
    'tablet' => 'Tablet',
    'tag' => 'Tag',
    'target' => 'Target',
    'terminal' => 'Terminal',
    'thermometer' => 'Thermometer',
    'thumbs-down' => 'Thumbs Down',
    'thumbs-up' => 'Thumbs Up',
    'toggle-left' => 'Toggle Left',
    'toggle-right' => 'Toggle Right',
    'tool' => 'Tool',
    'trash' => 'Trash',
    'trash-2' => 'Trash 2',
    'trello' => 'Trello',
    'trending-down' => 'Trending Down',
    'trending-up' => 'Trending Up',
    'triangle' => 'Triangle',
    'truck' => 'Truck',
    'tv' => 'TV',
    'twitch' => 'Twitch',
    'twitter-regular' => 'Twitter Regular',
    'twitter-solid' => 'Twitter Solid',
    'type' => 'Type',
    'umbrella' => 'Umbrella',
    'underline' => 'Underline',
    'unlock' => 'Unlock',
    'upload' => 'Upload',
    'upload-cloud' => 'Upload Cloud',
    'user' => 'User',
    'user-check' => 'User Check',
    'user-minus' => 'User Minus',
    'user-plus' => 'User Plus',
    'user-x' => 'User X',
    'users' => 'Users',
    'video' => 'Video',
    'video-off' => 'Video Off',
    'voicemail' => 'Voicemail',
    'volume' => 'Volume',
    'volume-1' => 'Volume 1',
    'volume-2' => 'Volume 2',
    'volume-x' => 'Volume X',
    'watch' => 'Watch',
    'wifi' => 'WiFi',
    'wifi-off' => 'WiFi Off',
    'wind' => 'Wind',
    'withdraw' => 'Withdraw',
    'x' => 'X',
    'x-circle' => 'X Circle',
    'x-octagon' => 'X Octagon',
    'x-square' => 'X Square',
    'youtube-regular' => 'YouTube Regular',
    'youtube-solid' => 'YouTube Solid',
    'zap' => 'Zap',
    'zap-off' => 'Zap Off',
    'zoom-in' => 'Zoom In',
    'zoom-out' => 'Zoom Out'
];
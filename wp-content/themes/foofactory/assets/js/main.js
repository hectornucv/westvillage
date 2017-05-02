/*=========================================
=            Create Bundle CSS            =
=========================================*/
//anything imported into bundle.scss is but into dist/bundle.scss
//you probably don't ever need to touch this.
require('../scss/bundle.scss');

/*========================================
=            Create Bundle.js            =
========================================*/
//anything included below will be included in the bundle.js


//NPM
// require('owl.carousel');
require('bootstrap-loader'); //just get the script

//CUSTOM
require('./_map.js');
require('./_navigation.js');
require('./_slider.js');
require('./_oembed.js');



// TODO - Use NPM or BOWER
// Hammer js

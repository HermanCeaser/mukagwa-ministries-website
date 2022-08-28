import './jquery.min';
import './bootstrap';
import './bootstrap.bundle';
import './jquery.meanmenu';
import './jquery.magnific-popup.min';
import './owl.carousel.min';
import './wow.min';
import './waypoints.min';
import './jquery.counterup.min';



import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// custom js
import './custom';
import './custom-progress-bar';
import './custom-scroll-count';
import './video';

import.meta.glob([
    '../webfonts/**',
    '../img/logo.png',
  ]);

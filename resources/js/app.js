
import './bootstrap';




import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// custom js

import.meta.glob([
    '../webfonts/**',
    '../img/logo.png',
  ]);

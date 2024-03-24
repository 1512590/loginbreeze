import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function() {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});

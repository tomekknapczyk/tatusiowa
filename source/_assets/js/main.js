window.axios = require('axios');
window.Vue = require('vue');

import Fuse from 'fuse.js';
window.fusejs = Fuse;
import Search from './components/Search.vue';
import Glide from '@glidejs/glide';
import LazyLoad from "vanilla-lazyload";
import baguetteBox from 'baguettebox.js';

Vue.config.productionTip = false;

new Vue({
    components: {
        Search,
    },
}).$mount('#vue-search');

if(document.body.classList.contains('home-page')){
    new Glide('.glide', {
      type: 'carousel',
      gap: 0
    }).mount();
}

window.onload = function() {
    document.body.classList.remove('preload');
    baguetteBox.run('.post-content');
};

var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
});

if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/service-worker.js')
        .then((reg) => {
          console.log('Service worker registered.', reg);
        });
  });
}
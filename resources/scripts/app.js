import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
  (function() { // remove the box shadow from the header when it's at the top of the page
    document.querySelector('#top-nav').classList.remove('shadow-lg');
    window.onscroll = function() {
      if (window.scrollY > 0) {
        document.querySelector('#top-nav').classList.add('shadow-lg');
      } else {
        document.querySelector('#top-nav').classList.remove('shadow-lg');
      }
    }
  })();
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

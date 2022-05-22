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

  /**
   * remove the box shadow from the header when it's at the top of the page
   */
  (function() { 
    let el = document.querySelector('#top-nav');
    el.classList.remove('shadow-lg');
    window.onscroll = function() {
      if (window.scrollY > 0) {
        el.classList.add('shadow-lg');
      } else {
        el.classList.remove('shadow-lg');
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

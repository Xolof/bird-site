import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  const commentForm = document.getElementById('commentform');

  if (commentForm) {
    commentForm.removeAttribute('novalidate');
  }

  const hamburger = document.getElementById('hamburger');
  const nav = document.querySelector('.nav-primary');

  hamburger.addEventListener('click', () => {
    nav.classList.add('visible');
  });

  const closeButton = document.querySelector('.navCloseButton');
  closeButton.addEventListener('click', () => {
    nav.classList.remove('visible');
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);

import 'intro.js/introjs.css';

import introJs from 'intro.js';

introJs().setOptions({
    steps: [{
      intro: "Hello world!"
    }, {
      element: document.querySelector('.test'),
      intro: "Ceci est un test!"
    }]
  }).start();
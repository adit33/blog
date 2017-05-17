
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

// try {
//     window.$ = window.jQuery = require('jquery');

//     require('bootstrap-sass');
// } catch (e) {}

window.$ = window.jQuery = require('jquery');

// import UIkit from 'uikit';
// import Icons from 'uikit/dist/js/uikit-icons';

// // loads the Icon plugin
// UIkit.use(Icons);

// import '../semantic-ui/dist/components/dimmer';
// import '../semantic-ui/dist/components/transition';
// import '../semantic-ui/dist/components/dropdown';
// import '../semantic-ui/dist/components/modal';
// import '../semantic-ui/dist/components/rating';
// import '../semantic-ui/dist/components/tab';
// import '../semantic-ui/dist/components/popup';
// import '../semantic-ui/dist/components/sticky';
// import '../semantic-ui/dist/components/checkbox';



/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

import _ from 'lodash'
window._ = _;

import $ from 'jquery';
window.$ = window.jQuery = $

import select2 from 'select2'
select2();

import swal from 'sweetalert2'
window.Swal = swal;

import ClassicEditor from '@ckeditor/ckeditor5-build-classic/build/ckeditor'
window.ClassicEditor = ClassicEditor;

import * as FilePond from 'filepond';
window.FilePond = FilePond

import { Calendar } from '@fullcalendar/core';
window.Calendar = Calendar;

import interactionPlugin from '@fullcalendar/interaction';
window.interactionPlugin = interactionPlugin;

import dayGridPlugin from '@fullcalendar/daygrid';
window.dayGridPlugin = dayGridPlugin;

import timeGridPlugin from '@fullcalendar/timegrid';
window.timeGridPlugin = timeGridPlugin;

import listPlugin from '@fullcalendar/list';
window.listPlugin = listPlugin;

import bootstrap5Plugin from '@fullcalendar/bootstrap5';
window.bootstrap5Plugin = bootstrap5Plugin;

// import Datatable from 'datatables'
// Datatable();

import 'datatables.net-bs5'

import * as Popper from '@popperjs/core'
window.Popper = Popper

import 'bootstrap'

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

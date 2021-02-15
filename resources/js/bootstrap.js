import Echo from './echo';

window.Echo = Echo;

document.addEventListener('turbo:before-fetch-request', (e) => {
    e.detail.fetchOptions.headers['X-Socket-ID'] = Echo.socketId();
});

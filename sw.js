// Nome do arquivo: service-worker.js

const CACHE_NAME = 'geagron-chache';
    const urlsToCache = [
    '/',
    '/assets/css/style.css',
    'assets/js/scripts.js',
    'assets/img/logo_geagron_login.png'
];

self.addEventListener('install', event => {
  // Perform install steps
    event.waitUntil(
    caches.open(CACHE_NAME)
        .then(cache => {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
        })
    );
});

self.addEventListener('fetch', event => {
    event.respondWith(
    caches.match(event.request)
        .then(response => {
        // Cache hit - return response
        if (response) {
            return response;
        }

        // Clone the request because it's a stream that can only be consumed once.
        const fetchRequest = event.request.clone();

        return fetch(fetchRequest).then(
            // Check if we received a valid response
            response => {
            if (!response || response.status !== 200 || response.type !== 'basic') {
                return response;
            }

            // Clone the response because it's a stream that can only be consumed once.
            const responseToCache = response.clone();

            caches.open(CACHE_NAME)
                .then(cache => {
                cache.put(event.request, responseToCache);
                });

            return response;
            }
        );
        })
    );
});

self.addEventListener('activate', event => {
    const cacheWhitelist = [CACHE_NAME];

    event.waitUntil(
    caches.keys().then(cacheNames => {
        return Promise.all(
        cacheNames.map(cacheName => {
            if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
            }
        })
        );
    })
    );
});
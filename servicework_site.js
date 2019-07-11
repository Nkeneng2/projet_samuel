const cacheName = 'site';

//install event
self.addEventListener('install', e => {
    console.log('Service Worker: Installed');
});

//Activate Event
self.addEventListener('activate', e => {
    console.log('Service Worker: Activated');
    //remove all cache
    e.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(
                    cache => {
                        if (cache !== cacheName) {
                            console.log('Service Worker: Clearing old caches');
                            return caches.delete(cache);
                        }
                    }
                )
            )
        })
    );
});

//now call fetch events
self.addEventListener('fetch', e => {
    console.log('Service Worker: Fetching caches');
    e.respondWith(fetch(e.request)
        .then(res => {
            const resClone = res.clone();
            caches
                .open(cacheName)
                .then(cache => {
                    cache.put(e.request, resClone);
                });
            return res;
        }).catch(err => caches.match(e.request).then(res => res))



    );
});
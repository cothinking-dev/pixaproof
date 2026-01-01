import './bootstrap';

// Alpine.js is included via Livewire 3, which bundles:
// - @alpinejs/persist
// - @alpinejs/intersect
// - @alpinejs/collapse
// - @alpinejs/focus

// Livewire session expiration handler
document.addEventListener('livewire:init', () => {
    Livewire.hook('request', ({ fail }) => {
        fail(({ status, preventDefault }) => {
            if (status === 419) {
                preventDefault();
                if (confirm('Your session has expired. Would you like to refresh the page?')) {
                    window.location.reload();
                }
            }
        });
    });
});


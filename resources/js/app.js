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

// Three-way dark mode management (light / dark / system)
document.addEventListener('alpine:init', () => {
    Alpine.store('darkMode', {
        // Current mode: 'light', 'dark', or 'system'
        mode: localStorage.getItem('colorMode') || 'system',

        // Computed: is dark mode currently active?
        get enabled() {
            return this.mode === 'dark' ||
                (this.mode === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches);
        },

        init() {
            // Sync state with pre-applied class (from inline script in head)
            this.apply();

            // Listen for system preference changes (only affects 'system' mode)
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                if (this.mode === 'system') {
                    this.apply();
                }
            });
        },

        setMode(mode) {
            this.mode = mode;
            localStorage.setItem('colorMode', mode);
            this.apply();
        },

        // Cycle through: light → dark → system → light
        cycle() {
            const modes = ['light', 'dark', 'system'];
            const nextIndex = (modes.indexOf(this.mode) + 1) % modes.length;
            this.setMode(modes[nextIndex]);
        },

        apply() {
            document.documentElement.classList.toggle('dark', this.enabled);
        }
    });
});

// Livewire navigation handler - re-apply dark mode after navigation
document.addEventListener('livewire:navigated', () => {
    const mode = localStorage.getItem('colorMode') || 'system';
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const shouldBeDark = mode === 'dark' || (mode === 'system' && prefersDark);
    document.documentElement.classList.toggle('dark', shouldBeDark);
});

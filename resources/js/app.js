import './bootstrap';

// Motion animation library (motion.dev)
import { animate, spring } from 'motion';

// Alpine.js is included via Livewire 3, which bundles:
// - @alpinejs/persist
// - @alpinejs/intersect
// - @alpinejs/collapse
// - @alpinejs/focus

// Expose Motion functions globally for Alpine.js integration
window.Motion = {
    animate,
    spring,

    // Reusable text swap animation with spring physics
    async textSwap(element, { onMidpoint }) {
        // Exit animation: fade out + slide up
        await animate(
            element,
            { opacity: 0, y: -20 },
            { duration: 0.25 }
        ).finished;

        // Execute callback at midpoint (e.g., change text)
        if (onMidpoint) onMidpoint();

        // Enter animation: fade in + slide down with spring
        await animate(
            element,
            { opacity: 1, y: 0 },
            { type: spring, stiffness: 400, damping: 25 }
        ).finished;
    },

    // Fade in with optional spring
    fadeIn(element, options = {}) {
        const { delay = 0, useSpring = false } = options;
        return animate(
            element,
            { opacity: [0, 1], y: [20, 0] },
            useSpring
                ? { type: spring, stiffness: 300, damping: 20, delay }
                : { duration: 0.4, delay }
        );
    }
};

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


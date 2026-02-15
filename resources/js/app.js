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
    },

    // Stagger fade-in for groups of elements
    staggerFadeIn(elements, options = {}) {
        const { stagger = 0.08, delay = 0, y = 20 } = options;
        const els = elements instanceof NodeList ? [...elements] : elements;
        els.forEach((el, i) => {
            el.style.opacity = '0';
            animate(
                el,
                { opacity: [0, 1], y: [y, 0] },
                { duration: 0.4, delay: delay + (i * stagger) }
            );
        });
    },

    // Animated counter with spring overshoot
    animateCounter(element, target, suffix = '') {
        const duration = 1200;
        const overshoot = 1.08;
        const start = performance.now();
        const tick = (now) => {
            const elapsed = now - start;
            let progress = Math.min(elapsed / duration, 1);
            // Ease-out with slight spring overshoot
            if (progress < 0.8) {
                progress = progress / 0.8;
                progress = 1 - Math.pow(1 - progress, 3);
                progress *= overshoot;
            } else {
                const remaining = (progress - 0.8) / 0.2;
                progress = overshoot - (overshoot - 1) * remaining;
            }
            const current = Math.round(target * Math.min(progress, 1));
            element.textContent = current.toLocaleString() + suffix;
            if (elapsed < duration) {
                requestAnimationFrame(tick);
            } else {
                element.textContent = target.toLocaleString() + suffix;
            }
        };
        requestAnimationFrame(tick);
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


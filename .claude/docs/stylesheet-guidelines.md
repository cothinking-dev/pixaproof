# PixaProof Stylesheet & Design Guidelines

## Overview

This document defines the visual design system for the PixaProof B2B marketing website. The design uses a light theme with sky blue primary, slate neutrals, and amber accent colors. Enterprise-focused, professional aesthetic.

---

## Color Palette

Defined in `resources/css/app.css` via Tailwind v4 `@theme` directive.

### Primary Colors (Sky Blue)

Used for brand elements, links, and secondary CTAs.

| Token | Hex Equivalent | Usage |
|-------|---------------|-------|
| `primary-50` | `#f0f9ff` | Subtle backgrounds |
| `primary-100` | `#e0f2fe` | Light accents |
| `primary-200` | `#bae6fd` | — |
| `primary-300` | `#7dd3fc` | Tagline text (`text-primary-300`) |
| `primary-400` | `#38bdf8` | Links (`text-primary-400`) |
| `primary-500` | `#0ea5e9` | **Primary brand** |
| `primary-600` | `#0284c7` | **Hover/active** (`text-primary-600`) |
| `primary-700` | `#0369a1` | — |
| `primary-800` | `#075985` | — |
| `primary-900` | `#0c4a6e` | Hero gradient background |
| `primary-950` | `#082f49` | — |

### Neutral Colors (Slate)

Used for text, backgrounds, and structural elements.

| Token | Hex Equivalent | Usage |
|-------|---------------|-------|
| `neutral-50` | `#f8fafc` | Light section backgrounds (`bg-neutral-50`) |
| `neutral-100` | `#f1f5f9` | — |
| `neutral-200` | `#e2e8f0` | Borders (`border-neutral-200`) |
| `neutral-300` | `#cbd5e1` | Subheadline text on dark |
| `neutral-400` | `#94a3b8` | Muted text |
| `neutral-500` | `#64748b` | — |
| `neutral-600` | `#475569` | — |
| `neutral-700` | `#334155` | **Body text** (`text-neutral-700`) |
| `neutral-800` | `#1e293b` | — |
| `neutral-900` | `#0f172a` | **Headings** (`text-neutral-900`), dark sections |
| `neutral-950` | `#020617` | — |

### Accent Colors (Amber)

Used for CTA highlights and warning/attention elements.

| Token | Hex Equivalent | Usage |
|-------|---------------|-------|
| `accent-500` | `#f59e0b` | **Primary CTA** |
| `accent-600` | `#d97706` | **Hover** |

### Text Colors

| Usage | Class |
|-------|-------|
| Headings (light bg) | `text-neutral-900` |
| Body text (light bg) | `text-neutral-700` |
| Muted text | `text-neutral-400` |
| Headings (dark bg) | `text-white` |
| Body text (dark bg) | `text-neutral-300` |
| Primary accent | `text-primary-600` (light), `text-primary-300` (dark) |
| Links | `text-primary-400 hover:text-primary-300` |
| Warning icons | `text-amber-500` |

---

## Typography

### Scale

| Element | Classes |
|---------|---------|
| Hero H1 | `text-5xl md:text-6xl lg:text-7xl font-bold text-white tracking-tight` |
| Section H2 | `text-3xl md:text-4xl font-bold text-neutral-900` |
| Card H3 | `text-xl md:text-2xl font-semibold text-neutral-900` |
| Body | `text-base md:text-lg text-neutral-700 leading-relaxed` |
| Label | `text-sm font-semibold uppercase tracking-wider text-primary-600` |
| Small | `text-sm text-neutral-400` |

### Font

```css
--font-sans: 'Inter var', ui-sans-serif, system-ui, sans-serif;
```

Loaded via `https://rsms.me/inter/inter.css` in `base.blade.php`.

---

## Structural Conventions

### Section Pattern

Sections alternate between light and dark backgrounds:

```html
{{-- Light section --}}
<section id="challenge" class="py-20 lg:py-28 bg-neutral-50">
    <div class="max-w-6xl mx-auto px-4">
        {{-- Content --}}
    </div>
</section>

{{-- Dark section --}}
<section class="py-20 lg:py-28 bg-neutral-900">
    <div class="max-w-6xl mx-auto px-4 text-center">
        {{-- Content with text-white --}}
    </div>
</section>
```

**Key rules:**
- `<section>` handles background color and vertical padding
- Container has `max-w-6xl mx-auto px-4` (some sections use `max-w-4xl`)
- Use `py-20 lg:py-28` for vertical spacing
- Prefer `gap-*` over `mt-*`/`mb-*` within flex/grid layouts
- Sections with `id` get `scroll-margin-top: 5rem` via CSS

### Section Background Variants

1. **White**: `bg-white` (default body)
2. **Light gray**: `bg-neutral-50`
3. **Dark**: `bg-neutral-900` (text becomes `text-white`)
4. **Hero gradient**: `bg-gradient-to-br from-neutral-900 via-primary-900 to-neutral-800`
5. **With grid pattern**: Subtle CSS background pattern at low opacity

---

## Spacing

### Vertical Rhythm

| Usage | Class |
|-------|-------|
| Section padding | `py-20 lg:py-28` |
| Between major elements | `mb-16` |
| Between related elements | `mb-8` |
| Within components | `mb-4` or `mb-6` |

### Grid Gaps

| Usage | Class |
|-------|-------|
| Card grids | `gap-4` |
| Content sections | `gap-8` or `gap-12` |
| Inline elements | `gap-2` or `gap-3` |

---

## Components

### Buttons

```blade
{{-- Primary (sky blue, default) --}}
<x-button href="{{ route('contact') }}" size="lg">Request Demo</x-button>

{{-- Outline --}}
<x-button href="#how-it-works" variant="outline" size="lg" class="border-white text-white hover:bg-white/10">
    Learn How It Works
</x-button>
```

### Cards

```blade
{{-- Base card --}}
<x-card>Content</x-card>

{{-- Feature card --}}
<x-card.feature title="AI Detection" description="Advanced capabilities">
    <x-slot:icon><x-heroicon-o-cpu-chip class="w-6 h-6" /></x-slot:icon>
</x-card.feature>

{{-- Stat card --}}
<x-card.stat value="99.9%" label="Accuracy Rate" />

{{-- Process step --}}
<x-card.process step="1" title="Capture" description="SDK captures photo" />

{{-- Problem card --}}
<x-card.problem title="Deepfakes" description="AI-generated fraud">
    <x-slot:icon><x-heroicon-o-exclamation-triangle class="w-5 h-5" /></x-slot:icon>
</x-card.problem>
```

### Vertical Tabs

Used in the Use Cases section to switch between industry tabs:
```blade
<x-vertical-tabs :tabs="$tabs" />
```

### Badge

```blade
<x-badge>ENTERPRISE SOLUTIONS</x-badge>
```

### Bento Grid

```blade
<x-bento-grid cols="3">
    {{-- Grid items --}}
</x-bento-grid>
```

### Background Patterns (Inline SVG)

```blade
<x-patterns.circuit />
<x-patterns.grid />
<x-patterns.hexagonal />
<x-patterns.waves />
```

### Graphics

```blade
<x-graphics.phone-mockup />
<x-graphics.hero-comparison />
<x-graphics.how-it-works-visual />
<x-graphics.industry-card />
<x-graphics.prevention-visual />
<x-graphics.solution-flow />
<x-graphics.stats-showcase />
```

---

## Navbar

Fixed at top, transparent initially with scroll-aware background:

| State | Classes |
|-------|---------|
| Top | `bg-transparent` |
| Scrolled | `bg-white/95 backdrop-blur-sm border-b` (light theme) |

Uses Alpine.js scroll detection. Contains anchor links + "Request Demo" CTA.

---

## Form Styling

Forms use light theme styling with Tailwind Forms plugin:

```html
<input class="
  block w-full rounded
  border-neutral-200 bg-white text-neutral-900
  shadow-sm focus:border-primary-500 focus:ring-primary-500
">
```

Error states use `text-red-500` text.

---

## Responsive Breakpoints

Follow Tailwind defaults:
- `sm`: 640px
- `md`: 768px
- `lg`: 1024px
- `xl`: 1280px
- `2xl`: 1536px

Common responsive patterns:
- `text-5xl md:text-6xl lg:text-7xl` for hero headlines
- `grid-cols-1 md:grid-cols-2` for card grids
- `py-20 lg:py-28` for section spacing

---

## Additional CSS

### devices.css
Imported for device mockup styling:
```css
@import "devices.css/dist/devices.css";
```

### Tailwind Plugins
```css
@plugin '@tailwindcss/forms';
@plugin '@tailwindcss/typography';
```

### Custom Rules
- `[x-cloak] { display: none; }` - Hide Alpine elements until JS loads
- `section[id] { scroll-margin-top: 5rem; }` - Offset for fixed navbar
- Invalid form elements have `box-shadow: none` override

---

## Files Reference

| File | Purpose |
|------|---------|
| `resources/css/app.css` | Color palette, theme config, plugins |
| `resources/views/components/section.blade.php` | Section wrapper |
| `resources/views/components/button.blade.php` | Button variants |
| `resources/views/components/card.blade.php` | Card base |
| `resources/views/components/card/*.blade.php` | Card variants |
| `resources/views/components/badge.blade.php` | Pre-headline badge |
| `resources/views/components/bento-grid.blade.php` | Bento grid layout |
| `resources/views/components/vertical-tabs.blade.php` | Tab navigation |
| `resources/views/components/flow-steps.blade.php` | Timeline/steps |
| `resources/views/components/patterns/*.blade.php` | SVG patterns |
| `resources/views/components/graphics/*.blade.php` | Visual elements |
| `resources/views/components/navbar.blade.php` | Navigation |
| `resources/views/components/footer.blade.php` | Footer |

---
*Updated: 2026-02-09 - Rewritten to match current light theme with primary/neutral/accent tokens*

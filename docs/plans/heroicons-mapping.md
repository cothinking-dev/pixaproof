# Heroicons Mapping for PixaProof Landing Page

Reference document for icon implementation across landing page sections.

**Library:** Heroicons v2.2.0
**Style:** 24x24 Outline (`heroicons/24/outline`)
**Source:** https://heroicons.com

---

## Section 3: Solution Introduction (5 Verification Checks)

| Feature | Icon Name | Blade Component | Rationale |
|---------|-----------|-----------------|-----------|
| Capture Integrity | `camera` | `<x-heroicon-o-camera />` | Represents device camera capture |
| Time & Location | `map-pin` | `<x-heroicon-o-map-pin />` | GPS/geolocation binding |
| Image Analysis | `magnifying-glass` | `<x-heroicon-o-magnifying-glass />` | Inspection/analysis of images |
| Text Detection | `document-text` | `<x-heroicon-o-document-text />` | OCR and text extraction |
| Tamper Evidence | `shield-check` | `<x-heroicon-o-shield-check />` | Security verification/audit trail |

---

## Section 4: How It Works (3 Steps)

| Step | Icon Name | Blade Component | Rationale |
|------|-----------|-----------------|-----------|
| Step 1: Capture | `device-phone-mobile` | `<x-heroicon-o-device-phone-mobile />` | Mobile device capture action |
| Step 2: Analyze | `cpu-chip` | `<x-heroicon-o-cpu-chip />` | Processing/AI analysis |
| Step 3: Deliver | `clipboard-document-check` | `<x-heroicon-o-clipboard-document-check />` | Verified results/report delivery |

**Alternative options considered:**
- Step 1: `camera` - but conflicts with Section 3 Capture Integrity
- Step 2: `cog` or `cog-6-tooth` - generic processing, less tech-focused
- Step 3: `chart-bar` - shows data but less specific to verification

---

## Section 6: Technology Highlights (Bento Grid)

| Card | Icon Name | Blade Component | Rationale |
|------|-----------|-----------------|-----------|
| 35+ Verification Checks | `check-badge` | `<x-heroicon-o-check-badge />` | Verification/validation badge |
| Real-Time Processing | `bolt` | `<x-heroicon-o-bolt />` | Speed/instant processing |
| SDK Integration | `code-bracket` | `<x-heroicon-o-code-bracket />` | Developer/code integration |
| On-Premise Deployment | `server` | `<x-heroicon-o-server />` | Server infrastructure |
| API-First Architecture | `command-line` | `<x-heroicon-o-command-line />` | CLI/API interface |
| Compliance Ready | `document-check` | `<x-heroicon-o-document-check />` | Regulatory documentation |

---

## Usage in Blade Templates

### With blade-heroicons Package

```blade
{{-- Outline style (24x24, 1.5px stroke) --}}
<x-heroicon-o-camera class="w-6 h-6" />
<x-heroicon-o-map-pin class="w-6 h-6" />

{{-- With custom styling --}}
<x-heroicon-o-shield-check class="w-8 h-8 text-primary-500" />

{{-- Solid style alternative --}}
<x-heroicon-s-check-badge class="w-6 h-6" />
```

### Direct SVG (if package not installed)

Icons can be copied from https://heroicons.com and pasted directly:

```blade
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="..." />
</svg>
```

---

## Icon Sizing Recommendations

| Context | Size Class | Pixels |
|---------|------------|--------|
| Feature cards (Section 3) | `w-10 h-10` or `w-12 h-12` | 40-48px |
| Process steps (Section 4) | `w-12 h-12` or `w-16 h-16` | 48-64px |
| Bento grid cards (Section 6) | `w-8 h-8` or `w-10 h-10` | 32-40px |
| Inline with text | `w-5 h-5` or `w-6 h-6` | 20-24px |

---

## Complete Icon List

All 14 icons needed for the landing page:

```
camera
map-pin
magnifying-glass
document-text
shield-check
device-phone-mobile
cpu-chip
clipboard-document-check
check-badge
bolt
code-bracket
server
command-line
document-check
```

---

## Package Installation

If using `blade-heroicons` package:

```bash
composer require blade-ui-kit/blade-heroicons
```

This provides Blade components for all Heroicons with `<x-heroicon-o-*>` (outline) and `<x-heroicon-s-*>` (solid) prefixes.

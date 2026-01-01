# PixaProof Marketing Site

## Project Overview
B2B marketing website for PixaProof - an enterprise image authenticity verification platform by MyNasional eKYC Sdn. Bhd.

## Documentation
All project documentation is in `.claude/docs/`:

| Document | Purpose |
|----------|---------|
| [index.md](.claude/docs/index.md) | Documentation navigation and keyword index |
| [tech-stack.md](.claude/docs/tech-stack.md) | Laravel 12, Livewire 3, Tailwind 4, dependencies |
| [architecture.md](.claude/docs/architecture.md) | Directory structure, patterns, routes, schema |
| [pixaproof-company.md](.claude/docs/pixaproof-company.md) | MyNasional eKYC, brand identity, certifications |
| [pixaproof-product.md](.claude/docs/pixaproof-product.md) | Product features, SDK, API, pricing, competitors |
| [site-structure.md](.claude/docs/site-structure.md) | Navigation hierarchy, routes, CTAs |

### Website Content (pages/)
| Page | Document |
|------|----------|
| Homepage | [pages/homepage.md](.claude/docs/pages/homepage.md) |
| Banking | [pages/solutions-banking.md](.claude/docs/pages/solutions-banking.md) |
| Insurance | [pages/solutions-insurance.md](.claude/docs/pages/solutions-insurance.md) |
| Government | [pages/solutions-government.md](.claude/docs/pages/solutions-government.md) |
| E-commerce | [pages/solutions-ecommerce.md](.claude/docs/pages/solutions-ecommerce.md) |
| Healthcare | [pages/solutions-healthcare.md](.claude/docs/pages/solutions-healthcare.md) |
| Technology | [pages/technology.md](.claude/docs/pages/technology.md) |
| Developers | [pages/developers.md](.claude/docs/pages/developers.md) |

## Skills

### Project Consultant
**Location**: `.claude/skills/project-consultant/SKILL.md`

Use before implementing features to get relevant context from docs. Reads index, identifies relevant documents, returns patterns and references.

### Auto-Documenter
**Location**: `.claude/skills/auto-documenter/SKILL.md`

Use after making architectural changes or learning new information about the company/product. Updates relevant docs and index.

## Quick Start

```bash
composer setup     # Install dependencies, run migrations, build assets
composer dev       # Run dev server, queue, logs, vite concurrently
```

## Key Patterns

### Actions
Business logic in `app/Actions/`. Single-purpose classes.

### Livewire Concerns
Reusable traits in `app/Livewire/Concerns/`. E.g., `WithRateLimiting`.

### Layouts
1. `base.blade.php` - HTML skeleton, dark mode
2. `app.blade.php` - Navbar, footer
3. Page views extend `app`

### Dark Mode
Three-way toggle (light/dark/system) in navbar. State in localStorage.

## Routes

| Route | View |
|-------|------|
| `/` | pages.home |
| `/about` | pages.about |
| `/contact` | pages.contact |
| `/privacy` | pages.privacy |

## Environment Variables (Production)

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://pixaproof.com

MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_FROM_ADDRESS=noreply@pixaproof.com
```

## Source Files
Original Pixaproof docs (Doom Emacs Roam) symlinked to `.claude/`:
- `20251217T141900--pixaproof.org`
- `pixaproof-product-documentation`

# PixaProof Website Content Overhaul

## Overview

Restructure the PixaProof marketing website to focus on enterprise compliance use cases, shifting from technical "anti-fraud" messaging to business-outcome messaging around trusted user-captured photo evidence.

**Core positioning shift:**
- FROM: "Stop Injection Attacks Before They Enter Your System"
- TO: "Verified Photo Evidence, Captured by Your Customers"

**Key insight:** PixaProof replaces the need for on-site verification staff. Customers can capture photo proof themselves, and enterprises can trust it as compliance-grade evidence.

---

## Messaging Framework

### Primary Headline
> "Verified Photo Evidence, Captured by Your Customers"

### Subheadline
> "Eliminate field inspections. Accept user-submitted photo proof with the same confidence as staff-captured evidence. Built for lending, insurance, and compliance-critical workflows."

### Messaging Shifts

| Current (Technical) | New (Business Outcome) |
|---------------------|------------------------|
| "Detect Deepfakes, Tampered & Fraudulent Images" | "Accept user photos you can trust in court" |
| "Stop Injection Attacks" | "Eliminate the need for on-site verification" |
| "35+ Tamper Detection Algorithms" | "Compliance-grade audit trails, automatically" |
| "PIEA™ Technology" | "PIEA verification" (no trademark) |
| "Built by ASEAN's leading eKYC provider" | "Trusted by financial institutions across ASEAN" |

### Problem Framing
Lead with the **cost problem**, not fraud:

> **The Problem:** Field verification is expensive and doesn't scale
> - Loan draw inspections require site visits ($150-300 per inspection)
> - Insurance claims wait days for adjuster availability
> - KYC processes bottleneck on document verification staff
> - You can't trust photos customers send... until now

---

## Site Structure

### Navigation

```
Logo                                    [Request Demo]

Solutions ▼          Technology       Company ▼
├─ Loan Draw         (PIEA overview)  ├─ About
│  Inspections                        └─ Contact
├─ Insurance Claims
├─ KYC Onboarding
└─ Asset Verification
```

### URL Structure

| New Route | Purpose |
|-----------|---------|
| `/` | Homepage |
| `/solutions/loan-draw-inspections` | Construction/property lending |
| `/solutions/insurance-claims` | Auto, property, equipment claims |
| `/solutions/kyc-onboarding` | Identity verification |
| `/solutions/asset-verification` | Equipment/collateral documentation |
| `/technology` | PIEA explanation (simplified) |
| `/about` | Company info (minimal changes) |
| `/contact` | Contact form (minimal changes) |
| `/privacy` | Privacy policy (no changes) |

---

## Pages to Create/Rewrite

### 1. Homepage

**File:** `resources/views/pages/home.blade.php`

**Structure:**
1. **Hero** - New headline, subheadline, trust badges (ISO 27001, SOC 2, GDPR)
2. **The Problem** - Visual before/after comparison (Traditional field staff vs PixaProof)
3. **Use Cases** - 4 cards linking to solution pages
4. **How It Works** - 3-step horizontal flow: Capture → Verify → Trust
5. **Trust Signals** - Client logos or stats ("X photos verified")
6. **Final CTA** - "Ready to eliminate field inspections?"

### 2. Loan Draw Inspections

**File:** `resources/views/pages/solutions/loan-draw-inspections.blade.php`

**Structure:**
1. **Hero** - "Loan Draw Inspections Without Site Visits" + construction-related stock image
2. **The Cost Problem** - 2-column visual comparison (without vs with PixaProof)
3. **How It Works** - 4-step workflow: Request photo → Customer captures → Auto verify → Release funds
4. **What Gets Verified** - Visual checklist (live capture, timestamp, location, no tamper, etc.)
5. **Compliance & Audit** - Badges + bullet list of audit trail features
6. **CTA** - Request demo

### 3. Insurance Claims

**File:** `resources/views/pages/solutions/insurance-claims.blade.php`

**Structure:**
1. **Hero** - "Process Claims Faster with Verified Photo Proof" + damage documentation stock image
2. **The Cost Problem** - Adjuster delays vs instant self-service
3. **How It Works** - 4-step workflow: Claim filed → Claimant photos damage → Auto verify → Process claim
4. **What Gets Verified** - Visual checklist
5. **Compliance & Audit** - Audit trail features
6. **CTA** - Request demo

### 4. KYC Onboarding

**File:** `resources/views/pages/solutions/kyc-onboarding.blade.php`

**Structure:**
1. **Hero** - "KYC That Scales Without Verification Staff" + identity verification stock image
2. **The Cost Problem** - Manual document review vs automated verification
3. **How It Works** - 4-step workflow: Applicant captures ID + selfie → Auto verify → Onboard
4. **What Gets Verified** - Visual checklist (live capture, not uploaded, real device, etc.)
5. **Compliance & Audit** - KYC/AML compliance badges
6. **CTA** - Request demo

### 5. Asset Verification

**File:** `resources/views/pages/solutions/asset-verification.blade.php`

**Structure:**
1. **Hero** - "Verify Assets Without Field Inspections" + equipment/machinery stock image
2. **The Cost Problem** - Site visits vs remote verification
3. **How It Works** - 4-step workflow: Request asset photos → Owner captures → Auto verify → Approve financing
4. **What Gets Verified** - Visual checklist
5. **Compliance & Audit** - Audit trail features
6. **CTA** - Request demo

### 6. Technology Page

**File:** `resources/views/pages/technology.blade.php`

**Structure:**
1. **Hero** - "How PixaProof Verifies Photo Evidence" (minimal, clean)
2. **3-Step Flow** - Large visual diagram: Capture → Verify → Trust
3. **What We Check** - 4 cards (Capture Authenticity, Integrity, AI/Synthetic Detection, Metadata)
   - Each card: icon + category name + 3-4 bullet points max
4. **SDK Integration** - Platform icons (iOS, Android, React Native, REST API) + 2 key metrics
5. **CTA** - Request demo

**Key changes:**
- Remove "™" from all PIEA references
- Remove detailed transmission pipeline section
- Remove verbose 35-item bullet lists
- Condense to visual-first presentation

---

## Pages to Delete

| File | Route |
|------|-------|
| `resources/views/pages/solutions/banking.blade.php` | `/solutions/banking` |
| `resources/views/pages/solutions/insurance.blade.php` | `/solutions/insurance` |
| `resources/views/pages/solutions/government.blade.php` | `/solutions/government` |
| `resources/views/pages/solutions/ecommerce.blade.php` | `/solutions/ecommerce` |
| `resources/views/pages/solutions/healthcare.blade.php` | `/solutions/healthcare` |
| `resources/views/pages/solutions/real-estate.blade.php` | `/solutions/real-estate` |
| `resources/views/pages/resources/injection-attacks.blade.php` | `/resources/injection-attacks` |
| `resources/views/pages/resources/fraud-statistics.blade.php` | `/resources/fraud-statistics` |
| `resources/views/pages/resources/compliance.blade.php` | `/resources/compliance` |
| `resources/views/pages/resources/case-studies.blade.php` | `/resources/case-studies` |

---

## Redirects to Add

In `routes/web.php`, add 301 redirects:

```php
// Legacy redirects
Route::redirect('/solutions/banking', '/solutions/kyc-onboarding', 301);
Route::redirect('/solutions/insurance', '/solutions/insurance-claims', 301);
Route::redirect('/solutions/real-estate', '/solutions/loan-draw-inspections', 301);
Route::redirect('/solutions/government', '/', 301);
Route::redirect('/solutions/ecommerce', '/', 301);
Route::redirect('/solutions/healthcare', '/', 301);
Route::redirect('/resources/injection-attacks', '/', 301);
Route::redirect('/resources/fraud-statistics', '/', 301);
Route::redirect('/resources/compliance', '/', 301);
Route::redirect('/resources/case-studies', '/', 301);
```

---

## Global Changes

### Remove PIEA Trademark

Search and replace across all files:
- `PIEA™` → `PIEA`
- `PIEA&trade;` → `PIEA`

### Update Navbar

**File:** `resources/views/components/navbar.blade.php`

New structure:
- Solutions dropdown: Loan Draw Inspections, Insurance Claims, KYC Onboarding, Asset Verification
- Technology link
- Company dropdown: About, Contact
- Request Demo button

### Update Footer

**File:** `resources/views/components/footer.blade.php`

Update links to match new page structure. Remove references to deleted pages.

---

## Assets Required

### Stock Images (4)

| Use Case | Image Theme | Suggested Source |
|----------|-------------|------------------|
| Loan Draw Inspections | Construction site, building progress | Unsplash/Pexels |
| Insurance Claims | Car damage, property damage | Unsplash/Pexels |
| KYC Onboarding | Person with phone + ID document | Unsplash/Pexels |
| Asset Verification | Equipment, machinery, vehicles | Unsplash/Pexels |

### Custom SVG Diagrams (6)

1. **Homepage: Before/After comparison** - Traditional (field staff icon, cost, time) vs PixaProof (phone icon, savings)
2. **Homepage: 3-step flow** - Capture → Verify → Trust (horizontal)
3. **Loan Draw: Workflow** - Request → Capture → Verify → Release funds
4. **Insurance: Workflow** - Claim → Photo → Verify → Process
5. **KYC: Workflow** - Apply → Capture ID/selfie → Verify → Onboard
6. **Asset: Workflow** - Request → Photo → Verify → Approve

### Icons

Use existing Heroicons library for:
- Verification checklist items (checkmark, shield, clock, location, device, etc.)
- Category icons (camera, image, sparkles, folder)
- Platform icons (can use simple text labels or source from Simple Icons)

---

## Implementation Order

1. **Global changes** - Remove PIEA trademark, update navbar/footer
2. **Homepage** - Complete rewrite with new messaging
3. **Technology page** - Simplify and make visual
4. **Solution pages** - Create 4 new pages (can be done in parallel)
5. **Routes** - Add new routes, add redirects
6. **Cleanup** - Delete old pages, test all links

---

## Design Principles

1. **Visual over text** - Use diagrams, icons, bullet lists instead of paragraphs
2. **Business outcomes over features** - Lead with what customers achieve, not what the product does
3. **Standalone pages** - Each page is self-contained, no shared section components
4. **Clear visual hierarchy** - Hero → Problem → Solution → Proof → CTA
5. **Compliance confidence** - Trust badges, audit trail messaging throughout

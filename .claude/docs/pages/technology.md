# Technology Page Content

> **ARCHIVED**: Technology content was consolidated into the homepage `/#technology` section. The route `/technology` now 301-redirects to `/#technology`. This document is retained as reference for PIEA technology messaging.

> ~~Consumer-friendly explanation of PIEA™ technology. Accessible to non-technical users while providing depth for those who want it. Dark theme with amber accents.~~

---

## Hero Section

### Layout
- **Structure**: Centered content with floating visual behind
- **Background**: Dark gradient (#0a0a0a → #1a1a1a) with subtle radial amber glow emanating from center
- **Spacing**: py-24 md:py-32

### Content

**Pre-headline Badge:**
```
PATENTED TECHNOLOGY
```
- Small pill, amber border, uppercase

**Headline:**
```
Security that starts at the shutter
```
- text-4xl md:text-5xl lg:text-6xl, font-bold, text-white

**Subheadline:**
```
Our patented PIEA™ technology embeds invisible protection
the moment you press capture — not after.
```
- text-xl, text-gray-400, max-w-2xl

**CTA:**
- "Download the App" (primary, amber button)
- "View Developer Docs →" (secondary, text link)

### Visual
**Background illustration:**
- Describe: "Abstract camera lens icon at center with concentric rings expanding outward, each ring representing a layer of protection. Floating encryption symbols (locks, shields, keys) orbit around the center. Subtle amber gradient glow, 15% opacity so text remains readable. Animation: slow rotation of orbiting elements."

---

## The Problem Section

### Layout
- **Structure**: Full-width, centered content
- **Background**: bg-surface-900

### Headline
```
Why traditional verification fails
```
- text-3xl md:text-4xl, font-bold

### Content

**Comparison Cards (side by side):**

**Left Card: "Traditional Approach"**
- Border: border-red-500/30
- Background: bg-surface-800
- Icon: X mark (red)
- Title: "Analyze After Submission"
- Description: "Most systems check photos only after they've been uploaded. By then, fraudsters have already submitted edited, AI-generated, or stolen images."
- Visual: "Diagram showing: Photo → Upload → Analysis → (Too Late!)"

**Right Card: "PixaProof Approach"**
- Border: border-green-500/30
- Background: bg-surface-800
- Icon: Checkmark (green)
- Title: "Protect at Capture"
- Description: "PixaProof embeds security at the moment of capture. Every photo carries proof of authenticity from the very first pixel."
- Visual: "Diagram showing: Capture + Sign → Transmit → Verify → Trusted"

### Stats Row
```
$24B+ in global identity fraud (2024) | 40-60% of insurance claims contain manipulated photos
```

---

## How PIEA™ Works Section

### Layout
- **Structure**: Vertical timeline with alternating left/right content
- **Background**: bg-surface-950
- **Visual**: Central vertical line (amber) connecting each step

### Headline
```
Four steps from capture to confidence
```
- text-3xl md:text-4xl, font-bold, text-center

### Timeline Steps

**Step 1: Capture**
- Position: Left of timeline
- Icon: Camera icon with amber glow (large, in circle)
- Title: "Secure Capture"
- Description: "When you tap capture, PixaProof uses your device's camera directly — no gallery access, no pre-loaded images. It's live or nothing."
- Technical note (expandable): "Camera API enforces live capture, blocks injection attempts"
- Visual: "Phone mockup showing live viewfinder with PixaProof interface"

**Step 2: Encode**
- Position: Right of timeline
- Icon: Lock/encryption icon with amber glow
- Title: "PIEA™ Encoding"
- Description: "In milliseconds, our Photo Integrity Encoding Algorithm creates a unique cryptographic signature and embeds it invisibly within the image data."
- Technical note (expandable): "SHA-256 hash of pixel data + device fingerprint + timestamp"
- Visual: "Abstract visualization: photo with invisible layer being added, shown as glowing overlay"

**Step 3: Transmit**
- Position: Left of timeline
- Icon: Cloud/upload icon with amber glow
- Title: "Protected Transmission"
- Description: "Whether you send it now or save it for later, the embedded signature travels with the photo. Share via any method — email, AirDrop, USB — the protection stays."
- Technical note (expandable): "TLS 1.3 encryption, certificate pinning for API calls"
- Visual: "Multiple sharing icons (email, message, airdrop) connected to photo, showing protection travels with it"

**Step 4: Verify**
- Position: Right of timeline
- Icon: Checkmark badge with amber glow
- Title: "Instant Verification"
- Description: "When someone opens the photo in PixaProof, we run 35+ tamper detection tests in under 500ms. Authentic, tampered, or unverified — you'll know immediately."
- Technical note (expandable): "Signature validation + structural analysis + AI deepfake detection"
- Visual: "Phone mockup showing verification result screen with green checkmark"

---

## What We Detect Section

### Layout
- **Structure**: 2x3 bento grid
- **Background**: bg-surface-900
- **Gap**: gap-4 md:gap-6

### Headline
```
35+ tamper detection tests
```
- text-3xl md:text-4xl, font-bold, text-center
- Subtext: "Every photo is analyzed across multiple dimensions"

### Detection Cards

Each card:
- Rounded-xl, bg-surface-800, border border-surface-700
- Hover: border-amber-500/50, slight lift
- Icon in top-left (amber), large
- Title below icon
- Description
- Example/stat at bottom

**Card 1: Gallery Injection**
- Icon: Folder with X
- Title: "Gallery Injection Blocked"
- Description: "Detects when photos are loaded from device storage instead of captured live"
- Stat: "100% prevention rate"

**Card 2: AI Generation**
- Icon: Robot/AI icon
- Title: "AI & Deepfakes Detected"
- Description: "Identifies synthetic images, face swaps, and AI-generated content"
- Stat: "Catches latest generation models"

**Card 3: Pixel Manipulation**
- Icon: Grid/pixels
- Title: "Pixel Tampering Found"
- Description: "Detects edits, crops, filters, and subtle alterations at the pixel level"
- Stat: "Structural integrity analysis"

**Card 4: Metadata Spoofing**
- Icon: Document with warning
- Title: "Metadata Verified"
- Description: "Cross-references timestamps, GPS, and device info against the embedded signature"
- Stat: "Can't fake what's cryptographically signed"

**Card 5: Re-upload Fraud**
- Icon: Refresh/repeat with X
- Title: "Re-uploads Flagged"
- Description: "Identifies when previously verified photos are submitted again fraudulently"
- Stat: "Unique signatures per capture"

**Card 6: Screenshot Injection**
- Icon: Phone with layers
- Title: "Screenshots Blocked"
- Description: "Detects photos taken of screens or documents displayed on other devices"
- Stat: "Multi-layer detection"

---

## Deep Dive Section (Expandable Accordions)

### Layout
- **Structure**: Accordion/collapsible sections
- **Background**: bg-surface-950
- **For users who want technical details**

### Headline
```
Technical details
```
- text-2xl, font-semibold
- Subtext: "For developers and security professionals"

### Accordion Sections

**Section 1: Capture Security**
- Summary: "How we prevent injection attacks"
- Expanded content:
  - Camera API integration (native iOS/Android)
  - Anti-injection controls
  - Device fingerprinting
  - Timestamp authentication
  - Emulator/virtual device detection
  - Screen recording detection

**Section 2: PIEA™ Encoding**
- Summary: "The cryptographic signature process"
- Expanded content:
  - Hash algorithm (SHA-256)
  - What data is signed (pixels + metadata + device + timestamp)
  - Invisible encoding technique
  - Tamper-evident design
  - No biometric or personal data stored

**Section 3: Transmission Security**
- Summary: "How photos stay protected in transit"
- Expanded content:
  - TLS 1.3 encryption
  - Certificate pinning
  - Token-based authentication
  - Chain of custody tracking
  - Secure storage at rest

**Section 4: Verification Engine**
- Summary: "35+ tests in under 500ms"
- Expanded content:
  - Test categories breakdown:
    - Capture Authenticity (7 tests): Live capture validation, device fingerprint, timestamp, geolocation, screen recording, emulator, gallery injection
    - Image Integrity (12 tests): Pixel consistency, compression artifacts, cloning/splicing, ELA, CFA analysis, JPEG tables, noise patterns, shadows, lighting, reflections, perspective
    - AI & Synthetic (8 tests): GAN signatures, deepfake scoring, synthetic detection, model fingerprints, facial manipulation, document synthesis, text alteration
    - Metadata & Context (8 tests): EXIF integrity, reverse search, duplicate detection, picture-of-picture, fraud pattern matching
  - Confidence scoring
  - API response format

---

## Performance Section

### Layout
- **Structure**: Three large stat cards in a row
- **Background**: bg-surface-900

### Stats

**Stat 1:**
- Number: "<500ms"
- Label: "Verification Time"
- Description: "Real-time results"

**Stat 2:**
- Number: "99.9%"
- Label: "Accuracy"
- Description: "Industry-leading precision"

**Stat 3:**
- Number: "35+"
- Label: "Detection Tests"
- Description: "Comprehensive analysis"

### Visual Treatment
- Large numbers (text-5xl md:text-6xl), font-bold
- Amber underline accent
- Cards have subtle glow on hover

---

## Enterprise Tech Section

### Layout
- **Structure**: Dark card with gradient border
- **Background**: bg-surface-950

### Card Design
- Rounded-2xl
- Border: gradient from amber-500 to orange-600
- Background: bg-surface-900
- Padding: p-8 md:p-12

### Content

**Headline:**
```
Need SDK integration?
```
- text-2xl md:text-3xl, font-bold

**Description:**
```
PixaProof Enterprise offers native SDKs for iOS, Android,
React Native, and Flutter. Integrate capture-level security
into your own applications.
```

**Features list:**
- Native SDK libraries (~8-9MB)
- Full API access
- Custom UI options
- White-label available
- Dedicated support
- Integration time: 2-4 hours (basic)

**CTA:**
- "View Developer Documentation →" (amber button)
- "Contact Enterprise Sales" (text link)

---

## Final CTA Section

### Layout
- **Structure**: Centered, full-width
- **Background**: Dark with ambient amber glow

### Content

**Headline:**
```
See it in action
```
- text-3xl md:text-4xl, font-bold

**Subheadline:**
```
Download PixaProof and capture your first verified photo in seconds.
```

**CTAs:**
- App Store badge
- Google Play badge

**Below:**
```
Free to capture. 3 free verifications every month.
```

---

## Design Notes

### Visual Style
- Technical but accessible
- Diagrams and visualizations over walls of text
- Progressive disclosure (expandable sections for depth)
- Amber accents throughout

### Icons
- Line icons, not filled
- Amber color (#f59e0b)
- Consistent size per section

### Animations
- Timeline dots pulse subtly
- Cards lift on hover
- Accordion sections slide smoothly
- Background elements have slow, subtle movement

---

*Last updated: 2026-01-02*

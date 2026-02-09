# Developers Page Content

> **ARCHIVED**: This page has not been implemented as a separate route. Developer/SDK content may be added in the future. This document is retained as reference for developer-focused messaging and code samples.

> ~~Enterprise Solutions developer documentation. Positioned under Enterprise Solutions section. Technical audience with detailed code samples.~~

---

## Breadcrumb
```
Home → Enterprise Solutions → Developers
```

---

## Hero Section

### Layout
- **Structure**: Split layout (text left, code preview right)
- **Background**: Dark gradient (#0a0a0a → #1a1a1a) with subtle grid pattern
- **Spacing**: py-20 md:py-28

### Content

**Pre-headline Badge:**
```
ENTERPRISE SOLUTIONS
```
- Small pill, amber border, uppercase

**Headline:**
```
Integrate PixaProof in hours, not weeks
```
- text-4xl md:text-5xl, font-bold, text-white

**Subheadline:**
```
Add capture-level photo security to your iOS, Android,
React Native, or Flutter app with our lightweight SDK.
```
- text-xl, text-gray-400

**CTAs:**
- "Get API Key" (primary, amber button)
- "View Full Documentation" (secondary, outline)

### Visual (Right side)
**Animated code snippet:**
- Dark code editor style (bg-surface-900, rounded-xl)
- Tabs: Swift | Kotlin | React Native
- Auto-cycling through languages every 4 seconds
- Syntax highlighting with amber accents
- Describe: "Code editor window showing SDK initialization code, with language tabs at top, line numbers on left, syntax highlighted code in center"

---

## Community Edition Compatibility Banner

### Layout
- **Structure**: Full-width info banner
- **Background**: bg-amber-500/10 with amber left border
- **Position**: Below hero

### Content
```
Testing with Community Edition?
Photos captured with the PixaProof Community app are fully verifiable
through your enterprise integration. Start testing immediately.
```
- Icon: Info circle (amber)
- Link: "Download Community Edition →"

---

## Quick Start Section

### Layout
- **Structure**: Tabbed interface
- **Background**: bg-surface-900
- **Tabs**: iOS | Android | React Native | Flutter (planned)

### Headline
```
Get started in 3 steps
```
- text-3xl, font-bold

### Tab Content (iOS Example)

**Step 1: Install**
```ruby
# CocoaPods
pod 'PixaProof'

# Swift Package Manager
.package(url: "https://github.com/pixaproof/ios-sdk.git", from: "1.0.0")
```

**Step 2: Initialize**
```swift
import PixaProof

// In your AppDelegate or app entry point
PixaProof.configure(apiKey: "your_api_key")
```

**Step 3: Capture**
```swift
let config = PixaProof.CaptureConfig(
    captureType: .document,
    documentType: .nationalID,
    requireBothSides: true,
    qualityThreshold: .high
)

PixaProof.Camera.capture(config: config) { result in
    switch result {
    case .success(let photos):
        // Photos are cryptographically signed
        // Gallery injection blocked at SDK level
        self.verifyPhotos(photos)
    case .failure(let error):
        self.handleError(error)
    }
}
```

### Tab Content (Android Example)

**Step 1: Install**
```gradle
// build.gradle (app level)
implementation 'com.pixaproof:sdk:1.0.0'
```

**Step 2: Initialize**
```kotlin
import com.pixaproof.PixaProof

// In your Application class
PixaProof.configure(this, "your_api_key")
```

**Step 3: Capture**
```kotlin
val config = CaptureConfig.Builder()
    .setCaptureType(CaptureType.DOCUMENT)
    .setDocumentType(DocumentType.NATIONAL_ID)
    .setRequireBothSides(true)
    .setQualityThreshold(QualityThreshold.HIGH)
    .build()

PixaProof.Camera.capture(this, config) { result ->
    when (result) {
        is Result.Success -> verifyPhotos(result.photos)
        is Result.Failure -> handleError(result.error)
    }
}
```

### Tab Content (React Native Example)

**Step 1: Install**
```bash
npm install pixaproof-react-native
# or
yarn add pixaproof-react-native
```

**Step 2: Initialize**
```javascript
import { PixaProof } from 'pixaproof-react-native';

// In your app initialization
PixaProof.configure({ apiKey: 'your_api_key' });
```

**Step 3: Capture**
```javascript
import { PixaProof, CaptureType, DocumentType } from 'pixaproof-react-native';

const config = {
  captureType: CaptureType.DOCUMENT,
  documentType: DocumentType.NATIONAL_ID,
  requireBothSides: true,
  qualityThreshold: 'high'
};

// Gallery access blocked at native level
const photos = await PixaProof.Camera.capture(config);
const response = await PixaProof.API.verify(photos);

if (response.status === 'verified') {
  console.log(`Verified with ${response.confidenceScore} confidence`);
}
```

---

## API Reference Section

### Layout
- **Structure**: Two-column (endpoints left, example response right)
- **Background**: bg-surface-950

### Headline
```
Verification API
```
- text-3xl, font-bold

### Left Column: Endpoints

**Base URL:**
```
https://api.pixaproof.com/v1/
```

**Authentication:**
```http
Authorization: Bearer {your_api_key}
```

**Endpoints Table:**

| Endpoint | Method | Purpose |
|----------|--------|---------|
| `/verify` | POST | Verify a single photo |
| `/verify/batch` | POST | Batch verify multiple photos |
| `/verify/{id}` | GET | Get verification details |
| `/audit/{id}` | GET | Retrieve audit trail |

**Verify Photo Request:**
```http
POST /verify
Content-Type: multipart/form-data

Parameters:
- image: File (required)
- metadata: JSON (optional)
- webhook_url: String (optional)
```

### Right Column: Response Example

**Code block styling:**
- Dark background (bg-surface-800)
- Rounded-xl
- JSON syntax highlighting

```json
{
  "verification_id": "vrf_8k3j2h4g5f6d7s8a",
  "status": "verified",
  "confidence_score": 0.98,
  "live_capture_confirmed": true,
  "transmission_integrity": "confirmed",
  "capture_timestamp": "2025-12-06T10:30:45.123Z",
  "device_fingerprint": "d4e5f6g7h8i9j0k1l2m3n4o5",
  "geolocation": {
    "latitude": 1.3521,
    "longitude": 103.8198,
    "accuracy": 15,
    "spoofing_detected": false
  },
  "tampering_indicators": [],
  "ai_generation_probability": 0.02,
  "audit_trail_url": "https://api.pixaproof.com/v1/audit/..."
}
```

---

## SDK Features Section

### Layout
- **Structure**: 2x3 bento grid
- **Background**: bg-surface-900
- **Gap**: gap-4 md:gap-6

### Headline
```
Built for enterprise security
```
- text-3xl, font-bold

### Feature Cards

Each card:
- Rounded-xl, bg-surface-800, border border-surface-700
- Hover: border-amber-500/50
- Icon top-left (amber)
- Title, description

**Card 1: Live Capture Enforcement**
- Icon: Camera with lock
- Title: "Gallery Blocked"
- Description: "SDK completely blocks gallery access. Only live captures accepted."

**Card 2: Cryptographic Signing**
- Icon: Key/encryption
- Title: "PIEA™ at Capture"
- Description: "Cryptographic signature embedded the moment the photo is taken."

**Card 3: Anti-Spoofing**
- Icon: Shield with X
- Title: "Attack Prevention"
- Description: "Emulator detection, screenshot prevention, virtual device blocking."

**Card 4: Offline Capability**
- Icon: Wifi off
- Title: "Works Offline"
- Description: "Capture and sign locally. Sync and verify when back online."

**Card 5: Custom Workflows**
- Icon: Settings/sliders
- Title: "Configurable"
- Description: "Set capture requirements, quality thresholds, document types."

**Card 6: White-Label UI**
- Icon: Paintbrush
- Title: "Your Branding"
- Description: "Custom colors, messaging, and UI to match your app."

---

## Integration Timeline Section

### Layout
- **Structure**: Horizontal timeline
- **Background**: bg-surface-950

### Headline
```
From SDK to production
```
- text-2xl, font-semibold

### Timeline Steps

**Day 1: Setup**
- Icon: Key
- "Get API credentials and download SDK"

**Days 1-2: Integration**
- Icon: Code
- "Integrate SDK into your app"

**Day 2: API**
- Icon: Server
- "Connect verification API"

**Days 2-3: Testing**
- Icon: Check circle
- "QA and testing"

**Week 2: Deploy**
- Icon: Rocket
- "Production deployment"

### Visual
- Connected dots along horizontal line
- Amber color for completed/current
- Each step has timing badge above

---

## Support Section

### Layout
- **Structure**: Three cards in a row
- **Background**: bg-surface-900

### Cards

**Documentation:**
- Icon: Book
- Title: "Full Docs"
- Description: "Comprehensive API reference and SDK guides"
- CTA: "Browse Docs →"

**Sandbox:**
- Icon: Play/test
- Title: "Try Sandbox"
- Description: "Test API calls in our sandbox environment"
- CTA: "Open Sandbox →"

**Developer Support:**
- Icon: Chat/community
- Title: "Get Help"
- Description: "Join our developer Slack or contact support"
- CTA: "Join Slack →"

---

## Community Edition CTA Section

### Layout
- **Structure**: Full-width banner
- **Background**: bg-surface-950 with amber border-l-4

### Content
```
Don't need enterprise-level customization?
```
- text-xl, font-semibold

Subtext:
```
The Community Edition offers the same verification technology
for individuals and small teams. No SDK integration required.
```

**CTA:**
- "Try Community Edition →" (amber button)
- App Store and Google Play badges below

---

## Final CTA Section

### Layout
- **Structure**: Centered
- **Background**: Dark with subtle amber glow

### Content

**Headline:**
```
Ready to integrate?
```
- text-3xl, font-bold

**CTAs:**
- "Get API Key" (primary, amber)
- "Contact Enterprise Sales" (secondary, outline)

---

## Design Notes

### Code Blocks
- Font: Fira Code or JetBrains Mono
- Background: bg-surface-800 or bg-surface-900
- Syntax highlighting with amber for keywords
- Line numbers on left
- Copy button in top-right corner

### Tabs
- Rounded tabs with bg-surface-800
- Active tab: amber underline or bg-amber-500/10
- Smooth transitions between tabs

### Tables
- Alternating row backgrounds (subtle)
- Amber header row accent
- Rounded corners

---

*Last updated: 2026-01-02*

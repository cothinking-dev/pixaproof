# PixaProof - Product Documentation

## Product Overview

PixaProof is an image authenticity and integrity verification platform offering:

1. **Enterprise Solutions** (SDK/API) - Primary product for organizations needing custom integration
2. **Community Edition** (Consumer App) - Secondary product for individuals and small teams

Both editions share the same core verification technology (PIEA) and are cross-compatible.

---

## Enterprise Solutions (SDK/API) — Primary Focus

### Description
For organizations needing custom integration, white-label solutions, or high-volume verification. The Enterprise SDK integrates into existing mobile apps and backend systems.

### Current Website Positioning
The marketing site (`pixaproof.com`) leads with enterprise messaging:
- Hero: "Verify Every Image. Eliminate Fraud."
- Use Cases: Loan Draw Inspections, Insurance Claims, KYC Onboarding, Asset Verification
- CTA: "Request Demo" → contact form

### Enterprise Capabilities

| Capability | Description |
|------------|-------------|
| **Custom SDK Integration** | Native iOS, Android, React Native, Flutter |
| **White-label Options** | Branded capture experience |
| **Volume Pricing** | Custom rates for high-volume verification |
| **API Access** | RESTful verification API for backend systems |
| **Priority Support** | Dedicated account management, SLA |
| **Compliance Packages** | Industry-specific compliance documentation |
| **On-premise Options** | For highly regulated environments |
| **Audit Trails** | Complete chain of custody for compliance |

### Enterprise Use Cases (as shown on homepage)

| Tab | Use Case | Key Benefits |
|-----|----------|-------------|
| 1 | **Loan Draw Inspections** | Construction progress verification, collateral documentation |
| 2 | **Insurance Claims** | Damage documentation, timestamped evidence, fraud prevention |
| 3 | **KYC Onboarding** | Identity document capture, anti-spoofing, live selfie verification |
| 4 | **Asset Verification** | Equipment inspection, inventory audits, condition reports |

### Target Industries

| Industry | Primary Use Cases |
|----------|-------------------|
| **Banking & Financial Services** | Digital account opening, loan verification, KYC/AML |
| **Insurance** | Claims photo verification, policy applications, field adjusters |
| **Government & Public Sector** | National ID, border control, benefits distribution |
| **E-commerce & Marketplaces** | Seller verification, high-value items, returns |
| **Healthcare & Telemedicine** | Patient verification, clinical trials, medical records |

### Enterprise Pricing
**Contact Sales** for custom pricing based on:
- Monthly verification volume
- Integration complexity
- Support tier requirements
- Compliance needs

---

## Community Edition (Consumer App) — Secondary

### Description
A mobile app available on iOS and Android that enables anyone to capture verified photos and validate photo authenticity. No technical integration required.

**Note**: The Community Edition is de-emphasized on the current marketing website. The homepage focuses entirely on enterprise use cases.

### Availability
- **App Store** (iOS) - Planned launch
- **Google Play** (Android) - Planned launch

### User Types

#### Submitter
Takes photos using the app's built-in camera, which automatically embeds PIEA cryptographic signature.

#### Verifier
Receives photos from Submitters and validates authenticity using the same app.

### Pricing Tiers

| Tier | Verifications/Month | Price | Best For |
|------|---------------------|-------|----------|
| **Free** | 3 | RM0 | Trying out, occasional use |
| **Standard** | 25 | RM200/month | Regular users, small businesses |
| **Pro** | 100 | RM600/month | Power users, professionals |
| **Enterprise** | Custom | Contact Sales | Organizations needing volume |

### Cross-Compatibility
Enterprise integrations can verify photos taken with the Community Edition app. This enables:
- Customers using Community Edition to submit to enterprise workflows
- Mixed ecosystems where some users have the app, others use integrated systems
- Gradual migration paths from Community to Enterprise

---

## Core Technology (PIEA)

### Photo Integrity Encoding Algorithm
Proprietary technology shared across both editions:

- **Secure Capture**: Live photo authentication, cryptographic signature (SHA-256), invisible encoding
- **Reliable Transmission**: TLS 1.3 encryption, certificate pinning, token-based authentication
- **Instant Verification**: Signature validation, structural analysis, AI-assisted deepfake detection

### Attack Vectors Prevented

| Attack Type | Prevention Method |
|-------------|-------------------|
| Gallery Injection | SDK enforces live capture only |
| AI-Generated Images | Deepfake detection algorithms |
| External File Injection | API injection prevention |
| Metadata Spoofing | Cryptographic signature verification |
| Re-upload Fraud | Unique capture signatures |
| Pixel-Level Tampering | Structural integrity analysis |

### Technical Specifications

**SDK:**
- iOS (Swift/Objective-C)
- Android (Kotlin/Java)
- React Native
- Flutter (planned)
- Size: ~8-9MB
- Integration: 2-4 hours (basic), 1-2 weeks (production)

**API Response:**
```json
{
  "authenticity_status": "verified|tampered|unknown",
  "capture_confidence_score": 0.98,
  "transmission_integrity": "confirmed",
  "capture_timestamp": "2025-12-06T10:30:45Z",
  "device_fingerprint": "hash_value",
  "tampering_indicators": [],
  "verification_id": "uuid",
  "audit_trail_url": "https://..."
}
```

**Performance:**
- Verification latency: <500ms
- Throughput: 1000+ verifications/second
- Uptime SLA: 99.9%

---

## Competitive Advantages

1. **Capture-First Security** - Protection at moment of capture, not post-submission analysis
2. **Dual Product Model** - Consumer app + Enterprise SDK serving all market segments
3. **Cross-Compatibility** - Community Edition photos verifiable by Enterprise systems
4. **Complete Chain of Custody** - End-to-end from capture to verification
5. **Enterprise Compliance** - ISO 27001, GDPR, SOC 2, industry-specific frameworks
6. **EMAS eKYC Integration** - Single vendor for capture + identity verification
7. **Patented Technology** - 3 patents in identity verification
8. **Regional + Global** - ASEAN expertise with Western compliance standards

---

*Updated: 2026-02-09 - Reordered to lead with Enterprise Solutions, added homepage use cases*

# Epic: Migrate Deployer Laravel Stack to v2.0

**Status:** completed
**Priority:** high
**Created:** 2026-01-22

## Overview

Migrate from 1Password-based secrets management to GitHub CLI/Actions CI/CD pipeline.

### Key Changes
- Secrets: 1Password CLI -> GitHub Secrets
- CI/CD: Manual deployment -> GitHub Actions workflow
- Wrapper: Complex 109-line script -> Simple 30-line delegator

---

## Tasks

### 1. Update deploy.php configuration
- **Status:** completed
- **Priority:** high
- **Description:** Add new configuration options required by v2.0
- **Checklist:**
  - [x] Add `php_version` setting (8.4)
  - [x] Add `node_version` setting (22)
  - [x] Add `web_server` setting (fpm)
  - [x] Update secrets configuration to remove `DEPLOYER_DB_PASSWORD` from required (SQLite doesn't need it)
  - [x] Verify environment configurations are correct

### 2. Replace deploy/dep wrapper script
- **Status:** completed
- **Priority:** high
- **Description:** Replace complex 1Password wrapper with new thin wrapper
- **Checklist:**
  - [x] Backup current `deploy/dep` for reference (saved as `dep.bak.1password`)
  - [x] Replace with new thin wrapper from recipe examples
  - [x] Update `DEPLOYER_APP_NAME` to "Pixaproof"
  - [x] Update `DEPLOYER_HOST` to "ssh.moojing-global.com"
  - [x] Ensure script is executable (`chmod +x`)

### 3. Create GitHub Actions workflow
- **Status:** completed
- **Priority:** high
- **Description:** Add CI/CD pipeline for automated deployments
- **Checklist:**
  - [x] Create `.github/workflows/` directory
  - [x] Create `deploy.yml` workflow file
  - [x] Configure test job (PHP 8.4, Node 22)
  - [x] Configure staging deployment (develop branch)
  - [x] Configure production deployment (main branch)
  - [x] Add workflow_dispatch for manual triggers

### 4. Clean up deprecated files
- **Status:** completed
- **Priority:** medium
- **Description:** Remove files no longer needed by v2.0
- **Checklist:**
  - [x] Delete `deploy/secrets.tpl`
  - [x] Delete duplicate `deploy/deploy/` directory
  - [ ] Update `.gitignore` if needed (not required)

### 5. Run composer update
- **Status:** completed
- **Priority:** high
- **Depends on:** Tasks 1, 2, 4
- **Description:** Update to v2.0 of deployer-laravel-stack
- **Checklist:**
  - [x] Run `composer update cothinking-dev/deployer-laravel-stack`
  - [x] Verify no breaking changes in output
  - [x] Test `./deploy/dep list` works

### 6. Generate CI deploy key
- **Status:** completed
- **Priority:** high
- **Depends on:** Task 5
- **Description:** Generate SSH key for GitHub Actions to deploy
- **Checklist:**
  - [x] Run `./deploy/dep github:ci-key server` (key already exists)
  - [x] Public key: `ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAINedff4VyMx5NbIdH1+gnR8SPQhFFAwayCpH+4L7Mv/A`
  - [ ] Get private key from server: `ssh root@ssh.moojing-global.com cat /home/deployer/.ssh/github_actions`

### 7. Configure GitHub environments and secrets
- **Status:** completed
- **Priority:** high
- **Depends on:** Task 6
- **Description:** Set up GitHub environments with required secrets
- **Checklist:**
  - [x] Create `production` environment in GitHub repo settings
  - [x] Create `staging` environment in GitHub repo settings
  - [x] Set `SSH_PRIVATE_KEY` secret for production
  - [x] Set `DEPLOYER_SUDO_PASS` secret for production
  - [x] Set `DEPLOYER_APP_KEY` secret for production
  - [x] Set all secrets for staging environment
  - [x] Set `APP_KEY` repo secret for CI tests
  - [ ] Configure protection rules for production (optional)

### 8. Test deployment pipeline
- **Status:** completed
- **Priority:** high
- **Depends on:** Task 7
- **Description:** Verify the new CI/CD pipeline works correctly
- **Checklist:**
  - [x] Push a test commit to trigger workflow
  - [x] Verify tests pass in CI
  - [x] Verify deployment succeeds (release 13 deployed)
  - [ ] Run `./deploy/dep deploy:verify prod` to health check
  - [ ] Check application is running correctly

---

## Notes

### Current Configuration
- **Server:** ssh.moojing-global.com
- **Domain:** pixaproof.cothink.ing
- **Database:** SQLite
- **Deploy path:** /home/deployer/pixaproof

### Secrets to Migrate
From `deploy/secrets.tpl`:
- `DEPLOYER_SUDO_PASS` - op://Devops/pixaproof/sudo-password
- `DEPLOYER_APP_KEY` - op://Devops/moojing-global/$DEPLOYER_ENV-app-key
- `DEPLOYER_DB_PASSWORD` - (not needed for SQLite)

### Rollback Plan
If issues arise:
1. Revert deploy.php changes
2. Restore original deploy/dep from backup
3. Remove .github/workflows/deploy.yml
4. Restore deploy/secrets.tpl
5. Run `composer update cothinking-dev/deployer-laravel-stack:^1.0`

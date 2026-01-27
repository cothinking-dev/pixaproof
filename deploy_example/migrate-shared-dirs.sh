#!/bin/bash
# =============================================================================
# Migration Script: Reorganize Shared Directory Structure
# =============================================================================
# This script migrates from the old flat structure to the new organized structure:
#
# OLD:                          NEW:
# shared/                       shared/
# ├── sqlite/                   ├── data/
# ├── moojing-media/            │   ├── sqlite/
# └── backups/                  │   ├── media/
#                               │   └── backups/
#                               └── storage/
#                                   └── app/private/livewire-tmp/
#
# Run as: deployer (on the server)
# Usage: ./migrate-shared-dirs.sh [myapp|myapp-staging]
# =============================================================================

set -e  # Exit on error

# Default to staging if no argument provided
APP="${1:-moojing-staging}"
SHARED_PATH="/home/deployer/${APP}/shared"

echo "=== Migration Script for ${APP} ==="
echo "Working on: ${SHARED_PATH}"
echo ""

# Check if shared directory exists
if [ ! -d "${SHARED_PATH}" ]; then
    echo "ERROR: ${SHARED_PATH} does not exist"
    exit 1
fi

cd "${SHARED_PATH}"

# 1. Create new directory structure
echo "1. Creating new directory structure..."
mkdir -p data/{sqlite,media,backups}
mkdir -p storage/app/private/livewire-tmp
echo "   Created: data/sqlite, data/media, data/backups"
echo "   Created: storage/app/private/livewire-tmp"

# 2. Move SQLite database
echo ""
echo "2. Moving SQLite database..."
if [ -f "sqlite/database.sqlite" ]; then
    if [ ! -f "data/sqlite/database.sqlite" ]; then
        cp sqlite/database.sqlite data/sqlite/database.sqlite
        echo "   Copied: sqlite/database.sqlite -> data/sqlite/database.sqlite"

        # Verify copy
        OLD_SIZE=$(stat -c%s "sqlite/database.sqlite" 2>/dev/null || stat -f%z "sqlite/database.sqlite")
        NEW_SIZE=$(stat -c%s "data/sqlite/database.sqlite" 2>/dev/null || stat -f%z "data/sqlite/database.sqlite")

        if [ "$OLD_SIZE" = "$NEW_SIZE" ]; then
            rm -rf sqlite
            echo "   Removed old sqlite/ directory"
        else
            echo "   WARNING: Size mismatch, keeping old sqlite/ directory"
        fi
    else
        echo "   SKIPPED: data/sqlite/database.sqlite already exists"
    fi
else
    echo "   SKIPPED: No sqlite/database.sqlite found"
fi

# 3. Move media files
echo ""
echo "3. Moving media files..."
if [ -d "moojing-media" ]; then
    # Check if there are files to move
    if [ "$(ls -A moojing-media 2>/dev/null)" ]; then
        # Copy contents to data/media
        cp -r moojing-media/* data/media/ 2>/dev/null || true
        echo "   Copied contents from moojing-media/ to data/media/"

        # Remove old directory
        rm -rf moojing-media
        echo "   Removed old moojing-media/ directory"
    else
        echo "   moojing-media/ is empty, removing..."
        rm -rf moojing-media
    fi
else
    echo "   SKIPPED: No moojing-media/ directory found"
fi

# 4. Move backups if they exist in old location
echo ""
echo "4. Moving backups..."
if [ -d "backups" ] && [ "$(ls -A backups 2>/dev/null)" ]; then
    cp -r backups/* data/backups/ 2>/dev/null || true
    rm -rf backups
    echo "   Moved backups/ -> data/backups/"
else
    echo "   SKIPPED: No backups/ directory or empty"
fi

# 5. Clean up any corrupted livewire-tmp
echo ""
echo "5. Ensuring clean livewire-tmp directory..."
if [ -e "storage/app/private/livewire-tmp" ] && [ ! -d "storage/app/private/livewire-tmp" ]; then
    rm -f storage/app/private/livewire-tmp
    mkdir -p storage/app/private/livewire-tmp
    echo "   Recreated livewire-tmp (was corrupted file)"
fi

# 6. Set permissions
echo ""
echo "6. Setting permissions..."
chmod -R 775 data/media data/sqlite storage/app/private/livewire-tmp 2>/dev/null || true
chmod 664 data/sqlite/database.sqlite 2>/dev/null || true
echo "   Permissions set"

# 7. Summary
echo ""
echo "=== Migration Complete ==="
echo ""
echo "New structure:"
ls -la "${SHARED_PATH}/data/" 2>/dev/null || echo "  (data/ not found)"
echo ""
echo "Livewire tmp:"
ls -la "${SHARED_PATH}/storage/app/private/" 2>/dev/null || echo "  (not found)"
echo ""
echo "Next steps:"
echo "  1. Deploy: vendor/bin/dep deploy ${APP#moojing-}"
echo "  2. Verify symlink: ls -la ~/\${APP}/current/public/moojing-media"
echo "  3. Test file upload in Filament admin"

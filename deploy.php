<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'vendor/cothinking-dev/deployer-laravel-stack/src/recipe.php';

// ─────────────────────────────────────────────────────────────────────────────
// Application
// ─────────────────────────────────────────────────────────────────────────────

set('application', 'Pixaproof');
set('repository', 'git@github.com:cothinking-dev/pixaproof.git');
set('keep_releases', 5);

set('php_version', '8.4');
set('node_version', '22');
set('web_server', 'fpm');

// ─────────────────────────────────────────────────────────────────────────────
// Server
// ─────────────────────────────────────────────────────────────────────────────

set('server_hostname', getenv('DEPLOYER_HOST') ?: 'ssh.moojing-global.com');

host('server')
    ->setHostname(get('server_hostname'))
    ->set('remote_user', 'root')
    ->set('labels', ['stage' => 'server'])
    ->set('deploy_path', '/home/deployer/pixaproof');

// ─────────────────────────────────────────────────────────────────────────────
// Shared Resources
// ─────────────────────────────────────────────────────────────────────────────

// Laravel recipe already sets storage and .env
// Add database directory for SQLite
add('shared_dirs', ['database']);
add('writable_dirs', ['database']);

// ─────────────────────────────────────────────────────────────────────────────
// Database
// ─────────────────────────────────────────────────────────────────────────────

// SQLite configuration
set('db_connection', 'sqlite');

// ─────────────────────────────────────────────────────────────────────────────
// Secrets (from 1Password via environment)
// ─────────────────────────────────────────────────────────────────────────────

set('secrets', fn () => requireSecrets(
    required: ['DEPLOYER_SUDO_PASS', 'DEPLOYER_APP_KEY'],
    optional: ['DEPLOYER_STRIPE_KEY' => '']
));

// ─────────────────────────────────────────────────────────────────────────────
// Environments
// ─────────────────────────────────────────────────────────────────────────────

environment('prod', [
    'deploy_path' => '/home/deployer/pixaproof',
    'domain' => 'pixaproof.cothink.ing',
    'db_name' => 'pixaproof',
    'redis_db' => 0,
    'env' => [
        'GTM_ID' => '',
    ],
]);

// ─────────────────────────────────────────────────────────────────────────────
// Shared Environment Variables
// ─────────────────────────────────────────────────────────────────────────────

set('shared_env', [
    // Database - SQLite (requires absolute path)
    'DB_DATABASE' => '{{deploy_path}}/shared/database/database.sqlite',

    // Cache - Use file-based cache (no Redis)
    'CACHE_STORE' => 'file',
    'SESSION_DRIVER' => 'file',
    'QUEUE_CONNECTION' => 'sync',

    // Filesystem
    'FILESYSTEM_DISK' => 'local',

    // Mail
    // 'MAIL_MAILER' => 'smtp',
    // 'MAIL_FROM_ADDRESS' => 'hello@example.com',
    // 'MAIL_FROM_NAME' => '${APP_NAME}',

    // Third-party services (use {secret_key} for secrets)
    // 'STRIPE_KEY' => '{stripe_key}',
]);

// ─────────────────────────────────────────────────────────────────────────────
// Queue Workers (optional)
// ─────────────────────────────────────────────────────────────────────────────

// Uncomment to enable Supervisor-managed queue workers:
// set('queue_worker_name', fn () => 'myapp-' . getStage() . '-worker');

// ─────────────────────────────────────────────────────────────────────────────
// Hooks
// ─────────────────────────────────────────────────────────────────────────────

after('deploy:failed', 'deploy:unlock');

<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

set('ssh_multiplexing', false);

// set stage
set('default_stage', 'staging');

// Project repository
set('repository', 'git@github.com:Barelydead/auto-deploy-example.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

inventory('hosts.yml');


// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
before('deploy:symlink', 'artisan:migrate');

<?php
// Set Variables
$LOCAL_ROOT         = "/var/www/jk-design.nu";
$LOCAL_REPO_NAME    = "public_web";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:devbowser/jkd3sign.git";
$BRANCH             = "master";
if ( $_POST['payload'] ) {
  // Only respond to POST requests from Github

  shell_exec("cd {$LOCAL_REPO} && date >> git.log");

  if( file_exists($LOCAL_REPO) ) {

    // If there is already a repo, just run a git pull to grab the latest change                                                                                                                                                             s
    shell_exec("cd {$LOCAL_REPO} && bin/grav clear-cache >> git.log");
    shell_exec("cd {$LOCAL_REPO} && git pull >> git.log");
    die("done " . mktime());
  } else {

    // If the repo does not exist, then clone it into the parent directory
    shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO} >> git.log");

    die("done " . mktime());
  }
}
?>
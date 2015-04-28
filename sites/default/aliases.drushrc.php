<?php

$aliases['prod'] = array(
  'root' => '/home/users/1/mods.jp-kiri/web',
  'uri' => 'kiri.mods.jp',
  'remote-host' => 'ssh155.lolipop.jp',
  'remote-user' => 'mods.jp-kiri',
  'ssh-options' => '-p 2222',
  'mysqldump' => '/usr/bin/mysqldump-5.6',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
    // drushコマンドはシステムにインストールされていないのでパスを指定する必要がある
    '%drush' => '/home/users/1/mods.jp-kiri/drush',
    '%drush-script' => '/home/users/1/mods.jp-kiri/drush/drush',
  ),
);

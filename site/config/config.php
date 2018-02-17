<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

 */

c::set('debug', true);
c::set('timezone','Europe/Berlin');

c::set('routes', array(
  array(
    'pattern' => 'logout',
    'action' => function() {
      if($user = site()->user()) $user->logout();
      go('login');
    }
  )
));

/* autogit */
c::set('autogit',                true);
c::set('autogit.remote.name',    'origin');
c::set('autogit.remote.branch',  'master');
c::set('autogit.webhook.secret', false);
c::set('autogit.webhook.url',    'autogit');
c::set('autogit.panel.user',     true);
c::set('autogit.widget',         false);
c::set('autogit.language',       'en');
c::set('autogit.translation', [
    'site.update'  => 'change site options',
    'page.create'  => 'create page %s',
    'page.update'  => 'update page %s',
    'page.delete'  => 'delete page %s',
    'page.sort'    => 'sort page %s',
    'page.hide'    => 'hide page %s',
    'page.move'    => 'move page %1$s to %2$s',
    'file.upload'  => 'upload file %s',
    'file.replace' => 'replace file %s',
    'file.rename'  => 'rename file %s',
    'file.update'  => 'update file %s',
    'file.sort'    => 'sort file %s',
    'file.delete'  => 'delete file %s',
]);

c::set('plugin.commonmark', true);

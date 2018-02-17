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

c::set('autogit.widget',         true);

c::set('autogit.language',       'en');
c::set('autogit.translation', [
    'site.update'  => 'Changed site options',
    'page.create'  => 'Created page %s',
    'page.update'  => 'Updated page %s',
    'page.delete'  => 'Deleted page %s',
    'page.sort'    => 'Sorted page %s',
    'page.hide'    => 'Hid page %s',
    'page.move'    => 'Moved page %1$s to %2$s',
    'file.upload'  => 'Uploaded file %s',
    'file.replace' => 'Replaced file %s',
    'file.rename'  => 'Renamed file %s',
    'file.update'  => 'Updated file %s',
    'file.sort'    => 'Sorted file %s',
    'file.delete'  => 'Deleted file %s',
]);

c::set('plugin.commonmark', true);

<?php

kirby()->routes(array(
  array(
    'pattern' => 'content/(:all)',
    'action' => function($path) {

      $dirs = str::split($path, '/');
      $filename = array_pop($dirs);

      // we start with site->children()
      // and then climb up the tree with every round of
      // the foreach loop
      $parent = site();

      foreach($dirs as $dirname) {
        // try to find the next parent page by $dirname
        if($child = $parent->children()->findBy('dirname', $dirname)) {
          // overwrite the parent for the next round
          $parent = $child;
        } else {
          header::notFound();
          die('Page not found');
        }
      }

      // now let's try to find that file
      if($file = $parent->file($filename)) {

        // check for a logged in user
        if($user = site()->user()) {
          $file->show();
        } else {
          header::forbidden();
          die('Unauthorized access');
        }

      } else {
        header::notFound();
        die('File not found');
      }

    }
  )
));

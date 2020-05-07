<?php if (!$kirby->user() && !$page->is('login')) go('/login') ?>

<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- The title tag we show the title of our site and the title of the current page -->
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <!-- Stylesheets can be included using the `css()` helper. Kirby also provides the `js()` helper to include script file. 
        More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers -->
  <?= css(['assets/css/index.css', '@auto']) ?>
  
  <script src="https://kit.fontawesome.com/69f0f4c20b.js" crossorigin="anonymous"></script>

  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '567862500815676');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=567862500815676&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body>

  <div class="page">
    <header class="header">
      <!-- In this link we call `$site->url()` to create a link back to the homepage -->
      <a class="logo" href="<?= $site->url() ?>"><?= $site->image('bemo-logo2.png')->resize(null, 100) ?></a>

      <nav id="menu" class="menu">
        <?php 
        // In the menu, we only fetch listed pages, i.e. the pages that have a prepended number in their foldername
        // We do not want to display links to unlisted `error`, `home`, or `sandbox` pages
        // More about page status: https://getkirby.com/docs/reference/panel/blueprints/page#statuses
        foreach ($site->children()->listed() as $item): ?>
          <?= $item->title()->link() ?>
        <?php endforeach ?>
        <?php if ($user = $kirby->user()): ?>
          <a href="<?= url('logout') ?>">Logout</a>
        <?php endif ?>
      </nav>
    </header>


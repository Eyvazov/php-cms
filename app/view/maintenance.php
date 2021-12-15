<!doctype html>
<title><?= setting('maintenance_title')?></title>
<style>
    body { text-align: center; padding: 150px; }
    h1 { font-size: 50px; }
    body { font: 20px Helvetica, sans-serif; color: #333; }
    article { display: block; text-align: left; width: 650px; margin: 0 auto; }
    a { color: #dc8100; text-decoration: none; }
    a:hover { color: #333; text-decoration: none; }
</style>

<article>
    <h1><?= setting('maintenance_title')?></h1>
    <div>
        <p><?= setting('maintenance_description')?></p>
        <p>&mdash; <?= setting('title')?></p>
    </div>
</article>
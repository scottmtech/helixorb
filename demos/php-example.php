<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Helixorb — PHP include example</title>
  <link rel="stylesheet" href="../css/orbs.css">
  <style>
    html, body { margin: 0; background: #070b10; color: #d8eee6; font: 15px/1.5 ui-sans-serif, system-ui, sans-serif; }
    main { max-width: 720px; margin: 0 auto; padding: 48px 20px; }
    .preview { display: grid; place-items: center; min-height: 280px; border: 1px solid #1c2a28; border-radius: 16px; }
    a { color: #5ee0b5; }
    code { font-family: ui-monospace, Menlo, Consolas, monospace; }
  </style>
</head>
<body>
  <main>
    <p><a href="./index.html">← Gallery</a> · <a href="./standalone.html">Standalone</a></p>
    <h1>PHP sample</h1>
    <p>Optional include — the library does not require PHP. Serve this file with <code>php -S localhost:8080</code>. Same <code>data-state</code> API as HTML: <code>document.querySelector(".orb").dataset.state = "listening"</code>.</p>
    <div class="preview">
<?php
$orbVariant = 'lattice-orbit';
$orbState = 'idle';
$orbHue = 168;
$orbSize = '200px';
include __DIR__ . '/../snippets/orb.php';
?>
    </div>
  </main>
</body>
</html>

# Matrix Orbs

Drop-in **pure CSS** “AI presence” orbs: glowing spheres with a digital / matrix look (rings, dots, meridians, ripples, facets). No build step, no CDN, no frameworks, no images.

Inspired by the *idea* of a matrix orb — this CSS and markup are original.

## Open the demos

From the repo root:

```bash
python3 -m http.server 8080
```

Then open:

- [http://localhost:8080/demos/index.html](http://localhost:8080/demos/index.html) — all **5 variations × 4 states**, plus live state and hue controls
- [http://localhost:8080/demos/standalone.html](http://localhost:8080/demos/standalone.html) — one orb and the copy-paste snippet

You can also open the HTML files directly in a browser (`file://`). A local server is nicer for path resolution.

## Theme in one line

```html
<div class="orb orb--soft" data-state="idle" style="--orb-hue: 272;">
```

`--orb-color`, `--orb-glow`, and `--orb-color-secondary` follow `--orb-hue` unless you set them yourself:

```html
<div class="orb orb--wire" data-state="thinking"
     style="--orb-color: #39ff88; --orb-color-secondary: #baffd9; --orb-size: 180px;">
```

Set `--orb-hue` on `:root` or any wrapper to retheme every orb inside it.

## Drop into HTML

1. Copy `css/` into the project (or link `css/orbs.css`).
2. Paste a snippet from `snippets/`.

```html
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/orbs.css">
</head>
<body>
  <div class="orb orb--soft" data-state="idle" style="--orb-hue: 168;"
       role="img" aria-label="AI presence, idle">
    <span class="orb__glow"></span>
    <span class="orb__core"></span>
    <span class="orb__ring" style="--i:1"></span>
    <span class="orb__ring" style="--i:2"></span>
    <span class="orb__ring" style="--i:3"></span>
    <span class="orb__scan"></span>
  </div>
</body>
</html>
```

Or include only what you need:

```html
<link rel="stylesheet" href="css/tokens.css">
<link rel="stylesheet" href="css/orb.css">
<link rel="stylesheet" href="css/orb-soft.css">
```

Ready-made fragments:

| Variation | Class | Snippet |
| --- | --- | --- |
| Soft glow + rings | `orb orb--soft` | `snippets/soft.html` |
| Dot-lattice shell | `orb orb--lattice` | `snippets/lattice.html` |
| Wireframe meridians | `orb orb--wire` | `snippets/wire.html` |
| Ripple / pulse rings | `orb orb--ripple` | `snippets/ripple.html` |
| Faceted crystal | `orb orb--crystal` | `snippets/crystal.html` |

## Drop into PHP

Link the stylesheet once in the layout head, then include the fragment:

```php
<link rel="stylesheet" href="/css/orbs.css">

<?php
$orbVariant = 'soft';   // soft | lattice | wire | ripple | crystal
$orbState   = 'idle';   // idle | thinking | listening | talking | writing
$orbHue     = 168;
include __DIR__ . '/snippets/orb.php';
?>
```

Optional: `$orbColor`, `$orbSize` (`'180px'`), `$orbLabel`.

Switch state later with a class/attribute — no PHP required:

```html
<script src="/js/orb.js"></script>
<script>
  MatrixOrb.setState(document.querySelector('.orb'), 'thinking');
</script>
```

Or set it yourself: `element.dataset.state = 'listening'`.

## States

Use `data-state` on `.orb` (one pattern, everywhere):

| Value | Feel |
| --- | --- |
| `idle` | Calm, slow breathe / drift |
| `thinking` | Faster, scanning / searching |
| `listening` | Receptive expand–contract or inward waves |
| `talking` | Brighter, speaking cadence |
| `writing` | Alias of `talking` (same CSS) |

Vanilla JS is optional and only for toggling that attribute.

## CSS variables

| Token | Role |
| --- | --- |
| `--orb-hue` | Hue (0–360). Drives color if you do not set `--orb-color`. |
| `--orb-color` | Primary glow / stroke |
| `--orb-color-secondary` | Highlights, scan, inner light |
| `--orb-glow` | Soft bloom color |
| `--orb-bg` | Page/demo background token |
| `--orb-size` | Width and height (default `160px`) |

## File map

```
css/tokens.css          shared variables + state timing
css/orb.css             shared shell, reduced-motion
css/orb-soft.css
css/orb-lattice.css
css/orb-wire.css
css/orb-ripple.css
css/orb-crystal.css
css/orbs.css            @import bundle (all of the above)
js/orb.js               optional MatrixOrb.setState / setHue
snippets/*.html         copy-paste markup per variation
snippets/orb.php        PHP include
demos/index.html        gallery + live controls
demos/standalone.html   single-orb drop-in page
demos/php-example.php   PHP page that includes the fragment
```

`prefers-reduced-motion: reduce` stops looping motion.

## License

MIT. See `LICENSE`.

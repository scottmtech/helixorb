<?php
/**
 * Drop-in Matrix Orb for PHP templates.
 *
 * Usage:
 *   $orbVariant = 'soft';      // soft | lattice | wire | ripple | crystal
 *   $orbState   = 'idle';      // idle | thinking | listening | talking | writing
 *   $orbHue     = 168;         // any hue, or set $orbColor
 *   include __DIR__ . '/orb.php';
 *
 * Link the stylesheet once in the document head:
 *   <link rel="stylesheet" href="/css/orbs.css">
 */
$orbVariant = $orbVariant ?? 'soft';
$orbState   = $orbState ?? 'idle';
$orbHue     = $orbHue ?? 168;
$orbColor   = $orbColor ?? null;
$orbSize    = $orbSize ?? null;
$orbLabel   = $orbLabel ?? ('AI presence, ' . $orbState);

$allowed = ['soft', 'lattice', 'wire', 'ripple', 'crystal'];
if (!in_array($orbVariant, $allowed, true)) {
    $orbVariant = 'soft';
}

$style = '--orb-hue: ' . (int) $orbHue . ';';
if ($orbColor) {
    $style .= '--orb-color: ' . htmlspecialchars($orbColor, ENT_QUOTES) . ';';
}
if ($orbSize) {
    $style .= '--orb-size: ' . htmlspecialchars($orbSize, ENT_QUOTES) . ';';
}

$state = htmlspecialchars($orbState, ENT_QUOTES);
$label = htmlspecialchars($orbLabel, ENT_QUOTES);
$class = 'orb orb--' . htmlspecialchars($orbVariant, ENT_QUOTES);
?>
<div class="<?php echo $class; ?>" data-state="<?php echo $state; ?>" style="<?php echo $style; ?>" role="img" aria-label="<?php echo $label; ?>">
<?php if ($orbVariant === 'soft'): ?>
  <span class="orb__glow"></span>
  <span class="orb__core"></span>
  <span class="orb__ring" style="--i:1"></span>
  <span class="orb__ring" style="--i:2"></span>
  <span class="orb__ring" style="--i:3"></span>
  <span class="orb__scan"></span>
<?php elseif ($orbVariant === 'lattice'): ?>
  <span class="orb__glow"></span>
  <span class="orb__shell">
    <i style="--x:0.000;--y:1.000;--z:0.000"></i>
    <i style="--x:-0.174;--y:0.972;--z:0.159"></i>
    <i style="--x:0.029;--y:0.944;--z:-0.330"></i>
    <i style="--x:0.245;--y:0.915;--z:0.319"></i>
    <i style="--x:-0.454;--y:0.887;--z:-0.080"></i>
    <i style="--x:0.432;--y:0.859;--z:-0.275"></i>
    <i style="--x:-0.144;--y:0.831;--z:0.537"></i>
    <i style="--x:-0.275;--y:0.803;--z:-0.529"></i>
    <i style="--x:0.594;--y:0.775;--z:0.217"></i>
    <i style="--x:-0.615;--y:0.746;--z:0.254"></i>
    <i style="--x:0.295;--y:0.718;--z:-0.630"></i>
    <i style="--x:0.217;--y:0.690;--z:0.691"></i>
    <i style="--x:-0.649;--y:0.662;--z:-0.376"></i>
    <i style="--x:0.755;--y:0.634;--z:-0.166"></i>
    <i style="--x:-0.458;--y:0.606;--z:0.651"></i>
    <i style="--x:-0.105;--y:0.577;--z:-0.810"></i>
    <i style="--x:0.639;--y:0.549;--z:0.539"></i>
    <i style="--x:-0.853;--y:0.521;--z:0.035"></i>
    <i style="--x:0.617;--y:0.493;--z:-0.614"></i>
    <i style="--x:-0.041;--y:0.465;--z:0.884"></i>
    <i style="--x:-0.576;--y:0.437;--z:-0.691"></i>
    <i style="--x:0.905;--y:0.408;--z:0.122"></i>
    <i style="--x:-0.759;--y:0.380;--z:0.528"></i>
    <i style="--x:0.205;--y:0.352;--z:-0.913"></i>
    <i style="--x:0.470;--y:0.324;--z:0.821"></i>
    <i style="--x:-0.910;--y:0.296;--z:-0.290"></i>
    <i style="--x:0.875;--y:0.268;--z:-0.404"></i>
    <i style="--x:-0.375;--y:0.239;--z:0.896"></i>
    <i style="--x:-0.331;--y:0.211;--z:-0.920"></i>
    <i style="--x:0.870;--y:0.183;--z:0.457"></i>
    <i style="--x:-0.955;--y:0.155;--z:0.252"></i>
    <i style="--x:0.536;--y:0.127;--z:-0.834"></i>
    <i style="--x:0.169;--y:0.099;--z:0.981"></i>
    <i style="--x:-0.789;--y:0.070;--z:-0.611"></i>
    <i style="--x:0.996;--y:0.042;--z:-0.082"></i>
    <i style="--x:-0.679;--y:0.014;--z:0.734"></i>
    <i style="--x:0.005;--y:-0.014;--z:-1.000"></i>
    <i style="--x:0.671;--y:-0.042;--z:0.740"></i>
    <i style="--x:-0.993;--y:-0.070;--z:-0.092"></i>
    <i style="--x:0.793;--y:-0.099;--z:-0.602"></i>
    <i style="--x:-0.178;--y:-0.127;--z:0.976"></i>
    <i style="--x:-0.526;--y:-0.155;--z:-0.836"></i>
    <i style="--x:0.948;--y:-0.183;--z:0.260"></i>
    <i style="--x:-0.870;--y:-0.211;--z:0.446"></i>
    <i style="--x:0.338;--y:-0.239;--z:-0.910"></i>
    <i style="--x:0.363;--y:-0.268;--z:0.892"></i>
    <i style="--x:-0.863;--y:-0.296;--z:-0.409"></i>
    <i style="--x:0.904;--y:-0.324;--z:-0.279"></i>
    <i style="--x:-0.473;--y:-0.352;--z:0.808"></i>
    <i style="--x:-0.194;--y:-0.380;--z:-0.904"></i>
    <i style="--x:0.744;--y:-0.408;--z:0.529"></i>
    <i style="--x:-0.893;--y:-0.437;--z:0.111"></i>
    <i style="--x:0.574;--y:-0.465;--z:-0.674"></i>
    <i style="--x:0.032;--y:-0.493;--z:0.869"></i>
    <i style="--x:-0.599;--y:-0.521;--z:-0.608"></i>
    <i style="--x:0.835;--y:-0.549;--z:0.043"></i>
    <i style="--x:-0.629;--y:-0.577;--z:0.520"></i>
    <i style="--x:0.110;--y:-0.606;--z:-0.788"></i>
    <i style="--x:0.439;--y:-0.634;--z:0.637"></i>
    <i style="--x:-0.730;--y:-0.662;--z:-0.168"></i>
    <i style="--x:0.630;--y:-0.690;--z:-0.357"></i>
    <i style="--x:-0.215;--y:-0.718;--z:0.662"></i>
    <i style="--x:-0.276;--y:-0.746;--z:-0.605"></i>
    <i style="--x:0.582;--y:-0.775;--z:0.247"></i>
    <i style="--x:-0.562;--y:-0.803;--z:0.199"></i>
    <i style="--x:0.261;--y:-0.831;--z:-0.491"></i>
    <i style="--x:0.128;--y:-0.859;--z:0.495"></i>
    <i style="--x:-0.387;--y:-0.887;--z:-0.251"></i>
    <i style="--x:0.397;--y:-0.915;--z:-0.066"></i>
    <i style="--x:-0.204;--y:-0.944;--z:0.261"></i>
    <i style="--x:-0.018;--y:-0.972;--z:-0.235"></i>
    <i style="--x:0.000;--y:-1.000;--z:0.000"></i>
  </span>
  <span class="orb__core"></span>
  <span class="orb__scan"></span>
<?php elseif ($orbVariant === 'wire'): ?>
  <span class="orb__glow"></span>
  <span class="orb__globe">
    <span class="orb__meridian" style="--a:0deg"></span>
    <span class="orb__meridian" style="--a:30deg"></span>
    <span class="orb__meridian" style="--a:60deg"></span>
    <span class="orb__meridian" style="--a:90deg"></span>
    <span class="orb__meridian" style="--a:120deg"></span>
    <span class="orb__meridian" style="--a:150deg"></span>
    <span class="orb__lat" style="--a:0deg"></span>
    <span class="orb__lat" style="--a:35deg"></span>
    <span class="orb__lat" style="--a:-35deg"></span>
    <span class="orb__lat" style="--a:62deg"></span>
    <span class="orb__lat" style="--a:-62deg"></span>
  </span>
  <span class="orb__core"></span>
  <span class="orb__scan"></span>
<?php elseif ($orbVariant === 'ripple'): ?>
  <span class="orb__glow"></span>
  <span class="orb__wave" style="--w:0"></span>
  <span class="orb__wave" style="--w:1"></span>
  <span class="orb__wave" style="--w:2"></span>
  <span class="orb__wave" style="--w:3"></span>
  <span class="orb__core"></span>
  <span class="orb__scan"></span>
<?php else: ?>
  <span class="orb__glow"></span>
  <span class="orb__gem">
    <span class="orb__facet" style="--poly:50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%; --rot:0deg; --s:1; --tilt:132deg"></span>
    <span class="orb__facet" style="--poly:50% 6%, 94% 50%, 50% 94%, 6% 50%; --rot:18deg; --s:0.9; --tilt:210deg"></span>
    <span class="orb__facet" style="--poly:20% 0%, 100% 20%, 80% 100%, 0% 70%; --rot:-24deg; --s:0.86; --tilt:80deg"></span>
    <span class="orb__facet" style="--poly:0% 30%, 70% 0%, 100% 70%, 30% 100%; --rot:42deg; --s:0.82; --tilt:300deg"></span>
    <span class="orb__facet" style="--poly:50% 0%, 100% 100%, 0% 100%; --rot:8deg; --s:0.7; --tilt:160deg"></span>
    <span class="orb__facet" style="--poly:0% 0%, 100% 0%, 50% 100%; --rot:-50deg; --s:0.68; --tilt:40deg"></span>
    <span class="orb__facet" style="--poly:12% 12%, 88% 18%, 78% 88%, 18% 82%; --rot:70deg; --s:0.78; --tilt:250deg"></span>
    <span class="orb__facet" style="--poly:30% 4%, 96% 40%, 60% 96%, 4% 55%; --rot:-12deg; --s:0.74; --tilt:190deg"></span>
  </span>
  <span class="orb__core"></span>
  <span class="orb__scan"></span>
<?php endif; ?>
</div>

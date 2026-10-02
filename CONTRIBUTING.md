# Contribute to Helixorb

Helixorb is MIT-licensed. Issues and PRs are welcome.

## Keep the drop-in API

- Public stylesheet: `css/orbs.css`
- Markup: `.orb` + a variant class (`orb--lattice-orbit`, `orb--lattice-spiral`, …)
- State: `data-state="idle|thinking|listening|talking"` (`writing` = talking)
- Do not rename those classes or the `data-state` values
- `js/orb.js` stays optional; keep the `MatrixOrb` alias of `Helixorb`

## Visual notes

Orbit and spiral are shell-first: sharp particle dots, minimal core and halo. States should stay distinct through motion, not a brighter center.

## No new runtime dependencies

Demos are static HTML. Do not add a bundler, CDN, or framework requirement.

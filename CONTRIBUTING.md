# Contribute to Helixorb

Helixorb is MIT-licensed. Issues and PRs are welcome.

## Keep the drop-in API

- Public stylesheet: `css/orbs.css`
- Markup: `.orb` + a variant class (`orb--lattice-orbit`, `orb--lattice-spiral`, …)
- State: `data-state="idle|thinking|listening|talking"` (`writing` = talking)
- Do not rename those classes or the `data-state` values
- `js/orb.js` stays optional; keep the `MatrixOrb` alias of `Helixorb`

## Visual notes

Every variant is shell-first: dots, rings, meridians, waves, or facets are the read. Minimal core and halo. States stay distinct through motion, not a brighter center. `--orb-bright` stays at `1`.

## No new runtime dependencies

Demos are static HTML. Do not add a bundler, CDN, or framework requirement.

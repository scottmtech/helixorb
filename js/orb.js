/**
 * Optional state helper. Pure CSS orbs work without this —
 * set data-state yourself. writing is accepted as an alias of talking.
 */
(function (root) {
  var VALID = { idle: 1, thinking: 1, listening: 1, talking: 1, writing: 1 };

  function normalize(state) {
    if (state === "writing") return "talking";
    return VALID[state] ? state : "idle";
  }

  function setState(el, state) {
    if (!el) return;
    el.setAttribute("data-state", normalize(state));
  }

  function setHue(el, hue) {
    if (!el) return;
    el.style.setProperty("--orb-hue", String(hue));
  }

  root.MatrixOrb = { setState: setState, setHue: setHue, normalize: normalize };
})(typeof window !== "undefined" ? window : this);

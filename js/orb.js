/**
 * Optional helper. Not required — CSS already reads data-state.
 *   MatrixOrb.setState(orb, "listening");
 *   MatrixOrb.setHue(orb, 272);
 * writing is stored as talking.
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

/**
 * Optional Helixorb helper. Not required — CSS already reads data-state.
 *   Helixorb.setState(orb, "listening");
 *   Helixorb.setHue(orb, 272);
 * MatrixOrb is a compatibility alias. writing is stored as talking.
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

  var api = { setState: setState, setHue: setHue, normalize: normalize };
  root.Helixorb = api;
  root.MatrixOrb = api;
})(typeof window !== "undefined" ? window : this);

(function () {
  var stage = document.getElementById("stage");
  var hueInput = document.getElementById("hue");
  var hueOut = document.getElementById("hue-out");
  var currentVariant = "lattice";
  var currentState = "idle";

  function stageOrb() {
    return document.getElementById("stage-orb");
  }

  function applyTheme(hue) {
    document.documentElement.style.setProperty("--orb-hue", String(hue));
    hueOut.value = hue;
    hueInput.value = hue;
  }

  function mountVariant(variant, state) {
    var tpl = document.getElementById("tpl-" + variant);
    if (!tpl || !stage) return;
    stage.innerHTML = "";
    stage.appendChild(tpl.content.cloneNode(true));
    var orb = stageOrb();
    if (!orb) return;
    orb.id = "stage-orb";
    orb.style.setProperty("--orb-size", "220px");
    MatrixOrb.setState(orb, state);
    orb.setAttribute("aria-label", "Playground orb, " + MatrixOrb.normalize(state));
  }

  document.querySelectorAll(".pills [data-variant]").forEach(function (btn) {
    btn.addEventListener("click", function () {
      currentVariant = btn.getAttribute("data-variant");
      document.querySelectorAll(".pills [data-variant]").forEach(function (b) {
        b.classList.toggle("is-active", b === btn);
      });
      mountVariant(currentVariant, currentState);
    });
  });

  document.querySelectorAll(".pills [data-state]").forEach(function (btn) {
    btn.addEventListener("click", function () {
      currentState = btn.getAttribute("data-state");
      document.querySelectorAll(".pills [data-state]").forEach(function (b) {
        b.classList.toggle("is-active", b === btn);
      });
      MatrixOrb.setState(stageOrb(), currentState);
      var orb = stageOrb();
      if (orb) {
        orb.setAttribute("aria-label", "Playground orb, " + MatrixOrb.normalize(currentState));
      }
    });
  });

  hueInput.addEventListener("input", function () {
    applyTheme(hueInput.value);
  });

  document.querySelectorAll("[data-hue]").forEach(function (btn) {
    btn.addEventListener("click", function () {
      applyTheme(btn.getAttribute("data-hue"));
    });
  });

  applyTheme(168);
})();

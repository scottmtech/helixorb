(function () {
  var select = document.getElementById("variant-select");
  var badge = document.getElementById("class-badge");
  if (!select) return;

  var current = select.value || "lattice";

  function syncPills(variant) {
    document.querySelectorAll(".pills [data-variant]").forEach(function (b) {
      b.classList.toggle("is-active", b.getAttribute("data-variant") === variant);
    });
  }

  function show(variant, state) {
    var tpl = document.getElementById("tpl-" + variant);
    var stage = document.getElementById("stage");
    if (!tpl || !stage) return;
    stage.innerHTML = "";
    stage.appendChild(tpl.content.cloneNode(true));
    var orb = document.getElementById("stage-orb");
    if (!orb) return;
    orb.style.setProperty("--orb-size", "260px");
    MatrixOrb.setState(orb, state || "idle");
    if (badge) badge.innerHTML = "<code>orb--" + variant + "</code>";
  }

  select.addEventListener("change", function () {
    current = select.value;
    var stateBtn = document.querySelector(".pills [data-state].is-active");
    var state = stateBtn ? stateBtn.getAttribute("data-state") : "idle";
    show(current, state);
    syncPills(current);
  });
})();

  const nav = document.getElementById("headerNav");
  const btn = nav?.querySelector(".hamburger");
  if (!nav || !btn) return;

  const isMobile = () => window.matchMedia("(max-width: 999px)").matches;

  btn.addEventListener("click", () => {
    if (!isMobile()) return;
    const open = nav.classList.toggle("is-open");
    btn.setAttribute("aria-expanded", open ? "true" : "false");
  });

  document.addEventListener("click", (e) => {
    if (!nav.classList.contains("is-open")) return;
    if (nav.contains(e.target)) return;
    nav.classList.remove("is-open");
    btn.setAttribute("aria-expanded", "false");
  });

  // 画面を広げたらメニュー状態をリセット（PCで開きっぱなし防止）
  window.addEventListener("resize", () => {
    if (isMobile()) return;
    nav.classList.remove("is-open");
    btn.setAttribute("aria-expanded", "false");
  });
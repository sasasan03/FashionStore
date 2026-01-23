  
const bg = document.getElementById("heroBg");
const img = document.getElementById("heroImg");

if (bg && img) {
  let x = 0;           // 現在位置(px)
  let dir = -1;        // -1:左へ, 1:右へ
  const speed = 0.35;  // 速度(px/frame) 好みで調整

  function animate() {
    const vw = bg.clientWidth;
    const iw = img.getBoundingClientRect().width;

    // 画像が画面より短い時は動かさない
    const maxShift = Math.max(0, iw - vw);

    // 往復（moln系でよくある“漂う”感じ）
    x += dir * speed;
    if (x <= -maxShift) { x = -maxShift; dir = 1; }
    if (x >= 0)         { x = 0;         dir = -1; }

    bg.style.transform = `translate3d(${x}px, 0, 0)`;
    requestAnimationFrame(animate);
  }

  img.addEventListener("load", () => requestAnimationFrame(animate));
}

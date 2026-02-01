document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("heroTrack");
  if (!track) return;

  const first = track.querySelector(".heroImg");
  if (!first) return;

  // 途切れ防止に複製して後ろに追加（最低2枚にする）
  const clone = first.cloneNode(true);
  track.appendChild(clone);

  let x = 0;
  const speed = 0.6; // px/frame

  function animate() {
    const w = first.getBoundingClientRect().width; // 1枚分の幅
    if (!w) return requestAnimationFrame(animate);

    x += speed;

    // 左へ流す（-x）ことで、次の画像が右から自然に入ってくる
    track.style.transform = `translate3d(${-x}px, 0, 0)`;

    // 1枚分進んだら巻き戻し（継ぎ目は同じ画像なので見えない）
    if (x >= w) x -= w;

    requestAnimationFrame(animate);
  }

  // 画像読み込み後に開始
  const start = () => requestAnimationFrame(animate);
  if (first.complete) start();
  else first.addEventListener("load", start);


});


  
console.log('ここおこ')
const mainImg = document.getElementById('mainImageId');
const thumbs = document.querySelectorAll('.product-thumb');
const setActive = (btn) => {
  thumbs.forEach(t => t.classList.remove('is-active'));
  btn.classList.add('is-active');
};
// 最初のサムネを「選択中」にしておく（任意）
setActive(thumbs[0]);
thumbs.forEach(btn => {
  btn.addEventListener('click', () => {
    const url = btn.dataset.image;
    mainImg.src = url;
    setActive(btn);
  });
});
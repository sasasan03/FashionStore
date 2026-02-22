(() => {
    const list = document.getElementById('categoryList');
    if (!list) return;

    let dragging = null;

    const getCard = (el) => el?.closest?.('.category-card');

    list.addEventListener('dragstart', (e) => {
        const card = getCard(e.target);
        if (!card) return;
        dragging = card;
        card.classList.add('is-dragging');
        e.dataTransfer?.setData('text/plain', 'drag');
        e.dataTransfer?.setDragImage(card, 20, 20);
    });

    list.addEventListener('dragend', () => {
        dragging?.classList.remove('is-dragging');
        dragging = null;
        list.querySelectorAll('.is-over').forEach((el) => el.classList.remove('is-over'));
    });

    const animateReorder = (prevRects) => {
        const cards = list.querySelectorAll('.category-card');
        cards.forEach((card) => {
            if (card === dragging) return;
            const first = prevRects.get(card);
            if (!first) return;
            const last = card.getBoundingClientRect();
            const dx = first.left - last.left;
            const dy = first.top - last.top;
            if (dx || dy) {
                card.animate(
                    [
                        { transform: `translate(${dx}px, ${dy}px)` },
                        { transform: 'translate(0, 0)' }
                    ],
                    { duration: 180, easing: 'ease' }
                );
            }
        });
    };

    list.addEventListener('dragover', (e) => {
        e.preventDefault();
        const target = getCard(e.target);
        if (!dragging || !target || target === dragging) return;

        const rect = target.getBoundingClientRect();
        const isAfter = e.clientY > rect.top + rect.height / 2;
        list.querySelectorAll('.is-over').forEach((el) => el.classList.remove('is-over'));
        target.classList.add('is-over');

        const prevRects = new Map();
        list.querySelectorAll('.category-card').forEach((card) => {
            prevRects.set(card, card.getBoundingClientRect());
        });

        if (isAfter) {
            target.after(dragging);
        } else {
            target.before(dragging);
        }

        requestAnimationFrame(() => animateReorder(prevRects));
    });

    const modal = document.getElementById('categoryModal');
    const openBtn = document.getElementById('categoryCreateBtn');
    const closeBtn = document.getElementById('categoryModalClose');
    const cancelBtn = document.getElementById('categoryModalCancel');
    const overlay = document.getElementById('categoryModalOverlay');

    const openModal = () => {
        modal?.classList.add('is-open');
        modal?.setAttribute('aria-hidden', 'false');
    };

    const closeModal = () => {
        modal?.classList.remove('is-open');
        modal?.setAttribute('aria-hidden', 'true');
    };

    openBtn?.addEventListener('click', openModal);
    closeBtn?.addEventListener('click', closeModal);
    cancelBtn?.addEventListener('click', closeModal);
    overlay?.addEventListener('click', closeModal);
})();

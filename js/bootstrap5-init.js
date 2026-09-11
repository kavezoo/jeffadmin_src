/**
 * Bootstrap 5 initialization for components that don't auto-init.
 *
 * Modals, dropdowns, tabs, collapses, alerts, and carousels self-instantiate
 * via `data-bs-toggle` / `data-bs-ride` — explicit `new bootstrap.X()` is only
 * needed for tooltips and popovers (which are opt-in for performance).
 */

ready(() => {
  $$('[data-bs-toggle="tooltip"]').forEach((el) => new bootstrap.Tooltip(el));
  $$('[data-bs-toggle="popover"]').forEach((el) => new bootstrap.Popover(el));

  // Custom file picker — show selected filename
  $$('.file-picker__input').forEach((input) => {
    const nameEl = input.closest('.file-picker')?.querySelector('[data-file-name]');
    if (!nameEl) return;
    const emptyLabel = nameEl.textContent.trim() || 'No file chosen';
    input.addEventListener('change', () => {
      const file = input.files && input.files[0];
      if (file) {
        nameEl.textContent = file.name;
        nameEl.classList.add('is-selected');
      } else {
        nameEl.textContent = emptyLabel;
        nameEl.classList.remove('is-selected');
      }
    });
  });

  // Tom Select — enhance all form selects; ensure "..." action button
  if (typeof TomSelect !== 'undefined') {
    $$('select.form-select').forEach((el) => {
      if (el.tomselect || el.getAttribute('data-tom-select') === 'false') return;

      if (!el.closest('.select-with-action')) {
        const wrap = document.createElement('div');
        wrap.className = 'select-with-action';
        el.parentNode.insertBefore(wrap, el);
        wrap.appendChild(el);
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'btn btn-outline-secondary select-with-action__btn';
        btn.setAttribute('aria-label', 'További lehetőségek');
        btn.title = 'További lehetőségek';
        btn.innerHTML = '<i class="fa-solid fa-ellipsis" aria-hidden="true"></i>';
        wrap.appendChild(btn);
      }

      const isLg = el.classList.contains('form-select-lg');
      const isSm = el.classList.contains('form-select-sm');
      new TomSelect(el, {
        allowEmptyOption: true,
        create: false,
        maxOptions: null,
        onInitialize() {
          if (isLg) this.wrapper.classList.add('ts-wrapper--lg');
          if (isSm) this.wrapper.classList.add('ts-wrapper--sm');
        },
      });
    });
  }
});

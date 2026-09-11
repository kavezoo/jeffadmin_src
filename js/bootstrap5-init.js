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
});

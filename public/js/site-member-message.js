(function () {
  const form = document.getElementById('site-message-form');
  const pastorSelect = document.getElementById('site-message-pastor');
  const feedback = document.getElementById('site-message-feedback');
  if (!form) return;

  function showFeedback(text, ok) {
    if (!feedback) return;
    feedback.textContent = text;
    feedback.className = 'site-message-feedback' + (ok ? ' site-message-feedback--ok' : ' site-message-feedback--err');
    feedback.hidden = false;
  }

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    feedback.hidden = true;
    // Version autonome (sans serveur) : simulation d’envoi
    form.reset();
    showFeedback('Demande enregistrée (mode démonstration — sans serveur).', true);
  });
})();

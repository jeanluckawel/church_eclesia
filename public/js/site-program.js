function escapeHtml(s) {
  return String(s || '')
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}

function renderPublicProgram(container, program) {
  const items = program.items || [];
  let html = `<article class="site-card site-card--program site-card--wide">`;
  html += `<h3>${escapeHtml(program.title || 'Programme de la semaine')}<span class="site-program-badge">Cette semaine</span></h3>`;
  if (program.week_label) {
    html += `<p class="site-program-week">${escapeHtml(program.week_label)}</p>`;
  }
  if (items.length) {
    html += '<ul class="site-schedule site-schedule--program">';
    for (const it of items) {
      const label = [it.time, it.title].filter(Boolean).join(' — ');
      html += `<li><strong>${escapeHtml(it.day || '—')}</strong><span>${escapeHtml(label)}`;
      if (it.detail) html += `<br><em>${escapeHtml(it.detail)}</em>`;
      html += '</span></li>';
    }
    html += '</ul>';
  }
  if (program.note) {
    html += `<p class="site-program-note">${escapeHtml(program.note)}</p>`;
  }
  html += '</article>';
  container.innerHTML = html;
}

async function loadPublicProgram() {
  const container = document.getElementById('site-program-published');
  if (!container) return;
  // Version autonome (sans serveur) : programme d’exemple
  renderPublicProgram(container, {
    title: 'Programme de la semaine',
    week_label: 'Semaine en cours',
    items: [
      { day: 'Dimanche', time: '09:00', title: 'Culte dominical' },
      { day: 'Mercredi', time: '18:00', title: 'Réunion de prière' },
    ],
    note: 'Horaires indicatifs — à confirmer sur place.',
  });
}

loadPublicProgram();

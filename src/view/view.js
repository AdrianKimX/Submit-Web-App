/* view.js - behaviour for the View pages. Each block only runs if its page is loaded. */
document.addEventListener('DOMContentLoaded', function () {

  /* ---------- Home: count-up numbers + contact search ---------- */
  document.querySelectorAll('[data-count]').forEach(function (el) {
    var target = +el.dataset.count, n = 0;
    var t = setInterval(function () {
      n++; el.textContent = n;
      if (n >= target) clearInterval(t);
    }, 60);
  });

  var search = document.getElementById('contact-search');
  if (search) {
    search.addEventListener('input', function () {
      var q = search.value.toLowerCase();
      document.querySelectorAll('#contact-list li').forEach(function (li) {
        li.style.display = li.textContent.toLowerCase().indexOf(q) > -1 ? '' : 'none';
      });
    });
  }

  /* ---------- Messages: switch chat + send bubble ---------- */
  var body = document.getElementById('chat-body');
  var form = document.getElementById('chat-form');
  var input = document.getElementById('chat-input');

  if (body && form) {
    document.querySelectorAll('.chat-item').forEach(function (item) {
      item.addEventListener('click', function () {
        document.querySelectorAll('.chat-item').forEach(function (i) { i.classList.remove('active'); });
        item.classList.add('active');
        var name = item.dataset.name;
        document.getElementById('chat-title').textContent = name;
        document.getElementById('chat-avatar').textContent = name.charAt(0);
        body.innerHTML = '<div class="bubble them">Hi, this is ' + name + '.</div>';
      });
    });

    form.addEventListener('submit', function (e) {
      e.preventDefault(); // UI only - hook your backend (fetch) in here
      var text = input.value.trim();
      if (!text) return;
      var b = document.createElement('div');
      b.className = 'bubble me';
      b.textContent = text; // textContent keeps it XSS-safe
      body.appendChild(b);
      input.value = '';
      body.scrollTop = body.scrollHeight;
    });
    body.scrollTop = body.scrollHeight;
  }

  /* ---------- Settings: save to localStorage ---------- */
  var sform = document.getElementById('settings-form');
  if (sform) {
    var keys = { name: 'display-name', notif: 'opt-notif', sound: 'opt-sound', dark: 'opt-dark' };
    var saved = {};
    try { saved = JSON.parse(localStorage.getItem('view_settings') || '{}'); } catch (e) {}

    document.getElementById(keys.name).value = saved.name || '';
    ['notif', 'sound', 'dark'].forEach(function (k) {
      document.getElementById(keys[k]).checked = !!saved[k];
    });

    sform.addEventListener('submit', function (e) {
      e.preventDefault();
      var data = { name: document.getElementById(keys.name).value };
      ['notif', 'sound', 'dark'].forEach(function (k) {
        data[k] = document.getElementById(keys[k]).checked;
      });
      try { localStorage.setItem('view_settings', JSON.stringify(data)); } catch (e) {}
      document.body.classList.toggle('dark', data.dark);
      var msg = document.getElementById('save-msg');
      msg.classList.add('show');
      setTimeout(function () { msg.classList.remove('show'); }, 1500);
    });
  }

  // apply saved dark mode on every page
  try {
    var s = JSON.parse(localStorage.getItem('view_settings') || '{}');
    document.body.classList.toggle('dark', !!s.dark);
  } catch (e) {}

  /* ---------- Login / Register: show password + strength ---------- */
  var toggle = document.querySelector('.pass-toggle');
  if (toggle) {
    toggle.addEventListener('click', function () {
      var p = document.getElementById('password');
      var show = p.type === 'password';
      p.type = show ? 'text' : 'password';
      toggle.innerHTML = '<i class="bi bi-eye' + (show ? '-slash' : '') + '"></i>';
    });
  }

  var strength = document.getElementById('strength');
  var pass = document.getElementById('password');
  if (strength && pass) {
    pass.addEventListener('input', function () {
      var v = pass.value, score = 0;
      if (v.length >= 8) score++;
      if (/[A-Z]/.test(v) && /[a-z]/.test(v)) score++;
      if (/\d/.test(v)) score++;
      if (/[^A-Za-z0-9]/.test(v)) score++;
      var labels = ['', 'Weak', 'Fair', 'Good', 'Strong'];
      strength.textContent = v ? 'Strength: ' + labels[score || 1] : '';
      strength.className = 'strength s' + (v ? (score || 1) : 0);
    });
  }
});

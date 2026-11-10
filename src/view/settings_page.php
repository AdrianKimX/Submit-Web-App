<div class="settings-content">
  <h2>Settings</h2>

  <form id="settings-form" class="settings-card">
    <h3>Profile</h3>
    <div class="input-field">
      <label for="display-name">Display name</label>
      <input type="text" id="display-name" placeholder="Your name">
    </div>

    <h3>Preferences</h3>
    <label class="switch-row">
      <span>Notifications</span>
      <input type="checkbox" id="opt-notif" class="switch">
    </label>
    <label class="switch-row">
      <span>Sound effects</span>
      <input type="checkbox" id="opt-sound" class="switch">
    </label>
    <label class="switch-row">
      <span>Dark mode</span>
      <input type="checkbox" id="opt-dark" class="switch">
    </label>

    <button type="submit" class="btn-primary">Save changes</button>
    <span id="save-msg" class="save-msg">Saved ✓</span>
  </form>
</div>
<script src="view/view.js" defer></script>

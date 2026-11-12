<div class="settings-content">
  <h2>Settings</h2>

  <form id="settings-form" class="settings-card">
    <h3>Profile</h3>


    
    <div>address</div>
    <div>email</div>
    <div>contacts</div>
    


    <h3>Preferences</h3>
    <label class="switch-row">
      <span>Notifications</span>
      <input type="checkbox" id="opt-notif" class="switch">
    </label>

    <label class="switch-row">
      <span>Dark mode</span>
      <input type="checkbox" id="opt-dark" class="switch">
    </label>

    <button type="submit" class="btn-primary">Save changes</button>
    <span id="save-msg" class="save-msg">Saved ✓</span>
  </form>
   <h3>Security and Privacy</h3>

  <div><input type='submit' value="Change password"></div>
  <div><input type='submit' value="Change Admin Name"></div>
  <div><a class='bi bi-box-arrow-in-left' href='?page=logout'>Log Out</a></div>
  
</div>
<script src="view/view.js" defer></script>

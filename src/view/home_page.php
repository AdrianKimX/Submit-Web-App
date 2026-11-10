<?php

  ?>

<div class='home-contents'>
  <div class='content1'>
    <div class="panel-head">
      <h2>Welcome back<?php if(isset($_SESSION['username'])) echo ', '.htmlspecialchars($_SESSION['username']); ?> 👋</h2>
      <p class="muted">Here's what's happening today.</p>
    </div>

    <div class="stat-row">
      <div class="stat-card"><i class="bi bi-chat-dots"></i><strong data-count="12">0</strong><span>Messages</span></div>
      <div class="stat-card"><i class="bi bi-people"></i><strong data-count="5">0</strong><span>Contacts</span></div>
      <div class="stat-card"><i class="bi bi-bell"></i><strong data-count="3">0</strong><span>Unread</span></div>
    </div>

    <div class="search-box">
      <i class="bi bi-search"></i>
      <input type="text" id="contact-search" placeholder="Search contacts...">
    </div>

    <ul class="contact-list" id="contact-list">
      <li><span class="avatar">A</span><div><b>Alex</b><small>Online</small></div><a href="?page=messages" class="chip">Message</a></li>
      <li><span class="avatar">B</span><div><b>Bianca</b><small>Active 5m ago</small></div><a href="?page=messages" class="chip">Message</a></li>
      <li><span class="avatar">C</span><div><b>Carlo</b><small>Offline</small></div><a href="?page=messages" class="chip">Message</a></li>
      <li><span class="avatar">D</span><div><b>Dana</b><small>Online</small></div><a href="?page=messages" class="chip">Message</a></li>
      <li><span class="avatar">E</span><div><b>Ethan</b><small>Active 1h ago</small></div><a href="?page=messages" class="chip">Message</a></li>
    </ul>
  </div>

    <div class='content2'>
      <div class="panel-head">
        <h2>Recent Activity</h2>
        <p class="muted">Latest updates from your contacts.</p>
      </div>

      <div class="feed">
        <div class="feed-item"><span class="avatar">A</span><div><b>Alex</b> sent you a message<small>2 minutes ago</small></div></div>
        <div class="feed-item"><span class="avatar">D</span><div><b>Dana</b> joined the platform<small>1 hour ago</small></div></div>
        <div class="feed-item"><span class="avatar">B</span><div><b>Bianca</b> updated her profile<small>Yesterday</small></div></div>
        <div class="feed-item"><span class="avatar">C</span><div><b>Carlo</b> sent you a message<small>2 days ago</small></div></div>
      </div>
    </div>
</div>
<script src="view/view.js" defer></script>

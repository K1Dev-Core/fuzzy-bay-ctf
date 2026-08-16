<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
$show_msg = $email !== '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Naomi Bay - Torrent Tracker</title>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body { font-family: 'Courier New', monospace; background: #0b0d12; color: #9db3a8; min-height: 100vh; display: flex; flex-direction: column; align-items: center; }
  .topbar { width: 100%; background: #11141b; border-bottom: 1px solid #222a33; padding: 10px 24px; display: flex; justify-content: space-between; }
  .logo { color: #4ade80; font-weight: bold; font-size: 18px; }
  .logo span { color: #334155; }
  .box { background: #11141b; border: 1px solid #222a33; border-radius: 8px; margin-top: 48px; padding: 32px; width: 480px; max-width: 90vw; text-align: center; }
  .wrench { font-size: 44px; margin-bottom: 12px; }
  h1 { color: #e2e8f0; font-size: 20px; margin-bottom: 8px; }
  .sub { font-size: 13px; margin-bottom: 20px; line-height: 1.6; }
  .menu { list-style: none; margin: 16px 0 20px; text-align: left; font-size: 14px; }
  .menu li { padding: 8px 12px; color: #475569; }
  .menu li::before { content: '⛔ '; }
  .menu li.on { color: #4ade80; }
  .menu li.on::before { content: '✔ '; }
  form { display: flex; gap: 8px; }
  input[type=email] { flex: 1; background: #0b0d12; border: 1px solid #222a33; color: #e2e8f0; padding: 10px 12px; border-radius: 6px; font-family: inherit; }
  button { background: #4ade80; color: #0b0d12; border: 0; padding: 10px 16px; border-radius: 6px; font-weight: bold; cursor: pointer; font-family: inherit; }
  .msg { margin-top: 16px; padding: 10px; background: #16231b; border: 1px solid #1f3a2c; border-radius: 6px; font-size: 13px; text-align: left; overflow-wrap: break-word; }
  footer { margin-top: auto; padding: 14px; font-size: 11px; color: #334155; }
</style>
<!-- site refresher: old assets moved to /_baks/ -->
</head>
<body>
<div class="topbar">
  <div class="logo">naomi<span>_bay</span> :: tracker</div>
  <div>torrent index &bull; 1337 peers online</div>
</div>
<div class="box">
  <div class="wrench">&#128295;</div>
  <h1>Under Construction</h1>
  <p class="sub">Naomi Bay is temporarily in maintenance mode.<br>No uploads. No downloads. No menus. We'll be back with all the good stuff.</p>
  <ul class="menu">
    <li>Uploads</li>
    <li>Downloads</li>
    <li>Browse catalog</li>
    <li>User panel</li>
    <li class="on">Subscribe to updates</li>
  </ul>
  <?php if ($show_msg): ?>
  <div class="msg">Thanks for subscribing, <b><?php echo $email; ?></b>! We'll notify you when the bay opens again.</div>
  <?php endif; ?>
  <form method="POST" action="index.php">
    <input type="email" name="email" placeholder="you@example.com" required>
    <button type="submit">Subscribe</button>
  </form>
</div>
<footer>this bay is for legal use only &bull; jitlada-approved</footer>
</body>
</html>
  <!doctype html>
<html lang="uz">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Soddalashgan Menyu — Faqat menyu</title>
  <style>
    :root{
      --bg:#0f1724; --card:#0b1220; --accent:#60a5fa; --muted:#9ca3af; --glass: rgba(255,255,255,0.03);
      --radius:14px;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0; display:flex; align-items:center; justify-content:center; background:linear-gradient(180deg,var(--bg),#061021 120%); color:#e6eef8;
      -webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale; padding:24px;
    }
    .menu-card{
      width:100%; max-width:820px; border-radius:var(--radius); background:linear-gradient(180deg,var(--card), rgba(11,18,32,0.9)); padding:28px; box-shadow:0 10px 30px rgba(2,6,23,0.6);
      display:flex; flex-direction:column; gap:18px; align-items:center;
    }
    header{width:100%; display:flex; align-items:center; justify-content:space-between}
    .brand{display:flex;gap:12px; align-items:center}
    .logo{width:48px;height:48px;border-radius:10px;background:linear-gradient(135deg,var(--accent),#3b82f6); display:flex;align-items:center;justify-content:center;font-weight:700}
    h1{font-size:18px;margin:0}
    p.lead{margin:0;color:var(--muted);font-size:13px}

    /* Menu */
    nav{width:100%}
    ul.menu{list-style:none;margin:0;padding:0;display:flex;gap:12px;flex-wrap:wrap;justify-content:center}
    ul.menu li{flex:1 1 140px;}
    a.menu-item{display:block;padding:14px 18px;border-radius:12px;text-align:center;text-decoration:none;color:inherit;background:var(--glass);backdrop-filter: blur(6px);transition:transform .12s ease, box-shadow .12s ease}
    a.menu-item:focus{outline:3px solid rgba(96,165,250,0.18); outline-offset:3px}
    a.menu-item:hover{transform:translateY(-4px); box-shadow:0 6px 20px rgba(2,6,23,0.6)}
    .muted{color:var(--muted);font-size:13px;margin-top:6px;text-align:center}

    /* Mobile hamburger (only visible under 640px) */
    .hamburger{display:none;background:none;border:0;color:inherit;font-size:20px}
    @media (max-width:640px){
      ul.menu{flex-direction:column}
      .hamburger{display:inline-flex;align-items:center;gap:8px}
      .brand h1{font-size:16px}
    }

    /* Visually-only text for accessibility */
    .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
  </style>
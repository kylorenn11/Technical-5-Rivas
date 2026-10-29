<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'POS Foundations' }} | Laravel</title>
    <style>
        :root { --ink: #172033; --muted: #637089; --line: #e5e9f0; --brand: #5b4bdb; --brand-dark: #4334b8; --wash: #f6f7fb; --success: #16855b; }
        * { box-sizing: border-box; }
        body { margin: 0; color: var(--ink); background: var(--wash); font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
        a { color: inherit; text-decoration: none; }
        .nav { background: #fff; border-bottom: 1px solid var(--line); position: sticky; top: 0; z-index: 5; }
        .nav-inner { max-width: 1120px; margin: auto; padding: 16px 24px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { font-weight: 800; letter-spacing: -.02em; display: flex; align-items: center; gap: 10px; }
        .brand-mark { width: 34px; height: 34px; border-radius: 10px; color: #fff; display: grid; place-items: center; background: linear-gradient(135deg, var(--brand), #8b7cf5); }
        .links { display: flex; flex-wrap: wrap; gap: 6px; }
        .links a { padding: 9px 12px; color: var(--muted); font-size: .93rem; border-radius: 9px; }
        .links a:hover, .links a.active { color: var(--brand-dark); background: #f0efff; }
        main { max-width: 1120px; margin: auto; padding: 48px 24px 72px; }
        .hero { padding: 44px; border-radius: 24px; color: #fff; background: radial-gradient(circle at 85% 15%, #8d80f4 0, transparent 34%), linear-gradient(135deg, #32258f, #6657db); box-shadow: 0 18px 45px rgba(64, 48, 178, .2); }
        .eyebrow { text-transform: uppercase; letter-spacing: .12em; font-weight: 800; font-size: .72rem; opacity: .78; }
        h1 { font-size: clamp(2rem, 5vw, 3.7rem); line-height: 1.05; margin: 12px 0 16px; letter-spacing: -.05em; }
        h2 { margin: 0 0 10px; letter-spacing: -.03em; }
        p { line-height: 1.7; color: var(--muted); }
        .hero p { color: #e8e6ff; max-width: 620px; }
        .button { display: inline-block; padding: 12px 16px; border-radius: 10px; background: #fff; color: var(--brand-dark); font-weight: 700; margin-top: 14px; }
        .button:hover { transform: translateY(-1px); box-shadow: 0 8px 18px rgba(0,0,0,.14); }
        .section-head { display: flex; justify-content: space-between; align-items: end; gap: 20px; margin: 42px 0 18px; }
        .section-head p { margin: 0; }
        .cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
        .card { background: #fff; border: 1px solid var(--line); border-radius: 16px; padding: 22px; box-shadow: 0 5px 18px rgba(20, 25, 45, .035); }
        .icon { width: 38px; height: 38px; display: grid; place-items: center; border-radius: 11px; background: #f0efff; color: var(--brand-dark); margin-bottom: 16px; font-weight: 800; }
        .table-wrap { overflow-x: auto; background: #fff; border: 1px solid var(--line); border-radius: 16px; box-shadow: 0 5px 18px rgba(20, 25, 45, .035); }
        table { width: 100%; border-collapse: collapse; min-width: 680px; }
        th, td { padding: 16px 18px; text-align: left; border-bottom: 1px solid var(--line); }
        th { font-size: .75rem; text-transform: uppercase; letter-spacing: .08em; color: var(--muted); background: #fafbfc; }
        tr:last-child td { border-bottom: 0; }
        .person { font-weight: 750; }
        .sub { display: block; margin-top: 3px; color: var(--muted); font-size: .84rem; font-weight: 400; }
        .pill { display: inline-block; padding: 5px 10px; border-radius: 999px; font-size: .78rem; font-weight: 750; color: var(--success); background: #e7f7ef; }
        .pill.inactive { color: #8a5d19; background: #fff3d8; }
        .about { max-width: 760px; }
        footer { text-align: center; padding: 24px; color: var(--muted); font-size: .85rem; }
        @media (max-width: 760px) { .nav-inner { align-items: flex-start; flex-direction: column; gap: 10px; } .hero { padding: 30px 24px; } .cards { grid-template-columns: 1fr; } main { padding-top: 30px; } }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="nav-inner">
            <a class="brand" href="{{ route('home') }}"><span class="brand-mark">P</span> POS Foundations</a>
            <div class="links">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Customers</a>
                <a class="{{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">Users</a>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>IT0049 Web System Technologies · Laravel Foundations</footer>
</body>
</html>

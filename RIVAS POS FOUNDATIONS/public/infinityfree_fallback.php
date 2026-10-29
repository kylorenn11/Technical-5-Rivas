<?php

// Upload-ready fallback for hosts where Composer cannot be executed.
// The Laravel source remains in app/, routes/, and resources/views/.

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = rtrim($path, '/') ?: '/';

$customers = [
    ['id' => 1, 'name' => 'Alyssa Reyes', 'email' => 'alyssa.reyes@example.com', 'phone' => '0917 555 0101', 'status' => 'Active'],
    ['id' => 2, 'name' => 'Brandon Cruz', 'email' => 'brandon.cruz@example.com', 'phone' => '0917 555 0102', 'status' => 'Active'],
    ['id' => 3, 'name' => 'Camille Santos', 'email' => 'camille.santos@example.com', 'phone' => '0917 555 0103', 'status' => 'Inactive'],
    ['id' => 4, 'name' => 'Diego Garcia', 'email' => 'diego.garcia@example.com', 'phone' => '0917 555 0104', 'status' => 'Active'],
    ['id' => 5, 'name' => 'Elena Mendoza', 'email' => 'elena.mendoza@example.com', 'phone' => '0917 555 0105', 'status' => 'Active'],
];

$users = [
    ['id' => 1, 'name' => 'Maria Dela Cruz', 'email' => 'maria.delacruz@example.com', 'role' => 'Administrator', 'status' => 'Active'],
    ['id' => 2, 'name' => 'Noah Bautista', 'email' => 'noah.bautista@example.com', 'role' => 'Cashier', 'status' => 'Active'],
    ['id' => 3, 'name' => 'Olivia Navarro', 'email' => 'olivia.navarro@example.com', 'role' => 'Inventory Clerk', 'status' => 'Active'],
    ['id' => 4, 'name' => 'Paolo Villanueva', 'email' => 'paolo.villanueva@example.com', 'role' => 'Cashier', 'status' => 'Inactive'],
    ['id' => 5, 'name' => 'Sofia Ramos', 'email' => 'sofia.ramos@example.com', 'role' => 'Supervisor', 'status' => 'Active'],
];

function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function navLink(string $href, string $label, string $current): string
{
    $active = $current === $href ? ' active' : '';
    return '<a class="' . $active . '" href="' . $href . '">' . e($label) . '</a>';
}

function layout(string $title, string $content, string $current): void
{
    $nav = navLink('/', 'Home', $current) . navLink('/about', 'About', $current) . navLink('/customers', 'Customers', $current) . navLink('/users', 'Users', $current);
    echo '<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>' . e($title) . ' | POS Foundations</title><style>';
    echo ':root{--ink:#172033;--muted:#637089;--line:#e5e9f0;--brand:#5b4bdb;--brand-dark:#4334b8;--wash:#f6f7fb;--success:#16855b}*{box-sizing:border-box}body{margin:0;color:var(--ink);background:var(--wash);font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif}a{color:inherit;text-decoration:none}.nav{background:#fff;border-bottom:1px solid var(--line);position:sticky;top:0;z-index:5}.nav-inner{max-width:1120px;margin:auto;padding:16px 24px;display:flex;align-items:center;justify-content:space-between;gap:24px}.brand{font-weight:800;letter-spacing:-.02em;display:flex;align-items:center;gap:10px}.brand-mark{width:34px;height:34px;border-radius:10px;color:#fff;display:grid;place-items:center;background:linear-gradient(135deg,var(--brand),#8b7cf5)}.links{display:flex;flex-wrap:wrap;gap:6px}.links a{padding:9px 12px;color:var(--muted);font-size:.93rem;border-radius:9px}.links a:hover,.links a.active{color:var(--brand-dark);background:#f0efff}main{max-width:1120px;margin:auto;padding:48px 24px 72px}.hero{padding:44px;border-radius:24px;color:#fff;background:radial-gradient(circle at 85% 15%,#8d80f4 0,transparent 34%),linear-gradient(135deg,#32258f,#6657db);box-shadow:0 18px 45px rgba(64,48,178,.2)}.eyebrow{text-transform:uppercase;letter-spacing:.12em;font-weight:800;font-size:.72rem;opacity:.78}h1{font-size:clamp(2rem,5vw,3.7rem);line-height:1.05;margin:12px 0 16px;letter-spacing:-.05em}h2{margin:0 0 10px;letter-spacing:-.03em}p{line-height:1.7;color:var(--muted)}.hero p{color:#e8e6ff;max-width:620px}.button{display:inline-block;padding:12px 16px;border-radius:10px;background:#fff;color:var(--brand-dark);font-weight:700;margin-top:14px}.section-head{display:flex;justify-content:space-between;align-items:end;gap:20px;margin:42px 0 18px}.section-head p{margin:0}.cards{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}.card{background:#fff;border:1px solid var(--line);border-radius:16px;padding:22px;box-shadow:0 5px 18px rgba(20,25,45,.035)}.icon{width:38px;height:38px;display:grid;place-items:center;border-radius:11px;background:#f0efff;color:var(--brand-dark);margin-bottom:16px;font-weight:800}.table-wrap{overflow-x:auto;background:#fff;border:1px solid var(--line);border-radius:16px;box-shadow:0 5px 18px rgba(20,25,45,.035)}table{width:100%;border-collapse:collapse;min-width:680px}th,td{padding:16px 18px;text-align:left;border-bottom:1px solid var(--line)}th{font-size:.75rem;text-transform:uppercase;letter-spacing:.08em;color:var(--muted);background:#fafbfc}tr:last-child td{border-bottom:0}.person{font-weight:750}.sub{display:block;margin-top:3px;color:var(--muted);font-size:.84rem;font-weight:400}.pill{display:inline-block;padding:5px 10px;border-radius:999px;font-size:.78rem;font-weight:750;color:var(--success);background:#e7f7ef}.pill.inactive{color:#8a5d19;background:#fff3d8}footer{text-align:center;padding:24px;color:var(--muted);font-size:.85rem}@media(max-width:760px){.nav-inner{align-items:flex-start;flex-direction:column;gap:10px}.hero{padding:30px 24px}.cards{grid-template-columns:1fr}main{padding-top:30px}}';
    echo '</style></head><body><nav class="nav"><div class="nav-inner"><a class="brand" href="/"><span class="brand-mark">P</span> POS Foundations</a><div class="links">' . $nav . '</div></div></nav><main>' . $content . '</main><footer>IT0049 Web System Technologies · Laravel Foundations</footer></body></html>';
}

if ($path === '/') {
    layout('Home', '<section class="hero"><div class="eyebrow">IT0049 · Technical Formative Assessment 5</div><h1>Your first Laravel POS application.</h1><p>A small point-of-sale foundation demonstrating Laravel routes, controllers, Blade views, and temporary static array data.</p><a class="button" href="/customers">View customer accounts →</a></section><div class="section-head"><div><h2>Explore the application</h2><p>Each page demonstrates a different part of the MVC flow.</p></div></div><section class="cards"><a class="card" href="/about"><div class="icon">i</div><h2>About</h2><p>Review the course and module represented by this Laravel activity.</p></a><a class="card" href="/customers"><div class="icon">C</div><h2>Customer Accounts</h2><p>Browse five sample customer records rendered with a Blade loop.</p></a><a class="card" href="/users"><div class="icon">U</div><h2>User Accounts</h2><p>Browse five sample POS user records and their assigned roles.</p></a></section>', '/');
    exit;
}

if ($path === '/about') {
    layout('About', '<section style="max-width:760px"><div class="eyebrow">About this project</div><h1>IT0049 Web System Technologies</h1><p>Module 5: Laravel Foundations is a Laravel recreation of the earlier POS application exercise. The route maps the request to a controller method, the controller prepares data, and the Blade view renders the response.</p><div class="card" style="margin-top:24px"><h2>Learning objectives</h2><p>Set up a Laravel project, use Artisan, define routes, create controllers, build Blade views, and pass temporary data from controllers to views.</p></div></section>', '/about');
    exit;
}

if ($path === '/customers' || $path === '/users') {
    $isCustomers = $path === '/customers';
    $rows = '';
    foreach ($isCustomers ? $customers : $users as $record) {
        $statusClass = $record['status'] === 'Inactive' ? ' inactive' : '';
        $extra = $isCustomers ? e($record['phone']) : e($record['role']);
        $rows .= '<tr><td>' . e($record['id']) . '</td><td><span class="person">' . e($record['name']) . '</span><span class="sub">' . e($record['email']) . '</span></td><td>' . $extra . '</td><td><span class="pill' . $statusClass . '">' . e($record['status']) . '</span></td></tr>';
    }
    $heading = $isCustomers ? 'Customer Accounts' : 'User Accounts';
    $source = $isCustomers ? 'CustomerController' : 'UserController';
    $third = $isCustomers ? 'Phone' : 'Role';
    layout($heading, '<div class="section-head"><div><div class="eyebrow">Accounts</div><h1>' . $heading . '</h1><p>Sample records supplied by <code>' . $source . '</code>.</p></div></div><div class="table-wrap"><table><thead><tr><th>#</th><th>' . ($isCustomers ? 'Customer' : 'User') . '</th><th>' . $third . '</th><th>Status</th></tr></thead><tbody>' . $rows . '</tbody></table></div>', $path);
    exit;
}

http_response_code(404);
layout('Page not found', '<section class="card"><div class="eyebrow">404</div><h1>Page not found</h1><p>The requested page does not exist.</p><a class="button" href="/">Return home</a></section>', '');

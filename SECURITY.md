# Theme Security Checklist

This theme includes lightweight hardening (security headers, XML-RPC disabled by default).
For full protection, apply the following site-level measures.

## wp-config.php
- Set unique salts: https://api.wordpress.org/secret-key/1.1/salt/
- Disable file editor:
  - `define('DISALLOW_FILE_EDIT', true);`
- Disable file modifications in production (optional, requires deployments):
  - `define('DISALLOW_FILE_MODS', true);`
- Force SSL in admin (if HTTPS is enabled):
  - `define('FORCE_SSL_ADMIN', true);`

## Server / Hosting
- Use HTTPS everywhere (HSTS recommended).
- Keep PHP and WordPress core updated.
- Limit admin access (IP allowlist or VPN).
- Use a WAF or security plugin (Wordfence/Sucuri).
- Disable directory listing at the web server level.

## WordPress
- Use strong passwords + 2FA for admin users.
- Remove unused themes/plugins.
- Limit login attempts (plugin or host feature).
- Enable automatic background updates for minor releases.

## Optional XML-RPC
XML-RPC is disabled by default in the theme. If you need it, add:
`define('BIOSOLVE_ALLOW_XMLRPC', true);` in `wp-config.php`.

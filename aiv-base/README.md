# AIV Base

AIV Base is a lightweight hybrid block-first WordPress starter theme for custom client websites.

It is not intended to be installed as a shared parent theme and updated across many websites. For each client project, copy or fork this theme, rename it, and make it the client-owned theme.

## Goals

- Lightweight hybrid block-first architecture.
- No page builders, Bootstrap, Tailwind, jQuery, external fonts, or external icon libraries.
- Gutenberg-friendly and compatible with reusable custom blocks from a separate plugin.
- Suitable for landing pages, business websites, corporate websites, and later WooCommerce projects.
- Simple enough to maintain after it has been copied into a client project.

## Recommended Companion Plugins

- `aiv-blocks` for reusable custom Gutenberg blocks.
- `aiv-performance` for site-wide performance optimizations.

Performance changes that affect WordPress globally should live in a plugin, not in this theme.

## File Structure

```text
aiv-base/
  style.css
  functions.php
  theme.json
  screenshot.png
  README.md
  templates/
  parts/
  patterns/
  assets/
    css/
    js/
  inc/
```

## Creating A Client Theme

1. Copy or fork `aiv-base`.
2. Rename the theme directory.
3. Update the theme header in `style.css`.
4. Update the text domain if the client theme needs its own translations.
5. Replace `screenshot.png`.
6. Add client-specific templates, patterns, CSS, and block styles.
7. Keep reusable functionality in plugins when it should survive a future theme change.

## Theme vs Plugin

Belongs in the theme:

- Templates, template parts, and block patterns.
- Client-specific presentation styles.
- Theme supports, menus, image sizes, and frontend/editor assets.
- Minimal WooCommerce compatibility.

Belongs in a plugin:

- Custom post types and taxonomies.
- Custom Gutenberg blocks shared across websites.
- SEO, analytics, security, and caching behavior.
- Global performance changes such as disabling features or dequeuing WordPress assets.
- Business logic that should remain active if the theme changes.

## Development Notes

- Requires PHP 8.1+.
- Built for current stable WordPress and the block editor.
- Keep `functions.php` as a loader only.
- Add theme logic under `inc/`.
- Keep base CSS intentionally small; client themes should provide final visual design.
- Do not add aggressive performance hacks to the theme.


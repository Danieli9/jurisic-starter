# Jurisic Starter Theme

Minimal WordPress Full Site Editing (FSE) starter theme pre-configured with Tailwind CSS. Built as a lightweight foundation for custom client projects, block themes, and rapid prototyping.

## Features

- Full Site Editing ready (templates + template parts)
- Tailwind CSS 3 with typography plugin and editor styles
- Modern block-based header, footer, front page, archive, single, page, and 404 templates
- Asset loading helper with cache busting for compiled CSS
- Clean project structure and developer tooling out of the box

## Requirements

- WordPress 6.3+
- PHP 7.4+
- Node.js 18+ and npm (for Tailwind build tools)

## Quick Start

1. Clone the repository into your WordPress `wp-content/themes` directory:
   ```bash
   cd wp-content/themes
   git clone https://github.com/<your-username>/jurisic-starter.git jurisic
   ```

2. Install Node dependencies:
   ```bash
   cd jurisic
   npm install
   ```

3. Build the Tailwind CSS once (or run the watcher while developing):
   ```bash
   npm run build   # one-off build
   npm run dev     # watch mode (press Ctrl+C to stop)
   ```

4. In the WordPress dashboard go to **Appearance → Themes** and activate "Jurisic Starter".

5. Open the Site Editor (Appearance → Editor) to customize templates, navigation, and global styles.

## Development Workflow

- `npm run dev` – runs Tailwind in watch mode for both frontend and editor styles.
- `npm run build` – compiles and minifies production CSS for both targets.
- Source styles live under `src/css/`; compiled output is written to `assets/css/` and ignored by git (except for `.gitkeep`).
- Update `tailwind.config.js` to include additional paths or custom design tokens.

## Theme Structure

```
.
├── assets/        # Compiled CSS/JS (generated)
├── inc/           # PHP includes and helpers (extend as needed)
├── parts/         # Template parts (header, footer, etc.)
├── src/           # Source files for Tailwind / JS
├── templates/     # Block templates (front-page, index, single, page, archive, 404)
├── functions.php  # Theme bootstrap and asset loading
├── style.css      # Theme metadata (required by WordPress)
├── theme.json     # Global styles and settings
└── package.json   # Tooling configuration
```

## Customization Tips

- Register additional template parts inside `theme.json` → `templateParts` array.
- Use Tailwind utility classes directly within block templates or custom blocks.
- Extend Tailwind with plugins (e.g. forms, typography) via `tailwind.config.js` and npm.
- Add custom PHP helpers under `inc/` and require them from `functions.php` as the project grows.

## Deployment

- Ensure you commit only source files; run `npm run build` before deploying to generate fresh CSS.
- Upload or deploy the theme directory to your production WordPress instance.

## License

Released under the GPL v2 (or later), matching WordPress core requirements.

---

_Napomena:_ README je napisan na engleskom radi GitHub publike, ali struktura projekta i komentari u kodu su jednostavni za dalju nadogradnju na srpskom jeziku.

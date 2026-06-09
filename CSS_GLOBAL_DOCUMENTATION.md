# TokiToki CSS Global Documentation

## Overview
File CSS global TokiToki dirancang untuk memberikan konsistensi styling di seluruh aplikasi. CSS ini menggunakan sistem variabel CSS yang memungkinkan customization mudah dan mendukung dark mode.

## File Structure
```
public/assets/css/
├── tokitoki-global.css          # CSS global untuk seluruh aplikasi
└── admin/
    └── admin-global.css         # CSS khusus untuk area admin
```

## CSS Variables
### Colors
```css
--primary: #10b981              /* Warna utama (hijau emerald) */
--primary-dark: #059669         /* Warna utama gelap */
--primary-light: #34d399        /* Warna utama terang */
--secondary: #6b7280            /* Warna sekunder (abu-abu) */
--success: #10b981              /* Warna sukses */
--danger: #ef4444               /* Warna bahaya */
--warning: #f59e0b              /* Warna peringatan */
--info: #3b82f6                 /* Warna informasi */
```

### Background Colors
```css
--bg-primary: #ffffff           /* Background utama */
--bg-secondary: #f9fafb         /* Background sekunder */
--bg-muted: #f3f4f6             /* Background redup */
--bg-dark: #1f2937              /* Background gelap */
```

### Text Colors
```css
--text-primary: #111827         /* Teks utama */
--text-secondary: #6b7280       /* Teks sekunder */
--text-muted: #9ca3af           /* Teks redup */
--text-white: #ffffff           /* Teks putih */
```

## Component Classes

### Submenu (Sidebar)
```html
<!-- Submenu container -->
<div class="submenu" id="menu-submenu">
    <div class="py-2 space-y-1">
        <a href="#" class="submenu-link">
            <div class="flex items-center justify-center w-4 h-4">
                <svg>...</svg>
            </div>
            <span class="text-sm font-medium">Submenu Item</span>
        </a>
    </div>
</div>

<!-- JavaScript untuk toggle -->
<script>
function toggleSubmenu(menuId) {
    const submenu = document.getElementById(menuId + '-submenu');
    submenu.classList.toggle('open');
}
</script>
```

### Menu Links (Sidebar)
```html
<!-- Menu link dengan submenu -->
<button onclick="toggleSubmenu('menu')" class="menu-link">
    <div class="flex items-center gap-3">
        <svg>...</svg>
        <span>Menu Name</span>
    </div>
    <svg class="chevron">...</svg>
</button>

<!-- Menu link biasa -->
<a href="#" class="menu-link">
    <div class="flex items-center gap-3">
        <svg>...</svg>
        <span>Menu Name</span>
    </div>
</a>
```

### Buttons
```html
<!-- Button variants -->
<button class="btn btn-primary">Primary Button</button>
<button class="btn btn-secondary">Secondary Button</button>
<button class="btn btn-success">Success Button</button>
<button class="btn btn-danger">Danger Button</button>
<button class="btn btn-warning">Warning Button</button>
<button class="btn btn-outline">Outline Button</button>

<!-- Button sizes -->
<button class="btn btn-primary btn-sm">Small Button</button>
<button class="btn btn-primary">Normal Button</button>
<button class="btn btn-primary btn-lg">Large Button</button>
<button class="btn btn-primary btn-block">Block Button</button>
```

### Forms
```html
<div class="form-group">
    <label class="form-label">Label</label>
    <input type="text" class="form-control" placeholder="Input field">
    <div class="invalid-feedback">Error message</div>
    <div class="valid-feedback">Success message</div>
</div>
```

### Cards
```html
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Card Title</h3>
    </div>
    <div class="card-body">
        <p>Card content goes here.</p>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary">Action</button>
    </div>
</div>
```

### Tables
```html
<table class="table table-striped">
    <thead>
        <tr>
            <th>Header 1</th>
            <th>Header 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
        </tr>
    </tbody>
</table>
```

### Alerts
```html
<div class="alert alert-success">Success message</div>
<div class="alert alert-danger">Error message</div>
<div class="alert alert-warning">Warning message</div>
<div class="alert alert-info">Info message</div>
```

### Badges
```html
<span class="badge badge-primary">Primary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-danger">Danger</span>
<span class="badge badge-warning">Warning</span>
```

## Utility Classes

### Text Utilities
```html
<p class="text-primary">Primary text</p>
<p class="text-secondary">Secondary text</p>
<p class="text-success">Success text</p>
<p class="text-danger">Danger text</p>
<p class="text-muted">Muted text</p>

<p class="text-left">Left aligned</p>
<p class="text-center">Center aligned</p>
<p class="text-right">Right aligned</p>
```

### Background Utilities
```html
<div class="bg-primary">Primary background</div>
<div class="bg-secondary">Secondary background</div>
<div class="bg-success">Success background</div>
<div class="bg-danger">Danger background</div>
```

### Display Utilities
```html
<div class="d-none">Hidden</div>
<div class="d-block">Block</div>
<div class="d-flex">Flex</div>
<div class="d-inline-flex">Inline flex</div>
```

### Flexbox Utilities
```html
<div class="d-flex justify-content-center align-items-center">
    Centered content
</div>

<div class="d-flex justify-content-between">
    <div>Left</div>
    <div>Right</div>
</div>
```

### Spacing Utilities
```html
<!-- Margin -->
<div class="m-0">No margin</div>
<div class="m-3">Medium margin</div>
<div class="mt-4">Top margin large</div>
<div class="mb-2">Bottom margin small</div>

<!-- Padding -->
<div class="p-0">No padding</div>
<div class="p-3">Medium padding</div>
<div class="pt-4">Top padding large</div>
<div class="pb-2">Bottom padding small</div>
```

### Size Utilities
```html
<div class="w-25">25% width</div>
<div class="w-50">50% width</div>
<div class="w-75">75% width</div>
<div class="w-100">100% width</div>

<div class="h-25">25% height</div>
<div class="h-50">50% height</div>
<div class="h-75">75% height</div>
<div class="h-100">100% height</div>
```

## Dark Mode Support
CSS global mendukung dark mode melalui atribut `data-theme="dark"`:

```html
<html data-theme="dark">
    <!-- Dark mode akan aktif -->
</html>
```

```javascript
// Toggle dark mode
function toggleDarkMode() {
    const html = document.documentElement;
    const currentTheme = html.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    html.setAttribute('data-theme', newTheme);
}
```

## Animation Classes
```html
<div class="fade-in">Fade in animation</div>
<div class="slide-in">Slide in animation</div>
```

## Loading Spinner
```html
<div class="spinner"></div>
<div class="spinner spinner-sm"></div>
<div class="spinner spinner-lg"></div>
```

## Responsive Design
CSS global menggunakan mobile-first approach dengan breakpoint:
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

## Implementation

### Untuk Layout Admin
```php
<!-- resources/views/admin/layouts/css.blade.php -->
<link rel="stylesheet" href="{{ asset('assets/css/tokitoki-global.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/css/admin-global.css') }}" />
```

### Untuk Layout Utama
```php
<!-- resources/views/layouts/app.blade.php -->
<link rel="stylesheet" href="{{ asset('assets/css/tokitoki-global.css') }}" />
```

## Customization
Untuk mengcustomize warna atau spacing, edit variabel CSS di bagian `:root` dalam file `tokitoki-global.css`:

```css
:root {
  --primary: #your-color;
  --spacing-md: your-spacing;
  /* dst... */
}
```

## Best Practices
1. Gunakan variabel CSS untuk konsistensi
2. Prioritaskan utility classes untuk spacing dan layout
3. Gunakan component classes untuk elemen kompleks
4. Test di berbagai device dan browser
5. Pertahankan accessibility dengan contrast ratio yang baik

## Browser Support
- Chrome 88+
- Firefox 85+
- Safari 14+
- Edge 88+

## Performance
- File CSS dioptimasi untuk loading cepat
- Menggunakan CSS variables untuk mengurangi redundansi
- Minifikasi direkomendasikan untuk production
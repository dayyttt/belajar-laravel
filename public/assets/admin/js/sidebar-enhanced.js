/**
 * Enhanced Sidebar JavaScript
 * Professional sidebar functionality with smooth animations
 */

// Toggle sidebar visibility (mobile)
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    
    if (sidebar.classList.contains('-translate-x-full')) {
        // Show sidebar
        sidebar.classList.remove('-translate-x-full');
        overlay.style.display = 'block';
        setTimeout(() => overlay.classList.add('opacity-100'), 10);
    } else {
        // Hide sidebar
        sidebar.classList.add('-translate-x-full');
        overlay.classList.remove('opacity-100');
        setTimeout(() => overlay.style.display = 'none', 300);
    }
}

// Toggle submenu with smooth animation
function toggleSubmenu(menuId) {
    const submenu = document.getElementById(`${menuId}-submenu`);
    const chevron = document.getElementById(`${menuId}-chevron`);
    const button = chevron.closest('button');
    
    if (submenu.classList.contains('max-h-0')) {
        // Open submenu
        submenu.classList.remove('max-h-0', 'opacity-0');
        submenu.classList.add('max-h-96', 'opacity-100');
        chevron.classList.add('rotate-180');
        button.classList.add('bg-slate-700/30');
    } else {
        // Close submenu
        submenu.classList.remove('max-h-96', 'opacity-100');
        submenu.classList.add('max-h-0', 'opacity-0');
        chevron.classList.remove('rotate-180');
        button.classList.remove('bg-slate-700/30');
    }
}

// Close sidebar when clicking overlay
document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.getElementById('sidebar-overlay');
    if (overlay) {
        overlay.addEventListener('click', toggleSidebar);
    }
    
    // Auto-close sidebar on mobile when clicking menu items
    const menuLinks = document.querySelectorAll('#sidebar a[href]');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth < 1024) { // lg breakpoint
                setTimeout(toggleSidebar, 150);
            }
        });
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024) {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.remove('-translate-x-full');
            overlay.style.display = 'none';
            overlay.classList.remove('opacity-100');
        }
    });
    
    // Initialize active submenus
    initializeActiveSubmenus();
});

// Initialize submenus that should be open based on current route
function initializeActiveSubmenus() {
    const activeSubmenus = document.querySelectorAll('.submenu.max-h-96');
    activeSubmenus.forEach(submenu => {
        const menuId = submenu.id.replace('-submenu', '');
        const chevron = document.getElementById(`${menuId}-chevron`);
        if (chevron) {
            chevron.classList.add('rotate-180');
            chevron.closest('button').classList.add('bg-slate-700/30');
        }
    });
}

// Add smooth scrolling for sidebar
function initializeSmoothScrolling() {
    const sidebar = document.getElementById('sidebar');
    if (sidebar) {
        sidebar.style.scrollBehavior = 'smooth';
    }
}

// Initialize on load
document.addEventListener('DOMContentLoaded', initializeSmoothScrolling);
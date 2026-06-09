// Admin JavaScript

// Global error handler untuk Laravel - suppress error yang tidak penting
window.addEventListener('error', function(e) {
    // Suppress specific errors that are not critical
    const suppressedErrors = [
        'ResizeObserver loop limit exceeded',
        'Non-Error promise rejection captured',
        'Script error',
        'Network request failed'
    ];
    
    if (suppressedErrors.some(error => e.message.includes(error))) {
        e.preventDefault();
        return false;
    }
});

// Profile dropdown toggle
function toggleProfileDropdown() {
    const dropdown = document.getElementById('profile-dropdown');
    if (dropdown) {
        dropdown.classList.toggle('hidden');
    }
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('profile-dropdown');
    const button = document.querySelector('[onclick="toggleProfileDropdown()"]');
    
    if (dropdown && button && !button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
    }
});

// DataTables initialization
$(document).ready(function() {
    // Initialize DataTables for schedules
    if ($('#schedulesTable').length) {
        $('#schedulesTable').DataTable({
            "pageLength": 10,
            "ordering": true,
            "searching": true,
            "responsive": true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
            }
        });
    }
    
    // Auto calculate duration when time changes
    $('#start_time, #end_time').on('change', function() {
        const startTime = $('#start_time').val();
        const endTime = $('#end_time').val();
        
        if (startTime && endTime) {
            const start = new Date('2000-01-01 ' + startTime);
            const end = new Date('2000-01-01 ' + endTime);
            
            if (end > start) {
                const diffMs = end - start;
                const diffHours = Math.floor(diffMs / (1000 * 60 * 60));
                const diffMinutes = Math.floor((diffMs % (1000 * 60 * 60)) / (1000 * 60));
                
                $('#duration').val(diffHours + ' jam ' + diffMinutes + ' menit');
            }
        }
    });
});

// Payment Verification Function
function verifyPayment(transactionId) {
    if (confirm('Apakah Anda yakin ingin memverifikasi pembayaran ini?')) {
        // Add loading state
        const button = event.target;
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memverifikasi...';
        button.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            // Reset button
            button.innerHTML = originalText;
            button.disabled = false;
            
            // Show success message
            alert('Pembayaran berhasil diverifikasi!');
            
            // Refresh page or update UI
            location.reload();
        }, 2000);
    }
}

// Form validation helper
function validateForm(formId) {
    const form = document.getElementById(formId);
    if (!form) return false;
    
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.remove('is-invalid');
        }
    });
    
    return isValid;
}

// Image preview function
function previewImage(input, previewId) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById(previewId).src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Phone number formatting
function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, '');
    
    if (value.startsWith('0')) {
        value = '62' + value.substring(1);
    } else if (!value.startsWith('62')) {
        value = '62' + value;
    }
    
    input.value = '+' + value;
}

// Auto logout timer
let logoutTimer;
function resetLogoutTimer() {
    clearTimeout(logoutTimer);
    logoutTimer = setTimeout(() => {
        if (confirm('Sesi Anda akan berakhir. Apakah Anda ingin melanjutkan?')) {
            resetLogoutTimer();
        } else {
            window.location.href = '/admin/logout';
        }
    }, 30 * 60 * 1000); // 30 minutes
}

// Initialize logout timer
document.addEventListener('DOMContentLoaded', function() {
    resetLogoutTimer();
    
    // Reset timer on user activity
    ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart'].forEach(event => {
        document.addEventListener(event, resetLogoutTimer, true);
    });
});
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\ServiceHighlightController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServicePackageController;
use App\Http\Controllers\Admin\ServiceOwnerController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\TimeSlotController;
use App\Http\Controllers\Admin\AvailabilityController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BookingController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/company/create', [HomeController::class, 'create']);
Route::post('/company/store', [HomeController::class, 'store']);

Route::get('/about', [AboutController::class, 'index'])->name('about');

// Product Pages
Route::get('/topos', function () {
    return view('topos');
})->name('topos');

Route::get('/topan', function () {
    return view('topan-blog');
})->name('topan');

Route::get('/jasa-layanan', function () {
    return view('jasa-layanan');
})->name('jasa-layanan');

Route::get('/features', function () {
    return view ('landing.features.index');
})->name('features.index');

Route::get('/screenshots', function () {
    return view ('landing.screenshots.index');
})->name('screenshots.index');

Route::get('/testimoni', function () {
    return view ('landing.testimoni.index');
})->name('testimoni.index');

Route::get('/plans', function () {
    return view ('landing.plans.index');
})->name('plans.index');

Route::get('/downloads', function () {
    return view ('landing.downloads.index');
})->name('downloads.index');

Route::get('/contacts', function () {
    return view ('contact');
})->name('contacts.index');

// ── Layanan Info — halaman detail/blog per kategori ──────────────────────────
Route::get('/layanan-info', [\App\Http\Controllers\LayananInfoController::class, 'index'])
    ->name('layanan-info.index');
Route::get('/layanan-info/{slug}', [\App\Http\Controllers\LayananInfoController::class, 'show'])
    ->name('layanan-info.show');


// Language Switch Routes
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);


// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Protected Admin Routes
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::prefix('admin/content')->name('admin.content.')->group(function () {
        // Banners
        Route::resource('banners', BannerController::class);
        
        // Static Pages
        Route::resource('pages', StaticPageController::class);
        
        // Service Highlights
        Route::resource('highlights', ServiceHighlightController::class);
        
        // Site Settings
        Route::get('settings', [SiteSettingController::class, 'edit'])->name('settings.edit');
        Route::put('settings', [SiteSettingController::class, 'update'])->name('settings.update');
    });

    // Customer Management
    Route::resource('customers', \App\Http\Controllers\CustomerController::class)->except('show');
    Route::get('customers/{customer}', [\App\Http\Controllers\CustomerController::class, 'show'])->name('customers.show');

    // Service Management
    
    // Service Categories
    Route::prefix('admin/service-categories')->name('admin.service-categories.')->middleware(['auth'])->group(function () {
        Route::get('/', [ServiceCategoryController::class, 'index'])->name('index');
        Route::get('/create', [ServiceCategoryController::class, 'create'])->name('create');
        Route::post('/', [ServiceCategoryController::class, 'store'])->name('store');
        Route::get('/{serviceCategory}/edit', [ServiceCategoryController::class, 'edit'])->name('edit');
        Route::put('/{serviceCategory}', [ServiceCategoryController::class, 'update'])->name('update');
        Route::delete('/{serviceCategory}', [ServiceCategoryController::class, 'destroy'])->name('destroy');
        Route::post('reorder', [ServiceCategoryController::class, 'reorder'])->name('reorder');
    });

    Route::prefix('admin/services')->name('admin.services.')->middleware(['auth'])->group(function () {
    // Services
    Route::resource('services', AdminServiceController::class)->except(['show']);
    Route::get('services/get/{service}', [ServicePackageController::class, 'getService'])
        ->name('services.get');
    });

    // Service Packages - dipindahkan keluar dari admin/services
    Route::prefix('admin/pages/services/packages')->name('admin.pages.services.packages.')->middleware(['auth'])->group(function () {
    // Service Packages
    Route::prefix('admin/pages/services/packages')->name('admin.pages.services.packages.')->group(function () {
        Route::get('/', [ServicePackageController::class, 'index'])->name('index');
        Route::get('/create', [ServicePackageController::class, 'create'])->name('create');
        Route::post('/', [ServicePackageController::class, 'store'])->name('store');
        Route::get('/{servicePackage}', [ServicePackageController::class, 'show'])->name('show');
        Route::get('/{servicePackage}/edit', [ServicePackageController::class, 'edit'])->name('edit');
        Route::put('/{servicePackage}', [ServicePackageController::class, 'update'])->name('update');
        Route::delete('/{servicePackage}', [ServicePackageController::class, 'destroy'])->name('destroy');
    });
    });
    //majemen   
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('admin.pages.manajemen.artikel.index');
    Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('admin.pages.manajemen.artikel.create');
    Route::post('/artikel/store', [ArtikelController::class, 'store'])->name('admin.pages.manajemen.artikel.store');
    Route::put('/artikel/update', [ArtikelController::class, 'update'])->name('admin.pages.manajemen.artikel.update');
    Route::delete('/artikel/destroy', [ArtikelController::class, 'destroy'])->name('admin.pages.manajemen.artikel.destroy');
    Route::post('/artikel/bulk-destroy', [ArtikelController::class, 'bulkDestroy'])->name('admin.pages.manajemen.artikel.bulk-destroy');
    
    Route::get('/halaman', [HalamanController::class, 'index'])->name('admin.pages.manajemen.halaman.index');
    Route::get('/halaman/create', [HalamanController::class, 'create'])->name('admin.pages.manajemen.halaman.create');
    Route::post('/halaman/store', [HalamanController::class, 'store'])->name('admin.pages.manajemen.halaman.store');
    Route::put('/halaman/update', [HalamanController::class, 'update'])->name('admin.pages.manajemen.halaman.update');
    Route::delete('/halaman/destroy', [HalamanController::class, 'destroy'])->name('admin.pages.manajemen.halaman.destroy');

    // Route aliases untuk kompatibilitas dengan view halaman
    Route::post('/halaman/store', [HalamanController::class, 'store'])->name('admin.manajemen.halaman.store');
    Route::post('/halaman/toggle-status', [HalamanController::class, 'toggleStatus'])->name('admin.manajemen.halaman.toggle-status');
    Route::delete('/halaman/destroy', [HalamanController::class, 'destroy'])->name('admin.manajemen.halaman.destroy');
    
    Route::get('/media', [MediaController::class, 'index'])->name('admin.pages.manajemen.media.index');
    Route::get('/media/create', [MediaController::class, 'create'])->name('admin.pages.manajemen.media.create');
    Route::post('/media/store', [MediaController::class, 'store'])->name('admin.pages.manajemen.media.store');
    Route::put('/media/update', [MediaController::class, 'update'])->name('admin.pages.manajemen.media.update');
    Route::delete('/media/destroy', [MediaController::class, 'destroy'])->name('admin.pages.manajemen.media.destroy');
    Route::post('/media/bulk-destroy', [MediaController::class, 'bulkDestroy'])->name('admin.pages.manajemen.media.bulk-destroy');

    // Route aliases untuk kompatibilitas dengan view yang menggunakan nama pendek
    Route::post('/media/store', [MediaController::class, 'store'])->name('admin.manajemen.media.store');
    Route::delete('/media/destroy', [MediaController::class, 'destroy'])->name('admin.manajemen.media.destroy');
    Route::post('/media/bulk-destroy', [MediaController::class, 'bulkDestroy'])->name('admin.manajemen.media.bulk-destroy');

    // Penugasan Management
    Route::prefix('admin/pages/penugasan')->name('admin.pages.penugasan.')->group(function () {
        Route::get('/jadwal', function () {
            return view('admin.pages.penugasan.jadwal.index');
        })->name('jadwal.index');
        
        Route::get('/kalender', function () {
            return view('admin.pages.penugasan.kalender.index');
        })->name('kalender.index');
        
        Route::get('/assignment', function () {
            return view('admin.pages.penugasan.assignment.index');
        })->name('assignment.index');
    });

    //produk
    Route::prefix('admin/pages/produk')->name('admin.pages.produk.')->group(function () {
        // Layanan (existing)
        Route::resource('layanan', LayananController::class)->names([
            'index' => 'layanan.index',
            'create' => 'layanan.create',
            'store' => 'layanan.store',
            'show' => 'layanan.show',
            'edit' => 'layanan.edit',
            'update' => 'layanan.update',
            'destroy' => 'layanan.destroy',
        ]);
        
        // Kategori Produk
        Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
        Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
        Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
        Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
        Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    });
});

//jasa owner manajemen
Route::prefix('admin/service-owners')->name('admin.service-owners.')->middleware(['auth'])->group(function () {
    Route::get('/', [ServiceOwnerController::class, 'index'])->name('index');
    Route::get('/create', [ServiceOwnerController::class, 'create'])->name('create');
    Route::post('/', [ServiceOwnerController::class, 'store'])->name('store');
    Route::get('/{serviceOwner}/edit', [ServiceOwnerController::class, 'edit'])->name('edit');
    Route::put('/{serviceOwner}', [ServiceOwnerController::class, 'update'])->name('update');
    Route::delete('/{serviceOwner}', [ServiceOwnerController::class, 'destroy'])->name('destroy');
});

//manajemen ketersediaan

Route::prefix('admin/pages/ketersediaan')->name('admin.pages.ketersediaan.')->middleware(['auth'])->group(function () {
    // Availability
    Route::resource('availability', AvailabilityController::class)->names([
        'index' => 'availability.index',
        'create' => 'availability.create',
        'store' => 'availability.store',
        'edit' => 'availability.edit',
        'update' => 'availability.update',
        'destroy' => 'availability.destroy',
    ]);
    // Schedules
    Route::resource('schedules', ScheduleController::class)->names([
        'index' => 'schedules.index',
        'create' => 'schedules.create',
        'store' => 'schedules.store',
        'edit' => 'schedules.edit',
        'update' => 'schedules.update',
        'destroy' => 'schedules.destroy',
    ]);
    // Time Slots
    Route::resource('time-slots', TimeSlotController::class)->names([
        'index' => 'time-slots.index',
        'create' => 'time-slots.create',
        'store' => 'time-slots.store',
        'edit' => 'time-slots.edit',
        'update' => 'time-slots.update',
        'destroy' => 'time-slots.destroy',

        'confirm' => 'time-slots.confirm',
        'cancel' => 'time-slots.cancel',
    ]);

    // Other routes...
    Route::get('/availability/calendar', [ScheduleController::class, 'calendar'])->name('availability.calendar');
    Route::get('/calendar', [ScheduleController::class, 'calendar'])->name('admin.pages.ketersediaan.calendar');

    Route::get('schedules/{schedule}/generate-slots', [ScheduleController::class, 'generateSlots'])
        ->name('admin.pages.ketersediaan.schedules.generate-slots.get');
    
    Route::post('schedules/{schedule}/generate-slots', [ScheduleController::class, 'generateSlots'])
        ->name('admin.pages.ketersediaan.schedules.generate-slots');
    // Route::post('schedules/{schedule}/generate-slots', [ScheduleController::class, 'generateSlots'])
    //     ->name('schedules.generate-slots');
});

// Invoice Routes 
Route::prefix('admin/pages/transaksi')->name('admin.pages.transaksi.')->middleware(['auth', 'admin'])->group(function () {
    // Invoices
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
    Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
    Route::get('/invoices/{invoice}', [InvoiceController::class, 'show'])->name('invoices.show');
    Route::get('/invoices/{invoice}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');
    Route::put('/invoices/{invoice}', [InvoiceController::class, 'update'])->name('invoices.update');
    Route::delete('/invoices/{invoice}', [InvoiceController::class, 'destroy'])->name('invoices.destroy');
    Route::post('/invoices/{invoice}/send', [InvoiceController::class, 'sendInvoice'])->name('invoices.send');

    // Payments
    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::get('/payments/create', [PaymentController::class, 'create'])->name('payments.create');
    Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
    Route::get('/payments/{payment}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
    Route::put('/payments/{payment}', [PaymentController::class, 'update'])->name('payments.update');
    Route::delete('/payments/{payment}', [PaymentController::class, 'destroy'])->name('payments.destroy');
    Route::post('/payments/{payment}/verify', [PaymentController::class, 'verify'])->name('payments.verify');
    Route::post('/payments/{payment}/reject', [PaymentController::class, 'reject'])->name('payments.reject');
});

// Reports
Route::prefix('admin/pages/laporan')->name('admin.pages.laporan.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [ReportController::class, 'index'])->name('index');
    Route::get('/owner-revenue', [ReportController::class, 'ownerRevenue'])->name('owner-revenue');
    Route::get('/payment-summary', [ReportController::class, 'paymentSummary'])->name('payment-summary');
});

// Booking Manual
Route::prefix('admin/pages/booking')->name('admin.pages.booking.')->middleware('auth')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::get('/create', [BookingController::class, 'create'])->name('create');
    Route::post('/', [BookingController::class, 'store'])->name('store');
    Route::get('/{booking}', [BookingController::class, 'show'])->name('show');
    Route::get('/{booking}/edit', [BookingController::class, 'edit'])->name('edit');
    Route::put('/{booking}', [BookingController::class, 'update'])->name('update');
    Route::post('/{booking}/status', [BookingController::class, 'updateStatus'])->name('update.status');
    Route::delete('/{booking}', [BookingController::class, 'destroy'])->name('destroy');
    
    // API endpoints
    Route::get('/api/slots', [BookingController::class, 'getAvailableSlots'])->name('api.slots');
    Route::get('/api/services/{ownerId}', [BookingController::class, 'getServicesByOwner'])->name('api.services');
});
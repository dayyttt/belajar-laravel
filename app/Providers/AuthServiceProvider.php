use Illuminate\Support\Facades\Gate;

public function boot()
{
    $this->registerPolicies();

    // Define manage_services gate
    Gate::define('manage_services', function ($user) {
        return $user->hasRole('admin') || $user->hasRole('service_manager');
    });
}
<?php
$code = <<<'PHPEOF'
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LayananInfoController extends Controller
{
    private function getAllLayanan(): array { return []; }
    public function index() { $layanan = $this->getAllLayanan(); return view('layanan-info.index', compact('layanan')); }
    public function show(string $slug) { $all = $this->getAllLayanan(); $layanan = collect($all)->firstWhere('slug', $slug); abort_if(!$layanan, 404); $related = collect($all)->where('slug', '!=', $slug)->take(3)->values()->all(); return view('layanan-info.show', compact('layanan', 'related')); }
}
PHPEOF;
file_put_contents('app/Http/Controllers/LayananInfoController.php', $code);
echo "done";

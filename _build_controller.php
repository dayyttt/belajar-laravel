<?php
// Script ini menulis LayananInfoController.php tanpa BOM menggunakan fopen('wb')
$out = 'app/Http/Controllers/LayananInfoController.php';
$fp = fopen($out, 'wb'); // 'wb' = write binary, tidak ada BOM

$L1 = <<<'PHP'
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananInfoController extends Controller
{
    private function getAllLayanan(): array
    {
        return [
PHP;
fwrite($fp, $L1 . "\n");
echo "Header OK\n";

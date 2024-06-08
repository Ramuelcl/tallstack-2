<?php

namespace Database\Factories\backend;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

use App\Models\backend\Pais;

class PaisFactory extends Factory
{
    protected $table = 'pais';
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pais::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $paises = fncGlob_Files(asset('storage/flags'), "*", "jpeg");
        $dir = 'C:\\laragon\\www\\tallstack\\public\\app\flags\\';
        $paises = fncGlob_Files($dir, '*', 'jpeg');
        // dd($paises);

        foreach ($paises as $value) {
            // dump([$value, $value['name']]);
            // dump([asset("storage/flags/" . $value['filename']), $value['name']]);

            DB::table($this->table)->insert([
                'nombre' => str_replace('_', ' ', $value['name']),
                'bandera' => 'app/flags/' . $value['name'] . '.' . $value['ext'],
                // 'idioma' => $value['name'],
            ]);
        }
        return [];
    }
}

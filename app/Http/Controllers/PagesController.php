<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{App, Artisan, File, Route};

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function master()
    {
        return view('layouts.master');
    }

    public function welcome()
    {
        return view('pages.welcome');
    }

    public function storageRead()
    {
        $directories = ['app', 'avatars', 'flags'];
        foreach ($directories as $directory) {
            $target = '/storage/app/public/images/' . $directory;
            $targetFolder = base_path() . $target;
            if (File::isDirectory($targetFolder)) {
                echo $targetFolder . '<br>';
            }
        }
        $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '\\storage';
        // dump( $linkFolder);
        return "Enlaces: \n linkFolder=$linkFolder \n. <br> <a href='/'>Volver a la página principal</a>";
    }
    public function storageLinks()
    {
        Artisan::call('storage:link');

        // Crear directorios si no existen
        $directories = ['posts', 'perfiles', 'avatars', 'logo'];
        foreach ($directories as $directory) {
            $target = '../../storage/app/public/images/' . $directory;
            $shortcut = public_path('storage/images/' . $directory);

            // Crear el directorio si no existe
            if (!File::isDirectory($shortcut)) {
                File::makeDirectory($shortcut, 0777, true, true);
            }

            // Crear el enlace simbólico si no existe
            if (!File::exists($shortcut)) {
                symlink($target, $shortcut);
            }
        }
        $source = public_path('app/logo/guzanet.png');
        $target = public_path('storage/images/logo/guzanet.png');
        // dd($source, $target);
        // Cargar y crear el archivo SVG con el contenido
        // $target = public_path('images/guzanet.svg');
        // $svgContent = file_get_contents($target);
        // file_put_contents($source, $svgContent);

        // Copiar el archivo
        copy($source, $target);

        return "Enlace simbólico y directorios creados correctamente.
        <br><br>
        <a href='/'>Volver a la página principal</a>
        <br>
        <a href='/storageRead'>mostrarlos</a>";
    }
}

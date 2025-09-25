@extends('template.app')
@section('body_class', 'helper-example-page')
@section('title-page') Helper Example @endsection

@section('meta-description', 'Ejemplo de uso del MetaHelper para generar meta tags dinámicos de manera programática en Laravel.')
@section('meta-keywords', 'laravel helper, meta tags helper, dynamic meta tags, programmatic seo')
@section('meta-robots', 'index, follow')

@section('og-title', 'MetaHelper Example - Ossian Sportbook')
@section('og-type', 'article')
@section('og-image', asset('images/og-helper-example.jpg'))

@section('twitter-card', 'summary_large_image')
@section('twitter-image', asset('images/twitter-helper-example.jpg'))
@section('twitter-site', '@ossian_sportbook')

@section('content')
    <div class="main-container">
        <div class="container">
            <h1 class="text-center text-3xl font-bold mb-6">MetaHelper - Ejemplo de Uso</h1>

            <div class="bg-yellow-100 p-6 rounded-lg mb-6">
                <h2 class="text-xl font-semibold mb-4">Uso del Helper en el Controlador:</h2>
                <pre class="bg-gray-800 text-yellow-400 p-4 rounded text-sm overflow-x-auto">
use App\Helpers\MetaHelper;

public function examplePage()
{
    $metaTags = MetaHelper::generateAllTags(
        'Mi Página Personalizada',
        'Descripción específica de mi página',
        [
            'keywords' => 'palabra1, palabra2, palabra3',
            'og_image' => asset('images/mi-imagen.jpg'),
            'twitter_card' => 'summary_large_image',
            'og_type' => 'article'
        ]
    );

    return view('pages.example', compact('metaTags'));
}
                </pre>
            </div>

            <div class="bg-purple-100 p-6 rounded-lg mb-6">
                <h2 class="text-xl font-semibold mb-4">En la Vista:</h2>
                <pre class="bg-gray-800 text-purple-400 p-4 rounded text-sm overflow-x-auto">
@section('meta-description', $metaTags['description'])
@section('og-title', $metaTags['og:title'])
@section('og-image', $metaTags['og:image'])
@section('twitter-title', $metaTags['twitter:title'])
                </pre>
            </div>

            <div class="bg-green-100 p-6 rounded-lg">
                <h2 class="text-xl font-semibold mb-4">Ventajas del Helper:</h2>
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Consistencia:</strong> Todos los meta tags siguen el mismo formato</li>
                    <li><strong>Reutilización:</strong> Un solo lugar para definir la lógica</li>
                    <li><strong>Mantenimiento:</strong> Fácil de actualizar y modificar</li>
                    <li><strong>Validación:</strong> Valores por defecto para evitar errores</li>
                    <li><strong>Flexibilidad:</strong> Opciones personalizables por página</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

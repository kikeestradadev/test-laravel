@extends('template.app')
@section('body_class', 'example-meta-page')
@section('title-page') Ejemplo Meta Tags @endsection

@section('meta-description', 'Ejemplo completo de meta tags dinámicos en Laravel - Aprende a implementar Open Graph, Twitter Cards y SEO meta tags de manera dinámica.')
@section('meta-keywords', 'laravel meta tags, open graph, twitter cards, seo, dynamic meta tags, blade templates')
@section('meta-robots', 'index, follow')

@section('og-title', 'Ejemplo Meta Tags - Ossian Sportbook')
@section('og-type', 'article')
@section('og-image', asset('images/og-example.jpg'))

@section('twitter-card', 'summary_large_image')
@section('twitter-image', asset('images/twitter-example.jpg'))
@section('twitter-site', '@ossian_sportbook')

{{-- Meta tags adicionales específicos para esta página --}}
@section('additional-meta')
    <meta name="author" content="Ossian Team">
    <meta name="publish_date" content="2024-01-15">
    <meta name="article:section" content="Technology">
    <meta name="article:tag" content="Laravel">
    <meta name="article:tag" content="SEO">
    <meta name="article:tag" content="Meta Tags">

    {{-- Schema.org markup --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "Ejemplo Meta Tags Dinámicos",
        "description": "Ejemplo completo de meta tags dinámicos en Laravel",
        "author": {
            "@type": "Organization",
            "name": "Ossian Team"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Ossian Sportbook"
        },
        "datePublished": "2024-01-15"
    }
    </script>
@endsection

@section('content')
    <div class="main-container">
        <div class="container">
            <h1 class="text-center text-3xl font-bold mb-6">Ejemplo de Meta Tags Dinámicos</h1>

            <div class="bg-blue-100 p-6 rounded-lg mb-6">
                <h2 class="text-xl font-semibold mb-4">Meta Tags Implementados:</h2>
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Description:</strong> Meta description dinámica</li>
                    <li><strong>Keywords:</strong> Keywords específicas por página</li>
                    <li><strong>Open Graph:</strong> Título, descripción, imagen y tipo</li>
                    <li><strong>Twitter Cards:</strong> Card type, título, descripción e imagen</li>
                    <li><strong>Meta Adicionales:</strong> Author, fecha, tags de artículo</li>
                    <li><strong>Schema.org:</strong> JSON-LD structured data</li>
                </ul>
            </div>

            <div class="bg-green-100 p-6 rounded-lg">
                <h2 class="text-xl font-semibold mb-4">Cómo usar:</h2>
                <p class="mb-4">En cada página, simplemente define las secciones que necesites:</p>
                <pre class="bg-gray-800 text-green-400 p-4 rounded text-sm overflow-x-auto">
@section('meta-description', 'Tu descripción personalizada')
@section('og-image', asset('images/tu-imagen.jpg'))
@section('twitter-card', 'summary_large_image')
                </pre>
            </div>
        </div>
    </div>
@endsection

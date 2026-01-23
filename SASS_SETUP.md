# Configuración de SASS con Tailwind CSS 4

## ✅ Estructura Implementada

### Archivos Creados/Modificados:

1. **`resources/css/tailwind.css`**
   - Contiene toda la configuración de Tailwind CSS 4
   - Directivas `@import`, `@source`, `@theme`
   - Estilos base de Tailwind

2. **`resources/css/app.scss`**
   - Archivo principal SCSS
   - Importa `tailwind.css`
   - Contiene variables, mixins y estilos SCSS personalizados

3. **`vite.config.js`**
   - Actualizado para usar `app.scss` como entrada
   - El plugin `@tailwindcss/vite` procesará Tailwind correctamente

4. **`resources/views/template/app.blade.php`**
   - Actualizado para usar `app.scss` en lugar de `app.css`

## 📦 Instalación de SASS

Ejecuta este comando cuando tengas conexión:

```bash
npm install -D sass
```

## 🔧 Cómo Funciona

1. **Tailwind CSS 4** se procesa desde `tailwind.css` usando el plugin `@tailwindcss/vite`
2. **SASS** procesa `app.scss` que importa `tailwind.css` y agrega estilos personalizados
3. Vite combina todo en el build final

## 💡 Uso de SASS

Ahora puedes usar todas las características de SASS en `app.scss`:

### Variables
```scss
$primary-color: #3b82f6;
$container-width: 1200px;
```

### Mixins
```scss
@mixin flex-center {
    display: flex;
    align-items: center;
    justify-content: center;
}
```

### Nesting
```scss
.header {
    background: steelblue;
    
    h1 {
        color: white;
    }
    
    &:hover {
        opacity: 0.9;
    }
}
```

### Funciones
```scss
@function calculate-width($base, $multiplier) {
    @return $base * $multiplier;
}
```

## ⚠️ Limitaciones

- **Tailwind 4 no es totalmente compatible con SCSS**, pero esta estructura híbrida funciona
- Las directivas de Tailwind (`@import 'tailwindcss'`, `@source`, `@theme`) deben estar en el archivo `.css`
- Los estilos SCSS personalizados van en `app.scss`
- Las utilidades de Tailwind se usan directamente en las clases HTML (como siempre)

## 🚀 Comandos

```bash
# Desarrollo
npm run dev

# Build para producción
npm run build
```

## 📝 Ejemplo Completo

```scss
// app.scss

// Importar Tailwind (debe estar en tailwind.css)
@import './tailwind.css';

// Variables SASS
$main-color: steelblue;
$spacing: 20px;

// Mixins
@mixin container {
    max-width: 1600px;
    margin: 0 auto;
    padding: 0 $spacing;
}

// Estilos con SASS
.main-container {
    @include container;
    
    .header {
        background: $main-color;
        
        h1 {
            color: white;
            font-size: 2rem;
        }
    }
}
```

## ✅ Ventajas de esta Estructura

1. ✅ Mantiene Tailwind CSS 4 funcionando correctamente
2. ✅ Permite usar todas las características de SASS
3. ✅ Separación clara entre Tailwind y estilos personalizados
4. ✅ Fácil de mantener y extender

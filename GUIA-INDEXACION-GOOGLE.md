# 📋 GUÍA COMPLETA: INDEXACIÓN EN GOOGLE SEARCH CONSOLE
## Maestranza San Sebastián

---

## 📌 PARTE 1: VERIFICACIÓN Y CONFIGURACIÓN INICIAL

### Paso 1: Acceder a Google Search Console
1. Ir a: https://search.google.com/search-console
2. Iniciar sesión con tu cuenta de Google (usar la cuenta empresarial si existe)
3. Click en "Agregar propiedad"

### Paso 2: Verificar Propiedad del Sitio
Hay 5 métodos de verificación. **Recomendado: Método del archivo HTML**

#### MÉTODO 1: Archivo HTML (MÁS FÁCIL)
1. Google te dará un archivo como: `google1234567890abcdef.html`
2. Descargar ese archivo
3. Subirlo a la raíz del sitio: `public_html/google1234567890abcdef.html`
4. Verificar que sea accesible: https://maestranzasansebastian.cl/google1234567890abcdef.html
5. Volver a Search Console y click en "Verificar"

#### MÉTODO 2: Etiqueta HTML (Alternativa)
1. Google te dará un código como: `<meta name="google-site-verification" content="ABC123...">`
2. Agregar esta etiqueta en `includes/header.php` después de la línea `<head>`
3. Desplegar el cambio a producción
4. Volver a Search Console y click en "Verificar"

#### MÉTODO 3: Google Analytics (Si ya tienes Analytics)
1. Si ya tienes Google Analytics configurado con el mismo código de seguimiento
2. Select "Google Analytics" como método
3. Click en "Verificar"

#### MÉTODO 4: Google Tag Manager
1. Si usas Google Tag Manager
2. Seleccionar esta opción
3. Click en "Verificar"

#### MÉTODO 5: DNS (Más técnico - requiere acceso a DNS de Hostgator)
1. Agregar registro TXT en configuración DNS de Hostgator
2. Valor proporcionado por Google
3. Esperar propagación (puede tardar hasta 48 horas)

---

## 📌 PARTE 2: ENVÍO DEL SITEMAP

### Paso 3: Enviar Sitemap Principal
1. En Google Search Console, ir a menú lateral izquierdo
2. Click en "Sitemaps"
3. En el campo "Agregar un nuevo sitemap", escribir: `sitemap.xml`
4. Click en "Enviar"
5. **Resultado esperado:** Estado "Correcto" (puede tardar algunos minutos)

### Paso 4: Verificar Estado del Sitemap
- **Estado "Correcto":** ✅ Sitemap procesado exitosamente
- **Estado "Error":** ❌ Revisar formato XML o accesibilidad
- **URLs detectadas:** Debe mostrar 28 URLs (todas las páginas del sitio)

**Verificación manual del sitemap:**
- Abrir: https://maestranzasansebastian.cl/sitemap.xml
- Debe verse como XML bien formateado
- Todas las URLs deben empezar con https://maestranzasansebastian.cl/

---

## 📌 PARTE 3: INDEXACIÓN DE PÁGINAS

### Paso 5: Solicitar Indexación de Páginas Principales
**IMPORTANTE:** Google limita a 10-15 solicitudes de indexación por día.

#### Orden de prioridad para solicitar indexación:
1. **Página principal** - https://maestranzasansebastian.cl/
2. **Servicios** - https://maestranzasansebastian.cl/services.php
3. **Sobre nosotros** - https://maestranzasansebastian.cl/about.php
4. **Obras Mayores** - https://maestranzasansebastian.cl/obras_mayores.php
5. **Obras Menores** - https://maestranzasansebastian.cl/obras_menores.php
6. **Carrocería** - https://maestranzasansebastian.cl/carroceria.php
7. **Contacto** - https://maestranzasansebastian.cl/contact.php

#### Cómo solicitar indexación:
1. En Search Console, ir a "Inspección de URLs" (barra superior)
2. Pegar la URL completa (ej: https://maestranzasansebastian.cl/services.php)
3. Click en Enter
4. Esperar análisis (10-30 segundos)
5. Si dice "La URL no está en Google" → Click en "Solicitar indexación"
6. Esperar confirmación (1-2 minutos)
7. Repetir para las siguientes URLs prioritarias

**NOTA:** Las demás páginas se indexarán automáticamente a través del sitemap en 1-2 semanas.

---

## 📌 PARTE 4: VERIFICACIÓN Y MONITOREO

### Paso 6: Verificar Robots.txt
1. En Search Console, ir a "Configuración" → "Rastreadores" → "robots.txt"
2. O visitar directamente: https://maestranzasansebastian.cl/robots.txt
3. **Verificar que contenga:**
   ```
   User-agent: *
   Allow: /
   Sitemap: https://maestranzasansebastian.cl/sitemap.xml
   ```

### Paso 7: Configurar Ajustes Adicionales

#### A) Configurar URL Preferida
1. Ir a "Configuración" en Search Console
2. **Propiedad:** Asegurarse de que sea `https://maestranzasansebastian.cl` (sin www)
3. Si tienes ambas versiones (con y sin www), agregar ambas como propiedades

#### B) Enviar Datos de Empresa (Schema.org)
Ya está configurado en el header con LocalBusiness markup. Verificar en:
- https://search.google.com/test/rich-results
- Pegar la URL de la página principal
- Debe detectar "LocalBusiness"

---

## 📌 PARTE 5: OPTIMIZACIONES POST-INDEXACIÓN

### Paso 8: Configurar Datos Estructurados Adicionales

#### Para mejorar resultados de búsqueda, agregar:
- ✅ LocalBusiness (Ya está)
- ⏳ BreadcrumbList (para navegación)
- ⏳ Organization (datos de la empresa)
- ⏳ ContactPoint (teléfono y email)

### Paso 9: Optimizar Meta Descriptions
Revisar que cada página tenga:
```html
<meta name="description" content="Descripción única de 150-160 caracteres">
```

**Páginas prioritarias para optimizar:**
1. index.php → "Maestranza San Sebastián - Soldadura y fabricación metálica en Chile..."
2. services.php → "Servicios de soldadura, carrocería, obras mayores y menores..."
3. contact.php → "Contacta a Maestranza San Sebastián - Presupuestos sin costo..."

---

## 📌 PARTE 6: SEGUIMIENTO Y MÉTRICAS

### Paso 10: Monitorear Progreso de Indexación

#### Dashboard Principal (Resumen)
- **Impresiones:** Cuántas veces aparece tu sitio en búsquedas
- **Clics:** Cuántos usuarios hacen clic
- **CTR:** Porcentaje de clics (ideal: 2-5%)
- **Posición promedio:** Ranking en resultados (ideal: Top 10 = posiciones 1-10)

#### Cobertura de Páginas
1. Ir a "Cobertura" o "Páginas"
2. Revisar:
   - **Páginas válidas:** Debe ser 28 páginas
   - **Errores:** Debe ser 0
   - **Excluidas:** Revisar si hay páginas excluidas innecesariamente

#### Rendimiento
1. Ir a "Rendimiento"
2. Ver gráficas de:
   - Clics totales (últimos 3 meses)
   - Impresiones (aumentará gradualmente)
   - Palabras clave que generan tráfico

---

## 📌 CRONOGRAMA ESPERADO

### Primera semana (Días 1-7)
- ✅ Verificación de propiedad
- ✅ Envío de sitemap
- ✅ Indexación de 5-7 páginas principales
- ⏳ Aparición en Google: 2-4 días

### Segunda semana (Días 8-14)
- ⏳ Indexación de páginas secundarias
- ⏳ Primeras impresiones en búsquedas
- ⏳ Datos de rendimiento empiezan a aparecer

### Primer mes (Días 15-30)
- ⏳ Todas las 28 páginas indexadas
- ⏳ Posicionamiento inicial establecido
- ⏳ CTR estabilizado

### Primer trimestre (Meses 2-3)
- ⏳ Mejora gradual de posiciones
- ⏳ Aumento de tráfico orgánico
- ⏳ Identificación de palabras clave principales

---

## 📌 PALABRAS CLAVE RECOMENDADAS

### Palabras clave principales para optimizar:
1. **Maestranza Chile**
2. **Soldadura industrial Chile**
3. **Carrocería de camiones**
4. **Fabricación metálica**
5. **Obras metálicas**
6. **Maestranza San Sebastián**
7. **Estructuras metálicas Chile**
8. **Reparación de carrocerías**

### Palabras clave por ubicación:
- Maestranza + [ciudad donde trabajas]
- Ejemplo: "Maestranza Santiago", "Soldadura industrial Valparaíso"

---

## 📌 CHECKLIST FINAL

### Antes de enviar a Google Search Console:
- ✅ Sitemap.xml accesible y actualizado
- ✅ Robots.txt configurado correctamente
- ✅ Favicon visible en navegador
- ✅ .htaccess con caché configurado
- ✅ HTTPS funcionando (certificado SSL válido)
- ✅ Todas las páginas accesibles (sin errores 404)
- ✅ Meta descriptions en páginas principales
- ✅ Schema.org LocalBusiness implementado

### Después de enviar a Google Search Console:
- ⏳ Verificar indexación cada 3-4 días
- ⏳ Revisar errores de rastreo semanalmente
- ⏳ Monitorear palabras clave mensualmente
- ⏳ Actualizar sitemap cuando agregues nuevas páginas

---

## 📌 RECURSOS ÚTILES

### Herramientas de Validación:
- **Validar Sitemap:** https://www.xml-sitemaps.com/validate-xml-sitemap.html
- **Validar Schema.org:** https://search.google.com/test/rich-results
- **PageSpeed Insights:** https://pagespeed.web.dev/
- **Prueba de optimización móvil:** https://search.google.com/test/mobile-friendly

### Documentación Oficial:
- Google Search Console: https://support.google.com/webmasters
- Guía de SEO de Google: https://developers.google.com/search/docs

---

## 🚨 PROBLEMAS COMUNES Y SOLUCIONES

### Problema 1: "El sitemap no se puede leer"
**Solución:**
- Verificar que el archivo sea XML válido
- Comprobar permisos del archivo (644)
- Asegurar codificación UTF-8

### Problema 2: "La URL no está en Google y no se puede indexar"
**Solución:**
- Verificar que no esté bloqueada en robots.txt
- Revisar que no tenga meta noindex
- Comprobar que la página cargue correctamente

### Problema 3: "Error 500 al rastrear"
**Solución:**
- Revisar logs del servidor
- Verificar que PHP esté funcionando
- Comprobar .htaccess no tenga errores

### Problema 4: "Contenido duplicado"
**Solución:**
- Agregar canonical tags: `<link rel="canonical" href="URL">`
- Consolidar páginas similares

---

## 📞 CONTACTO Y SOPORTE

Si tienes problemas con la indexación:
1. Revisar esta guía paso a paso
2. Verificar en Google Search Console → "Problemas" → Ver detalles
3. Buscar el error específico en documentación de Google
4. Contactar con el desarrollador web si persiste

---

**Última actualización:** 14 de diciembre de 2025
**Sitio:** maestranzasansebastian.cl
**Páginas totales:** 28

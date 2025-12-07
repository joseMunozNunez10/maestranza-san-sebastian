# Script para modularizar todas las páginas PHP
# Maestranza San Sebastian

Write-Host "=== Modularizando todas las páginas PHP ===" -ForegroundColor Green

$rootPath = "c:\Users\josem\Desktop\Maestranza San Sebastian\MsanSebastian"
Set-Location $rootPath

# Lista de archivos a modularizar (excluimos index-modular.php que ya es el ejemplo)
$filesToModularize = @(
    "about.php",
    "services.php",
    "contact.php",
    "steel-welding.php",
    "metal-work.php",
    "pipe-welding.php",
    "manufacturing.php",
    "fabrication.php",
    "aluminum-system.php",
    "projects.php",
    "project-details.php",
    "blog.php",
    "blog-details.php",
    "service-details.php"
)

$headerEnd = "</div>`r`n`r`n    <!-- Page Title -->"
$footerStart = "    <!--Main Footer-->"

$count = 0

foreach ($file in $filesToModularize) {
    if (Test-Path $file) {
        Write-Host "`nProcesando: $file" -ForegroundColor Cyan
        
        $content = Get-Content $file -Raw -Encoding UTF8
        
        # Buscar donde termina el header
        $headerEndPos = $content.IndexOf($headerEnd)
        if ($headerEndPos -eq -1) {
            # Intentar otro patrón común
            $headerEnd2 = "</div>`n`n    <!-- Page Title -->"
            $headerEndPos = $content.IndexOf($headerEnd2)
        }
        
        # Buscar donde empieza el footer
        $footerStartPos = $content.IndexOf($footerStart)
        
        if ($headerEndPos -gt 0 -and $footerStartPos -gt $headerEndPos) {
            # Extraer solo el contenido del body
            $bodyContent = $content.Substring($headerEndPos + $headerEnd.Length, $footerStartPos - $headerEndPos - $headerEnd.Length)
            
            # Crear el nuevo contenido modularizado
            $newContent = "<?php include 'includes/header.php'; ?>`r`n`r`n    <!-- Page Title -->" + $bodyContent + "`r`n`r`n<?php include 'includes/footer.php'; ?>"
            
            # Crear backup
            Copy-Item $file "$file.bak" -Force
            
            # Guardar el archivo modularizado
            Set-Content -Path $file -Value $newContent -Encoding UTF8 -NoNewline
            
            Write-Host "  OK Modularizado correctamente" -ForegroundColor Green
            $count++
        } else {
            Write-Host "  ERROR No se encontraron las marcas de header/footer" -ForegroundColor Red
            Write-Host "    Header pos: $headerEndPos, Footer pos: $footerStartPos"
        }
    } else {
        Write-Host "  SKIP Archivo no encontrado" -ForegroundColor Yellow
    }
}

Write-Host "`n=== Modularizacion completada ===" -ForegroundColor Green
Write-Host "$count archivos modularizados exitosamente" -ForegroundColor Cyan
Write-Host "`nBackups creados con extension .bak" -ForegroundColor Yellow

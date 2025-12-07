# Script para convertir sitio HTML a PHP modular
# Maestranza San Sebastian

Write-Host "=== Iniciando conversion HTML a PHP ===" -ForegroundColor Green

$rootPath = "c:\Users\josem\Desktop\Maestranza San Sebastian\MsanSebastian"
Set-Location $rootPath

# Lista de archivos HTML a convertir
$htmlFiles = @(
    "index.html",
    "about.html",
    "services.html",
    "contact.html",
    "steel-welding.html",
    "metal-work.html",
    "pipe-welding.html",
    "manufacturing.html",
    "fabrication.html",
    "aluminum-system.html",
    "projects.html",
    "project-details.html",
    "blog.html",
    "blog-details.html",
    "service-details.html"
)

Write-Host "`nPaso 1: Renombrando archivos .html a .php..." -ForegroundColor Cyan
foreach ($file in $htmlFiles) {
    if (Test-Path $file) {
        $newName = $file.Replace('.html', '.php')
        Rename-Item -Path $file -NewName $newName -Force
        Write-Host "  OK $file -> $newName" -ForegroundColor Green
    }
}

Write-Host "`nPaso 2: Actualizando referencias .html a .php en todos los archivos..." -ForegroundColor Cyan
$phpFiles = Get-ChildItem -Path . -Filter "*.php" -File

foreach ($phpFile in $phpFiles) {
    $content = Get-Content $phpFile.FullName -Raw -Encoding UTF8
    
    # Reemplazar todas las referencias .html con .php
    $content = $content.Replace('.html"', '.php"')
    $content = $content.Replace(".html'", ".php'")
    
    Set-Content -Path $phpFile.FullName -Value $content -Encoding UTF8 -NoNewline
}

Write-Host "  OK Referencias actualizadas" -ForegroundColor Green

Write-Host "`n=== Conversion completada ===" -ForegroundColor Green
Write-Host "`nProximos pasos:" -ForegroundColor Yellow
Write-Host "  1. Revisar los archivos PHP"
Write-Host "  2. Modularizar cada pagina manualmente"
Write-Host "  3. Hacer commit y push a GitHub"
Write-Host "  4. Probar en servidor local con PHP"

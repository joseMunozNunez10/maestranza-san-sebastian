# Script para sincronizar cambios automáticamente a XAMPP
# Uso: ./sync-to-xampp.ps1

$source = "c:\Users\josem\Desktop\Maestranza San Sebastian\MsanSebastian"
$destination = "C:\xampp\htdocs\MsanSebastian"

Write-Host "Sincronizando archivos a XAMPP..." -ForegroundColor Cyan

# Sincronizar todo el contenido
robocopy $source $destination /MIR /XD .git node_modules /NFL /NDL /NJH /NJS

Write-Host "✓ Sincronización completada" -ForegroundColor Green
Write-Host "Recarga el navegador en: http://localhost/MsanSebastian/" -ForegroundColor Yellow

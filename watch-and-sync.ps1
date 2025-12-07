# Script para observar cambios y sincronizar automaticamente
$source = "c:\Users\josem\Desktop\Maestranza San Sebastian\MsanSebastian"
$destination = "C:\xampp\htdocs\MsanSebastian"

Write-Host "Observando cambios en: $source" -ForegroundColor Cyan
Write-Host "Presiona Ctrl+C para detener" -ForegroundColor Yellow
Write-Host ""

$watcher = New-Object System.IO.FileSystemWatcher
$watcher.Path = $source
$watcher.IncludeSubdirectories = $true
$watcher.EnableRaisingEvents = $true
$watcher.NotifyFilter = [System.IO.NotifyFilters]::FileName -bor [System.IO.NotifyFilters]::LastWrite

$onChange = {
    $path = $Event.SourceEventArgs.FullPath
    $changeType = $Event.SourceEventArgs.ChangeType
    $timestamp = Get-Date -Format 'HH:mm:ss'
    
    $src = "c:\Users\josem\Desktop\Maestranza San Sebastian\MsanSebastian"
    $dst = "C:\xampp\htdocs\MsanSebastian"
    $relativePath = $path.Replace($src, "")
    $destPath = Join-Path $dst $relativePath
    
    Write-Host "[$timestamp] $changeType : $relativePath" -ForegroundColor Green
    
    try {
        Start-Sleep -Milliseconds 200
        $destDir = Split-Path $destPath -Parent
        if (-not (Test-Path $destDir)) {
            New-Item -ItemType Directory -Path $destDir -Force | Out-Null
        }
        Copy-Item -Path $path -Destination $destPath -Force -ErrorAction SilentlyContinue
        Write-Host "  Sincronizado" -ForegroundColor Cyan
    }
    catch {
        Write-Host "  Error" -ForegroundColor Red
    }
}

$handlers = . {
    Register-ObjectEvent -InputObject $watcher -EventName Changed -Action $onChange
    Register-ObjectEvent -InputObject $watcher -EventName Created -Action $onChange
}

Write-Host "Observador activo. Los cambios se sincronizaran automaticamente" -ForegroundColor Green
Write-Host ""

try {
    while ($true) { Start-Sleep -Seconds 1 }
}
finally {
    $handlers | ForEach-Object { Unregister-Event -SourceIdentifier $_.Name }
    $watcher.Dispose()
}

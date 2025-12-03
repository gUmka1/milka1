@echo off
echo Stopping Apache...
"D:\xampp\apache_stop.bat"
timeout /t 2 /nobreak >nul
echo Starting Apache...
"D:\xampp\apache_start.bat"
echo Apache restarted. You can now access your website at http://localhost:8080/milka/
pause
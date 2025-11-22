%~d0
cd "%dp0"
gcc -E code.c > code.i 
gcc -S code.c
gcc -c code.c
gcc -o code.exe code.c 
code.exe

pause

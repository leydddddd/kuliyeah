%~d0	
cd "%~dp0"
gcc -O0 -c code_O0.c 
gcc -O1 -c code_O1.c 
gcc -O2 -c code_O2.c 
gcc -O3 -c code_O3.c 
gcc -Os -c code_Os.c
gcc -Ofast -c code_Ofast.c 
objdump -d code_O0.o > code_O0.s 
objdump -d code_O1.o > code_O1.s 
objdump -d code_O2.o > code_O2.s 
objdump -d code_O3.o > code_O3.s 
objdump -d code_Os.o > code_Os.s
objdump -d code_Ofast.o > code_Ofast.s

pause

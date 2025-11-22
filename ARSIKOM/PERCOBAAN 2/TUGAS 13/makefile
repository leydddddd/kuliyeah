all: operasi-bit.exe

operasi-bit.exe: show-bit.o plus-bit.o minus-bit.o main-bit.o
	gcc show-bit.o plus-bit.o minus-bit.o main-bit.o -o operasi-bit.exe

show-bit.o: show-bit.c
	gcc -c show-bit.c

plus-bit.o: plus-bit.c 
	gcc -c plus-bit.c
	
minus-bit.o: minus-bit.c
	gcc -c minus-bit.c
	
main-bit.o: main-bit.c
	gcc -c main-bit.c
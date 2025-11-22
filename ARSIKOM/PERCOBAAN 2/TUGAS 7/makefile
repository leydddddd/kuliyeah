all: simple-pass.exe

simple-pass.exe: encrypt.o decrypt.o main-program.o
	gcc encrypt.o decrypt.o main-program.o -o simple-pass.exe

encrypt.o: encrypt.c
	gcc -c encrypt.c

decrypt.o: decrypt.c 
	gcc -c decrypt.c
	
main-program.o: main-program.c
	gcc -c main-program.c
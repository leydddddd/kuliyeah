all: rep_byte_bit.exe

rep_byte_bit.exe: input_no_5.o no_5.o main_prog.o
	gcc input_no_5.o no_5.o main_prog.o -o rep_byte_bit.exe

input_no_5.o: input_no_5.c
	gcc -c input_no_5.c

no_5.o: no_5.c 
	gcc -c no_5.c
	
main_prog.o: main_prog.c
	gcc -c main_prog.c
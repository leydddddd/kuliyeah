all: fibonacci.exe

fibonacci.exe: inputn.o fibo.o fibo_main.o
	gcc inputn.o fibo.o fibo_main.o -o fibonacci.exe

inputn.o: inputn.c
	gcc -c inputn.c

fibo.o: fibo.c 
	gcc -c fibo.c
	
fibo_main.o: fibo_main.c
	gcc -c fibo_main.c
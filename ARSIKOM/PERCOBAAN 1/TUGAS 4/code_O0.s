
code_O0.o:     file format pe-x86-64


Disassembly of section .text:

0000000000000000 <main>:
   0:	55                   	push   %rbp
   1:	48 89 e5             	mov    %rsp,%rbp
   4:	48 83 ec 30          	sub    $0x30,%rsp
   8:	e8 00 00 00 00       	callq  d <main+0xd>
   d:	c7 45 fc 00 00 00 00 	movl   $0x0,-0x4(%rbp)
  14:	c7 45 f8 00 00 00 00 	movl   $0x0,-0x8(%rbp)
  1b:	eb 0a                	jmp    27 <main+0x27>
  1d:	8b 45 fc             	mov    -0x4(%rbp),%eax
  20:	01 45 f8             	add    %eax,-0x8(%rbp)
  23:	83 45 fc 01          	addl   $0x1,-0x4(%rbp)
  27:	81 7d fc f3 01 00 00 	cmpl   $0x1f3,-0x4(%rbp)
  2e:	7e ed                	jle    1d <main+0x1d>
  30:	8b 45 f8             	mov    -0x8(%rbp),%eax
  33:	48 83 c4 30          	add    $0x30,%rsp
  37:	5d                   	pop    %rbp
  38:	c3                   	retq   
  39:	90                   	nop
  3a:	90                   	nop
  3b:	90                   	nop
  3c:	90                   	nop
  3d:	90                   	nop
  3e:	90                   	nop
  3f:	90                   	nop

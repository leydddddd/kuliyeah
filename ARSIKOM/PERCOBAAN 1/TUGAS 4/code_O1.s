
code_O1.o:     file format pe-x86-64


Disassembly of section .text:

0000000000000000 <main>:
   0:	48 83 ec 28          	sub    $0x28,%rsp
   4:	e8 00 00 00 00       	callq  9 <main+0x9>
   9:	b8 f4 01 00 00       	mov    $0x1f4,%eax
   e:	83 e8 01             	sub    $0x1,%eax
  11:	75 fb                	jne    e <main+0xe>
  13:	b8 4e e7 01 00       	mov    $0x1e74e,%eax
  18:	48 83 c4 28          	add    $0x28,%rsp
  1c:	c3                   	retq   
  1d:	90                   	nop
  1e:	90                   	nop
  1f:	90                   	nop

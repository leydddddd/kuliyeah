	.file	"code.c"
	.def	___main;	.scl	2;	.type	32;	.endef
	.text
	.globl	_main
	.def	_main;	.scl	2;	.type	32;	.endef
_main:
	pushl	%ebp
	movl	%esp, %ebp
	andl	$-16, %esp
	subl	$16, %esp
	call	___main
	movl	$0, 12(%esp)
	movl	$0, 8(%esp)
	jmp	L2
L3:
	movl	12(%esp), %eax
	addl	%eax, 8(%esp)
	addl	$1, 12(%esp)
L2:
	cmpl	$499, 12(%esp)
	jle	L3
	movl	8(%esp), %eax
	leave
	ret
	.ident	"GCC: (tdm-1) 5.1.0"

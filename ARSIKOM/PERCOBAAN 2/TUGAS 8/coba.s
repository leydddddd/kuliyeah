	.file	"coba.c"
	.text
	.globl	_coba
	.def	_coba;	.scl	2;	.type	32;	.endef
_coba:
	pushl	%ebp
	movl	%esp, %ebp
	subl	$16, %esp
	movl	12(%ebp), %eax
	movl	(%eax), %eax
	movl	%eax, -4(%ebp)
	movl	16(%ebp), %eax
	movl	(%eax), %eax
	movl	%eax, -8(%ebp)
	movl	-12(%ebp), %edx
	movl	-4(%ebp), %eax
	addl	%edx, %eax
	movl	%eax, -16(%ebp)
	movl	12(%ebp), %eax
	movl	-16(%ebp), %edx
	movl	%edx, (%eax)
	movl	16(%ebp), %eax
	movl	-4(%ebp), %edx
	movl	%edx, (%eax)
	movl	8(%ebp), %eax
	movl	-8(%ebp), %edx
	movl	%edx, (%eax)
	nop
	leave
	ret
	.ident	"GCC: (tdm-1) 5.1.0"

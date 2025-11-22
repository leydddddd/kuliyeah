	.file	"coba1.c"
	.text
	.globl	_coba
	.def	_coba;	.scl	2;	.type	32;	.endef
_coba:
	pushl	%ebp
	movl	%esp, %ebp
	subl	$48, %esp
	movl	12(%ebp), %eax
	movl	(%eax), %eax
	movl	%eax, -44(%ebp)
	fildl	-44(%ebp)
	fstpl	-8(%ebp)
	movl	16(%ebp), %eax
	movl	(%eax), %eax
	movl	%eax, -44(%ebp)
	fildl	-44(%ebp)
	fstpl	-16(%ebp)
	fldl	-24(%ebp)
	faddl	-8(%ebp)
	fstpl	-32(%ebp)
	fldl	-32(%ebp)
	fnstcw	-34(%ebp)
	movzwl	-34(%ebp), %eax
	movb	$12, %ah
	movw	%ax, -36(%ebp)
	fldcw	-36(%ebp)
	fistpl	-40(%ebp)
	fldcw	-34(%ebp)
	movl	-40(%ebp), %edx
	movl	12(%ebp), %eax
	movl	%edx, (%eax)
	fldl	-8(%ebp)
	fldcw	-36(%ebp)
	fistpl	-40(%ebp)
	fldcw	-34(%ebp)
	movl	-40(%ebp), %edx
	movl	16(%ebp), %eax
	movl	%edx, (%eax)
	fldl	-16(%ebp)
	fldcw	-36(%ebp)
	fistpl	-40(%ebp)
	fldcw	-34(%ebp)
	movl	-40(%ebp), %edx
	movl	8(%ebp), %eax
	movl	%edx, (%eax)
	nop
	leave
	ret
	.ident	"GCC: (tdm-1) 5.1.0"

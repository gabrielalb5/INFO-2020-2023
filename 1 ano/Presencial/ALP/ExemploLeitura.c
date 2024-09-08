#include <stdio.h>
int main ()
{
	int r, n1, n2;
	printf ("Digite um numero inteiro:");
	scanf("%d",&n1);
	printf ("Digite outro numero inteiro:");
	scanf("%d",&n2);
	r=n1/n2;
	printf("Resultado = %d\n",r);
	system ("PAUSE");
	return 0;
}

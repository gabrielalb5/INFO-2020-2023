#include <stdio.h>
int main ()
{
	float preco, total;
	printf ("Digite o preco do produto:");
	scanf("%f",&preco);
	total= preco - (preco*0.1);
	printf("Total com desconto = R$%4.f\n",total);
	system ("PAUSE");
	return 0;
}

//imprimir valores impares at� um determinado n�mero informado pleo usu�rio;.
#include <stdio.h>
int main(){
	
	int n, aux=1;
	
	printf("Digite um valor: ");
	scanf("%d",&n);
	
	printf("\n");
	
	while (aux<=n)
	{   
		printf("\t %d", aux);
		aux +=2;
	}
	getch();
	return 0;
}

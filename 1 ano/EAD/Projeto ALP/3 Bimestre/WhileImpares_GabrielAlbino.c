//imprimir valores impares até um determinado número informado pleo usuário;.
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

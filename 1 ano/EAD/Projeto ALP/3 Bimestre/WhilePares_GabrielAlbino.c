//imprimir valores pares até um determinado número informado pleo usuário;.
#include <stdio.h>
int main(){
	
	int n, aux=0;
	
	printf("\nDigite um valor: ");
	scanf("%d",&n);
	
	printf("\n");
	
	while (aux<=n)//teste no início
	{   
	    if((aux%10)==0){
	        printf("\n");
	    }
		printf("\t %d", aux);
		aux +=2; //semelhante: aux = aux+2;
		
	}
	
	getch();
	return 0;
}

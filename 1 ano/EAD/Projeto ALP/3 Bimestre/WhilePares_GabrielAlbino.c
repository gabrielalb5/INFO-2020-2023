//imprimir valores pares at� um determinado n�mero informado pleo usu�rio;.
#include <stdio.h>
int main(){
	
	int n, aux=0;
	
	printf("\nDigite um valor: ");
	scanf("%d",&n);
	
	printf("\n");
	
	while (aux<=n)//teste no in�cio
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

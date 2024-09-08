#include <stdio.h>
int main(){
	
	int x;
	printf("Digite um número inteiro: ");
	scanf("%d", &x);
	//validar
	if(x>0){
		if(x<=5)//intervalo 0-5
			printf("Intervalo 0-5");
		else if(x<=10)
			printf("Intervalo 6-10");
		else if(x<=15)
			printf("Intervalo 11-15");		
		else
			printf("Valor inválido");
	}
	getch();
	return 0;
}

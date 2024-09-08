#include <stdio.h>
int main(){
    
    float dol, cotacaodol, valor_reais;
    
    printf("Digite a quantidade de dolares: ");
	scanf("%f", &dol);
	printf("Digite a cotacao do dolar hoje: ");
	scanf("%f", &cotacaodol);
	
	valor_reais = dol*cotacaodol;
	
	printf("O valor de dolares em reais e = %.2f", valor_reais);

    return 0;
}

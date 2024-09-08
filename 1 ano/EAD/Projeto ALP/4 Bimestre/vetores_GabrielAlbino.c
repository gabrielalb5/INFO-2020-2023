/*
Ler dois vetores, X e Y de 10 elementos inteiros cada um.
Intercalar os elementos desses dois vetores formando assim um novo vetor R de 20 elementos,
onde nas posições ímpares de R estejam os elementos de X e nas posições pares os elementos 
de Y (Considere o zero como PAR). Escrever o vetor R, após sua completa geração.
*/
#include<stdio.h>
const MIN = 3;
const MAX = 6;
int main(){
	
	int i, j=0, x[MIN], y[MIN], r[MAX];
	
	for(i=0;i<MIN;i++){
		system("cls");
		printf("\n\tDigite o valor de x[%i]: ",i);
		scanf("%i", &x[i]);
		
		printf("\n\tDigite o valor de y[%i]: ",i);
		scanf("%i", &y[i]);
	}
	
	for(i=0;i<MIN;i++){
		r[j] = y[i];
		j++;
		r[j] = x[i];
		j++;
	}
	
	system("cls");
	
	printf("\n\n");
	for (i=0; i<MAX; i++){
		printf("\t r[%i]: %i\n", i, r[i]);
	}
	
	getch();
	return 0;
}

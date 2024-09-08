#include <stdio.h>
int main (){
	int n, i, maior, pos;
	
	maior = -1;
	
	//para i de 1 ate 5
	//i++ -> i= i+1
	for (i=1;i<=5;i++){
		scanf("%d", &n);
		
		if(n> maior){
			maior= n;
			pos= i;
		}
	}
	
	printf ("Maior numero: %d\n", maior);
	printf ("Posicao numero: %d\n", pos);
	return 0;
}

//indique a quantidade de n�meros divisiv�is por 3 e 7 non intervalo de 100 a 200.
#include <stdio.h>
#include<locale.h>
int main(){
	
	setlocale(LC_ALL,"Portuguese");
	int i, cont;
	
	for(i=100;i<=200;i++){
		if(i%3==0 && i%7==0){
			printf("%d ",i);
	        cont++;
		}
	}
	printf("\nA quantidade de n�meros divis�veis tanto por 3 quanto por 7 entre 100 e 200 �: %d", cont);
	
	getch();
	return 0;
}

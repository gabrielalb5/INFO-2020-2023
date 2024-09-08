#include <stdio.h>
int main(){

	int i;
	int v[100];
	
	//laço utilizado para popular vetor
	for(i=0;i<100;i++){
		v[i]= i+1;
	}
	
	//laço para imprimir valor
	for(i=0;i<100;i++){
		printf("v[%d]: %d\n",i);
	}
	return 0;
}

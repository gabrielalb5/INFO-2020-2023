#include<stdio.h>
#include<locale.h>
int main(){
    
	setlocale(LC_ALL,"Portuguese");
	int i, cont=0;
	
	for(i=1; i<=100; i++){
	    if(i%2==0 && i%3==0){
	        printf("%d ",i);
	        cont++;
	    }
	}
	printf("\nExistem %d números divisíveis por 2 e 3 ao mesmo tempo no conjunto de 1 a 100.",cont);
	
	getch();
	return 0;
}

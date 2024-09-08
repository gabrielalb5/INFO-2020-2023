#include<stdio.h>
#include<locale.h>
int main(){
    
	setlocale(LC_ALL,"Portuguese");
	int i, n, maior, menor;
	
	printf("Digite um número: ");
	scanf("%d",&n);
	maior=n;
	menor=n;
	        
	for(i=1;i<20;i++){
	    printf("Digite um número: ");
	    scanf("%d",&n);
	    if(n>maior){
	        maior=n;
	    }else if(n<menor){
	    	menor=n;
		}
	}
	printf("\nO maior número é %d e o menor é %d.",maior, menor);
	
	getch();
	return 0;
}


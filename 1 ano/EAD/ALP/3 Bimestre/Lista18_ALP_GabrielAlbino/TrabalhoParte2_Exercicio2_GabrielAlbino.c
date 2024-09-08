#include <stdio.h>
#include <locale.h>
int main(){

    int op=0, i=0;
    setlocale(LC_ALL,"Portuguese");
    
    while(op!=3){
        printf("\nMenu\n");
        printf("1) Mostrar uma contagem regressiva do 100 até o 50.\n");
        printf("2) Mostrar os números divisíveis por 2 e 5, ao mesmo tempo, no intervalo do 1 ao 100.\n");
        printf("3) Fim.\n");
        printf("Digite a sua escolha: ");
        scanf("%d",&op);
        
        switch(op){
        	case 1: printf("\nOpção 1 escolhida.\n");
					for(i=100;i>=50;i--){
        			printf("%d\n",i);
        			}
        			printf("\n");
        			break;
        	case 2: printf("\nOpção 2 escolhida.\n");
        	        for(i=1; i<=100; i++){
	                    if(i%2==0 && i%5==0){
	                    printf("%d ",i);
	                    }
        	        }
        	        printf("\n");
        	        break;
            case 3: printf("\nOpção 3 escolhida. Fim.");
                    break;
            default: printf("\nOpção inválida! Tente novamente.\n");
                     break;
        }
    }
    getch();
    return 0;
}

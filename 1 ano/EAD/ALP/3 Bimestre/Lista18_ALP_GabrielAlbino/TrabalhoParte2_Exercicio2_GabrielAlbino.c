#include <stdio.h>
#include <locale.h>
int main(){

    int op=0, i=0;
    setlocale(LC_ALL,"Portuguese");
    
    while(op!=3){
        printf("\nMenu\n");
        printf("1) Mostrar uma contagem regressiva do 100 at� o 50.\n");
        printf("2) Mostrar os n�meros divis�veis por 2 e 5, ao mesmo tempo, no intervalo do 1 ao 100.\n");
        printf("3) Fim.\n");
        printf("Digite a sua escolha: ");
        scanf("%d",&op);
        
        switch(op){
        	case 1: printf("\nOp��o 1 escolhida.\n");
					for(i=100;i>=50;i--){
        			printf("%d\n",i);
        			}
        			printf("\n");
        			break;
        	case 2: printf("\nOp��o 2 escolhida.\n");
        	        for(i=1; i<=100; i++){
	                    if(i%2==0 && i%5==0){
	                    printf("%d ",i);
	                    }
        	        }
        	        printf("\n");
        	        break;
            case 3: printf("\nOp��o 3 escolhida. Fim.");
                    break;
            default: printf("\nOp��o inv�lida! Tente novamente.\n");
                     break;
        }
    }
    getch();
    return 0;
}

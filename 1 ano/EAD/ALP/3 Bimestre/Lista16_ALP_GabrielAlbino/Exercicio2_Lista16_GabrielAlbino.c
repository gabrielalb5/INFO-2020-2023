#include <stdio.h>
#include <locale.h>
int main(){
    
    int op, i=0, n, soma, qtd;
    setlocale(LC_ALL,"Portuguese");
    
    while(op!=4){
        printf("\nMENU\n");
        printf("1)Ler e somar de 10 n�meros inteiros.\n");
        printf("2)Ler e somar os n�meros de 10 a 20 (inclusive).\n");
        printf("3)Mostrar a palavra �Bom dia� 10 vezes na tela.\n");
        printf("4)Fim.\n");
        printf("Digite a op��o: ");
        scanf("%d",&op);
        
        switch(op){
            case 1: printf("\nOp��o 1 escolhida");
                    printf("\nDigite 10 n�meros inteiros: ");
                    while(i<10){
                        scanf("%d",&n);
                        soma = soma+n;
                        i++;
                    }
                    printf("Resultado da soma: %d\n\n",soma);
                    i=0;
                    soma=0;
                    break;
                    
            case 2: printf("\nOp��o 2 escolhida");
                    printf("\nQuantos n�meros voc� deseja somar? ");
                    scanf("%d",&qtd);
                    printf("\nDigite os n�meros: ");
                    while(i<qtd){
                        scanf("%d",&n);
                        if(n>=10 && n<=20){
                            soma = soma+n;
                            i++;
                        }else{
                            printf("Digite apenas n�meros entre 10 e 20!\n");
                        }
                    }
                    printf("Resultado da soma: %d\n\n",soma);
                    i=0;
                    soma=0;
                    break;
                    
            case 3: printf("\nOp��o 3 escolhida\n");
                    while(i<10){
                        printf("Bom dia\n");
                        i++;
                    }
                    i=0;
                    break;
                    
            case 4: printf("\nOp��o 4 escolhida. Fim.");
                    break;
                    
            default: printf("\nOp��o inv�lida.\n");
                    break;
        }
    }
    getch();
    return 0;
}

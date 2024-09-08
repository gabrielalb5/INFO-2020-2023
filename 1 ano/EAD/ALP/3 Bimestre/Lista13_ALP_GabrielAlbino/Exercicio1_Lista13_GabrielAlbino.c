#include <stdio.h>
#include <locale.h>
int main(){

    int op, x;
    float n1, n2, n3, n4, n5, r;
    setlocale(LC_ALL,"Portuguese");
    printf("Menu\n");
    printf("1) Soma de 5 números inteiros.\n");
    printf("2) Multiplicação de 5 números inteiros.\n");
    printf("3) Ler x. Verificar se x é divisível por 5 e 3 ao mesmo tempo.\n");
    printf("4) Ler x. Verificar se x é divisível por 2 e 5 ao mesmo tempo.\n");
    printf("Digite sua escolha: ");
    scanf("%d",&op);
    
    switch(op){
        case 1: printf("Você escolheu a opção 1\n");
                printf("Digite cinco números: ");
                scanf("%f",&n1);
                scanf("%f",&n2);
                scanf("%f",&n3);
                scanf("%f",&n4);
                scanf("%f",&n5);
                
                r = n1+n2+n3+n4+n5;
                
                printf("Resultado: %.2f", r);
                break;
        case 2: printf("Você escolheu a opção 2\n");
                printf("Digite cinco números: ");
                scanf("%f",&n1);
                scanf("%f",&n2);
                scanf("%f",&n3);
                scanf("%f",&n4);
                scanf("%f",&n5);
                
                r = n1*n2*n3*n4*n5;
                
                printf("Resultado: %.2f", r);
                break;
        case 3: printf("Você escolheu a opção 3\n");
                printf("Digite um número: ");
                scanf("%d",&x);
                
                if(x%3==0 && x%5==0){
                    printf("Sim, é divisível por 5 e 3 ao mesmo tempo.");
                }else{
                    printf("Nao é divisível por 5 e 3 ao mesmo tempo.");
                }
                break;
        case 4: printf("Você escolheu a opção 4\n");
                printf("Digite um número: ");
                scanf("%d",&x);
                
                if(x%2==0 && x%5==0){
                    printf("Sim, e divisível por 2 e 5 ao mesmo tempo.");
                }else{
                    printf("Nao e divisível por 2 e 5 ao mesmo tempo.");
                }
                break;
        default: printf("Opção inválida");
    }
    getch();
    return 0;
}

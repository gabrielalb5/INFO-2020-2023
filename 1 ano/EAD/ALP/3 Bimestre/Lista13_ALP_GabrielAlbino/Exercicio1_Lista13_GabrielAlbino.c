#include <stdio.h>
#include <locale.h>
int main(){

    int op, x;
    float n1, n2, n3, n4, n5, r;
    setlocale(LC_ALL,"Portuguese");
    printf("Menu\n");
    printf("1) Soma de 5 n�meros inteiros.\n");
    printf("2) Multiplica��o de 5 n�meros inteiros.\n");
    printf("3) Ler x. Verificar se x � divis�vel por 5 e 3 ao mesmo tempo.\n");
    printf("4) Ler x. Verificar se x � divis�vel por 2 e 5 ao mesmo tempo.\n");
    printf("Digite sua escolha: ");
    scanf("%d",&op);
    
    switch(op){
        case 1: printf("Voc� escolheu a op��o 1\n");
                printf("Digite cinco n�meros: ");
                scanf("%f",&n1);
                scanf("%f",&n2);
                scanf("%f",&n3);
                scanf("%f",&n4);
                scanf("%f",&n5);
                
                r = n1+n2+n3+n4+n5;
                
                printf("Resultado: %.2f", r);
                break;
        case 2: printf("Voc� escolheu a op��o 2\n");
                printf("Digite cinco n�meros: ");
                scanf("%f",&n1);
                scanf("%f",&n2);
                scanf("%f",&n3);
                scanf("%f",&n4);
                scanf("%f",&n5);
                
                r = n1*n2*n3*n4*n5;
                
                printf("Resultado: %.2f", r);
                break;
        case 3: printf("Voc� escolheu a op��o 3\n");
                printf("Digite um n�mero: ");
                scanf("%d",&x);
                
                if(x%3==0 && x%5==0){
                    printf("Sim, � divis�vel por 5 e 3 ao mesmo tempo.");
                }else{
                    printf("Nao � divis�vel por 5 e 3 ao mesmo tempo.");
                }
                break;
        case 4: printf("Voc� escolheu a op��o 4\n");
                printf("Digite um n�mero: ");
                scanf("%d",&x);
                
                if(x%2==0 && x%5==0){
                    printf("Sim, e divis�vel por 2 e 5 ao mesmo tempo.");
                }else{
                    printf("Nao e divis�vel por 2 e 5 ao mesmo tempo.");
                }
                break;
        default: printf("Op��o inv�lida");
    }
    getch();
    return 0;
}

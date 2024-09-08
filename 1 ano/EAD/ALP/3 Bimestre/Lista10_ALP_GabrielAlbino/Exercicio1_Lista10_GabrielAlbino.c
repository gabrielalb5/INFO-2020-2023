#include <stdio.h>
#include <math.h>
int main(){
    
    int opc;
    float  n1, n2, n3, r;
    
    printf("Menu de opcoes:\n");
    printf("1. Somar dois numeros\n");
    printf("2. Raiz quadrada de um numero\n");
    printf("3. Media de tres numeros\n");
    printf("Digite a opcao desejada: ");
    scanf("%d",&opc);
    
    switch(opc){
        case 1: printf("\nVoce escolheu a opcao 1");
                printf("\ndigite dois numeros: ");
                scanf("%f %f",&n1,&n2);
                r = n1+n2;
                printf("Resultado da soma: %.2f", r);
                break;
        case 2: printf("\nVoce escolheu a opcao 2");
                printf("\ndigite um numero: ");
                scanf("%f",&n1);
                r = sqrt(n1);
                printf("Resultado da raiz: %.2f", r);
                break;
        case 3: printf("\nVoce escolheu a opcao 3");
                printf("\ndigite tres numeros: ");
                scanf("%f %f %f",&n1,&n2,&n3);
                r = (n1+n2+n3)/3;
                printf("Resultado da media: %.2f", r);
                break;
        default: printf("Opcao invalida");
    }
    
    getch();
    return 0;
}

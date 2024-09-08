#include <stdio.h>
int main(){
    
    int opc;
    float sal, imp, nsal, c;
    printf("Menu de opcoes:\n");
    printf("1. Imposto\n");
    printf("2. Novo salario\n");
    printf("3. Classificacao\n");
    printf("Digite a opcao desejada: ");
    scanf("%d",&opc);
    
    switch(opc){
        case 1: printf("\nVoce escolheu a opcao 1");
                printf("\ndigite seu salario: ");
                scanf("%f",&sal);
                
                if(sal>=0 && sal<1000){
                    imp = sal*0.05;
                    printf("Valor do imposto: %.2f",imp);
                }
                else if(sal>=1000 && sal<=3000){
                    imp = sal*0.10;
                    printf("Valor do imposto: %.2f",imp);
                }
                else if(sal>3000){
                    imp = sal*0.15;
                    printf("Valor do imposto: %.2f",imp);
                }else
                    printf("Invalido");
                break;
        case 2: printf("\nVoce escolheu a opcao 2");
                printf("\ndigite seu salario: ");
                scanf("%f",&sal);
                
                if(sal>3000){
                    nsal = sal+25;
                    printf("Valor do novo salario: %.2f",nsal);
                }else if(sal>=1000 && sal<=3000){
                    nsal = sal+50;
                    printf("Valor do novo salario: %.2f",nsal);
                }else if(sal>=0 && sal<1000){
                    nsal = sal+100;
                    printf("Valor do novo salario: %.2f",nsal);
                }else
                    printf("Invalido");
                break;
        case 3: printf("\nVoce escolheu a opcao 3");
                printf("\ndigite seu salario: ");
                scanf("%f",&sal);
                
                if(sal>=0 && sal<=1000){
                    printf("Baixa remuneracao");
                }else if(sal>1000){
                    printf("Alta remuneracao");
                }else
                    printf("Invalido");
                break;
        default: printf("Opcao invalida");
    }
    
    getch();
    return 0;
}

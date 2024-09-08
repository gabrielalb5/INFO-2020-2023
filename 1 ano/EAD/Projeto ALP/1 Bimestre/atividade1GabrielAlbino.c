#include <stdio.h>
int main(){

    float salario, conta1, conta2, multa1, multa2, restosalario;
    
    printf("Digite o salario: ");
    scanf("%f", &salario);
    printf("Digite a primeira conta: ");
    scanf("%f", &conta1);
    printf("Digite a segunda conta: ");
    scanf("%f", &conta2);
    
    multa1=(conta1*2)/100;
    multa2=(conta2*2)/100;

    restosalario= salario-((conta1+multa1)+(conta2+multa2));
    
    printf("O resto do salario e: %.2f", restosalario);
    
    return 0;
}


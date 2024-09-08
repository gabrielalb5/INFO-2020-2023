#include <stdio.h>
int main(){
    
    float sal, bonus, salfinal;
    
    printf("Digite o valor do salario: R$");
    scanf("%f",&sal);
    
    bonus = 0.12;
    salfinal = sal+(sal*bonus);
    
    printf("Salario com bonus: R$%.2f", salfinal);
    
    getch();
    return 0;
}


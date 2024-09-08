#include <stdio.h>
int main(){
    
    int sal, qwatt;
    float val_qwatt, val;
    
    printf("Digite o valor do salario: R$");
    scanf("%d", &sal);
    printf("Digite a quantidade de quilowatts: ");
    scanf("%d", &qwatt);
    
    val = (sal*2)/100;
    val_qwatt = val/qwatt;
    
    printf("O valor de cada quilowatt é de aproxiamdamente R$%.2f\n", val_qwatt);
    printf("O valor a ser pago é de R$%.2f\n", val);
    
    val = val - ((val*15)/100);
    
    printf("O valor com desconto de 15 porcento sera de R$%.2f", val);

    return 0;
}

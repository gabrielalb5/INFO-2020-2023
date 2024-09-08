#include <stdio.h>
int main(){
    
    int sal, mesada, filho1, filho2, filho3;
    
    printf("Digite o salario: R$");
    scanf("%d",&sal);
    
    mesada = (sal*2)/100;
    
    filho1 = (mesada*50)/100;
    filho2 = (mesada*30)/100;
    filho3 = (mesada*20)/100;
    
    printf("O primeiro filho vai receber: R$%d\n", filho1);
    printf("O segundo filho vai receber: R$%d\n", filho2);
    printf("O terceiro filho vai receber: R$%d", filho3);
    
    return 0;
}

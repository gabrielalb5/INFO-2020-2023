#include <stdio.h>
#include <math.h>
int main(){
    
    int a, b, num_esc;
    float r; 
    
    printf("Digite o primeiro numero (a): ");
    scanf("%d",&a);
    printf("Digite o segundo numero (b): ");
    scanf("%d",&b);
    
    if(a>=1 && b>=1){
        printf("Menu de opcoes:\n");
        printf("1) Calculo de R1\n");
        printf("2) Calculo de R2\n");
        printf("3) Calculo de R3\n");
        printf("Digite sua escolha: ");
        scanf("%d",&num_esc);
        
        if(num_esc==1){
            r=pow(a,2)/(a+2);
            printf("Resultado de R1: %.2f", r);
        }
        else if(num_esc==2){
            r=(b+pow(a,2))/(a+b);
            printf("Resultado de R2: %.2f", r);
        }else if(num_esc==3){
            r=(sqrt(a+b)+pow(a,3))/(b);
            printf("Resultado de R3: %.2f", r);
        }else
            printf("Opcao invalida.Fim");
    }else 
        printf("Dados invalidos.Fim");
    
    getch();
    return 0;
}

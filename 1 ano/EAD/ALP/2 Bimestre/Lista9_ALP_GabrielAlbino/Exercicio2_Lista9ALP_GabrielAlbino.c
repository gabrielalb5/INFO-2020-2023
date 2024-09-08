#include <stdio.h>
int main(){
    
    int n1, n2, n3;
    
    printf("Digite o primeiro numero: ");
    scanf("%d",&n1);
    printf("Digite o segundo numero: ");
    scanf("%d",&n2);
    printf("Digite o terceiro numero: ");
    scanf("%d",&n3);
    
    if(n1>=0 && n2>=0 && n3>=0){
        if((n1==n2) && (n2==n3)){
            printf("Todos os numeros sao iguais");
        }else if(n1==n2){
            printf("Primeiro e Segundo sao numeros iguais");
        }else if(n2==n3){
            printf("Segundo e Terceiro sao numeros iguais");
        }else if(n3==n1){
            printf("Primeiro e Terceiro sao numeros iguais");
        }else
        	printf("Todos os numeros sao diferentes");
    }else 
        printf("Erro, valores invalidos");

    getch();
    return 0;
}

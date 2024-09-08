#include <stdio.h>
int main(){
    
    int idade;
    
    printf("Digite a idade: ");
    scanf("%d",&idade);
    
    if(idade>=18){
        printf("Maior de idade");
    }
    if(idade<18){
        printf("Menor de idade");
    }
    
    getch();
    return 0;
}

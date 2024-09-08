#include <stdio.h>
int main(){
    
    int num, soma;
    num=0;
    soma=0;
    
    while(num>=0){
        printf("Digite um numero:");
        scanf("%d",&num);
        if(num%5==0 && num>0){
        soma=soma+num;
        }
    }
    printf("Soma = %d",soma);
    
    getch();
    return 0;
}

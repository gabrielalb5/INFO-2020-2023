#include <stdio.h>
int main(){
    
    int n1, n2;
    
    printf("Digite o primeiro numero: ");
    scanf("%d", &n1);
    printf("Digite o segundo numero: ");
    scanf("%d", &n2);
    
    if(n1==n2){
    	printf("Numeros iguais");
    }else if(n1>n2){
        printf("O maior numero é %d e o menor é %d", n1, n2);
    }else{
        printf("O maior numero é %d e o menor é %d", n2, n1);
    }
    
    getch();
    return 0;
}

#include <stdio.h>
int main(){
    
    int n1, n2;
    
    printf("Digite o primeiro numero: ");
    scanf("%d",&n1);
    printf("Digite o segundo numero: ");
    scanf("%d",&n2);
    
    if(((n1%2)==0) && ((n2%2)==0)){
        printf("Ambos são pares");
    }
    else if(((n1%2)!=0) && ((n2%2)!=0)){
        printf("Ambos são ímpares");
    }
    else if(((n1%2)==0) && ((n2%2)!=0)){
        printf("O primeiro é par e o segundo é ímpar");
    }
    else if(((n1%2)!=0) && ((n2%2)==0)){
        printf("O primeiro é ímpar e o segundo é par");
    }
    
    getch();
    return 0;
}

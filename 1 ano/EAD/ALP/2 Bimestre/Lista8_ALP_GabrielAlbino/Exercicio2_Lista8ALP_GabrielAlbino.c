#include <stdio.h>
int main(){
    
    int n1, n2;
    
    printf("Digite o primeiro numero: ");
    scanf("%d",&n1);
    printf("Digite o segundo numero: ");
    scanf("%d",&n2);
    
    if(((n1%2)==0) && ((n2%2)==0)){
        printf("Ambos s�o pares");
    }
    else if(((n1%2)!=0) && ((n2%2)!=0)){
        printf("Ambos s�o �mpares");
    }
    else if(((n1%2)==0) && ((n2%2)!=0)){
        printf("O primeiro � par e o segundo � �mpar");
    }
    else if(((n1%2)!=0) && ((n2%2)==0)){
        printf("O primeiro � �mpar e o segundo � par");
    }
    
    getch();
    return 0;
}

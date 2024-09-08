#include <stdio.h>
int main(){
    
    int n1, n2;
    
    printf("Digite dois numeros para verificar se um deles e impar: ");
    scanf("%d",&n1);
    scanf("%d",&n2);
    
    if(n1%2!=0 || n2%2!=0){
        printf("Sim");
    }else
        printf("Não");
    
    getch();
    return 0;
}

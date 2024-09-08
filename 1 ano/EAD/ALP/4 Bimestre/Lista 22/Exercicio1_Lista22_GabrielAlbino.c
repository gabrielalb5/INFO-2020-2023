#include <stdio.h>
#include<locale.h>
int main(){
    
    setlocale(LC_ALL,"Portuguese");
    int i, n[10], par;
    
    for(i=0;i<10;i++){
        printf("Digite um número: ");
        scanf("%d",&n[i]);
    }
    printf("\nNúmeros pares:\n");
    for(i=0;i<10;i++){
        if(n[i]%2==0){
            par = n[i];
            printf("Número %d, posição %d\n", par, i);
        }
    }
    return 0;
}

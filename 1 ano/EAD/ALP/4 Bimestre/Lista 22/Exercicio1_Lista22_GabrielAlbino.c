#include <stdio.h>
#include<locale.h>
int main(){
    
    setlocale(LC_ALL,"Portuguese");
    int i, n[10], par;
    
    for(i=0;i<10;i++){
        printf("Digite um n�mero: ");
        scanf("%d",&n[i]);
    }
    printf("\nN�meros pares:\n");
    for(i=0;i<10;i++){
        if(n[i]%2==0){
            par = n[i];
            printf("N�mero %d, posi��o %d\n", par, i);
        }
    }
    return 0;
}

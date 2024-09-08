#include <stdio.h>
#include<locale.h>
int main(){
    
    setlocale(LC_ALL,"Portuguese");
    int i, n[10], par=0, impar=0, s, m, cont=0;
    
    for(i=0;i<10;i++){
        printf("Digite um número: ");
        scanf("%d",&n[i]);
    }
    for(i=0;i<10;i++){
        if(n[i]%2==0){
            par=par+n[i];
        }else{
            impar=impar+n[i];
            cont++;
        }
    }
    s=par;
    m=impar/cont;
    printf("\nSoma dos números pares: %d",s);
    printf("\nMédia dos números impares: %d",m);
    return 0;
}

#include <stdio.h>
#include <locale.h>
int main(){
    
    int p, num, cont;
    p=0;
    cont=0;
    setlocale(LC_ALL,"Portuguese");
    
    while(cont<10){
        printf("Digite um n�mero: ");
        scanf("%d",&num);
        if(num%2==0){
            p++;
        }
    cont++;
    }
    printf("Foram digitados %d n�meros pares.",p);

    return 0;
}

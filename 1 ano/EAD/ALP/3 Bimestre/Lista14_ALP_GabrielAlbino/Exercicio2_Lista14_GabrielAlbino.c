#include <stdio.h>
#include <locale.h>
int main(){
    
    int soma, n;
    soma=0;
    n=0;
    setlocale(LC_ALL,"Portuguese");
    
    while(n<=100){
        if(n%2!=0){
            soma=soma+n;
        }
    n++;
    }
    printf("A soma de todos os n�meros �mpares de 1 a 100 � = %d",soma);

    return 0;
}

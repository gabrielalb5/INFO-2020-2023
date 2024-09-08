#include <stdio.h>
#include <math.h>
int main(){
    
    float n1, n2, soma, sub, r;
    
    printf("Digite o primeiro numero: ");
    scanf("%f",&n1);
    printf("Digite o segundo numero: ");
    scanf("%f",&n2);
    
    soma = n1+n2;
    sub = n1-n2;
    
    if((soma)>10){
        r = pow(soma,2);
        printf("Resultado: %.2f\n", r);
    }
    if(sub<0){
        r = sub;
        printf("Resultado: %.2f", r);
    }
    
    getch();
    return 0;
}


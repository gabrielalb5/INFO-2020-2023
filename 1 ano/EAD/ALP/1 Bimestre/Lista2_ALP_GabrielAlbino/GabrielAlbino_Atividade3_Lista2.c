#include <stdio.h>
int main(){
    
    float n, a;
    
    printf("Digite um número: ");
    scanf("%f", &n);
    
    a = (n*n+n/2)*(n-((n+1)/2));
    
    printf("a = %.2f\n", a);


    return 0;
}



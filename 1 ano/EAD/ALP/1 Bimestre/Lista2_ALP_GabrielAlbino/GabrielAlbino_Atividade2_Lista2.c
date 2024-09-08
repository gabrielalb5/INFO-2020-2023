#include <stdio.h>
int main(){
    
    float n, a, b, c, d, e;
    
    printf("Digite um número: ");
    scanf("%f", &n);
    
    a = n*n;
    b = n*n*n;
    c = n*n*n*n;
    d = (n*n)+5;
    e = (n*n)+(n/2)+10;
    
    printf("a = %.2f\n", a);
    printf("b = %.2f\n", b);
    printf("c = %.2f\n", c);
    printf("d = %.2f\n", d);
    printf("e = %.2f", e);

    return 0;
}

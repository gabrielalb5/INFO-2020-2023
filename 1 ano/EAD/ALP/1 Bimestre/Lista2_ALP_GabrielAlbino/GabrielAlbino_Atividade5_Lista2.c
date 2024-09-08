#include <stdio.h>
#include <math.h>
int main(){
    
    float a, b, c, r1, r2;
    
    printf("Digite o a: ");
    scanf("%f", &a);
    printf("Digite o b: ");
    scanf("%f", &b);
    printf("Digite o c: ");
    scanf("%f", &c);
    
    r1 = (-b+(sqrt((b*b)-(4*a*c))))/2*a;
    r2 = (-b-(sqrt((b*b)-(4*a*c))))/2*a;
    
    printf("A raiz 1 e = %.2f\n", r1);
    printf("A raiz 2 e = %.2f ", r2);

    return 0;
}

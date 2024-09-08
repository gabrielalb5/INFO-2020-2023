#include <stdio.h>
#include <math.h>
int main(){
    
    float a, b, c, x;
    
    printf("Digite o valor de a: ");
    scanf("%f",&a);
    printf("Digite o valor de b: ");
    scanf("%f",&b);
    printf("Digite o valor de c: ");
    scanf("%f",&c);
    
    x=(sqrt(a)+b)/(pow(c,2)+a);
    
    printf("O valor de x e: %.2f", x);
    
    getch();
    return 0;
}


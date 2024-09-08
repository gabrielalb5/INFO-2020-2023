#include <stdio.h>
#include <math.h>
int main(){
    
    int n1, n2;
    float x, y, z;

    printf("Digite o valor de n1: ");
    scanf("%d", &n1);
    printf("Digite o valor de n2: ");
    scanf("%d", &n2);
    
    x = pow(n1,3)/3;
    y = (pow(n1,2)+pow(n2,2))/(n2-n1);
    z = (sqrt(n1+n2)+pow(n2,3))/((10*n2)/2);
    
    printf("O valor de x e = %.2f\n", x);
    printf("O valor de y e = %.2f\n", y);
    printf("O valor de z e = %.2f\n", z);
    
    return 0;
}


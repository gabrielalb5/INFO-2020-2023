#include <stdio.h> 
#include<math.h>
int main(){
    
    float a, b, c, hipotenusa;
    
    printf("Digite o primeiro cateto: ");
    scanf("%f", &b);
    printf("Digite o segundo cateto: ");
    scanf("%f", &c);
    
    a = (b*b)+(c*c);
    hipotenusa = sqrt(a);
    
    printf("A hipoteusa e: %.2f", hipotenusa);

    return 0;
}

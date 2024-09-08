#include <stdio.h>
int main(){
    
    float n1, n2, n3, n4, n5, p1, p2, p3, p4, p5, m;
    
    printf("Digite a primeira nota e seu peso: ");
    scanf("%f", &n1);
    scanf("%f", &p1);
    printf("Digite a segunda nota e seu peso: ");
    scanf("%f", &n2);
    scanf("%f", &p2);
    printf("Digite a terceira nota e seu peso: ");
    scanf("%f", &n3);
    scanf("%f", &p3);
    printf("Digite a quarta nota e seu peso: ");
    scanf("%f", &n4);
    scanf("%f", &p4);
    printf("Digite a quinta nota e seu peso: ");
    scanf("%f", &n5);
    scanf("%f", &p5);
    
    m = ((n1*p1)+(n2*p2)+(n3*p3)+(n4*p4)+(n5*p5))/(p1+p2+p3+p4+p5);
    
    printf("A media ponderada é: %.2f", m);

    return 0;
}

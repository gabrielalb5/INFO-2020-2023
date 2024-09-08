#include <stdio.h>
int main(){
    
    float P1, T1, P2, T2, notafinal;
    
    printf("Digite a nota ds primeira avaliacao (P1): ");
    scanf("%f",&P1);
    P1 = (P1*35)/100;
    
    printf("Digite a nota do primeiro trabalho (T1): ");
    scanf("%f",&T1);
    T1 = (T1*15)/100;
    
    printf("Digite a nota da segunda avaliacao (P2): ");
    scanf("%f",&P2);
    P2 = (P2*40)/100;
    
    printf("Digite a nota do segundo trabalho (T2): ");
    scanf("%f",&T2);
    T2 = (T2*10)/100;
    
    notafinal = P1+T1+P2+T2;
    
    printf("Nota final: %.2f", notafinal);
    
	getch();
    return 0;
}

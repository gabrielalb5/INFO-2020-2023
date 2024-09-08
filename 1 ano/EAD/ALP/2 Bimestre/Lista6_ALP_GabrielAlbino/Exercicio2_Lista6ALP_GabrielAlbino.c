#include <stdio.h>
int main(){
    
    float A, B, dif;
    
    printf("Digite dois numeros:\n");
    scanf("%f",&A);
    scanf("%f",&B);
    
    if(A>B){
        dif = A-B;
        printf("A diferença do maior pelo menor e = %.2f", dif);
    }
    if(B>A){
        dif = B-A;
        printf("A diferença do maior pelo menor e = %.2f", dif);
    }
    
    getch();
    return 0;
}


#include <stdio.h>
int main(){
    
    float A, B, dif;
    
    printf("Digite dois numeros:\n");
    scanf("%f",&A);
    scanf("%f",&B);
    
    if(A>B){
        dif = A-B;
        printf("A diferenša do maior pelo menor e = %.2f", dif);
    }
    if(B>A){
        dif = B-A;
        printf("A diferenša do maior pelo menor e = %.2f", dif);
    }
    
    getch();
    return 0;
}

